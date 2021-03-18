@extends('layouts.head')
@section('app')

<header class="card-header container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                {{--Логотип--}}
                <a href="{{ route('home')}}" class="navbar-brand">
                    <p class="text-center mb-1 text-inter h3 text-inter text-white">ЕДА</p>
                    <hr class="hr">
                    <p class="text-center mt-1 text-inter h3 text-inter h3 text-white">HELP</p>
                </a>
                {{--Логотип--}}

                {{--Регистрация--}}
                <div class="container">
                    {{--Форма регистрации--}}
                    <form class="d-flex">
                        <input class="form-control mr-xl-1 cuprum"
                               name="TextSearch"
                               id="TextSearch"
                               type="search"
                               placeholder="ПОИСК"
                               aria-label="Search">
                        @csrf
                        <button class="btn btn-outline-success margin cuprum"
                                type="submit"
                                name="search"
                                id="search">
                            ПОИСК
                        </button>

                    {{--    <thead>
                        <tr>
                            <th>name</th>
                            <th>ingredients</th>
                            <th>id</th>
                        </tr>
                        </thead>
                        <tbody></tbody>--}}

                     {{--   <script>
                            $(document).ready(function ()
                            {
                                function load_data(full_text_search_query = '')
                                {
                                    var _token = $("input[name=_token]").val();
                                    $.ajax({
                                        url:"{{route('TextSearch.action')}}",
                                        method:"POST",
                                        data:{full_text_search_query:full_text_search_query, _token:_token},
                                        dataType:"json",
                                        success:function (data)
                                        {
                                            var output = '';
                                            if(data.length > 0)
                                            {
                                                for(var count = 0; count < data.length; count++)
                                                {
                                                    output += '<tr>';
                                                    output += '<td>'+data[count].Name+'</td>';
                                                    output += '<td>'+data[count].ingredients+'</td>';
                                                    output += '<td>'+data[count].id+'</td>';
                                                    output += '</tr>';
                                                }
                                            }
                                            else
                                            {
                                                output += '<tr>';
                                                output += '<td colspan="6">No Data Found</td>';
                                                output += '</tr>';
                                            }
                                            $('tbody').html(output);
                                        }


                                    });
                                }
                                $('#search').click(function(){
                                    var full_text_search_query = $('#full_text_search').val();
                                    load_data(full_text_search_query);
                                });
                            });
                        </script>--}}


                        @if (Route::has('login'))

                            @auth

                            @else
                                <a href="{{ route('login') }}" button class="btn btn-success margin cuprum">
                                    ВХОД
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" button class="btn btn-success margin cuprum">
                                        РЕГИСТРАЦИЯ
                                    </a>
                                @endif

                            @endauth

                        @endif
                        {{--Форма регистрации--}}

                    </form>
                {{--Форма--}}

                {{--Форма регистрации на бустрап--}}
                    {{--<div class="modal fade" id="registration" tapindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabelRegistration"></h5>
                                    <button class="btn-close" data-dismiss="modal" aria-label="close"></button>
                                </div>
                                --}}{{--Тело регистрации--}}{{--
                                <div class="modal-body">
                                    <form class="border mt-5 mb-5">
                                        <div class="form-group m-4">
                                            <p class="text-center lead mt-5 mb-5 cuprum">
                                                <b>РЕГИСТРАЦИЯ</b>
                                            </p>
                                            <input type="text" class="form-control cuprum" name="login" placeholder="Логин">
                                        </div>
                                        <div class="form-group m-4">
                                            <input type="email" class="form-control cuprum" id="Email" aria-describedby="emailHelp" placeholder="Электронная почта">
                                        </div>
                                        <div class="form-group m-4">
                                            <input type="password" class="form-control cuprum" id="Password" placeholder="Пароль">
                                        </div>
                                        <div class="form-check m-4">
                                            <input type="checkbox" class="form-check-input" id="Check">
                                            <label class="form-check-label" for="Check">Получить навосную рассылку</label>
                                        </div>
                                        <div class="text-center mb-5">
                                            <button  type="submit" class="btn btn-success cuprum">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                                        </div>
                                        <div>
                                            <p class="text-center">
                                                Нажимая на кнопку «Зарегистрироваться», вы подтверждаете свое согласия с условиями <a class="text-success text-decoration-none" href="">пользовательского соглашения.</a>

                                                Уже зарегистрированы? <a class="text-success text-decoration-none" href=""> Войдите</a>
                                            </p>
                                        </div>
                                        --}}{{--Тело регистрации--}}{{--
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success cuprum" data-dismiss="modal">ВЫХОД</button>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                {{--Форма регистрации на бустрап--}}

                {{--Форма регистрации на бустрап--}}
                    {{--<div class="modal fade" id="authorization" tapindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabelAuthorization"></h5>
                                    <button class="btn-close" data-dismiss="modal" aria-label="close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="border mt-5 mb-5">
                                        <div class="form-group m-4">
                                            <p class="text-center lead mt-5 mb-5 cuprum">
                                                <b>ВХОД</b>
                                            </p>
                                        </div>
                                        <div class="form-group m-4">
                                            <input type="email" class="form-control cuprum" id="Email" aria-describedby="emailHelp" placeholder="Электронная почта">
                                        </div>
                                        <div class="form-group m-4">
                                            <input type="password" class="form-control cuprum" id="Password" placeholder="Пароль">
                                        </div>
                                        <div class="form-check m-4">
                                            <input type="checkbox" class="form-check-input" id="Check">
                                            <label class="form-check-label" for="Check">Получить навосную рассылку</label>
                                        </div>
                                        <div class="text-center mb-5">
                                            <button  type="submit" class="btn btn-success cuprum">ВОЙТИ</button>
                                        </div>
                                        <div>
                                            <p class="text-center">
                                                <a class="text-success text-decoration-none cuprum" href="">Забыли пароль?</a>

                                                Ещё не с нами? <a class="text-success text-decoration-none cuprum" href="">Зарегистрируйтесь</a>
                                            </p>
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success cuprum" data-dismiss="modal">ВЫХОД</button>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                    {{--Форма регистрации на бустрап--}}
                </div>
            </div>
        </nav>
    </header>

@show

