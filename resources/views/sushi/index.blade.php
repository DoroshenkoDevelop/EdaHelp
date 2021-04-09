@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        СУШИ
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                 {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5">
                            С ЛОСОСЕМ
                        </p>
                    </article>
                    @foreach($salmons  as $salmon)
                        <a class="text-decoration-none"
                           {{ $salmon->id }}
                           href="{{ route('sushi',['id'=>$salmon->id])}}">
                            <img src="{{ asset($salmon->sushis_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $salmon->sushis_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5">
                            С ТУНЦОМ
                        </p>
                    </article>
                    @foreach($tunas  as $tuna)
                        <a class="text-decoration-none"
                           {{ $tuna->id }}
                           href="{{ route('sushi',['id'=>$tuna->id])}}">
                            <img src="{{ asset($tuna->sushis_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $tuna->sushis_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5">
                            С УГРЁМ
                        </p>
                    </article>
                    @foreach($seafoods  as $seafood)
                        <a class="text-decoration-none"
                           {{ $seafood->id }}
                           href="{{ route('sushi',['id'=>$seafood->id])}}">
                            <img src="{{ asset($seafood->sushis_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $seafood->sushis_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5">
                            МИКС
                        </p>
                    </article>
                    @foreach($mixs  as $mix)
                        <a class="text-decoration-none"
                           {{ $mix->id }}
                           href="{{ route('sushi',['id'=>$mix->id])}}">
                            <img src="{{ asset($mix->sushis_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $mix->sushis_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

            </div>
        </main>
    </main>
@endsection
