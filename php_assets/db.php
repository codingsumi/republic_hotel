<?php

$dbname = "republic_hotel";
$username = "root";
$password = "";
$server = "localhost";

$conn = mysqli_connect($server, $username, $password, $dbname);
if ($conn) {
} else {
    echo "Connection Error in Database";
}
