@extends('home.home')
@section('content')

    <main class="container-sm">

            <section class="block-container card-header border-right border-left border-dark">
                <div class="logo mt-5 mb-5">
                    <a class="navbar-brand"
                       href="{{ route('home') }}">
                        <p class="text-center mb-1 text-inter h3 text-inter text-dark">
                            ЕДА
                        </p>
                        <hr class="hr">
                        <p class="text-center mt-1 text-inter h3 text-inter h3 text-dark">
                            HELP
                        </p>
                    </a>
                </div>

        <form  method="POST" action="{{ asset('send_recipe') }}">
            <input name="_token" type="hidden" value="{{ csrf_token() }}">

            <div class="form-group ">
                <label for="exampleFormControlInput1">
                    <p class="cuprum">
                        ВВЕДИТЕ ВАШ ЕМЕИЛ
                    </p>
                </label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">
                    <p class="cuprum">
                        ВАШЕ ИМЯ
                    </p>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">
                    <p class="cuprum">
                        КАТЕГОРИЯ РЕЦЕПТА
                    </p>
                </label>

                <select class="form-control" type="text" id="exampleFormControlSelect1">
                    <option></option>
                    <option>
                        <p class="text-comfortaa">
                            ЗАКУСКА
                        </p>
                    </option>

                    <option>
                        <p class="text-comfortaa">
                            САЛАТ
                        </p>
                    </option>

                    <option>
                        <p class="text-comfortaa">
                            КРЕМ СУП
                        </p>
                    </option>

                    <option>
                        <p class="text-comfortaa">
                            ПАСТА
                        </p>
                    </option>

                    <option>
                        <p class="text-comfortaa">
                            РИЗОТТО
                        </p>
                    </option>

                    <option>
                        <p class="text-comfortaa">
                            МЯСО
                        </p>
                    </option>

                    <option>
                        <p class="text-comfortaa">
                            РЫБА
                        </p>
                    </option>

                    <option>
                        <p class="text-comfortaa">
                            ДИСЕРТЫ
                        </p>
                    </option>

                    <option>
                        <p class="text-comfortaa">
                            НАПИТКИ
                        </p>
                    </option>

                    <option>
                        <p class="text-comfortaa">
                            СУШИ
                        </p>
                    </option>

                    <option>
                        <p class="text-comfortaa">
                            ИЗЫСКАНОЕ
                        </p>
                    </option>

                    <option>
                        <p class="text-comfortaa">
                            СОУС
                        </p>
                    </option>

                </select>
            </div>

            <div class="form-group" >
                <label for="exampleFormControlTextarea1">
                    <p class="cuprum">
                        РЕЦЕПТ
                    </p>
                </label>

                <textarea class="form-control " type="text"
                          id="exampleFormControlTextarea1"
                          rows="10">
                </textarea>

                    <div class="form-group mt-4">
                        <label for="exampleFormControlFile1">
                            <p class="cuprum">
                                ЗАГРУЗИТЕ ФОТО
                            </p>
                        </label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>


            </div>

            <div class="form-group text-right mt-5 mb-3">
                <button type="submit" value="send" class="btn btn-success ml-2 cuprum">
                    ОТПРАВИТЬ
                </button>
            </div>
        </form>
            </section>
    </main>

@endsection
