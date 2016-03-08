<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>ECE Node Tracker</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/floor_4_node.css" rel="stylesheet">
	</head>
	<body>
		<h1 id='title' class="bg-danger">Fourth Floor Node Layout</h1>
		<div class="btn-group" role="group" aria-label="Default button group"> 
			<a href="index.php"><button type="button" class="btn btn-default">THIRD FLOOR</button></a>
			<a href="second.php"><button type="button" class="btn btn-default active">FOURTH FLOOR</button></a>
			<a href="third.php"><button type="button" class="btn btn-default">FIFTH FLOOR</button></a> 
		</div>
		<img src="img/fourth.jpg" id="bg" alt="">
		<div class="container">
				<!--PANEL 1-->
				<div class="panel panel-danger pane-1">
					<div class="panel-heading"> 
						<h3 class="panel-title">Node <span class="badge">1</span></h3> 
					</div> 
					<div class="panel-body"> 
						<span class="node-1-data">292.25</span> <span> V</span>
					</div> 
				</div>
				<!--END OF PANEL 1-->
				
				<!--PANEL 2-->
				<div class="panel panel-danger pane-2">
					<div class="panel-heading"> 
						<h3 class="panel-title">Node <span class="badge">2</span></h3> 
					</div> 
					<div class="panel-body"> 
						<span class="node-2-data">292.25</span> <span> V</span>
					</div> 
				</div>
				<!--END OF PANEL 2-->
				
				<!--PANEL 3-->
				<div class="panel panel-danger pane-3">
					<div class="panel-heading"> 
						<h3 class="panel-title">Node <span class="badge">3</span></h3> 
					</div> 
					<div class="panel-body"> 
						<span class="node-3-data">393.35</span> <span> V</span>
					</div> 
				</div>
				<!--END OF PANEL 3-->
				
				<!--PANEL 4-->
				<div class="panel panel-danger pane-4">
					<div class="panel-heading"> 
						<h4 class="panel-title">Node <span class="badge">4</span></h4> 
					</div> 
					<div class="panel-body"> 
						<span class="node-4-data">194.45</span> <span> V</span>
					</div> 
				</div>
				<!--END OF PANEL 4-->
				
				
		</div>
	</body>
</html>
<script type='text/javascript' src='js/jquery.min.js'></script>
<script>
$(document).ready(function(){
	setInterval(function(){blink(1)},1500);
	setInterval(function(){blink(2)},1500);
	setInterval(function(){blink(3)},1500);
	setInterval(function(){blink(4)},1500);
});
function blink(tar)
{
	
   $.ajax({
	   url: 'live.php',
	   type: 'POST',
	   data: {
		  floor: 3,
		  node: tar
	   },
	   success: function(data) {
		  $(".node-"+tar+"-data").text(data);
	   }
	});
}
</script>
