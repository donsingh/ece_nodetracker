<html>
	<head>
		<style>
			@font-face {
				font-family: ledFont;
				src: url(fonts/open24.ttf);
			}
			#first{
				height:300px;
				background-color:black;
				font-family: ledFont;
				color: rgb(67,228,2);
				font-size:10em;
			}
			#top{
				position:absolute;
				top:20px;
				left:50px;
				z-index:2;
			}
			#bot{
				color: grey;
				position:absolute;
				top:20px;
				left:50px;
				z-index:1;
				opacity:0.3;
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
		<div class="row">
		  <div class="col-md-4" id='first'>
				<span id='top'>29.62</span>
				<span id='bot'>88.88</span>
		  </div>
		  <div class="col-md-4">.col-md-4</div>
		  <div class="col-md-4">.col-md-4</div>
		</div>
	</body>
</html>
