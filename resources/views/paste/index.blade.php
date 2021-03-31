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
                    @foreach($penes  as $pene)
                    <a class="text-decoration-none"
                       {{ $pene->id }}
                       href="{{ route('paste',['id'=>$pene->id])}}">
                        <img src="{{ asset($pene->pastes_image) }}" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                               {{ $pene->pastes_name }}
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
                            ЛАПША
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
                            СПАГЕТТИ
                        </p>
                    </article>
                    @foreach($spaghettis  as $spaghetti)
                        <a class="text-decoration-none"
                           {{ $spaghetti->id }}
                           href="{{ route('paste',['id'=>$spaghetti->id])}}">
                            <img src="{{ asset($spaghetti->pastes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $spaghetti->pastes_name }}
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
                            ЛИНГВИНИ
                        </p>
                    </article>
                    @foreach($linguinis  as $linguini)
                        <a class="text-decoration-none"
                           {{ $linguini->id }}
                           href="{{ route('paste',['id'=>$linguini->id])}}">
                            <img src="{{ asset($linguini->pastes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $linguini->pastes_name }}
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
