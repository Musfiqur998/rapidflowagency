<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'contact@rapidflowagency.com';  
$subject = 'New message from contact form';
$body = "Name: $name\n";
$body .= "Phone: $phone\n";
$body .= "Email: $email\n";
$body .= "Message: $message\n";


mail($to, $subject, $body);


header('Location: success.html');
exit;  
?>