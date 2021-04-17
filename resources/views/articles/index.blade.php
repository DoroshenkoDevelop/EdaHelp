@extends('home.home')
@section('content')

    {{-- СТАТЬИ--}}
    <main class="container-sm">

        <div class="col-8 block-container">

            {{-- ЗАГОЛОВОК --}}
            <article class="mt-4">
                <h2 class="text-center text-comfortaa h4">
                    <b>
                        СТАТЬИ
                    </b>
                </h2>
            </article>
            {{-- ЗАГОЛОВОК --}}

            {{-- КОНТЕНТ --}}
            <main class="border-right border-left border-dark p-5">
                {{-- КОНТЕНТ --}}
                    @foreach($articles  as $article)
                        <a class="text-decoration-none"
                           {{ $article->id }}
                           href="{{ route('article',['id'=>$article->id])}}">
                            <img src="{{ asset($article->articles_image_1) }}" alt="Елена Малышева" class="img-fluid card-img">
                            <p class="cuprum  text-dark h4 mt-3">
                                <b>
                                    {{ $article->articles_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </main>











            </div>
    </main>
    {{-- СТАТЬИ--}}

@endsection
