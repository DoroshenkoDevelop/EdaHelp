@extends('home.home')
@section('content')
    <form action="{{ route('list_chefs')}}" method="POST">
      {{--  <input class="form-control" type="text" name="name  value="{{ $lists->name }}">--}}

        <main class="container-md border-right border-left border-dark">
            {{--ЗАГОЛОВОК ШЕФ-ПОВОРА--}}
            <div class="content-header container p-5">

                <div class="row">
                    <p class="cuprum h4 text-white">
                        {{ $chef->chef_description_3 }}
                    </p>

                    <p class="cuprum h3 text-white">
                        {{ $chef->chef_description_4 }}
                    </p>

                    <p class="cuprum h3 text-white">
                        {{ $chef->chef_description_5 }}
                    </p>
                </div>
            </div>
            {{--ЗАГОЛОВОК ШЕФ-ПОВОРА--}}

            {{--ФОТО ШЕФ-ПОВОРА--}}
            <div class="parallax img-fluid">

                <p class="cuprum h2 text-left text-white">
                        {{ $chef->name_chef }}
                </p>
            </div>
            {{--ФОТО ШЕФ-ПОВОРА--}}

            <div class="content-footer">
                <p class="cuprum h2 text-right text-black">
                        {{ $chef->name_recipe }}
                </p>

                {{-- ИНГРЕДИЕНТЫ --}}
                <article class="row">
                    <div class="col-8">
                        <ul class="list-group">
                            <li>
                                <p class="font-italic h-100 cuprum ml-4 mt-2 mb-1">
                                    {{ $chef->chef_ingredients_1 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    {{ $chef->chef_ingredients_2 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    {{ $chef->chef_ingredients_3 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    {{ $chef->chef_ingredients_4 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    {{ $chef->chef_ingredients_5 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    {{ $chef->chef_ingredients_6 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    {{ $chef->chef_ingredients_7 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    {{ $chef->chef_ingredients_8 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    {{ $chef->chef_ingredients_9 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    {{ $chef->chef_ingredients_10 }}
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4">
                        <ul class="list-group">
                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mt-2 mb-1">
                                    {{ $chef->chef_ingredients_gr_1 }} {{ $chef->chef_ingredients_value_1 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    {{ $chef->chef_ingredients_gr_2 }} {{ $chef->chef_ingredients_value_2 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    {{ $chef->chef_ingredients_gr_3 }} {{ $chef->chef_ingredients_value_3 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    {{ $chef->chef_ingredients_gr_4 }} {{ $chef->chef_ingredients_value_4 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    {{ $chef->chef_ingredients_gr_5 }} {{ $chef->chef_ingredients_value_5 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    {{ $chef->chef_ingredients_gr_6 }} {{ $chef->chef_ingredients_value_6 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    {{ $chef->chef_ingredients_gr_7 }} {{ $chef->chef_ingredients_value_7 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    {{ $chef->chef_ingredients_gr_8 }} {{ $chef->chef_ingredients_value_8 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    {{ $chef->chef_ingredients_gr_9 }} {{ $chef->chef_ingredients_value_9 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    {{ $chef->chef_ingredients_gr_10 }} {{ $chef->chef_ingredients_value_10 }}
                                </p>
                            </li>
                        </ul>
                    </div>

                </article>
                {{-- ИНГРЕДИЕНТЫ --}}

            </div>

        </main>
    </form>




    {{--<main class="container border-right border-left border-dark ">


        --}}{{--ОПИСАНИЕ ШЕФ-ПОВОРА--}}{{--
      --}}{{--  <div class="row-2 mt-5">
            <p class="cuprum h4">
                Кулинарный стаж более 10 лет.
                Первые профессиональные уроки японской кухни получил в Киеве, Украина.</p>
            <p class="cuprum h4">Ресторан Мураками стал его родным домой и уже через некоторое время смог достичь высоких результатов.</p>
            <p class="cuprum h4">После вернулся в Беларуси и участвовал в различных Минских проектов.</p>
            <p class="cuprum h4">Открывал ресторан, доставку и точки take away.
                На данный момент запускает в продажи свою продукцию под брендом FIT CHEF, которая специализируется исключительно на здоровой еде.</p>
        </div>--}}{{--
        --}}{{--ОПИСАНИЕ ШЕФ-ПОВОРА--}}{{--

        --}}{{--НАЗВАНИЕ РЕЦЕПТА--}}{{--
       --}}{{-- <div class="row-2">
                <div class="col m-5">
                    <p class="h3 text-center text-comfortaa"><b>ПАШТЕТ МОРКОВНЫЙ</b></p>
                </div>
            </div>--}}{{--
                --}}{{--НАЗВАНИЕ РЕЦЕПТА--}}{{--

                --}}{{--ФОТО РЕЦЕПТА--}}{{--
       --}}{{-- <div class="row-2">
                <div class="col-7">
                    <img class="img-fluid" alt="Responsive image"  src="{{ asset('images/IMG_0807.jpg') }}">
                </div>
            </div>--}}{{--
                --}}{{--ФОТО РЕЦЕПТА--}}{{--


        --}}{{--РЕЦЕПТ--}}{{--
       --}}{{-- <div class="row">
                        <div class="col-3">
                            <ul class="list-group">

                                <li class="list-group-item"><p class="font-italic h5 text-inter">Отварной нут</p></li>

                                <li class="list-group-item"><p class="font-italic h5 text-inter">Паста Тахини</li>

                                <li class="list-group-item"><p class="font-italic h5 text-inter">Винаградное масло</p></li>

                                <li class="list-group-item"><p class="font-italic h5 text-inter">Лимонный сок</p></li>

                                <li class="list-group-item"><p class="font-italic h5 text-inter">Чеснок</p></li>

                                <li class="list-group-item"><p class="font-italic h5 text-inter">Морская соль</p></li>

                                <li class="list-group-item"><p class="font-italic h5 text-inter">Перец молотый</p></li>

                                <li class="list-group-item"><p class="font-italic h5 text-inter">Зира</p></li>

                                <li class="list-group-item"><p class="font-italic h5 text-inter">Паприка сладкая</p></li>

                                <li class="list-group-item"><p class="font-italic h5 text-inter">Вода</p></li>

                                <li class="list-group-item"><p class="font-italic h5 text-inter">Морковь</p></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <ul class="list-group">

                                <li class="list-group-item"><p class="text-right font-italic h5 text-inter">100 г</p></li>

                                <li class="list-group-item"><p class="text-right font-italic h5 text-inter">1 ст.ложка</p></li>

                                <li class="list-group-item"><p class="text-right font-italic h5 text-inter">1 ст.ложка</p></li>

                                <li class="list-group-item"><p class="text-right font-italic h5 text-inter">1 ч.ложка</p></li>

                                <li class="list-group-item"><p class="text-right font-italic h5 text-inter">1 зубчик</p></li>

                                <li class="list-group-item"><p class="text-right font-italic h5 text-inter">по вкусу</p></li>

                                <li class="list-group-item"><p class="text-right font-italic h5 text-inter">щепотка</p></li>

                                <li class="list-group-item"><p class="text-right font-italic h5 text-inter">щепотка</p></li>

                                <li class="list-group-item"><p class="text-right font-italic h5 text-inter">щепотка</p></li>

                                <li class="list-group-item"><p class="text-right font-italic h5 text-inter">25 г</p></li>

                                <li class="list-group-item"><p class="text-right font-italic h5 text-inter">70 г</p></li>
                            </ul>
                        </div>
        </div>--}}{{--
        --}}{{--РЕЦЕПТ--}}{{--
    </main>--}}



@endsection
