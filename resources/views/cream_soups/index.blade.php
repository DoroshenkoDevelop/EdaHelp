@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        СУПЫ
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                {{--КРЕМ СУП--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5">
                            КРЕМ СУП
                        </p>
                    </article>
                    @foreach($creamsoups  as $creamsoup)
                        <a class="text-decoration-none"
                           {{ $creamsoup->id }}
                           href="{{ route('cream_soup',['id'=>$creamsoup->id])}}">
                            <img src="{{ asset($creamsoup->cream_soups_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $creamsoup->cream_soups_name }}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--КРЕМ СУП--}}

                {{--С МОРЕПРОДУКТАМИ И РЫБОЙ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5">
                            С МОРЕПРОДУКТАМИ И РЫБОЙ
                        </p>
                    </article>
                    @foreach($fushsoups  as $fushsoup)
                        <a class="text-decoration-none"
                           {{ $fushsoup->id }}
                           href="{{ route('cream_soup',['id'=>$fushsoup->id])}}">
                            <img src="{{ asset($fushsoup->cream_soups_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $fushsoup->cream_soups_name }}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--С МОРЕПРОДУКТАМИ И РЫБОЙ--}}

                {{--С МЯСОМ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            С МЯСОМ
                        </p>
                    </article>
                    @foreach($meatsoups  as $meatsoup)
                        <a class="text-decoration-none"
                           {{ $meatsoup->id }}
                           href="{{ route('cream_soup',['id'=>$meatsoup->id])}}">
                            <img src="{{ asset($meatsoup->cream_soups_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $meatsoup->cream_soups_name }}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--С МЯСОМ--}}

                {{--С МЯСОМ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ОВОЩНОЙ
                        </p>
                    </article>
                    @foreach($vegetables as $vegetable)
                        <a class="text-decoration-none"
                           {{ $vegetable->id }}
                           href="{{ route('cream_soup',['id'=>$vegetable->id])}}">
                            <img src="{{ asset($vegetable->cream_soups_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $vegetable->cream_soups_name }}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--С МЯСОМ--}}


            </div>
        </main>
    </main>
@endsection
