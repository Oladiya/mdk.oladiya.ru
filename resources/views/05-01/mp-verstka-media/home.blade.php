@extends('05-01.mp-verstka-media.layouts.main')

@section('title')
    @media
@endsection

@section('content')
    <section id="showcase">
        <div class="container">
            <h1>Правила хорошего тона всегда использовать @media</h1>
            <p>Будь приветлив к каждому пользователю, адаптивность сайта - это очень важно!</p>
        </div>
    </section>

    <section id="newsletter">
        <div class="container">
            <h1>Оформи подписку</h1>
            <form action="">
                <input type="email" placeholder="Введите ваш email">
                <button type="submit" class="button_1">Подписаться</button>
            </form>
        </div>
    </section>

    <section id="boxes">
        <div class="flex-container">
            <div class="box">
                <span class="fa fa-signal fa-5x"></span>
                <h3>Тренируйся</h3>
                <p>Только постоянные тренировки повышают твой навык. Если хочешь быть успешным то совершенствуйся!</p>
            </div>
            <div class="box">
                <span class="fa fa-photo fa-5x"></span>
                <h3>Смотри хорошие проекты</h3>
                <p>Никто никогда не запретит подсмотреть хорошие идеи у лучших! Учиться у лучших - залог успешных
                    людей.</p>
            </div>
            <div class="box">
                <span class="fa fa-cube fa-5x"></span>
                <h3>Структурируй знания</h3>
                <p>Необходимо понимать, что нет предела совершенству. Но не пытайся гнаться за всем, определяй для себя
                    направления!</p>
            </div>
        </div>
    </section>

@endsection
