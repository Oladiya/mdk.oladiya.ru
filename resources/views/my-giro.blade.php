<?php
    $cssPath = asset('assets/css');
    $fontsPath = asset('assets/fonts');
    $imgPath = asset('assets/img/my-giro');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Giro</title>
    <link rel="stylesheet" href="{{$cssPath}}/bootstrap.min.css">
    <link rel="stylesheet" href="{{$cssPath}}/my-giro.css">
</head>
<body>
<section class="panel" id="first-page">
    <header class="d-flex justify-content-between align-items-end container">
        <div class="logo"><img src="{{$imgPath}}/logo-white.png" alt="logo"></div>
        <div class="contact">
            <div class="item d-flex justify-content-center align-items-center mb-2">
                <img src="{{$imgPath}}/address.png" alt="address">
                <p class="text-uppercase">москва, набережная 2 оф. 142</p>
            </div>
            <div class="item d-flex justify-content-center align-items-center">
                <img src="{{$imgPath}}/phone.png" alt="phone">
                <p class="text-uppercase">+7 923 398 9013</p>
            </div>
        </div>
        <button class="btn btn-order text-uppercase">Заказать<br>Звонок</button>
    </header>
    <div class="container d-flex flex-column align-items-center justify-content-center content"
         style="margin-top: 75px;">
        <ul class="nav">
            <li class="text-uppercase"><a href="#advantages">О нас</a></li>
            <li class="text-uppercase"><a href="#catalog">Каталог</a></li>
            <li class="text-uppercase"><a href="#sub">Контакты</a></li>
        </ul>
        <h1 class="site-name text-uppercase" style="margin-top: 40px;">my-giro</h1>
        <p class="text-uppercase text-center mt-3">Крупнейший интернет-магазин гироскутеров,<br>
            сигвеев и электросамокатов
            от известных<br> мировых производителей</p>
        <a class="btn btn-white-big text-uppercase" style="margin-top: 50px" href="#catalog">каталог</a>
    </div>
</section>
<section class="panel" id="advantages">
    <h1 class="section-title text-uppercase">Наши преимущества</h1>
    <div class="container content d-flex justify-content-center align-items-center mt-5">
        <div class="content w-75 d-flex justify-content-around align-items-center" style="height: 250px;" id="advantages">
            <?php $advantages = [
                ['img_uri' => '/advantages/1.png', 'name' => 'большой ассортимент'],
                ['img_uri' => '/advantages/4.png', 'name' => 'быстрая доставка'],
                ['img_uri' => '/advantages/3.png', 'name' => 'гарантия качества'],
                ['img_uri' => '/advantages/2.png', 'name' => 'онлайн консультант'],
            ]; ?>

            @foreach($advantages as $advantage)
                <div class="item">
                    <img src="{{ $imgPath . $advantage['img_uri'] }}" alt="advantages">
                    <p>{{ $advantage['name'] }}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>

<section class="panel" id="about-us">
    <div class="container d-flex h-100 flex-column align-items-center justify-content-center">
        <h1 class="section-title text-uppercase" style="color: #fff;">о нас</h1>
        <p class="text-upper text-center mt-5">В нашем интернет-магазине представлен большой
            выбор гироскутеров, сигвеев <br>
            и электросамокатов от известных мировых производителей.<br>
            Все товары, представленные на нашем сайте, отобраны лучшими специалистами в этой
            области.</p>
        <ol class="text-uppercase mt-5">
            <li><p>Купить гироскутер, электросамокат или сигвей недорого, Вы можете в нашем
                    <br>
                    интернет-магазине в любое время, когда Вам удобно. </p></li><br>
            <li><p>Доставка заказов осуществляется бесплатно, в любую точку
                    России.</p></li><br>
            <li><p>Так же, вы можете заказать гироскутер, сигвей или электросамокат по низкой
                    цене, позвонив нам.</p></li><br>
            <li><p>Или сделайте заказ, пообщавшись с нашим онлайн-консультантом
                    консультантам.</p></li><br>
            <li><p>Продажа гироскутеров, электросамокатов и сигвеев, осуществляется напрямую,
                    от производителей. </p></li><br>
        </ol>
        <a class="btn btn-white-big text-uppercase" href="#catalog">Каталог</a>
    </div>
</section>

<section class="panel" id="partners">
    <h1 class="section-title text-uppercase">Наши партнеры</h1>
    <div class="container content d-flex flex-column align-items-center mt-5">
        <div class="content d-flex align-items-end justify-content-center" style="height: 250px; width:
                500px;" id="brand-container">
            <input type="radio" name="brands-trigger" id="balance">
            <label for="balance" class="partners-label" id="balance-tab"></label>
            <div class="item" id="balance-container">
                <p class="text-uppercase">balance</p>
            </div>
            <input type="radio" name="brands-trigger" id="xiaomi" checked>
            <label for="xiaomi" class="partners-label" id="xiaomi-tab"></label>
            <div class="item" id="xiaomi-container">
                <p class="text-uppercase">xiaomi</p>
            </div>
            <input type="radio" name="brands-trigger" id="smart">
            <label for="smart" class="partners-label" id="smart-tab"></label>
            <div class="item" id="smart-container">
                <p class="text-uppercase">smart</p>
            </div>
            <input type="radio" name="brands-trigger" id="linbol">
            <label for="linbol" class="partners-label" id="linbol-tab"></label>
            <div class="item" id="linbol-container">
                <p class="text-uppercase">linbol</p>
            </div>
            <input type="radio" name="brands-trigger" id="kugoo">
            <label for="kugoo" class="partners-label" id="kugoo-tab"></label>
            <div class="item" id="kugoo-container">
                <p class="text-uppercase">kugoo</p>
            </div>
            <input type="radio" name="brands-trigger" id="subor">
            <label for="subor" class="partners-label" id="subor-tab"></label>
            <div class="item" id="subor-container">
                <p class="text-uppercase">subor</p>
            </div>
            <input type="radio" name="brands-trigger" id="airwheel">
            <label for="airwheel" class="partners-label" id="airwheel-tab"></label>
            <div class="item" id="airwheel-container">
                <p class="text-uppercase">airwheel</p>
            </div>
        </div>
    </div>
</section>

<section class="panel" id="consultants">
    <h1 class="section-title text-uppercase">помогут с выбором</h1>
    <div class="content d-flex justify-content-center flex-wrap mt-5">
        <?php
            $consultants = [
                ['img_uri' => '/consultants/1.png', 'name' => 'Галина Петрова', 'description' => 'Менеджер по продажам'],
                ['img_uri' => '/consultants/2.png', 'name' => 'Светлана Астрахова', 'description' => 'Менеджер по продажам'],
                ['img_uri' => '/consultants/3.png', 'name' => 'Иван Алексеев', 'description' => 'Менеджер по продажам'],
            ];
        ?>

        @foreach($consultants as $consultant)
            <div class="item text-uppercase text-center">
                <img src="{{ $imgPath . $consultant['img_uri'] }}" alt="consultant">
                <p class="item-title">{{ $consultant['name'] }}</p>
                <p class="item-description">{{ $consultant['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>

<img class="delimiter" src="{{$imgPath}}/section-delimiter.png" alt="section-delimiter">

<section id="about-segway">
    <div class="content d-flex justify-content-between align-items-center">
        <img class="section-image" src="{{$imgPath}}/segway.png" alt="segway">
        <div class="text-upper" style="width: 60%;">
            <h1 class="section-title" style="text-align: start;">особенности гироскутеров</h1>
            <div class="mt-3">
                <h1 class="title"><img src="{{$imgPath}}/minus.png" alt="minus">Начнем с минусов:</h1>
                <ol>
                    <li><p>Трясёт</p></li><br>
                    <li><p>Нет сиденья</p></li><br>
                    <li><p>Только для одного</p></li><br>
                </ol>
            </div>
            <div class="mt-3">
                <h1 class="title"><img src="{{$imgPath}}/plus.png" alt="plus">
                    С минусами разобрались, теперь можем перейти к преимуществам гироскутеров:
                </h1>
                <ol>
                    <li><p>компактность </p></li><br>
                    <li><p>Экономичностью</p></li><br>
                    <li><p>Доступностью</p></li><br>
                    <li><p>Манёвренностью</p></li><br>
                    <li><p>Простотой в освоении</p></li><br>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="panel" id="catalog">
    <h1 class="section-title text-uppercase">каталог</h1>
    <input type="radio" id="hoverboards" name="categories" value="hoverboards">
    <input type="radio" id="electric_scooters" checked name="categories" value="electric_scooters">
    <input type="radio" id="segways" name="categories" value="segways">
    <div class="categories">
        <form id="catalog_filter">
            <ul id="categories-container">
                <li>
                    <label for="hoverboards" id="hoverboards-tab" class="text-uppercase">Гироскутеры</label>
                </li>
                <li>
                    <label for="electric_scooters" id="electric_scooters-tab" class="text-uppercase">Электросамокаты</label>
                </li>
                <li>
                    <label for="segways" id="segways-tab" class="text-uppercase">Сигвеи</label>
                </li>
            </ul>
        </form>
    </div>

    <?php
        $catalog = [
            [
                'id' => 'electric_scooters-container',
                'name' => 'Электросамокат',
                'products' => [
                    [
                        'img_uri' => '/catalog/electric_scooters/1.jpg',
                        'name' => 'Xiaomi Mijia Electric Scooter m187 Black',
                        'price' => 1000,
                    ],
                    [
                        'img_uri' => '/catalog/electric_scooters/2.jpg',
                        'name' => 'Xiaomi Mijia Electric Scooter m187 Black',
                        'price' => 1000,
                    ],
                    [
                        'img_uri' => '/catalog/electric_scooters/3.jpg',
                        'name' => 'Xiaomi Mijia Electric Scooter m187 Black',
                        'price' => 1000,
                    ],
                ],
            ],
            [
                'id' => 'hoverboards-container',
                'name' => 'Гироскутер',
                'products' => [
                    [
                        'img_uri' => '/catalog/hoverboards/1.jpg',
                        'name' => 'Гироскутер Smart Balance 10 Красный',
                        'price' => 6500,
                    ],
                    [
                        'img_uri' => '/catalog/hoverboards/2.jpg',
                        'name' => 'Гироскутер Smart Balance Premium 10 Цветные Молнии',
                        'price' => 10990,
                    ],
                    [
                        'img_uri' => '/catalog/hoverboards/3.jpg',
                        'name' => 'Гироскутер Smart Balance SUV Чёрная Молния 10.5 Premium PRO',
                        'price' => 8590,
                    ],
                ],
            ],
            [
                'id' => 'segways-container',
                'name' => 'Сигвей',
                'products' => [
                    [
                        'img_uri' => '/catalog/segways/1.jpg',
                        'name' => 'Сигвей Xiaomi Ninebot mini Pro Black (Чёрный)',
                        'price' => 31480,
                    ],
                    [
                        'img_uri' => '/catalog/segways/2.jpg',
                        'name' => 'Сигвей Xiaomi Ninebot mini Pro White (Белый)',
                        'price' => 32480,
                    ],
                    [
                        'img_uri' => '/catalog/segways/3.jpg',
                        'name' => 'Сигвей Xiaomi Ninebot mini White (Белый)',
                        'price' => 14790,
                    ],
                ],
            ],
        ];
    ?>

    <div class="panels">
        @foreach($catalog as $type)
            <div id="{{$type['id']}}" class=" justify-content-between flex-wrap catalog-container">
                @foreach($type['products'] as $product)
                    <div class="c-card">
                        <img src="{{ $imgPath . $product['img_uri']}}" alt="card-image">
                        <div class="card-body">
                            <h4 class="text-uppercase text-center" style="color: #3d67b0;">{{ $product['name'] }}</h4>
                            <p class="type"><span>вид:</span>{{ $type['name'] }}</p>
                            <div class="price-container d-flex justify-content-between align-items-center">
                                <p class="price">{{ $product['price'] }}<span>р.</span></p>
                                <button class="btn btn-primary">Приобрести</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</section>

<section class="panel" id="useful-info">
    <h1 class="section-title text-uppercase">Полезная инфорамация</h1>
    <div class=" d-flex justify-content-center align-items-center flex-column u-content">
        <div class="content width-75 d-flex" style="height: 70vh;">
            <div class="item d-flex justify-content-between align-items-center">
                <img class="item-img" src="{{ $imgPath }}/useful_info/1.jpg" alt="image">
                <div class="p-5">
                    <div class="d-flex justify-content-start">
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ $imgPath }}/fire.png" alt="fire-icon">
                            <p class="text-upper mt-3">new</p>
                        </div>
                    </div>
                    <h1 class="title text-uppercase">Как выбрать гироскутер перед покупкой?</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsa laudantium minima non numquam omnis quidem. Beatae consequuntur facere odit officiis porro provident similique voluptates! Eligendi id in inventore possimus!</p>
                </div>
            </div>
        </div>
        <div class="content width-75 d-flex" style="height: 70vh;">
            <div class="item d-flex justify-content-between align-items-center flex-row-reverse">
                <img class="item-img" src="{{ $imgPath }}/useful_info/2.jpg" alt="image">
                <div class="p-5">
                    <div class="d-flex justify-content-start">
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ $imgPath }}/fire.png" alt="fire-icon">
                            <p class="text-uppercase mt-3">new</p>
                        </div>
                    </div>
                    <h1 class="title text-upper">Электросамокат. Какой лучше и как выбрать?</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur autem commodi debitis deserunt et ex id, labore nemo nostrum numquam quaerat quasi repellendus repudiandae sed tenetur ut voluptate voluptatem.</p>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
