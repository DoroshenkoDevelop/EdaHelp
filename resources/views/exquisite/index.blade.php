@extends('home.home')
@section('content')
    {{-- ЗАКУСКИ--}}
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             {{--ЗАГОЛОВОК--}}
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        ИЗЫСКАННОЕ
                    </p>
                </article>
                {{--ЗАГОЛОВОК--}}

                 {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3">
                    @foreach($exquisites as $exquisite)
                        <a class="text-decoration-none"
                           {{ $exquisite->id }}
                           href="{{ route('exquisite',['id'=>$exquisite->id])}}">
                            <img src="{{ asset($exquisite->exquisite_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $exquisite->exquisite_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

                {{--РЕЦЕПТ--}}
                <article class="col-sm-12 col-md-3">
                    @foreach($crabs as $crab)
                        <a class="text-decoration-none"
                           {{ $crab->id }}
                           href="{{ route('exquisite',['id'=>$crab->id])}}">
                            <img src="{{ asset($crab->exquisite_image) }}" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    {{ $crab->exquisite_name}}
                                </b>
                            </p>
                        </a>
                    @endforeach
                </article>
                {{--РЕЦЕПТ--}}

            </div>
        </main>
    </main>
@endsection
