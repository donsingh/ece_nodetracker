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
<link href="css/floor_5_node.css" rel="stylesheet">
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
	<img src="img/fifth.jpg" id="bg" alt="">
	<div class="container">
			<!--PANEL 1-->
			<div class="panel panel-success pane-54">
				<div class="panel-heading"> 
					<h3 class="panel-title">Node <span class="badge">54</span></h3> 
				</div> 
				<div class="panel-body"> 
					<span class="node-54-data"></span> <span> W</span>
					<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-54-time'> </span> </p>
				</div> 
			</div>
			<!--END OF PANEL 1-->
			
			<!--PANEL 2-->
			<div class="panel panel-success pane-18">
				<div class="panel-heading"> 
					<h3 class="panel-title">Node <span class="badge">18</span></h3> 
				</div> 
				<div class="panel-body"> 
					<span class="node-18-data"></span> <span> W</span>
					<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-18-time'> </span> </p>
				</div> 
			</div>
			<!--END OF PANEL 2-->
			
			<!--PANEL 3-->
			<div class="panel panel-success pane-52">
				<div class="panel-heading"> 
					<h3 class="panel-title">Node <span class="badge">52</span></h3> 
				</div> 
				<div class="panel-body"> 
					<span class="node-52-data"></span> <span> W</span>
					<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-52-time'> </span> </p>
				</div> 
			</div>
			<!--END OF PANEL 3-->
			
			
			<!--PANEL 1-->
			<div class="panel panel-success pane-53">
				<div class="panel-heading"> 
					<h3 class="panel-title">Node <span class="badge">53</span></h3> 
				</div> 
				<div class="panel-body"> 
					<span class="node-53-data"></span> <span> W</span>
					<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-53-time'> </span> </p>
				</div> 
			</div>
			<!--END OF PANEL 1-->
			
			<!--PANEL 2-->
			<div class="panel panel-success pane-49">
				<div class="panel-heading"> 
					<h3 class="panel-title">Node <span class="badge">49</span></h3> 
				</div> 
				<div class="panel-body"> 
					<span class="node-49-data"></span> <span> W</span>
					<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-49-time'> </span> </p>
				</div> 
			</div>
			<!--END OF PANEL 2-->
			
			<!--PANEL 3-->
			<div class="panel panel-success pane-50">
				<div class="panel-heading"> 
					<h3 class="panel-title">Node <span class="badge">50</span></h3> 
				</div> 
				<div class="panel-body"> 
					<span class="node-50-data"></span> <span> W</span>
					<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-50-time'> </span> </p>
				</div> 
			</div>
			<!--END OF PANEL 3-->
			
			<!--PANEL 3-->
			<div class="panel panel-success pane-51">
				<div class="panel-heading"> 
					<h3 class="panel-title">Node <span class="badge">51</span></h3> 
				</div> 
				<div class="panel-body"> 
					<span class="node-51-data"></span> <span> W</span>
					<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-51-time'> </span> </p>
				</div> 
			</div>
			<!--END OF PANEL 3-->
	</div>
	</div>
  </div>
</div>
<script type='text/javascript' src='js/custom.js'></script>