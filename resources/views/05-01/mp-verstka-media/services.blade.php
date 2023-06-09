@extends('05-01.mp-verstka-media.layouts.main')

@section('title')
    Наши услуги
@endsection

@section('content')
    <div class="flex-container">
        <article id="main-col">
            <h1 class="page-title">Наши услуги</h1>
            <ul id="services">
                <li>
                    <h3>Услуга 1</h3>
                    <p class="lipsum">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, beatae corporis eaque, earum ex
                        explicabo facilis fugit ipsa minus necessitatibus obcaecati odit perspiciatis possimus suscipit
                        ullam ut, veniam vero voluptate.</p>
                    <p class="price">1.000.000</p>
                </li>
                <li>
                    <h3>Услуга 2</h3>
                    <p class="lipsum">Ad aliquid aperiam, asperiores assumenda commodi culpa cumque dicta doloremque esse et ex facilis
                        impedit iure laborum laudantium maxime nisi nostrum, odio pariatur porro ratione sapiente sequi
                        veniam veritatis voluptates?</p>
                    <p class="price">3.000.000</p>
                </li>
                <li>
                    <h3>Услуга 3</h3>
                    <p class="lipsum">Accusamus architecto at atque consequuntur, delectus facere harum illo, maiores mollitia natus
                        necessitatibus nobis, obcaecati possimus quaerat ratione reprehenderit sequi! Aperiam autem
                        consequatur ea eius, in omnis quo saepe vel!</p>
                    <p class="price">10.000.000</p>
                </li>
            </ul>
        </article>

        <aside id="sidebar">
            <div class="dark">
                <h3>Форма связи</h3>
                <form action="" class="contact">
                    <div>
                        <label> Имя
                            <input name="name" type="text">
                        </label>
                    </div>
                    <div>
                        <label> Email
                            <input name="email" type="email">
                        </label>
                    </div>
                    <div>
                        <label> Сообщение
                            <textarea name="message" placeholder="Напишите нам"></textarea>
                        </label>
                    </div>
                    <button type="submit" class="button_1">Отправить</button>
                </form>
            </div>
        </aside>
    </div>
@endsection
