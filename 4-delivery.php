<?php
include 'header.php';
?>

<div class="container">
	<ul class="breadcrumb">
		<li class="crump"><a href="index.php">Главная</a></li>
		<li class="current-crump">Доставка и Оплата</li>
	</ul>
</div>

<section class="container">
	<div class="row">
		<div class="col">
			<h1 class="page-title">Доставка и Оплата</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class = "garanty-white">
				<h2>ОПЛАТА</h2>
				<div class="row pays-list">
					<div class="col-3 pays-list-ico"><img src="img/svg/oplata-1.svg" alt=""></div>
					<div class="col-9 pays-list-text"><span class = "text-violet">Оплата на карту.</span> Заказ оплачивается перечислением денежных средств на нашу карточку Приват Банка. После получения оплаты мы отправляем товар заказчику.</div>

					<div class="col-3 pays-list-ico"><img src="img/svg/oplata-2.svg" alt=""></div>
					<div class="col-9 pays-list-text"><span class = "text-violet">Оплата наложенным платежом</span>  (при доставке по Украине).Оплата заказа при получении товара на складе транспортной компании (выдача товара  только после оплаты). Взимается дополнительная оплата данной услуги по тарифам выбранной транспортной компании.</div>

					<div class="col-3 pays-list-ico"><img src="img/svg/oplata-3.svg" alt=""></div>
					<div class="col-9 pays-list-text"><span class = "text-violet">Безналичный расчет.</span> После оформления заказа Вам выставляют счет, по которому Вы сможете оплатить заказ. Товар доставляется после поступления денег на наш расчетный  счет.</div>
				</div>
				<span class = "text-violet">Обратите внимание!</span>
				<i>Транспортная служба «Деливери» не работает с наложенными платежами. Если Вы хотите воспользоваться услугами этой почты, но при этом собираетесь оплатить только после осмотра товара, процедура следующая. Наша компания отправляет ковер, ковролин с «запретом на выдачу». Вы его получаете и осматриваете на складе. Если товар Вас устраивает, оплачиваете стоимость на карту Приват Банка интернет-магазина, и в течение 10 мин наш менеджер снимает запрет. Соответственно, Вы без проблем забираете заказ со склада.</i>

			</div>
		</div>
		<div class="col-md-6">
			<div class = "garanty-white">
				<h2>ДОСТАВКА</h2>
				<p>Наша компания доставляет ковровые изделия в любую точку Украины транспортными компаниями :  Интайм, Автолюкс, Деливери, Нова Пошта , Ночной Експрес.</p>
				<p>Сроки доставки от 1 до 3-х дней  с 9:00 до 21:00, кроме воскресения. Все курьерские службы предоставляют возможность оформить доставку на  отделение, домой или в офис по предварительному согласованию, в удобное для Вас время.</p>
				<p>Доставка в большие города: Киев, Харьков, Одесса, Днепр, Львов – на следующий день после оформления и оплаты заказа.</p>
				<p><strong>Мы рекомендуем такие транспортные компании:</strong></p>

				<div class="row delivers-list">
					<div class="col-sm-3 delivers-list-ico"><img src="img/icons/delivery-1.png" alt=""></div>
					<div class="col-sm-9"><p>НоваПошта</p> <a href="#">Адреса отделений <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>

					<div class="col-sm-3 delivers-list-ico"><img src="img/icons/delivery-2.png" alt=""></div>
					<div class="col-sm-9"><p>Автолюкс </p> <a href="#">Адреса отделений <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>

					<div class="col-sm-3 delivers-list-ico"><img src="img/icons/delivery-3.png" alt=""></div>
					<div class="col-sm-9"><p>Ин-тайм </p> <a href="#">Адреса отделений <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>

					<div class="col-sm-3 delivers-list-ico"><img src="img/icons/delivery-4.png" alt=""></div>
					<div class="col-sm-9"><p>Деливери </p> <a href="#">Адреса отделений <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?
include 'parts/free-delivery.php';
include 'parts/goods.php';
include 'parts/pref-more.php';


include 'footer.php';
?>
