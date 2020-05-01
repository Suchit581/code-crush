<?php 
		session_start();
		include_once 'dbh.inc.php';
		$id = $_SESSION['u_id'];
		$sql_log = "INSERT INTO `user_log`(`user_for_id`,`user_action`) VALUES ($id,'logout')";
		mysqli_query($conn,$sql_log);
		session_unset();
		session_destroy();
		header("location:../index.php");
 ?>