<?php
require('db.php');
if (isset($_POST['room_type']) == 'Presidential Suite') {
    $room_type = $_POST['room_type'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $price = $_POST['price'];
    $query = "INSERT INTO `bookings`(`name`, `mobile`, `email`, `check_in`, `check_out`, `room_type`, `price`) VALUES ('$name','$mobile','$email','$check_in','$check_out','$room_type','$price')";
    // $query = "INSERT INTO `contacts`(`firstname`, `lastname`, `email`, `subject`, `message`) VALUES ('$fname','$lname','$email','$subject','$message')";
    if (mysqli_query($conn, $query)) {
        $message = 'Booking Confirmed';
    } else {
        $message = 'Booking ki ma chud gye';
    }
    echo $message;
}
