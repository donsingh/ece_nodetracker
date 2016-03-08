<?php
	if(isset($_POST['floor'])){
		$level = $_POST['floor'];
		$node = $_POST['node'];
		$data = rand(190, 240);
		$deci = rand(10, 99);
		echo $data.".".$deci;
	}
?>