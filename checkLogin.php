<?php
	session_start();
	if(isset($_POST['form-username'])&&isset($_POST['form-password'])){
		$username = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $_POST['form-username']);
		$password = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $_POST['form-password']);
		if(md5($username)==="21232f297a57a5a743894a0e4a801fc3"){
			if(md5($password)==="62cd275989e78ee56a81f0265a87562e"){
				$_SESSION["login"] = "dongwapo";
				header("location:dashboard.php");
			}else{header("location:index.php");}
		}else{header("location:index.php");}
	}else{header("location:index.php");}
?>