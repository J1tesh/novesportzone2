<?php
session_start();
$con =mysqli_connect('localhost','id19429947_jitesh_kumar' ,)
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['Message'];

$email_from='Novesport@.com';
$email_subject='new form submission';

$email_body="user Name:$name.\n".
             "user email:$visitor_email.\n".
              "subject:$subject.\n".
               "user Message:$message.\n".;
        
 $to='jiteshkumar0302@gmail.com';
 
 $headers="from: $email_from \r\n";
 $headers="Reply-to: $visitor_email \r\n";
   

 mail($to,$email_subject,$email_body,$headers);
 header("Location:contact .html.html");






?>