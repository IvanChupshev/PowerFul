<?php
include("connect.php");
$login = $_POST['login'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$password2 = $_POST['password'];

if ($password == $password2) {

   $result = $conn->query("select * from users");

   if (empty($login) || empty($password) || empty($name) || empty($surname) || empty($password2)) {
      echo 'Заполните все поля';
   } else {
      if ($result->fetch_assoc()['login'] === $login) {
         echo "такой логин уже существует";
      } else {
         $conn->query("insert into `users` (`name`, `surname`, `login`, `password`) VALUE ('$name', '$surname', '$login', '$password')");
         $_POST = array();
         header('Location: ../index.php');
      }
   }
} else {
   echo "пароль не совпадает";
}
