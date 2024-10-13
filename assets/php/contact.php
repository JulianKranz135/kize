<?php
if(isset($_POST['submit'])) { 
$to =  "biblestudies29@gmail.com";
$subject = "BibleStudy";
$name_field = $_POST['name'];                
$email_field = $_POST['email'];                             
$message = $_POST['message'];
$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message"; 
$success = mail($to, $subject, $body);
}
?>                                                                                                          ()