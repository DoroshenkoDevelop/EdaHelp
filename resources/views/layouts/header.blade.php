@section('header')
    {{--Хеадер--}}
<header class="container">

    <header class="card-header border-dark">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{-- О НАС --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ asset('o_nas') }}"><p class="h4 cuprum"><b>О НАС</b></p></a>
                    </li>
                </ul>
                {{-- О НАС --}}

                {{-- ШЕФ РЕЦЕПТЫ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ asset('chef_list') }}" ><p class="h4 cuprum"><b>ШЕФ-РЕЦЕПТЫ</b></p></a>
                    </li>
                </ul>
                {{-- ШЕФ РЕЦЕПТЫ --}}

                {{-- ГИД ПО РЕСТОРАНАМ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ asset('chef_list') }}" ><p class="h4 cuprum"><b>РЕСТО-ГИД</b></p></a>
                    </li>
                </ul>
                {{-- ГИД ПО РЕСТОРАНАМ --}}

                {{-- ПП --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ asset('chef_list') }}" ><p class="h4 cuprum"><b>ПП</b></p></a>
                    </li>
                </ul>
                {{-- ПП --}}

            </div>
        </nav>

        {{-- СПИСОК РЕЦЕПТОВ --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="">
                {{-- ЗАКУСКИ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=""><p class="h5 lead cuprum">ЗАКУСКИ</p></a>
                    </li>
                </ul>
                {{-- ЗАКУСКИ --}}

                {{-- САЛАТЫ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=""><p class="h5 lead cuprum">САЛАТЫ</p></a>
                    </li>
                </ul>
                {{-- САЛАТЫ --}}

                {{-- КРЕМ СУПЫ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><p class="h5 lead cuprum">КРЕМ СУПЫ</p></a>
                    </li>
                </ul>
                {{-- КРЕМ СУПЫ --}}

                {{-- ПАСТА --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><p class="h5 lead cuprum">ПАСТА</p></a>
                    </li>
                </ul>
                {{-- ПАСТА --}}

                {{-- РИЗОТТО --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><p class="h5 lead cuprum">РИЗОТТО</p></a>
                    </li>
                </ul>
                {{-- РИЗОТТО --}}

                {{-- МЯСО --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><p class="h5 lead cuprum">МЯСО</p></a>
                    </li>
                </ul>
                {{-- МЯСО --}}

                {{-- РЫБА --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><p class="h5 lead cuprum">РЫБА</p></a>
                    </li>
                </ul>
                {{-- РЫБА --}}

                {{-- ДИСЕРТЫ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><p class="h5 lead cuprum">ДИСЕРТЫ</p></a>
                    </li>
                </ul>
                {{-- ДИСЕРТЫ --}}

                {{-- НАПИТКИ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><p class="h5 lead cuprum">НАПИТКИ</p></a>
                    </li>
                </ul>
                {{-- НАПИТКИ --}}

                {{-- СУШИ --}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><p class="h5 lead cuprum">СУШИ</p></a>
                    </li>
                </ul>
                {{-- СУШИ --}}

                {{-- ИЗЫСКАННОЕ--}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><p class="h5 lead cuprum">ИЗЫСКАННОЕ</p></a>
                    </li>
                </ul>
                {{-- ИЗЫСКАННОЕ--}}

                {{-- СОУС--}}
                <ul class="navbar-nav mr-1 mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><p class="h5 lead cuprum">СОУС</p></a>
                    </li>
                </ul>
                {{-- СОУС--}}
                {{-- СПИСОК РЕЦЕПТОВ --}}
            </div>
        </nav>
    </header>
</header>
@show
