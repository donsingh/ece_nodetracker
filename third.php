<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>ECE Node Tracker</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/floor_5_node.css" rel="stylesheet">
		<style>
		.fixed-time{
		  position:fixed;
   		  top: 30%;
		  right: 2%;
		}
		</style>
	</head>
	<body>
		<h1 id='title' class="bg-success">Fifth Floor Node Layout</h1>
		<!--<div class="btn-group" role="group" aria-label="Default button group"> 
			<a href="index.php"><button type="button" class="btn btn-default">THIRD FLOOR</button></a>
			<a href="second.php"><button type="button" class="btn btn-default">FOURTH FLOOR</button></a>
			<a href="third.php"><button type="button" class="btn btn-default active">FIFTH FLOOR</button></a> 
		</div>-->
		<div class="btn-group" role="group" aria-label="Default button group">
			<a href="http://10.4.192.30/index.php"><button type="button" class="btn btn-default">THIRD FLOOR</button></a>
			<a href="http://10.4.192.89/second.php"><button type="button" class="btn btn-default">FOURTH FLOOR</button></a>
			<a href="http://10.4.192.88/third.php"><button type="button" class="btn btn-default active">FIFTH FLOOR</button></a>
		</div>
		<div class="btn-group" style="margin-left: 150px;margin-top:60px; width:100%; text-align:center;">
			<button type="button" class="type gAll btn btn-default active"><span class="glyphicon glyphicon-th"></span> All</button>
			<button type="button" class="type gAir btn btn-default"><span class="glyphicon glyphicon-tasks"></span> Aircon</button>
			<button type="button" class="type gLit btn btn-default"><span class="glyphicon glyphicon-certificate"></span> Lights</button>
			<button type="button" class="type gOut btn btn-default"><span class="glyphicon glyphicon-flash"></span> Outlets</button>
		</div>
		<a href="summary.php"><button class="btn btn-lg btn-danger" style="position:absolute;right:15;top:15;">
			<span class="glyphicon glyphicon-share"></span> Summary
		</button></a>
		<img src="img/fifth.jpg" id="bg" alt="">
		<div class="fixed-time alert alert-info">
			<span class="glyphicon glyphicon-time"><span> Server Time: </span><span class="this-time"></span>
		</div>
		<div class="container">
				<!--PANEL 1-->
				<div class="panel panel-danger pane-54">
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
				<div class="panel panel-danger pane-18">
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
				<div class="panel panel-danger pane-52">
					<div class="panel-heading"> 
						<h3 class="panel-title">Node <span class="badge">52</span></h3> 
					</div> 
					<div class="panel-body"> 
						<span class="node-52-data"></span> <span> V</span>
						<p style='font-size:0.5em;text-align:left;'>Read Time: <span class='node-52-time'> </span> </p>
					</div> 
				</div>
				<!--END OF PANEL 3-->
				
				
				<!--PANEL 1-->
				<div class="panel panel-danger pane-53">
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
				<div class="panel panel-danger pane-49">
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
				<div class="panel panel-danger pane-50">
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
				<div class="panel panel-danger pane-51">
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
	</body>
</html>
<script type='text/javascript' src='js/jquery.min.js'></script>
<script>
var aircon = [8,28,49,52,53,54,1,10,19,20];
var lights = [27,18,2,4,7,36,32];
var outlet = [12,15,26,50,51,3,6,22,13];
$(document).ready(function(){
	setInterval(function(){blink(54)},1500);
	setInterval(function(){blink(18)},1500);
	setInterval(function(){blink(52)},1500);
	setInterval(function(){blink(53)},1500);
	setInterval(function(){blink(49)},1500);
	setInterval(function(){blink(50)},1500);
	setInterval(function(){blink(51)},1500);
	$(".panel").click(function(){
		var node = $(this).find(".badge").html();
		var tbl = (node>25)?'single_phase':'three_phase';
		window.location.href = 'chart3.php?table='+tbl+'&node='+node;
	});
	$(".type").click(function(){
		$(".panel").hide();
		$(".type").removeClass("active");
		if($(this).hasClass("gAll")){
			$(".panel").show();
		}else if($(this).hasClass("gAir")){
			$.each(aircon,function(key,val){
				$(".node-"+val+"-data").closest(".panel").show();
			});
		}else if($(this).hasClass("gLit")){
			$.each(lights,function(key,val){
				$(".node-"+val+"-data").closest(".panel").show();
			});
		}else if($(this).hasClass("gOut")){
			$.each(outlet,function(key,val){
				$(".node-"+val+"-data").closest(".panel").show();
			});
		}
	});
});
function blink(tar)
{
	
   $.ajax({
	   url: 'live.php',
	   type: 'GET',
	   data: {
		  node: tar
	   },
       dataType: 'json',
	   success: function(data) {
		 if(tar>25){
			$(".node-"+tar+"-data").text(parseFloat(data[8]).toFixed(2));
		 }else{
			$(".node-"+tar+"-data").text(parseFloat(data[10]).toFixed(2));
		 }
		 $(".node-"+tar+"-time").text(data[3]);
		$(".this-time").text(data[11]);
	   }
	});
}
</script>
