<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Интернет-магазин спортивного питания PowerFul</title>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="web/fonts/icomoon/style.css">

   <link rel="stylesheet" href="web/css/bootstrap.css">
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="components/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="web/css/magnific-popup.css">
   <link rel="stylesheet" href="web/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="web/css/aos.css">

   <link rel="stylesheet" href="web/css/style123.css">
</head>

<body data-page="">
   <div class="site-wrap">


      <div class="site-navbar py-2">

         <div class="search-wrap">
            <div class="container">
               <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
               <form action="#" method="post">
                  <input type="text" class="form-control" placeholder="Поиск по сайту">
               </form>
            </div>
         </div>

         <div class="container">
            <div class="d-flex align-items-center justify-content-between">
               <div class="logo">
                  <div class="site-logo">
                     <a href="index.php" class="js-logo-clone logo"><img src="web/img/logo.svg" alt="img" /></a>
                  </div>
               </div>
               <div class="main-nav d-none d-lg-block">
                  <nav class="site-navigation text-right text-md-center" role="navigation">
                     <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li><a href="index.php">Главная</a></li>
                        <li>
                           <a href="catalog.php">Каталог</a>
                        </li>
                        <li class="active"><a href="contacts.php">Контакты</a></li>

                     </ul>
                  </nav>
               </div>
               <div class="icons">
                  <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>

                  <a href="cart.php" class="icons-btn d-inline-block bag">
                     <span class="icon-shopping-bag"></span>
                  </a>

                  <span class="badge" id="total-cart-count">2</span>

                  <?php
                  session_start();
                  if ($_SESSION['login_status']) {
                  ?>
                     <a href="app/logayt.php" class="icons-btn d-inline-block bag"><span class="icon-sign-out"></span></a><!--Выход-->
                  <?php
                  } else {
                  ?>
                     <a href="./login.php" class="icons-btn d-inline-block bag"><span class="icon-user"></span></a> <!--Вход/регистрация-->
                  <?php
                  }
                  ?>
                  <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>

               </div>
            </div>
         </div>
      </div>

      <div class="bg-light py-3">
         <div class="container">
            <div class="row">
               <div class="col-md-12 mb-0">
                  <a class="contactshover" href="index.php">Главная</a> <span class="mx-2 mb-0">/</span>
                  <strong class="text-black">Контакты</strong>
               </div>
            </div>
         </div>
      </div>

      <div class="site-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2 class="h3 mb-5 text-black">Задать вопрос</h2>
               </div>
               <div class="col-md-12">

                  <form action="#" method="post">

                     <div class="p-3 p-lg-5 border">
                        <div class="form-group row">
                           <div class="col-md-6">
                              <label for="c_fname" class="text-blackk">Имя <span class="text-danger">*</span></label>
                              <input type="text" class="form-controll" id="c_fname" name="c_fname">
                           </div>
                           <div class="col-md-6">
                              <label for="c_lname" class="text-blackk">Фамилия <span class="text-danger">*</span></label>
                              <input type="text" class="form-controll" id="c_lname" name="c_lname">
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-md-12">
                              <label for="c_email" class="text-blackk">Email <span class="text-danger">*</span></label>
                              <input type="text" class="form-controll" id="c_email" name="c_email" placeholder="">
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-md-12">
                              <label for="c_subject" class="text-blackk">Товар</label>
                              <input type="text" class="form-controll" id="c_subject" name="c_subject">
                           </div>
                        </div>

                        <div class="form-group row">
                           <div class="col-md-12">
                              <label for="c_message" class="text-blackk">Сообщение </label>
                              <textarea type="text" name="c_message" id="c_message" cols="30" rows="7" class="form-controll"></textarea>
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-lg-12">
                              <input type="submit" class="btn btn-primaryy btn-lg btn-block" value="Отправить">
                           </div>
                        </div>
                     </div>
                  </form>
               </div>

            </div>
         </div>
      </div>



      <div class="site-section bg-primaryy">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <h2 class="text-white mb-4">Магазины</h2>
               </div>
               <div class="col-lg-4">
                  <div class="p-4 bg-white mb-3 rounded">
                     <span class="d-block text-black h6 text-uppercase">Москва</span>
                     <p class="mb-0">Смоленский бульвар, 22/14, 119002</p>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="p-4 bg-white mb-3 rounded">
                     <span class="d-block text-black h6 text-uppercase">Санкт-Петербург</span>
                     <p class="mb-0">Казанская улица, 46, 190031</p>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="p-4 bg-white mb-3 rounded">
                     <span class="d-block text-black h6 text-uppercase">Пенза</span>
                     <p class="mb-0">Московская улица, 74, 440000</p>
                  </div>
               </div>
            </div>
         </div>

      </div>


      <footer class="site-footer">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">


                  <div class="block-5 mb-5">
                     <a href="index.php" class="footer-logo"> <img src="web/img/logo.svg" alt="POWERFUL"></a>
                     <ul class="list-unstyled1">
                        <li class="address">111111, Пенза
                           Кирова, 28</li>
                        <li class="phone"><a href="tel://23923929210">+7 (812) 648-17-57</a></li>
                        <li class="email">info@powerful.ru</li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 mx-auto mb-5 mb-lg-0 mn-footer">
                  <ul class="list-unstyled">
                     <li><a href="index.php">Главная</a></li>
                     <li><a href="catalog.php">Каталог</a></li>
                     <li><a href="contacts.php">Контакты</a></li>
                  </ul>
               </div>

               <div class="col-md-6 col-lg-3">
                  <div class="block-7">
                     <h3 class="footer-heading mb-4">Мы в социальных сетях</h3>
                     <div class="icons">
                        <a href="https://vk.com/faaakesoul" class="icons-btn d-inline-block logog"><img class="lg" src="web/img/vk.svg" alt="VK"></a>
                        <a href="https://www.youtube.com" class="icons-btn d-inline-block logog"><img class="lg" src="web/img/youtube.svg" alt="youtube"></a>
                        <a href="https://ok.ru" class="icons-btn d-inline-block logog"><img class="lg" src="web/img/ok.svg" alt="ok"></a>
                        <a href="https://web.telegram.org/z/" class="icons-btn d-inline-block logog"><img class="lg" src="web/img/tg.svg" alt="tg"></a>
                        <a href="https://web.whatsapp.com" class="icons-btn d-inline-block logog"><img class="lg" src="web/img/wp.svg" alt="wp"></a>
                     </div>
                  </div>


               </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
               <div class="col-md-12">
                  <p>
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     Copyright &copy
                     <script>
                        document.write(new Date().getFullYear());
                     </script>
                  </p>
               </div>

            </div>
         </div>
      </footer>


   </div>

   <script src="js/vendor/jquery.min.js" type="text/javascript"></script>
   <script src="js/vendor/jquery.cookie.js" type="text/javascript"></script>
   <script src="components/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
   <script src="js/vendor/underscore.min.js" type="text/javascript"></script>
   <script src="js/modules/catalogDB.js" type="text/javascript"></script>
   <script src="js/modules/cart.js" type="text/javascript"></script>
   <script src="js/modules/main.js" type="text/javascript"></script>
   <script src="js/modules/contacts.js" type="text/javascript"></script>

   <script src="web/js/jquery-3.3.1.min.js"></script>
   <script src="web/js/jquery-ui.js"></script>
   <script src="web/js/popper.min.js"></script>
   <script src="web/js/bootstrap.min.js"></script>
   <script src="web/js/owl.carousel.min.js"></script>
   <script src="web/js/jquery.magnific-popup.min.js"></script>
   <script src="web/js/aos.js"></script>
   <script src="web/js/bootstrap.js"></script>

   <script src="web/js/main123.js"></script>
</body>

</html>