<?php

$errors = "";

$myemail = "ishanavishka14@gmail.com";


$name = $_POST['name'];

$email_address = $_POST['email'];

$message = $_POST['message'];

if( empty($errors)){
$to = $myemail;

$email_subject = "Contact form submission: $name";

$email_body = "You have received a new message. Here are the details:\n Name: $name \n Email: $email_address\n Message \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

ini_set('SMTP', "server.com");
ini_set('smtp_port', "25");
// ini_set('sendmail_from', "email@domain.com");

$cofimation_messege=mail($to,$email_subject,$email_body,$headers);

echo $cofimation_messege;

//redirect to the ‘thank you’ page

}

?>