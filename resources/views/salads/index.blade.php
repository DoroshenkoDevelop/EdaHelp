@extends('layouts.layout')
@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="TBbnzgj2hscIAHRYi5CVGqWH7gFODCYGH5Y4jRQyBWg" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="keywords" content="Рецепты, рецепты салатов, рецепты салатов с мясом, рецепты салатов с курицей, рецепты салатов с морепродуктами, овощные салаты."/>
    <meta name="Description" content="Салаты на любой вкус с ресторанной подачей от лучших шеф-поворов.
    Сдесь вы найдете подборку наиболее аппетитных рецептов салатов.
    Эти рецепты подойдут как для владельцев своих ресторанов и так и для приготовления в домашних условиях."/>
    <meta property="og:url" content="http://edahelp.ru/recipe_salads">
    <meta property="og:description" content="Салаты на любой вкус с ресторанной подачей от лучших шеф-поворов. Здесь вы найдете подборку наиболее аппетитных рецептов салатов. Эти рецепты подойдут как для владельцев своих ресторанов и так и для приготовления в домашних условиях."/>
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
        Еда Хелп - рецепты салатов с красивой подачей
    </title>

@show
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        САЛАТЫ
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5">
                            С МЯСОМ
                        </p>

                    </article>
                    @foreach($saladsbiffs  as $saladsbiff)
                        <a class="text-decoration-none"
                           {{ $saladsbiff->id }}
                           href="{{ route('salad',['id'=>$saladsbiff->id])}}">
                            <div class="card">
                            <img src="{{ asset($saladsbiff->salads_image) }}"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            {{ $saladsbiff->salads_name}}
                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description"
                                              content="салаты с мясом">
                                        {{ $saladsbiff->salads_description_5}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            С ПТИЦЕЙ
                        </p>
                    </article>
                    @foreach($saladchikens  as $saladchiken)
                        <a class="text-decoration-none"
                           {{ $saladchiken->id }}
                           href="{{ route('salad',['id'=>$saladchiken->id])}}">
                            <div class="card">
                            <img src="{{ asset($saladchiken->salads_image) }}"
                                 class="img-fluid card-img">
                            <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            {{ $saladchiken->salads_name}}
                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description"
                                              content="салаты с птицей">
                                        {{ $saladchiken->salads_description_5}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                 {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            С МОРЕПРОДУКТАМИ И РЫБОЙ
                        </p>
                    </article>
                    @foreach($saladseafoods  as $saladseafood)
                        <a class="text-decoration-none"
                           {{ $saladseafood->id }}
                           href="{{ route('salad',['id'=>$saladseafood->id])}}">
                            <div class="card">
                            <img src="{{ asset($saladseafood->salads_image) }}"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            {{ $saladseafood->salads_name}}
                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description"
                                              content="салаты с морепродуктами и рыбой">
                                        {{ $saladseafood->salads_description_5}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ОВОЩНОЙ
                        </p>
                    </article>
                    @foreach($saladvegetables  as $saladvegetable)
                        <a class="text-decoration-none"
                           {{ $saladvegetable->id }}
                           href="{{ route('salad',['id'=>$saladvegetable->id])}}">
                            <div class="card">
                            <img src="{{ asset($saladvegetable->salads_image) }}"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            {{ $saladvegetable->salads_name}}
                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description"
                                              content="овощные салаты">
                                        {{ $saladvegetable->salads_description_5}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}


            </div>
        </main>
    </main>
@endsection
