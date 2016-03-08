<?php
$mysqli = new mysqli("localhost", "root", "master", "node_data");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
