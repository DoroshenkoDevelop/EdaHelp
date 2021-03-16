@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        ДЕСЕРТЫ
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                 {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3">
                    @foreach($desserts  as $dessert)
                        <a class="text-decoration-none"
                           {{ $dessert->id }}
                           href="{{ route('dessert',['id'=>$dessert->id])}}">
                            <img src="{{ asset($dessert->desserts_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $dessert->desserts_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3">
                    @foreach($brounis  as $brouni)
                        <a class="text-decoration-none"
                           {{ $brouni->id }}
                           href="{{ route('dessert',['id'=>$brouni->id])}}">
                            <img src="{{ asset($brouni->desserts_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $brouni->desserts_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3">
                    @foreach($сheesecakes  as $сheesecake)
                        <a class="text-decoration-none"
                           {{ $сheesecake->id }}
                           href="{{ route('dessert',['id'=>$сheesecake->id])}}">
                            <img src="{{ asset($сheesecake->desserts_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $сheesecake->desserts_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3">
                    @foreach($strudelcherys  as $strudelchery)
                        <a class="text-decoration-none"
                           {{ $strudelchery->id }}
                           href="{{ route('dessert',['id'=>$strudelchery->id])}}">
                            <img src="{{ asset($strudelchery->desserts_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $strudelchery->desserts_name}}
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
