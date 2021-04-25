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
                            <div class="card">
                            <img src="{{ asset($article->articles_image_1) }}" alt="Интересные статьи" class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            {{ $article->articles_name }}
                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Лечим суставы с Еленой Малышевой">

                                        {{ $article->articles_text_9 }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </main>











            </div>
    </main>
    {{-- СТАТЬИ--}}

@endsection
