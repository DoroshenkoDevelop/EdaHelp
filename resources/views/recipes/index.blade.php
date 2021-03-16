@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

            {{-- ЗАГОЛОВОК --}}
            <div class="row">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        ЗАКУСКИ
                    </p>
                </article>
                {{-- ЗАГОЛОВОК --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-3">
                    @foreach($snack3 as $snack)
                        <a class="text-decoration-none"
                           {{ $snack->id }}
                           href="{{ route('snack',['id'=>$snack->id])}}">
                            <img src="{{ asset($snack->snacks_image) }}"
                                 class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $snack->snacks_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-3">
                    @foreach($snack4 as $snack)
                        <a class="text-decoration-none"
                           {{ $snack->id }}
                           href="{{ route('snack',['id'=>$snack->id])}}">
                            <img src="{{ asset($snack->snacks_image) }}"
                                 class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $snack->snacks_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-3">
                    @foreach($recipes as $recipe)
                    <a class="text-decoration-none"
                       {{ $recipe->id }}
                       href="{{ route('snack',['id'=>$recipe->id])}}">
                        <img src="{{ asset($recipe->snacks_image) }}"
                             class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                               {{ $recipe->snacks_name}}
                            </b>
                        </p>
                    </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-3">
                    @foreach($tartars as $tartar)
                        <a class="text-decoration-none"
                           {{ $tartar->id }}
                           href="{{ route('snack',['id'=>$tartar->id])}}">
                            <img src="{{ asset($tartar->snacks_image) }}"
                                 class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $tartar->snacks_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}






















               {{-- <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}" class="img-fluid card-img"><p class="cuprum text-dark"><b>Тар-тар из говядины с французкой горчицей, трюфелем и огурцом.</b></p></a>
                    </a>
                    --}}{{-- РЕЦЕПТ --}}{{--

                </article>

                --}}{{-- РЕЦЕПТ --}}{{--
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}" class="img-fluid card-img"><p class="cuprum text-dark"><b>Тар-тар из говядины с французкой горчицей, трюфелем и огурцом.</b></p></a>
                    </a>
                </article>
                --}}{{-- РЕЦЕПТ --}}{{--

                --}}{{-- РЕЦЕПТ --}}{{--
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}"  class="img-fluid card-img"><p class="cuprum text-dark"><b>Мус из тигровых креветок и форели</b></p></a>
                    </a>
                </article>

                --}}{{-- РЕЦЕПТ --}}{{--

                --}}{{-- РЕЦЕПТ --}}{{--
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}" class="img-fluid card-img"><p class="cuprum text-dark"><b>Мус из тигровых креветок и форели</b></p></a>
                    </a>
                </article>
                --}}{{-- РЕЦЕПТ --}}{{--

                --}}{{-- РЕЦЕПТ --}}{{--
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}" class="img-fluid card-img"><p class="cuprum text-dark"><b>Тар-тар из говядины с французкой горчицей, трюфелем и огурцом.</b></p></a>
                    </a>
                    --}}{{-- РЕЦЕПТ --}}{{--

                </article>

                --}}{{-- РЕЦЕПТ --}}{{--
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}" class="img-fluid card-img"><p class="cuprum text-dark"><b>Тар-тар из говядины с французкой горчицей, трюфелем и огурцом.</b></p></a>
                    </a>
                </article>
                --}}{{-- РЕЦЕПТ --}}{{--

                --}}{{-- РЕЦЕПТ --}}{{--
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}"  class="img-fluid card-img"><p class="cuprum text-dark"><b>Мус из тигровых креветок и форели</b></p></a>
                    </a>
                </article>--}}
                {{-- РЕЦЕПТ --}}

            </div>
        </main>


    </main>
    {{-- ЗАКУСКИ --}}

@endsection
