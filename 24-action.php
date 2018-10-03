<?php
include 'header.php';
?>

<div class="container">
    <ul class="breadcrumb">
        <li class="crump"><a href="index.php">Главная</a></li>
        <li class="current-crump"> Акционные товары</li>
    </ul>
</div>

<div class="container">
    <div class="row pid-category page-action">
        <div class="col-12">
            <div class="good-home-card pidcat-filter mob-action-2">
                <div class="col-filter">
                    <ul class="navbar-nav filter-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ковролин</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ковровые дорожки</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ковры</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Линолеум</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Искусственная трава</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Коврики</a>
                        </li>

                    </ul>
                    <a href="#" class="filter-toggler" data-toggle="collapse" data-target="#pid-cat-filters"
                       aria-expanded="true" aria-label="Toggle navigation">
                        ФИЛЬТРЫ <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                    <div id="pid-cat-filters" class="pid-cat-filters collapse">
                        <div class="filter-price">
                            <p class="filter-block-title">Цена:</p>
                            <div id="slider">
                                <div class="price-inputs">
                                    от
                                    <input class="min-price" type="number">
                                    до
                                    <input class="max-price" type="number">
                                </div>
                            </div>
                        </div>
                       

                        <div class="form-group filter-manuf">
                            <p class="filter-block-title">Компания-производитель:</p>
                            <input type="checkbox" id="manuf1">
                            <label for="manuf1">BALTA</label>

                            <input type="checkbox" id="manuf2">
                            <label for="manuf2">ITC</label>

                            <input type="checkbox" id="manuf3">
                            <label for="manuf3">VEBE</label>

                            <div class="collapse" id="more2">
                                <input type="checkbox" id="manuf4">
                                <label for="manuf4">BALTA</label>

                                <input type="checkbox" id="manuf5">
                                <label for="manuf5">ITC</label>

                                <input type="checkbox" id="manuf6">
                                <label for="manuf6">VEBE</label>
                            </div>
                            <p>
                                <a class="btn btn-collapse-more collapsed" data-toggle="collapse" href="#more2"
                                   role="button"
                                   aria-expanded="false">
                                    Показать все
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="good-home-card pid-cat-about mob-action-1">
                <h1 class="category-title">Акционные товары</h1>
                <p>На сегодняшний день в нашем ассортименте находится более чем 500 видов ковров и ковровых дорожек.
                    Все наши товары современные, высокого качества, имеют сертификаты, не вредят здоровью. Наша
                    миссия – помочь нашим клиентам создать максимальный уют и комфорт в доме. Наша система продаж
                    основана на индивидуальномподходе к каждому заказчику. Благодаря высокому профессионализму и
                    богатому опыту работы в этом сегменте рынка, все клиенты после работы с нами остаются довольными
                    и счастливыми.
                </p>
                <p>На сегодняшний день в нашем ассортименте находится более чем 500 видов ковров и ковровых дорожек.
                    Все наши товары современные, высокого качества, имеют сертификаты, не вредят здоровью. Наша
                    миссия – помочь нашим клиентам создать максимальный уют и комфорт в доме. Наша система продаж
                    основана на индивидуальномподходе к каждому заказчику. Благодаря высокому профессионализму и
                    богатому опыту работы в этом сегменте рынка, все клиенты после работы с нами остаются довольными
                    и счастливыми.</p>
            </div>

            <div class="good-home-card mob-action-4 pid-category-header mob-action-3">
                <div>Сортировать:
                    <div class="selectdiv">
                        <select id="input-sort" class="sorting" onchange="location = this.value;">
                            <option value="?sort=p.sort_order&amp;order=ASC" selected="selected">По умолчанию
                            </option>
                            <option value="?sort=pd.name&amp;order=ASC">Название (А - Я)</option>
                            <option value="?sort=pd.name&amp;order=DESC">Название (Я - А)</option>
                            <option value="?sort=p.price&amp;order=ASC">Цена (низька &gt; висока)</option>
                            <option value="?sort=p.price&amp;order=DESC">Цена (висока &gt; низька)</option>
                            <option value="?sort=rating&amp;order=DESC">Рейтинг (начиная с высокого)</option>
                            <option value="?sort=rating&amp;order=ASC">Рейтинг (начиная с низького)</option>
                            <option value="?sort=p.model&amp;order=ASC">Модель (А - Я)</option>
                            <option value="?sort=p.model&amp;order=DESC">Модель (Я - А)</option>
                        </select>
                    </div>
                </div>
                <div>
                    <span>Страница 1 из 5</span>
                    <a href="#" title="prev" class="pagination-arrow pagination-prev"></a>
                    <a href="#" title="next" class="pagination-arrow pagination-next"></a>
                </div>
            </div>

            <div class="good-home-card mob-action-4 good-new">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="good-card-kover.php">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4 good-new">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4 good-new">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4 good-new">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4 good-new">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4 good-new">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4 good-new">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4 good-new">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4 good-new">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4 good-new">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4 good-new">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="good-home-card mob-action-4 good-new">
                <img src="img/goods/kover-1.jpg" alt="">
                <p class="good-title"><a href="#">Ковер ZIYNET 0012</a></p>
                <p class="goot-price">5 224,00 грн</p>
                <div class="good-footer">
                    <a href="" class="to-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href="" class="to-compare"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                    <button class="to-buy">Купить</button>
                </div>
                <div class="good-preview  d-none ">
                    <p class="good-preview-title">Цвет:</p>
                    <p class="good-preview-value">Беж, Красный, Синий</p>
                    <p class="good-preview-title">Размеры:</p>
                    <div class="good-preview-razmer">
                        <p><span> 0,8*1,5 м</span><span class="dots"></span><span
                                    class="good-preview-price">640 грн</span>
                        </p>
                        <p><span> 1,2*1,7 м</span><span class="dots"></span><span
                                    class="good-preview-price">1200 грн</span>
                        </p>
                        <p><span> 1,6*2,3 м</span><span class="dots"></span><span
                                    class="good-preview-price">1920 грн</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 good-paggination">
            <div class="pid-category-paggination d-block d-md-none">
                <span class="active">1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <a>...</a>
                <a href="#">10</a>
            </div>
            <div><a href="#" class="good-paggination-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i>
                    Предыдущая страница</a></div>
            <div class="pid-category-paggination d-none d-md-block"><span class="active">1</span> <a href="#">2</a> <a
                        href="#">3</a><a>...</a><a
                        href="#">10</a></div>
            <div><a href="#" class="good-paggination-arrow"> Следующая страница <i class="fa fa-angle-right"
                                                                                   aria-hidden="true"></i></a></div>
        </div>

    </div>

</div>


<?php
include 'parts/seo-text.php';
include 'footer.php';
?>





