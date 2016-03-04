<?php
require 'PHPMailer/PHPMailerAutoload.php';
$email = $_REQUEST['EMAIL'];
$mail = new PHPMailer();
$mail->IsSMTP();  //telling the class to use SMTP
$mail->isHTML(true);
$mail->Host         = localhost;//"smtpout.secureserver.net"; //also tried "relay-hosting.secureserver.net"
$mail->WordWrap     = 50;
//$mail->SMTPSecure   = "ssl";
//$mail->Port         = 465;
$mail->setFrom("user1@vivacarnaval.com", "Viva");
//$mail->Username     = "user1@vivacarnaval.com";
//$mail->Password     = "vivaC2016";
$mail->Subject      = "Subscriber To Viva";
$mail->addAddress("vivacarnavaltampa@gmail.com","me");
$mail->addAddress("apkstreetballa23@aol.com", "me");
$mail->Body     = "New  subscriber " . $email;
$mail->SMTPDebug = 0;
header('Location: ../index.php');
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Thank you, your email has been received.';
}

?>
