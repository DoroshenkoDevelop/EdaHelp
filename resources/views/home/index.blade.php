@extends('layouts.layout')
@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="TBbnzgj2hscIAHRYi5CVGqWH7gFODCYGH5Y4jRQyBWg" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="keywords" content="Рецепты, рецепты закусок, рецепты салатов, рецепты супов, рецепты мясо, рецепты суши, шеф рецепты, рецепты ризотто, рецепты пасты, интересные рецепты, быстрые рецепты, рецепты десертов.">
    <meta name="Description" content="Рецепты приготовления блюд, рецепты с ресторанной подачей, ресторан у тебя дома, пошаговые рецепты, рецепты с фото, простые рецепты, вкусные рецепты, интересные рецепты, необычные рецепты, фото рецепт"/>
    <meta property="og:url" content="http://edahelp.ru/">
    <meta property="og:site_name" content="ЕдаHelp">


    <link rel="icon" href="{{ asset('storage/favicon/favicon.PNG') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/js" href="{{ asset('js/parallax.min.js') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <script>
        window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Analytics -->


    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(74501833, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/74501833" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <noscript>
        <div>
            <img src="https://mc.yandex.ru/watch/74501833" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <title>
        Еда Хелп||Кулинарные рецепты, дома как в ресторане.
    </title>

@show
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
        <section class="row">
            <article class="">
                <p class="cuprum h2 mt-5 mb-2">
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
                                        {{ $articles->articles_name }}
                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6 ">
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
                                        {{ $articles->articles_name }}
                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    {{ $articles->articles_text_9 }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </article>
            {{--СТАТЬИ--}}

       {{--ПОПУЛЯРНЫЕ РЕЦЕПТЫ--}}
        <section class="row ml-1">
        <article class="">
            <p class="cuprum h2 mt-5 mb-2">
                ПОПУЛЯРНЫЕ РЕЦЕПТЫ
            </p>
        </article>
            {{--ПОПУЛЯРНЫЕ РЕЦЕПТЫ--}}

        {{--РЕЦЕПТ--}}
        <article class="col-sm-12 col-md-3 ">
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
        <section class="row mb-4">
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
            <div class="row">
                <div class="col-12">
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

        {{--ТОП ШЕФ РЕЦЕПТОВ--}}

            {{--РЕКЛАМА--}}
           {{-- <article class="col-sm-12 col-md-3 p-5">
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
            </article>--}}
            {{--РЕКЛАМА--}}

            {{--РЕКЛАМА--}}
           {{-- <article class="col-sm-12 col-md-3 p-5">
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
            </article>--}}
            {{--РЕКЛАМА--}}

            {{--РЕКЛАМА--}}
          {{--  <article class="col-sm-12 col-md-3 p-5">
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
            </article>--}}
            {{--РЕКЛАМА--}}



</section>
    </main>

@endsection
