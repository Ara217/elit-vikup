@extends('layouts.app')
@section('title', 'Заказать звонок')

@section('content')
    <div class="col-md-12 marquee">
        @include('main.templates.marquee')
    </div>
    <main class="main-block">
        <div class="row content-block">
            <div class="mx-auto col-md-7 bg-white">
                <div class="container-fluid ">
                    <div class="row ">
                        @include('main.templates.left-side-bar')
                        <main class="col bg-faded py-3">
                            <form id="orderCall">
                                <h3>Заказать звонок</h3>
                                <div class="form-group">
                                    <label for="username">Ваше имя:</label>
                                    <input type="text" class="form-control form-bg" id="username" placeholder="Ваше имя" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="phoneNumber">Номер телефона:</label>
                                    <input type="text" class="form-control form-bg" id="phoneNumber" placeholder="Номер телефона" name="phoneNumber">
                                </div>
                                <input type="submit" class="btn btn-primary btn-bg" value="Заказать">
                            </form>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection