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
                <article class="col-sm-12 col-md-3">
                    @foreach($listSalads as $listSalad)
                        <a class="text-decoration-none"
                           {{ $listSalad->id }}
                           href="{{ route('salad',['id'=>$listSalad->id])}}">
                            <img src="{{ asset('images/Kapreze.jpg') }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    Капрезе
                                </b>
                            </p>
                        </a>
                    @endforeach
                        {{--РЕЦЕПТ--}}
                </article>
            </div>
        </main>
        </main>
@endsection
