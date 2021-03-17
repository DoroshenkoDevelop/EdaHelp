@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

            {{-- ЗАГОЛОВОК --}}
            <div class="row">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        ПАСТА
                    </p>
                </article>
                {{-- ЗАГОЛОВОК --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ПЕНЕ
                        </p>
                    </article>
                    @foreach($pene  as $pen)
                    <a class="text-decoration-none"
                       {{ $pen->id }}
                       href="{{ route('paste',['id'=>$pen->id])}}">
                        <img src="{{ asset($pen->pastes_image) }}" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                               {{ $pen->pastes_name }}
                            </b>
                        </p>
                    </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ВЕРМЕШЕЛЬ
                        </p>
                    </article>
                    @foreach($vermicelli  as $vermicell)
                        <a class="text-decoration-none"
                           {{ $vermicell->id }}
                           href="{{ route('paste',['id'=>$vermicell->id])}}">
                            <img src="{{ asset($vermicell->pastes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $vermicell->pastes_name }}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ВЕРМЕШЕЛЬ
                        </p>
                    </article>
                    @foreach($vermicelli  as $vermicell)
                        <a class="text-decoration-none"
                           {{ $vermicell->id }}
                           href="{{ route('paste',['id'=>$vermicell->id])}}">
                            <img src="{{ asset($vermicell->pastes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $vermicell->pastes_name }}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ВЕРМЕШЕЛЬ
                        </p>
                    </article>
                    @foreach($vermicelli  as $vermicell)
                        <a class="text-decoration-none"
                           {{ $vermicell->id }}
                           href="{{ route('paste',['id'=>$vermicell->id])}}">
                            <img src="{{ asset($vermicell->pastes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $vermicell->pastes_name }}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}

            </div>
        </main>


    </main>
    {{-- ЗАКУСКИ --}}

@endsection
