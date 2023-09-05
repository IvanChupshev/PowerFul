<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
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

<body data-page="catalogDB">
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
                                <li><a href="index.php">Главная</a></li>
                                <li class="active"> <a href="catalog.php">Каталог</a>
                                </li>
                                <li><a href="contacts.php">Контакты</a></li>

                            </ul>
                        </nav>
                    </div>
                    <div class="icons">
                        <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                        <a href="cart.php" class="icons-btn d-inline-block bag"><span class="icon-shopping-bag"></span></a>
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
                        <strong class="text-black">Каталог</strong>
                    </div>
                </div>
            </div>
        </div>
        <!--...................................................................................

CATALOG

.....................................................................................-->
        <div class="container el">
            <br />
            <br />
            <br />
            <div class="col-md-12">
                <h2 class="h3 mb-5 text-black txt">Каталог товаров</h2>
            </div>

            <br />
            <div id="filters" class="col-md-12">
                <div class="btn-groupp">
                    <button type="button" data-category="0" class="bt btn-default active js-category">Все</button>
                    <button type="button" data-category="1" class="bt btn-default js-category">Новинки</button>
                    <button type="button" data-category="2" class="bt btn-default js-category">Протеин</button>
                    <button type="button" data-category="3" class="bt btn-default js-category">Гейнер</button>
                    <button type="button" data-category="4" class="bt btn-default js-category">Креатин</button>
                    <button type="button" data-category="5" class="bt btn-default js-category">Аминокислоты</button>
                </div>
                <br />
                <br />
                <div></div>
                <form id="filters-form" role="form">
                    <div class="col-md-4">
                        <h4>Бренды</h4>
                        <div id="brands">
                            <div class="checkboxx"><label><input type="checkbox" name="brands[]" value="1">
                                    </label>
                            </div>
                            <div class="checkboxx"><label><input type="checkbox" name="brands[]" value="2">
                                    </label>
                            </div>
                            <div class="checkboxx"><label><input type="checkbox" name="brands[]" value="3">
                                    </label>
                            </div>
                            <div class="checkboxx"><label><input type="checkbox" name="brands[]" value="4">
                                    </label></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Фильтр по ценам</h4>
                        <div id="prices-label">0 - 0 руб.</div>
                        <br />
                        <input type="hidden" id="min-price" name="min_price" value="5000">
                        <input type="hidden" id="max-price" name="max_price" value="50000">
                        <div id="prices">
                        </div>
                    </div>
                </form>
            </div>
            <br />
            <br />
            <ul id="goods" class="col-md-12">
                <img src="img/loading.gif" alt="" />
            </ul>
        </div>

        <script id="goods-template" type="text/template">
            <% _.each(goods, function(item) { %>
        <li class="small-good-item row bottom">
            <div class="col-md-2">
                <img class="small-good-item__img" src="img/goods/<%= item.photo %>" />
            </div>
            <div class="col-md-10 rrrr">
                <div class="small-good-item__name"><%- item.good %> (рейтинг <%= item.rating %>)</div>
                <div class="small-good-item__brand">Бренд: <%- item.brand %></div>
                <div class="small-good-item__price"><%= item.price %> руб.</div>
                <button
                    class="small-good-item__btn-add btn btn-info btn-sm js-add-to-cart"
                    data-id="<%= item.good_id %>"
                    data-name="<%- item.good %>"
                    data-price="<%= item.price %>"
                >Добавить в корзину</button>
            </div>
        </li>
        <% }); %>
    </script>

        <script id="brands-template" type="text/template">
            <% _.each(brands, function(item) { %>
        <div class="checkbox"><label><input type="checkbox" name="brands[]" value="<%= item.id %>"> <%= item.brand %></label></div>
        <% }); %>
    </script>




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




    <script src="js/vendor/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor/jquery.cookie.js" type="text/javascript"></script>
    <script src="components/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/vendor/underscore.min.js" type="text/javascript"></script>
    <script src="js/modules/catalogDB.js" type="text/javascript"></script>
    <script src="js/modules/cart.js" type="text/javascript"></script>
    <script src="js/modules/main.js" type="text/javascript"></script>

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