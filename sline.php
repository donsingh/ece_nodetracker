<?php
	
	$sql = "SELECT (sum(data)/1000),DATE_FORMAT( time, '%H' ) AS division FROM (
			SELECT *,actpt AS data FROM `three_phase` WHERE node IN (1,2,3) AND date = '".$today."'
			UNION
			SELECT *,actp AS data FROM `single_phase` WHERE node IN (26,27,88,28)  AND date = '".$today."'
			) t GROUP BY division";
	$sql2 = "SELECT (sum(data)/1000),DATE_FORMAT( time, '%H' ) AS division FROM (
			SELECT *,actpt AS data FROM `three_phase` WHERE node IN (4,5,6) AND date = '".$today."'
			UNION
			SELECT *,actp AS data FROM `single_phase` WHERE node IN (30,31,32)  AND date = '".$today."'
			) t GROUP BY division";
	$sql3 = "SELECT (sum(data)/1000),DATE_FORMAT( time, '%H' ) AS division FROM (
			SELECT *,actpt AS data FROM `three_phase` WHERE node IN (7,8) AND date = '".$today."'
			UNION
			SELECT *,actp AS data FROM `single_phase` WHERE node IN (33,34,35)  AND date = '".$today."'
			) t GROUP BY division";
	$qryDates ="SELECT DISTINCT(date) FROM (
    SELECT DISTINCT(date) FROM three_phase
    UNION ALL
	SELECT DISTINCT(date) FROM single_phase) t";
	$result = mysqli_query($mysqli, $sql);
	$result2 = mysqli_query($mysqli, $sql2);
	$result3 = mysqli_query($mysqli, $sql3);
	$times = array(array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array());
	
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
				Hourly Power Consumption
			</h4>
		</div>
		<div class="col-md-4 text-right">
			<form class="form-inline" role="form" method="GET" action="third_history.php">
				<div class="form-group" style="width:100%; text-align:center;">
					<label for="selectDate">
						Select Day:
					</label>
					<select class='form-control' id='selectDate' name="date">
						<?php
							$temp = date("Y-m-d",strtotime($today));
							$lol = mysqli_query($mysqli,$qryDates);
							while($dates = mysqli_fetch_array($lol)){
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
            type: 'column',
			zoomType: 'xy',
			height: 600
			},
        title: {
            text: '<?php echo (isset($_GET['date']))?date("F j,Y",strtotime($_GET['date'])):date("F j,Y");?>'
        },
        xAxis: {
            categories: [<?php echo join(",", $labels);?>],
			title: {
                text: 'Grouped by each hour of the day'
            }
        },
        yAxis: [{ // Secondary yAxis
            gridLineWidth: 0,
            title: {
                text: 'Hourly Consumption',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                format: '{value} kWh',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                },
				rotation:-45,
				format:'{total:,.2f} kWh',
				y:-25,
				x:25
            }

        },{ // Primary yAxis
            labels: {
                format: '{value}Watt-Hour',
                style: {
                    color: Highcharts.getOptions().colors[5]
                }
            },
            title: {
                text: 'Total Consumption',
                style: {
                    color: Highcharts.getOptions().colors[5]
                }
            },
            opposite: true

        }],
        legend: {
            align: 'center',
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
            name: 'Aircon',
            data: [<?php echo join(",", $p1);?>]
        }, {
            name: 'Outlet',
            data: [<?php echo join(",", $p2);?>]
        },{
            name: 'Lights',
            data: [<?php echo join(",", $p3);?>]
        },{
            type: 'spline',
			yAxis:1,
            name: 'Total Consumption',
            data: [<?php echo join(",", $total);?>],
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        },{
            type: 'pie',
            name: 'Accumulative Consumption',
            data: [{
                name: 'Aircon',
                y: <?php echo array_sum($p1);?>,
                color: Highcharts.getOptions().colors[0] // Jane's color
            }, {
                name: 'Outlet',
                y: <?php echo array_sum($p2);?>,
                color: Highcharts.getOptions().colors[1] // John's color
            }, {
                name: 'Lights',
                y: <?php echo array_sum($p3);?>,
                color: Highcharts.getOptions().colors[2] // Joe's color
            }],
            center: [100, 80],
            size: 150,
            showInLegend: false,
            dataLabels: {
                enabled: false
            }
        }]
    });
});
</script>
