@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

            {{-- ЗАГОЛОВОК --}}
            <div class="row">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        ЗАКУСКИ
                    </p>
                </article>
                {{-- ЗАГОЛОВОК --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ЗАКУСКИ
                        </p>
                    </article>
                    @foreach($coldsnacks as $coldsnack)
                        <a class="text-decoration-none"
                           {{ $coldsnack->id }}
                           href="{{ route('snack',['id'=>$coldsnack->id])}}">
                            <img src="{{ asset($coldsnack->snacks_image) }}"
                                 class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $coldsnack->snacks_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            СТРИТ ФУД
                        </p>
                    </article>
                    @foreach($hotsnacks as $hotsnack)
                        <a class="text-decoration-none"
                           {{ $hotsnack->id }}
                           href="{{ route('snack',['id'=>$hotsnack->id])}}">
                            <img src="{{ asset($hotsnack->snacks_image) }}"
                                 class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $hotsnack->snacks_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ФИНГЕР ФУД
                        </p>
                    </article>
                    @foreach($bruschettas as $bruschetta)
                    <a class="text-decoration-none"
                       {{ $bruschetta->id }}
                       href="{{ route('snack',['id'=>$bruschetta->id])}}">
                        <img src="{{ asset($bruschetta->snacks_image) }}"
                             class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                               {{ $bruschetta->snacks_name}}
                            </b>
                        </p>
                    </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            МИКС
                        </p>
                    </article>
                    @foreach($mixs as $mix)
                        <a class="text-decoration-none"
                           {{ $mix->id }}
                           href="{{ route('snack',['id'=>$mix->id])}}">
                            <img src="{{ asset($mix->snacks_image) }}"
                                 class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $mix->snacks_name}}
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
