<?php
	include("sql_connect.php");
	$sql = "SELECT * FROM teacher";
	$result = mysqli_query($mysqli, $sql);
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DEEE Energy Tracking Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">

	<style>
	img.bg {
	  /* Set rules to fill background */
	  min-height: 100%;
	  min-width: 1024px;
		
	  /* Set up proportionate scaling */
	  width: 100%;
	  height: auto;
		
	  /* Set up positioning */
	  position: fixed;
	  top: 0;
	  left: 0;
	}

	@media screen and (max-width: 1024px) { /* Specific to this particular image */
	  img.bg {
		left: 50%;
		margin-left: -512px;   /* 50% */
	  }
	}
	.inner-bg{
		margin-top:10%;
		color:#fff;
	}
	</style>
    </head>

    <body>
		<img src='img/usctc.jpg' class='bg'>
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-3 text">
                            <h1><strong>USC</strong> DEEE Energy Tracker</h1>
                            <div class="description">
                            	<p>
	                            	This is the Web Portal for the DEEE MS ECE Project tracking the TelosB nodes deployed<br> in Bunzel Building, USC - TC
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left pull-left">
                        			<h3>Login to Access the Energy Tracker</h3>
                            		
                        		</div>
                        		<div class="form-top-right pull-right">
                        			<img src='img/usc_clean.png' width='75'>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="checkLogin.php" method="post" class="login-form" autocomplete="off">
			                    	<div class="form-group">
			                        	<label class="sr-only" for="form-password">Username</label>
			                        	<input type="text" name="form-username" placeholder="Username..." class="form-password form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn btn-primary pull-right">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
					<div class="row" style='margin-top:15px;'>
                        <div class="col-sm-6 col-sm-offset-3 social-login" style='color:white;'>
						
						Powered by <br><!--<img src="img/???.jpg" width="90">--> Department of Electrical and Electronics Engineering

                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </body>

</html>