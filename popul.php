<?php
	$mysqli = new mysqli("localhost", "root", "", "node_data");
	date_default_timezone_set('Asia/Manila');
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	
	for($x=0, $cnt=1;$x>=0;$x+=10,$cnt++){
		$str = "(NULL,".mt_rand(10,999).",'2016-03-08','".date("H:i:s")."')";
		$sql = "INSERT INTO single_phase VALUES ".$str."";
		$result = mysqli_query($mysqli, $sql);
		if(!$result){
			echo("Error description: " . mysqli_error($mysqli));
		}else{
			echo $sql;
			echo "\n";
		}
		sleep(2);
		echo "\n";
	}
		
	
?>
