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

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-3">
                @foreach($populars as $popular)
                    <a class="text-decoration-none"
                       {{ $popular->id }}
                       href="{{ route('popular_recipe',['id'=>$popular->id])}}">
                        <img src="{{ asset($popular->snacks_image) }}"
                             class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                {{ $popular->snacks_name}}
                            </b>
                        </p>
                    </a>
                @endforeach
            </article>
            {{-- РЕЦЕПТ --}}

            {{-- РЕЦЕПТ --}}
          {{--  <article class="col-sm-12 col-md-3">
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
            </article>--}}
            {{-- РЕЦЕПТ --}}
            {{--ПОПУЛЯРНЫЕ РЕЦЕПТЫ--}}
        </div>
    </main>
</main>

@endsection
