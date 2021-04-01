@extends('home.home')
@section('content')
    {{-- Гордон Рамзи --}}
    <main class="container-md border-right border-left border-dark">
        <table class="table table-striped table-hover">
            @foreach($chefs as $chef)
            <tbody>
            <tr>
                <td>

                        <a class="text-decoration-none text-black" href="{{ route('chef',['id'=>$chef->id])}}">
                            <p class="cuprum">
                                {{ $chef->name_chef }}
                            </p>
                            <img class="img-fluid"
                                 width="100px"
                                 height="100px"
                                 src="{{ asset($chef->image_chef) }}">
                        </a>

                </td>
                <td>
                    <p class="cuprum">
                        {{ $chef->chef_description_1 }}
                    </p>
                </td>
                {{--КУХНЯ--}}
                <td>
                        <p class="cuprum">
                            {{ $chef->chef_description_2 }}
                        </p>
                    </a>
                </td>
                {{--КУХНЯ--}}
            </tr>

            </tbody>
            @endforeach
        </table>
    </main>
    {{-- Гордон Рамзи --}}

@endsection
