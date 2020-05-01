<?php
if (isset($_SESSION['u_id']) && $_SESSION['u_admin'] == 0) {
    	header("Location:../index.php");
}
include "connect.php";
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$uid=$_POST['uid'];
	$lang=$_POST['lang'];
	$country=$_POST['country'];
	$number=$_POST['number'];
	$admin = $_POST['admin'];
	$sql_update_user = "UPDATE `users` SET `user_first`='$first',`user_last`='$last' ,`user_email`='$email' ,`user_uid`='$uid' ,`user_lang`='$lang',`user_country`='$country',`user_number`='$number' ,`user_admin`=$admin WHERE user_id = $id";
	mysqli_query($conn,$sql_update_user);
	header("Location: ../index.php");
}
?>