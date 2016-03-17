<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>ECE Node Tracker</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/floor_3_node.css" rel="stylesheet">
	</head>
	<body>
		
		<h1 id='title' class="bg-primary">Third Floor Node Layout</h1>
		<div class="btn-group" role="group" aria-label="Default button group">
			<a href="index.php"><button type="button" class="btn btn-default active">THIRD FLOOR</button></a>
			<a href="second.php"><button type="button" class="btn btn-default">FOURTH FLOOR</button></a>
			<a href="third.php"><button type="button" class="btn btn-default">FIFTH FLOOR</button></a>
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
		<img src="img/third_sm.jpg" id="bg" alt="">
		<div class="container">
				<!--PANEL 1-->
				<div class="panel panel-danger pane-1">
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
				<div class="panel panel-danger pane-2">
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
				<div class="panel panel-danger pane-3">
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
				<div class="panel panel-danger pane-4">
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
				<div class="panel panel-danger pane-13">
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
				<div class="panel panel-danger pane-6">
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
				<div class="panel panel-danger pane-7">
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
				<div class="panel panel-danger pane-22">
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
				<div class="panel panel-danger pane-19">
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
				<div class="panel panel-danger pane-10">
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
				<div class="panel panel-danger pane-20">
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
				<div class="panel panel-danger pane-36">
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
				<div class="panel panel-danger pane-32">
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
	</body>
</html>
<script type='text/javascript' src='js/jquery.min.js'></script>
<script>
var aircon = [8,28,49,52,53,54,1,10,19,20];
var lights = [27,18,2,4,7,36,32];
var outlet = [12,15,26,50,51,3,6,22,13];
$(document).ready(function(){
	
  
	setInterval(function(){blink(1)},1500);
	setInterval(function(){blink(2)},1500);
	setInterval(function(){blink(3)},1500);
	setInterval(function(){blink(4)},1500);
	setInterval(function(){blink(6)},1500);
	setInterval(function(){blink(7)},1500);
	setInterval(function(){blink(10)},1500);
	setInterval(function(){blink(13)},1500);
	setInterval(function(){blink(19)},1500);
	setInterval(function(){blink(20)},1500);
	setInterval(function(){blink(22)},1500);
	setInterval(function(){blink(32)},1500);
	setInterval(function(){blink(36)},1500);
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
	   }
	});
}
</script>
