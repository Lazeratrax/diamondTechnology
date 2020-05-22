<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <style>

        .main {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-end;
            text-align: center;
            height: 440px;
        }
        .wrapper-message {
            display: flex;
            align-items: flex-end;
        }
        .main__message{
            width: 100%;
            height: 305px;
        }

        .footer {
            width: 100%;
            height: 344px;
            background-color: #BBBEC0;
            text-align: center;
        }

        .footer__h1 {
            font-family: RobotoRegular, sans-serif;
            font-size: 36px;
            color: #FFFFFF;
            padding-top: 90px;
            margin-bottom: 30px;
        }

        .footer__link {
            background-color: #1A1A1A;
            color: #FFFFFF;
            font-family: PoppinsSemiBold, sans-serif;
            font-size: 16px;
            border: 0;
            border-radius: 2px;
            padding: 11px 35px;
            box-shadow: 0 7px 20px rgba(26, 26, 26, 0.35);
        }


    </style>
</head>
<body>

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
    <!--- -->
    <!--- main-->
    <main class="main">
        <div class="wrapper wrapper-message">
            <img src="imgs/404.png" class="main__message" alt="">
        </div>

    </main>

    <footer class="footer">
        <h3 class="footer__h1">К сожалению, данной страницы<br> не существует:(</h3>

        <a class="footer__link" href="/">Назад на главную</a>
    </footer>


    <!--- -->
    <!--- -->
    <!--- -->

</div>
</body>
</html>