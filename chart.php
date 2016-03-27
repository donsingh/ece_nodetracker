<?php
	include("sql_connect.php");
	
	include("menu.php");
	
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
	include("footer.php");
?>
<script type='text/javascript' src='js/highstock.js'></script>
<script type='text/javascript' src='js/exporting.js'></script>
<div class="templatemo-content-wrapper">
	<div class="templatemo-content">
	  <h1>Power Consumption for Node # <?php echo $_GET['node'];?></h1>
	  <p>Chart will update once new data is received!</p>
	  <div class="row">
		<?php include("test2.php");?>
	  </div>
	</div>
</div>