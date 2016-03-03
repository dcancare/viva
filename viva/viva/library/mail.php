<?php
	 $msg = "Test";

	 $Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 $Header .= 'From: noreply@vivacarnaval.com' . "\r\n";
	 ini_set('SMTP', "relay-hosting.secureserver.net");
	 ini_set('smtp_port', "25");

	 if(mail('apksteetballa23@aol.com','Subscribed User',$msg,$Header))
	 {
		//echo "Thank You!";
	 }
	 else 
	 {
		//echo "false";
	 }
 
?>
