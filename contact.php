<?php
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$subject =$_POST['Subject'];
$message =$_POST['Message'];


$email_from = 'subarnamainali98@gmail.com';

$email_subject ='New form submission';

$email_body = "User name: $name.\n".
              "User email: $visitor_email.\n".
              "User subject: $subject.\n".
              "User message: $message.\n";



$to = "subarnamainali98@gmail.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location:index.html");




?>
