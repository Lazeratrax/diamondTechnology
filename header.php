<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <!--общее, шрифты, header  -->
    <!--    <link type="text/css" rel="stylesheet" href="css/reset.css">-->
    <!--    <link type="text/css" rel="stylesheet" href="css/fonts.css">-->
    <!--    <link rel="stylesheet" href="css/main.css">-->
    <!--    <link rel="stylesheet" href="css/header.css">-->
    <!--  блоки главной страницы блоков    -->
    <!--    <link rel="stylesheet" href="css/head.css">-->
    <!--    <link rel="stylesheet" href="css/services.css">-->
    <!--    <link rel="stylesheet" href="css/calculate.css">-->
    <!--    <link rel="stylesheet" href="css/about.css">-->
    <!--    <link rel="stylesheet" href="css/how-to-work.css">-->
    <!--    <link rel="stylesheet" href="css/callback.css">-->
    <!--    <link rel="stylesheet" href="css/form.css">-->
    <!--    <link rel="stylesheet" href="css/gallery.css">-->
    <!--    <link rel="stylesheet" href="css/our_works.css">-->
    <!--    <link rel="stylesheet" href="css/map.css">-->
    <!--    стили доп блоков    -->
    <!--    <link rel="stylesheet" href="css/bread-crumb.css">-->
    <!--    <link rel="stylesheet" href="css/diamond-drilling.css">-->
    <!--    <link rel="stylesheet" href="css/completed.css">-->
    <!--    <link rel="stylesheet" href="css/completed-page.css">-->
    <!--    <link rel="stylesheet" href="css/photo-gallery.css">-->
    <!--    <link rel="stylesheet" href="css/about-page.css">-->
    <!--    <link rel="stylesheet" href="css/error.css">-->
    <!--   стили footer и media  -->
    <!--    <link rel="stylesheet" href="css/footer.css">-->
    <!--    <link rel="stylesheet" href="css/media.css">-->

    <style>
        body.custom-background {
            background-image: url('<?php background_image(); ?>');
        }

        /*header mobile---------------------------------------------------------------------------*/
        .header__burger{
            display: none;
            width: 40px;
            height: 28px;
            position: relative;
        }

        .burger__line{
            display: block;
            width: 100%;
            height: 2px;
            background-color: #fff;
            position: absolute;
            left: 0;
        }

        .burger__line_first{
            top: 0;
        }

        .burger__line_second{
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .burger__line_third{
            bottom: 0;
        }

        @media screen and (max-width: 767px) {

            #header-navbar-ul {
                display: none;
            }

            .header-navbar__wrapper {
               background-color: #1A5784;
                padding: 20px 0;
            }

            .header__burger {
                display: block;
                margin-left: 10px;
                cursor: pointer;
            }

            .header__nav-close{
                width: 40px;
                height: 40px;
                position: absolute;
                top: 20px;
                right: 20px;
                z-index: 11;
            }
            .header__nav-close-line{
                display: block;
                width: 100%;
                height: 2px;
                background-color: #fff;
                position: absolute;
                top: 50%;
            }
            .header__nav-close-line:first-child{
                -webkit-transform: translateY(-50%) rotate(45deg);
                -ms-transform: translateY(-50%) rotate(45deg);
                transform: translateY(-50%) rotate(45deg);
            }
            .header__nav-close-line:last-child{
                -webkit-transform: translateY(-50%) rotate(-45deg);
                -ms-transform: translateY(-50%) rotate(-45deg);
                transform: translateY(-50%) rotate(-45deg);
            }
        }

    </style>

    <?php wp_head(); ?>
</head>
<body>
<?php echo get_template_directory_uri(); ?>

<!----header-wrapper --->

<header>

    <div class="header-title__wrapper">
        <div class="wrapper">
            <div class="header-title">
                <h2 class="header-title__title">ооо "алмазные технологии"</h2>
                <div class="header-title__tels">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tel.png" alt=""
                         class="header__img">
                    <a class="header-title__link" href="tel:+375441111111">+375 44 111 11 11</a>
                    <a class="header-title__link" href="tel:+375441111111">+375 44 111 11 11</a>
                </div>
                <form class="header-title__search" action="/" method="post">
                    <input type="text" placeholder="Поиск">
                    <button>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/search.png" alt=""
                             class="header__img">
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="header-navbar__wrapper">

        <nav class="header-navbar">
            <?php wp_nav_menu(array(
                'theme_location' => 'top',
//	'menu'            => '',
                'container' => '',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'header-navbar-ul',
                'menu_id' => 'header-navbar-ul',
//	'echo'            => true,
//	'fallback_cb'     => 'wp_page_menu',
//	'before'          => '',
//	'after'           => '',
//	'link_before'     => '',
//	'link_after'      => '',
//	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//	'depth'           => 0,
//	'walker'          => '',
            )); ?>

            <div class="header__nav-close">
                <span class="header__nav-close-line"></span>
                <span class="header__nav-close-line"></span>
            </div>
        </nav>

        <div class="header__burger burger">
            <span class="burger__line burger__line_first"></span>
            <span class="burger__line burger__line_second"></span>
            <span class="burger__line burger__line_third"></span>
        </div>
    </div>
    <!--    <nav class="header-navbar">-->
    <!--            <div class="wrapper">-->
    <!--        <ul class="header-navbar-ul" id="header-navbar-ul">-->
    <!--            <li><a class="header-navbar-ul__link" href="">Главная</a></li>-->
    <!--            <li class="header-navbar-ul__item"><a class="header-navbar-ul__link" href="">Услуги</a>-->
    <!--                <ul class="header-navbar__sub-ul">-->
    <!--                    <li><a class="header-navbar__sub-ul_link" href="">Алмазное сверление</a></li>-->
    <!--                    <li><a class="header-navbar__sub-ul_link" href="">Алмазная резка</a></li>-->
    <!--                    <li><a class="header-navbar__sub-ul_link" href="">Гидропескоструйная очистка</a></li>-->
    <!--                </ul>-->
    <!--            </li>-->
    <!--            <li><a class="header-navbar-ul__link" href="">Выполненные объекты</a></li>-->
    <!--            <li><a class="header-navbar-ul__link" href="">Расчет стоимости</a></li>-->
    <!--            <li><a class="header-navbar-ul__link" href="">Фотогалерея</a></li>-->
    <!--            <li><a class="header-navbar-ul__link" href="">О компании</a></li>-->
    <!--        </ul>-->
    <!--            </div>-->
    <!--    </nav>-->
</header>
