@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        ДЕСЕРТЫ
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                 {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    @foreach($pies  as $pie)
                        <article>
                            <p class="cuprum h5 ">
                                ПИРОГИ
                            </p>
                        </article>
                        <a class="text-decoration-none"
                           {{ $pie->id }}
                           href="{{ route('dessert',['id'=>$pie->id])}}">
                            <img src="{{ asset($pie->desserts_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $pie->desserts_name}}
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
                            СЛОЕНЫЕ
                        </p>
                    </article>
                    @foreach($puffs  as $puff)
                        <a class="text-decoration-none"
                           {{ $puff->id }}
                           href="{{ route('dessert',['id'=>$puff->id])}}">
                            <img src="{{ asset($puff->desserts_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $puff->desserts_name}}
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
                            БИСКВИТЫ
                        </p>
                    </article>
                    @foreach($biscuits  as $biscuit)
                        <a class="text-decoration-none"
                           {{ $biscuit->id }}
                           href="{{ route('dessert',['id'=>$biscuit->id])}}">
                            <img src="{{ asset($biscuit->desserts_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $biscuit->desserts_name}}
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
                           href="{{ route('dessert',['id'=>$mix->id])}}">
                            <img src="{{ asset($mix->desserts_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $mix->desserts_name}}
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
