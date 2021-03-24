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
                   <form class="d-flex">
                       <div class="cuprum ya-site-form ya-site-form_inited_no"
                            data-bem="{&quot;action&quot;:&quot;https://yandex.ru/search/site/&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:16,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Yandex Site Search #2454816&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_blank&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:3,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2454816,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;Поиск по сайту&quot;,&quot;input_placeholderColor&quot;:&quot;#000000&quot;,&quot;input_borderColor&quot;:&quot;#000000&quot;}">
                           <form class="d-flex"
                                 action="https://yandex.ru/search/site/"
                                 method="get"
                                 target="_blank"
                                 accept-charset="utf-8">
                               <input type="hidden" name="searchid" value="2454816"/>
                               <input type="hidden" name="l10n" value="ru"/>
                               <input type="hidden" name="reqenc" value=""/>
                               <input type="search" name="text" value=""/>
                               <input class="" type="submit" value="Найти"/>

                           </form>
                       </div>
                       <style
                           type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }
                       </style>
                       <script
                           type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');
                       </script>
                    </form>
                {{--Форма--}}
                </div>
                {{--Форма регистрации--}}
                @if (Route::has('login'))

                    @auth

                    @else
                        <a href="{{ route('login') }}" class="btn btn-success margin cuprum pt-3 pb-3">
                            ВХОД
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-success margin cuprum pt-3 pb-3">
                                РЕГИСТРАЦИЯ
                            </a>
                        @endif

                    @endauth

                @endif
                {{--Форма регистрации--}}
            </div>
        </nav>
    </header>
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
@show

