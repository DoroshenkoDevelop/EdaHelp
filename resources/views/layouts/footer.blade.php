@section('footer')
<footer class="page-footer font-small blue pt-4 border-top rounded-top bg-dark text-white mt-3">

    {{-- КОНТЕНТ--}}
    <div class="container-fluid text-center text-md-left">

        {{-- КОНТЕНТ--}}
        <div class="row">


            <div class="col-md-6 mt-md-0 mt-3">

                {{-- КОНТЕНТ--}}
                <h1 class="text-uppercase text-inter h3">
                        EH
                </h1>
                <p class="text-comfortaa">
                    МИР КУЛИНОРНОГО ИСКУСТВА
                </p>
                {{-- КОНТЕНТ--}}

            </div>



            {{-- ПРАВИЛА И ПОЛИТИКА--}}
            <div class="col-md-3 mb-md-0 mb-3 text-white">

                {{-- ПРАВИЛА И ПОЛИТИКА--}}
                <ul class="list-unstyled cuprum">
                    <li>
                        <a class="text-decoration-none text-white"
                           href="{{ route('home') }}">
                            ГЛАВНАЯ
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none text-white"
                           href="{{ route('contacts') }}">КОНТАКТЫ
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none text-white"
                           href="{{ route('order') }}">
                            ПОЛИТИКА КОНФЕДЕНЦИАЛЬНОСТИ
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none text-white"
                           href="">

                        </a>
                    </li>
                </ul>
                {{-- ПРАВИЛА И ПОЛИТИКА--}}

            </div>



            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase"></h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!"></a>
                    </li>
                    <li>
                        <a href="#!"></a>
                    </li>
                    <li>
                        <a href="#!"></a>
                    </li>
                    <li>
                        <a href="#!"></a>
                    </li>
                </ul>

            </div>


        </div>
        {{-- КОНТЕНТ--}}

    </div>
    {{-- КОНТЕНТ--}}

    {{-- © 2020 DoroshenkoDevelop --}}
    <div class="footer-copyright text-center py-3 text-comfortaa">
        © 2020 DoroshenkoDevelop
    </div>
    {{-- © 2020 DoroshenkoDevelop --}}
</footer>
@show







