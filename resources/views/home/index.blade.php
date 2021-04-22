@extends('home.home')
@section('content')

    <main class="container-sm border-right border-left border-dark">

      {{--  ОПИСАНИЕ--}}
        <main class="text-center container-sm">
            <meta name="Description" content="Сайт с рецептами, меню, фоторецептов с пошаговым и детальным описанием процесса приготовления.">
            <h1 class="display-2 mt-5 text-comfortaa mb-4">
                Мир кулинарного искусства
            </h1>
            <p class="cuprum h4 mb-4">
                Портал не только с классическими, но и с самыми интересными и оригинальными рецептами от шеф-поваров.
            </p>
            <p class="cuprum h5 mt-4">
                На нашем сайте вы найдете огромное количество фоторецептов с пошаговым и детальным описанием процесса приготовления.
            <p/>
        </main>
      {{--  ОПИСАНИЕ--}}

        {{--СТАТЬИ--}}
        <section class="row p-5">
            <article class="">
                <p class="cuprum h2  mt-5 mb-2">
                    ИНТЕРЕСНОЕ
                </p>
            </article>
            {{--СТАТЬИ--}}

            {{--СТАТЬИ--}}
            <article class="col-sm-12 col-md-6">
                @foreach($articles1 as $articles)
                    <a class="text-decoration-none"
                       {{ $articles->id }}
                       href="{{ route('article',['id'=>$articles->id])}}">
                        <div class="card">
                        <img src="{{ asset($articles->articles_image_1) }}" alt="Елена Малышева" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        {{ $articles->index_name }}
                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6 ">
                                    <meta name="Description" content="Лечим суставы с Еленой Малышевой">
                                    {{ $articles->articles_text_9 }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
            {{--СТАТЬИ--}}

            {{--СТАТЬИ--}}
            <article class="col-sm-12 col-md-6">
                @foreach($articles2 as $articles)
                    <a class="text-decoration-none"
                       {{ $articles->id }}
                       href="{{ route('article',['id'=>$articles->id])}}">
                        <div class="card">
                        <img src="{{ asset($articles->articles_image_1) }}" alt="Доктор Берг" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        {{ $articles->index_name }}
                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    <meta name="Description" content="Востанавливаем зрение с Доктором Бергом">
                                    {{ $articles->articles_text_9 }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
            {{--СТАТЬИ--}}

       {{--ПОПУЛЯРНЫЕ РЕЦЕПТЫ--}}
        <section class="row">
        <article class="">
            <p class="cuprum h2 mt-5 mb-2">
                ПОПУЛЯРНЫЕ РЕЦЕПТЫ
            </p>
        </article>
            {{--ПОПУЛЯРНЫЕ РЕЦЕПТЫ--}}

        {{--РЕЦЕПТ--}}
        <article class="col-sm-12 col-md-3">
            @foreach($populars1 as $populars)
                <a class="text-decoration-none"
                   {{ $populars->id }}
                   href="{{ route('recipe',['id'=>$populars->id])}}">
                    <div class="card">
                    <img src="{{ asset($populars->index_image) }}" alt="Суп" class="img-fluid card-img">
                        <div class="card-body">
                            <h5 class="card-title cuprum text-dark">
                                <b>
                                    {{ $populars->index_name }}
                                </b>
                            </h5>
                            <p class="card-text cuprum text-dark h6 ">
                                <meta name="Description" content="Рецепт крем-супа из овощей">
                                {{ $populars->index_description_5 }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </article>
         {{--РЕЦЕПТ--}}

          {{--РЕЦЕПТ--}}
            <article class="col-sm-12 col-md-3">
                @foreach($populars2 as $populars)
                    <a class="text-decoration-none"
                       {{ $populars->id }}
                       href="{{ route('recipe',['id'=>$populars->id])}}">
                        <div class="card">
                        <img src="{{ asset($populars->index_image) }}" alt="Рыба"  class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        {{ $populars->index_name }}
                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    <meta name="Description" content="Рецепт запеченого лосося">
                                    {{ $populars->index_description_5 }}

                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
          {{--   РЕЦЕПТ --}}

            {{--РЕЦЕПТ--}}
            <article class="col-sm-12 col-md-3">
                @foreach($populars3 as $populars)
                    <a class="text-decoration-none"
                       {{ $populars->id }}
                       href="{{ route('sushi',['id'=>$populars->id])}}">
                        <div class="card">
                        <img src="{{ asset($populars->sushis_image) }}" alt="Суши" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        {{ $populars->sushis_name }}
                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6 ">
                                    <meta name="Description" content="Рецепт суши с угрем">
                                    {{ $populars->sushis_description_5 }}

                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
            {{-- РЕЦЕПТ --}}

            {{--РЕЦЕПТ--}}
            <article class="col-sm-12 col-md-3">
                @foreach($populars4 as $populars)
                    <a class="text-decoration-none"
                       {{ $populars->id }}
                       href="{{ route('meat',['id'=>$populars->id])}}">
                        <div class="card">
                        <img src="{{ asset($populars->meats_image) }}" alt="Мясо" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        {{ $populars->meats_name }}
                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    <meta name="Description" content="Рецепт свинины в беконе">
                                    {{ $populars->meats_description_5 }}

                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
            {{-- РЕЦЕПТ --}}

        </section>
        {{--ПОПУЛЯРНЫЕ РЕЦЕПТЫ--}}

        {{--НОВЫЕ РЕЦЕПТЫ--}}
        <section class="row mb-5">
            <article class="">
                <p class="cuprum h2  mt-5 mb-2">
                    НОВЫЕ РЕЦЕПТЫ
                </p>
            </article>

            {{--РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-3">
                @foreach($new1 as $new)
                    <a class="text-decoration-none"
                       {{ $new->id }}
                       href="{{ route('meat',['id'=>$new->id])}}">
                        <div class="card">
                        <img src="{{ asset($new->meats_image) }}" alt="Драники" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        {{ $new->meats_name }}
                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6 ">
                                    <meta name="Description" content="Рецепт драников с мясом">
                                    {{ $new->meats_description_5 }}

                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
            {{--РЕЦЕПТ --}}

            {{--РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-3">
                @foreach($new2 as $new)
                    <a class="text-decoration-none"
                       {{ $new->id }}
                       href="{{ route('recipe',['id'=>$new->id])}}">
                        <div class="card">
                        <img src="{{ asset($new->index_image) }}" alt="Бургер" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        {{ $new->index_name }}
                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    <meta name="Description" content="Рецепт бургера">
                                    {{ $new->index_description_5 }}

                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
            {{-- РЕЦЕПТ --}}

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-3">
                @foreach($new3 as $new)
                    <a class="text-decoration-none"
                       {{ $new->id }}
                       href="{{ route('recipe',['id'=>$new->id])}}">
                        <div class="card">
                        <img src="{{ asset($new->index_image) }}" alt="Ризотто" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        {{ $new->index_name }}
                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    <meta name="Description" content="Рецепт перловой каши">
                                    {{ $new->index_description_5 }}

                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
            {{--РЕЦЕПТ --}}

            {{-- РЕЦЕПТ --}}
            <article class="col-sm-12 col-md-3">
                @foreach($new4 as $new)
                    <a class="text-decoration-none"
                       {{ $new->id }}
                       href="{{ route('recipe',['id'=>$new->id])}}">
                        <div class="card">
                        <img src="{{ asset($new->index_image) }}" alt="Суп" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        {{ $new->index_name }}
                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    <meta name="Description" content="Рецепт супа с рыбой">
                                    {{ $new->index_description_5 }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
            {{--РЕЦЕПТ --}}
        </section>
        {{--НОВЫЕ РЕЦЕПТЫ--}}

        {{-- ТОП ШЕФ РЕЦЕПТОВ--}}
        <section class="mt-3 p-2">
            <div class="row">
                <div class="col">
                    <p class="cuprum h2">
                        ТОП ШЕФ РЕЦЕПТОВ
                    </p>
                    <div class="carousel slide mb-5" id="mySlider" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                @foreach($chef1 as $chef)
                                    <a class="text-decoration-none"
                                       {{ $chef->id }}
                                       href="{{ route('chef',['id'=>$chef->id])}}">
                                        <div class="card">
                                        <img src="{{ asset('/images/gordon-ramzi.jpg') }}"alt="Гордон Рамзи" class="img-fluid card-img">
                                            <div class="card-body">
                                                <h5 class="card-title cuprum text-dark">
                                                    <b>
                                                        {{ $chef->index_name }}
                                                    </b>
                                                </h5>
                                                <p class="card-text cuprum text-dark h6">
                                                    <meta name="Description" content="Рецепты Гордона Рамзи">
                                                    {{ $chef->chef_description }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>

                           {{-- <div class="carousel-item">
                                @foreach($chef1 as $chef)
                                    <a class="text-decoration-none"
                                       {{ $chef->id }}
                                       href="{{ route('chef',['id'=>$chef->id])}}">
                                        <img src="{{ asset('/images/oliver.jpg') }}" class="img-fluid card-img">
                                        <p class="cuprum text-dark">
                                            <b>
                                                {{ $chef->index_name }}
                                            </b>
                                        </p>
                                    </a>
                                @endforeach
                            </div>--}}


                          {{--  <div class="carousel-item">
                                @foreach($chef1 as $chef)
                                    <a class="text-decoration-none"
                                       {{ $chef->id }}
                                       href="{{ route('chef',['id'=>$chef->id])}}">
                                        <img src="{{ asset('/images/paul_bocuse_1.jpg') }}" class="img-fluid card-img">
                                        <p class="cuprum text-dark">
                                            <b>
                                                {{ $chef->index_name }}
                                            </b>
                                        </p>
                                    </a>
                                @endforeach
                            </div>--}}


                        </div>
                        <a href="#mySlider" class="carousel-control-prev" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                        <a href="#mySlider" class="carousel-control-next" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{--ТОП ШЕФ РЕЦЕПТОВ--}}

            {{--РЕКЛАМА--}}
            <article class="col-sm-12 col-md-3 p-5">
                @foreach($product1 as $product)
                    <a class="text-decoration-none"
                       {{ $product->id }}
                       href=" {{$product->index_name}}">
                        <div class="card">
                        <img src="{{ asset($product->index_image) }}" alt="Пчелиный воск здоров" class="img-fluid card-img">
                            <div class="card-body">
                                <p class="card-text cuprum text-danger h5 ">
                                    <meta name="Description" content="">
                                    {{ $product->index_description_5 }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
            {{--РЕКЛАМА--}}

            {{--РЕКЛАМА--}}
            <article class="col-sm-12 col-md-3 p-5">
                @foreach($product2 as $product)
                    <a class="text-decoration-none"
                       {{ $product->id }}
                       href=" {{$product->index_name}}">
                        <div class="card">
                            <img src="{{ asset($product->index_image) }}" class="img-fluid card-img">
                            <div class="card-body">
                                <p class="card-text cuprum text-danger h5 ">
                                    <meta name="Description" content="">
                                    {{ $product->index_description_5 }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
            {{--РЕКЛАМА--}}

            {{--РЕКЛАМА--}}
            <article class="col-sm-12 col-md-3 p-5">
                @foreach($product3 as $product)
                    <a class="text-decoration-none"
                       {{ $product->id }}
                       href=" {{$product->index_name}}">
                        <div class="card">
                            <img src="{{ asset($product->index_image) }}" class="img-fluid card-img">
                            <div class="card-body">
                                <p class="card-text cuprum text-danger h5 ">
                                    <meta name="Description" content="">
                                    {{ $product->index_description_5 }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
            {{--РЕКЛАМА--}}



</section>
    </main>

@endsection
