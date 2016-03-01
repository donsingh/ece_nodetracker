<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
		
		
		<!-- 1. Add these JavaScript inclusions in the head of your page -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/highcharts.js"></script>
		
		<!-- 2. Add the JavaScript to initialize the chart on document ready -->
		<script>
		
		</script>
		
	</head>
	<body>
		<div class="row">
		  <div class="col-md-1"></div>
		  <div class="col-md-10" id="row1"></div>
		  <div class="col-md-1"></div>
		</div>
		<div class="row">
		  <div class="col-md-1"></div>
		  <div class="col-md-10" id="row2"></div>
		  <div class="col-md-1"></div>
		</div>
		<div class="row">
		  <div class="col-md-1"></div>
		  <div class="col-md-10" id="row3"></div>
		  <div class="col-md-1"></div>
		</div>
	</body>
</html>
<script> 
	
	
    $(function(){
      $("#row1").load("test1.html"); 
	  $("#row2").load("test2.html"); 
	  $("#row3").load("test3.html"); 
    });
	
	
    </script> 