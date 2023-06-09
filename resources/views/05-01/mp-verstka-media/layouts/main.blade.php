<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Куманец Андрей">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/mp-verstka-media.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    @yield('css')
</head>
    <body>
        <header>
            <div class="container">
                <div>
                    <h1><span class="fa fa-rocket"></span><span class="highlight">@media</span> это просто</h1>
                </div>
                <nav>
                    <ul>
                        <li @if($cur === 0) class="current" @endif><a href="{{ route('05-01.media.home') }}">Главная</a></li>
                        <li @if($cur === 1) class="current" @endif><a href="{{ route('05-01.media.about') }}">О нас</a></li>
                        <li @if($cur === 2) class="current" @endif><a href="{{ route('05-01.media.services') }}">Услуги</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>@media это просто, Copyright &copy; {{ date('Y') }}</p>
        </footer>
        @yield('js')
    </body>
</html>
