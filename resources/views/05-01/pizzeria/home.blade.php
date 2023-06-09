@extends('05-01.pizzeria.layouts.main')

@section('title')
    - Главная
@endsection

@section('content')
    <div class="pizzas">
        @foreach($products['pizzas'] as $pizza)
            <div class="pizza">
                <div>
                    <img src="{{ asset('assets/img/pizzeria/pizzas') }}/{{ $pizza->img_uri }}">
                    <p class="pizza_name">{{ $pizza->name }}</p>
                    <p class="pizza_ingredients">
                        @foreach($pizza->ingredients as $key => $ingredient)
                            @if(count($pizza->ingredients) === $key + 1)
                                {{ $ingredient->name }}
                            @else
                                {{ $ingredient->name }},
                            @endif
                        @endforeach
                    </p>
                </div>
                <div>
                    <p class="pizza_price pizza_price_menu">{{ $pizza->small_standard_price }}</p>
                    <button onclick="addToOrder('pizza', {{$pizza->id}})">Выбрать</button>
                </div>
            </div>
        @endforeach
    </div>
    <form action="{{ route('pizzeria.order.store') }}" method="post">
        @csrf
        <div class="order" id="order"></div>
        <div class="form">
            <div class="form_item">
                <label for="address">Адрес</label>
                <input name="address" id="address" type="text" placeholder="Куда доставить?"
                       value="{{ old('address') }}">
                @error('address')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form_item">
                <label for="tel">Телефон</label>
                <input name="tel" id="tel" type="tel" class="tel-russia" placeholder="Для связи с Вами"
                       value="{{ old('tel') }}">
                @error('tel')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" value="Заказать">
        </div>
    </form>

@endsection

@section('js')
    <script>
            <?php
            // $PA - pizza attributes
            $PA = [
                ['small_', 'medium_', 'large_'],
                ['standard_', 'thin_'],
                ['price', 'weight', 'calories', 'proteins', 'fats', 'carbohydrates']
            ] ?>
        let products = {
            @foreach($products as $productsKey => $productTypes)
            '{{ $productsKey }}': {
                @if($productsKey === 'pizzas')
                        @foreach($productTypes as $pizza)
                        {{ $pizza['id'] }} : {
                    'id': '{{ $pizza['id'] }}',
                    'name': '{{ $pizza['name'] }}',
                    'img_uri': '{{asset('assets/img/pizzeria/pizzas')}}/{{ $pizza['img_uri'] }}',
                    'is_new': '{{ $pizza['is_new'] }}',
                    'sales': '{{ $pizza['sales'] }}',
                    @for($size = 0; $size < 3; $size++)
                            @for($doughType = 0; $doughType < 2; $doughType++)
                            @if($size === 0 && $doughType === 1) @continue @endif
                            @for($attribute = 0; $attribute < 6; $attribute++)
                    '{{$PA[0][$size]}}{{$PA[1][$doughType]}}{{$PA[2][$attribute]}}': {{ $pizza[$PA[0][$size] . $PA[1][$doughType] . $PA[2][$attribute]] }},
                    @endfor
                    @endfor
                    @endfor
                },
                @endforeach
            },
            @else
            @endif
            @endforeach
        };
    </script>
    @if(isset($_GET['pizzas']))
        <script>
            let orderPizzas = {{ count($_GET['pizzas']) }};
            let order = {
                'pizzas': [
                        @if(isset($_GET['pizzas']))
                        @foreach($_GET['pizzas'] as $pizza)
                    {
                        'id': {{ $pizza['id'] }},
                        'amount': {{ $pizza['amount'] }},
                        'size': {{ $pizza['size'] }},
                        'doughType': {{ $pizza['doughType'] }},
                        'price': {{ $pizza['price'] }},
                    },
                    @endforeach
                    @endif
                ],
            };
        </script>
    @else
        <script>
            let orderPizzas = 0;
            let order = {
                'pizzas': [],
            };
        </script>
    @endif
    <script type="text/javascript" src="{{ asset('assets/js/pizzeria_order.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/tel_type.js') }}"></script>
    <script>
        $('.tel-russia').mask('+7 999 999-99-99');

        $.fn.setCursorPosition = function (pos) {
            if ($(this).get(0).setSelectionRange) {
                $(this).get(0).setSelectionRange(pos, pos);
            } else if ($(this).get(0).createTextRange) {
                let range = $(this).get(0).createTextRange();
                range.collapse(true);
                range.moveEnd('character', pos);
                range.moveStart('character', pos);
                range.select();
            }
        };


        $('input[type="tel"]').click(function () {
            $(this).setCursorPosition(3);  // set position number
        });
    </script>
@endsection
