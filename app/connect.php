<?php
$host = "localhost";
$user = "root";
$passw = "123";
$db_name = "powerful";

$conn = new mysqli($host, $user, $passw, $db_name);

if ($conn->connect_error) {
    die("error: " . $conn->connect_error);
}
