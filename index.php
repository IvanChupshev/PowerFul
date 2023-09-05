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

   <link rel="stylesheet" href="web/css/bootstrap.min.css">
   <link rel="stylesheet" href="web/css/magnific-popup.css">
   <link rel="stylesheet" href="web/css/jquery-ui.css">
   <link rel="stylesheet" href="web/css/owl.carousel.min.css">
   <link rel="stylesheet" href="web/css/owl.theme.default.min.css">
   <link rel="stylesheet" type="text/css" href="web/css/bootstrap.css">

   <link rel="stylesheet" href="web/css/aos.css">

   <link rel="stylesheet" href="web/css/style123.css">
</head>

<body>
   <!--....................................................................................

BACK-TO-TOP

.....................................................................................-->

   <a href="#header" class="back-to-top"></a>




   <div class="site-wrap">

      <!--....................................................................................

HEADER

.....................................................................................-->
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
                        <li class="active"><a href="index.html">Главная</a></li>
                        <li><a href="catalog.php">Каталог</a></li>
                        <li><a href="contacts.php">Контакты</a></li>

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
                     <a href="app/logayt.php" class="icons-btn d-inline-block bag">
                        <span class="icon-sign-out"></span></a><!--Выход-->
                  <?php
                  } else {
                  ?>
                     <a href="./login.php" class="icons-btn d-inline-block bag">
                        <span class="icon-user"></span></a> <!--Вход/регистрация-->
                  <?php
                  }
                  ?>

                  <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>

               </div>
            </div>
         </div>
      </div>
      <!--....................................................................................

SLADER

.....................................................................................-->
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="false">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="web/img/slader 1.png" class="sladerimg" alt="img">
               <div class="row">
                  <div class="carousel-caption d-none d-md-block">
                     <p class="carousel-text">Новые витаминные комплексы</p>
                     <p class="regular">Отличные составы и приятные цены</p>
                     <div class="carousel-bt">
                        <a class="bt-podrobnee" href="catalog.php">ПОДРОБНЕЕ</a>
                     </div>
                  </div>
               </div>


            </div>
            <div class="carousel-item">
               <img src="web/img/slader 2.png" class="sladerimg" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <p class="carousel-text">КЭШБЭК 5%</p>
                  <p class="regular">+скидка на День Рождение!</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="web/img/slader 3.png" class="sladerimg" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <p class="carousel-text">Присоединяйся к нашей<br> рассылки в Telegram,<br> получай уникальные<br>
                     промокоды<br>
                     и узнавай обо всех акциях<br> первым!
                  </p>
                  <p class="regular">Подпишись прямо сейчас!</p>
                  <div class="carousel-bt">
                     <a class="bt-podrobnee" href="https://web.telegram.org/z/">ПОДРОБНЕЕ</a>
                  </div>

               </div>
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div>
      <!--....................................................................................

INFO-blok

.....................................................................................-->
      <div class="infoblok">
         <div class="container">
            <div class="row">
               <div class="container__infoblok">
                  <div class="infoblok__one">
                     <div class="sertificat"><img class="infoblok__img" src="web/img/Certificate.svg" alt="img"></div>
                     <div class="infoblok__text">Европейские сертификаты качества<br> продукции</div>
                  </div>
                  <div class="infoblok__two">
                     <div class="sertificat"><img class="infoblok__img" src="web/img/dostavka.svg" alt="img"></div>
                     <div class="infoblok__text">Бесплатная доставка по России*</div>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <!--....................................................................................

BRands

.....................................................................................-->
      <div class="brands">
         <div class="container">
            <div class="row">
               <div class="brands__container">

                  <div class="brands__head">
                     <div class="brands__title">Бренды</div>
                  </div>
                  <div class="brands__body">
                     <div class="brands__one">
                        <div class="brands__logo"><img class="brands__img" src="web/img/br 1.svg" alt="img"></div>
                     </div>
                     <div class="brands__two">
                        <div class="brands__logo"><img class="brands__img" src="web/img/br 2.svg" alt="img"></div>
                     </div>
                     <div class="brands__three">
                        <div class="brands__logo"><img class="brands__img" src="web/img/br 3.svg" alt="img"></div>
                     </div>
                     <div class="brands__four">
                        <div class="brands__logo"><img class="brands__img" src="web/img/br 4.svg" alt="img"></div>
                     </div>
                  </div>


               </div>
            </div>
         </div>

      </div>

      <!--....................................................................................

Popular Products

.....................................................................................-->

      <div class="site-section">
         <div class="container">
            <div class="row">
               <div class="title-section text-center col-12">
                  <h2 class="text-uppercase">Популярные товары</h2>
               </div>
            </div>

            <div class="row">
               <div class="col-sm-6 col-lg-4 text-center item mb-4">
                  <span class="tag">sale</span>
                  <a href="catalog.php"> <img src="web/img/protein.png" alt="Image"></a>
                  <h3 class="text-dark"><a class="red" href="catalog.php">Starter pack<br> Muscles&Power</a></h3>
                  <p class="price"><del>4 850 руб.</del> &mdash; 2 990 руб.</p>
               </div>
               <div class="col-sm-6 col-lg-4 text-center item mb-4">
                  <a href="catalog.php"> <img src="web/img/womcomplex.png" alt="Image"></a>
                  <h3 class="text-dark"><a href="catalog.php"> Женский<br> комплекс Prime<br> Women Daily<br>Complex</a></h3>
                  <p class="price">900 руб.</p>
               </div>
               <div class="col-sm-6 col-lg-4 text-center item mb-4">
                  <a href="catalog.php"> <img src="web/img/FatBurner.png" alt="Image"></a>
                  <h3 class="text-dark"><a href="catalog.php">Жиросжигатель<br> Fat Burner,<br> Капсулы (90 шт)</a></h3>
                  <p class="price">790 руб.</p>
               </div>

               <div class="col-sm-6 col-lg-4 text-center item mb-4">
                  <span class="tag">sale</span>
                  <a href="catalog.php"> <img src="web/img/ProteinMilk.png" alt="Image"></a>
                  <h3 class="text-dark"><a href="catalog.php">Сывороточный<br> протеин WHEY MILK<br> CHOCOLATE (молочный<br>
                        шоколад), 500 гр</a></h3>
                  <p class="price"><del>1 150 руб.</del> &mdash; 1 640 руб.</p>
               </div>
               <div class="col-sm-6 col-lg-4 text-center item mb-4">
                  <a href="catalog.php"> <img src="web/img/gainer.png" alt="Image"></a>
                  <h3 class="text-dark"><a href="catalog.php">Гейнер Mass Gainer<br> со вкусом со вкусом<br> «Клубника-банан»<br>
                        (Strawberry-Banana),<br> 1000 г</a></h3>
                  <p class="price"> 1 150 руб.</p>
               </div>
               <div class="col-sm-6 col-lg-4 text-center item mb-4">
                  <span class="tag">Sale</span>
                  <a href="catalog.php"> <img src="web/img/creatine.png" alt="Image"></a>
                  <h3 class="text-dark"><a href="catalog.php">CREATINE<br> MONOHYDRATE,<br> Капсулы (240 шт)</a></h3>
                  <p class="price"><del>1 250 руб.</del> &mdash; 1 078 руб.</p>
               </div>
            </div>
         </div>
      </div>
      <!--....................................................................................

NEW PRODUCTS

.....................................................................................-->
      <div class="site-section bg-light">
         <div class="container">
            <div class="row">
               <div class="title-section text-center col-12">
                  <h2 class="text-uppercase">Новинки</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 block-3 products-wrap">
                  <div class="nonloop-block-3 owl-carousel">

                     <div class="text-center item mb-4">
                        <a href="catalog.php"> <img src="web/img/new 1.png" alt="Image"></a>
                        <h3 class="text-dark"><a href="catalog.php">Сывороточный протеин<br> GOLD STANDARD</a></h3>
                        <p class="price">2 990 руб.</p>
                     </div>

                     <div class="text-center item mb-4">
                        <a href="catalog.php"> <img src="web/img/new 2.png" alt="Image"></a>
                        <h3 class="text-dark"><a href="catalog.php"> Creatine,<br> Капсулы (200 шт) </a></h3>
                        <p class="price"> 1 078 руб.</p>
                     </div>

                     <div class="text-center item mb-4">
                        <a href="catalog.php"> <img src="web/img/new 1.png" alt="Image"></a>
                        <h3 class="text-dark"><a href="catalog.php">Сывороточный протеин<br> GOLD STANDARD</a></h3>
                        <p class="price">2 990 руб.</p>
                     </div>

                     <div class="text-center item mb-4">
                        <a href="catalog.php"> <img src="web/img/new 2.png" alt="Image"></a>
                        <h3 class="text-dark"><a href="catalog.php">Creatine,<br> Капсулы (200 шт)</a></h3>
                        <p class="price"> 1 078 руб.</p>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--...................................................................................

TESTIMONIALS

.....................................................................................-->
      <div class="site-section">
         <div class="container">
            <div class="row">
               <div class="title-section text-center col-12">
                  <h2 class="text-uppercase">Отзывы клиентов</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 block-3 products-wrap">
                  <div class="nonloop-block-3 no-direction owl-carousel">

                     <div class="testimony">
                        <blockquote>
                           <img src="web/img/person_1.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                           <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                              Minus ratione sit quaerat unde.&rdquo;</p>
                        </blockquote>

                        <p>&mdash; Петрова Александра</p>
                     </div>

                     <div class="testimony">
                        <blockquote>
                           <img src="web/img/person_2.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                           <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                              Minus ratione sit quaerat unde.&rdquo;</p>
                        </blockquote>

                        <p>&mdash; Соколов Николай</p>
                     </div>

                     <div class="testimony">
                        <blockquote>
                           <img src="web/img/person_3.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                           <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                              Minus ratione sit quaerat unde.&rdquo;</p>
                        </blockquote>

                        <p>&mdash; Бирюков Иван</p>
                     </div>

                     <div class="testimony">
                        <blockquote>
                           <img src="web/img/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                           <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                              Minus ratione sit quaerat unde.&rdquo;</p>
                        </blockquote>

                        <p>&mdash; Лазарев Дамир</p>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--...................................................................................

FOOTER

.....................................................................................-->
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

   <script src="web/js/jquery-3.3.1.min.js"></script>
   <script src="web/js/jquery-ui.js"></script>
   <script src="web/js/popper.min.js"></script>
   <script src="web/js/bootstrap.min.js"></script>
   <script src="web/js/owl.carousel.min.js"></script>
   <script src="web/js/jquery.magnific-popup.min.js"></script>
   <script src="web/js/aos.js"></script>
   <script src="web/js/bootstrap.js"></script>

   <script src="web/js/main123.js"></script>
   <script src="web/js/backToTop.js"></script>

</body>

</html>