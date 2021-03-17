@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mb-5 mt-5 text-center">
                        МЯСО
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                {{--РУЛЬКА В СОУСЕ BBQ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5">
                            ГОВЯДИНА
                        </p>
                    </article>
                    @foreach($beefs  as $beef)
                        <a class="text-decoration-none"
                           {{ $beef->id }}
                           href="{{ route('meat',['id'=>$beef->id])}}">
                            <img src="{{ asset($beef->meats_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $beef->meats_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РУЛЬКА В СОУСЕ BBQ--}}

                {{--ДРАНИКИ С МЯСОМ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5 ">
                            СВИНИНА
                        </p>

                    </article>
                    @foreach($porks  as $pork)
                        <a class="text-decoration-none"
                           {{ $pork->id }}
                           href="{{ route('meat',['id'=>$pork->id])}}">
                            <img src="{{ asset($pork->meats_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $pork->meats_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--ДРАНИКИ С МЯСОМ--}}

                {{--ШАШАЛЫК ИЗ КУРИНЫХ КРЫЛЫШЕК--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5 ">
                            ПТИЦА
                        </p>

                    </article>
                    @foreach($birds  as $bird)
                        <a class="text-decoration-none"
                           {{ $bird->id }}
                           href="{{ route('meat',['id'=>$bird->id])}}">
                            <img src="{{ asset($bird->meats_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $bird->meats_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--ШАШАЛЫК ИЗ КУРИНЫХ КРЫЛЫШЕК--}}

                {{--СВИННОЙ ШАШЛЫК--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5 ">
                            МИКС
                        </p>

                    </article>
                    @foreach($mixs  as $mix)
                        <a class="text-decoration-none"
                           {{ $mix->id }}
                           href="{{ route('meat',['id'=>$mix->id])}}">
                            <img src="{{ asset($mix->meats_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $mix->meats_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--СВИННОЙ ШАШЛЫК--}}



            </div>
        </main>
    </main>
@endsection
