@extends('home.home')
@section('content')
    <main class="container-sm p-0">

        {{-- ЗАГОЛОВОК --}}
        <article class="col m-5">
            <h2 class="text-center text-comfortaa h4">
                <b>
                    {{ $soup->cream_soups_name }}
                </b>
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
                     src="{{ asset($soup->cream_soups_image) }}">
            </article>
            {{-- ФОТО--}}

            {{-- ИНГРЕДИЕНТЫ --}}
            <article class="row">
                <div class="col-8">
                    <ul class="list-group">
                        <li>
                            <p class="font-italic h-100 cuprum ml-4 mt-2 mb-1">
                                {{ $soup->cream_soups_ingredients_1 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                {{ $soup->cream_soups_ingredients_2 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                {{ $soup->cream_soups_ingredients_3 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                {{ $soup->cream_soups_ingredients_4 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                {{ $soup->cream_soups_ingredients_5 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                {{ $soup->cream_soups_ingredients_6 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                {{ $soup->cream_soups_ingredients_7 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                {{ $soup->cream_soups_ingredients_8 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                {{ $soup->cream_soups_ingredients_9 }}
                            </p>
                        </li>

                        <li>
                            <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                {{ $soup->cream_soups_ingredients_10 }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul class="list-group">
                        <li>
                            <p class="text-right font-italic  h-100 cuprum mr-4 mt-2 mb-1">
                                {{ $soup->cream_soups_ingredients_gr_1 }} {{ $soup->cream_soups_ingredients_value_1 }}
                            </p>
                        </li>

                        <li>
                            <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                {{ $soup->cream_soups_ingredients_gr_2 }} {{ $soup->cream_soups_ingredients_value_2 }}
                            </p>
                        </li>

                        <li>
                            <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                {{ $soup->cream_soups_ingredients_gr_3 }} {{ $soup->cream_soups_ingredients_value_3 }}
                            </p>
                        </li>

                        <li>
                            <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                {{ $soup->cream_soups_ingredients_gr_4 }} {{ $soup->cream_soups_ingredients_value_4 }}
                            </p>
                        </li>

                        <li>
                            <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                {{ $soup->cream_soups_ingredients_gr_5 }} {{ $soup->cream_soups_ingredients_value_5 }}
                            </p>
                        </li>

                        <li>
                            <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                {{ $soup->cream_soups_ingredients_gr_6 }} {{ $soup->cream_soups_ingredients_value_6 }}
                            </p>
                        </li>

                        <li>
                            <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                {{ $soup->cream_soups_ingredients_gr_7 }} {{ $soup->cream_soups_ingredients_value_7 }}
                            </p>
                        </li>

                        <li>
                            <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                {{ $soup->cream_soups_ingredients_gr_8 }} {{ $soup->cream_soups_ingredients_value_8 }}
                            </p>
                        </li>

                        <li>
                            <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                {{ $soup->cream_soups_ingredients_gr_9 }} {{ $soup->cream_soups_ingredients_value_9 }}
                            </p>
                        </li>

                        <li>
                            <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                {{ $soup->cream_soups_ingredients_gr_10 }} {{ $soup->cream_soups_ingredients_value_10 }}
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
                        {{ $soup->cream_soups_description_1 }}
                    </p>

                    <div class="round bg-dark text-white mb-3 mt-3">
                        <p class="">
                            2
                        </p>
                    </div>

                    <p class="cuprum">
                        {{ $soup->cream_soups_description_2 }}
                    </p>
                    <div class="round bg-dark text-white mb-3 mt-3">
                        <p class="">
                            3
                        </p>
                    </div>

                    <p class="cuprum">
                        {{ $soup->cream_soups_description_3 }}
                    </p>
                    <div class="round bg-dark text-white mb-3 mt-3">
                        <p class="">
                            4
                        </p>
                    </div>

                    <p class="cuprum">
                        {{ $soup->cream_soups_description_4 }}
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
                        {{ $soup->cream_soups_additionally    }}
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
