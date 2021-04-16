@extends('home.home')
@section('content')

    {{-- СТАТЬИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

            {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mb-5 mt-5 text-center">
                        Статья
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5">
                            ГОВЯДИНА
                        </p>
                    </article>
                    @foreach($articles  as $article)
                        <a class="text-decoration-none"
                           {{ $article->id }}
                           href="{{ route('article',['id'=>$article->id])}}">
                            <img src="{{ asset($article->meats_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $article->meats_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>






            </div>
        </main>
    </main>
    {{-- СТАТЬИ--}}

@endsection
