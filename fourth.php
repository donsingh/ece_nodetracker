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

</style>
<link href="css/floor_4_node.css" rel="stylesheet">
<div class="templatemo-content-wrapper">
	<div class="templatemo-content">
	  <h1>Current Readings</h1>
	  <p>Fourth Floor (Click on Node to See History)</p>
	  <div class="row">
		<div class="btn-group" style="margin-left: 230px;width:100%; text-align:center;">
			<button type="button" class="type gAll btn btn-default active"><span class="glyphicon glyphicon-th"></span> All</button>
			<button type="button" class="type gAir btn btn-default"><span class="glyphicon glyphicon-tasks"></span> Aircon</button>
			<button type="button" class="type gLit btn btn-default"><span class="glyphicon glyphicon-certificate"></span> Lights</button>
			<button type="button" class="type gOut btn btn-default"><span class="glyphicon glyphicon-flash"></span> Outlets</button>
		</div>
		
		<div class="container">
				<!--PANEL 1--><img src="img/fourth.jpg" id="bg" alt="">
				<div class="panel panel-success pane-15">
					<div class="panel-heading"> 
						<h3 class="panel-title">Node <span class="badge">15</span></h3> 
					</div> 
					<div class="panel-body"> 
						<span class="node-15-data"></span> <span> V</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-15-time'> </span> </p>
					</div> 
				</div>
				<!--END OF PANEL 1-->
				
				<!--PANEL 2-->
				<div class="panel panel-success pane-8">
					<div class="panel-heading"> 
						<h3 class="panel-title">Node <span class="badge">8</span></h3> 
					</div> 
					<div class="panel-body"> 
						<span class="node-8-data"></span> <span> V</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-8-time'> </span> </p>
					</div> 
				</div>
				<!--END OF PANEL 2-->
				
				<!--PANEL 3-->
				<div class="panel panel-success pane-12">
					<div class="panel-heading"> 
						<h3 class="panel-title">Node <span class="badge">12</span></h3> 
					</div> 
					<div class="panel-body"> 
						<span class="node-12-data"></span> <span> V</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-12-time'> </span> </p>
					</div> 
				</div>
				<!--END OF PANEL 3-->
				
				<!--PANEL 4-->
				<div class="panel panel-success pane-26">
					<div class="panel-heading"> 
						<h3 class="panel-title">Node <span class="badge">26</span></h3> 
					</div> 
					<div class="panel-body"> 
						<span class="node-26-data"></span> <span> V</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-26-time'> </span> </p>
					</div> 
				</div>
				<!--END OF PANEL 4-->
				
				<!--PANEL 4-->
				<div class="panel panel-success pane-27">
					<div class="panel-heading"> 
						<h4 class="panel-title">Node <span class="badge">27</span></h4> 
					</div> 
					<div class="panel-body"> 
						<span class="node-27-data"></span> <span> V</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-27-time'> </span> </p>
					</div> 
				</div>
				<!--END OF PANEL 4-->
				
				<!--PANEL 4-->
				<div class="panel panel-success pane-28">
					<div class="panel-heading"> 
						<h4 class="panel-title">Node <span class="badge">28</span></h4> 
					</div> 
					<div class="panel-body"> 
						<span class="node-28-data"></span> <span> V</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-28-time'> </span> </p>
					</div> 
				</div>
				<!--END OF PANEL 4-->
				
				
		</div>
		</div>

	  </div>
	</div>
</div>
<script type='text/javascript' src='js/custom.js'></script>