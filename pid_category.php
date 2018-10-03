<?php
include 'header.php';
?>

<div class="container">
    <ul class="breadcrumb">
        <li class="crump"><a href="index.php">Главная</a></li>
        <li class="crump"><a href="category.php">Ковролин</a></li>
        <li class="current-crump"> Коммерческий ковролин</li>
    </ul>
</div>

<div class="container">
    <div class="row pid-category">
        <div class="col-12">
            <div class="good-home-card pidcat-filter">
                <div class="col-filter">
                    <ul class="navbar-nav filter-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ковролин для дома</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Коммерческий ковролин</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Выставочный</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Детский</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Бюджетный</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ковровая плитка</a>
                        </li>

                    </ul>

                    <div class="filter-rulon-otrez">
                        <input type="radio" name="name" id="r1" checked class="rul-otrez">
                        <label class="label-radio" for="r1">Рулон</label>

                        <input type="radio" name="name" id="r2" class="rul-otrez">
                        <label class="label-radio" for="r2">Отрез</label>

                    </div>

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
                        <div class="form-group filter-width">
                            <p class="filter-block-title">Ширина покрытия:</p>
                            <input type="checkbox" id="1m">
                            <label for="1m">1 m</label>

                            <input type="checkbox" id="15m">
                            <label for="15m">1.5 m</label>

                            <input type="checkbox" id="2m">
                            <label for="2m">2 m</label>

                            <div class="collapse" id="more-using">
                                <input type="checkbox" id="25m">
                                <label for="25m">2.5 m</label>

                                <input type="checkbox" id="3m">
                                <label for="3m">3 m</label>

                                <input type="checkbox" id="35m">
                                <label for="35m">3.5 m</label>

                                <input type="checkbox" id="4m">
                                <label for="4m">4 m</label>

                                <input type="checkbox" id="45m">
                                <label for="45m">4.5 m</label>

                                <input type="checkbox" id="5m">
                                <label for="5m">5 m</label>
                            </div>
                            <p>
                                <a class="btn btn-collapse-more collapsed" data-toggle="collapse" href="#more-using"
                                   role="button"
                                   aria-expanded="false">
                                    Показать все
                                </a>
                            </p>
                        </div>

                        <div class="form-group filter-using">
                            <p class="filter-block-title"> Применение:</p>
                            <input type="checkbox" id="use1">
                            <label for="use1">Для офиса</label>

                            <input type="checkbox" id="use2">
                            <label for="use2">Для отеля</label>

                            <input type="checkbox" id="use3">
                            <label for="use3">Для ресторана/кафе</label>

                            <div class="collapse" id="more-using">
                                <input type="checkbox" id="use4">
                                <label for="use4">Для кинотеатра</label>

                                <input type="checkbox" id="use5">
                                <label for="use5">Для бильярдной</label>

                                <input type="checkbox" id="use6">
                                <label for="use6">Для мероприятий</label>

                                <input type="checkbox" id="use7">
                                <label for="use7">Для общественных помещений</label>
                            </div>
                            <p>
                                <a class="btn btn-collapse-more collapsed" data-toggle="collapse" href="#more-using"
                                   role="button"
                                   aria-expanded="false">
                                    Показать все
                                </a>
                            </p>

                        </div>

                        <div class="form-group filter-height">
                            <p class="filter-block-title"> Толщина покрытия:</p>
                            <input type="checkbox" id="h1">
                            <label for="h1">5 мм</label>

                            <input type="checkbox" id="h2">
                            <label for="h2">6 мм</label>

                            <input type="checkbox" id="h3">
                            <label for="h3">7 мм</label>

                            <input type="checkbox" id="h4">
                            <label for="h4">8 мм</label>

                            <input type="checkbox" id="h5">
                            <label for="h5">25 мм</label>
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

                        <div class="form-group filter-color">
                            <p class="filter-block-title">Цвет:</p>
                            <input type="checkbox" id="с1">
                            <label for="с1">Бежевый </label>

                            <input type="checkbox" id="с2">
                            <label for="с2">Коричневый</label>

                            <input type="checkbox" id="с3">
                            <label for="с3">Серый</label>
                            <div class="collapse" id="more_color">


                                <input type="checkbox" id="с4">
                                <label for="с4">Белый</label>

                                <input type="checkbox" id="с5">
                                <label for="с5">Кремовый</label>

                                <input type="checkbox" id="с6">
                                <label for="с6">Красный</label>

                                <input type="checkbox" id="с7">
                                <label for="с7">Зеленый</label>

                                <input type="checkbox" id="с8">
                                <label for="с8">Синий</label>

                                <input type="checkbox" id="с9">
                                <label for="с9">Другие цвета</label>
                            </div>
                            <p>
                                <a class="btn btn-collapse-more collapsed" data-toggle="collapse" href="#more_color"
                                   role="button"
                                   aria-expanded="false">
                                    Показать все
                                </a>
                            </p>
                        </div>
                        <div class="form-group filter-vors">
                            <p class="filter-block-title">Состав ворса:</p>
                            <input type="checkbox" id="v1">
                            <label for="v1">шерсть
                            </label>

                            <input type="checkbox" id="v2">
                            <label for="v2">акрил</label>


                        </div>
                        <div class="form-group filter-country">
                            <p class="filter-block-title">Страна-производитель:</p>
                            <input type="checkbox" id="co1">
                            <label for="co1">Бельгия </label>

                            <input type="checkbox" id="co2">
                            <label for="co2">Нидерланды</label>

                            <input type="checkbox" id="co3">
                            <label for="co3">Украина</label>

                        </div>
                    </div>
                </div>
            </div>

            <div class="good-home-card pid-cat-about">
                <h1 class="category-title">Коммерческий ковролин</h1>
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

            <div class="good-home-card pid-category-header">
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

            <div class="good-home-card good-new">
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
            <div class="good-home-card good-new">
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
            <div class="good-home-card">
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
            <div class="good-home-card good-new">
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
            <div class="good-home-card good-new">
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
            <div class="good-home-card">
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
            <div class="good-home-card good-new">
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
            <div class="good-home-card">
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
            <div class="good-home-card good-new">
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
            <div class="good-home-card good-new">
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
            <div class="good-home-card">
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
            <div class="good-home-card good-new">
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
            <div class="good-home-card good-new">
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
            <div class="good-home-card">
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
            <div class="good-home-card good-new">
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
            <div class="good-home-card">
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
            <div class="good-home-card good-new">
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
            <div class="good-home-card good-new">
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
            <div class="good-home-card">
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
            <div class="good-home-card good-new">
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


<section class="container seo-text">
    <div class="row">
        <div class="col">
            <h2 class = "text-center">Eurocarpet – интернет-магазин напольных покрытий в Украине.</h2>
            <p> На сегодняшний день в нашем ассортименте находится более чем 500 видов ковров и ковровых дорожек. Все
                наши товары современные, высокого качества, имеют сертификаты, не вредят здоровью. Наша миссия – помочь
                нашим клиентам создать максимальный уют и комфорт в доме. Наша система продаж основана на
                индивидуальномподходе к каждому заказчику. Благодаря высокому профессионализму и богатому опыту работы в
                этом сегменте рынка, все клиенты после работы с нами остаются довольными и счастливыми.
            </p>
            <p><strong>Преимущества, которые Вы получаете при покупке напольных покрытий в интернет-магазине
                    Eurocarpet:</strong></p>
            <ul>
                <li>Большой ассортимент ковровых изделий.</li>
                <li>Высокое качество товаров.</li>
                <li>Доступная цена.</li>
                <li>Осуществляется возврат товара в течении 14 дней.</li>
                <li>Доставка ковров и ковровых покрытий по всей Украине 1-2 дня.</li>
                <li>Работаем с наложенным платежом.</li>
                <li>Индивидуальный подбор ковровых изделий для каждого клиента.</li>
                <li>Предоставляем бесплатные образцы.</li>
                <li>Отправка товара с собственного склада.</li>
            </ul>


            <p>
                Заказанные товары Вы сможете получить способами, перечисленными ниже:
            </p>
            <p>
                <strong>Доставка по Украине.</strong> Доставляем в любой уголок Украины транспортными службами: Новая
                Почта, Интайм,
                Деливери, при крупногабаритных товарах индивидуальным транспортом на заказ.
            </p>
            <p>
                <STRONG>Доставка по Киеву и области.</STRONG> В отдельных случаях возможна курьерская доставка в течении
                1-2 дней после
                оплаты товара.
            </p>
            <p>
                Чтобы купить необходимый ковер или ковровую дорожку через интернет-магазин, Вы можете оформить заказ с
                помощью сайта или связаться с нашим менеджером по телефонам (099) 641 99 94 или (073) 641 99 94.
            </p>
            <p>
                Также на сайте есть возможность заказать обратный звонок (в течении 1 рабочего часа наши менеджеры сами
                с
                Вами свяжутся).
            </p>
            <p class="call-me">
                Звоните, будем рады помочь Вам в выборе напольных покрытий!
            </p>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>





