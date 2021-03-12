@extends('home.home')
@section('content')
    <main class="container-sm border-right border-left border-dark">

        {{--ОПИСАНИЕ--}}
        <main class="text-center container-sm">
            <h1 class="display-2 mt-5 text-comfortaa">
                Мир кулинарного искусства
            </h1>
            <p class="cuprum h4">
                Портал не только с классическими, но и с самыми интересными и оригинальными рецептами от шеф-поваров.
            </p>
            <p class="cuprum h5">
                На нашем сайте вы найдете огромное количество фоторецептов с пошаговым и детальным описанием процесса приготовления.
            <p/>
        </main>
        {{--ОПИСАНИЕ--}}


        {{--ПОПУЛЯРНЫЕ РЕЦЕПТЫ--}}
        <section class="row">
        <article class="">
            <p class="cuprum h2  mt-5 mb-2">
                ПОПУЛЯРНЫЕ РЕЦЕПТЫ
            </p>
        </article>

        {{-- РЕЦЕПТ --}}
        <article class="col-sm-12 col-md-4">
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
        {{-- РЕЦЕПТ --}}

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-4">
                @foreach($tartars as $tartar)
                    <a class="text-decoration-none"
                       {{ $tartar->id }}
                       href="{{ route('popular',['id'=>$tartar->id])}}">
                        <img src="{{ asset($tartar->index_image) }}" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                {{ $tartar->index_name }}
                            </b>
                        </p>
                    </a>
                @endforeach
            </article>
            {{-- РЕЦЕПТ --}}

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-4">
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
            {{-- РЕЦЕПТ --}}
        </section>
        {{--ПОПУЛЯРНЫЕ РЕЦЕПТЫ--}}

        {{--ТОП ШЕФ РЕЦЕПТОВ--}}
        <section class="container-sm">
            <div class="row">
                <div class="col">
                    <p class="cuprum h2">ТОП ШЕФ РЕЦЕПТОВ</p>
                    <div class="carousel slide" id="mySlider" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <img src="{{ asset('/images/baloneze.jpg') }}" class="img-fluid d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/images/baloneze.jpg') }}" class="img-fluid d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/images/baloneze.jpg') }}" class="img-fluid d-block w-100">
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

        {{--СЕЗОННЫЕ РЕЦЕПТЫ--}}
        <section class="row">
            <article class="">
                <p class="cuprum h2  mt-5 mb-2">
                    ПОПУЛЯРНЫЕ РЕЦЕПТЫ
                </p>
            </article>

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-4">
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
            {{-- РЕЦЕПТ --}}

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-4">
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
            {{-- РЕЦЕПТ --}}

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-4">
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
            {{-- РЕЦЕПТ --}}
        </section>
        {{--СЕЗОННЫЕ РЕЦЕПТЫ--}}

        {{--НОВЫЕ РЕЦЕПТЫ--}}
        <section class="row">
            <article class="">
                <p class="cuprum h2  mt-5 mb-2">
                    ПОПУЛЯРНЫЕ РЕЦЕПТЫ
                </p>
            </article>

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-4">
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
            {{-- РЕЦЕПТ --}}

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-4">
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
            {{-- РЕЦЕПТ --}}

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-4">
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
            {{-- РЕЦЕПТ --}}
        </section>
        {{--НОВЫЕ РЕЦЕПТЫ--}}



    </main>

@endsection
