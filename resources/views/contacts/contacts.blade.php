@extends('layouts.layout')
@section('content')

    <main class="container-sm mt-5 mb-2">
        <p class="h2 text-comfortaa">
            КОНТАКТНАЯ ИНФОРМАЦИЯ
        </p>

        <p class="h5 cuprum mb-3">
            Индивидуальный пердприниматель: Дорошенко Павел Олегович
        </p>
        <p class="h5 cuprum mb-3">
            УНП: 193046002
        </p>

        <p class="h5 cuprum mb-3">
            Адрес: Беларусь 220002 г.Минск улица Червякова 2-5
        </p>

        <p class="h5 cuprum mb-3">
            Имейл: printcodestudio@gmail.com
        </p>

        <form  method="POST" action="{{ asset('send_recipe') }}" enctype="multipart/form-data">
            <input name="_token" type="hidden" value="{{ csrf_token() }}">

        <div class="form-group ">
            <label for="exampleFormControlInput1">
                <p class="cuprum">
                    ВВЕДИТЕ ВАШ ИМЕИЛ
                </p>
            </label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">
                <p class="cuprum">
                    ВАШЕ ИМЯ
                </p>
            </label>
            <input type="text"  name="name" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group" >
            <label for="exampleFormControlTextarea1">
                <p class="cuprum">
                    ТЕКСТ
                </p>
            </label>
         </div>
            <textarea class="form-control " name="recipe" type="text"
                      id="exampleFormControlTextarea1"
                      rows="10">
                </textarea>
            <div class="form-group text-right mt-3 mb-3">
                <button type="submit" value="send" class="btn btn-success ml-2 cuprum">
                    ОТПРАВИТЬ
                </button>
            </div>

        </form>
        </main>



@endsection
