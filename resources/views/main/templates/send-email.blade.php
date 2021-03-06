@extends('layouts.app')
@section('title', 'Отправить Е-mail - elitvikup.com')

@section('content')
    <div class="col-md-12 marquee">
        @include('main.templates.marquee')
    </div>
    <main class="main-block">
        <div class="row content-block">
            <div class="mx-auto col-md-7 bg-white" >
                <div class="wrapper">
                    <!-- Sidebar Holder -->
                @include('main.templates.left-side-bar')
                <!-- Page Content Holder -->
                    <div id="content" class="w-100">
                        @include('main.templates.menu-button')
                        <div class="col bg-faded py-3">
                            <form id="sendEmail">
                                <h2>Отправить Е-mail</h2>
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
                                    <textarea class="form-control form-bg" id="emailDescription" name="description" rows="5" placeholder="Введите ваш текст"></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary btn-bg" value="Отправить">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection