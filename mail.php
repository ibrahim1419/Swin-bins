<?php

	$to = "irsasib@gmail.com"; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_name = $_POST['name'];
	$sender_phone = $_POST['phone'];
	$contact_option = $_POST['options'];
	$notes = $_POST['note'];


	$subject = "Form submission";
	$message = $sender_name . " Has sent the contact message, His/ har phone number is - " . $sender_phone . ". His / her selected option is " .  $contact_option  . ". He / she worte the following... ". "\n\n" . $notes;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>