<?php
//Две строчки ниже для защиты форм от спам-ботов
session_start();
$_SESSION['sf_key'] = md5(substr(session_id(), mt_rand(0, 10), mt_rand(3, 10)) . time());

header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'GreenBushDC';
$desc = 'Надежный центр обработки данных для вашего бизнеса';
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
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">


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
                        <li><a href="#green" class="si-jump">Характеристики</a></li>
                        <li><a href="#service" class="si-jump">Услуги</a></li>
                        <li><a href="#review" class="si-jump">Отзывы</a></li>
                        <li><a href="#data" class="si-jump">Архитектура</a></li>
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

            <div class="small-text cre-animate" data-animation="slide-in-from-right"
                 data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                Дата-центр GreenBushDC
            </div>
            <h1 class="cre-animate" data-animation="slide-in-from-left"
                data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                Надёжный центр обработки
                данных для вашего бизнеса
            </h1>

            <div class="address-text cre-animate" data-animation="slide-in-from-right"
                 data-speed="1000" data-delay="900" data-offset="90%" data-easing="easeOut">
                Москва, г. Зеленоград, Проезд 683, д.8
            </div>

            <div class="more-block cre-animate" data-animation="slide-in-from-left"
                 data-speed="1000" data-delay="1200" data-offset="90%" data-easing="easeOut">
                <a href="#" class="btn btn-yellow">
                    Узнать больше
                </a>
                <div class="more-block__text">
                    Ответим на вопросы и поможем построить
                    IT-инфраструктуру для вашего бизнеса.
                </div>
            </div>

            <div class="last-wrapper">
                <div class="last-wrapper__block cre-animate" data-animation="slide-up-from-bottom"
                     data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                    <div class="title">
                        99,98%
                    </div>
                    <div class="text">
                        Старт инвестиций<br>
                        от 10 000 $
                    </div>
                </div>
                <div class="last-wrapper__block i-1 cre-animate" data-animation="slide-up-from-bottom"
                     data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                    <div class="title">
                        24х7х365

                    </div>
                    <div class="text">
                        физический доступ
                        к оборудованию
                    </div>
                </div>
                <div class="last-wrapper__block i-2 cre-animate" data-animation="slide-up-from-bottom"
                     data-speed="1000" data-delay="900" data-offset="90%" data-easing="easeOut">
                    <div class="title">
                        0 ЧАСОВ
                    </div>
                    <div class="text">
                        период отключения сервиса для проведения плановых работ
                    </div>
                </div>
                <div class="last-wrapper__block i-3 cre-animate" data-animation="slide-up-from-bottom"
                     data-speed="1000" data-delay="1200" data-offset="90%" data-easing="easeOut">
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
                    <div class="title cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="500" data-offset="90%" data-easing="easeOut">
                        Технические характеристики
                    </div>
                    <div class="text cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="100" data-offset="90%" data-easing="easeOut">
                        Инженерная инфраструктура проекта полностью соответствует
                        требованиям «Уровня 3» (Tier III) по классификации Uptime Institute.
                    </div>
                    <a href="#" class="btn btn-yellow">Смотреть сертификат</a>
                </div>
                <div class="col-1-4 align-right cre-animate" data-animation="slide-in-from-right"
                     data-speed="1000" data-delay="1200" data-offset="90%" data-easing="easeOut">
                    <img src="images/technical-img.png" alt=" " class="technical-img">
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section options -->
    <section class="section-options" id="options">
        <div class="container">
            <h1 class="cre-animate" data-animation="slide-in-from-left"
                data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                Гарантированные
                эксплуатационные параметры
            </h1>
            <div class="row">
                <div class="col-1-4 cre-animate" data-animation="slide-in-from-left"
                     data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
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
                <div class="col-1-4 cre-animate" data-animation="slide-in-from-left"
                     data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                    <div class="options-block">
                        <div class="options-block__icon i-2">
                            <?php include('svg/protection.svg'); ?>
                        </div>
                        <div class="options-block__title">
                            50±0,2 Гц
                        </div>
                        <div class="options-block__text a-1">
                            гарантированная
                            частота электропитания
                        </div>
                    </div>
                </div>
                <div class="col-1-4 cre-animate" data-animation="slide-in-from-left"
                     data-speed="1000" data-delay="900" data-offset="90%" data-easing="easeOut">
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
                <div class="col-1-4 cre-animate" data-animation="slide-in-from-left"
                     data-speed="1000" data-delay="1200" data-offset="90%" data-easing="easeOut">
                    <div class="options-block">
                        <div class="options-block__icon i-4">
                            <?php include('svg/flash.svg'); ?>
                        </div>
                        <div class="options-block__title">
                            15 кВт
                        </div>
                        <div class="options-block__text a-1">
                            максимальная
                            потребляемая мощность
                            на стойку
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-4 cre-animate" data-animation="slide-in-from-right"
                     data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
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
                <div class="col-1-4 cre-animate" data-animation="slide-in-from-right"
                     data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
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
                <div class="col-1-4 cre-animate" data-animation="slide-in-from-right"
                     data-speed="1000" data-delay="900" data-offset="90%" data-easing="easeOut">
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
                <div class="col-1-4 cre-animate" data-animation="slide-in-from-right"
                     data-speed="1000" data-delay="1200" data-offset="90%" data-easing="easeOut">
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
                <h1 class="cre-animate" data-animation="slide-in-from-left"
                    data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                    Наши услуги
                </h1>
                <div class="tabs-block service-block" data-tab-block="t-service">

                    <ul class="nav nav-tabs">
                        <li class="tab-link active" data-tab="t-service-1" data-tab-block="t-service">
                            Colocation
                        </li>

                        <li class="tab-link i-1" data-tab="t-service-2" data-tab-block="t-service">
                            VDS
                        </li>

                        <li class="tab-link i-2" data-tab="t-service-3" data-tab-block="t-service">
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
                                        25 000
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
                                        25 000
                                    </div>
                                    <span>
                                    за 1 стойку
                                </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="more-block cre-animate" data-animation="slide-in-from-right"
                     data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
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
<!--            <div class="row">-->
                <div class="left-block cre-animate" data-animation="slide-in-from-left"
                     data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
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
                <div class="right-block cre-animate" data-animation="slide-in-from-right"
                     data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
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
                        •<span class="empty"></span>Блэйд "blade" сервера ( возможна установка дополнительно
                        StorageBlade или TapeBlade).
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
<!--            </div>-->
        </div>
    </section>

    <!--===================================================== section question -->
    <section class="section-question" id="question">
        <div class="container">
            <h1 class="cre-animate" data-animation="slide-in-from-left"
                data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                Частые вопросы
            </h1>

            <div class="tabs-block question-block" data-tab-block="t-question">

                <ul class="nav nav-tabs nav-question">
                    <li class="tab-link active" data-tab="t-question-1" data-tab-block="t-question">
                        Малый бизнес
                    </li>

                    <li class="tab-link i-1" data-tab="t-question-2" data-tab-block="t-question">
                        Средний и крупный
                    </li>

                    <li class="tab-link i-2" data-tab="t-question-3" data-tab-block="t-question">
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
                                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                                        несколько абзацев более менее осмысленного текста рыбы на русском языке, а
                                        начинающему оратору отточить навык публичных выступлений в домашних условиях.
                                        При создании генератора мы использовали небезизвестный универсальный код речей.
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
            <h1 class="cre-animate" data-animation="slide-in-from-left"
                data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                Отзывы о работе
            </h1>

            <div class="review-wrapper">
                <div class="review-block cre-animate" data-animation="slide-in-from-right"
                     data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                    <div class="title">
                        1500
                    </div>
                    <div class="line-yellow"></div>
                    <div class="text">
                        довольных
                        клиентов
                    </div>
                </div>
                <div class="review-block cre-animate" data-animation="slide-in-from-right"
                     data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                    <div class="title">
                        1500
                    </div>
                    <div class="line-yellow"></div>
                    <div class="text">
                        довольных
                        клиентов
                    </div>
                </div>
                <div class="review-block cre-animate" data-animation="slide-in-from-right"
                     data-speed="1000" data-delay="900" data-offset="90%" data-easing="easeOut">
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
                            <a href="images/review-1.jpg" class="border-block" data-fancybox="review">
                                <img src="images/review-1.jpg" alt=" " class="img-block">
                            </a>

                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a href="images/review-2.jpg" class="border-block" data-fancybox="review">
                                <img src="images/review-2.jpg" alt=" " class="img-block">
                            </a>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a href="images/review-3.jpg" class="border-block i-3" data-fancybox="review">
                                <img src="images/review-3.jpg" alt=" " class="img-block">
                            </a>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a href="images/review-1.jpg" class="border-block" data-fancybox="review">
                                <img src="images/review-1.jpg" alt=" " class="img-block">
                            </a>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a href="images/review-2.jpg" class="border-block" data-fancybox="review">
                                <img src="images/review-2.jpg" alt=" " class="img-block">
                            </a>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a href="images/review-3.jpg" class="border-block i-3" data-fancybox="review">
                                <img src="images/review-3.jpg" alt=" " class="img-block">
                            </a>
                        </div>


                    </div>
                </div>

                <!--            Pagination-->
                <div class="swiper-pagination review-pagination"></div>

                <!-- Add Arrows -->
                <div class="button-block">
                    <div class="swiper-button-prev review-prev">
                        <div class="left-grey-arrow">
                            <?php include("svg/left2.svg"); ?>
                        </div>
                    </div>
                    <div class="swiper-button-next review-next">
                        <div class="right-grey-arrow">
                            <?php include("svg/rigt2.svg"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section experience -->
    <section class="section-experience" id="experience">
        <div class="container">
            <h1 class="cre-animate" data-animation="slide-in-from-left"
                data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                Обладаем большим опытом
            </h1>

            <div class="wrapper-experience-slider">
                <!-- Swiper -->
                <div class="swiper-container experience-slider">
                    <div class="swiper-wrapper">

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/experience-img.jpg" alt=" ">
                            <div class="title">
                                Тут будет название кейса
                            </div>

                            <a href="#" class="btn btn-yellow">подробнее</a>

                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/experience-img.jpg" alt=" ">
                            <div class="title">
                                Тут будет название кейса
                            </div>

                            <a href="#" class="btn btn-yellow">подробнее</a>

                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <img src="images/experience-img.jpg" alt=" ">
                            <div class="title">
                                Тут будет название кейса
                            </div>

                            <a href="#" class="btn btn-yellow">подробнее</a>

                        </div>

                    </div>
                    <!--            Pagination-->
                    <div class="swiper-pagination experience-pagination"></div>
                </div>


                <!-- Add Arrows -->
                <div class="swiper-button-prev experience-prev">
                    <div class="left-grey-arrow">
                        <?php include("svg/left2.1.svg"); ?>
                    </div>
                </div>
                <div class="swiper-button-next experience-next">
                    <div class="right-grey-arrow">
                        <?php include("svg/right2.1.svg"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section data -->
    <section class="section-data" id="data">
        <div class="container">
            <h1 class="cre-animate" data-animation="slide-in-from-left"
                data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                О дата-центре
            </h1>

            <div class="sub_title cre-animate" data-animation="slide-in-from-right"
                 data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                Архитектурно ЦОД представляет собой конструкцию из трех модулей по три этажа. Один этаж — это два (Блок
                А2) или три (Блоки А1, А3) машинных зала, которые соединяются с технологическими помещениями.
            </div>

            <a href="#" class="btn btn-grey cre-animate" data-animation="slide-in-from-left"
               data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                Малый бизнес
            </a>
            <a href="#" class="btn btn-grey i-1 cre-animate" data-animation="slide-in-from-right"
               data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                Машинный зал
            </a>
        </div>

        <div class="wrapper-data-slider">
            <!-- Swiper -->
            <div class="swiper-container data-slider">
                <div class="swiper-wrapper">

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="data-bg"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="data-bg"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="data-bg"></div>
                    </div>

                </div>


                <!-- Add Arrows -->
                <div class="btn-block">
                    <div class="container">
                        <div class="swiper-button-prev data-prev">
                            <div class="left-grey-arrow">
                                <?php include("svg/left2.1.svg"); ?>
                            </div>
                        </div>
                        <div class="swiper-button-next data-next">
                            <div class="right-grey-arrow">
                                <?php include("svg/right2.1.svg"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section square -->
    <section class="section-square" id="square">
        <div class="container">
            <div class="square-wrapper cre-animate" data-animation="slide-in-from-left"
                 data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                <div class="square-block">
                    <div class="title">
                        2 Га
                    </div>
                    <div class="line-white"></div>
                    <div class="text">
                        земельный <br>
                        участок
                    </div>
                </div>
                <div class="square-block i-1">
                    <div class="title">
                        18 800 м2
                    </div>
                    <div class="line-white"></div>
                    <div class="text">
                        общая площадь<br>
                        зданий
                    </div>
                </div>
                <div class="square-block">
                    <div class="title">
                        3 240 м2
                    </div>
                    <div class="line-white"></div>
                    <div class="text">
                        административно-<br>
                        офисная часть зданий
                    </div>
                </div>
            </div>
            <div class="square-wrapper m-1 cre-animate" data-animation="slide-in-from-right"
                 data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                <div class="square-block">
                    <div class="title">
                        4 460 м2
                    </div>
                    <div class="line-white"></div>
                    <div class="text">
                        площадь машинных<br>
                        залов
                    </div>
                </div>
                <div class="square-block i-1">
                    <div class="title">
                        350 м2
                    </div>
                    <div class="line-white"></div>
                    <div class="text">
                        помещения сборки<br>
                        клиентского оборудования
                    </div>
                </div>
                <div class="square-block">
                    <div class="title">
                        1 470 м2
                    </div>
                    <div class="line-white"></div>
                    <div class="text">
                        склады
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section infrastructure -->
    <section class="section-infrastructure" id="infrastructure">
        <div class="container">
            <h1 class="cre-animate" data-animation="slide-in-from-left"
                data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                Отказоустойчивая <br>
                инфраструктура
            </h1>

            <div class="infrastructure-wrapper cre-animate" data-animation="slide-in-from-right"
                 data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                <img src="images/block-img-1.jpg" alt=" " class="infrastructure-img">
                <div class="infrastructure-block">
                    <div class="title">
                        Собственная служба
                        безопасности
                    </div>
                    <div class="line-yellow"></div>
                    <div class="text">
                        Круглосуточная охрана, 3 уровня системы контроля, более 300 камер видеонаблюдения.
                    </div>
                </div>
            </div>
            <div class="infrastructure-wrapper cre-animate" data-animation="slide-in-from-left"
                 data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                <img src="images/block-img-2.jpg" alt=" " class="infrastructure-img">
                <div class="infrastructure-block i-2">
                    <div class="title">
                        Энергия от собственных
                        подстанций ОЭЗ
                    </div>
                    <div class="line-yellow"></div>
                    <div class="text">
                        Для каждой из 6 независимых электрических цепей предусмотрен отдельный дизель-роторный источник бесперебойного питания DRUPS Hitec Power Protection по 1670 кВА.
                    </div>
                </div>
            </div>
            <div class="infrastructure-wrapper cre-animate" data-animation="slide-in-from-right"
                 data-speed="1000" data-delay="900" data-offset="90%" data-easing="easeOut">
                <img src="images/block-img-3.jpg" alt=" " class="infrastructure-img">
                <div class="infrastructure-block">
                    <div class="title">
                        Первая степень
                        огнестойкости
                    </div>
                    <div class="line-yellow"></div>
                    <div class="text">
                        Все машинные залы и помещения с критически важным оборудованием оснащены централизованной системой газового пожаротушения.
                    </div>
                </div>
            </div>
            <div class="infrastructure-wrapper cre-animate" data-animation="slide-in-from-left"
                 data-speed="1000" data-delay="1200" data-offset="90%" data-easing="easeOut">
                <img src="images/block-img-4.jpg" alt=" " class="infrastructure-img">
                <div class="infrastructure-block i-1">
                    <div class="title">
                        Постоянный контроль
                        над микроклиматом
                    </div>
                    <div class="line-yellow"></div>
                    <div class="text">
                        Холодоснабжение 6-ти машинных залов осуществляется адиабатическими установками,
                        со схемой резервирования N+1 и дополнительными фреоновыми дохолаживающими прецизионными шкафными кондиционерами.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section form-first -->
    <section class="section-form form-first" id="form-first">
        <div class="container">

            <form method="post" class="send-form form-white" autocomplete="off">
                <div class="row">
                    <div class="col-1-2">
                        <h2>
                            Закажите
                            консультацию
                            ведущего
                            специалиста
                        </h2>

                        <div class="sub_title">
                            Ответ через 15 минут
                        </div>

                        <div class="arrow">
                            <div class="right-arrow-yellow">
                                <?php include('svg/right4.svg'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя*">

                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон*">

                        <input type="email" name="client_mail" class="client-mail" placeholder="Ваш e-mail*">

                        <input type="hidden" name="send_type" class="send-type" value="2">
                        <input type="hidden" name="send_extra" class="send-extra" value="1">
                        <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                        <?php //Поле выше для защиты формы от спам-ботов ?>

                        <!-- Agreement -->
                        <div class="form-agree align-left">
                            <label class="checkbox-label form-agree-check checked">
                                <input type="checkbox" checked>
                                Нажимая кнопку "Заказать консультацию" я принимаю
                                условия политики конфиденциальности.
                            </label>
                        </div>

                        <div class="btn-holder">
                            <button type="submit" class="btn btn-yellow">Заказать консультацию</button>
                            <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!--===================================================== Footer -->
    <footer class="layout-footer">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-3-4">
                    <a href="#" class="logo si-jump">
                        <img src="images/logo.png" alt=" ">
                    </a>

                    <div class="logo-text">
                        ООО "Сток-сервис" <br>
                        Москва,г. Зеленоград, Проезд 683, д. 8 <br>
                        ОГРН: 1234567890123
                    </div>
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
    </footer>

    <!--===================================================== section-last -->
    <section class="section-last" id="#last">
        <div class="container">
            <div class="copyright-holder row">
                <div class="col-3-4">
                    <a href="#" class="dark">
                        Данный сайт носит информационно-справочный характер и ни при каких условиях не является публичной офертой
                    </a>
                </div>

                <!-- copyright block -->
                <div class="col-1-4 align-right">
                    <a href="http://hello-brand.ru/" class="dark link" target="_blank" rel="nofollow noopener">
                        ©2019. Hello, brand! Все права защищены.
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== Modals -->
    <!-- Overlay(s) -->
    <div class="si-overlay"></div>
    <div class="si-overlay-2"></div>

    <!-- Wrappers -->
    <div class="si-modals-wrapper-2"></div>

    <div class="si-modals-wrapper">

        <!--============================================== success modal -->
        <div class="si-success-modal si-success-modal-1">
            <a href="#" class="si-close success-close"></a>

            <div class="modal-container align-center">

                <div class="si-success-modal-title">
                    Спасибо! <br>
                    Ваша заявка отправлена
                </div>

                <div class="line-yellow"></div>

                <div class="success-time">
                    Наш менеджер свяжется с Вами <br>
                    в ближайшее время.
                </div>


            </div>
        </div>

        <!--============================================== phone modal -->
        <div class="si-modal phone-modal">
            <a href="#" class="si-close"></a>

            <div class="modal-container">

                <form method="post" class="send-form" autocomplete="off">
                    <div class="row">
                        <div class="col-1-2">
                            <div class="modal-form-title">
                                Закажите
                                консультацию
                                ведущего
                                специалиста
                            </div>

                            <div class="modal-time">
                                Ответ через 15 минут
                            </div>

                            <div class="arrow">
                                <div class="right-arrow-yellow">
                                    <?php include('svg/right4.svg'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-2">
                            <input type="text" name="client_name" class="client-name" placeholder="Ваше имя*">

                            <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон*">

                            <input type="email" name="client_mail" class="client-mail" placeholder="Ваш e-mail*">

                            <input type="hidden" name="send_type" class="send-type" value="2">
                            <input type="hidden" name="send_extra" class="send-extra" value="1">
                            <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                            <?php //Поле выше для защиты формы от спам-ботов ?>

                            <!-- Agreement -->
                            <div class="form-agree align-left">
                                <label class="checkbox-label form-agree-check checked">
                                    <input type="checkbox" checked>
                                    Нажимая кнопку "Заказать консультацию" я принимаю
                                    условия политики конфиденциальности.
                                </label>
                            </div>

                            <div class="btn-holder">
                                <button type="submit" class="btn btn-yellow">Заказать консультацию</button>
                                <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                            </div>
                        </div>
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