<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Vanille</title>
    <link rel="stylesheet" href="css/main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div class="header">

    <div class="container">
            <div class="logo">
                <a href="#">
                <img class="logo-txt" src="img/logo-txt.png" />
                <div class="sprite-logo"></div>
                </a>
            </div>
        <div class="address">
            <p><span class="cell-icon"></span>+7 (351) 795-06-19</p>
            <a href="#">example@gmail.com</a>
        </div>
        <div class="clearfixer"></div>

        <div class="menu">
            <ul>
                <li><a href="#">Печенье и выпечка</a></li>
                <li><a href="#">Где заказать</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">О компании</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">Порядок работы</a></li>
            </ul>
        </div>
    </div>

    <div class="wave-line"></div>

</div>

<div class="workarea">
</div>

<div class="footer">
    <div class="container">
        <div class="menu last">
            <ul>
                <li><a href="">Контактная информация</a></li>
                <li><a href="">Вакансии</a></li>
                <li><a href="">Поставщикам</a></li>
            </ul>
        </div>
    </div>
</div>
<script>
    var ofset = $("div.active-position").offset();

    $(window).scroll(function(){
        if ($(window).scrollTop() > ofset['top']){
            $("div#fixed").addClass('fixed-position');
        }
        else {
            $("div#fixed").removeClass('fixed-position');
        }
    });
</script>
</body>
</html>