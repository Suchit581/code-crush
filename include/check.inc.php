<?php 
	session_start();
	$conn = mysqli_connect("localhost","root","","codecrush"); 
	$option = array();
	print_r($_POST['option']);	
	$option = $_POST['option'];
	$lang = $_SESSION['u_lang'];
	$sql_question = "select * from questions where language_id = (select language_id from language where language_name = '$lang')";
	$result_question=mysqli_query($conn,$sql_question);
	$count = 0;
	$counter = 0;
    $Resultans = 0;
    $i=1;
	while ($question = mysqli_fetch_array($result_question)) {
		$count = count($option[$question['language_id']]);
		if (isset($option[$question['language_id']][$i])) {
			$flag = $question['ans_id'] == $option[$question['language_id']][$i];
			if($flag){
				$Resultans++;
			}
		}
		$i++;	
	$lang = $question['language_id'];
	}	
	echo "<br>out of 10 you select ".$count;
	echo "<br>".$Resultans;
	echo "<br>".$count;
	$user = $_SESSION['u_uid'];
	$sql_quiz_log = "INSERT INTO `quiz_log`(`q_uid`,`q_lang`,`q_attempt`, `q_correct`) VALUES ('$user',$lang,'$count','$Resultans')";   
	mysqli_query($conn,$sql_quiz_log);
	$id = $_SESSION['u_id'];
	$sql_log = "INSERT INTO `user_log`(`user_for_id`,`user_action`) VALUES ($id,'quiz-submit')";
	mysqli_query($conn,$sql_log);
	
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
	$mail->Subject = 'Your Quiz result is generated';
	$mail->msgHTML('<b>You have complete your quiz now you can take the certificate if you are eligible in your quiz pannel</b>');
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

	$_SESSION['submit_ans'] = 1;
	header("location:../index.php");

 ?>