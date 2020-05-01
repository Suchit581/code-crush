<?php  

session_start();


if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';
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
					echo "helltrue";
					// log in the user here 
					$id = $row['user_id'];
					$sql_log = "INSERT INTO `user_log`(`user_for_id`,`user_action`) VALUES ($id,'login')";
					mysqli_query($conn,$sql_log);
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					$_SESSION['u_lang'] = $row['user_lang'];
					$_SESSION['u_number'] = $row['user_number'];
					$_SESSION['u_admin'] = $row['user_admin'];
					$_SESSION['u_country'] = $row['user_country'];
					header("location:../index.php?login=success");
					exit();
				}
			}
		}
	}
	$name = $_SESSION['u_first']." ".$_SESSION['u_last'];
	date_default_timezone_set('Etc/UTC');
	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "codecrush18@gmail.com";
	$mail->Password = "codeCrush2k18";
	$mail->setFrom($_SESSION['u_email'], $name);//this email for send
	$mail->addAddress($_SESSION['u_email'], $name);//this email for send
	$mail->Subject = 'Thank you for login';
	$mail->msgHTML('<b>We have glad to see to login in code crush and your furture query in given in the mail</b>');
	$mail->AltBody = 'This is a plain-text message body';
	// if (!$mail->send()) {
	//     echo "Mailer Error: " . $mail->ErrorInfo;
	// } else {
	//     echo "Message sent!";
	// }
	function save_mail($mail) {
	    //You can change 'Sent Mail' to any other folder or tag
	    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

	    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
	    $imapStream = imap_open($path, $mail->Username, $mail->Password);

	    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
	    imap_close($imapStream);

	    return $result;
	}


}	
else{
		header("location:../index.php?login=errornothing");
		exit();	
}
?>