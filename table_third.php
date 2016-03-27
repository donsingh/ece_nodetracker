<?php
	include("sql_connect.php");
	
	include("menu.php");
	
	include("footer.php");
	
	if(isset($_GET['startDate'])){
		$today = $_GET['startDate'];
	}else{
		$today = date("Y-m-d");
	}
	
	if(isset($_GET['endDate'])){
		$end = $_GET['endDate'];
	}else{
		$end = date("Y-m-d");
	}
	

	$sql = "SELECT * FROM single_phase WHERE date BETWEEN '".$today."' AND '".$end."'";
	$result = mysqli_query($mysqli,$sql);
	
?>
<link rel="stylesheet" href="css/datatables.min.css">
<link rel="stylesheet" href="css/datepicker.css">
<script type='text/javascript' src='js/datatables.min.js'></script>
<script type='text/javascript' src='js/bootstrap-datepicker.js'></script>
<style>
	#example{
		padding:25px;
	}
</style>
<div class="templatemo-content-wrapper">
	<div class="templatemo-content">
		<h1>Tabular Data for <?php echo date("F j,Y",strtotime($today)); if(isset($_GET['endDate'])){ echo " to ".date("F j,Y",strtotime($end));}?></h1>
		<p>Third Floor</p>
		<div class="row">
			<div class='col-md-2'>
			</div>
			<div class='col-md-8'>
			<form class='form-inline' method="get" action='table_third.php'>
				<label for="startDate">
						From:
				</label>
				<input class='form-control' id="startDate" name="startDate" type="text">
				<label for="endDate">
						To:
				</label>
				<input class='form-control' id="endDate" name="endDate" type="text">
				<button type='submit' class='btn btn-primary'>
					Submit
				</button>
            </form>
			</div>
			<div class='col-md-2'>
			</div>
		</div>
		<div class="row">
		<table id="example" class="table table-bordered display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Node</th>
					<th>Date</th>
					<th>Time</th>
					<th>VRMS</th>
					<th>IRMS</th>
					<th>Frequency</th>
					<th>PowerFactor</th>
					<th>ACTP</th>
					<th>REAP</th>
					<th>APPP</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Node</th>
					<th>Date</th>
					<th>Time</th>
					<th>VRMS</th>
					<th>IRMS</th>
					<th>Frequency</th>
					<th>PowerFactor</th>
					<th>ACTP</th>
					<th>REAP</th>
					<th>APPP</th>
				</tr>
			</tfoot>
			<tbody>
				<?php
					if($result){
						while($row = mysqli_fetch_array($result)){
							echo "<tr>";
							echo "<td align='center'>".$row[1]."</td>";
							echo "<td>".$row[2]."</td>";
							echo "<td>".$row[3]."</td>";
							echo "<td align='right'>".number_format($row[4],2)."</td>";
							echo "<td align='right'>".number_format($row[5],2)."</td>";
							echo "<td align='right'>".number_format($row[6],2)."</td>";
							echo "<td align='right'>".number_format($row[7],2)."</td>";
							echo "<td align='right'>".number_format($row[8],2)."</td>";
							echo "<td align='right'>".number_format($row[9],2)."</td>";
							echo "<td align='right'>".number_format($row[10],2)."</td>";
							echo "</tr>";
						}
					}
				?>
			</tbody>
		</table>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable({
		oLanguage: {
			sProcessing: "<img src='img/ajax-load.gif'>"
		},
		processing : true
	});
	$('#startDate').datepicker({format:'yyyy-mm-dd'});
	$('#endDate').datepicker({format:'yyyy-mm-dd'});
});
</script>