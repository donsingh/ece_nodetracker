<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	if(!isset($_SESSION['login'])){
		header("signout.php");
	}
	$mysqli = new mysqli("localhost", "root", "", "node_data");
	date_default_timezone_set('Asia/Manila');
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
