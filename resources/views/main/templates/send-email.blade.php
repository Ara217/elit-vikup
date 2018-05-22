@extends('layouts.app')

@section('content')
    <div class="col-md-12 marquee">
        <marquee behavior="alternate" direction="left" bgcolor="white">
            Lorem ipsum dolor sit amet...
        </marquee>
    </div>
    <main class="pb-4 main-block">
        <div class="row">
            <div class="mx-auto col-md-7 bg-white h-1040" >
                <div class="container-fluid h-100">
                    <div class="row h-100">
                        @include('main.templates.left-side-bar')
                        <main class="col bg-faded py-3">
                            <form id="sendEmail">
                                <h3>Отправить Е-mail</h3>
                                <div class="form-group">
                                    <label for="username">Ваше имя:</label>
                                    <input type="text" class="form-control form-bg" id="username" placeholder="Ваше имя" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="responseEmail">Email:</label>
                                    <input type="email" class="form-control form-bg" id="responseEmail" placeholder="Введите Е-майл для ответа" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="emailDescription">Текст:</label>
                                    <textarea class="form-control form-bg" id="emailDescription" name="description" rows="5">Введите ваш текст</textarea>
                                </div>
                                <input type="submit" class="btn btn-primary btn-bg" value="Отправить">
                            </form>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection