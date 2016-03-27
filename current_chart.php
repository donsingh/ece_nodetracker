<?php
	
	$sql = "SELECT (sum(data)/1000),DATE_FORMAT( date, '%e' ) AS division FROM (
			SELECT *,actpt AS data FROM `three_phase` WHERE node IN (1,2,3) AND MONTH(date) = '".date("m",strtotime($today))."'
			UNION
			SELECT *,actp AS data FROM `single_phase` WHERE node IN (26,27,32,34,88,28)  AND MONTH(date) = '".date("m",strtotime($today))."'
			) t GROUP BY division";
	
	$qryDates ="SELECT date, DATE_FORMAT( date, '%m' ) AS division FROM three_phase GROUP by division";
	$result = mysqli_query($mysqli, $sql);
	
	$times = array(array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array());
	
	if($result){
		while($row = mysqli_fetch_array($result)){
			array_push($times[intval($row[1])],$row[0]);
		}
	}
	if($result2){
		while($row = mysqli_fetch_array($result2)){
			array_push($times[intval($row[1])],$row[0]);
		}
	}
	if($result3){
		while($row = mysqli_fetch_array($result3)){
			array_push($times[intval($row[1])],$row[0]);
		}
	}
	
	$clean = (array_filter($times));
	$labels = array();
	$p1 = array();
	$p2 = array();
	$p3 = array();
	$total = array();
	$ctr=0;
	foreach($clean as $k => $v){
		array_push($labels, $k);
		array_push($p1, $v[0]);
		if(isset($v[1]))array_push($p2, $v[1]);
		if(isset($v[2]))array_push($p3, $v[2]);
		
		if(sizeof($total)==0){
			array_push($total,array_sum($v));
		}else{
			
			array_push($total,array_sum($v));
			$in = sizeof($total)-1;
			$total[$in] += $total[$in-1];
			
		}
	}
?>

	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<h4 class="text-center">
				Daily Power Consumption for <?php echo date("F Y", strtotime($today));?>
			</h4>
		</div>
		<div class="col-md-4 text-right">
			<form class="form-inline" role="form" method="GET" action="dashboard.php">
				<div class="form-group" style="width:100%; text-align:center;">
					<label for="selectDate">
						Select Month:
					</label>
					<select class='form-control' id='selectDate' name="date">
						<?php
							$temp = date("Y-m-d",strtotime($today));
							$lol = mysqli_query($mysqli,$qryDates);
							while($dates = mysqli_fetch_array($lol)){
								$chk = ($dates[0]==$temp)?"selected='selected'":" ";
								echo "<option value='".$dates[0]."' ".$chk.">".date("F Y",strtotime($dates[0]))."</option>";
							}
						?>
					</select>
					<button type="submit" class="btn btn-default">
					Submit
				</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			
		</div>
		<div class="col-md-2">
		</div>
	</div>
		
	</div>
	<div id="container">
	</div>
<script>
var aircon = [8,28,49,52,53,54,1,10,19,20];
var lights = [27,18,2,4,7,36,32];
var outlet = [12,15,26,50,51,3,6,22,13];

$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
		},
        title: {
            text: ''
        },
        xAxis: {
            categories: [<?php echo join(",", $labels);?>],
			title: {
                text: 'Day of the Month'
            }
        },
        yAxis: [{ // Secondary yAxis
            min: 0,
            title: {
                text: 'Megawatts'
            }

        }],
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<small>Time Frame : {point.key}:00:00 - {point.key}:59:59</small><br>',
            pointFormat: ' <br>{series.name} = <b>{point.y:,.2f} kWh</b>',
			valueDecimals: 2
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
        series: [{
            name: 'Daily Consumption',
            data: [<?php echo join(",", $p1);?>]
        }]
    });
});
</script>
