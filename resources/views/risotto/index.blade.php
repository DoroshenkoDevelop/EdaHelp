@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        РИЗОТТО
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                 {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            С МЯСОМ
                        </p>
                    </article>
                    @foreach($risottomeats  as $risottomeat)
                        <a class="text-decoration-none"
                           {{ $risottomeat->id }}
                           href="{{ route('risotto',['id'=>$risottomeat->id])}}">
                            <img src="{{ asset($risottomeat->risottos_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $risottomeat->risottos_name}}
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
                    @foreach($risottochikens  as $risottochiken)
                        <a class="text-decoration-none"
                           {{ $risottochiken->id }}
                           href="{{ route('risotto',['id'=>$risottochiken->id])}}">
                            <img src="{{ asset($risottochiken->risottos_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $risottochiken->risottos_name}}
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
                    @foreach($risottosseafoods  as $risottosseafood)
                        <a class="text-decoration-none"
                           {{ $risottosseafood->id }}
                           href="{{ route('risotto',['id'=>$risottosseafood->id])}}">
                            <img src="{{ asset($risottosseafood->risottos_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $risottosseafood->risottos_name}}
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
                            С ОВОЩАМИ
                        </p>
                    </article>
                    @foreach($risottovegetables  as $risottovegetable)
                        <a class="text-decoration-none"
                           {{ $risottovegetable->id }}
                           href="{{ route('risotto',['id'=>$risottovegetable->id])}}">
                            <img src="{{ asset($risottovegetable->risottos_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $risottovegetable->risottos_name}}
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
