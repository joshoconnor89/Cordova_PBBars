<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \n\n Email: $email \n\n Message: $message";
$recipient = "joe.t.oconnor@gmail.com";
$subject = "PB-Bars.com Contact Form";
$mailheader = "From: $email";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: thanks.html');
?>
