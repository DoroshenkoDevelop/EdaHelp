@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        ИЗЫСКАННОЕ
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                 {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            МОРЕПРОДУКТЫ
                        </p>
                    </article>
                    @foreach($seafoods as $seafood)
                        <a class="text-decoration-none"
                           {{ $seafood->id }}
                           href="{{ route('exquisite',['id'=>$seafood->id])}}">
                            <img src="{{ asset($seafood->exquisite_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $seafood->exquisite_name}}
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
                            ПОКЕ
                        </p>
                    </article>
                    @foreach($pokes as $poke)
                        <a class="text-decoration-none"
                           {{ $poke->id }}
                           href="{{ route('exquisite',['id'=>$poke->id])}}">
                            <img src="{{ asset($poke->exquisite_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $poke->exquisite_name}}
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
                            МЯСО
                        </p>
                    </article>
                    @foreach($meats as $meat)
                        <a class="text-decoration-none"
                           {{ $meat->id }}
                           href="{{ route('exquisite',['id'=>$meat->id])}}">
                            <img src="{{ asset($meat->exquisite_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $meat->exquisite_name}}
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
                            РЫБА
                        </p>
                    </article>
                    @foreach($fishes as $fish)
                        <a class="text-decoration-none"
                           {{ $fish->id }}
                           href="{{ route('exquisite',['id'=>$fish->id])}}">
                            <img src="{{ asset($fish->exquisite_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $fish->exquisite_name}}
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
