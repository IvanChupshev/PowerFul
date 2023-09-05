<?php
include("connect.php");

$login = $_POST['login'];
$good = $_POST['good'];
$category_id = $_POST['category_id'];
$brand_id = $_POST['brand_id'];
$price = $_POST['price'];
$rating = $_POST['rating'];
$photo = $_POST['photo'];
if ($conn->connect_error) {
   die("error: " . $conn->connect_error);
}
$result = $conn->query("select * from goods");

if (empty($good) || empty($category_id) || empty($brand_id) || empty($price) || empty($rating) || empty($photo)) {
   echo 'Заполните все поля';
} else {
   if ($result->fetch_assoc()['good'] === $good) {
      echo "такой товар уже существует";
   } else {
      $conn->query("insert into `goods` (`good`, `category_id`, `brand_id`, `price`, `rating`, `photo`  ) VALUE ('$good', '$category_id', '$brand_id', '$price', '$rating', '$photo' )");
      $_POST = array();
      header('Location: adminka.php');
   }
}
