@extends('home.home')
@section('content')
    {{-- Гордон Рамзи --}}
    <main class="container-md border-right border-left border-dark">
        <table class="table table-striped table-hover">
            <tbody>
            <tr>
                <td> @foreach($lists as $list)
                        {{ $list->id }}
                        <a href="{{ route('chef',['id'=>$list->id])}}">
                            <p class="cuprum">Gordon Ramzi</p>
                            <img class="img-fluid" width="100px" height="100px" src="{{ asset('images/Gordon.jpg') }}">
                        </a>

                    @endforeach
                </td>

                <td>
                    <p class="cuprum">ШЕФ</p>
                </td>
                {{--КУХНЯ--}}
                <td>
                    <a href=""><p class="cuprum">КУХНЯ</p></a>
                </td>
                {{--КУХНЯ--}}
            </tr>
            </tbody>
        </table>
    </main>
    {{-- Гордон Рамзи --}}

@endsection
