<?php
	include("sql_connect.php");
	
	$set = array(0=>array(),1=>array(),2=>array(),3=>array(),4=>array(),5=>array(),6=>array(),7=>array(),8=>array(),	9=>array(),	10=>array(),	11=>array(),	12=>array(),	13=>array(),	14=>array(),15=>array(),	16=>array(),	17=>array(),	18=>array(),	19=>array(),	20=>array(),	21=>array(),	22=>array(),	23=>array());
	$sql = "SELECT * FROM three_phase WHERE node = 1 AND date = '2016-02-16'";
	$result = mysqli_query($mysqli, $sql);
	$ctr = 0;
	
	while($row = mysqli_fetch_array($result)){
		$cur = date("H",strtotime($row[3]));
		array_push($set[$cur],$row);
	}
	
	for($i = 0; $i <= 24;$i++){
		if(!empty($set[$i])){
			echo date("h:00 A",strtotime($set[$i][0][3]))."<br>";
			foreach($set[$i] as $mmr){
				echo "->".$mmr[4]."<br>";
			}
			echo "<br><br><br>";
		}
	}
	/*
	$hr = 0;
	$x = 0;
	for($y=0;$y<=1438;$y++){
		if($x>=60){
			$x=0;
			$hr++;
		}
		$node = 1;
		$date = '2016-03-17';
		$time = $hr.":".$x.":00";
		$vrms = mt_rand(190, 240);
		$irms = mt_rand(1,40);
		$freq = mt_rand(60,61);
		$pwrf = mt_rand(100,200);
		$actp = mt_rand(1,5000);
		$reap = 0;
		$appp = 0;
		$sql = "INSERT INTO `node_data`.`single_phase`
		(`indx` ,`node` ,`date` ,`time` ,`vrms` ,`irms` ,`freq` ,`pwrf` ,`actp` ,`reap` ,`appp`)
		VALUES 
		(NULL , '".$node."', '".$date."', '".$time."', '".$vrms."', '".$irms."', '".$freq."', '".$pwrf."', '".$actp."', '0', '0')";
		$result = mysqli_query($mysqli, $sql);
		if($result){
			echo "Inserted Row# ".$y." into SINGLE PHASE\n";
		}
		$x++;
		sleep(2);
	}	*/
?>
