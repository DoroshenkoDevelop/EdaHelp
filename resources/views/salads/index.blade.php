@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        САЛАТЫ
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-3">
                    @foreach($salad3  as $salad)
                        <a class="text-decoration-none"
                           {{ $salad->id }}
                           href="{{ route('salad',['id'=>$salad->id])}}">
                            <img src="{{ asset($salad->salads_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $salad->salads_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-3">
                    @foreach($salad2  as $salad)
                        <a class="text-decoration-none"
                           {{ $salad->id }}
                           href="{{ route('salad',['id'=>$salad->id])}}">
                            <img src="{{ asset($salad->salads_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $salad->salads_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                 {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-3">
                    @foreach($salads  as $salad)
                        <a class="text-decoration-none"
                           {{ $salad->id }}
                           href="{{ route('salad',['id'=>$salad->id])}}">
                            <img src="{{ asset($salad->salads_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $salad->salads_name}}
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
