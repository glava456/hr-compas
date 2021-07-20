<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="/templates/yoo_master2/favicon.ico" type="image/vnd.microsoft.icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta property="og:title" content="HR-компас - бесплатная онлайн-конференция" />
    <meta property="og:image" content="https://finassessment.net/conference/hr-compass/image/og.png" />
    <meta property="og:description" content="Бесплатная онлайн-конференция по оценке hard skills, развитию soft skills и мотивации персонала" />
    <meta name="description" content="Бесплатная онлайн-конференция по оценке hard skills, развитию soft skills и мотивации персонала" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

    <title>HR-компас - бесплатная онлайн-конференция</title>

    <script type="text/javascript" src="/js/sourcebuster-js-master/dist/sourcebuster.min.js"></script>
    <script>
        sbjs.init();

    </script>

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PG56WVD');

    </script>
    <!-- End Google Tag Manager -->

    <script src='https://www.google.com/recaptcha/api.js?render=6LcJOpMUAAAAAMOkESmJiN1ZRXnghQ_RmTJlSk3t'></script>
</head>
<?php
if(isset($_GET["referal"]) && (int)$_GET["referal"] > 0){
    $partner_id = $_GET["referal"];
    setcookie("referalId", $partner_id, time()+86400, "/");
}
?>

<?php $country = geoip_country_code_by_name($_SERVER['REMOTE_ADDR']);?>

<body>
    <div class="wpapper">
        <div class="wpapper-bg-star">
            <div class="navbar" id="navbar">
                <div class="container">

                    <!-- Begin Header-Navigation -->

                    <div class="header">

                        <nav class="header__navigation header__nav nav menu" id="menu">
                            <div class="header__logo">
                                <a href="/" class="header__logo-link">
                                    <img src="image/logo.png" alt="" class="header__img">
                                </a>
                            </div>

                            <ul class="nav__items">
                                <li class="nav__item">
                                    <a href="#about" class="nav__link">о конференции</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#prog" class="nav__link">программа</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#tutor" class="nav__link">спикеры</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#org" class="nav__link">организаторы</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#contact" class="nav__link">контакты ЦУП</a>
                                </li>


                            </ul>

                            <a href="#main-form" class="nav__but but">Участвовать бесплатно</a>
                        </nav>



                        <!-- Begin Header-Burger -->

                        <div class="header__burger">
                            <div class="burger__logo">
                                <a href="/" class="burger__logo-link">
                                    <img src="image/logo.png" alt="" class="burger__img">
                                </a>
                            </div>
                            <div class="header__overlay"></div>
                            <div class="header__button">
                                <span id="span"></span>
                            </div>
                        </div>

                        <!-- End Header-Burger -->

                    </div>
                </div>
            </div>
            <!-- End Header-Navigation -->


            <section class="hr">
                <div class="container">
                    <h1 class="hr__title">
                        <span class="hr__title-blue">HR</span>

                        <span class="hr__title-lt">
                            <span class="blue">компас</span>
                            <span class="year">2021:</span>
                        </span>

                        <span class="hr__title-transparency">
                            <span class="left">курс на</span>&#160;
                            <span class="right">ассессмент</span>
                        </span>


                    </h1>

                    <div class="hr__wrap">

                        <div class="hr__flex-col">
                            <div class="hr__text">Бесплатная конференция по рекрутингу, найму и
                                оценке персонала в онлайн-формате
                            </div>

                            <ul class="hr__date">
                                <li class="hr__date-item grey-line"><span>Когда:</span><br> 20-21 апреля</li>
                                <li class="hr__date-item grey-line"><span>Где:</span> <br>онлайн</li>
                                <li class="hr__date-item"><span>Участие </span><br> бесплатное</li>
                            </ul>

                        </div>

                        <div id="main-form">
                            <form id="g-recapcha" method="post" action="/extensions/gateway.php" form-recapcha="number_2" class="hr__form">
                                <p class="hr__form-title">Зарегистрируйтесь</p>
                                <p class="hr__form-text">чтобы узнать больше об ассессменте и найме!</p>

                                <input class="hr__form-name" type="text" name="lastname" placeholder="ФИО" required="">
                                <input class="hr__form-email" type="text" name="email" placeholder="Email" required="">
                                <input class="hr__form-phone" type="text" name="phone" placeholder="Телефон" required="">
                                <input type="hidden" name="redirect_url" required="" value="/conference/hr-compass/thanks/">
                                <input type="hidden" name="description" value="002 Конференция: HR-компас курс на ассессмент">
                                <input type="hidden" name="esputnik" value="1">
                                <input type="hidden" name="type" value="fas-hr-conf-2021">
                                <input type="hidden" name="webinar_id" value="">



                                <div style="position: relative" class="hr__form-cbx">
                                    <input class="check-box-hide" name="remember" required="" type="checkbox" id="remember2">


                                    <label for="remember2" class="hr__form-checkbox">
                                        <span class="hr__form-agreement">Я принимаю условия <a href="/polzovatelskoe-soglashenie" target="_blank">Пользовательского<br> соглашения</a> и <a target="_blank" href="/politika-konfidencialnosti">Политика конфиденциальности</a></span>
                                    </label>
                                </div>
                                <input class="hr__form-btn" type="submit" value="Участвовать бесплатно">
                            </form>

                        </div>
                    </div>

                </div>
            </section>

        </div>

        <section class="way">
            <div class="container">
                <div class="way__flex">
                    <div class="way__item">
                        <p class="way__text">Малоизученный вирус выбросил человечество в открытый космос удаленки. Все продолжают работать в условиях онлайн-невесомости. Бизнес ограничен в ресурсах, поэтому требует отбирать только идеальных кандидатов и обучать лучших сотрудников.</p>
                        <p class="way__text">Ставки высоки, но работать с людьми в онлайне можно намного эффективнее. Теперь кандидатами могут быть специалисты из любой страны. И к каждому нужно найти подход.</p>
                    </div>
                    <div class="way__item">
                        <p class="way__text">Онлайн-инструменты для оценки профессиональных навыков, собеседований и обучения позволяют сэкономить драгоценные ресурсы компаний и повысить качество работы с персоналом в digital-мире.</p>

                        <p class="way__text">Надевайте свой скафандр и отправляйтесь с нами в путь! Разберем новые цифровые инструменты, методики и кейсы по успешной оценке и развитию сотрудников от астроспикеров HR-компаса 2021! </p>
                    </div>
                </div>

                <a href="#main-form" class="way__but">В путь к звездам!</a>
            </div>


        </section>

        <section class="opportunities" id="about">
            <div class="container">
                <h2 class="title"><span>Вы не пролетите мимо этой конференции, </span>потому что здесь можно</h2>
                <div class="opportunities__flex">
                    <div class="opportunities__item">
                        <div class="opportunities__img">
                            <img class="opportunities__icon" src="./image/icons/1.png">
                        </div>
                        <p class="opportunities__text">Послушать выступления от ведущих экспертов сферы <span class="grey"> и узнать о трендах 2021-го в сфере найма и обучения специалистов.</span>
                        </p>
                    </div>

                    <div class="opportunities__item">
                        <div class="opportunities__img">
                            <img class="opportunities__icon" src="./image/icons/3.png">
                        </div>
                        <p class="opportunities__text">Узнать целые мириады решений и кейсов <span class="grey"> по эффективному найму и развитию персонала.</span>
                        </p>
                    </div>
                    <div class="opportunities__item">
                        <div class="opportunities__img">
                            <img class="opportunities__icon" src="./image/icons/8.png">
                        </div>
                        <p class="opportunities__text">Освежить собственный профессиональный арсенал <span class="grey"> актуальными digital-инструментами для работы с персоналом.</span>
                        </p>
                    </div>
                    <div class="opportunities__item">
                        <div class="opportunities__img">
                            <img class="opportunities__icon" src="./image/icons/4.png">
                        </div>
                        <p class="opportunities__text">Изучить особенности оценки соискателей и сотрудников в новых условиях <span class="grey"> для различных целей.</span>
                        </p>
                    </div>


                    <div class="opportunities__item">
                        <div class="opportunities__img">
                            <img class="opportunities__icon" src="./image/icons/5.png">
                        </div>
                        <p class="opportunities__text">Познакомиться с цифровыми инструментами оценки hard & soft skills <span class="grey"> специалистов для найма, развития/обучения, кадровых ротаций/оптимизации штата.</span>
                        </p>
                    </div>

                    <div class="opportunities__item">
                        <div class="opportunities__img">
                            <img class="opportunities__icon" src="./image/icons/6.png">
                        </div>
                        <p class="opportunities__text">Разобраться, чему и как учить персонал в 2021-м году,<span class="grey"> в тонкостях создания и использования дистанционного и микрообучения в компании.</span>
                        </p>
                    </div>
                    <div class="opportunities__item">
                        <div class="opportunities__img">
                            <img class="opportunities__icon" src="./image/icons/2.png">
                        </div>
                        <p class="opportunities__text">Поучаствовать в конкурсах и получить шанс выиграть <span class="grey"> улетные подарки от спикеров, партнеров и организаторов конференции.
                            </span>
                        </p>
                    </div>
                    <div class="opportunities__item">
                        <div class="opportunities__img">
                            <img class="opportunities__icon" src="./image/icons/7.png">
                        </div>
                        <p class="opportunities__text">Несколько часов подряд, абсолютно законно играть в космонавтов <span class="grey"> и узнавать новое и полезное для работы:)
                            </span>
                        </p>
                    </div>
                </div>

            </div>



        </section>

        <section class="like">
            <div class="container">
                <h2 class="title"><span>Вам понравится </span>эта конференция, если вы</h2>

                <div class="like__flex">
                    <div class="like__items">
                        <p class="like__item like__item-psevdo1">HR, T&D, L&D-специалист</p>
                        <p class="like__item like__item-psevdo2">Руководитель корпоративного университета</p>
                        <p class="like__item like__item-psevdo3">Специалист по управлению талантами</p>
                    </div>
                    <div class="like__items">
                        <p class="like__item like__item-psevdo4">HRD или HRBP</p>
                        <p class="like__item like__item-psevdo5">Корпоративный тренер</p>
                        <p class="like__item like__item-psevdo6">Рекрутер</p>
                        <p class="like__item like__item-psevdo7">Интересуетесь цифровыми инструментами </p>
                    </div>

                </div>

                <a href="#main-form" class="like__but">Занять место на корабле</a>
            </div>


        </section>



        <section class="slider" id="tutor">
            <div class="container">
                <h2 class="title">Созвездие спикеров</h2>
                <p class="slider__text">Каждый спикер — сам по себе ярчайшая звезда на HR-небосводе. Мы попросили их надеть скафандры, чтобы не расплавилась обшивка корабля и они могли поделиться опытом и знаниями с вами.</p>
                <!-- Собственно блок где будут основные изображения -->
                <div class="images">

                    <div class="images__flex">
                        <img class="images__img" src="./image/big_shatrov.png" alt="">
                        <div class="images__profile">
                            <p class="images__name">Юрий Шатров</p>
                            <p class="images__position">руководитель практики Digital Assessment ЭКОПСИ, разработчик цифровых инструментов оценки персонала</p>
                        </div>
                    </div>
                    <div class="images__flex">
                        <img class="images__img" src="./image/big_fedak.png" alt="">
                        <div class="images__profile">
                            <p class="images__name">Владимир Федак</p>
                            <p class="images__position">CEO IT Svit, CEO Hurma System. 
Опыт работы в сфере в построения эффективных IT-команд более 15 лет.
</p>
                        </div>
                    </div>
                    <div class="images__flex">
                        <img class="images__img" src="./image/big_ivanishkin.png" alt="">
                        <div class="images__profile">
                            <p class="images__name">Сергей Иванишкин</p>
                            <p class="images__position images__position-manytext">Co-founder 2people. <br> 
                            Специалист по E-Learning, разработке и внедрению систем развития персонала.<br> 
Специалист по разработке и проведению геймифицированных мотивационных программ для бизнеса.<br> 
Специалист по оценке персонала. Консультант по построению HR-процессов.<br> 
Менеджер проектов HR в сети магазинов "EVA". Менеджер по развитию информационных систем в компании HOPHEY (МореПива). <!-- <br> Руководитель группы управления дистанционным обучением и коммуникациями в компании HOPHEY (МореПива).<br> 
Сотрудничаю с компаниями: медиа-холдинг «Медиа Группа Украина», сеть магазинов фермерской гастрономии «Петрикiвка», сеть фирменных магазинов ирландского сидра и эля ТМ «LEPREKON». -->

</p>
                        </div>
                    </div>
                    <div class="images__flex">
                        <img class="images__img" src="./image/big_tustov.png" alt="">
                        <div class="images__profile">
                            <p class="images__name">Михаил Тустов</p>
                            <p class="images__position">Бизнес-тренер, коуч, геймификатор, консультант по управлению персоналом.  <br> 
                            Опыт работы бизнес-тренером 18 лет, более 2600 проведенных мероприятий за плечами.
</p>
                        </div>
                    </div>

                    <div class="images__flex">
                        <img class="images__img" src="./image/big_kolombet.png" alt="">
                        <div class="images__profile">
                            <p class="images__name">Татьяна Коломбет</p>
                            <p class="images__position">Директор компании Formatta UA, HR-консультант, эксперт в оценке персонала с опытом разработки систем оценки и управления результативностью, аудита и внедрения HR-процессов.
</p>
                        </div>
                    </div>

                    <div class="images__flex">
                        <img class="images__img" src="./image/big_karelina.png" alt="">
                        <div class="images__profile">
                            <p class="images__name">Ирина Карелина</p>
                            <p class="images__position">CEO диджитал ассессмент-центра Squadrille<br>
                            Эксперт по оценке персонала, евангелист, автор и ведущая программы HR-Тех/HR-Этих на канале Медиаметрикс.
</p>
                        </div>
                    </div>

                    <div class="images__flex">
                        <img class="images__img" src="./image/big_shahbazyan.png" alt="">
                        <div class="images__profile">
                            <p class="images__name">Галуст Шахбазян</p>
                            <p class="images__position">Директор по развитию ассессмент-центра Squadrille.
</p>
                        </div>
                    </div>

                    <div class="images__flex">
                        <img class="images__img" src="./image/big_borisenko.png" alt="">
                        <div class="images__profile">
                            <p class="images__name">Анна Борисенко</p>
                            <p class="images__position images__position-manytext">Кандидат педагогических наук, HRD, ментор для директоров по персоналу, трекер для топ-команд, модератор, консультант по управлению людьми.<br/>
                            Сертифицированный интегратор института И. Адизеса. Сертифицированный консультант по оценке топ- команд по методике HOGAN. Член независимой HR-коллегии Национальной конфедерации развития человеческого капитала, Национального Союза кадровиков, Член Экспертного Совета «Премия HR- бренд».
</p>
                        </div>
                    </div>

                    <div class="images__flex">
                        <img class="images__img" src="./image/big_yakovina.png" alt="">
                        <div class="images__profile">
                            <p class="images__name">Ольга Яковина</p>
                            <p class="images__position images__position-manytext">Более 10 лет опыта в оценке и развитии персонала (сертифицированный асессор, сертификат SHL). В HR с 2005 года, эксперт в области оценки и развития персонала — работала в крупных консалтинговых компаниях, банковской и IT-сфере. В рамках консалтингового опыта проводила Центры Оценки для широкого круга клиентов. Реализовывала проекты по разработке систем оценки, обучения и развития, кадрового резерва, управления эффективностью в банке и IT продуктовой компании.
</p>
                        </div>
                    </div>

                    <div class="images__flex">
                        <img class="images__img" src="./image/big_chistyakov.png" alt="">
                        <div class="images__profile">
                            <p class="images__name">Александр Чистяков</p>
                            <p class="images__position images__position-manytext">Руководитель отдела по работе с клиентами OBLAKO Group:
</p>
<ul class="images__position images__position-manytext images__position-list"><li>HR digital-проекты на заказ</li>
    <li>ТренингСпэйс</li>
    <li>ТренингСпэйс Академия</li>
    <li>Маркет — работа с внешними экспертами</li>
</ul>
<p class="images__position images__position-manytext">Более 10 лет на стороне поставщиков HR digital-решений и услуг для крупных корпораций.
</p>
                        </div>
                    </div>

                    <div class="images__flex">
                        <img class="images__img" src="./image/big_kryachko.png" alt="">
                        <div class="images__profile">
                            <p class="images__name">Ольга Крячко</p>
                            <p class="images__position ">руководитель методического отдела Финансовой Академии Актив. Экзаменатор кандидатов на дипломы IPFM.
</p>
                        </div>
                    </div>




                    <div class="images__flex">
                        <img class="images__img" src="./image/big-photoyara.png" alt="">
                        <div class="images__profile">
                            <p class="images__name">Ярослава Коломиец</p>
                            <p class="images__position">модератор конференции</p>
                            <p class="images__position">PR-менеджер Финансовой
                            Академии Актив и digital-платформы Finassessment
                        </p>
                        </div>
                    </div>
                    
                </div>
                <!-- Навигация для вышеупомянутого слайдера -->
                <div class="imagesnew_dotted">
                    <!-- // обязательно в css запретите трансформацию, а то будут иконки ездить в зависимости от номера слайда -->                
                    <img class="active" src="./image/shatrov.png">
                    <img src="./image/fedak.png">
                    <img src="./image/ivanishkin.png">
                    <img src="./image/tustov.png">
                    <img src="./image/kolombet.png">
                    <img src="./image/karelina.png">
                    <img src="./image/shahbazyan.png">
                    <img src="./image/borisenko.png">
                    <img src="./image/yakovina.png">
                    <img src="./image/chistyakov.png">
                    <img src="./image/kryachko.png">
                    <img  src="./image/kolomiec_prew.png">
                    
                </div>
            </div>
        </section>

        <section class="programm" id="prog">
            <div class="container">
                <h2 class="title">Программа полета</h2>
                <div class="tab">
                    <button class="tab__links active" onclick="openCity(event, 'first')">День 1</button>
                    <button class="tab__links" onclick="openCity(event, 'second')">День 2</button>

                </div>

                <div id="first" class="tab__content programm__day" style="display: block;">
                    <div class="programm__flex">
                        <div class="programm__date">20 апреля</div>
                        <div class="programm__title">«Ассессмент для найма»</div>
                    </div>

                    <div class="programm__items">

                        <div>
                            <div class="programm__items">
                                <div class="programm__item">
                                    <div class="programm__item-text">
                                        <span class="programm__item-date">10:00
                                            <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                        </span>Открытие конференции. Вступительное слово модератора
                                    </div>
                                    <div class="programm__item-prog"></div>
                                </div>
                            </div>

                            <div class="programm__item hint__fst">
                                <div class="programm__item-text">
                                    <span class="programm__item-date">10:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> </span>
                                    Астроспикер 1<br>Татьяна Коломбет<br>
                                    <!-- <span class="programm__item-connect"> Татьяна Коломбет</span><br> -->
                                    <span class="programm__item-theme"> <span class="programm__item-theme"> <span class="programm__item-theme">Тема выступления:</span></span></span> Использование психометрики в оценке и отборе персонала<br>
                                    <p href="#" class="programm__item-link">Программа выступления</p>
                                </div>

                                <div class="programm__hint hint__astro-fst">
                                    <ol class="programm__hint-list">
                                        <li class="programm__hint-item">Какая информация о людях нужна HR-ам, руководителям, бизнесу для принятия взвешенных решений и как эти задачи решают психометрические инструменты — опросники.</li>
                                        <li class="programm__hint-item">Что такое психометрические опросники, их надежность и валидность.</li>
                                        <li class="programm__hint-item">Как опросники дополняют центры оценки и развития.</li>
                                        <li class="programm__hint-item">Как и зачем они используются в подборе персонала.</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="programm__item hint__fst">
                                <div class="programm__item-text">
                                    <span class="programm__item-date">11:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                    </span>Астроспикеры 2 <br>
                                    Ирина Карелина и Галуст Шахбазян<br>
                                    <!-- <span class="programm__item-connect">[На орбите, налаживаем связь...]</span><br> -->
                                     <span class="programm__item-theme"> <span class="programm__item-theme"> <span class="programm__item-theme">Тема выступления:</span></span></span> Диджитал-ассессмент: космос в облаках<br>
                                    <p href="#" class="programm__item-link">Программа выступления</p>
                                </div>

                                <div class="programm__hint hint__astro-fst">
                                    <ol class="programm__hint-list">
                                        <li class="programm__hint-item">Как изменилось «лицо» ассессмента за последний год. </li>
                                        <li class="programm__hint-item">Почему диджитал в оценке становится гигиеническим минимумом компании.
</li>
                                        <li class="programm__hint-item">Что и как оценивать онлайн.</li>
                                        <li class="programm__hint-item">Коробка или облако.</li>
                                    </ol>
                                </div>
                            </div>

         

                        </div>


                        <div>
                        <div class="programm__item hint__fst">
                                <div class="programm__item-text">
                                    <span class="programm__item-date">12:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                    </span>Астроспикер 3<br>
                                    Юрий Шатров<br>
                                     <!-- <span class="programm__item-connect">[На орбите, налаживаем связь...]</span><br> -->
                                     <span class="programm__item-theme">Тема выступления:</span> Инновации в оценке персонала: тренды и прогноз<br>
                                    <p href="#" class="programm__item-link">Программа выступления</p>
                                </div>
                                <div class="programm__hint hint__astro-fst">
                                <ol class="programm__hint-list">
                                        <li class="programm__hint-item">Инновации в оценке персонала на четырех уровнях:
                                            <ul>
                                                <li>Тренды</li>
                                                <li>Технологии</li>
                                                <li>Критерии</li>
                                                <li>Рынок</li>
                                            </ul>
                                        </li>
                                        <li class="programm__hint-item">Основные инновационные технологии:
                                        <ul>
                                                <li>искусственный интеллект</li>
                                                <li>геймификация</li>
                                                <li>предиктивная аналитика</li>                              
                                            </ul>
                                        </li>
                                    </ol>
                                </div>
                            </div>

                            <div class="programm__item hint__fst">
                                
                                <div class="programm__item-text">
                                    <span class="programm__item-date">13:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                    </span>Астроспикер 4 <br> Владимир Федак <br>
                                    <!-- <span class="programm__item-connect">[На орбите, налаживаем связь...]</span><br> -->
                                     <span class="programm__item-theme"> <span class="programm__item-theme">Тема выступления:</span></span> Как AI помогает выбрать лучшего кандидата: кейс IT Svit

                                    <br>
                                    <p href="#" class="programm__item-link">Программа выступления</p>
                                </div>

                                <div class="programm__hint hint__astro-fst">
                                <ol class="programm__hint-list">
                                        <li class="programm__hint-item">Что такое искусственный интеллект и как его применяют в рекрутинге
                                        
                                        </li>
                                        <li class="programm__hint-item">Зачем это бизнесу?
                                        </li>
                                        <li class="programm__hint-item">Кейс компании IT Svit: как AI помогает при выборе лучшего кандидата
                                        </li>
                                    </ol>
                                </div>
                            </div>

                            <div class="programm__item hint__fst">
                                
                                <div class="programm__item-text">
                                    <span class="programm__item-date">14:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                    </span>Астроспикер 5 <br> Ольга Яковина <br>
                                    <!-- <span class="programm__item-connect">[На орбите, налаживаем связь...]</span><br> -->
                                     <span class="programm__item-theme"> <span class="programm__item-theme">Тема выступления:</span></span> Компетентностный подход в рекрутинге

                                    <br>
                                    <p href="#" class="programm__item-link">Программа выступления</p>
                                </div>

                                <div class="programm__hint hint__astro-fst">
                                <ol class="programm__hint-list">
                                        <li class="programm__hint-item">Для чего внедрять? 
                                        </li>
                                        <li class="programm__hint-item">Цель, преимущества и ограничения.
                                        </li>
                                        <li class="programm__hint-item">Как внедрять ─ возможные инструменты.
                                        </li>
                                        <li class="programm__hint-item">Пример построенного и работающего процесса оценки на основе компетенций, hard skills и мотивации.
                                        </li>
                                    </ol>
                                </div>
                            </div>

                            <!-- <div class="programm__item hint__fst">
                                <div class="programm__item-text">
                                    <span class="programm__item-date">15:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                    </span>Закрытие первого дня конференции<br>

                                </div>
                            </div> -->

                        </div>

                    </div>

                </div>

                <div id="second" class="tab__content" style="display: none;">
                <div class="programm__flex">
                        <div class="programm__date">21 апреля</div>
                        <div class="programm__title">«Ассессмент для обучения»</div>
                    </div>


                    <div class="programm__items">

                        <div>
                            <div class="programm__items">
                                <div class="programm__item">
                                    <div class="programm__item-text">
                                        <span class="programm__item-date">10:00                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                        </span>Открытие второго дня конференции
                                    </div>
                                    <div class="programm__item-prog"></div>
                                </div>
                            </div>

                            <div class="programm__item hint__fst">
                                <div class="programm__item-text">
                                    <span class="programm__item-date">10:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                    </span>Астроспикер 1 <br>Александр Чистяков<br>
                                    <span class="programm__item-theme"> <span class="programm__item-theme">Тема выступления:</span></span> Классический ассессмент в онлайне: миф или реальность<br>
                                    <p href="#" class="programm__item-link">Программа выступления</p>
                                </div>

                                <div class="programm__hint hint__astro-fst">
                                <ol class="programm__hint-list">
                                        <li class="programm__hint-item">Возможность реализации классических упражнений в онлайн-формате.</li>
                                        <li class="programm__hint-item">Автоматизация и стандартизация в онлайн-ассессменте.</li>
                                        <li class="programm__hint-item"> Аналитика: управление на основе данных.</li>                                     
                                    </ol>
                                </div>
                            </div>

                            <div class="programm__item hint__fst">
                                <div class="programm__item-text">
                                    <span class="programm__item-date">11:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                    </span>Астроспикер 2 <br>
                                    Анна Борисенко<br>
                                    <!-- <span class="programm__item-connect">[На орбите, налаживаем связь...]</span><br> -->
                                     <span class="programm__item-theme"> <span class="programm__item-theme">Тема выступления:</span></span> Программа развития для руководителей по итогам ассессмента Hogan<br>
                                    <p href="#" class="programm__item-link">Программа выступления</p>
                                </div>

                                <div class="programm__hint hint__astro-fst">
                                    <ol class="programm__hint-list">
                                        <li class="programm__hint-item">Что такое методика Hogan и почему ее используют для оценки руководителей?</li>
                                        <li class="programm__hint-item">Основные опросники: сильные характеристики личности, деструкторы, мотивы и ценности.</li>
                                        <li class="programm__hint-item">Как использовать результаты ассессмента по методике Hogan?</li>
                                        <li class="programm__hint-item">Кейсы: как составить индивидуальный план развития для руководителя?</li>
                                    </ol>
                                </div>

                                
                            </div>

                            <div class="programm__item hint__fst">
                                <div class="programm__item-text">
                                    <span class="programm__item-date">12:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                    </span>Астроспикер 3 <br>
                                    Михаил Тустов<br>
                                    <!-- <span class="programm__item-connect">[На орбите, налаживаем связь...]</span><br> -->
                                     <span class="programm__item-theme"> <span class="programm__item-theme">Тема выступления:</span></span> Ассессмент в бизнесе через геймификацию<br>
                                    <p href="#" class="programm__item-link">Программа выступления</p>
                                </div>

                                <div class="programm__hint hint__astro-fst">
                                    <ol class="programm__hint-list">
                                        <li class="programm__hint-item">Возможности и ограничения игрового ассессмента.</li>
                                        <li class="programm__hint-item">Онлайн и офлайн особенности.</li>
                                        <li class="programm__hint-item">5 кейсов в ассессменте и их разбор (агро, IT, производство, колл-центр, HoReCa).</li>
                                        <li class="programm__hint-item">Простые шаги, как создать свои игровые элементы и грамотно выбрать специалиста.</li>
                                    </ol>
                                </div>

                                
                            </div>


                        </div>


                        <div>

                        


                            <div class="programm__item hint__fst">
                                <div class="programm__item-text">
                                    <span class="programm__item-date">13:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                    </span>Астроспикер 4 <br>
                                    Ирина Сидорчук<br>
                                    
                                    <!-- <span class="programm__item-connect">[На орбите, налаживаем связь...]</span><br> -->
                                     <span class="programm__item-theme"> <span class="programm__item-theme">Тема выступления:</span></span> Кейс-метод: как обучать сотрудников на примерах реальных ситуаций
                                    <br>
                                    <p href="#" class="programm__item-link">Программа выступления</p>
                                </div>

                                <div class="programm__hint hint__astro-fst">
                                    <ol class="programm__hint-list">
                                        <li class="programm__hint-item">Где наиболее продуктивно применяют кейс-метод</li>
                                        <li class="programm__hint-item">Преимущества и недостатки кейс-метода в процессе обучения</li>
                                        <li class="programm__hint-item">Как разрабатывать ситуационные и проблемные кейсы</li>
                                        <li class="programm__hint-item">Как эффективно применить кейс-метод в процессе обучения персонала</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="programm__item hint__fst">
                                <div class="programm__item-text">
                                    <span class="programm__item-date">14:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                    </span>Астроспикер 5 <br> Сергей Иванишкин<br>
                                    <!-- <span class="programm__item-connect">[На орбите, налаживаем связь...]</span><br> -->
                                     <span class="programm__item-theme"> <span class="programm__item-theme">Тема выступления:</span></span> Новая эра автоматизации<br>
                                    <p href="#" class="programm__item-link">Программа выступления</p>
                                </div>

                                <div class="programm__hint hint__astro-fst">
                                    <ol class="programm__hint-list">
                                        <li class="programm__hint-item">Что такое автоматизация бизнес-процессов.</li>
                                        <li class="programm__hint-item">Цели и задачи автоматизации HR бизнес-процессов.</li>
                                        <li class="programm__hint-item">Как понять, что уже пора?</li>
                                        <li class="programm__hint-item">С чего начать?</li>
                                        <li class="programm__hint-item">Как и с помощью чего?</li>
                                        <li class="programm__hint-item">Кейс "Автоматизация обучения и развития". </li>
                                        <li class="programm__hint-item">Бонус "СДО уже не удивишь, а что тогда?"</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="programm__item hint__fst">
                                <div class="programm__item-text">
                                    <span class="programm__item-date">15:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                    </span>Астроспикер 6 <br> Ольга Крячко<br>
                                    <!-- <span class="programm__item-connect">[На орбите, налаживаем связь...]</span><br> -->
                                     <span class="programm__item-theme"> <span class="programm__item-theme">Тема выступления:</span></span> Онлайн-ассессмент для справедливых кадровых ротаций и прицельного обучения<br>
                                    <p href="#" class="programm__item-link">Программа выступления</p>
                                </div>

                                <div class="programm__hint hint__astro-fst">
                                    <ol class="programm__hint-list">
                                        <li class="programm__hint-item">Что такое digital-платформа Finassessment</li>
                                        <li class="programm__hint-item">Как устроена платформа и чем полезна для HR-менеджеров и рекрутеров</li>
                                        <li class="programm__hint-item">Кейс сталелитейного предприятия по кадровым ротациям и обучению финансового департамента.</li>
                                        <li class="programm__hint-item">Кейс энергетической компании по обучению финансовых специалистов в сети филиалов.</li>
                                    </ol>
                                </div>
                            </div>
<!-- 
                            <div class="programm__item hint__fst">
                                <div class="programm__item-text">
                                    <span class="programm__item-date">15:05                                             <?php if ($country != 'UA'){echo 'МСК';}
                                            else {echo '';} ?> 
                                    </span>Закрытие первого дня конференции<br>

                                </div>
                            </div> -->

                        </div>

                    </div>
                    </div>

                <a href="#main-form" class="programm__but">Занять место на корабле</a>
            </div>
        </section>



        <section class="certificate">
            <div class="container">
                <h2 class="title">Сертификат участника</h2>
                <div class="certificate__items">
                    <div class="certificate__text">Вы получите фирменный сертификат конференции «HR-компас 2021: курс на ассессмент», если будете ее активным участником. Задавайте вопросы спикерам, участвуйте в конкурсах и розыгрышах, пройдите исследование, тогда космосертификат — ваш!</div>
                    <div class="certificate__img">
                        <img src="./image/certificate.png" alt="" class="certificate__image">
                    </div>
                </div>
            </div>
        </section>

        


        <section class="recording">
            <div class="container">
            <h2 class="title">А запись будет?</h2>
                <div class="recording__flex">
                    <p class="recording__text">Запись будет платной и появится в доступе через несколько световых лет (шутка). Чтобы получить запись конференции бесплатно, нужно поучаствовать в небольшом исследовании и быть участником телеграм-канала.</p>
                    <a href="https://t.me/hr_compass" class="recording__but" target="_blank">Присоединиться к чату</a>
                </div>

                <div class="tariffs">
                    <div class="tariffs__items">
                        <div class="tariffs__item free">
                            <p class="tariffs__title">Свободный
полет</p>
                            <ul class="tariffs__list">
                            <li class="tariffs__list-item">Участие в конференции</li>
                                <li class="tariffs__list-item">Записи всех выступлений спикеров*
</li>
                                <li class="tariffs__list-item">Презентации от спикеров*</li>
                                <li class="tariffs__list-item">Сертификат участника конференции*</li>
                                
                            </ul>

                            
                            
                            <a href="#main-form" class="tariffs__btn">Зарегистрироваться</a>
                            <p class="tariffs__item-text">*при участии в исследовании</p>
                            
                        </div>

                        <div class="tariffs__item bisness">
                            <p class="tariffs__title">Бизнес-класс</p>
                            <ul class="tariffs__list">
                                <li class="tariffs__list-item">Презентации от спикеров</li>
                                <li class="tariffs__list-item">Записи всех выступлений спикеров</li>
                                <li class="tariffs__list-item">3 теста от Finassessment в подарок</li>
                                <li class="tariffs__list-item">Сертификат участника конференции</li>
                                
                            </ul>

                            <p class="tariffs__price">
                            <?php if ($country != 'UA'){echo ' 6000 рублей ';}
                                            else {echo ' 2000 гривен ';} ?>    
                            </p>

                            <a id="bisness_reg" class="tariffs__btn bisness__btn">Зарегистрироваться
и заказать запись</a>
                        </div>
                    </div>
                </div>


                

            </div>

            

        </section>

        <section class="flight">

            <div class="container" id="org">
                <h2 class="title">Организатор полета</h2>
                <div class="flight__container">
                    <p class="flight__text">Почти что NASA, но без ровера Perseverance:)</p>
                    <p class="flight__text"><a href="http://finassessment.net" target="_blank" class="flight__link">Finassessment</a> — digital-платформа для оценки hard skills финансовых специалистов и управленцев. Разработана экспертами Финансовой Академии Актив. Функционал платформы помогает организовывать прицельное корпоративное обучение, оценивать новых кандидатов, формировать кадровый резерв и оптимизировать штат.</p>
                </div>
            </div>

        </section>

        <section class="partners">
            <div class="container">
                <h2 class="title">Партнеры</h2>
                <ul class="partners__items">
                    <li class="partners__item">
                        <a href="https://aktiv.ua" class="partners__item-link" target="_blank">
                        <img src="./image/logo_aktiv.png" alt="" class="partners__item-img"></a>
                    </li>
                    <li class="partners__item">
                        <a href="https://finrabota.com/" class="partners__item-link" target="_blank">
                        <img src="./image/finrabota.png" alt="" class="partners__item-img"></a></li>
                    <li class="partners__item"><a href="https://skillum.com/" class="partners__item-link" target="_blank"><img src="./image/skillum.png" alt="" class="partners__item-img"></a></li>
                    <li class="partners__item">
                        <a href="https://etutorium.ru/" class="partners__item-link" target="_blank"><img src="./image/etutor.png" alt="" class="partners__item-img"></a></li>

                        <li class="partners__item">
                        <a href="https://hr-elearning.ru" class="partners__item-link" target="_blank"><img src="./image/logo/hr_rus.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://mobile-business.by/" class="partners__item-link" target="_blank"><img src="./image/logo/mobile_business.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://vk.com/club130412293" class="partners__item-link" target="_blank"><img src="./image/logo/perfect_hr.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://www.englishdom.com/" class="partners__item-link" target="_blank"><img src="./image/logo/ed.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="http://hrpuls.ru/" class="partners__item-link" target="_blank"><img src="./image/logo/hrpuls.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://www.work.ua/" class="partners__item-link" target="_blank"><img src="./image/logo/work.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://marketer.ua/" class="partners__item-link" target="_blank"><img src="./image/logo/marketer.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://hurma.work/ru/?utm_source=partner&utm_medium=finassessment" class="partners__item-link" target="_blank"><img src="./image/logo/hurma.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://ru.jobsora.com/" class="partners__item-link" target="_blank"><img src="./image/logo/jobsora.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://www.talent-management.com.ua/" class="partners__item-link" target="_blank"><img src="./image/logo/talent.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://www.trainingspace.online/?utm_source=partner&utm_medium=site&utm_campaign=hr-compass" class="partners__item-link" target="_blank"><img src="./image/logo/trainingspace.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://friend.work/" class="partners__item-link" target="_blank"><img src="./image/logo/friendwork.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://squadrille.com/" class="partners__item-link" target="_blank"><img src="./image/logo/squadrille.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="http://formatta-ua.com/" class="partners__item-link" target="_blank"><img src="./image/logo/formatta.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="http://ashrm.ru/" class="partners__item-link" target="_blank"><img src="./image/logo/hr-asociation.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a class="partners__item-link" target="_blank"><img src="./image/logo/hrdom.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="http://www.litres.ru/" class="partners__item-link" target="_blank"><img src="./image/logo/litres.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://ru.jobvk.com" class="partners__item-link" target="_blank"><img src="./image/logo/jobvk.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://www.compandben.org/" class="partners__item-link" target="_blank"><img src="./image/logo/expertum.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="http://adizes.me/?utm_source=finassessment" class="partners__item-link" target="_blank"><img src="./image/logo/adizes.png" alt="" class="partners__item-img"></a>
                    </li>

                    <li class="partners__item">
                        <a href="https://alpinadigital.ru/" class="partners__item-link" target="_blank"><img src="./image/logo/alpina.png" alt="" class="partners__item-img"></a>
                    </li>

                </ul>
            </div>
        </section>

        <section class="contacts" id="contact">
            <div class="container">
                <h2 class="title">Контакты центра управления полетами </h2>
                <div class="contacts__items">
                    <div class="contacts__item">
                        <p class="contacts__item-title">По вопросам партнерства</p>
                        <img src="./image/yaraslava.png" alt="Ярослава Коломиец" class="contacts__item-image">
                        <p class="contacts__item-name">Ярослава Коломиец
                        </p>
                        <p class="contacts__item-text">PR-менеджер Финансовой
                            Академии Актив и digital-платформы Finassessment
                        </p>
                        <a class="contacts__item-email" href="mailto:ykolomiec@finacademy.net">
                            ykolomiec@finacademy.net</a>
                        <a class="contacts__item-fb" href="https://www.facebook.com/profile.php?id=100010400952051" target="_blank">
                            <img src="./image/fb.png">
                        </a>

                    </div>
                    <div class="contacts__item">
                        <p class="contacts__item-title">По вопросам<br> спикерства</p>
                        <img src="./image/marina.png" alt="Марина Смирнова" class="contacts__item-image">
                        <p class="contacts__item-name">Марина Смирнова

                        </p>
                        <p class="contacts__item-text"></p>
                        <p class="contacts__item-text">Руководитель отдела оценки и обучения Финансовой Академии Актив и digital-платформы Finassessment</p>
                        <a class="contacts__item-email" href="mailto:msmirnova@finassessment.com">msmirnova@finassessment.com</a>
                        <a class="contacts__item-fb" href="https://www.facebook.com/smyrnovamaryna" target="_blank">
                            <img src="./image/fb.png">

                        </a>
                    </div>
                    <div class="contacts__item">
                        <p class="contacts__item-title">По остальным вопросам и предложениям</p>
                        <img src="./image/ludmila.png" alt="Людмила Кучкина" class="contacts__item-image">
                        <p class="contacts__item-name">Людмила Кучкина

                        </p>
                        <p class="contacts__item-text">Head of marketing department Finassessment.com and Finacademy.net </p>

                        <a class="contacts__item-email" href="mailto:lkuchkina@finacademy.net">lkuchkina@finacademy.net</a>
                        <a class="contacts__item-fb" href="https://www.facebook.com/mila.kuchkina" target="_blank">
                            <img src="./image/fb.png">

                        </a>
                    </div>
                </div>
                <a href="#main-form" class="contacts__but">Зарегистрироваться на конференцию</a>

            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="footer__flex">

                    <div class="footer__item">
                        <img class="footer__logo" src="/images/template/logo.png">
                        <!-- <ul class="footer__list">
                            <li><a class="footer__link" href="https://finassessment.com">Финассессмент Украина</a></li>
                            <li><a class="footer__link" href="https://finassessment.ru">Финассессмент Россия</a></li>
                        </ul> -->
                    </div>


                    <div class="footer__item">
                        <p class="footer__title">О Finassessment</p>
                        <ul class="footer__list">
                            <li><a class="footer__link" href="/funktsional" target="_blank">Функционал</a></li>
                            <li><a class="footer__link" href="https://finassessment.net/blog/keis" target="_blank">Кейсы</a></li>
                            <li><a class="footer__link" href="/master-class" target="_blank">Обучение и мастер-классы</a></li>
                            <li><a class="footer__link" href="https://finassessment.net/blog" target="_blank">Блог</a></li>
                        </ul>
                    </div>


                    <div class="footer__item">
                        <p class="footer__title">Сотрудничество</p>
                        <ul class="footer__list">
                            <!--<li><a href="https://account.finassessment.com/corp">Разработка тестов и программ обучения</a></li>-->
                            <li><a class="footer__link" href="http://partner.finacademy.net/finassessment">Партнерам</a></li>
                            <li><a class="footer__link" href="https://finassessment.net/add-article">Авторам</a></li>
                        </ul>
                    </div>


                    <div class="footer__item">
                        <p class="footer__title">О нас</p>
                        <ul class="footer__list">
                            <li><a class="footer__link" href="/contacts" target="_blank">Контакты</a></li>
                            <li><a class="footer__link" href="/our-team" target="_blank">Наша команда</a></li>
                        </ul>
                        <div class="footer__soc">
                            <div class="footer__soc-f">
                                <a href="https://www.facebook.com/Finassessment/">
                                    <i class="footer__facebook"></i>
                                </a>
                            </div>

                            <div class="footer__soc-in">
                                <a href="https://www.linkedin.com/company/24997305/">
                                    <i class="footer__linkedin"></i>
                                </a>
                            </div>

                            <div class="footer__soc-inst">
                                <a href="https://www.instagram.com/hr_compass/">
                                    <i class="footer__instagram"></i>
                                </a>
                            </div>

                            <div class="footer__soc-telega">
                                <a href="https://t.me/hr_compass">
                                    <i class="footer__telega"></i>
                                </a>
                            </div>

                        </div>
                    </div>





                </div>

                <p class="footer__copir">©2021 Finassessment</p>
            </div>
    </div>

    </footer>

    </div>

    <!-- pop up free -->
    <div class="modal-overlay">
       
  <div class="modal">
  <div class="modal_r"> 

  <a href="" class="close-modal">
      <span class="close-modal__span"></span>
  </a>
    <!-- <a class="close-modal">
      <svg viewBox="0 0 20 20">
        <path fill="#C7D9E2" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
      </svg>
    </a>close modal -->



    <form id="g-recapcha" method="post" action="/extensions/gateway.php" form-recapcha="number_2" class="modal__form modal-content">
                            
                                <p class="modal__form-text">Оставьте свои данные, чтобы мы выслали вам счет за все материалы конференции, предусмотренные в пакете!</p>

                                <input class="modal__form-name" type="text" name="lastname" placeholder="ФИО" required="">
                                <input class="modal__form-email" type="text" name="email" placeholder="Email" required="">
                                <input class="modal__form-phone" type="text" name="phone" placeholder="Телефон" required="">
                                <input type="hidden" name="redirect_url" required="" value="/conference/hr-compass/thanks-business/">
                                <input type="hidden" name="description" id="description_modal" value="HR-заявка 2021 free">
                                <input type="hidden" name="esputnik" value="1">
                                <input type="hidden" name="type" value="fas-hr-conf-2021">
                                <input type="hidden" name="webinar_id" value="">
                                



                                <div style="position: relative" class="modal__form-cbx">
                                    <input class="check-box-hide" name="remember" required="" type="checkbox" id="remember3">


                                    <label for="remember3" class="hr__form-checkbox">
                                        <span class="modal__form-agreement">Я принимаю условия <a href="/polzovatelskoe-soglashenie" target="_blank">Пользовательского<br> соглашения</a> и <a target="_blank" href="/politika-konfidencialnosti">Политика конфиденциальности</a></span>
                                    </label>
                                </div>
                                <input class="modal__form-btn" type="submit" value="Отправить">
                            </form>

   <!-- content -->
    
  </div><!-- modal -->
  </div>
</div><!-- overlay -->
    <!-- pop up free -->    



    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/modal.js"></script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PG56WVD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script>
        var i = 0;
        $("form").each(function() {
            i++;
            $(this).attr("form-recapcha", "number_" + i);
        });

    </script>


    <script>
        $('form').submit(function() {
            var form_number = $(this).closest('form').attr("form-recapcha");
            var form_attr_number = "form-recapcha='" + form_number + "'";
            var final = "form[" + form_attr_number + "]";

            event.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('6LcJOpMUAAAAAMOkESmJiN1ZRXnghQ_RmTJlSk3t', {
                    action: 'create_comment'
                }).then(function(token) {
                    $('form').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                    $('form').prepend('<input type="hidden" name="action" value="create_comment">');
                    $(final).unbind('submit').submit();
                });;
            });
            $(this).children('input[type=submit]').prop('disabled', true).val("Отправка...").css("background", "gray").css("color", "white");
            $(this).children('.buttons').find("input[type=submit]").prop('disabled', true).val("Отправка...").css("background", "gray").css("color", "white");
        });

    </script>
</body>

</html>
