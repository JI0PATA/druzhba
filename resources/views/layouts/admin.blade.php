<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.title', 'Админ-панель') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

    <script src="{{ asset('components/ckeditor/ckeditor.js') }}"></script>

</head>
<body>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/admin') }}">
                Админ-панель
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    @if(\Request::session()->has('admin'))
                        <li><a class="nav-link" href="{{ route('admin') }}">{{ __('Главная') }}</a></li>
                        <li><a class="nav-link" href="{{ route('achievements') }}">{{ __('Достижения') }}</a></li>
                        <li><a class="nav-link" href="{{ route('mentors') }}">{{ __('Тренера') }}</a></li>
                        <li><a class="nav-link" href="{{ route('news') }}">{{ __('Новости') }}</a></li>
                        <li><a class="nav-link" href="{{ route('reviews') }}">{{ __('Отзывы') }}</a></li>
                        <li><a class="nav-link" href="{{ route('albums') }}">{{ __('Альбомы') }}</a></li>
                        <li><a class="nav-link" href="{{ route('sections') }}">{{ __('Секции') }}</a></li>
                        <li><a class="nav-link" href="{{ route('schedules') }}">{{ __('Расписание') }}</a></li>
                        <li><a class="nav-link" href="{{ route('logout') }}">{{ __('Выйти') }}</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>

<main class="py-4">
    @yield('content')
</main>

<script>
    $(document).ready(_ => {
        CKEDITOR.replace('textarea');
    });
</script>

</body>
</html>