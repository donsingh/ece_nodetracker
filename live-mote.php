<?php
// Set the JSON header
	header("Content-type: text/json");
	include("sql_connect.php");
	if(isset($_GET['date'])){
		$today=date("Y-m-d", strtotime($_GET['date']));
	}else{
		$today = date("Y-m-d");
	}
	if(isset($_GET['table'])){
		$tbl = $_GET['table'];
	}else{
		$tbl = 'single_phase';
	}
	$sql = "SELECT * FROM ".$tbl." WHERE date = '".$today."' ORDER BY indx DESC LIMIT 1";
	/*
		$sql = "SELECT * FROM single_phase WHERE date='".$today."' AND node="" ORDER BY id DESC LIMIT 1";
	*/
	$result = mysqli_query($mysqli, $sql);
	$row = mysqli_fetch_row($result);
	$set = array((strtotime($row[2].$row[3])*1000.),intval(($row[1])),$row);
	
	echo json_encode($set);
?>