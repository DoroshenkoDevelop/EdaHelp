@extends('home.home')
@section('content')

 <main class="container-md border-right border-left border-dark">
 <section class="parallax-window section" data-parallax="scroll" data-image-src="{{ asset('/images/gordon.jpg') }}">
     {{--ЗАГОЛОВОК ШЕФ-ПОВОРА--}}
     <div class="p-5">

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

 </section>
 <section class="parallax-window section" data-parallax="scroll" data-image-src="{{ asset('/storage/public/kare.jpg') }}">
     <p class="cuprum text-white h3 mb-1">
         {{ $chef->name_chef}}
     </p>
 </section>
    <section class="white container-md mt-2 mb-5">
        <p class="cuprum text-dark text-right h3 mb-1">
            {{ $chef->name_recipe}}
        </p>
        <article class="row mt-3">
            <div class="col-3 p-0">
                {{-- ИНГРЕДИЕНТЫ --}}
                <ul class="list-group mt-2 h6 text-left">
                    <li>
                        <p class="font-italic cuprum">
                            {{ $chef->chef_ingredients_1 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum">
                            {{ $chef->chef_ingredients_2 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum ">
                            {{ $chef->chef_ingredients_3 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum ">
                            {{ $chef->chef_ingredients_4 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum">
                            {{ $chef->chef_ingredients_5 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum ">
                            {{ $chef->chef_ingredients_6 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum ">
                            {{ $chef->chef_ingredients_7 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum ">
                            {{ $chef->chef_ingredients_8 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum ">
                            {{ $chef->chef_ingredients_9 }}
                        </p>
                    </li>

                    <li>
                        <p class="font-italic cuprum">
                            {{ $chef->chef_ingredients_10 }}
                        </p>
                    </li>
                </ul>
                {{-- ИНГРЕДИЕНТЫ --}}
            </div>

            {{-- ИНГРЕДИЕНТЫ --}}
            <div class="col-3 p-0">
                <ul class="list-group mr-1 mt-2 text-right h6">
                    <li>
                        <p class="text-right font-italic cuprum">
                            {{ $chef->chef_ingredients_gr_1 }} {{ $chef->chef_ingredients_value_1 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic cuprum">
                            {{ $chef->chef_ingredients_gr_2 }} {{ $chef->chef_ingredients_value_2 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic cuprum">
                            {{ $chef->chef_ingredients_gr_3 }} {{ $chef->chef_ingredients_value_3 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic cuprum">
                            {{ $chef->chef_ingredients_gr_4 }} {{ $chef->chef_ingredients_value_4 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic cuprum">
                            {{ $chef->chef_ingredients_gr_5 }} {{ $chef->chef_ingredients_value_5 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic cuprum">
                            {{ $chef->chef_ingredients_gr_6 }} {{ $chef->chef_ingredients_value_6 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic cuprum">
                            {{ $chef->chef_ingredients_gr_7 }} {{ $chef->chef_ingredients_value_7 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic cuprum">
                            {{ $chef->chef_ingredients_gr_8 }} {{ $chef->chef_ingredients_value_8 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic cuprum">
                            {{ $chef->chef_ingredients_gr_9 }} {{ $chef->chef_ingredients_value_9 }}
                        </p>
                    </li>

                    <li>
                        <p class="text-right font-italic cuprum">
                            {{ $chef->chef_ingredients_gr_10 }} {{ $chef->chef_ingredients_value_10 }}
                        </p>
                    </li>
                </ul>
            </div>
            {{-- ИНГРЕДИЕНТЫ --}}

            <div class="col-6 pr-0">



                <p class="cuprum mb-1">
                    {{ $chef->chef_recipe_description_1 }}
                </p>



                <p class="cuprum mb-1">
                    {{ $chef->chef_recipe_description_2 }}
                </p>


                <p class="cuprum mb-1">
                    {{ $chef->chef_recipe_description_3 }}
                </p>



                <p class="cuprum mb-1">
                    {{ $chef->chef_recipe_description_4 }}
                </p>


                <p class="cuprum">
                    {{ $chef->chef_recipe_description_5 }}
                </p>

            </div>
        </article>
    </section>
 </main>
@endsection
