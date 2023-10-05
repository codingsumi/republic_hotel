<?php
require('db.php');
if (isset($_POST['contact']) == 'contact') {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $room_type = $_POST['room_type'];
    $price = $_POST['price'];
    $query = "INSERT INTO `bookings`(`name`, `mobile`, `email`, `check_in`, `check_out`, `room_type`, `price`) VALUES
     ('$','$','$','$','$','$','$','$','$','$')";
    // $query = "INSERT INTO `contacts`(`firstname`, `lastname`, `email`, `subject`, `message`) VALUES ('$fname','$lname','$email','$subject','$message')";
    if (mysqli_query($conn, $query)) {
        $message = 'contact form submites';
    } else {
        $message = 'Error To send Message';
    }
    echo $message;
}
