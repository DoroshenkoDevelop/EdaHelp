@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        РЫБА
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ЖАРЕННАЯ
                        </p>
                    </article>
                    @foreach($frieds  as $fried)
                        <a class="text-decoration-none"
                           {{ $fried->id }}
                           href="{{ route('fish',['id'=>$fried->id])}}">
                            <img src="{{ asset($fried->fishes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $fried->fishes_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                 {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ЗАПЕЧЕНАЯ
                        </p>
                    </article>
                    @foreach($bakeds  as $baked)
                        <a class="text-decoration-none"
                           {{ $baked->id }}
                           href="{{ route('fish',['id'=>$baked->id])}}">
                            <img src="{{ asset($baked->fishes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $baked->fishes_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            СВЕЖАЯ
                        </p>
                    </article>
                    @foreach($raws  as $raw)
                        <a class="text-decoration-none"
                           {{ $raw->id }}
                           href="{{ route('fish',['id'=>$raw->id])}}">
                            <img src="{{ asset($raw->fishes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $raw->fishes_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            МИКС
                        </p>
                    </article>
                    @foreach($mixs  as $mix)
                        <a class="text-decoration-none"
                           {{ $mix->id }}
                           href="{{ route('fish',['id'=>$mix->id])}}">
                            <img src="{{ asset($mix->fishes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $mix->fishes_name}}
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
