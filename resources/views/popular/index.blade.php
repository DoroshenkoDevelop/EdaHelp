@extends('home.home')
@section('content')
{{--ПОПУЛЯРНЫЕ РЕЦЕПТЫ--}}
<main class="container-sm">
    <main class="container-sm">

        {{-- ЗАГОЛОВОК --}}
        <div class="row">
            <article class="">
                <p class="cuprum h2 mt-5 mb-5">
                    ПОПУЛЯРНЫЕ РЕЦЕПТЫ
                </p>
            </article>
            {{-- ЗАГОЛОВОК --}}

            <article class="col-sm-12 col-md-3">
                @foreach($populars as $popular)
                    <a class="text-decoration-none"
                       {{ $popular->id }}
                       href="{{ route('popular',['id'=>$popular->id])}}">
                        <img src="{{ asset($popular->index_image) }}" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                {{ $popular->index_name }}
                            </b>
                        </p>
                    </a>
                @endforeach
            </article>


    </main>
</main>

@endsection
