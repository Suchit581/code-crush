<?php 
// echo 'Come';die; 
session_start();
if (isset($_POST['submitsignup'])) {
	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	// $pwdr = mysqli_real_escape_string($conn,$_POST['pwdr']);
	$lang = mysqli_real_escape_string($conn,$_POST['lang']);
	$country = mysqli_real_escape_string($conn,$_POST['country']);
	$number = mysqli_real_escape_string($conn,$_POST['number']);
	//error handlers 
	// Check for wmpty field
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) || empty($lang) || empty($country)) {
		// echo "check";die;
		header("location:../index.php");
		exit();	
	}
	else{
		//check input character are valid 
		if (!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last)) {
			header("location:../index.php?signup=invalid");
			exit();		
		}
		else{
			//check email is valid or not 
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				header("location:../index.php?signup=email");
				exit();		
			}
			else{
				$sql = "select * from users where users_uid = '$uid'";
				$result = mysqli_query($conn,$sql);
				$resultCheck = mysqli_num_rows($result);
				if ($resultCheck > 0) {
					header("location:../signup.php?signup=usertaken");
					exit();
				}
				//hashing the passsword 
					$hashedPwd = password_hash($pwd , PASSWORD_DEFAULT);
					//insert the user into the data base 
					$sql = "insert into users (user_first,user_last,user_email,user_uid,user_pwd,user_lang,user_country,user_number,user_admin) values ('$first','$last','$email','$uid','$hashedPwd','$lang','$country','$number',0) ";
				 	mysqli_query($conn,$sql);
				 	header("location:../index.php?signup=success");
				 	
		}
	}
}
			}
else{
	header("location:../index.php?signup=empty");
	exit();
}
?>