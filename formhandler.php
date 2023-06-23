<?php
$name=$_POST['name'];
$visitoremail=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form='info@yourwebsite.com'
$email_subject='New Form Submission'
$email_body="user name : $name.\n".
            "user email : $visitor_email.\n".
            "subject : $subject.\n".
            "user message : $message.\n";
$to="varunsharmadv@gmail.com";
$headers="Form: $email_form \r\n";
$headers="Reply-To :$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location : contact.html")


?>
