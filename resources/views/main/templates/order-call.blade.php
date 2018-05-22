@extends('layouts.app')

@section('content')
    <div class="col-md-12 marquee">
        <marquee behavior="alternate" direction="left" bgcolor="white">
            Lorem ipsum dolor sit amet...
        </marquee>
    </div>
    <main class="pb-4 main-block">
        <div class="row">
            <div class="mx-auto col-md-7 bg-white h-805">
                <div class="container-fluid h-100">
                    <div class="row h-100">
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
                                    <input type="number" class="form-control" id="phoneNumber" placeholder="Номер телефона" name="phoneNumber">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Заказать" style="background-color: #222938">
                            </form>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection