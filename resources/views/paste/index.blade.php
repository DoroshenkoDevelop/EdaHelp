@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

            {{-- ЗАГОЛОВОК --}}
            <div class="row">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        ПАСТА
                    </p>
                </article>
                {{-- ЗАГОЛОВОК --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-4">
                    @foreach($pastes  as $paste)
                    <a class="text-decoration-none"
                       {{ $paste->id }}
                       href="{{ route('paste',['id'=>$paste->id])}}">
                        <img src="{{ asset($paste->pastes_image) }}" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                               {{ $paste->pastes_name }}
                            </b>
                        </p>
                    </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}

                {{-- РЕЦЕПТ --}}
                <article class="col-sm-12 col-md-3 mb-4">
                    @foreach($pastes2  as $pastes)
                        <a class="text-decoration-none"
                           {{ $pastes->id }}
                           href="{{ route('paste',['id'=>$pastes->id])}}">
                            <img src="{{ asset($pastes->pastes_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $pastes->pastes_name }}
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
