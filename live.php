<?php
	include("sql_connect.php");

	if(isset($_POST['node'])){
		$table = $_POST['phase'];
		$node = $_POST['node'];
		$sql = "SELECT * FROM ".$table." WHERE node = '".$node."' ORDER BY indx DESC LIMIT 1";
		$result = mysqli_query($mysqli, $sql);
		$row = mysqli_fetch_row($result);
		echo json_encode($row);
	}
?>
