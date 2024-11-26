<?php
$name = $_POST['NAME'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message =$_POST['message']

$email_form = 'www.primepickhub.online'

$email_subject = 'new form submission';

$email_body = "user name: $name.\n";
               "user Email: $visitor_email.\n";
               "subject: $subject.\n";
               "user message: $message.\n";


               $to = 'thecreaty484@gmail.com';

$headers = "from: $email_form \r\n";
$headers = "Reply-To: $visitor_email \r\n";

mail($to,email_subject,$email_body,$headers);

header("location: contact.html")
?>

