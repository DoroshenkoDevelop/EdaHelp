@extends('home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

            {{-- ЗАГОЛОВОК --}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">ЗАКУСКИ</p>
                </article>
                {{-- ЗАГОЛОВОК --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="{{ route('recipes') }}">
                        <img src="{{ asset('images/_71A5736.jpg') }}" class="img-fluid card-img"><p class="cuprum text-dark"><b>Мус из тигровых креветок и форели</b></p></a>
                    </a>
                </article>
                {{-- РЕЦЕПТ  --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}" class="img-fluid card-img"><p class="cuprum text-dark"><b>Тар-тар из говядины с французкой горчицей, трюфелем и огурцом.</b></p></a>
                    </a>
                    {{-- РЕЦЕПТ --}}

                </article>

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}" class="img-fluid card-img"><p class="cuprum text-dark"><b>Тар-тар из говядины с французкой горчицей, трюфелем и огурцом.</b></p></a>
                    </a>
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}"  class="img-fluid card-img"><p class="cuprum text-dark"><b>Мус из тигровых креветок и форели</b></p></a>
                    </a>
                </article>

                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}" class="img-fluid card-img"><p class="cuprum text-dark"><b>Мус из тигровых креветок и форели</b></p></a>
                    </a>
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}" class="img-fluid card-img"><p class="cuprum text-dark"><b>Тар-тар из говядины с французкой горчицей, трюфелем и огурцом.</b></p></a>
                    </a>
                    {{-- РЕЦЕПТ --}}

                </article>

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}" class="img-fluid card-img"><p class="cuprum text-dark"><b>Тар-тар из говядины с французкой горчицей, трюфелем и огурцом.</b></p></a>
                    </a>
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3">
                    <a class="text-decoration-none" href="">
                        <img src="{{ asset('images/_71A5736.jpg') }}"  class="img-fluid card-img"><p class="cuprum text-dark"><b>Мус из тигровых креветок и форели</b></p></a>
                    </a>
                </article>
                {{-- РЕЦЕПТ --}}

            </div>
        </main>


    </main>
    {{-- ЗАКУСКИ --}}

@endsection
