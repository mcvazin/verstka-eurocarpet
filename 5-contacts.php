<?php
include 'header.php';
?>

<div class="container">
    <ul class="breadcrumb">
        <li class="crump"><a href="index.php">Главная</a></li>
        <li class="current-crump">Контакты</li>
    </ul>
</div>

<section class="container">
    <div class="row">
        <div class="col">
            <h1 class="page-title">Контакты</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="row contact-phons footer-contacts">

                <div class="col-sm-6 col-md-12 footer-tels">
                    <p class="contacts-name">Телефоны</p>
                    <p><img src="img/icons/f-tel-1.png" alt=""><a href="tel:(073) 641-99-94">(073) 641-99-94</a>
                        (+Viber <img src="img/svg/top_tels.svg" alt="">)</p>
                    <p><img src="img/icons/f-tel-2.png" alt=""><a href="tel:(073) 641-99-94">(099) 641-99-94</a></p>
                </div>


                <div class="col-sm-12 col-md-12 footer-email">
                    <p class="contacts-name">Наш эл.адрес:</p>
                    <p><img src="img/svg/f_mail.svg" alt="">
                        <a href="mailto:eurocarpets1@gmail.com">eurocarpets1@gmail.com</a></p>
                </div>
                <div class="col-md-12 footer-adres">
                    <p class="contacts-name">Адрес:</p>
                    <p><img src="img/svg/f_map.svg" alt="">г. Киев, ул.Ванды Василевской 7</p>
                </div>


                <div class="col-md-12 footer-calls">
                    <div>
                        <img src="img/svg/s_phones.svg" alt="">
                    </div>
                    <div>
                        <p>Прием звонков:</p>
                        <p>Пн-Пт: с 9:00 до 18:00, Сб: с 10:00 до 15:00, Вс – выходной</p>
                    </div>
                </div>
                <div class="col-md-12 footer-zakaz">
                    <img src="img/svg/24-7.svg" alt="">
                    <a href="#">Прием заказов On-line круглосуточно без выходных</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.3440325738593!2d30.466070815731428!3d50.4533179794757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce819e075739%3A0xe87220beac27f6ca!2z0LLRg9C70LjRhtGPINCR0L7Qs9C00LDQvdCwINCT0LDQstGA0LjQu9C40YjQuNC90LAsIDcsINCa0LjRl9CyLCAwMjAwMA!5e0!3m2!1suk!2sua!4v1538136820339"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="contact-form">
                <p class="form-title">Форма обратной связи</p>

                <div class="form-content">
                    <div class="contact-input">
                        <input type="text" name="name" value="" size="40" class="modal-name" placeholder="Ваше имя">
                        <input type="tel" name="phone" value="" size="40" class="modal-tel"
                               placeholder="+38(0__)___-__-__">
                        <input type="email" name="email" value="" size="40" class="modal-email"
                               placeholder="Ваш e-mail">
                    </div>
                    <textarea name="" id="" cols="30" rows="3" placeholder="Ваш вопрос"></textarea>

                    <a href="#" class="modal-button">
                        Отправить <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?
include 'contacts-footer.php';
?>
