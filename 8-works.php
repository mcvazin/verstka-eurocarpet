<?php
include 'header.php';
?>

<div class="container">
	<ul class="breadcrumb">
		<li class="crump"><a href="index.php">Главная</a></li>
		<li class="current-crump">Наши работы</li>
	</ul>
</div>

<section class="container page-works">
	<div class="row">
		<div class="col">
			<h1 class="page-title">Наши работы</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-md-4">
			<div class="blog-card">
				<div>
					<div class = "blog-card-img">
						<img src="img/works/work-big-1.jpg" alt="">
					</div>
					<a href="#" class="blog-title">Название работы</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="blog-card">
				<div>
					<div class = "blog-card-img">
						<img src="img/works/work-big-2.jpg" alt="">
					</div>
					<a href="#" class="blog-title">Название работы</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="blog-card">
				<div>
					<div class = "blog-card-img">
						<img src="img/works/work-big-3.jpg" alt="">
					</div>
					<a href="#" class="blog-title">Название работы</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="blog-card">
				<div>
					<div class = "blog-card-img">
						<img src="img/works/work-big-3.jpg" alt="">
					</div>
					<a href="#" class="blog-title">Название работы</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="blog-card">
				<div>
					<div class = "blog-card-img">
						<img src="img/works/work-big-1.jpg" alt="">
					</div>
					<a href="#" class="blog-title">Название работы</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="blog-card">
				<div>
					<div class = "blog-card-img">
						<img src="img/works/work-big-2.jpg" alt="">
					</div>
					<a href="#" class="blog-title">Название работы</a>
				</div>
			</div>
		</div>



	</div>
</section>

<div class="container news-pagination">
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

<?
include 'parts/pref.php';

include 'footer.php';
?>
