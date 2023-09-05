<?php
include("connect.php");
?>

<!doctype html>
<html lang="ru">

<head>
   <meta charset="utf-8">
   <title>PowerFul. Интернет-магазин. Заказ</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="preconnect" href="https://fonts.googleapis.сom">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../web/fonts/icomoon/style.css">

   <link rel="stylesheet" href="../web/css/bootstrap.css">


   <link rel="stylesheet" href="../web/css/style123.css">
</head>

<body>
   <div class="site-wrap">
      <!--....................................................................................

HEADER

.....................................................................................-->
      <div class="site-navbar py-2">

         <div class="container">
            <div class="d-flex align-items-center justify-content-between">
               <div class="logo">
                  <div class="site-logo">
                     <a href="#" class="js-logo-clone logo"><img src="../web/img/logo.svg" alt="img" /></a>
                  </div>
               </div>
               <!-- <div class="main-nav d-none d-lg-block">
                  <nav class="site-navigation text-right text-md-center" role="navigation">
                     <ul class="site-menu js-clone-nav d-none d-lg-block adminka">
                        <li><a href="?table=Каталог"">Каталог</a></li>
                        <li><a href=" ?table=Заказы">Заказы</a></li>
                        <li><a href="?table=Пользователи">Аккаунты</a></li>
                        <li><a href="?table=Клиенты">Клиенты</a></li>
                        <li><a class="end" href="../index.php">Выход</a></li>
                     </ul>

                  </nav>
               </div> -->
               <form class="edit" method="GET">
                  <nav class="site-navigation text-right text-md-center" role="navigation">
                     <ul class="site-menu d-none d-lg-block adminka">
                        <li><input class="adminka-btn" type="submit" name="table" value="Товары"></li>
                        <li><input class="adminka-btn" type="submit" name="table" value="Заказы"></li>
                        <li><input class="adminka-btn" type="submit" name="table" value="Клиенты"></li>
                        <li><input class="adminka-btn" type="submit" name="table" value="Аккаунты"></li>
                        <li><a class="end" href="../index.php"><span class="icon-sign-out"></span></a></li>
                     </ul>
                  </nav>
               </form>
            </div>
         </div>
      </div>

      <!--...................................................................................

TABLICI

.....................................................................................-->
      <table class="roow1">
         <?php
         if ($_GET) {
            switch ($_GET["table"]) {
               case "Товары":
                  echo "<tr>  
                        <td>id</td>
                        <td>Продукты</td>
                        <td>Категория</td>
                        <td>Брэнд</td>
                        <td>Цена</td>
                        <td>Рейтинг</td>
                        <td>Фото</td>
                    </tr>";

                  $result = $conn->query("select * from goods");

                  if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                        $echo_fields = [
                           $row["id"],
                           $row["good"],
                           $row["category_id"],
                           $row["brand_id"],
                           $row["price"],
                           $row["rating"],
                           $row["photo"],
                           // $debtor
                        ];
                        echo "<tr>";
                        foreach ($echo_fields as $field) {
                           echo "<td>" . $field . "</td>";
                        }
                        echo "<td><a href='?del_z_id={$row["id"]}'>Удалить</a></td></tr>";
                        echo "</tr>";
                     }
                  }
         ?>
                  <div class="dobavlinie">
                     <div class="row">

                        <form action="create.php" method="POST">
                           <div class="register-top-griddd">

                              <div class="adminka__form">
                                 <h4 class="registerrrr__title">Добавление товара</h4>
                                 <div>
                                    <span class="registerrrr__txt">Название продукта<label>*</label></span>
                                    <input type="text" name="good">
                                 </div>
                                 <div>
                                    <span class="registerrrr__txt">Категория<label>*</label></span>
                                    <select class="adminspan" name="category_id">
                                       <option>1</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                       <option>5</option>
                                    </select>
                                    <P class="podskazka">1 - Новинки<br>
                                       2 - Протеин<br>
                                       3 - Гейнер<br>
                                       4 - Креатин<br>
                                       5 - Аминокислоты
                                    </P>
                                 </div>
                                 <div class="brantadmin">
                                    <span class="registerrrr__txt ">Бренд<label>*</label></span>
                                    <select class="adminspan" name="brand_id">
                                       <option>1</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                    </select>
                                    <P class="podskazka">1 - Prime Kraft<br>
                                       2 - PrimeBar<br>
                                       3 - MyProtein<br>
                                       4 - BIGSNT<br>
                                    </P>
                                 </div>
                                 <div>
                                    <span class="registerrrr__txt">Цена<label>*</label></span>
                                    <input type="text" name="price">
                                 </div>
                                 <div>
                                    <span class="registerrrr__txt">Рейтинг<label>*</label></span>
                                    <input type="text" name="rating">
                                 </div>
                                 <div>
                                    <span class="registerrrr__txt">Фото<label>*</label></span>
                                    <input type="text" name="photo">
                                 </div>
                                 <input class="registerrrr__bt" type="submit" value="Добавить товар">
                              </div>
                           </div>

                        </form>

                     </div>
                  </div>
      </table>
      <div class="roooww">
         <table class="roww">
         <?php
                  break;
               case "Заказы":
                  echo "<tr>
                           <td>id_Клиента</td>
                           <td>Адрес</td>
                           <td>Сообщение</td>
                           <td>Дата и время заказа</td>
                        </tr>";

                  $result = $conn->query("select * from orders");

                  if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                        $echo_fields = [
                           $row["client_id"],
                           $row["address"],
                           $row["message"],
                           $row["dt_added"],
                           // $debtor
                        ];
                        echo "<tr>";
                        foreach ($echo_fields as $field) {
                           echo "<td>" . $field . "</td>";
                        }
                        echo "<td><a href='?del_z_id={$row["id"]}'>Удалить</a></td></tr>";
                        echo "</tr>";
                     }
                  }
         ?>


         <?php
                  break;
               case "Клиенты":
                  echo "<tr>
                           <td>id_Клиент</td>
                           <td>Имя</td>
                           <td>Адрес электронной почты</td>
                           <td>Номер телефона</td>
                           <td>Дата и время заказа</td>
                        </tr>";

                  $result = $conn->query("select * from clients");

                  if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                        $echo_fields = [
                           $row["id"],
                           $row["name"],
                           $row["email"],
                           $row["phone"],
                           $row["dt_added"],
                           // $debtor
                        ];
                        echo "<tr>";
                        foreach ($echo_fields as $field) {
                           echo "<td>" . $field . "</td>";
                        }
                        echo "<td><a href='?del_z_id={$row["id"]}'>Удалить</a></td></tr>";
                        echo "</tr>";
                     }
                  }
         ?>


         <?php
                  break;
               case "Аккаунты":
                  echo "<tr>
                           <td>Имя</td>
                           <td>Фамилия</td>
                           <td>Логин</td>
                           <td>Пароль</td>
                        </tr>";

                  $result = $conn->query("select * from users");

                  if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                        $echo_fields = [
                           $row["name"],
                           $row["surname"],
                           $row["login"],
                           $row["password"],
                           // $debtor
                        ];
                        echo "<tr>";
                        foreach ($echo_fields as $field) {
                           echo "<td>" . $field . "</td>";
                        }
                        echo "<td><a href='?del_z_id={$row["id"]}'>Удалить</a></td></tr>";
                        echo "</tr>";
                     }
                  }
         ?>
         </table>
      </div>


<?php
            }
         }
         if (isset($_GET['del_z_id'])) {
            mysqli_query($conn, "DELETE FROM `goods` WHERE `ID` = {$_GET['del_z_id']}");
         }
         if (isset($_GET['del_z_id'])) {
            // mysqli_query($conn, "insert into `vozvrat` select * from `tovar` where id = {$_GET['del_z_id']}");
            mysqli_query($conn, "DELETE FROM `users` WHERE `ID` = {$_GET['del_z_id']}");
         }
         if (isset($_GET['del_z_id'])) {
            // mysqli_query($conn, "insert into `vozvrat` select * from `tovar` where id = {$_GET['del_z_id']}");
            mysqli_query($conn, "DELETE FROM `orders` WHERE `ID` = {$_GET['del_z_id']}");
         }
         if (isset($_GET['del_z_id'])) {
            // mysqli_query($conn, "insert into `vozvrat` select * from `tovar` where id = {$_GET['del_z_id']}");
            mysqli_query($conn, "DELETE FROM `clients` WHERE `ID` = {$_GET['del_z_id']}");
         }
?>

   </div>
</body>

</html>