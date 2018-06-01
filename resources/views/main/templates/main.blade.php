@extends('layouts.app')

@section('content')
    <div class="col-md-12 marquee">
        <marquee behavior="scroll" direction="left" bgcolor="white">
            Покупаем элитный алкоголь по самым высоким ценам.
        </marquee>
    </div>
    <main class="main-block">
        <div class="row content-block">
            <div class="mx-auto col-md-7 bg-white">
                <div class="container-fluid ">
                    <div class="row ">
                        @include('main.templates.left-side-bar')
                        <main class="col bg-faded py-3">
                            @yield('drink_content')
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection