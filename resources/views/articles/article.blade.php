@extends('home.home')
@section('content')
    <main class="container-sm">
        <div class="col-7 block-container border-right border-left border-dark">

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

        <ul class="list-group text-left h5 mt-2 ">
            <li>
                <p class="font-italic cuprum mb-3">
                    {{ $article->articles_text_1 }}
                </p>
            </li>

            <li>
                <p class="font-italic cuprum mb-3">
                    {{ $article->articles_text_2 }}
                </p>
            </li>

            <li>
                {{-- ФОТО --}}
                    <img class="img-fluid"
                         alt="Responsive image"
                         width="100%"
                         src="{{ asset($article->articles_image_3) }}">
                {{-- ФОТО--}}
            </li>

            <li>
                <p class="font-italic cuprum mb-3">
                    {{ $article->articles_text_3 }}
                </p>
            </li>

            <li>
                <p class="font-italic cuprum mb-3">
                    {{ $article->articles_text_4 }}
                </p>
            </li>

            <li>
                <p class="font-italic cuprum mb-3">
                    {{ $article->articles_text_5 }} <a href="https://clickmyt.com/BpZs">
                        «ЗДОРОВ».
                    </a>
                </p>
            </li>

            <li>
                <p class="font-italic cuprum mb-3">
                    {{ $article->articles_text_6 }}
                </p>
            </li>

            <li>
                <p class="font-italic cuprum mb-3">
                    <a href="https://clickmyt.com/BpZs">
                        «ЗДОРОВ»
                    </a>{{ $article->articles_text_7 }}
                </p>
            </li>

            <li>
                <p class="font-italic cuprum mb-5">
                    {{ $article->articles_text_8 }}
                </p>
            </li>
        </ul>
    </div>
    <a class="btn btn-success block-container" href="https://clickmyt.com/BpZs">
        ЗАКАЗАТЬ
    </a>
            </main>
        </div>
</main>
@endsection
