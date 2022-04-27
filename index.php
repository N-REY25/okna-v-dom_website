<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Окна в дом - пластиковые окна на заказ в Пензе</title>
        <meta name="description" content="В нашей компании вы можете заказать окна, балконы, лоджии с максимальной выгодой. Мы обязательно учтем все ваши пожелания!">
        <meta name="keywords" content="Пластиковые окна, Заказать окно в Пензе, Окна в дом, Пенза окна, Окна на заказ, Хорошие пластиковые окна, Окно на дачу">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="menu menu_off" onclick="menu_up()">
            <div class="m_menu">
                <a class="m_a" href="#">Новости</a>
                <a class="m_a" href="#">Профильные системы</a>
                <a class="m_a" href="#">Наши услуги</a>
                <a class="m_a" href="#">Портфолио</a>
                <a class="m_a" href="#">Рассчитать стоимость</a>
            </div>
        </section>
        <section class="preheader_section">
            <div class="wrapper">
                <div class="preheader">
                    <p class="p_p"><span><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i></span> г. Пенза ул. Коммунистическая, 28</p>
                    <p class="p_p"><span><i class="fa fa-phone fa-fw" aria-hidden="true"></i></span> 8 (8412) 25-16-10, 8 (937) 416-16-10</p>
                </div>
            </div>
        </section>
        <header>
            <div class="wrapper">
                <div class="header">
                    <a href="/"><img class="h_img" src="img/logo.png" alt="Logo"></a>
                    <nav class="h_nav">
                        <a class="hn_a" href="#">Новости</a>
                        <a class="hn_a" href="#">Профильные системы</a>
                        <a class="hn_a" href="#">Наши услуги</a>
                        <a class="hn_a" href="#">Портфолио</a>
                        <a class="hn_button" href="#">Рассчитать стоимость</a>
                    </nav>
                    <a class="m_h_button_menu" href="#" onclick="menu_down()"><i class="fa fa-bars fa-fw" aria-hidden="true"></i></a>
                </div>
            </div>
        </header>
        <section class="welcome_section">
            <div class="wrapper">
                <div class="welcome">
                    <p class="w_p">Сохраним тепло в вашем доме!</p>
                    <h1 class="w_h1">Окна, балконы, лоджии с большими скидками.</h1>
                    <a class="w_a" href="#">Хочу консультацию</a>
                </div>
            </div>
        </section>
        <script>
            function menu_down() {
                $('.menu').slideToggle(300, function(){
                    $('.menu').removeClass('menu_off');
                    $('.menu').addClass('menu_on');
                });
            }

            function menu_up() {
                $('.menu').slideToggle(300, function(){
                    $('.menu').removeClass('menu_off');
                    $('.menu').addClass('menu_on');
                });
            }
        </script>
    </body>
</html>