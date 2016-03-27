<?php
	include("menu.php");
	if(isset($_GET['date'])){
		$today = $_GET['date'];
	}else{
		$today = date("Y-m-d");
	}
	include("footer.php");
?>
		
<style>

.tt{
	position: relative;
	display: inline;
}

.fixed-time{
  position:fixed;
  top: 30%;
  right: 2%;
}
.pane-7{
	
}
</style>
<link href="css/floor_3_node.css" rel="stylesheet">
<div class="templatemo-content-wrapper">
	<div class="templatemo-content">
	  <h1>Current Readings</h1>
	  <p>Third Floor (Click on Node to See History)</p>
	  <div class="row">
		
    	<div class="btn-group" style="margin-left: 200px;width:100%; text-align:center;">
			<button type="button" class="type gAll btn btn-default active"><span class="glyphicon glyphicon-th"></span> All</button>
			<button type="button" class="type gAir btn btn-default"><span class="glyphicon glyphicon-tasks"></span> Aircon</button>
			<button type="button" class="type gLit btn btn-default"><span class="glyphicon glyphicon-certificate"></span> Lights</button>
			<button type="button" class="type gOut btn btn-default"><span class="glyphicon glyphicon-flash"></span> Outlets</button>
		</div>
		
		<div class="container" style='z-index: 1000; position:absolute;'>
				<!--PANEL 1-->
				<div class="panel panel-success pane-1">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">1</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-1-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-1-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 1-->
				<!--PANEL 2-->
				<div class="panel panel-success pane-2">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">2</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-2-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-2-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 2-->

				<!--PANEL 3-->
				<div class="panel panel-success pane-3">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">3</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-3-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-3-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 3-->

				<!--PANEL 4-->
				<div class="panel panel-success pane-4">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">4</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-4-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-4-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 4-->

				<!--PANEL 13-->
				<div class="panel panel-success pane-13">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">13</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-13-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-13-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 13-->

				<!--PANEL 6-->
				<div class="panel panel-success pane-6">
					<div class="panel-heading">
						<h6 class="panel-title">Node <span class="badge">6</span></h6>
					</div>
					<div class="panel-body">
						<span class="node-6-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-6-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 6-->

				<!--PANEL 7-->
				<div class="panel panel-success pane-7">
					<div class="panel-heading">
						<h7 class="panel-title">Node <span class="badge">7</span></h7>
					</div>
					<div class="panel-body">
						<span class="node-7-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-7-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 7-->

				<!--PANEL 22-->
				<div class="panel panel-success pane-22">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">22</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-22-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-22-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 22-->

				<!--PANEL 19-->
				<div class="panel panel-success pane-19">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">19</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-19-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-19-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 19-->

				<!--PANEL 10-->
				<div class="panel panel-success pane-10">
					<div class="panel-heading">
						<h9 class="panel-title">Node <span class="badge">10</span></h9>
					</div>
					<div class="panel-body">
						<span class="node-10-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-10-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 10-->
				<!--PANEL 20-->
				<div class="panel panel-success pane-20">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">20</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-20-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-20-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 20-->
				<!--PANEL 36-->
				<div class="panel panel-success pane-36">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">36</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-36-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-36-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 36-->
				<!--PANEL 32-->
				<div class="panel panel-success pane-32">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">32</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-32-data"></span> <span> W</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-32-time'> </span> </p>
					</div>
				</div>
				<!--END OF PANEL 32-->
		</div>
		<img src="img/third_sm.jpg" id="bg" alt="" style='z-index:-500;'>
		</div>

	  </div>
	</div>
</div>
<script type='text/javascript' src='js/custom.js'></script>


