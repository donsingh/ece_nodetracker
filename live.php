<?php
	include("sql_connect.php");

	if(isset($_GET['node'])){
		
		$node = $_GET['node'];
		$table = ($node>25)?"single_phase":"three_phase";
		$sql = "SELECT *,CURRENT_TIME() FROM ".$table." WHERE node = '".$node."' ORDER BY indx DESC LIMIT 1";
		$result = mysqli_query($mysqli, $sql);
		$row = mysqli_fetch_row($result);
		echo json_encode($row);
	}
?>
