<?php
	header("Content-type: text/json");
	
	if($_GET['src']=="basic"){
		$y = rand(2000, 6000);
		$y /= 100;
		$y = str_pad($y,5,"0");
		echo json_encode($y);
	}else{
		$b = rand(0, 500);
		$a = $x = time() * 1000;
		$d = rand(0, 200);
		$c = $x = time() * 1000;
		$y = rand(0, 100);
		$x = time() * 1000;

		$ret = array($a, $b ,$x, $y, $c,$d);
		echo json_encode($ret);
	}
?>