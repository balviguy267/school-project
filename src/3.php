<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Check if name has been entered
if (!$_POST['name']) {
    $errName = 'Please enter your name';
}

// Check if email has been entered and is valid
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}

// Check if message has been entered
if (!$_POST['message']) {
    $errMessage = 'Please enter your message';
}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
    $headers = "From: noreply@your-website.com\r\n"; // This is the email address the generated message will be sent from. 
    $body = "Hello, \n" . $_POST['name'] . "\n\n";
    $body .= 'Message: ' . $_POST['message'];
    mail($email, "New message from contact form", $body, $headers);
}
?>