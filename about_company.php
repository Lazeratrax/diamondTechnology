<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/calculate.css">
    <style>

        /*---gallery_----*/

        .gallery-wrapper {
            display: flex;
            flex-direction: row;
        }

        .gallery__img {
            width: 278px;
            height: 290px;
            padding-right: 30px;
        }

        /*---end gallery----*/

        /*--- bread-crumb----*/

        .bread-crumb {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            height: 84px;
            align-items: center;
            justify-content: flex-start;
        }

        .bread-crumb__link {
            font-family: PoppinsMedium, sans-serif;
            font-size: 16px;
            color: #91969A;
        }

        .bread-crumb__link:after {
            content: ">";
            font-weight: bold;
            margin: 0 15px;
        }

        .bread-crumb__link_active {
            font-family: PoppinsMedium, sans-serif;
            font-size: 16px;
            color: #297EBD;
        }

        /*---end bread-crumb----*/


        /*------end calculation__wrapper------*/
        .zig-zag {
            background: #1ba1e2;
            position: relative;
        }

        .zig-zag:after {
            background: linear-gradient(-45deg, transparent 2px, #1ba1e2 0),
            linear-gradient(45deg, transparent 2px, #1ba1e2 0);
            background-position: left bottom;
            background-size: 20px 20px;
            content: "";
            display: block;
            height: 20px;
            width: 100%;
            position: absolute;
        }

        h1 {
            color: #fff;
            font-family: Arial;
            margin: 0;
            padding: 15px;
            text-align: center;
        }

        /*-------end--completed-objects-listing------*/

        /*------------*/
        html, body {
            margin: 0;
            padding: 0;
        }

        * {
            box-sizing: border-box;
        }


        /*-----photogallery-------*/
        .photogallery__p {
            font-family: ZonaProRegular, sans-serif;
            font-size: 16px;
            color: #91969A;
            line-height: 19px;
        }

        /*-----end-photogallery------*/


        /*--binding!!--slick-slider-----------*/

        html, body {
            margin: 0;
            padding: 0;
        }

        * {
            box-sizing: border-box;
        }

        .slider {
            /*width: 50%;*/
            max-width: 1230px;
            margin: 0 auto 90px;
        }

        .slick-slide {
            margin: 0 15px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }


        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
        }

        .slick-active {
            opacity: .5;
        }

        .slick-current {
            opacity: 1;
        }

        .slick-dotted.slick-slider {
            margin-bottom: 90px !important;
        }


        /*.slick-slide.slick-current.slick-active {*/
        /*    width: 277.5px;*/
        /*}*/

        /*---end-slick-slider-----------*/

    </style>
    <link rel="stylesheet" href="css/media.css">

    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <!--    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>-->

</head>
<body>
<!----header --->
<div class="page-wrapper">

    <!----header-wrapper --->
    <header>

        <div class="header-title__wrapper">
            <div class="wrapper">
                <div class="header-title">
                    <h2 class="header-title__title">ооо "алмазные технологии"</h2>
                    <div class="header-title__tels">
                        <img src="imgs/tel.png" alt="" class="header__img">
                        <a class="header-title__link" href="tel:+375441111111">+375 44 111 11 11</a>
                        <a class="header-title__link" href="tel:+375441111111">+375 44 111 11 11</a>
                    </div>
                    <form class="header-title__search" action="/" method="post">
                        <input type="text" placeholder="Поиск">
                        <button></button>
                    </form>
                </div>
            </div>
        </div>

        <nav class="header-navbar">
            <div class="wrapper">
                <ul class="header-navbar-ul">
                    <li><a class="header-navbar-ul__link" href="">Главная</a></li>
                    <li class="header-navbar-ul__item"><a class="header-navbar-ul__link" href="">Услуги</a>
                        <ul class="header-navbar__sub-ul">
                            <li><a class="header-navbar__sub-ul_link" href="">Алмазное сверление</a></li>
                            <li><a class="header-navbar__sub-ul_link" href="">Алмазная резка</a></li>
                            <li><a class="header-navbar__sub-ul_link" href="">Гидропескоструйная очистка</a></li>
                        </ul>
                    </li>
                    <li><a class="header-navbar-ul__link" href="">Выполненные объекты</a></li>
                    <li><a class="header-navbar-ul__link" href="">Расчет стоимости</a></li>
                    <li><a class="header-navbar-ul__link" href="">Фотогалерея</a></li>
                    <li><a class="header-navbar-ul__link" href="">О компании</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!---end-header-wrapper --->

    <!-------bread-crumb -------->
    <div class="bread-crumb wrapper">
        <a class="bread-crumb__link" href="">Главная</a>
        <a class="bread-crumb__link_active" href="/">Фотогалерея</a>
    </div>
    <!------end-bread-crumb -------->

    <!----main --->
    <main>
        <!-------"completed-objects__wrapper----------->
        <section class="completed-objects__wrapper">
            <h2 class="block__h2">
                <hr class="block__h2_hr">
                Фотогалерея
            </h2>
            <div class="wrapper">
                <h3 class="photogallery__h3"></h3>
                <article class="photogallery__article">

                    <p class="photogallery__p">С ООО «Алмазные технологии» это быстро, надежно и, главное, качественно.
                        10-лет выполняем любые по
                        сложности работы. Не хотите переплачивать? Хотите качественно? Вы пришли по адресу!</p>
                    <br>
                    <p class="photogallery__p"> Выполним работы по алмазному сверлению конструкций любой толщины, любого
                        диаметра и под любым углом.
                        Точно в срок.</p>
                    <br>
                    <p class="photogallery__p"> С ООО «Алмазные технологии» это быстро, надежно и, главное, качественно.
                        10-лет выполняем любые по
                        сложности работы. Не хотите переплачивать? Хотите качественно? Вы пришли по адресу! Выполним
                        работы
                        по алмазному сверлению конструкций любой толщины, любого диаметра и под любым углом. Точно в
                        срок.</p>
                    <br>
                    <p class="photogallery__p" id="photogaller">С ООО «Алмазные технологии» это быстро, надежно и,
                        главное,
                        качественно.
                        10-лет выполняем любые по
                        сложности работы. Не хотите переплачивать? Хотите качественно? Вы пришли по адресу! Выполним
                        работы
                        по алмазному сверлению конструкций любой толщины, любого диаметра и под любым углом. Точно в
                        срок.</p>

                </article>
            </div>
        </section>
        <!------- end completed-objects__wrapper----------->
        <!-------gallery----------->
        <!--        <div class="wrapper">-->

        <section class="regular slider">
            <div>
                <img src="http://placehold.it/350x300?text=1">
            </div>
            <div>
                <img src="http://placehold.it/350x300?text=2">
            </div>
            <div>
                <img src="http://placehold.it/350x300?text=3">
            </div>
            <div>
                <img src="http://placehold.it/350x300?text=4">
            </div>
            <div>
                <img src="http://placehold.it/350x300?text=5">
            </div>
            <div>
                <img src="http://placehold.it/350x300?text=6">
            </div>
        </section>
        <!--        </div>-->
        <!-------end gallery----------->
    </main>
</div>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function () {

        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1
        });

    });
</script>

<script>
    //   const activeOne = document.getElementsByClassName('slick-slide')[5]
    //   const activeLast = document.querySelector('.slick-active:last-child')
    //
    //
    //   activeOne.style.cssText = `color: red !important;margin:200px!important; border: 5px solid red;`
    // // for (let elem of activeOne) {
    // //     elem.style.cssText = `color: red !important;
    // // `
    // // }


    //   activeOne.style.cssText = `color: red !important;
    //   background-color: yellow;
    //   width: 100px;
    //   text-align: center;
    //   margin: 200px
    // `;
    //   for (let a = 0; a <= activeOne.length; a++) {
    //       activeOne.style.cssText = `color: red !important;
    //   background-color: yellow;
    //   width: 100px;
    //   text-align: center;
    // `;
    //   }


</script>
    <!----footer --->
    <?php get_footer(); ?>
    <!----end footer --->


