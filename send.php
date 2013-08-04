<?php

	// Here we get all the information from the fields sent over by the form.
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	 
	$to = "mike@mikemunroe.com"; // Change the recipient email address to your address.
	$subject = "Mail from mikemunroe.com";
	$headers = "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n";
	$message = "From: " . $name . "\r\nEmail: " . $email . "\r\nMessage: " . $message;
	 
	//This method sends the mail.
    mail($to, $subject, $message, $headers);

?>