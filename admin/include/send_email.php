<?php
session_start();
if (isset($_SESSION['u_id']) && $_SESSION['u_admin'] == 0) {
    	header("Location:../index.php");
}
if (isset($_POST['submit'])) {
	echo 'hee';
	echo $name = $_POST['name'];
	echo $email = $_POST['email'];
	echo $message = $_POST['message'];
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
	$mail->setFrom($email, $name);//this email for send
	$mail->addAddress($email,$name);//this email for send
	$mail->Subject = 'Contact';
	$mail->msgHTML('<b>'.$message.' </b>');
	$mail->AltBody = $name;
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo "Message sent!";
	}
	function save_mail($mail) {
	    //You can change 'Sent Mail' to any other folder or tag
	    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

	    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
	    $imapStream = imap_open($path, $mail->Username, $mail->Password);

	    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
	    imap_close($imapStream);

	    return $result;
	}
	header("location:../index.php?send=success");
} 
else {

	header("location:../index.php?send=invalid_error");
}
