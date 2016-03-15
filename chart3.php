<?php
	include("sql_connect.php");
	
	if(isset($_GET['date'])){
		$today=$_GET['date'];
	}else{
		$today=date("Y-m-d");
	}
	
	if(isset($_GET['table'])){
		$tbl = $_GET['table'];
	}else{
		$tbl = 'single_phase';
	}

	if(isset($_GET['node'])){
		$node = $_GET['node'];
	}else{
		$node = 1;
	}
	
	$sql = "SELECT * FROM ".$tbl." WHERE date = '".$today."' AND node=".$node." ORDER BY indx ASC";
	$ops = "SELECT date FROM ".$tbl." GROUP BY date";
	$ops2 = mysqli_query($mysqli, $ops);
	
	$result = mysqli_query($mysqli, $sql);
	if(!$result){
		echo("Error description: " . mysqli_error($mysqli));
	}
	$power = ($tbl=='single_phase')?'actp':'actpt';
	$data = array();
	$last =0;
	while ($row = mysqli_fetch_array($result)) {
	   $data[] = "[".(strtotime($row['date'].$row['time'])*1000.).",".$row[$power]."]";
	   $last = $row[0];
	}
	$today = date("F j,Y",strtotime($today));
	$some = (count($data)>0)?"Mote # ".$node." data on ".$today:"NO DATA FOUND FOR ".$today;
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
        <link href="css/floor_3_node.css" rel="stylesheet">
		<style>
		body{
			margin-top:50px;
			margin-left:100px;
			margin-right:100px;
		}
		td:nth-child(odd) {
		  font-weight:bold;
		  text-align:right;
		}
		</style>
    </head>
    <body>
		<div class="row">
			<div class="col-md-2">
				<a href="index.php"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-hand-left"></span> Go Back</button></a>
			</div>
			<div class="col-md-7"></div>
			<div class="col-md-1">Select Date:</div>
			<div class="col-md-2">
				<select class='form-control' id='chartDate'>
					<?php
						$temp = date("Y-m-d",strtotime($today));
						while($dates = mysqli_fetch_array($ops2)){
							
							$chk = ($dates[0]==$temp)?"selected='selected'":" ";
							echo "<option value='".$dates[0]."' ".$chk.">".date("F j, Y",strtotime($dates[0]))."</option>";
						}
					?>
				</select>
			</div>
		</div>
        <div id='container'>
        </div>
		<hr>
		<h4 align='center'>Latest Mote Info</h4>
		<div id='latest'>
			<table class='table table-bordered'>
				<tr>
					<td>INDEX</td><td id='indx'></td><td>NODE</td><td id='loc'></td>
					<td>DATE</td><td id='dit'></td><td>TIME</td><td id='dtime'></td>
				</tr>
				<tr>
					<td></td><td></td><td>VRMS1</td><td id='vrms1'></td><td>IRMS1</td><td id='irms1'></td>
					<td>ACTP1</td><td id='actp1'></td>
				</tr>
				<tr>
					<td></td><td></td><td>VRMS2</td><td id='vrms2'></td><td>IRMS2</td><td id='irms2'></td>
					<td>ACTP2</td><td id='actp2'></td>
				</tr>
				<tr>
					<td></td><td></td><td></td><td></td><td></td><td></td>
					<td>ACTPT</td><td id='actpt'></td>
				</tr>
			</table>
        </div>
    </body>
</html>
<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/highstock.js'></script>
<script type='text/javascript' src='js/exporting.js'></script>
<script>
var last = <?php echo ($last!=0)?$last:0;?>;
$(function () {
	$("#chartDate").change(function(){
		window.location.href='chart3.php?table=<?php echo $tbl."&node=".$node;?>&date='+$(this).val();
	});
    Highcharts.setOptions({
        global : {
            useUTC : false
        }
    });

    // Create the chart
    $('#container').highcharts('StockChart', {
        chart : {
            events : {
                load : function () {
					var series = this.series[0];
					setInterval(function () {
						$.ajax({
							url: 'live-mote.php',
							type: 'GET',
							data: {
								table:'<?php echo $tbl;?>',
								date:'<?php echo $today;?>',
								node:'<?php echo $node;?>'
							},
							success: function(point) {
								//series.addPoint(point, true, true);
								var pt = [point[0],point[1]];
								var fill = point[2];
								if(last!=fill[0]){
									series.addPoint(pt, true, true);
									last = fill[0];
									
								}
								$("#indx").html(fill[0]);
								$("#loc").html(fill[1]);
								$("#dit").html(fill[2]);
								$("#dtime").html(fill[3]);
								$("#vrms1").html(fill[4]);
								$("#irms1").html(fill[5]);
								$("#actp1").html(fill[6]);
								$("#vrms2").html(fill[7]);
								$("#irms2").html(fill[8]);
								$("#actp2").html(fill[9]);
								$("#actpt").html(fill[10]);
							},
							cache: false
						});
					},2000);
					
                }
            }
        },

        rangeSelector: {
            buttons: [{
                count: 45,
                type: 'minute',
                text: '1 Hrs'
            }, {
                count: 720,
                type: 'minute',
                text: '12 Hrs'
            }, {
                type: 'all',
                text: 'All'
            }],
            inputEnabled: false,
            selected: 0,
			buttonSpacing:60,
			buttonTheme:{
				style: {
                    color: '#039',
                    fontWeight: 'bold',
					marginLeft: 50
                }
			}
        },
		/*navigator:{
			xAxis:{
				dateTimeLabelFormats:{
					millisecond: '%I:%M %P',
					second: '%I:%M %P',
					minute: '%I:%M %P',
					hour: '%I:%M %P',
					day: '%I:%M %P',
					week: '%I:%M %P',
					month: '%I:%M %P'
				}
			}
		},*/
        title : {
            text : '<?php echo $some; ?>',
			style: {
				fontSize:'2.5em'
			}
        },
		tooltip: {
            valueSuffix: ' Watts'
        },
        exporting: {
            enabled: true
        },
		/*xAxis:{
			dateTimeLabelFormats:{
				millisecond: '%I:%M %P',
				second: '%I:%M %P',
				minute: '%I:%M %P',
				hour: '%I:%M %P',
				day: '%I:%M %P',
				week: '%I:%M %P',
				month: '%I:%M %P'
			},
			crosshair:false
		},
		yAxis:{
			crosshair: true,
			
		},*/
        series : [{
            name : 'Power Consumption: ',
            data: [<?php echo (count($data)>0)?join($data, ','):""; ?>],
			pointStart: 0,
			marker:{
				enabled:true,
				radius:2.5
			}
        }]
    });

});	
</script>
