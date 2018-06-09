@extends('layouts.app')
@section('title', 'Заказать звонок - elitvikup.com')

@section('content')
    <div class="col-md-12 marquee">
        @include('main.templates.marquee')
    </div>
    <main class="main-block">
        <div class="row content-block">
            <div class="mx-auto col-md-7 bg-white">
                <div class="wrapper">
                    <!-- Sidebar Holder -->
                @include('main.templates.left-side-bar')
                <!-- Page Content Holder -->
                    <div id="content" class="w-100">
                        @include('main.templates.menu-button')
                        <div>
                            <form id="orderCall">
                                <h2>Заказать звонок</h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection