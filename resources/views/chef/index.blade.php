@extends('home.home')
@section('content')
    {{-- Гордон Рамзи --}}
    <main class="container-md border-right border-left border-dark">
        <table class="table table-striped table-hover">

            <tbody>
            <tr>
                <td> @foreach($chefs as $chef)
                        <a href="{{ route('chef',['id'=>$chef->id])}}">
                            <p class="cuprum">
                                {{ $chef->name_chef }}
                            </p>

                            <img class="img-fluid"
                                 width="100px"
                                 height="100px"
                                 src="{{ asset($chef->image_chef) }}">
                        </a>
                    @endforeach
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
        </table>
    </main>
    {{-- Гордон Рамзи --}}

@endsection
