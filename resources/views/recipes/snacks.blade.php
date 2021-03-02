@extends('home.home')
@section('content')
<main class="container-sm p-0">

    {{-- ЗАГОЛОВОК --}}
    <article class="col m-5">
        <h2 class="text-center text-comfortaa h4">
            <b>{{ $list->name }}</b>
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
                     src="{{ asset($list->image) }}">
            </article>
            {{-- ФОТО--}}

        {{-- ИНГРЕДИЕНТЫ --}}
        <article class="row">
            <div class="col-8">
                <ul class="list-group">
                    <li>
                        <p class="font-italic h-100 cuprum ml-4 mt-2 mb-1">
                            {{ $list->ingredients_1 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic  h-100 cuprum ml-4 mb-1">
                            {{ $list->ingredients_2 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic  h-100 cuprum ml-4 mb-1">
                            {{ $list->ingredients_3 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic  h-100 cuprum ml-4 mb-1">
                            {{ $list->ingredients_4 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic  h-100 cuprum ml-4 mb-1">
                            {{ $list->ingredients_5 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic  h-100 cuprum ml-4 mb-1">
                            {{ $list->ingredients_6 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic  h-100 cuprum ml-4 mb-1">
                            {{ $list->ingredients_7 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic  h-100 cuprum ml-4 mb-1">
                            {{ $list->ingredients_8 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic  h-100 cuprum ml-4 mb-1">
                            {{ $list->ingredients_9 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic  h-100 cuprum ml-4 mb-1">
                            {{ $list->ingredients_10 }}
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-4">
                <ul class="list-group">
                    <li>
                        <p class="text-right font-italic  h-100 cuprum mr-4 mt-2 mb-1">
                            {{ $list->ingredients_gr_1 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                            {{ $list->ingredients_gr_2 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                            {{ $list->ingredients_gr_3 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                            {{ $list->ingredients_gr_4 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                            {{ $list->ingredients_gr_5 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                            {{ $list->ingredients_gr_6 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                            {{ $list->ingredients_gr_7 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                            {{ $list->ingredients_gr_8 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                            {{ $list->ingredients_gr_9 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                            {{ $list->ingredients_gr_10 }}
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



