<?php
//Две строчки ниже для защиты форм от спам-ботов
session_start();
$_SESSION['sf_key'] = md5(substr(session_id(), mt_rand(0, 10), mt_rand(3, 10)) . time());

header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'Title';
$desc = 'Description';
$url = SI_CurrentPageURL();
$image = SI_CurrentPageImage();
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" class="loading">


<head>

    <!-- Meta information (content-type + mobile mod) -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="cmsmagazine" content="2f345f737ed0d95e9259d18f5edc8cd7">
    <meta name="tagline" content="http://hello-brand.ru/">


    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon -->
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="shortcut icon" href="favicon.png" type="image/png">


    <!-- CSS styles -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/jquery.formstyler.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style-fix.css" type="text/css" media="screen">


    <!-- OGP -->
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:description" content="<?php echo $desc; ?>"/>
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">


    <!-- Page title -->
    <title><?php echo $title; ?> | <?php echo $desc; ?></title>

</head>

<body id="main">
<div id="global-wrapper">

    <!--===================================================== Header -->
    <header class="layout-header">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-1-4">
                    <a href="#" class="logo si-jump">
                        <img src="images/logo.png" alt=" ">
                    </a>
                </div>

                <div class="col-2-4">
                    <ul class="nav">
                        <li><a href="">Характеристики</a></li>
                        <li><a href="">Услуги</a></li>
                        <li><a href="">Отзывы</a></li>
                        <li><a href="">Архитектура</a></li>
                    </ul>
                </div>

                <!-- Phone block -->
                <div class="col-1-4 align-right">
                    <div class="si-phone">
                        <a href="tel:+78003501500" class="phone-link">8 800 350-15-00</a>
                        <a href="#" class="open-phone-modal consult" data-extra="1">Заказать консультацию</a>
                    </div>
                </div>

            </div>
        </div>
    </header>


    <!--===================================================== section heading -->
    <section class="section-heading" id="heading">

        <div class="wrapper-heading-slider">
            <!-- Swiper -->
            <div class="swiper-container heading-slider">
                <div class="swiper-wrapper">

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="background-heading i-1"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="background-heading i-2"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="background-heading i-3"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="background-heading i-4"></div>
                    </div>
                </div>
            </div>

            <!--            Pagination-->
            <div class="swiper-pagination heading-pagination"></div>
        </div>

        <div class="container">

            <div class="small-text">
                Дата-центр GreenBushDC
            </div>
            <h1>
                Надёжный центр обработки
                данных для вашего бизнеса
            </h1>

            <div class="address-text">
                Москва, г. Зеленоград, Проезд 683, д.8
            </div>

            <div class="more-block">
                <a href="#" class="btn btn-yellow">
                    Узнать больше
                </a>
                <div class="more-block__text">
                    Ответим на вопросы и поможем построить
                    IT-инфраструктуру для вашего бизнеса.
                </div>
            </div>

            <div class="last-wrapper">
                <div class="last-wrapper__block">
                    <div class="title">
                        99,98%
                    </div>
                    <div class="text">
                        Старт инвестиций<br>
                        от 10 000 $
                    </div>
                </div>
                <div class="last-wrapper__block">
                    <div class="title">
                        24х7х365

                    </div>
                    <div class="text">
                        физический доступ
                        к оборудованию
                    </div>
                </div>
                <div class="last-wrapper__block">
                    <div class="title">
                        0 ЧАСОВ
                    </div>
                    <div class="text">
                        период отключения сервиса для проведения плановых работ
                    </div>
                </div>
                <div class="last-wrapper__block">
                    <div class="title">
                        15 МИН
                    </div>
                    <div class="text">
                        время предоставления доступа с момента обращения
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--===================================================== section green -->
    <section class="section-green" id="green">
        <div class="container">
            <div class="row">
                <div class="col-3-4">
                    <div class="title">
                        Скидка -15% на аренду серверов до конца октября
                    </div>
                </div>
                <div class="col-1-4 align-right">
                    <a href="#" class="btn btn-white">
                        Узнать больше
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section technical -->
    <section class="section-technical" id="technical">
        <div class="container">
            <div class="row">
                <div class="col-3-4">
                    <div class="title">
                        Технические характеристики
                    </div>
                    <div class="text">
                        Инженерная инфраструктура проекта полностью соответствует
                        требованиям «Уровня 3» (Tier III) по классификации Uptime Institute.
                    </div>
                    <a href="#" class="btn btn-yellow">Смотреть сертификат</a>
                </div>
                <div class="col-1-4 align-right">
                    <img src="images/technical-img.png" alt=" " class="technical-img">
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section options -->
    <section class="section-options" id="options">
        <div class="container">
            <h1>
                Гарантированные
                эксплуатационные параметры
            </h1>
            <div class="row">
                <div class="col-1-4">
                    <div class="options-block">
                        <div class="options-block__icon i-1">
                            <?php include('svg/light-bulb.svg'); ?>
                        </div>
                        <div class="options-block__title">
                            1 категория
                        </div>
                        <div class="options-block__text">
                            электроснабжения оборудования
                            и инженерной инфраструктуры
                        </div>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="options-block">
                        <div class="options-block__icon i-2">
                            <?php include('svg/protection.svg'); ?>
                        </div>
                        <div class="options-block__title">
                            50±0,2 Гц
                        </div>
                        <div class="options-block__text">
                            гарантированная
                            частота электропитания
                        </div>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="options-block">
                        <div class="options-block__icon i-3">
                            <?php include('svg/plug.svg'); ?>
                        </div>
                        <div class="options-block__title">
                            210-230В
                        </div>
                        <div class="options-block__text">
                            напряжение на вводах
                            электропитания
                        </div>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="options-block">
                        <div class="options-block__icon i-4">
                            <?php include('svg/flash.svg'); ?>
                        </div>
                        <div class="options-block__title">
                            15 кВт

                        </div>
                        <div class="options-block__text">
                            максимальная
                            потребляемая мощность
                            на стойку
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-4">
                    <div class="options-block">
                        <div class="options-block__icon i-5">
                            <?php include('svg/data.svg'); ?>
                        </div>
                        <div class="options-block__title">
                            2 штуки
                        </div>
                        <div class="options-block__text">
                            количество лучей, подведённых
                            к каждому серверному шкафу
                        </div>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="options-block">
                        <div class="options-block__icon i-6">
                            <?php include('svg/celsius.svg'); ?>
                        </div>
                        <div class="options-block__title">
                            22–27С°
                        </div>
                        <div class="options-block__text">
                            гарантированная
                            температура в
                            холодных коридорах
                        </div>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="options-block">
                        <div class="options-block__icon i-7">
                            <?php include('svg/computing.svg'); ?>
                        </div>
                        <div class="options-block__title margin-top">
                            30–70%
                        </div>
                        <div class="options-block__text">
                            относительная влажность
                            в области размещения
                            оборудования
                        </div>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="options-block">
                        <div class="options-block__icon i-8">
                            <?php include('svg/device.svg'); ?>
                        </div>
                        <div class="options-block__title">
                            2258х800
                            х1200
                        </div>
                        <div class="options-block__text a-1">
                            максимальные параметры
                            размещаемых стоек (мм)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section options -->
    <section class="section-service" id="service">
        <div class="container">
            <div class="wrapper">
                <h1>
                    Наши услуги
                </h1>
                <div class="tabs-block service-block" data-tab-block="t-service">

                    <ul class="nav nav-tabs">
                        <li class="tab-link active" data-tab="t-service-1" data-tab-block="t-service">
                            Colocation
                        </li>

                        <li class="tab-link" data-tab="t-service-2" data-tab-block="t-service">
                            VDS
                        </li>

                        <li class="tab-link" data-tab="t-service-3" data-tab-block="t-service">
                            Аренда помещений
                        </li>
                    </ul>

                    <div class="tabs-content-container">

                        <!-- ================================================ service tab 1-->
                        <div class="tab-content active" data-tab="t-service-1" data-tab-block="t-service">
                            <div class="tab-header">
                                <h3>
                                    COLOCATION
                                </h3>
                                <div class="sub_title">
                                    Размещение сервера с обеспечением
                                    доступа к сети интернет
                                </div>
                            </div>
                            <div class="tab-text">
                                <div class="text">
                                    Услуга Colocation ("Колокейшн") позволяет разместить удаленно серверное оборудование
                                    клиента в условиях резервированных каналов связи и бесперебойного электропитания. К
                                    вашим серверам всегда будет быстрый доступ, так как дата центр Green Bush находится
                                    в Москве.
                                </div>
                                <div class="price-block">
                                <span>
                                    от
                                </span>
                                    <div class="price-text">
                                        25 000
                                        <!--                                        <span>-->
                                        <?php //include('svg/ruble.svg'); ?><!--</span>-->
                                        <!--                                        <span>₽</span>-->
                                    </div>
                                    <span>
                                    за 1 стойку
                                </span>
                                </div>
                            </div>
                        </div>

                        <!-- ================================================ service tab 2-->
                        <div class="tab-content" data-tab="t-service-2" data-tab-block="t-service">
                            <div class="tab-header">
                                <h3>
                                    COLOCATION
                                </h3>
                                <div class="sub_title">
                                    Размещение сервера с обеспечением
                                    доступа к сети интернет
                                </div>
                            </div>
                            <div class="tab-text">
                                <div class="text">
                                    Услуга Colocation ("Колокейшн") позволяет разместить удаленно серверное оборудование
                                    клиента в условиях резервированных каналов связи и бесперебойного электропитания. К
                                    вашим серверам всегда будет быстрый доступ, так как дата центр Green Bush находится
                                    в Москве.
                                </div>
                                <div class="price-block">
                                <span>
                                    от
                                </span>
                                    <div class="price-text">
                                        25 000 Р
                                    </div>
                                    <span>
                                    за 1 стойку
                                </span>
                                </div>
                            </div>
                        </div>

                        <!-- ================================================ service tab 3-->
                        <div class="tab-content" data-tab="t-service-3" data-tab-block="t-service">
                            <div class="tab-header">
                                <h3>
                                    COLOCATION
                                </h3>
                                <div class="sub_title">
                                    Размещение сервера с обеспечением
                                    доступа к сети интернет
                                </div>
                            </div>
                            <div class="tab-text">
                                <div class="text">
                                    Услуга Colocation ("Колокейшн") позволяет разместить удаленно серверное оборудование
                                    клиента в условиях резервированных каналов связи и бесперебойного электропитания. К
                                    вашим серверам всегда будет быстрый доступ, так как дата центр Green Bush находится
                                    в Москве.
                                </div>
                                <div class="price-block">
                                <span>
                                    от
                                </span>
                                    <div class="price-text">
                                        25 000 Р
                                    </div>
                                    <span>
                                    за 1 стойку
                                </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="more-block">
                    <div class="text">
                        Ответим на вопросы и поможем построить
                        IT-инфраструктуру для вашего бизнеса.
                    </div>
                    <a href="#" class="btn btn-yellow">
                        Узнать больше
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!--===================================================== section include -->
    <section class="section-include" id="include">
        <div class="container">
            <h3>
                Что включено
            </h3>
            <div class="row">
                <div class="col-1-2">
                    <div class="list">
                        •<span class="empty"></span>Серверный Шкаф исполнителя 600x1070 42U, 2 независимых ввода,
                        2PDU по
                        9евро-розеток.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Сервис “SmartHands” 24/7 включен в стоимость (перезагрузка серверов,
                        коммутация оборудования, визуальный контроль) по обращению в Техническую поддержку.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Бесплатная доставка оборудования в наш ЦОД из любой точки России.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Подключение к портам 100Мбит/с 1G/10G.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Круглосуточный доступ к оборудованию.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Круглосуточная техническая поддержка 24/7.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Качественная связь и минимальный ping.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Утилизация упаковки от оборудования включена в стоимость
                        размещения оборудования в ЦОД.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Оборудование корпоративного класса Hewlett Packard Enterprise под
                        любые задачи - от небольшой файловой базы 1С до проекта по внедрению SAP
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Стоечные "rack" сервера
                    </div>
                </div>
                <div class="col-1-2">
                    <div class="list">
                        •<span class="empty"></span>Локальная сеть 1/10G.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>HPC кластера.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Выделенные сервера до 88 ядер/176 потоков, до 6 TB RAM.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Блэйд "blade" сервера ( возможна установка дополнительно StorageBlade или TapeBlade).
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Удаленное управление через ILO (public IP with ACL или VPN).
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Локальная сеть 1/10G медь/оптика.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Сетевое оборудование Mikrotik и Cisco в аренду.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Подключение к сети вторым портом 1GB/s бесплатно.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>ЗИП на площадке.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Владеем оборудованием сами без посредников.
                    </div>
                    <div class="list">
                        •<span class="empty"></span>Аренда лицензий по программе Microsoft SPLA.
                    </div>

                    <div class="lamp-block">
                        <div class="lamp-block__icon">
                            <div class="light-builb">
                                <?php include('svg/light-bulb.svg'); ?>
                            </div>
                        </div>
                        <div class="lamp-block__text">
                            <div class="number">
                                .01
                            </div>
                            <div class="title">
                                Найдём нужное оборудование
                            </div>
                            <div class="text">
                                Если в нашем ЦОД отсутствует нужное оборудование, то мы найдём его для вас.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section question -->
    <section class="section-question" id="question">
        <div class="container">
            <h1>
                Частые вопросы
            </h1>

            <div class="tabs-block question-block" data-tab-block="t-question">

                <ul class="nav nav-tabs">
                    <li class="tab-link active" data-tab="t-question-1" data-tab-block="t-question">
                        Малый бизнес
                    </li>

                    <li class="tab-link" data-tab="t-question-2" data-tab-block="t-question">
                        Средний и крупный
                    </li>

                    <li class="tab-link" data-tab="t-question-3" data-tab-block="t-question">
                        Технические вопросы
                    </li>
                </ul>

                <div class="tabs-content-container tabs-question">

                    <!-- ================================================ service tab 1-->
                    <div class="tab-content active" data-tab="t-question-1" data-tab-block="t-question">

                        <div class="questions-block">

                            <!-- ========================= single partners -->
                            <div class="questions-item">
                                <div class="questions">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        01.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>
                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="questions-item">
                                <div class="questions border-top">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        02.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="questions-item">
                                <div class="questions border-top">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        03.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>
                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="questions-item">
                                <div class="questions border-top">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        04.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>
                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- ================================================ service tab 2-->
                    <div class="tab-content" data-tab="t-question-2" data-tab-block="t-question">

                        <div class="questions-block">

                            <!-- ========================= single partners -->
                            <div class="questions-item-2">
                                <div class="questions">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        01.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="questions-item-2">
                                <div class="questions border-top">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        02.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="questions-item-2">
                                <div class="questions border-top">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        03.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="questions-item-2">
                                <div class="questions border-top">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        04.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- ================================================ service tab 3-->
                    <div class="tab-content" data-tab="t-question-3" data-tab-block="t-question">

                        <div class="questions-block">

                            <!-- ========================= single partners -->
                            <div class="questions-item-3">
                                <div class="questions">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        01.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="questions-item-3">
                                <div class="questions border-top">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                       02.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="questions-item-3">
                                <div class="questions border-top">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        03.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="questions-item-3">
                                <div class="questions border-top">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        04.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- ================================================ service tab 4-->
                    <div class="tab-content" data-tab="t-question-4" data-tab-block="t-question">

                        <div class="questions-block">

                            <!-- ========================= single partners -->
                            <div class="questions-item-4">
                                <div class="questions">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        01.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="questions-item-4">
                                <div class="questions border-top">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        02.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="questions-item-4">
                                <div class="questions border-top">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        03.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="questions-item-4">
                                <div class="questions border-top">
                                    <div class="questions-arrow-holder">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                    <div class="number">
                                        04.
                                    </div>
                                    <div class="questions-text">
                                        У нас две серверные стойки, но администраторы на удаленной работе, поэтому самим
                                        перевезти оборудование сложно. Возможна ли помощь при переезде?
                                    </div>

                                </div>

                                <div class="answer">
                                    <p>
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section review -->
    <section class="section-review" id="review">
        <div class="container">
            <h1>
                Отзывы о работе
            </h1>

            <div class="review-wrapper">
                <div class="review-block">
                    <div class="title">
                        1500
                    </div>
                    <div class="line-yellow"></div>
                    <div class="text">
                        довольных
                        клиентов
                    </div>
                </div>
                <div class="review-block">
                    <div class="title">
                        1500
                    </div>
                    <div class="line-yellow"></div>
                    <div class="text">
                        довольных
                        клиентов
                    </div>
                </div>
                <div class="review-block">
                    <div class="title">
                        1500
                    </div>
                    <div class="line-yellow"></div>
                    <div class="text">
                        довольных
                        клиентов
                    </div>
                </div>
            </div>

            <div class="wrapper-review-slider">
                <!-- Swiper -->
                <div class="swiper-container review-slider">
                    <div class="swiper-wrapper">

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/review-1.jpg" alt=" " class="img-block">
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/review-2.jpg" alt=" " class="img-block">
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/review-3.jpg" alt=" " class="img-block">
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/review-1.jpg" alt=" " class="img-block">
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/review-2.jpg" alt=" " class="img-block">
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/review-3.jpg" alt=" " class="img-block">
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/review-1.jpg" alt=" " class="img-block">
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/review-2.jpg" alt=" " class="img-block">
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/review-3.jpg" alt=" " class="img-block">
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/review-1.jpg" alt=" " class="img-block">
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/review-2.jpg" alt=" " class="img-block">
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/review-3.jpg" alt=" " class="img-block">
                        </div>
                    </div>
                </div>

                <!--            Pagination-->
                <div class="swiper-pagination review-pagination"></div>

                <!-- Add Arrows -->
                <div class="button-block">
                    <div class="swiper-button-next review-next">
                        <div class="icon_block">
<!--                            --><?php //include("svg/left_arrow.svg"); ?>
                        </div>
                    </div>
                    <div class="swiper-button-prev review-prev">
                        <div class="icon_block">
<!--                            --><?php //include("svg/left_arrow.svg"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section x -->
    <section class="section-x" id="x">
        <div class="container">

            <h2>
                <span class="big"></span>
            </h2>

            <a href="https://www.youtube.com/watch?v=XOIfBhSmoOc&amp;autoplay=1" class="review-item"
               data-fancybox="review">
                <img src="http://img.youtube.com/vi/XOIfBhSmoOc/0.jpg" alt=" ">
                <!--            --><?php //include('svg/icon-play.svg'); ?>
            </a>

            <div class="tabs-block price-block align-center" data-tab-block="t-price">

                <ul class="nav nav-tabs">
                    <li class="tab-link active" data-tab="t-price-1" data-tab-block="t-price">
                    </li>

                    <li class="tab-link" data-tab="t-price-2" data-tab-block="t-price">
                    </li>
                </ul>

                <div class="tabs-content-container">

                    <!-- ================================================ price tab 1-->
                    <div class="tab-content active" data-tab="t-price-1" data-tab-block="t-price">

                    </div>

                    <!-- ================================================ price tab 2-->
                    <div class="tab-content" data-tab="t-price-2" data-tab-block="t-price">

                    </div>

                </div>
            </div>

        </div>
    </section>

    <!--===================================================== section form-x -->
    <section class="section-form form-x" id="form-x">
        <div class="container align-center">

            <h2>

            </h2>

            <p>

            </p>

            <form method="post" class="send-form" autocomplete="off">
                <div class="row">
                    <div class="col-1-3">
                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                    </div>

                    <div class="col-1-3">
                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                    </div>

                    <div class="col-1-3">
                        <input type="email" name="client_mail" class="client-mail" placeholder="Ваш e-mail">
                    </div>
                </div>

                <input type="hidden" name="send_type" class="send-type" value="2">
                <input type="hidden" name="send_extra" class="send-extra" value="1">
                <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                <?php //Поле выше для защиты формы от спам-ботов ?>

                <div class="btn-holder">
                    <button type="submit" class="btn">Позвоните мне</button>
                    <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                </div>

                <!-- Agreement -->
                <div class="form-agree align-left">
                    <label class="checkbox-label form-agree-check checked">
                        <input type="checkbox" checked>
                        Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку
                        моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом
                        от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",
                        на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых
                        в&nbsp;Согласии на&nbsp;обработку персональных данных.
                    </label>
                </div>
            </form>

        </div>
    </section>

    <!--===================================================== section map -->
    <div class="section-map">
        <div class="map-holder" id="map"></div>
    </div>


    <!--===================================================== Footer -->
    <footer class="layout-footer">
        <div class="container">
            <div class="row">

                <!-- company info block -->
                <div class="col-1-2">
                    <div class="company-info-block">
                        <address>
                            <dl>
                                <dt>Адрес:</dt>
                                <dd></dd>
                            </dl>
                        </address>

                        <dl>
                            <dt>ИНН:</dt>
                            <dd></dd>
                        </dl>

                        <dl>
                            <dt>ОГРН:</dt>
                            <dd></dd>
                        </dl>

                        <p>
                            <a href="mailto:info@domen.ru">info@domen.ru</a>
                        </p>
                    </div>
                </div>

                <!-- Phone block -->
                <div class="col-1-2 align-right">
                    <div class="si-phone">
                        <div class="si-phone-text">Звонок бесплатный</div>
                        <a href="tel:+78009001111" class="phone-link dark">8 (800) 900-11-11</a>
                        <a href="#" class="open-phone-modal" data-extra="2">Заказать консультацию</a>
                    </div>
                </div>
            </div>

            <div class="copyright-holder row">
                <div class="col-1-2">
                    <a href="#" class="dark open-text-modal" data-id="1">
                        Согласие на обработку персональных данных
                    </a>
                </div>

                <!-- copyright block -->
                <div class="col-1-2 align-right">
                    <a href="http://hello-brand.ru/" class="dark" target="_blank" rel="nofollow noopener">
                        Разработано в "Hello, brand!"
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <!--===================================================== Modals -->
    <!-- Overlay(s) -->
    <div class="si-overlay"></div>
    <div class="si-overlay-2"></div>

    <!-- Wrappers -->
    <div class="si-modals-wrapper-2"></div>

    <div class="si-modals-wrapper">

        <!--============================================== success modal -->
        <div class="si-success-modal si-success-modal-1">
            <a href="#" class="si-close"></a>

            <div class="modal-container align-center">

                <div class="si-success-modal-title">
                    Спасибо!
                </div>

                <div class="success-time">
                    Наш менеджер свяжется с вами в течение 15 минут
                </div>

                <p>
                    <strong>Время работы отдела продаж:</strong>
                    пн-пт с 10.00 до 20.00 (по Москве)
                </p>

            </div>
        </div>

        <!--============================================== phone modal -->
        <div class="si-modal phone-modal">
            <a href="#" class="si-close"></a>

            <div class="modal-container align-center">

                <div class="modal-form-title">
                    Закажите консультацию
                </div>

                <div class="modal-time">
                    Ответ в течение 15 минут
                </div>

                <form method="post" class="send-form" autocomplete="off">
                    <div class="row">
                        <div class="col-1-2">
                            <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                        </div>

                        <div class="col-1-2">
                            <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                        </div>
                    </div>

                    <textarea name="client_message" class="client-message" placeholder="Ваш вопрос"></textarea>

                    <input type="hidden" name="send_type" class="send-type" value="1">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">
                    <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                    <?php //Поле выше для защиты формы от спам-ботов ?>

                    <div class="btn-holder">
                        <button type="submit" class="btn">Позвоните мне</button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                    </div>

                    <!-- Agreement -->
                    <div class="form-agree align-left">
                        <label class="checkbox-label form-agree-check checked">
                            <input type="checkbox" checked>
                            Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку
                            моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом
                            от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",
                            на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых
                            в&nbsp;Согласии на&nbsp;обработку персональных данных.
                        </label>
                    </div>
                </form>

            </div>
        </div>

        <!--============================================== text modal 1 -->
        <div class="si-modal text-modal text-modal-1">
            <a href="#" class="si-close"></a>

            <div class="modal-container">

                <div class="modal-form-title align-center">
                    Согласие на обработку персональных данных
                </div>

                <div class="modal-text-block">
                    <p>
                        Настоящим в&nbsp;соответствии с&nbsp;Федеральным законом №152&#8209;ФЗ
                        «О&nbsp;персональных данных» от&nbsp;27.07.2006 года свободно, своей волей и&nbsp;в&nbsp;своём
                        интересе выражаю своё безусловное согласие на&nbsp;обработку моих персональных данных
                        НАЗВАНИЕ КОМПАНИИ,
                        зарегистрированным в&nbsp;соответствии с&nbsp;законодательством&nbsp;РФ по&nbsp;адресу:
                        АДРЕС КОМПАНИИ
                        (далее по&nbsp;тексту&nbsp;- Оператор).
                    </p>

                    <p>
                        Персональные данные&nbsp;- любая информация, относящаяся к&nbsp;определённому
                        или&nbsp;определяемому на&nbsp;основании такой информации физическому лицу.
                    </p>

                    <p>
                        Настоящее Согласие выдано мною на&nbsp;обработку следующих персональных данных:
                    </p>

                    <ul class="marked">
                        <li>
                            Имя;
                        </li>
                        <li>
                            Телефон;
                        </li>
                        <li>
                            E-mail;
                        </li>
                        <li>
                            Комментарий.
                        </li>
                    </ul>

                    <p>
                        Согласие дано Оператору для&nbsp;совершения следующих действий с&nbsp;моими персональными
                        данными с&nbsp;использованием средств автоматизации и/или&nbsp;без&nbsp;использования таких
                        средств: сбор, систематизация, накопление, хранение, уточнение (обновление, изменение),
                        использование, обезличивание, передача третьим лицам для&nbsp;указанных ниже целей,
                        а&nbsp;также осуществление любых иных действий, предусмотренных действующим
                        законодательством&nbsp;РФ, как&nbsp;неавтоматизированными, так&nbsp;и&nbsp;автоматизированными
                        способами.
                    </p>

                    <p>
                        Данное согласие даётся Оператору и&nbsp;третьему лицу(&#8209;ам)
                        ТРЕТЬИ ЛИЦА
                        для&nbsp;обработки моих персональных данных в&nbsp;следующих целях:
                    </p>

                    <ul class="marked">
                        <li>
                            предоставление мне услуг/работ;
                        </li>
                        <li>
                            направление в&nbsp;мой адрес уведомлений, касающихся предоставляемых услуг/работ;
                        </li>
                        <li>
                            подготовка и&nbsp;направление ответов/коммерческих предложений на&nbsp;мои запросы;
                        </li>
                        <li>
                            направление в&nbsp;мой адрес информации, в&nbsp;том числе рекламной,
                            о&nbsp;мероприятиях/товарах/услугах/работах Оператора.
                        </li>
                    </ul>

                    <p>
                        Настоящее согласие действует до&nbsp;момента его&nbsp;отзыва путём направления соответствующего
                        уведомления на&nbsp;электронный адрес
                        <a href="mailto:">ЕМЕЙЛ</a>.
                        В&nbsp;случае отзыва мною согласия на&nbsp;обработку персональных данных Оператор вправе
                        продолжить обработку персональных данных без&nbsp;моего согласия при&nbsp;наличии оснований,
                        указанных в&nbsp;пунктах 2&#8209;11 части&nbsp;1 статьи&nbsp;6, части&nbsp;2 статьи&nbsp;10
                        и&nbsp;части&nbsp;2 статьи&nbsp;11 Федерального закона №152&#8209;ФЗ
                        «О&nbsp;персональных данных» от&nbsp;26.06.2006&nbsp;г.
                    </p>
                </div>

            </div>
        </div>

    </div>

</div>

<script>
    var template_url = '<?php echo SI_RootURL(); ?>';
    //    var template_url = '<?php //echo SI_CurrentPageURL(); ?>//';
</script>


<!-- Inlcude jQuery framework + jQuery migrate -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-migrate-1.4.1.min.js"></script>

<!-- IE -->
<!--[if IE]>
<script src="js/html5shiv.js"></script> <![endif]-->

<!-- JS Scripts -->
<script src="js/plugins-all.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/smooth-scroll-1.4.4.min.js"></script>
<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

<!-- Google Recaptcha -->
<!--<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>-->
<!--<script type="text/javascript">-->
<!--    var recaptcha1,-->
<!--        recaptcha2,-->
<!--        recaptcha3;-->
<!--    var onloadCallback = function () {-->
<!--        recaptcha = grecaptcha.render('g-recaptcha', {-->
<!--            'sitekey': ''-->
<!--        });-->
<!--    };-->
<!--</script>-->

<!-- custom scripts -->
<script src="js/main.js"></script>
<script src="js/share.js"></script>

<?php include('si-engine.php'); ?>

<!--

Digital-agency "Hello, brand!" - http://hello-brand.ru/
Дата создания: 16.03.2016
Версия: 1.0

-->


</body>
</html>