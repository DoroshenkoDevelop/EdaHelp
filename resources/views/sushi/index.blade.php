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
                    @foreach($sushies  as $sushi)
                        <a class="text-decoration-none"
                           {{ $sushi->id }}
                           href="{{ route('sushi',['id'=>$sushi->id])}}">
                            <img src="{{ asset($sushi->sushis_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $sushi->sushis_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    @foreach($sushies  as $sushi)
                        <a class="text-decoration-none"
                           {{ $sushi->id }}
                           href="{{ route('sushi',['id'=>$sushi->id])}}">
                            <img src="{{ asset($sushi->sushis_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $sushi->sushis_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    @foreach($sushies  as $sushi)
                        <a class="text-decoration-none"
                           {{ $sushi->id }}
                           href="{{ route('sushi',['id'=>$sushi->id])}}">
                            <img src="{{ asset($sushi->sushis_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $sushi->sushis_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    @foreach($sushies  as $sushi)
                        <a class="text-decoration-none"
                           {{ $sushi->id }}
                           href="{{ route('sushi',['id'=>$sushi->id])}}">
                            <img src="{{ asset($sushi->sushis_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $sushi->sushis_name}}
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
