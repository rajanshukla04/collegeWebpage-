<?php 
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$sujbect=$_POST['subject'];
$message=$_POST['message'];


$email_from='shuklarajan997@gmail.com'
$email_subject='new Form Submission ';


$email_body="User Name:$name.\n". 
            "User Email: $visitor_email.\n". 
            "Subject : $subject.\n". 
            "User Message: $message .\n";
        
$to='rajan93992@gmial.com'
$headers="From:$email_from \r\n";
$headers="Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");







?>