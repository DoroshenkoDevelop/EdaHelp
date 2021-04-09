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

            <div class="content-footer ">
                <p class="cuprum h2 text-right text-black mt-3">
                        {{ $chef->name_recipe }}
                </p>

                {{-- ИНГРЕДИЕНТЫ --}}
                <article class="row m-3 border-dark border-left border-right border-bottom border-top pt-3">

                    <div class="col-3">
                        {{-- ИНГРЕДИЕНТЫ --}}
                        <ul class="list-group">
                            <li>
                                <p class="font-italic h-100 cuprum ml-4 mt-2 mb-4">
                                    {{ $chef->chef_ingredients_1 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-4">
                                    {{ $chef->chef_ingredients_2 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-4">
                                    {{ $chef->chef_ingredients_3 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-4">
                                    {{ $chef->chef_ingredients_4 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-4">
                                    {{ $chef->chef_ingredients_5 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-4">
                                    {{ $chef->chef_ingredients_6 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-4">
                                    {{ $chef->chef_ingredients_7 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-4">
                                    {{ $chef->chef_ingredients_8 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-4">
                                    {{ $chef->chef_ingredients_9 }}
                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-4">
                                    {{ $chef->chef_ingredients_10 }}
                                </p>
                            </li>
                        </ul>
                        {{-- ИНГРЕДИЕНТЫ --}}
                    </div>

                    {{-- ИНГРЕДИЕНТЫ --}}
                    <div class="col-3">
                        <ul class="list-group">
                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mt-2 mb-4">
                                    {{ $chef->chef_ingredients_gr_1 }} {{ $chef->chef_ingredients_value_1 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-4">
                                    {{ $chef->chef_ingredients_gr_2 }} {{ $chef->chef_ingredients_value_2 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-4">
                                    {{ $chef->chef_ingredients_gr_3 }} {{ $chef->chef_ingredients_value_3 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-4">
                                    {{ $chef->chef_ingredients_gr_4 }} {{ $chef->chef_ingredients_value_4 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-4">
                                    {{ $chef->chef_ingredients_gr_5 }} {{ $chef->chef_ingredients_value_5 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-4">
                                    {{ $chef->chef_ingredients_gr_6 }} {{ $chef->chef_ingredients_value_6 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-4">
                                    {{ $chef->chef_ingredients_gr_7 }} {{ $chef->chef_ingredients_value_7 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-4">
                                    {{ $chef->chef_ingredients_gr_8 }} {{ $chef->chef_ingredients_value_8 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-4">
                                    {{ $chef->chef_ingredients_gr_9 }} {{ $chef->chef_ingredients_value_9 }}
                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-4">
                                    {{ $chef->chef_ingredients_gr_10 }} {{ $chef->chef_ingredients_value_10 }}
                                </p>
                            </li>
                        </ul>
                    </div>
                    {{-- ИНГРЕДИЕНТЫ --}}

                    <div class="col-6 mb-5">

                                <div class="round bg-dark text-white">
                                    <p class="">
                                        1
                                    </p>
                                </div>

                                <p class="cuprum mb-4">
                                    {{ $chef->chef_recipe_description_1 }}
                                </p>

                                <div class="round bg-dark text-white">
                                    <p class="">
                                        2
                                    </p>
                                </div>

                                <p class="cuprum mb-4">
                                    {{ $chef->chef_recipe_description_2 }}
                                </p>
                                <div class="round bg-dark text-white">
                                    <p class="">
                                        3
                                    </p>
                                </div>

                                <p class="cuprum mb-4">
                                    {{ $chef->chef_recipe_description_3 }}
                                </p>

                                <div class="round bg-dark text-white">
                                    <p class="">
                                        4
                                    </p>
                                </div>

                                <p class="cuprum mb-4">
                                    {{ $chef->chef_recipe_description_4 }}
                                </p>

                                <div class="round bg-dark text-white">
                                    <p class="">
                                        5
                                    </p>
                                </div>

                                <p class="cuprum">
                                    {{ $chef->chef_recipe_description_5 }}
                                </p>

                            </div>
                        </article>
                        {{-- ТЕХНОДОГИЯ ПРИГОТОВЛЕНИЯ --}}





            </div>

        </main>
    </form>



@endsection
