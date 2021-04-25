@extends('layouts.layout')
@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="TBbnzgj2hscIAHRYi5CVGqWH7gFODCYGH5Y4jRQyBWg" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="keywords" content="Рецепт приготовления говядины, рецепт приготовление свинины, рецепт приготовление курицы, рецепт приготовление рыбы, рецепт приготовление шашлыка, запеченая рыба.">
    <meta name="Description" content="Готовим мясо по особой технологии. Как правильно приготовить ростбиф? Нежное мясо по оригинальному рецепту. Еда как в ресторане, но только дома. Рецепты подойдут как для владельцев своих ресторанов, также для приготовления в домашних условиях."/>
    <meta property="og:url" content="http://edahelp.ru/recipe_meats">
    <meta property="og:description" content="Готовим мясо по особой технологии. Как правильно приготовить ростбиф? Нежное мясо по оригинальному рецепту. Еда как в ресторане, но только дома. Рецепты подойдут как для владельцев своих ресторанов, также для приготовления в домашних условиях.">
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
        Еда Хелп - нежное мясо, запеченая рыба, подача как в ресторане
    </title>

@show
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mb-5 mt-5 text-center">
                        МЯСО
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                {{--РУЛЬКА В СОУСЕ BBQ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5">
                            ГОВЯДИНА
                        </p>
                    </article>
                    @foreach($beefs  as $beef)
                        <a class="text-decoration-none"
                           {{ $beef->id }}
                           href="{{ route('meat',['id'=>$beef->id])}}">
                            <div class="card">
                            <img src="{{ asset($beef->meats_image) }}"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            {{ $beef->meats_name}}
                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Говядина">
                                        {{ $beef->meats_description_5}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </article>
                {{--РУЛЬКА В СОУСЕ BBQ--}}

                {{--ДРАНИКИ С МЯСОМ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5 ">
                            СВИНИНА
                        </p>

                    </article>
                    @foreach($porks  as $pork)
                        <a class="text-decoration-none"
                           {{ $pork->id }}
                           href="{{ route('meat',['id'=>$pork->id])}}">
                            <div class="card">
                            <img src="{{ asset($pork->meats_image) }}"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            {{ $pork->meats_name}}
                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Свинина">
                                        {{ $pork->meats_description_5}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </article>
                {{--ДРАНИКИ С МЯСОМ--}}

                {{--ШАШАЛЫК ИЗ КУРИНЫХ КРЫЛЫШЕК--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5 ">
                            ПТИЦА
                        </p>

                    </article>
                    @foreach($birds  as $bird)
                        <a class="text-decoration-none"
                           {{ $bird->id }}
                           href="{{ route('meat',['id'=>$bird->id])}}">
                            <div class="card">
                            <img src="{{ asset($bird->meats_image) }}"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            {{ $bird->meats_name}}
                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Птица">
                                        {{ $bird->meats_description_5}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </article>
                {{--ШАШАЛЫК ИЗ КУРИНЫХ КРЫЛЫШЕК--}}

                {{--СВИННОЙ ШАШЛЫК--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5 ">
                            МИКС
                        </p>

                    </article>
                    @foreach($mixs  as $mix)
                        <a class="text-decoration-none"
                           {{ $mix->id }}
                           href="{{ route('meat',['id'=>$mix->id])}}">
                            <div class="card">
                            <img src="{{ asset($mix->meats_image) }}"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            {{ $mix->meats_name}}
                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Микс">
                                        {{ $mix->meats_description_5}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </article>
                {{--СВИННОЙ ШАШЛЫК--}}



            </div>
        </main>
    </main>
@endsection
