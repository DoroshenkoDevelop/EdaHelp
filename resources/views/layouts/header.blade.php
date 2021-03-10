@section('header')
    {{--Хеадер--}}
<header class="container-sm">
    <header class="card-header border-dark">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse"
                 id="navbarSupportedContent">


                {{-- МОЙ РЕЦЕПТ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ asset('my_recipe') }}">
                            <p class="h4 cuprum">
                                <b>
                                    МОЙ РЕЦЕПТ
                                </b>
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- МОЙ РЕЦЕПТ --}}


                {{-- ШЕФ РЕЦЕПТЫ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ route('list_chefs')}}" >
                            <p class="h4 cuprum">
                                <b>
                                    ШЕФ-РЕЦЕПТЫ
                                </b>
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- ШЕФ РЕЦЕПТЫ --}}


                {{-- КАРТА --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ route('map')}}" >
                            <p class="h4 cuprum">
                                <b>
                                    КАРТА
                                </b>
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- КАРТА--}}


                {{-- О НАС --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{route('info')}}">
                            <p class="h4 cuprum">
                                <b>
                                    О НАС
                                </b>
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- О НАС --}}
            </div>
        </nav>

        {{-- СПИСОК РЕЦЕПТОВ --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse"
                 id="navbarSupportedContent">

                {{-- ЗАКУСКИ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{route('snacks')}}">
                            <p class="h-25 cuprum">
                                ЗАКУСКИ
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- ЗАКУСКИ --}}

                {{-- САЛАТЫ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ route('salads') }}">
                            <p class="h-25 cuprum">
                                САЛАТЫ
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- САЛАТЫ --}}

                {{-- КРЕМ СУПЫ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ route('cream_soups') }}">
                            <p class="h-25  cuprum">
                                КРЕМ СУПЫ
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- КРЕМ СУПЫ --}}

                {{-- ПАСТА --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ route('pastes') }}">
                            <p class="h-25  cuprum">
                                ПАСТА
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- ПАСТА --}}

                {{-- РИЗОТТО --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ route('risottos') }}">
                            <p class="h-25  cuprum">
                                РИЗОТТО
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- РИЗОТТО --}}

                {{-- МЯСО --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ route('meats') }}">
                            <p class="h-25  cuprum">
                                МЯСО
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- МЯСО --}}

                {{-- РЫБА --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ route('fishes') }}">
                            <p class="h-25 cuprum">
                                РЫБА
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- РЫБА --}}

                {{-- ДИСЕРТЫ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ route('desserts') }}">
                            <p class="h-25  cuprum">
                                ДИСЕРТЫ
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- ДИСЕРТЫ --}}

                {{-- СУШИ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ route('sushies') }}">
                            <p class="h-25  cuprum">
                                 СУШИ
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- СУШИ --}}

                {{-- ИЗЫСКАННОЕ--}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ route('exquisites') }}">
                            <p class="h-25  cuprum">
                                ИЗЫСКАННОЕ
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- ИЗЫСКАННОЕ--}}
                {{-- СПИСОК РЕЦЕПТОВ --}}
            </div>
        </nav>
    </header>
</header>
@show
