<?php
	include("sql_connect.php");
	if(isset($_GET['date'])){
		$today = $_GET['date'];
	}else{
		$today = date("Y-m-d");
	}
	if(isset($_GET['node'])){
		$node = $_GET['node'];
	}else{
		$node = 1;
	}
	$tbl = ($node > 25)? "single_phase":"three_phase";
	$set = array(0=>array(),1=>array(),2=>array(),3=>array(),4=>array(),5=>array(),6=>array(),7=>array(),8=>array(),	9=>array(),	10=>array(),	11=>array(),	12=>array(),	13=>array(),	14=>array(),15=>array(),	16=>array(),	17=>array(),	18=>array(),	19=>array(),	20=>array(),	21=>array(),	22=>array(),	23=>array());
	$sql = "SELECT * , sum( actp ) , DATE_FORMAT( time, '%H' ) AS division FROM ".$tbl." WHERE date='".$today."' AND node = ".$node." GROUP BY division";

	if($result = mysqli_query($mysqli, $sql)){
		while($row = mysqli_fetch_array($result)){
			$cur = date("H",strtotime($row[3]));
			array_push($set[intval($cur)],$row);
		}
		
		$label = array();
		$power = array();
		
		for($i = 0; $i <= 24;$i++){
			if(!empty($set[$i])){
				array_push($label,date("h:00 A",strtotime($set[$i][0][3])));
				array_push($power,$set[$i][0][11]);
			}
		}
	}
	$ops = "SELECT date FROM `single_phase` GROUP BY date";
	$ops2 = mysqli_query($mysqli, $ops);
	
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>ECE Node Tracker</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/daily.css" rel="stylesheet">
		<style>
		</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<h3 class="text-center">
					Chart
				</h3>
			</div>
			<div class="col-md-3">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<form class="form-inline" role="form" method="GET" action="daily.php">
					<div class="form-group" style="width:100%; text-align:center;">
						<label for="selectDate">
							Select Day:
						</label>
						<select class='form-control' id='selectDate' name="date">
							<?php
								$temp = date("Y-m-d",strtotime($today));
								while($dates = mysqli_fetch_array($ops2)){
									
									$chk = ($dates[0]==$temp)?"selected='selected'":" ";
									echo "<option value='".$dates[0]."' ".$chk.">".date("F j, Y",strtotime($dates[0]))."</option>";
								}
							?>
						</select>
						<button type="submit" class="btn btn-default">
						Submit
					</button>
					</div>
				</form>
			</div>
			<div class="col-md-2">
			</div>
		</div>
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>
	<div id="chart">
	</div>
	</body>
</html>
<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/highcharts.js'></script>
<script type='text/javascript' src='js/exporting.js'></script>
<script>
var aircon = [8,28,49,52,53,54,1,10,19,20];
var lights = [27,18,2,4,7,36,32];
var outlet = [12,15,26,50,51,3,6,22,13];
$(function () {
    $('#chart').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Hourly Consumption for '
        },
        xAxis: {
            categories: [
				<?php
					echo "'";
					echo join("','", $label);
					echo "'";
				?>
			]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Watt Consumption (kWh)'
            }
        },
		exporting:{
			enabled: true
		},
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{point.y:,.2f} Watts'
        },
        plotOptions: {
            column: {
				dataLabels: {
                    enabled: true,
					rotation: -90,
					align: 'left',
					inside:'true',
					y:0,
					verticalAlign:'top',
					formatter: function () {
						return (parseInt(this.y/1000)) + ' (kWh)';
					}
                }
            }
        },
        series: [{
			name: 'Power Consumption',
            data: [
			<?php
					echo join(",", $power);
					
			?>
			]
        }]
    });
});
</script>
