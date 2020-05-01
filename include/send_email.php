<?php
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
$mail->setFrom('suchitsheth42@gmail.com', 'Suchit sheth ');//this email for send
$mail->addAddress('suchitsheth42@gmail.com', 'Suchit Sheth');//this email for send
$mail->Subject = 'Try of php mailer';
$mail->msgHTML('<b>This is try of php mailer </b>');
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
