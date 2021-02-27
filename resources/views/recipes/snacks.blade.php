@extends('home.home')
@section('content')
<main class="container-sm p-0">

    {{-- ЗАГОЛОВОК --}}
    <article class="col m-5">
        <h2 class="text-center text-comfortaa h4">
            <b>{{ $list->name }}МУС ИЗ ТИГРОВЫХ КРИВЕТОК И ФОРЕЛИ</b>
        </h2>
    </article>
    {{-- ЗАГОЛОВОК --}}




    {{-- КОНТЕНТ --}}
    <main class="block-container border-right border-left border-dark">
        {{-- КОНТЕНТ --}}

            {{-- ФОТО --}}
            <article class="">
                <img class="img-fluid"
                     alt="Responsive image"
                     width="100%"
                     src="{{asset('images/recipe_1.jpg')}}">
            </article>
            {{-- ФОТО--}}

        {{-- ИНГРЕДИЕНТЫ --}}
        <article class="row">
            <div class="col-8">
                <ul class="list-group">
                    <li class="list-group-item">
                        <p class="font-italic h-100 cuprum">
                            Лосось
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="font-italic  h-100 cuprum">
                            Лосось копченый
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="font-italic  h-100 cuprum">
                            Креветки тигровые
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="font-italic  h-100 cuprum">
                            Сливки
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="font-italic  h-100 cuprum">
                            Соль
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <p class="text-right font-italic  h-100 cuprum">
                            50 г
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="text-right font-italic  h-100 cuprum">
                            30 г
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="text-right font-italic  h-100 cuprum">
                            30 г
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="text-right font-italic  h-100 cuprum">
                            40 мл
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="text-right font-italic  h-100 cuprum">
                            По вкусу
                        </p>
                    </li>
                </ul>
            </div>
        </article>
        {{-- ИНГРЕДИЕНТЫ --}}

        <br>

        {{-- ТЕХНОДОГИЯ ПРИГОТОВЛЕНИЯ --}}
        <div class="row">
            <div class="col m-4">
                <p class="cuprum h4 mb-4">
                    <b>
                        ТЕХНОЛОГИЯ ПРИГОТОВЛЕНИЯ
                    </b>
                </p>

                <div class="round bg-dark text-white mb-3">
                    <p class="lead">1</p>
                </div>

                <p class="cuprum">
                    Обжариваем вкуснейшие креветки и измельчапем их.
                </p>

                <div class="round bg-dark text-white mb-3">
                    <p class="lead">
                        2
                    </p>
                </div>

                <p class="cuprum">
                    Измельчаем лосось двух видов.
                </p>
                <div class="round bg-dark text-white mb-3">
                    <p class="lead">
                        3
                    </p>
                </div>

                <p class="cuprum">
                    Смешиваем этот тандем со сливками, добавляем соль.
                </p>
                <div class="round bg-dark text-white mb-3">
                    <p class="lead">
                        4
                    </p>
                </div>

                <p class="cuprum">
                    Пробиваем блендером до однородной массы.
                </p>
            </div>
        </div>
        {{-- ТЕХНОДОГИЯ ПРИГОТОВЛЕНИЯ --}}

        {{-- ДОПОЛНИТЕЛЬНО --}}
        <div class="row">
            <div class="col m-4 border-dark border-left border-right border-bottom border-top pt-3">
                <p class="cuprum h4 ">
                    <b>
                        ДОПОЛНИТЕЛЬНО
                    </b>
                </p>

                <div>
                    <p class="cuprum">
                        Прекрасным дополнением к блюду будет нарезанный соломкой салат состоящий из манго,
                        болгарского перца,
                        красного лука,
                        авокадо и салатного листа.
                        Заправить эту смесь можно оливковым маслом,
                        солью и перцем.
                        Приготовленый мус надо употреблять намазаным на ожаренный хлеб натертый чесночком.
                    <p CLASS="cuprum ">
                        <b>
                            Вкусное блюдо готово, ПРИЯТНОГО АППЕТИТА!!!
                        </b>
                    </p>
            </div>
        </div>
    </div>
        {{-- ДОПОЛНИТЕЛЬНО --}}
        </main>
    </main>

@endsection



