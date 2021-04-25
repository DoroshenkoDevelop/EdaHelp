@extends('home.home')
@section('content')
<main class="container-sm">

    <div class="col-9 block-container">

    {{-- ЗАГОЛОВОК --}}
    <article class="col m-5">
        <h2 class="text-center text-comfortaa h4">
            <b>{{ $snack->snacks_name }}</b>
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
                     src="{{ asset($snack->snacks_image) }}">
            </article>
            {{-- ФОТО--}}

        {{-- ИНГРЕДИЕНТЫ --}}
        <article class="row">
            <div class="col-8">
                <ul class="list-group ml-1 h6 mt-2 text-left">
                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_1 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_2 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_3 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_4 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_5 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_6 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_7 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_8 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_9 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_10 }}
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-4">
                <ul class="list-group list-group mr-1 mt-2 h6 text-right">
                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_gr_1 }} {{ $snack->snacks_ingredients_value_1 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_gr_2 }} {{ $snack->snacks_ingredients_value_2 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_gr_3 }} {{ $snack->snacks_ingredients_value_3 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_gr_4 }} {{ $snack->snacks_ingredients_value_4 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_gr_5 }} {{ $snack->snacks_ingredients_value_5 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_gr_6 }} {{ $snack->snacks_ingredients_value_6 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_gr_7 }} {{ $snack->snacks_ingredients_value_7 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_gr_8 }} {{ $snack->snacks_ingredients_value_8 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_gr_9 }} {{ $snack->snacks_ingredients_value_9 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum mb-1">
                            {{ $snack->snacks_ingredients_gr_10 }} {{ $snack->snacks_ingredients_value_10 }}
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
                    {{ $snack->snacks_description_1 }}
                </p>

                <div class="round bg-dark text-white mb-3 mt-3">
                    <p class="">
                        2
                    </p>
                </div>

                <p class="cuprum">
                    {{ $snack->snacks_description_2 }}
                </p>
                <div class="round bg-dark text-white mb-3 mt-3">
                    <p class="">
                        3
                    </p>
                </div>

                <p class="cuprum">
                    {{ $snack->snacks_description_3 }}
                </p>
                <div class="round bg-dark text-white mb-3 mt-3">
                    <p class="">
                        4
                    </p>
                </div>

                <p class="cuprum">
                    {{ $snack->snacks_description_4 }}
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
                    {{ $snack->snacks_additionally    }}
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



    <form action="#" class="form form_margin">
        <div class="form_item">
            <div class="form_lable">
                Простой
            </div>
            <div class="simple-rating">
                <div class="simple-rating_items">
                    <input id="simple-rating_5" type="radio" class="simple-rating_item" name="simple-rating" value="5">
                    <lable for="simple-rating_5" class="simple-rating_label"></lable>
                    <input id="simple-rating_4" type="radio" class="simple-rating_item" name="simple-rating" value="4">
                    <lable for="simple-rating_4" class="simple-rating_label"></lable>
                    <input id="simple-rating_3" type="radio" class="simple-rating_item" name="simple-rating" value="3">
                    <lable for="simple-rating_3" class="simple-rating_label"></lable>
                    <input id="simple-rating_2" type="radio" class="simple-rating_item" name="simple-rating" value="2">
                    <lable for="simple-rating_2" class="simple-rating_label"></lable>
                    <input id="simple-rating_1" type="radio" class="simple-rating_item" name="simple-rating" value="1">
                    <lable for="simple-rating_1" class="simple-rating_label"></lable>
                </div>
            </div>
        </div>
    </form>








    </main>
@endsection



