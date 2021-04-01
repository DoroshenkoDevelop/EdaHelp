@extends('home.home')
@section('content')

    <main class="container-sm border-right border-left border-dark">

      {{--  ОПИСАНИЕ--}}
        <main class="text-center container-sm">
            <h1 class="display-2 mt-5 text-comfortaa mb-4">
                Мир кулинарного искусства
            </h1>
            <p class="cuprum h4 mb-4">
                Портал не только с классическими, но и с самыми интересными и оригинальными рецептами от шеф-поваров.
            </p>
            <p class="cuprum h5 mt-4">
                На нашем сайте вы найдете огромное количество фоторецептов с пошаговым и детальным описанием процесса приготовления.
            <p/>
        </main>
      {{--  ОПИСАНИЕ--}}


       {{--ПОПУЛЯРНЫЕ РЕЦЕПТЫ--}}
        <section class="row">
        <article class="">
            <p class="cuprum h2  mt-5 mb-2">
                ПОПУЛЯРНЫЕ РЕЦЕПТЫ
            </p>
        </article>
            {{--ПОПУЛЯРНЫЕ РЕЦЕПТЫ--}}

        {{--РЕЦЕПТ--}}
        <article class="col-sm-12 col-md-3">
            @foreach($populars1 as $populars)
                <a class="text-decoration-none"
                   {{ $populars->id }}
                   href="{{ route('recipe',['id'=>$populars->id])}}">
                    <img src="{{ asset($populars->index_image) }}" class="img-fluid card-img">
                    <p class="cuprum text-dark">
                        <b>
                            {{ $populars->index_name }}
                        </b>
                    </p>
                </a>
            @endforeach
        </article>
         {{--РЕЦЕПТ--}}

          {{--РЕЦЕПТ--}}
            <article class="col-sm-12 col-md-3">
                @foreach($populars2 as $populars)
                    <a class="text-decoration-none"
                       {{ $populars->id }}
                       href="{{ route('recipe',['id'=>$populars->id])}}">
                        <img src="{{ asset($populars->index_image) }}" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                {{ $populars->index_name }}
                            </b>
                        </p>
                    </a>
                @endforeach
            </article>
          {{--   РЕЦЕПТ --}}

            {{--РЕЦЕПТ--}}
            <article class="col-sm-12 col-md-3">
                @foreach($populars3 as $populars)
                    <a class="text-decoration-none"
                       {{ $populars->id }}
                       href="{{ route('recipe',['id'=>$populars->id])}}">
                        <img src="{{ asset($populars->index_image) }}" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                {{ $populars->index_name }}
                            </b>
                        </p>
                    </a>
                @endforeach
            </article>
            {{-- РЕЦЕПТ --}}

            {{--РЕЦЕПТ--}}
            <article class="col-sm-12 col-md-3">
                @foreach($populars4 as $populars)
                    <a class="text-decoration-none"
                       {{ $populars->id }}
                       href="{{ route('recipe',['id'=>$populars->id])}}">
                        <img src="{{ asset($populars->index_image) }}" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                {{ $populars->index_name }}
                            </b>
                        </p>
                    </a>
                @endforeach
            </article>
            {{-- РЕЦЕПТ --}}

        </section>
        {{--ПОПУЛЯРНЫЕ РЕЦЕПТЫ--}}

        {{--НОВЫЕ РЕЦЕПТЫ--}}
        <section class="row mb-5">
            <article class="">
                <p class="cuprum h2  mt-5 mb-2">
                    НОВЫЕ РЕЦЕПТЫ
                </p>
            </article>

            {{--РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-3">
                @foreach($new1 as $new)
                    <a class="text-decoration-none"
                       {{ $new->id }}
                       href="{{ route('recipe',['id'=>$new->id])}}">
                        <img src="{{ asset($new->index_image) }}" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                {{ $new->index_name }}
                            </b>
                        </p>
                    </a>
                @endforeach
            </article>
            {{--РЕЦЕПТ --}}

            {{--РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-3">
                @foreach($new2 as $new)
                    <a class="text-decoration-none"
                       {{ $new->id }}
                       href="{{ route('recipe',['id'=>$new->id])}}">
                        <img src="{{ asset($new->index_image) }}" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                {{ $new->index_name }}
                            </b>
                        </p>
                    </a>
                @endforeach
            </article>
            {{-- РЕЦЕПТ --}}

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-3">
                @foreach($new3 as $new)
                    <a class="text-decoration-none"
                       {{ $new->id }}
                       href="{{ route('recipe',['id'=>$new->id])}}">
                        <img src="{{ asset($new->index_image) }}" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                {{ $new->index_name }}
                            </b>
                        </p>
                    </a>
                @endforeach
            </article>
            {{--РЕЦЕПТ --}}

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-3">
                @foreach($new4 as $new)
                    <a class="text-decoration-none"
                       {{ $new->id }}
                       href="{{ route('recipe',['id'=>$new->id])}}">
                        <img src="{{ asset($new->index_image) }}" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                {{ $new->index_name }}
                            </b>
                        </p>
                    </a>
                @endforeach
            </article>
            {{--РЕЦЕПТ --}}
        </section>
        {{--НОВЫЕ РЕЦЕПТЫ--}}

       {{-- ТОП ШЕФ РЕЦЕПТОВ--}}
        <section class="mt-3">
            <div class="row">
                <div class="col">
                    <p class="cuprum h2 ">
                        ТОП ШЕФ РЕЦЕПТОВ
                    </p>
                    <div class="carousel slide" id="mySlider" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <a href="">
                                <img src="{{ asset('/images/oliver.jpg') }}"
                                     class="img-fluid d-block w-100">
                                </a>
                            </div>

                            <div class="carousel-item">

                                <a href="">
                                <img src="{{ asset('/images/gordon-ramzi.jpg') }}"
                                     class="img-fluid d-block w-100">
                                </a>

                            </div>

                            <div class="carousel-item">
                                <a href="">
                                <img src="{{ asset('/images/paul_bocuse_1.jpg') }}"
                                     class="img-fluid d-block w-100">
                                </a>
                            </div>

                        </div>
                        <a href="#mySlider" class="carousel-control-prev" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                        <a href="#mySlider" class="carousel-control-next" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{--ТОП ШЕФ РЕЦЕПТОВ--}}






    </main>

@endsection
