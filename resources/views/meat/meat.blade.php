@extends('home.home')
@section('content')
    <main class="container-sm">

        <div class="col-9 block-container">

        {{-- ЗАГОЛОВОК --}}
        <article class="col m-5">
            <h2 class="text-center text-comfortaa h4">
                <b>
                    {{ $meat->meats_name }}
                </b>
            </h2>
        </article>
        {{-- ЗАГОЛОВОК --}}




        {{-- КОНТЕНТ --}}
        <main class="border-right border-left border-dark">
            {{-- КОНТЕНТ --}}

            {{-- ФОТО --}}
            <article class="">
                <img class="img-fluid"
                     alt="Responsive image"
                     width="100%"
                     src="{{ asset($meat->meats_image) }}">
            </article>
            {{-- ФОТО--}}

            {{-- ИНГРЕДИЕНТЫ --}}
            <article class="row">
                <div class="col-8">
                    <ul class="list-group ml-1 h6 mt-2 text-left">
                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_1 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_2 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_3 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_4 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_5 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_6 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_7 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_8 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_9 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_10 }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul class="list-group list-group mr-1 mt-2 h6 text-right">
                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_gr_1 }} {{ $meat->meats_ingredients_value_1 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_gr_2 }} {{ $meat->meats_ingredients_value_2 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_gr_3 }} {{ $meat->meats_ingredients_value_3 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_gr_4 }} {{ $meat->meats_ingredients_value_4 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_gr_5 }} {{ $meat->meats_ingredients_value_5 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_gr_6 }} {{ $meat->meats_ingredients_value_6 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_gr_7 }} {{ $meat->meats_ingredients_value_7 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_gr_8 }} {{ $meat->meats_ingredients_value_8 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_gr_9 }} {{ $meat->meats_ingredients_value_9 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic cuprum mb-1">
                                {{ $meat->meats_ingredients_gr_10 }} {{ $meat->meats_ingredients_value_10 }}
                            </p>
                        </li>

                    </ul>
                </div>
            </article>
            {{-- ИНГРЕДИЕНТЫ --}}

            <br>

            {{-- ТЕХНОДОГИЯ ПРИГОТОВЛЕНИЯ --}}
            <article class="row">

                <div class="col m-4">
                    <p class="cuprum h4 mb-4">
                        <b>
                            ТЕХНОЛОГИЯ ПРИГОТОВЛЕНИЯ
                        </b>
                    </p>


                    <div class="round bg-dark text-white mb-3">
                        <p class="">
                            1
                        </p>
                    </div>

                    <p class="cuprum">
                        {{ $meat->meats_description_1 }}
                    </p>

                    <div class="round bg-dark text-white mb-3 mt-3">
                        <p class="">
                            2
                        </p>
                    </div>

                    <p class="cuprum">
                        {{ $meat->meats_description_2 }}
                    </p>
                    <div class="round bg-dark text-white mb-3 mt-3">
                        <p class="">
                            3
                        </p>
                    </div>

                    <p class="cuprum">
                        {{ $meat->meats_description_3 }}
                    </p>
                    <div class="round bg-dark text-white mb-3 mt-3">
                        <p class="">
                            4
                        </p>
                    </div>

                    <p class="cuprum">
                        {{ $meat->meats_description_4 }}
                    </p>
                </div>
            </article>
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
                        {{ $meat->meats_additionally    }}
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
        </div>
    </main>

@endsection
