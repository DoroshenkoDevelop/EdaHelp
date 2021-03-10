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
                    @foreach($trouts as $trout)
                        <a class="text-decoration-none"
                           {{ $trout->id }}
                           href="{{ route('fish',['id'=>$trout->id])}}">
                            <img src="{{ asset($trout->fishes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $trout->fishes_name }}
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
