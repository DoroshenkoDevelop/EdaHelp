@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        КРЕМ СУПЫ
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                 {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3">
                    @foreach($soups  as $soup)
                        <a class="text-decoration-none"
                           {{ $soup->id }}
                           href="{{ route('dessert',['id'=>$soup->id])}}">
                            <img src="{{ asset($soup->cream_soups_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $soup->cream_soups_name }}
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
