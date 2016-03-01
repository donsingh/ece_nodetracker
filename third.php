<html>
	<head>
		<style>
			@font-face {
				font-family: ledFont;
				src: url(fonts/open24.ttf);
			}
			#midcontainer{
				background-image:url("img/third_cleaned.jpg");
				background-repeat: no-repeat;
				height:100%;
				background-size:cover;
				background-position:center center;
			}
			.node{
				position:absolute;
			}
			.reading{
				background-color:black;
				font-family: ledFont;
				color: rgb(67,228,2);
				font-size:2.3em;
				padding:0px !important;
				text-align:center;
				align:center;
			}
			.reading_red{
				background-color:black;
				font-family: ledFont;
				color: #DD0048;
				font-size:2.3em;
				padding:0px !important;
				text-align:center;
				align:center;
			}
			#node1{
				top:50px;
				left:228px;
			}
			#node2{
				top:50px;
				left:408px;
			}
			#node3{
				top:50px;
				left:585px;
			}
			#node4{
				top:50px;
				left:760px;
			}
		</style>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title></title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="row" style='width:99%;'>
		  <div class="col-md-2"></div>
		  <div class="col-md-8" id='midcontainer'>
			<a href="live.php?mote=1"><div class="panel panel-success node" id="node1"> 
				<div class="panel-heading"> 
					<h3 class="panel-title">Node # <b>1</b></h3> 
				</div> 
					<div class="panel-body reading" id="read1"><span class='tread'></span>&deg;C</div> 
			</div>
			</a>
			<div class="panel panel-success node" id="node2"> 
				<div class="panel-heading"> 
					<h3 class="panel-title">Node # <b>2</b></h3> 
				</div> 
					<div class="panel-body reading" id="read2"><span class='tread'></span>&deg;C</div> 
			</div>
			<div class="panel panel-success node" id="node3"> 
				<div class="panel-heading"> 
					<h3 class="panel-title">Node # <b>3</b></h3> 
				</div> 
					<div class="panel-body reading" id="read3"><span class='tread'></span>&deg;C</div> 
			</div>
			<div class="panel panel-success node" id="node4"> 
				<div class="panel-heading"> 
					<h3 class="panel-title">Node # <b>4</b></h3> 
				</div> 
					<div class="panel-body reading" id="read4"><span class='tread'></span>&deg;C</div> 
			</div>
		  </div>
		  <div class="col-md-2"></div>
		</div>
	</body>
</html>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/highcharts.js"></script>
		
<script>
	var interval = 2000;
	$(document).ready(function(){
		var myVar1 = setInterval(function(){requestData(1);}, interval);
		var myVar2 = setInterval(function(){requestData(2);}, interval);
		var myVar3 = setInterval(function(){requestData(3);}, interval);
		var myVar4 = setInterval(function(){requestData(4);}, interval);
	});
	function requestData(id) {
		$.ajax({
			url: 'live-data.php',
			type: 'GET',
			data: {src:'basic'},
			success: function(point) {
				if(point > 49){
					$("#node"+id).removeClass("panel-success");
					$("#node"+id).addClass("panel-danger");
					$("#read"+id).removeClass("reading");
					$("#read"+id).addClass("reading_red");
				}else{
					$("#node"+id).addClass("panel-success");
					$("#node"+id).removeClass("panel-danger");
					$("#read"+id).addClass("reading");
					$("#read"+id).removeClass("reading_red");
				}
				$("#node"+id+">div>.tread").text(point);
			},
			cache: false
		});
	}
</script>
