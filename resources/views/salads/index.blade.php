@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        САЛАТЫ
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5">
                            С МЯСОМ
                        </p>
                    </article>
                    @foreach($saladsbiffs  as $saladsbiff)
                        <a class="text-decoration-none"
                           {{ $saladsbiff->id }}
                           href="{{ route('salad',['id'=>$saladsbiff->id])}}">
                            <img src="{{ asset($saladsbiff->salads_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $saladsbiff->salads_name}}
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
                            С ПТИЦЕЙ
                        </p>
                    </article>
                    @foreach($saladchikens  as $saladchiken)
                        <a class="text-decoration-none"
                           {{ $saladchiken->id }}
                           href="{{ route('salad',['id'=>$saladchiken->id])}}">
                            <img src="{{ asset($saladchiken->salads_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $saladchiken->salads_name}}
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
                            С МОРЕПРОДУКТАМИ И РЫБОЙ
                        </p>
                    </article>
                    @foreach($saladseafoods  as $saladseafood)
                        <a class="text-decoration-none"
                           {{ $saladseafood->id }}
                           href="{{ route('salad',['id'=>$saladseafood->id])}}">
                            <img src="{{ asset($saladseafood->salads_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $saladseafood->salads_name}}
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
                            ОВОЩНОЙ
                        </p>
                    </article>
                    @foreach($saladvegetables  as $saladvegetable)
                        <a class="text-decoration-none"
                           {{ $saladvegetable->id }}
                           href="{{ route('salad',['id'=>$saladvegetable->id])}}">
                            <img src="{{ asset($saladvegetable->salads_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $saladvegetable->salads_name}}
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
