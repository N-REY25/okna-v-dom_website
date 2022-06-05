<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Окна в дом - пластиковые окна на заказ в Пензе</title>
        <meta name="description" content="В нашей компании вы можете заказать окна, балконы, лоджии с максимальной выгодой. Мы обязательно учтем все ваши пожелания!">
        <!-- Meta -->
        <?php require 'orm/meta.php'; ?>
    </head>
    <body>
        <!-- Header -->
        <?php require 'orm/header.php'; ?>

        <!-- Welcome -->
        <section class="welcome_section">
            <div class="wrapper">
                <div class="welcome">
                    <p class="w_p">Сохраним тепло в вашем доме!</p>
                    <h1 class="w_h1">Окна, балконы, лоджии с большими скидками.</h1>
                    <a class="w_a" href="#">Получить консультацию</a>
                    <img class="w_img" src="img/welcome_2.png" alt="welcome_2">
                </div>
            </div>
        </section>

        <!-- Advantages -->
        <section class="advantages_section">
            <div class="wrapper">
                <div class="advantages">
                    <div class="a_item">
                        <i class="fa fa-check fa-fw fa-2x" aria-hidden="true"></i>
                        <h2 class="ai_h2">Гарантия до 20 лет</h2>
                        <p class="ai_p">Мы используем только качественные и проверенные материалы и комплектующие.</p>
                    </div>
                    <div class="a_item">
                        <i class="fa fa-check fa-fw fa-2x" aria-hidden="true"></i>
                        <h2 class="ai_h2">Окна за 5 дней</h2>
                        <p class="ai_p">Срок изготовления стандартных изделий от 5 рабочих дней.</p>
                    </div>
                    <div class="a_item">
                        <i class="fa fa-check fa-fw fa-2x" aria-hidden="true"></i>
                        <h2 class="ai_h2">Нас советуют друзьям</h2>
                        <p class="ai_p">Более 30% заказов - это повторные клиенты или заказчики, которым нас порекомендовали.</p>
                    </div>
                    <div class="a_item">
                        <i class="fa fa-check fa-fw fa-2x" aria-hidden="true"></i>
                        <h2 class="ai_h2">Рассрочка</h2>
                        <p class="ai_p">Рассрочка до 12 месяцев</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Price -->
        <section class="price_section">
            <div class="wrapper">
                <div class="price">
                    <h2 class="pr_h2">Закажи с <span class="prh2_style">максимальной</span> выгодой!</br>Окна от производителя!</h2>
                    <p class="pr_p">В нашей компании вы можете заказать окна, балконы, лоджии с максимальной выгодой. Мы обязательно учтем все ваши пожелания и дадим квалифицированную консультацию совершенно бесплатно!</p>
                    <div class="pr_items">
                        <div class="pr_item">
                            <img class="pri_img" src="img/price.png" alt="Окна для цены">
                            <h3 class="pri_h3">Окна</h3>
                            <p class="pri_p">от 8 600* руб.</p>
                        </div>
                        <div class="pr_item">
                            <img class="pri_img" src="img/price_2.png" alt="Балконы для цены">
                            <h3 class="pri_h3">Балконы</h3>
                            <p class="pri_p">от 13 700* руб.</p>
                        </div>
                        <div class="pr_item">
                            <img class="pri_img" src="img/price_3.png" alt="Балконные блоки для цены">
                            <h3 class="pri_h3">Балконные блоки</h3>
                            <p class="pri_p">от 11 200* руб.</p>
                        </div>
                    </div>
                    <div class="pr_button">
                        <a class="prb_a_cons" href="#">Получить консультацию</a>
                        <a class="prb_a_serv" href="/services">Другие услуги</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Profile -->
        <section id="profile" class="profile_section">
            <div class="wrapper">
                <div class="profile">
                    <h2 class="pro_h2"><span class="proh2_style">Большой выбор</span> профильных систем и комплектующих</h2>
                    <div class="pro_filter">
                        <a class="prof_a" onclick="ajax_filter('rehau')">REHAU</a>
                        <a class="prof_a" onclick="ajax_filter('elex')">ELEX</a>
                        <a class="prof_a" onclick="ajax_filter('brusbox')">BRUSBOX</a>
                        <a class="prof_a" onclick="ajax_filter('salamander')">SALAMANDER</a>
                        <a class="prof_a" onclick="ajax_filter('gealan')">GEALAN</a>
                        <a class="prof_a" onclick="ajax_filter('faust')">FAUST</a>
                        <a class="prof_a" onclick="ajax_filter('krauss')">KRAUSS</a>
                        <a class="prof_a" onclick="ajax_filter('provedal')">PROVEDAL</a>
                    </div>
                    <div class="pro_text_info">
                        <!-- AJAX ответ -->
                    </div>
                    <div class="pro_items">
                        <!-- AJAX ответ -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Color window -->
        <section class="color_window_section">
            <div class="wrapper">
                <div class="color_window">
                    <div class="cw_text">
                        <h3 class="cwt_h3">“Цветные” окна</h3>
                        <p class="cwt_p">Иногда белый цвет окон не подходит под дизайн дома, или же заказчик просто хочет отказаться от привычного цвета профиля. Мы подберем и изготовим окна нужной цветовой гаммы в короткие сроки!</p>
                    </div>
                    <div class="cw_img">
                        <img class="cwi_img" src="img/color.png" alt="color">
                    </div>
                </div>
            </div>
        </section>

        <!-- Consultation -->
        <section class="consultation_section">
            <img class="c_img" src="img/image.png" alt="Люди">
            <div class="wrapper">
                <div class="consultation">
                    <h2 class="c_h2">Бесплатная консультация и замер</h2>
                    <p class="c_p">Наш менеджер всегда готов проконсультировать вас по любому вопросу,<br>помочь с выбором профильной системы и расчитать стоимость.<br>Оставьте заявку и мы свяжемся с вами в течение часа.</p>
                    <div class="c_as">
                        <a class="c_a" href="#">Получить консультацию</a>
                        <a class="c_a c_ai" href="#">Рассчитать стоимость онлайн</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="services_section">
            <div class="wrapper">
                <div class="services">
                    <h2 class="s_h2">Дополнительные услуги</h2>
                    <p class="s_p">Наша компания готова предложить вам большой спектр услуг, которые<br>выполнят квалифицированные специалисты в кратчайшие сроки.</p>
                    <div class="s_div">
                        <div class="s_text s_text_left">
                            <div class="st_info">
                                <p class="sti_p">Ремонт окон любой сложности</p>
                                <div class="sti_rat"></div>
                            </div>
                            <div class="st_info">
                                <p class="sti_p">Установка москитных сеток, отливов, подоконников</p>
                                <div class="sti_rat"></div>
                            </div>
                            <div class="st_info">
                                <p class="sti_p">Жалюзи, рулонные шторы</p>
                                <div class="sti_rat"></div>
                            </div>
                            <div class="st_info">
                                <p class="sti_p">Замена стеклопакетов</p>
                                <div class="sti_rat"></div>
                            </div>
                        </div>
                        <img src="img/master.png" alt="Мастер">
                        <div class="s_text s_text_right">
                            <div class="st_info">
                                <div class="sti_rat"></div>
                                <p class="sti_p">Обшивка и утепление балкона</p>
                            </div>
                            <div class="st_info">
                                <div class="sti_rat"></div>
                                <p class="sti_p">Монтаж и утепление крыши балкона</p>
                            </div>
                            <div class="st_info">
                                <div class="sti_rat"></div>
                                <p class="sti_p">Установка откосов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feedback -->
        <section class="feedback_section">
            <img class="feed_img" src="img/image2.png" alt="Люди2">
            <div class="wrapper">
                <div class="feedback">
                    <div class="f_text">
                        <h3 class="ft_h3">Оставьте заявку и мы<br>обязательно свяжемся с вами!</h3>
                        <p class="ft_p1">Так же вы можете связаться с нами по телефонам:</p>
                        <p class="ft_p2">8 (8412) 25-16-10</p>
                        <p class="ft_p2">8 (937) 416-16-10</p>
                        <div class="ft_soc">
                            <a class="fts_a" href="https://viber.click/79374161610"><img src="img/viber.svg" alt="viber"></a>
                            <a class="fts_a" href="https://wapp.click/79374161610"><img src="img/whatsapp.svg" alt="wapp"></a>
                        </div>
                    </div>
                    <div class="f_form">
                        <input class="ff_input" type="text" placeholder="Ваше имя">
                        <input class="ff_input" type="text" placeholder="Номер телефона">
                        <button class="ff_button">Отправить</button>
                        <p class="ff_p">Нажимая кнопку отправить, Вы автоматически даете согласие на обработку Ваших персональных данных</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php require 'orm/footer.php'; ?>
        <!-- Script -->
        <?php require 'orm/script.php'; ?>
    </body>
</html>