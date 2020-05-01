<?php  

session_start();
if (isset($_SESSION['u_id']) && $_SESSION['u_admin'] == 0) {
    	header("Location:../index.php");
}
if (isset($_POST['submit'])) {
	include_once 'connect.php';
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	//error handler 
	//check input are empty
	if (empty($uid) || empty($pwd)) {
		header("location:../index.php?login=empty");
		exit();	
	}
	else{
		$sql = "select * from users where user_uid = '$uid' OR user_email='$uid'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck == 0){
			header("location:../index.php?login=notfound");
			exit();			
		}
		else{
			if ($row = mysqli_fetch_assoc($result)) {
				$admin = $row['user_admin'];
				if ($admin == 0) {
					header("location:../index.php?invalid=not_admin");
					exit();	
				} 
				else {
					//de-hasing the password 
					$hasdedPwdCheck = password_verify($pwd,$row['user_pwd']);
					// var_dump($hasdedPwdCheck);die;
					// var_dump(password_verify($pwd,$row['user_pwd']));
					if (!password_verify($pwd,$row['user_pwd'])) {
						echo "hellfalse";
						header("location:../index.php?login=inpass");
						exit();	
					}
					elseif (password_verify($pwd,$row['user_pwd'])){
						// log in the user here 
						$id = $row['user_id'];
						$sql_log = "INSERT INTO `user_log`(`user_for_id`,`user_action`) VALUES ($id,'login')";
						mysqli_query($conn,$sql_log);
						echo "<br>".$_SESSION['u_id'] = $row['user_id'];
						echo "<br>".$_SESSION['u_first'] = $row['user_first'];
						echo "<br>".$_SESSION['u_last'] = $row['user_last'];
						echo "<br>".$_SESSION['u_email'] = $row['user_email'];
						echo "<br>".$_SESSION['u_uid'] = $row['user_uid'];
						echo "<br>".$_SESSION['u_lang'] = $row['user_lang'];
						echo "<br>".$_SESSION['u_number'] = $row['user_number'];
						echo "<br>".$_SESSION['u_admin'] = $row['user_admin'];
						header("location:../index.php?login=success");
						exit();
					}
				}
			}
		}
	}

}	
else{
		header("location:../index.php?login=errornothing");
		exit();	
}
?>