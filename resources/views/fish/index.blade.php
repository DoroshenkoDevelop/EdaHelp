@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        РЫБА
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                 {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3">
                    @foreach($fishes  as $fish)
                        <a class="text-decoration-none"
                           {{ $fish->id }}
                           href="{{ route('fish',['id'=>$fish->id])}}">
                            <img src="{{ asset($fish->fishes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $fish->fishes_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3">
                    @foreach($tro  as $tros)
                        <a class="text-decoration-none"
                           {{ $tros->id }}
                           href="{{ route('fish',['id'=>$tros->id])}}">
                            <img src="{{ asset($tros->fishes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $tros->fishes_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3">
                    @foreach($los  as $lo)
                        <a class="text-decoration-none"
                           {{ $lo->id }}
                           href="{{ route('fish',['id'=>$lo->id])}}">
                            <img src="{{ asset($lo->fishes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $lo->fishes_name}}
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
