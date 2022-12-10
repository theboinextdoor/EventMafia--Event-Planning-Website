<?php
$name= $_POST['name'];
$visitor_eamail= $_POST['email'];
$partyname= $_POST['party'];
$message= $_POST['message'];

$email_from= 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name : $name.\n".
                "User Email: $visitor_email.\n".
                "User Party : $partyname.\n".
                "User Message: $message.\n";

$to = 'cman55245@gmail.com'

$headers = "From : $email_from  \r\n";
$headers .="Reply to : $visitor_emial \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")




?>