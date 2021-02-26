@extends('home.home')
@section('content')

<main class="container-sm p-0">

    {{-- ЗАГОЛОВОК --}}
    <article class="col m-5">

        <h2 class="text-center text-comfortaa h4">
            <b>
                КАПРЕЗЕ С СОУСОМ ПЕСТО
            </b>
        </h2>

    </article>
    {{-- ЗАГОЛОВОК --}}

    {{-- КОНТЕНТ --}}
    <main class="block-container border-right border-left border-dark">
        {{-- КОНТЕНТ --}}

        {{-- ФОТО --}}
        <article class="">
            <img class="img-fluid"
                 alt="Responsive image"
                 width="100%"
                 src="{{asset('images/Kapreze.jpg')}}">
        </article>
        {{-- ФОТО--}}

        {{-- ИНГРЕДИЕНТЫ --}}
        <article class="row">
            <div class="col-8">
                <ul class="list-group">
                    <li class="list-group-item">
                        <p class="font-italic h-100 cuprum">
                            Моцарелла "Буффало"
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="font-italic  h-100 cuprum">
                            Томаты черри
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="font-italic  h-100 cuprum">
                            Соус песто
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="font-italic  h-100 cuprum">
                            Руккола
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="font-italic  h-100 cuprum">
                            Базилик (Свежий)
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="font-italic  h-100 cuprum">
                            Бальзамическая крем-редукция
                        </p>
                    </li>
                </ul>
            </div>



            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <p class="text-right font-italic  h-100 cuprum">
                            100 гр
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="text-right font-italic  h-100 cuprum">
                            100 гр
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="text-right font-italic  h-100 cuprum">
                            20 гр
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="text-right font-italic  h-100 cuprum">
                            50 гр
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="text-right font-italic  h-100 cuprum">
                            5 гр
                        </p>
                    </li>

                    <li class="list-group-item">
                        <p class="text-right font-italic  h-100 cuprum">
                            5 гр
                        </p>
                    </li>
                </ul>
            </div>
        </article>
        {{-- ИНГРЕДИЕНТЫ --}}

        <br>

        {{-- ТЕХНОДОГИЯ ПРИГОТОВЛЕНИЯ --}}
        <div class="row">
            <div class="col m-4">
                <p class="cuprum h4 mb-4">
                    <b>
                        ТЕХНОЛОГИЯ ПРИГОТОВЛЕНИЯ
                    </b>
                </p>

                <div class="round bg-dark text-white mb-3 ">
                    <p class="lead">
                        1
                    </p>
                </div>

                <p class="cuprum">
                    Рвем листья рукколы и базилика, томаты нарезаем пополам.
                </p>

                <div class="round bg-dark text-white mb-3">
                    <p class="lead">
                        2
                    </p>
                </div>

                <p class="cuprum">
                    Сыр "Буффало" кусочками добавляем к рукколе и томатам.
                </p>
                <div class="round bg-dark text-white mb-3">
                    <p class="lead">
                        3
                    </p>
                </div>

                <p class="cuprum">
                    Заправляем соусом песто и перемешиваем.
                </p>

            </div>
        </div>
        {{-- ТЕХНОДОГИЯ ПРИГОТОВЛЕНИЯ --}}

        {{-- ДОПОЛНИТЕЛЬНО --}}
        <div class="row">
            <div class="col m-4 border-dark border-left border-right border-bottom border-top pt-3">
                <p class="cuprum h4 ">
                    <b>
                        ДОПОЛНИТЕЛЬНО
                    </b>
                </p>

                <div>
                    <p class="cuprum">
                      Соус "Песто" (если ограничены во времени, можно купить),
                        но можно воспользоваться нашим рецептом соуса
                        <a
                            href="">"Песто"
                        </a>.

                    <p class="cuprum ">
                        <b>
                            Вкусное блюдо готово, ПРИЯТНОГО АППЕТИТА!!!
                        </b>
                    </p>
                </div>
            </div>
        </div>
        {{-- ДОПОЛНИТЕЛЬНО --}}
    </main>
</main>
@endsection
