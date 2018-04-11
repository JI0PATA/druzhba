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

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('components/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('components/slick/slick-theme.css') }}">
    <script src="{{ asset('components/slick/slick.min.js') }}"></script>

</head>
<body>

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
            dots: true
        });
    });
</script>

</body>
</html>