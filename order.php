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
    <link rel="stylesheet" href="web/fonts/icomoon/style.css">

    <link rel="stylesheet" href="web/css/bootstrap.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="components/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="web/css/magnific-popup.css">
    <link rel="stylesheet" href="web/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="web/css/aos.css">
    <link rel="stylesheet" href="web/css/style123.css">
</head>

<body data-page="order">
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
                                <li><a href="index.php">Главная</a></li>
                                <li>
                                    <a href="catalog.php">Каталог</a>
                                </li>
                                <li><a href="contacts.php">Контакты</a></li>

                            </ul>
                        </nav>
                    </div>
                    <div class="icons">
                        <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                        <a href="cart.php" class="icons-btn d-inline-block bag">
                            <span class="icon-shopping-bag"></span></a>
                        <span class="badge" id="total-cart-count"></span>

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
                        <a class="contactshover" href="cart.php">Корзина</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Оформление заказа</strong>
                    </div>
                </div>
            </div>
        </div>
        <!--...................................................................................

CART

.....................................................................................-->
        <div class="container">
            <br />
            <br />
            <br />
            <div class="order-title">
                <h2 class="h3 mb-5 text-black txt">Оформление заказа</h2>
            </div>
            <div id="order-message" class="alert alert-info"></div>
            <br />
            <form id="order-form" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="input-name" class="col-sm-2 control-label title">Ваше имя *</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control white" id="input-name" name="name" placeholder="Ваше имя">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-email" class="col-sm-2 control-label title ">Email *</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control white" id="input-email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-phone" class="col-sm-2 control-label  title">Телефон</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control white" id="input-phone" name="phone" placeholder="Телефон">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label title">Способ доставки</label>
                    <div class="col-sm-6">
                        <input type="hidden" name="delivery_type" id="delivery-type" value="" />
                        <input type="hidden" name="delivery_summa" id="delivery-summa" value="0" />
                        <input type="hidden" name="full_summa" id="full-summa" value="0" />
                        <div class="radio">
                            <label><input type="radio" name="delivery" class="js-delivery-type" data-type="Самовывоз" data-summa="0" checked>Самовывоз (бесплатно)</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="delivery" class="js-delivery-type" data-type="В пределах КАД" data-summa="200">В пределах КАД (200 рублей)</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="delivery" class="js-delivery-type" data-type="Почта России" data-summa="300">Доставка почтой России (300 рублей)</label>
                        </div>
                        <br />
                        <div id="alert-delivery" class="alert alert-info"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-address" class="col-sm-2 control-label title">Адрес доставки</label>
                    <div class="col-sm-6">
                        <textarea class="form-control white" id="input-address" name="address" placeholder="Адрес доставки" row="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-message" class="col-sm-2 control-label title ">Сообщение</label>
                    <div class="col-sm-6">
                        <textarea class="form-control white" id="input-message" name="message" placeholder="Дополнительная информация" row="3"></textarea>
                        <br />
                        <div id="alert-validation" class="alert alert-danger hidden">
                            <button type="button" class="close js-close-alert">&times;</button>
                            <strong>Ошибка!</strong> Заполните обязательные поля, отмеченные *
                        </div>
                        <div id="alert-order-done" class="alert alert-success hidden">
                            <button type="button" class="close js-close-alert">&times;</button>
                            <strong>Спасибо за заказ!</strong> Скоро мы с Вами свяжемся
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <button id="order-btn" type="submit" class="btn btn-primary ">Отправить заказ</button>
                    </div>
                </div>
            </form>
        </div>

        <script id="order-message-template" type="text/template">
            <% if (count !== 0) { %>
            В Вашей корзине <%= count %> товара(ов) на общую сумму <%= summa %> рублей.
            Заполните форму ниже и нажмите кнопку Отправить заказ.
        <% } else { %>
            Ваша корзина пуста. Перед отправкой заказа добавьте в корзину хотя бы один товар.
        <% } %>
    </script>
        <br />
        <br />
        <br />


        <!--...................................................................................

FOOTER

.....................................................................................-->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">


                        <div class="block-5 mb-5">
                            <a href="#" class="footer-logo"> <img src="web/img/logo.svg" alt="POWERFUL"></a>
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
    <script src="web/js/main123.js"></script>

    <script src="js/vendor/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/vendor/underscore.min.js" type="text/javascript"></script>
    <script src="js/modules/cart.js" type="text/javascript"></script>
    <script src="js/modules/order.js" type="text/javascript"></script>
    <script src="js/modules/main.js" type="text/javascript"></script>


</body>

</html>