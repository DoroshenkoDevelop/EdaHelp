@section('header')
    {{--Хеадер--}}

<header class="container-sm">
    <header class="card-header border-dark">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-collapse"
                 id="navbarSupportedContent">


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
                                    ЗАВЕДЕНИЯ
                                </b>
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- КАРТА--}}

                {{-- СТАТЬИ--}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="{{ route('articles') }}">
                            <p class="h4 cuprum">
                                <b>
                                    СТАТЬИ
                                </b>
                            </p>
                        </a>
                    </li>
                </ul>
                {{-- СТАТЬИ--}}

                {{-- МОЙ РЕЦЕПТ --}}
               {{-- <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
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
                </ul>--}}
                {{-- МОЙ РЕЦЕПТ --}}

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
            <div class="navbar-collapse"
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
                                СУПЫ
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

                {{-- ДИСЕРТЫ --}}
                {{--      <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                          <li class="nav-item">
                              <a class="nav-link active"
                                 aria-current="page"
                                 href="{{ route('desserts') }}">
                                  <p class="h-25  cuprum">
                                      ДЕСЕРТЫ
                                  </p>
                              </a>
                          </li>
                      </ul>--}}
                {{-- ДИСЕРТЫ --}}

                {{-- СПИСОК РЕЦЕПТОВ --}}
            </div>
        </nav>
    </header>
</header>
@show
