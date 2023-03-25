<?php
// Import the PHPMailer library
require 'path/to/PHPMailerAutoload.php';

// Get the recipient email address from the request parameters
$to = $_POST['to'];

// Get the email subject and body from the request parameters
$subject = $_POST['subject'];
$body = $_POST['body'];

// Create a new PHPMailer object
$mail = new PHPMailer;

// Set the mailer to use SMTP
$mail->isSMTP();

// Set the SMTP host and port
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;

// Set the SMTP authentication method and credentials
$mail->SMTPAuth = true;
$mail->Username = 'donotreply177776@gmail.com';
$mail->Password = 'DONOTREPLY';

// Set the email recipient, subject, and body
$mail->addAddress($to);
$mail->Subject = $subject;
$mail->Body = $body;

// Send the email
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   
