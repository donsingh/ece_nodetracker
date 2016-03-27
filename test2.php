<?php
	include("sql_connect.php");
	
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
	$some = (count($data)>0)?"Node # ".$node." data on ".$today:"NO DATA FOUND FOR ".$today;
?>
		<div class="row">
			<form class="form-inline  pull-right" role="form" method="GET" action="chart.php">
				<div class="form-group" style="width:100%;">
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
					<input type='text' value='<?php echo $_GET['table'];?>' name='table' style='display:none;'>
					<input type='text' value='<?php echo $_GET['node'];?>' name='node' style='display:none;'>
					<button type="submit" class="btn btn-default">
					Submit
				</button>
				</div>
			</form>
			
			
			
			
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
				<?php if($tbl='three_phase'){echo "
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
				<!--END OF THREE PHASE-->
				<!--INSERT CODE FOR SINGLE PHASE HERE-->
				";}else{ echo "
				<tr>
					<td></td><td></td><td>VRMS</td><td id='vrms'></td><td>IRMS</td><td id='irms'></td>
					<td>ACTP</td><td id='actp'></td>
				</tr>
				<tr>
					<td>FREQ</td><td id='freq'></td><td>PWRF</td><td id='pwrf'></td>
					<td>REAP</td><td id='reap'></td><td>APPP</td><td id='appp'></td>
				</tr>
				";}?>
			</table>
        </div>

<script>
var last = <?php echo ($last!=0)?$last:0;?>;
$(document).ready(function(){
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
								if(fill[1]<25){
									$("#vrms1").html(fill[4]);
									$("#irms1").html(fill[5]);
									$("#actp1").html(fill[6]);
									$("#vrms2").html(fill[7]);
									$("#irms2").html(fill[8]);
									$("#actp2").html(fill[9]);
									$("#actpt").html(fill[10]);
								}else{
									$("#vrms").html(fill[4]);
									$("#irms").html(fill[5]);
									$("#actp").html(fill[6]);
									$("#freq").html(fill[7]);
									$("#pwrf").html(fill[8]);
									$("#reap").html(fill[9]);
									$("#appp").html(fill[10]);
								}
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
                text: '1 Hr'
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
        title : {
            text : '<?php echo $some; ?>',
			style: {
				fontSize:'1.8em'
			}
        },
		tooltip: {
            valueSuffix: ' Watts'
        },
        exporting: {
            enabled: true
        },
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
