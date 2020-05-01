<?php
include_once 'dbh.inc.php';
if (isset($_POST['submit'])) {
	$id = mysqli_real_escape_string($conn,$_POST['id']);
	$first = mysqli_real_escape_string($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$lang = mysqli_real_escape_string($conn,$_POST['lanugage']);
	$country = mysqli_real_escape_string($conn,$_POST['country']);
	$number = mysqli_real_escape_string($conn,$_POST['number']);
	if (!empty($first) || !empty($last) || !empty($email) || !empty($uid) || !empty($lang) || !empty($country) || !empty($number)) {
		$sql_update = "UPDATE `users` SET `user_first`='$first',`user_last`='$last',`user_email`='$email',`user_uid`='$uid',`user_lang`='$lang',`user_country`='$country',`user_number`='$number' WHERE user_id = $id";
		mysqli_query($conn,$sql_update);
		header("location:../user-panel.php?user=success");
	} 
	else {
		header("location:../user-panel.php?user=empty");
	}
} 
else {
	header("location:../user-panel.php?error=invalid_errror");
}
	
?>