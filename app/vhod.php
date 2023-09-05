<?php
include("connect.php");

$login = $_POST['login'];
$password = $_POST['password'];

$result = $conn->query("select * from users where login='$login' and password='$password'");

if ($result->num_rows > 0) {
   session_start();
   $_SESSION['cart'] = array();
   $_SESSION['login_status'] = true;
   $_SESSION['user_name'] = $result->fetch_assoc()['login'];
   $conn->close();
   header('Location: ../index.php');
} else {
   $conn->close();
}
if ($_POST['login'] === 'IvanChupshev@gmail.com') {
   header('Location: ./adminka.php');
   exit();
}
