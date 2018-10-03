<?php
include 'header.php';
?>

<div class="container">
    <ul class="breadcrumb">
        <li class="crump"><a href="index.php">Главная</a></li>
        <li class="crump"><a href="category.php">Ковролин</a></li>
        <li class="crump"><a href="category.php">Ковролин для дома</a></li>
        <li class="current-crump">Ковролин FARSISTAN 5602/675</li>
    </ul>
</div>

<section class="container page-good-card">
    <div class="row good-name-row">
        <div class="col-12">
            <h1 class="good-name">Ковролин FARSISTAN 5602/675</h1>
        </div>
        <div class="col-12">
            <div class="good-enabled">В наличии</div>
            <div class="good-model">Модель: FARSISTAN-5602/675</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="good-foto-slider new-good">
                <img src="img/goods/kovrolin.jpg" alt="">
                <img src="img/goods/kover.jpg" alt="">
                <img src="img/goods/linoleum.jpg" alt="">
            </div>
        </div>
        <div class="col-md-7 good-about">
            <div class="row">
                <div class="col-6 col-md-4 good-price">
                    <p class="new-price">2 984,00 грн</p>
                    <p class="old-price">4 230,00 грн</p>
                </div>
                <div class="col-6 col-md-4 good-buy-one-but">
                    <a href="#" class="to-buy">Купить в 1 клик</a>
                </div>
                <div class="col-md-4 good-wish-compare">
                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> <span>В желания</span></a>
                    <a href="#"><i class="fa fa-balance-scale" aria-hidden="true"></i><span>В сравнение</span></a>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6 filter-rulon-otrez">
                    <input type="radio" name="name" id="r1" checked class="rul-otrez">
                    <label class="label-radio" for="r1">Рулон</label>

                    <input type="radio" name="name" id="r2" class="rul-otrez">
                    <label class="label-radio" for="r2">Отрез</label>

                </div>
                <div class="col-sm-6 good-instruction">
                    <a href="#">
                        <img src="img/icons/instruct.svg" class="svg-hovered" alt="">
                        <span>Инструкция по уходу</span></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 good-buy-sizes">
                    <div class="row">
                        <div class="col-sm-6 good-buy-one-size">
                            <div><span class="spets-name">Основа: </span>
                                <div class="selectdiv">
                                    <select onchange="">
                                        <option value="11" selected="selected">Войлок</option>
                                        <option value="22">не войлок</option>
                                        <option value="33">не войлок 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 good-buy-one-size">
                            <div><span class="spets-name">Цвет: </span>
                                <div class="selectdiv">
                                    <select onchange="">
                                        <option value="11" selected="selected">Выберите</option>
                                        <option value="22">2</option>
                                        <option value="33">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 good-buy-one-size">
                            <div><span class="spets-name">Ширина, м.: </span>
                                <div class="selectdiv">
                                    <select onchange="">
                                        <option value="11" selected="selected">111</option>
                                        <option value="22">2</option>
                                        <option value="33">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 good-buy-one-size">
                            <div><span class="spets-name">Длина, м.: </span>
                                <div class="selectdiv">
                                    <select onchange="">
                                        <option value="11" selected="selected">111</option>
                                        <option value="22">2</option>
                                        <option value="33">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-5 good-counts-price">
                            <span class="spets-name">Количество:</span>
                            <div class="input-group good-counts">
                                <div class="">
                                    <button class="btn btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
                                </div>
                                <input type="" id="qty_input" class="form-control form-control-sm" value="1"
                                       min="1">
                                <div class="">
                                    <button class="btn  btn-sm" id="plus-btn"><i class="fa fa-plus"></i></button>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 good-counts-price-counted">
                            <span class="spets-name new-price-sizes-name">Цена:</span>
                            <span class="new-price-sizes">2 984,00 грн</span>
                        </div>
                        <div class="col-sm-4 col-md-6 form-group good-overlock text-center">
                            <input type="checkbox" id="overlock">
                            <label for="overlock"> + оверлок (15 грн. м)</label>
                        </div>
                        <div class="col-md-6 good-card-to-buy text-center">
                            <a href="#" class="to-buy">Купить</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row good-card-details">
        <div class="col-md-9 good-card-character">
            <div class="row">
                <div class="col-12 character-titles home-goods-tabs">
                    <div class="nav justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active nav-action" data-toggle="tab" href="#nav-char"
                           aria-selected="true">Характеристики</a>
                        <a class="nav-item nav-link nav-new" data-toggle="tab" href="#nav-about" aria-selected="false">Описание</a>
                        <a class="nav-item nav-link nav-popular" data-toggle="tab" href="#nav-oplata"
                           aria-selected="false">Оплата, Доставка, гарантия</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 character-details">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-char">
                            <div class="row div-table">
                                <div class="col-sm-4 div-col div-col-title">
                                    Стиль:
                                </div>
                                <div class="col-sm-8 div-col">
                                    ЕВРОПЕЙСКАЯ КЛАССИКА
                                </div>
                                <div class="col-sm-4 div-col div-col-title">
                                    Материал:
                                </div>
                                <div class="col-sm-8  div-col">ШЕРСТЬ 100%</div>
                                <div class="col-sm-4  div-col div-col-title">
                                    Тип производства:
                                </div>
                                <div class="col-sm-8  div-col"> МАШИНОТКАННЫЙ</div>
                                <div class="col-sm-4 div-col div-col-title">
                                    Вес:
                                </div>
                                <div class="col-sm-8 div-col"> 4 кг/м2</div>
                                <div class="col-sm-4 div-col div-col-title">
                                    Плотность:
                                </div>
                                <div class="col-sm-8 div-col"> 1000000</div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="nav-about">
                            Описание
                        </div>
                        <div class="tab-pane fade " id="nav-oplata">
                            Оплата, Доставка, гарантия
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 good-card-testimonials">
            <div class="test-title">
                <span>Отзывы</span>
                <a href="#">Оставить отзыв</a>
            </div>
            <div class="one testimonial">
                <div class="test-header">
                    <div class="test-autor">
                        <span class="test-name">Елена</span><br>
                        <span class="test-date">20.08.2018</span>
                    </div>

                    <div class="test-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <p class="test-text">
                    Я давно уже хотела купить ковер с длинным ворсом, но муж все время говорил о том как ты его будешь
                    чистить. Но все-таки в преддверии Нового года сделала себе подарок и купила. Как оказалось не зря,
                    даже
                    мужу понравилось ступать на него босыми ногами, лежать, играть с детьми. И в уборке оказалось все
                    просто, прошла пылесосом и все, как и обычный ковер без ворса. Зато каждый раз наступая на него
                    испытываешь чувство радости. А как приятно проснувшись утром опустить на него свои ножки. Поэтому не
                    бойтесь и приобретайте, получите приятные имоции. Его можно даже использовать в качестве спального
                    места
                    вместо матрасов если приехало большое количество гостей.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container home-goods-tabs viewed-slider">
    <div class="row">
        <div class="col-12">
            <div class="nav justify-content-center" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active nav-action" data-toggle="tab" href="#" aria-selected="true">Просмотренные
                    товары</a>
            </div>
        </div>
        <div class="col-12">
            <div>
                <div class="tab-pane fade show active" id="">
                    <div class="row">
                        <div class="col-12 home-goods-slider">
                            <div class="good-home-card good-new">
                                <img src="img/goods/kover-1.jpg" alt="">
                                <p class="good-title">Ковер ZIYNET 0012</p>
                                <p class="goot-price">5 224,00 грн</p>
                                <div class="good-footer">
                                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                    <button class="to-buy">Купить</button>
                                </div>
                            </div>
                            <div class="good-home-card good-sale">
                                <img src="img/goods/kover-1.jpg" alt="">
                                <p class="good-title">Ковер ZIYNET 0012</p>
                                <p class="goot-price">5 224,00 грн</p>
                                <div class="good-footer">
                                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                    <button class="to-buy">Купить</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container home-goods-tabs viewed-slider">
    <div class="row">
        <div class="col-12">
            <div class="nav justify-content-center" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active nav-action" data-toggle="tab" href="#" aria-selected="true">Похожие
                    товары</a>
            </div>
        </div>
        <div class="col-12">
            <div>
                <div class="tab-pane fade show active" id="">
                    <div class="row">
                        <div class="col-12 home-goods-slider">
                            <div class="good-home-card good-new">
                                <img src="img/goods/kover-1.jpg" alt="">
                                <p class="good-title">Ковер ZIYNET 0012</p>
                                <p class="goot-price">5 224,00 грн</p>
                                <div class="good-footer">
                                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                    <button class="to-buy">Купить</button>
                                </div>
                            </div>
                            <div class="good-home-card good-sale">
                                <img src="img/goods/kover-1.jpg" alt="">
                                <p class="good-title">Ковер ZIYNET 0012</p>
                                <p class="goot-price">5 224,00 грн</p>
                                <div class="good-footer">
                                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                    <button class="to-buy">Купить</button>
                                </div>
                            </div>
                            <div class="good-home-card good-new">
                                <img src="img/goods/kover-1.jpg" alt="">
                                <p class="good-title">Ковер ZIYNET 0012</p>
                                <p class="goot-price">5 224,00 грн</p>
                                <div class="good-footer">
                                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                    <button class="to-buy">Купить</button>
                                </div>
                            </div>
                            <div class="good-home-card good-sale">
                                <img src="img/goods/kover-1.jpg" alt="">
                                <p class="good-title">Ковер ZIYNET 0012</p>
                                <p class="goot-price">5 224,00 грн</p>
                                <div class="good-footer">
                                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                    <button class="to-buy">Купить</button>
                                </div>
                            </div>
                            <div class="good-home-card good-new-sale">
                                <img src="img/goods/kover-1.jpg" alt="">
                                <p class="good-title">Ковер ZIYNET 0012</p>
                                <p class="goot-price">5 224,00 грн</p>
                                <div class="good-footer">
                                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                    <button class="to-buy">Купить</button>
                                </div>
                            </div>
                            <div class="good-home-card good-sale">
                                <img src="img/goods/kover-1.jpg" alt="">
                                <p class="good-title">Ковер ZIYNET 0012</p>
                                <p class="goot-price">5 224,00 грн</p>
                                <div class="good-footer">
                                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                    <button class="to-buy">Купить</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?
include 'footer.php';
?>
