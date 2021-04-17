@extends('home.home')
@section('content')
    <main class="container-sm">
        <div class="col-8 block-container border-right border-left border-dark">

{{-- ИНГРЕДИЕНТЫ --}}
<main class="row">
    <div class="col-12 p-4">

        {{-- ФОТО --}}
        <article class="">
            <img class="img-fluid"
                 alt="Responsive image"
                 width="100%"
                 src="{{ asset($article->articles_image_2) }}">
        </article>
        {{-- ФОТО--}}

        <ul class="list-group text-left h6 mt-2 ">
            <li>
                <p class="cuprum mb-3">
                    {{ $article->articles_text_1 }}
                </p>
            </li>

            <li>
                <p class=" cuprum mb-3">
                    {{ $article->articles_text_2 }}
                </p>
            </li>

            <li>
                {{-- ФОТО --}}
                    <img class="img-fluid mb-3"
                         alt="Responsive image"
                         width="100%"
                         src="{{ asset($article->articles_image_3) }}">
                {{-- ФОТО--}}
            </li>

            <li>
                <p class=" cuprum mb-3">
                    {{ $article->articles_text_3 }}
                </p>
            </li>

            <li>
                <p class=" cuprum mb-3">
                    {{ $article->articles_text_4 }}
                </p>
            </li>

            <li>
                    <p class=" cuprum mb-3">
                    {{ $article->articles_text_5 }} <a class="text-primary" href="{{ $article->product }}">
                        {{ $article->name_product}}
                    </a>
                </p>
            </li>

            <li>
                <p class=" cuprum mb-3">
                    {{ $article->articles_text_6 }}
                </p>
            </li>

            <li>
                <p class="cuprum mb-3">
                    <a class="text-primary" href="{{ $article->product }}">
                        {{ $article->name_product }}
                    </a>{{ $article->articles_text_7 }}
                </p>
            </li>

            <li>
                <p class="cuprum mb-1">
                    {{ $article->articles_text_8 }}
                </p>
            </li>
        </ul>

        {{-- ЛЕНДИНГ --}}
        <div class="row">
            <div class="col-13 ">
                {{-- ФОТО --}}
                <a href="{{ $article->product }}">
                <article class="">
                    <img class="img-fluid"
                         alt="Responsive image"
                         width="100%"
                         src="{{ asset($article->articles_image_4) }}">
                </article>
                {{-- ФОТО--}}
                </a>
                <div>
                    <p CLASS="cuprum ">
                        <b>
                        </b>
                    </p>
                </div>
            </div>
        </div>
        {{-- ЛЕНДИНГ --}}

    </div>

            </main>
        </div>
</main>
@endsection
