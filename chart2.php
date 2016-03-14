<?php
	include("sql_connect.php");
	$today = date("Y-m-d");
	echo $today;
	$sql = "SELECT * FROM single_phase WHERE date = '".$today."' ORDER BY id DESC";
	$result = mysqli_query($mysqli, $sql);
	if(!$result){
		echo("Error description: " . mysqli_error($con));
	}
	$last = 0;
	while ($row = mysqli_fetch_array($result)) {
	  echo "[".(strtotime($row['date'].$row['time'])*1000.).",".$row['data']."]";
	  echo "<br>";
	}
?>