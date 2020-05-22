<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package diamond_technology
 */

get_header(); ?>

<main class="site-main">

    <?php echo get_post_format() ?>
    <?php echo the_post() ?>
<!--   1- шаблон 2 - заглушка. если формат нестандартный - выводится просто get_post_format() - вид поста-->
    <?php get_template_part( 'templates/post-aside', get_post_format() ); ?>

    <!--  <div class="wrapper wrapper-main">-->
    <!----head --->
    <section class="head__wrapper"
             style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/main_background.png');">

        <div class="wrapper">
            <div class="head">
                <h1 class="head__title">алмазная резка</h1>
                <a class="head__link" href="">Узнать подробнее</a>
            </div>
        </div>

    </section>
    <!----end head --->

    <!----services --->
    <section class="services__wrapper"
             style="background: url('<?php echo get_template_directory_uri() ?>/assets/images/polygons_one.png') no-repeat top right;">

        <h2 class="block__h2">
            <hr class="block__h2_hr">
            Наши услуги
        </h2>

        <div class="wrapper">



            <div class="services">
                <div class="services__item"

                <!--                   onmouseout="document.getElementsByClassName('.services__item_img-diamond').style.backgroundPosition='-63px 0';"-->

                <div class="services__item_img services__item_img-diamond"
                     onmouseover="this.style.backgroundPosition='0 0';"
                     onmouseout="this.style.backgroundPosition='-63px 0';"
                     style="width: 63px; /* Ширина рисунка в пикселах */
                             background-position: -63px 0; /* Смещение фона */
                             background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/icons/diamond.png');">
                </div>
                АЛМАЗНАЯ РЕЗКА
            </div>
            <a class="services__item" href="#">
                <div class="services__item_img services__item_img-diamond-drilling"
                     style="  width: 56px; /* Ширина рисунка в пикселах */
                             background-position: -56px 0; /* Смещение фона */
                             background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/icons/drilling.png');">
                </div>
                АЛМАЗНОЕ СВЕРЛЕНИЕ</a>
            <a class="services__item" href="#">
                <div class="services__item_img services__item_img-sandblast"
                     style=" width: 30px; /* Ширина рисунка в пикселах */
                             background-position: -30px 0; /* Смещение фона */
                             background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/icons/hydro.png');"></div>
                ГИДРОПЕСКОСТРУЙНАЯ ОЧИСТКА</a>
        </div>


        <!--            <div class="services">-->
        <!--                <a class="services__item">-->
        <!--                    <div class=" services__item_img ">-->
        <!--                        <img src="--><!--/assets/images/icons/diamond.png" alt=""-->
        <!--                             class="services__item_img-diamond">-->
        <!--                    </div>-->
        <!--                    АЛМАЗНАЯ РЕЗКА</a>-->
        <!--                <a class="services__item">-->
        <!--                    <div class="services__item_img ">-->
        <!--                        <img src="--><!--/assets/images/icons/drilling.png" alt=""-->
        <!--                             class="services__item_img-diamond-drilling">-->
        <!--                    </div>-->
        <!--                    АЛМАЗНОЕ СВЕРЛЕНИЕ</a>-->
        <!--                <a class="services__item">-->
        <!--                    <div class="services__item_img ">-->
        <!--                        <img src="--><!--/assets/images/icons/hydro.png" alt=""-->
        <!--                             class="services__item_img-sandblast">-->
        <!--                    </div>-->
        <!--                    ГИДРОПЕСКОСТРУЙНАЯ ОЧИСТКА</a>-->
        <!--            </div>-->

        </div>
        <!----calculate --->
        <section class="calculate__wrapper">
            <h2 class="block__h2">
                <hr class="block__h2_hr">
                Расчет стоимости работ
            </h2>
            <div class="wrapper">
                <div class="calculate">

                    <h3 class="calculate__title"></h3>
                    <p class="calculate__p">
                        Здесь вы можете приблизительно рассчитать стоимость работ по алмазному сверлению отверстий.
                        Для этого выберите из списка нужный диапазон диаметров толщину и необходимое количество
                        отверстий.</p>
                    <p class="calculate__p"><b class="calculate__b">Диаметры в наличии:</b><br>
                        32,40,50,60,80,90,100,107,122,125,130,150,
                        160,180,200,225,250,275,300,330,350,400
                    </p>

                    <span class="calculate__min-order">Минимальный заказ = 60 рублей.</span>
                    <span class="calculate__separator"></span>

                </div>
            </div>
        </section>
        <!----end calculate --->
    </section>
    <!----end services --->

    <!----about --->
    <section class="about__wrapper"
             style='background: url("<?php echo get_template_directory_uri() ?>/assets/images/about_back.png") no-repeat '>

        <h2 class="block__h2">
            <hr class="block__h2_hr">
            О нашей компании
        </h2>
        <div class="wrapper">
            <div class="about">
                <p class="about__p">
                    Зарегистрирована в сентябре 2010 года и с тех пор не испытывала дефицита работы. Штат
                    специалистов
                    8-12 человек позволяет покрывать потребности нескольких объектов одновременно. Мы
                    специализируемся
                    на демонтажных работах (сверление, резка и демонтаж) любой сложности. Десятки тысяч отверстий,
                    сотни
                    километров резки и сотни тысяч тонн демонтированного бетона. Каждый новый объект давал нам
                    возможность расти и расширяться, учиться и совершенствовать свое мастерство в этой сфере. Мы
                    рады
                    раскрыть свой потенциал на ваших объектах и готовы к сотрудничеству.
                </p>

                <h5 class="about__h5">Чтобы заказать наши услуги вы можете:</h5>
                <ul class="about__ul">
                    <li class="about__li">Позвонить по телефону: <span> + 375 33 671 00 00</span></li>
                    <li class="about__li">Связаться по электронной почте: <span>info@di-tech.biz</span></li>
                    <li class="about__li">Или направить нам корреспонденцию на следующий адрес:<br>
                        <span>224020 г. Брест ул. 2-ая Заводская, д. 2</span></li>
                </ul>
            </div>
        </div>
    </section>
    <!----end about --->

    <!----how-to-work --->
    <section class="how-to-work__wrapper">

        <h2 class="block__h2">
            <hr class="block__h2_hr">
            Как с нами работать
        </h2>

        <div class="wrapper">
            <div class="how-to-work">

                <div class="how-to-work__stage">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/telep.png">
                    <p class="how-to-work__stage_p">Свяжитесь<br> с нами</p>
                </div>
                <div class="how-to-work__stage">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/callCenter.png">
                    <p class="how-to-work__stage_p">Получите<br> консультацию</p>
                </div>
                <div class="how-to-work__stage">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/dogovor.png">
                    <p class="how-to-work__stage_p">Заключили<br> договор</p>
                </div>
                <div class="how-to-work__stage">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/work.png">
                    <p class="how-to-work__stage_p">Выполняем<br> работу</p>
                </div>
                <div class="how-to-work__stage">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/profit.png">
                    <p class="how-to-work__stage_p">+ 1 довольный<br> клиент</p>
                </div>
            </div>
        </div>

    </section>
    <!----end how-to-work --->

    <!----callback --->
    <section class="callback_wrapper">
        <div class="wrapper">

            <div class="callback">

                <h4 class="callback__h4">Звоните прямо сейчас!</h4>

                <div class="callback__tels">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/tel.png" alt=""
                         class="header__img">
                    <a class="header__link" href="tel:+375441111111">+375 44 111 11 11</a>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/tel.png" alt=""
                         class="header__img">
                    <a class="header__link" href="tel:+375441111111">+375 44 111 11 11</a>
                </div>
                <br>
                <p>ИЛИ</p>

                <div class="callback__form-wrapper">
                    <h4 class="callback__form-wrapper_h4">Оставьте Вашу заявку и мы перезвоним Вам</h4>
                    <p class="callback__form-wrapper_p">Оставьте Ваши данные и наши сотрудники свяжутся с вами в
                        ближайшее время</p>

                    <?php echo do_shortcode('[contact-form-7 id="69" title="Контактная форма 1"]') ?>
                    <!--                        <form action="POST" class="callback__form">-->
                    <!--                            <input type="text" class="callback__form-input" placeholder="Имя">-->
                    <!--                            <input type="number" class="callback__form-input" placeholder="Телефон">-->
                    <!--                            <input type="email" class="callback__form-input" placeholder="E-mail">-->
                    <!--                            <button type="submit" class="callback__form-button">Отправить</button>-->
                    <!--                        </form>-->
                </div>

            </div>
        </div>


    </section>
    <!----end callback --->

    <!----gallery --->
    <section class="gallery__wrapper">
        <h2 class="block__h2">
            <hr class="block__h2_hr">
            Галерея работ
        </h2>
        <div class="wrapper">
            <!--<!-подключение галереи--->
            <php echo get_post_format() ?>

                <!--            <div class="gallery">-->
                <!--                <div class="gallery-wrapper">-->
                <!--                    <img class="gallery__img" src="./imgs/image_one.png" alt="">-->
                <!--                    <img class="gallery__img" src="./imgs/image_two.png" alt="">-->
                <!--                    <img class="gallery__img" src="./imgs/image_three.png" alt="">-->
                <!--                    <img class="gallery__img" src="./imgs/image_four.png" alt="">-->
                <!--                </div>-->
                <!--            </div>-->
        </div>
    </section>
    <!----end gallery --->

    <!----our_works --->
    <section class="our-works__wrapper">

        <h2 class="block__h2">
            <hr class="block__h2_hr">
            Наши объекты
        </h2>

        <div class="wrapper">
            <div class="our-works">
                <div class="our-works__listing">
                    <a href=""><img src="" alt=""></a>
                    <a href=""><img src="" alt=""></a>
                    <a href=""><img src="" alt=""></a>
                    <a href=""><img src="" alt=""></a>
                </div>
                <a href="">Увидеть больше</a>

            </div>
        </div>

    </section>
    <!----end our_works --->

    <!----our_works --->
    <div class="map"></div>
    <!----end our_works --->

    <!--        </div>-->
</main><!-- #main -->


<?php get_footer(); ?>
