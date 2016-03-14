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
		<img src="img/third.jpg" id="bg" alt="">
		<div class="container">
				<!--PANEL 1-->
				<div class="panel panel-danger pane-1">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">1</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-1-data">292.25</span> <span> W</span>
					</div>
				</div>
				<!--END OF PANEL 1-->

				<!--PANEL 2-->
				<div class="panel panel-danger pane-2">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">2</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-2-data">292.25</span> <span> W</span>
					</div>
				</div>
				<!--END OF PANEL 2-->

				<!--PANEL 3-->
				<div class="panel panel-danger pane-3">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">3</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-3-data">393.35</span> <span> W</span>
					</div>
				</div>
				<!--END OF PANEL 3-->

				<!--PANEL 4-->
				<div class="panel panel-danger pane-4">
					<div class="panel-heading">
						<h4 class="panel-title">Node <span class="badge">4</span></h4>
					</div>
					<div class="panel-body">
						<span class="node-4-data">194.45</span> <span> W</span>
					</div>
				</div>
				<!--END OF PANEL 4-->

				<!--PANEL 5-->
				<div class="panel panel-danger pane-5">
					<div class="panel-heading">
						<h5 class="panel-title">Node <span class="badge">5</span></h5>
					</div>
					<div class="panel-body">
						<span class="node-5-data">195.55</span> <span> W</span>
					</div>
				</div>
				<!--END OF PANEL 5-->

				<!--PANEL 6-->
				<div class="panel panel-danger pane-6">
					<div class="panel-heading">
						<h6 class="panel-title">Node <span class="badge">6</span></h6>
					</div>
					<div class="panel-body">
						<span class="node-6-data">196.66</span> <span> W</span>
					</div>
				</div>
				<!--END OF PANEL 6-->

				<!--PANEL 7-->
				<div class="panel panel-danger pane-7">
					<div class="panel-heading">
						<h7 class="panel-title">Node <span class="badge">7</span></h7>
					</div>
					<div class="panel-body">
						<span class="node-7-data">197.77</span> <span> W</span>
					</div>
				</div>
				<!--END OF PANEL 7-->

				<!--PANEL 8-->
				<div class="panel panel-danger pane-8">
					<div class="panel-heading">
						<h8 class="panel-title">Node <span class="badge">8</span></h8>
					</div>
					<div class="panel-body">
						<span class="node-8-data">198.88</span> <span> W</span>
					</div>
				</div>
				<!--END OF PANEL 8-->

				<!--PANEL 9-->
				<div class="panel panel-danger pane-9">
					<div class="panel-heading">
						<h9 class="panel-title">Node <span class="badge">9</span></h9>
					</div>
					<div class="panel-body">
						<span class="node-9-data">199.99</span> <span> W</span>
					</div>
				</div>
				<!--END OF PANEL 9-->

				<!--PANEL 10-->
				<div class="panel panel-danger pane-10">
					<div class="panel-heading">
						<h9 class="panel-title">Node <span class="badge">10</span></h9>
					</div>
					<div class="panel-body">
						<span class="node-10-data">199.99</span> <span> W</span>
					</div>
				</div>
				<!--END OF PANEL 10-->
				<!--PANEL 11-->
				<div class="panel panel-danger pane-11">
					<div class="panel-heading">
						<h3 class="panel-title">Node <span class="badge">11</span></h3>
					</div>
					<div class="panel-body">
						<span class="node-11-data">191.11</span> <span> W</span>
					</div>
				</div>
				<!--END OF PANEL 11-->
		</div>
	</body>
</html>
<script type='text/javascript' src='js/jquery.min.js'></script>
<script>
$(document).ready(function(){
	setInterval(function(){blink(32)},1500);
	/*setInterval(function(){blink(2)},1500);
	setInterval(function(){blink(3)},1500);
	setInterval(function(){blink(4)},1500);
	setInterval(function(){blink(5)},1500);
	setInterval(function(){blink(6)},1500);
	setInterval(function(){blink(7)},1500);
	setInterval(function(){blink(8)},1500);
	setInterval(function(){blink(9)},1500);
	setInterval(function(){blink(10)},1500);
	setInterval(function(){blink(11)},1500);*/
	$(".panel").click(function(){
		var node = $(this).find(".badge").html();
		var tbl = (node>25)?'single_phase':'three_phase';
		window.location.href = 'chart3.php?table='+tbl+'&node='+node;
	});
});
function blink(tar)
{

   $.ajax({
	   url: 'live.php',
	   type: 'POST',
	   data: {
		  phase: 'single_phase',
		  node: tar
	   },
       dataType: 'json',
	   success: function(data) {
		 tar = 1;
		 $(".node-"+tar+"-data").text(parseFloat(data[8]).toFixed(2));
	   }
	});
}
</script>
