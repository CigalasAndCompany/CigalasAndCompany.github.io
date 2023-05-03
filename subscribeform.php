<?php 
if(isset($_POST['submit'])){
    $to = "cigalasandcompany@gmail.com"; // this is your Email address
    $from = $_POST['_replyto']; // this is the sender's Email address
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = " Someone wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . "\n\n" . $_POST['message'];
?>
