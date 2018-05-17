<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$dropdown1 = $_POST['dropdown1'];
	$dropdown2 = $_POST['dropdown2'];
	$dropdown3 = $_POST['dropdown3'];
	$dropdown4 = $_POST['dropdown4'];
	$message = $_POST['message'];
	$formContent= "From: $name \n Phone: $phone \n Email: $email \n Companion Type: $dropdown1 \n Animals Age: $dropdown2 \n Animals Gender: $dropdown3 \n Animals Weight: $dropdown4 \n Special Requirements: $message";
	$recipient = "fixingfelinesofliny@gmail.com";
	$subject = "Booking an Appointment";
	mail($recipient, $subject, $formContent, $mailheader) or die ("Error");
	echo "Thank you for booking your appointment with Fixing Felines! Once we recieve your email we will contact your to confirm your appointment with us. Have a great day.";
 ?>