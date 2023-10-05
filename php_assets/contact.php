<?php
require('db.php');
if (isset($_POST['contact']) == 'contact') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $contact = $_POST['contact'];
    $query = "INSERT INTO `contacts`(`firstname`, `lastname`, `email`, `subject`, `message`) VALUES ('$fname','$lname','$email','$subject','$message')";
    if (mysqli_query($conn, $query)) {
        $message = 'contact form submites';
    } else {
        $message = 'Error To send Message';
    }
    echo $message;
}
