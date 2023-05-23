<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>@if(isset($work))
                {{ $work->title }}
            @else
                Работа по методическому пособию по HTML
           @endif
    </title>
</head>
<body>
<header>
    <ul class="theme-list">
        @foreach($titles as $theme)
            <li class="theme-item">
                {{ $theme->name }}
                <ul class="work-list">
                    @foreach($theme->works as $content)
                        <li class="work-item">
                            <a href="{{ route('mdk1', [$content->uri]) }}">{{ $content->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</header>
<main>
    @if(isset($work))
            <?php echo $work->content; ?>
    @else
        <h2>Это задание ещё не выполнено</h2>
    @endif
</main>
<footer>

</footer>
</body>
</html>
