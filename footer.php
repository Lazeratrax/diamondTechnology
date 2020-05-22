<!----footer --->
<footer>

    <div class="wrapper">
        <h2 class="footer__title">
            ООО "АЛМАЗНЫЕ ТЕХНОЛОГИИ"
        </h2>
    </div>
    <div class="wrapper">


        <div class="footer-content">

            <div class="footer__operating-mode">
                <h3 class="block__h3">РЕЖИМ РАБОТЫ:</h3>
                <ul class="">
                    <li>Пн: 8.00-17.00</li>
                    <li>Вт: 8.00-17.00</li>
                    <li>Ср: 8.00-17.00</li>
                    <li>Чт: 8.00-17.00</li>
                    <li>Пт: 8.00-17.00</li>
                    <li>Сб: Выходной (прием заказов на пн.)</li>
                    <li>Вс: Выходной (прием заказов на пн.)</li>
                </ul>
            </div>

            <div class="footer__archive">
                <h3 class="block__h3">АРХИВ:</h3>
                <div class="footer__calendar">
                    <?php dynamic_sidebar( 'calendar_footer' ); ?>
                </div>
            </div>

            <div class="footer__requisites">
                <h3 class="block__h3">РЕКВИЗИТЫ:</h3>

                <div class="wrapper__tels">

                    <div class="wrapper__tel">
                        <div class="tel__wrapper-white">
                            <img src="imgs/tel_mini.png" alt="">
                        </div>
                        <a href="tel:80336710000">8-033-671-00-00</a>
                    </div>

                    <div class="wrapper__tel">
                        <div class="tel__wrapper-white">
                            <img src="imgs/tel_mini.png" alt="">
                        </div>
                        <a href="tel:80336710000">8-033-671-00-00</a>
                    </div>
                </div>


                <p>224004, г. Брест<br> ул. Лейтенанта Рябцева д. 104, оф. 22<br> УНП 290961740</p>
            </div>

        </div>

    </div>

    <ul id="sidebar">
        <?php dynamic_sidebar( 'the_tag_cloud' ); ?>
    </ul>


    <div class="wrapper">
        <div class="footer__wrapper-marks">
            <div class="marks">
                <h3 class="block__h3">МЕТКИ:</h3>
                <ul class="footer__marks">
                    <li class="footer__marks-item">
                        <a class="footer__marks-link"
                           style="background: url('<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow-mark.png');" href="">Алмазная резка</a></li>

                </ul>
            </div>
        </div>

    </div>

    <p class="footer">Copyright © 2020 ООО "Алмазные технологии" - Алмазная резка, Алмазное сверление в Бресте,
        Алмазное
        бурение, Расширение проемов, Демонтаж</p>
    </div>
</footer>
<!----end footer --->

<script>
    // Burger handler
    (function () {
        const burgerItem = document.querySelector('.burger');
        const menu = document.querySelector('.header__nav');
        const menuCloseItem = document.querySelector('.header__nav-close');
        const menuLinks = document.querySelectorAll('.header__link');
        burgerItem.addEventListener('click', () => {
            menu.classList.add('header__nav_active');
        });
        menuCloseItem.addEventListener('click', () => {
            menu.classList.remove('header__nav_active');
        });
        if (window.innerWidth <= 767) {
            for (let i = 0; i < menuLinks.length; i += 1) {
                menuLinks[i].addEventListener('click', () => {
                    menu.classList.remove('header__nav_active');
                });
            }
        }
    }());
</script>

</body>
</html>