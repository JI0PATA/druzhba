<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.title', 'Спортивно-досуговый центр "Дружба"') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('components/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('components/slick/slick-theme.css') }}">
    <script src="{{ asset('components/slick/slick.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('components/lightbox/css/lightbox.css') }}">
    <script src="{{ asset('components/lightbox/js/lightbox.js') }}"></script>

</head>
<body>

<input type="checkbox" class="hidden" id="menu_mobile">
<label id="san_menu" for="menu_mobile">
    <div></div>
    <div></div>
    <div></div>
</label>
<header id="header">
    <div id="hat" class="wp header__item">
        <div id="hat__items" class="wp">
            <div class="hat__item">
                <img src="{{ asset('img/rf.jpg') }}" alt="">
                <img src="{{ asset('img/tat.jpg') }}" alt="">
                <img src="{{ asset('img/laishevo.gif') }}" alt="">
            </div>
            <div class="hat__item">
                <div class="hat__sub-item">
                    <img src="{{ asset('img/phone.png') }}" alt="" class="hat__sub-item_img">
                    <span class="hat__sub-item_title">8 (800) 555 35 35</span>
                </div>
                <div class="hat__sub-item">
                    <img src="{{ asset('img/location.png') }}" alt="" class="hat__sub-item_img">
                    <span class="hat__sub-item_title">с. Песчаные Ковали, Олимпийская 13, Казань</span>
                </div>
            </div>
            <div class="hat__item">
                <div class="hat__sub-item">
                    <img src="{{ asset('img/mail.png') }}" alt="" class="hat__sub-item_img">
                    <span class="hat__sub-item_title">dosug@mail.ru</span>
                </div>
                <div class="hat__sub-item">
                    <img src="{{ asset('img/clock.png') }}" alt="" class="hat__sub-item_img">
                    <span class="hat__sub-item_title">пн-вс с 08:00 до 21:00</span>
                </div>
            </div>
            <div class="hat__item">
                <div class="hat__sub-item">
                    <img src="{{ asset('img/vk.png') }}" alt="" class="hat__sub-item_img">
                    <a href="https://vk.com/club124311104" class="hat__sub-item_title" target="_blank">vk.com/club124311104</a>
                </div>
                <div class="hat__sub-item">
                    <img src="{{ asset('img/instagram.png') }}" alt="" class="hat__sub-item_img">
                    <a href="https://instagram.com/drughba_kovali" class="hat__sub-item_title" target="_blank">instagram.com/drughba_kovali</a>
                </div>
            </div>
        </div>
        <div class="full-line header__item"></div>
    </div>
    <div id="slider">
        <?php
        $slides = App\Slide::orderBy('id', 'DESC')->get();
        ?>

        @foreach($slides as $slide)
            <div class="slider__item" style="background-image: url({{ asset('img/slider/'.$slide['img']) }})">
                <div class="hat__main-title wp">
                    {!! $slide['description'] !!}
                </div>
            </div>
        @endforeach
    </div>
</header>

<div id="menu">
    <menu class="wp sticky">
        <a href="{{ route('home') }}" class="menu__item">Главная</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#achievements" class="menu__item">Достижения</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#mentors" class="menu__item">Тренера</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#news" class="menu__item">Новости</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#gallery" class="menu__item">Галерея</a>
        <a href="{{ \Request::route()->getName() !== 'home' ? '/' : '' }}#reviews" class="menu__item">Отзывы и Предложения</a>
        <a href="{{ route('user.schedules') }}" class="menu__item">Расписание</a>
    </menu>

    <menu class="wp mobile">
        <label for="menu_mobile" class="close">x</label>
        <a href="{{ route('home') }}" class="menu__item">Главная</a>
        <a href="{{ route('user.achievements') }}" class="menu__item">Достижения</a></label>
        <a href="{{ route('user.mentors') }}" class="menu__item">Тренера</a>
        <a href="{{ route('user.news') }}" class="menu__item">Новости</a>
        <a href="{{ route('user.albums') }}" class="menu__item">Галерея</a>
        <a href="{{ route('user.reviews') }}" class="menu__item">Отзывы и Предложения</a>
        <a href="{{ route('user.schedules') }}" class="menu__item">Расписание</a>
    </menu>

</div>

@yield('content')

<footer>
    Все права защищены © 2018
</footer>

<script>
    $(document).ready(function () {
        $('#slider').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            accessibility: false,
        });

        var stHeight = $('.slick-track').height();
        $('.slick-slide').css('height',stHeight + 'px' );

        $("a[href^='#']").on("click", function (event) {
            event.preventDefault();
            let id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top - 60}, 1500);
        });
    });
</script>

</body>
</html>