<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>eurocarpet</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">
    <!-- style bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <!-- style slick -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- main style -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="row top-navs">
            <div class="col-6">
                <nav class="navbar navbar-expand-lg navbar-light nav-main">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav-main"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav-main">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Оплата и доставка</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Гарантия</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Отзывы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Услуги</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Контакты</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col d-none d-md-block">
                <nav class="navbar navbar-expand-lg navbar-light nav-user">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav-user"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav-user">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i> Вход /
                                    Регистрация </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> Список
                                    желаний</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-balance-scale" aria-hidden="true"></i>
                                    Сравнение товаров</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>


            <div class="col-6 col-md-2 top-phons d-block d-md-none">
                <p class="top-phone1"><img src="img/svg/top_tels.svg" alt="">(073) 641-99-94</p>
                <p class="top-phone2">(099) 641-99-94</p>
            </div>
        </div>
        <div class="row top-logos">
            <div class="col-md-3 top-logo">
                <img src="img/logo/top-logo.png" alt="">
                <p class="sub-logo">Сучасні покриття для підлоги</p>
            </div>
            <div class="col-md-6 top-search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Поиск...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"
                                                                                   aria-hidden="true"></i></button>
                    </div>
                </div>
                <p class="sub-search"><img src="img/svg/24-7.svg" alt=""><span>Прием заказов On-line круглосуточно без выходных</span>
                </p>
            </div>

            <div class="col-12 d-block d-md-none">
                <nav class="navbar navbar-expand-lg navbar-light nav-user nav-user-mobile">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-md-2 top-phons desc-top-phons">
                <p class="top-phone1 d-none d-md-block"><img src="img/svg/top_tels.svg" alt="">(073) 641-99-94</p>
                <p class="top-phone2 d-none d-md-block">(099) 641-99-94</p>
                <p class="call-back"><a href="#" data-toggle="modal" data-target="#call-back">Заказать звонок</a></p>

            </div>
            <div class="col-md-1 top-minicart">
                <a href="#" class="minikart-img">
                    <img src="img/mini-cart.png" alt="">
                    <span class="count">4</span>
                </a>
                <a href="#" class="money-count text-center"> 23 456 грн.</a>
            </div>
        </div>
    </div>
    <div class="container-fluid goods-main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav-catalog"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    Каталог
                </button>
                <div class="collapse navbar-collapse" id="navbarNav-catalog">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/svg/m_kovrolin.svg" alt=""> Ковролин
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Ковролин для дома</a>
                                <a class="dropdown-item" href="#">Коммерческий ковролин</a>
                                <a class="dropdown-item" href="#">Выставочный</a>
                                <a class="dropdown-item" href="#">Детский</a>
                                <a class="dropdown-item" href="#">Бюджетный</a>
                                <a class="dropdown-item" href="#">Ковровая плитка</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/svg/m_kovr_dor.svg" alt=""> Ковровые дорожки
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Ковролин для дома</a>
                                <a class="dropdown-item" href="#">Коммерческий ковролин</a>
                                <a class="dropdown-item" href="#">Выставочный</a>
                                <a class="dropdown-item" href="#">Детский</a>
                                <a class="dropdown-item" href="#">Бюджетный</a>
                                <a class="dropdown-item" href="#">Ковровая плитка</a>
                                <a class="dropdown-item" href="category.php">Все ковровые дорожки</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/svg/m_kovru.svg" alt="">Ковры
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Ковролин для дома</a>
                                <a class="dropdown-item" href="#">Коммерческий ковролин</a>
                                <a class="dropdown-item" href="#">Выставочный</a>
                                <a class="dropdown-item" href="#">Детский</a>
                                <a class="dropdown-item" href="#">Бюджетный</a>
                                <a class="dropdown-item" href="#">Ковровая плитка</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/svg/m_linoleum.svg" alt="">Линолеум
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Ковролин для дома</a>
                                <a class="dropdown-item" href="#">Коммерческий ковролин</a>
                                <a class="dropdown-item" href="#">Выставочный</a>
                                <a class="dropdown-item" href="#">Детский</a>
                                <a class="dropdown-item" href="#">Бюджетный</a>
                                <a class="dropdown-item" href="#">Ковровая плитка</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/svg/m_grass.svg" alt="">Искусственная трава
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Ковролин для дома</a>
                                <a class="dropdown-item" href="#">Коммерческий ковролин</a>
                                <a class="dropdown-item" href="#">Выставочный</a>
                                <a class="dropdown-item" href="#">Детский</a>
                                <a class="dropdown-item" href="#">Бюджетный</a>
                                <a class="dropdown-item" href="#">Ковровая плитка</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/svg/m_kovriki.svg" alt="">Коврики
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Ковролин для дома</a>
                                <a class="dropdown-item" href="#">Коммерческий ковролин</a>
                                <a class="dropdown-item" href="#">Выставочный</a>
                                <a class="dropdown-item" href="#">Детский</a>
                                <a class="dropdown-item" href="#">Бюджетный</a>
                                <a class="dropdown-item" href="#">Ковровая плитка</a>

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>