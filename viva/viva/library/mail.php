<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSMTP();  //telling the class to use SMTP
$mail->isHTML(true);
$mail->Host         = localhost;//"smtpout.secureserver.net"; //also tried "relay-hosting.secureserver.net"
$mail->WordWrap     = 50;
//$mail->SMTPSecure   = "ssl";
//$mail->Port         = 465;
$mail->setFrom("user1@vivacarnaval.com", "me");
//$mail->Username     = "user1@vivacarnaval.com";
//$mail->Password     = "vivaC2016";
$mail->Subject      = "Test Email";
$mail->addAddress("user1@vivacarnaval.com","me");
$mail->addAddress("dcancare@mail.usf.edu", "me");
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
$mail->SMTPDebug = 0;
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}

?>
