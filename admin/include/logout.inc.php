<?php 
		session_start();
if (isset($_SESSION['u_id']) && $_SESSION['u_admin'] == 0) {
    	header("Location:../index.php");
}
		include_once 'connect';
		$id = $_SESSION['u_id'];
		$sql_log = "INSERT INTO `user_log`(`user_for_id`,`user_action`) VALUES ($id,'logout')";
		mysqli_query($conn,$sql_log);
		session_unset();
		session_destroy();
		header("location:../index.php");
 ?>