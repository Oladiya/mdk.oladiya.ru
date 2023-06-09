@extends('05-01.mp-verstka-media.layouts.main')

@section('title')
    О нас
@endsection

@section('content')
    <div class="flex-container">
        <article id="main-col">
            <h1 class="page-title">О нас</h1>
            <p>
                Обычно этот раздел рассказывает что-то об организации, но мы пишем лишь тренировочную страницу. Поэтому далее всё можно заполнить текстом "рыбой". Нас не интересует содержимое.
            </p>
            <p class="dark lipsum">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque aut cum error excepturi in nihil nisi odit pariatur, perspiciatis quia quibusdam quisquam rem sit suscipit unde vel, velit veritatis?</p>
        </article>
        <aside id="sidebar">
            <div class="dark">
                <h3><span class="fa fa-users"></span> Работа в команде</h3>
                <p>Можете, конечно, всю жизнь работать одиночкой, но если вы хотите попасть в хорошую компанию, где вам будут платить большие деньги, то учитесь общаться и работать в команде.</p>
            </div>
        </aside>
    </div>
@endsection
