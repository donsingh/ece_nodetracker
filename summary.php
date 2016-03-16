<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>ECE Node Tracker</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/summary.css" rel="stylesheet">
		<style>
			.container{
				margin-top:300px;
			}
			.readT{
				font-size:0.5em;
				text-align:left;
			}
		</style>
	</head>
	<body>
		<h1 id='title' class="bg-primary">Node Summary</h1>
		<div class="btn-group" role="group" aria-label="Default button group"> 
			<a href="index.php"><button type="button" class="btn btn-default">THIRD FLOOR</button></a>
			<a href="second.php"><button type="button" class="btn btn-default">FOURTH FLOOR</button></a>
			<a href="third.php"><button type="button" class="btn btn-default">FIFTH FLOOR</button></a> 
		</div>
		<div class="btn-group" style="margin-left: 150px;margin-top:110px; width:100%; text-align:center;">
			<button type="button" class="type gAll btn btn-primary active"><span class="glyphicon glyphicon-th"></span> All</button>
			<button type="button" class="type gAir btn btn-primary"><span class="glyphicon glyphicon-tasks"></span> Aircon</button>
			<button type="button" class="type gLit btn btn-primary"><span class="glyphicon glyphicon-certificate"></span> Lights</button>
			<button type="button" class="type gOut btn btn-primary"><span class="glyphicon glyphicon-flash"></span> Outlets</button>
		</div>
		<div class="container">
			<div class="alert alert-success">
				<h1 align='center'>Third Floor</h1>
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 1</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-1-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-1-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 2</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-2-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-2-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 3</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-3-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-3-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 4</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-4-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-4-time'> </span> </p>
							</div> 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 19</h3>
							</div> 
							<div class="panel-body"> 
								
								<span class="node-19-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-19-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 6</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-6-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-6-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 7</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-7-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-7-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 13</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-13-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-13-time'> </span> </p>
							</div> 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 20</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-20-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-20-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 10</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-10-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-10-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 22</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-22-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-22-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 36</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-36-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-36-time'> </span> </p>
							</div> 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 32</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-32-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-32-time'> </span> </p>
							</div> 
						</div>
					</div>
				</div>
			</div>
			
			<!--FOURTH FLOOR-------------------------->
			<div class="alert alert-warning">
				<h1 align='center'>Fourth Floor</h1>
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 15</h3>
							</div> 
							<div class="panel-body"> 
								
								<span class="node-15-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-15-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 8</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-8-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-8-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 12</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-12-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-12-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 26</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-26-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-26-time'> </span> </p>
							</div> 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 27</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-27-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-27-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 28</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-28-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-28-time'> </span> </p>
							</div> 
						</div>
					</div>
				</div>
			</div>
			
			
			<!--FIFTH FLOOR-------------------------->
			<div class="alert alert-info">
				<h1 align='center'>Fifth Floor</h1>
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 54</h3>
							</div> 
							<div class="panel-body"> 
								
								<span class="node-54-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-32-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 18</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-18-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-18-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 52</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-52-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-52-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 53</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-53-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-53-time'> </span> </p>
							</div> 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 49</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-49-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-49-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 50</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-50-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-50-time'> </span> </p>
							</div> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-primary"> 
							<div class="panel-heading"> 
								<h3 class="panel-title">Node 51</h3>
							</div> 
							<div class="panel-body"> 
								<span class="node-51-data"></span><span> V</span>
								<p class="readT">Read Time: <span class='node-51-time'> </span> </p>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
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
	setInterval(function(){blink(54)},1500);
	setInterval(function(){blink(18)},1500);
	setInterval(function(){blink(52)},1500);
	setInterval(function(){blink(53)},1500);
	setInterval(function(){blink(49)},1500);
	setInterval(function(){blink(50)},1500);
	setInterval(function(){blink(51)},1500);
	setInterval(function(){blink(15)},1500);
	setInterval(function(){blink(8)},1500);
	setInterval(function(){blink(12)},1500);
	setInterval(function(){blink(26)},1500);
	setInterval(function(){blink(27)},1500);
	setInterval(function(){blink(28)},1500);
	$(".panel").click(function(){
		var node = $(this).find(".badge").html();
		var tbl = (node>25)?'single_phase':'three_phase';
		window.location.href = 'chart3.php?table='+tbl+'&node='+node;
	});
	
	$(".type").click(function(){
		$(".col-md-3").hide();
		$(".type").removeClass("active");
		if($(this).hasClass("gAll")){
			$(".col-md-3").show();
		}else if($(this).hasClass("gAir")){
			$.each(aircon,function(key,val){
				$(".node-"+val+"-data").closest(".col-md-3").show();
			});
		}else if($(this).hasClass("gLit")){
			$.each(lights,function(key,val){
				$(".node-"+val+"-data").closest(".col-md-3").show();
			});
		}else if($(this).hasClass("gOut")){
			$.each(outlet,function(key,val){
				$(".node-"+val+"-data").closest(".col-md-3").show();
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
		 $(".node-"+tar+"-data").text(parseFloat(data[10]).toFixed(2));
		 $(".node-"+tar+"-time").text(data[3]);
	   }
	});
}
</script>
