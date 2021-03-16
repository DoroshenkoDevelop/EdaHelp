@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        РИЗОТТО
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                 {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    @foreach($risottos  as $risotto)
                        <a class="text-decoration-none"
                           {{ $risotto->id }}
                           href="{{ route('risotto',['id'=>$risotto->id])}}">
                            <img src="{{ asset($risotto->risottos_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $risotto->risottos_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    @foreach($risottos2  as $risottos)
                        <a class="text-decoration-none"
                           {{ $risottos->id }}
                           href="{{ route('risotto',['id'=>$risottos->id])}}">
                            <img src="{{ asset($risottos->risottos_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $risottos->risottos_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    @foreach($risottos3  as $risottos)
                        <a class="text-decoration-none"
                           {{ $risottos->id }}
                           href="{{ route('risotto',['id'=>$risottos->id])}}">
                            <img src="{{ asset($risottos->risottos_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $risottos->risottos_name}}
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
