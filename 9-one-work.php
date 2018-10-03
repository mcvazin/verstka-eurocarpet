<?php
include 'header.php';
?>

<div class="container">
    <ul class="breadcrumb">
        <li class="crump"><a href="index.php">Главная</a></li>
        <li class="crump"><a href="#">Наши работы</a></li>
        <li class="current-crump">Название работы</li>
    </ul>
</div>

<section class="container page-works">
    <div class="row">
        <div class="col">
            <h1 class="page-title">Название работы</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-1 col-md-3"></div>
        <div class="col-10 col-md-6">
            <div class="page-works-slider">
                <img src="img/works/one-work-big-1.jpg" alt="">
                <img src="img/works/one-work-big-1.jpg" alt="">
                <img src="img/works/one-work-big-1.jpg" alt="">
            </div>
        </div>
        <div class="col-1 col-md-3"></div>

        <div class="col-12 one-work-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                voluptatem.</p>
        </div>
        </div>
</section>

<div class="container news-pagination">
    <div class="row">
        <div class="col-12 good-paggination">
            <div class="pid-category-paggination d-block d-md-none">
                <a href="#"><img src="img/icons/facebook.png" alt=""></a>
                <a href="#"><img src="img/icons/google.png" alt=""></a>
                <a href="#"><img src="img/icons/twitter.png" alt=""></a>
            </div>
            <div><a href="#" class="good-paggination-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i>
                    Предыдущая страница</a></div>
            <div class="pid-category-paggination d-none d-md-block">
                <a href="#"><img src="img/icons/facebook.png" alt=""></a>
                <a href="#"><img src="img/icons/google.png" alt=""></a>
                <a href="#"><img src="img/icons/twitter.png" alt=""></a>
            </div>
            <div><a href="#" class="good-paggination-arrow"> Следующая страница <i class="fa fa-angle-right"
                                                                                   aria-hidden="true"></i></a></div>
        </div>
    </div>
</div>

<?
include 'parts/pref.php';

include 'footer.php';
?>
