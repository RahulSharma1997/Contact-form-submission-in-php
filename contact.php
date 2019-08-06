<?php
$name = $_POST['name'];
$email = $_POST['Email'];
$phone = $_POST['phone'];
$call = $_POST['tele'];
$website = $_POST['Website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$priorityone = $_POST['priorityone'];
$typeone = $_POST['typeone'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Priorityone: $priorityone \n Typeone: $typeone \n Message: $message";
$recipient = "info@bestimageclipping.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
