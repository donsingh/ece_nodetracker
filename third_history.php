<?php
	include("sql_connect.php");
	include("menu.php");
	if(isset($_GET['date'])){
		$today = $_GET['date'];
	}else{
		$today = date("Y-m-d");
	}
	include("footer.php");
?>
<div class="templatemo-content-wrapper">
	<div class="templatemo-content">
	  <h1>Power History</h1>
	  <p>Third Floor</p>
	  <div class="row">
		<?php
			include("sline.php");
		?>
	  </div>
	</div>
</div>
<script type='text/javascript' src='js/highcharts.js'></script>
<script type='text/javascript' src='js/exporting.js'></script>