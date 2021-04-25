@extends('layouts.layout')
@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="TBbnzgj2hscIAHRYi5CVGqWH7gFODCYGH5Y4jRQyBWg" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="keywords" content="Рецепт приготовления пасты, рецепт приготовление пене, рецепт приготовление лапши, рецепт приготовление спагетти, рецепт приготовление лингвини.">
    <meta name="Description" content="Паста — блюдо итальянской кухни, состоящее из трех основных компонентов: макаронного изделия, соуса и сыра. Эти рецепты особенно подойдут для владельцев своих ресторанов и кафе, а также для приготовления в домашних условиях."/>
    <meta property="og:url" content="http://edahelp.ru/recipe_pastes">
    <meta property="og:description" content="Паста — блюдо итальянской кухни, состоящее из трех основных компонентов: макаронного изделия, соуса и сыра. Эти рецепты особенно подойдут для владельцев своих ресторанов и кафе, а также для приготовления в домашних условиях.">
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
        Еда Хелп - рецепты приготовление пасты с оригинальными соусами на любой вкус
    </title>

@show
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
                        <div class="card">
                        <img src="{{ asset($pene->pastes_image) }}"
                             class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        {{ $pene->pastes_name}}
                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6 ">
                                    <meta name="Description" content="Пене">
                                    {{ $pene->pastes_description_5}}
                                </p>
                            </div>
                        </div>
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
                            <div class="card">
                            <img src="{{ asset($vermicell->pastes_image) }}"
                                 class="img-fluid card-img">
                            <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            {{ $vermicell->pastes_name}}
                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Лапша">
                                        {{ $vermicell->pastes_description_5}}
                                    </p>
                                </div>
                            </div>
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
                            <div class="card">
                            <img src="{{ asset($spaghetti->pastes_image) }}"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            {{ $spaghetti->pastes_name}}
                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Спагетти">
                                        {{ $spaghetti->pastes_description_5}}
                                    </p>
                                </div>
                            </div>
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
                            <div class="card">
                            <img src="{{ asset($linguini->pastes_image) }}"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            {{ $linguini->pastes_name}}
                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Лингвини">
                                        {{ $linguini->pastes_description_5}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </article>
                {{-- РЕЦЕПТ --}}

            </div>
        </main>


    </main>
    {{-- ЗАКУСКИ --}}

@endsection
