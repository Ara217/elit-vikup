@extends('layouts.app')
@section('title', 'О нас')

@section('content')
    <div class="col-md-12 marquee">
        <marquee behavior="scroll" direction="left" bgcolor="white">
            Покупаем элитный алкоголь по самым высоким ценам.
        </marquee>
    </div>
    <main class="pb-4 main-block">
        <div class="row">
            <div class="mx-auto col-md-7 bg-white {{--text-center--}} h-1040">
                <div class="container-fluid h-100">
                    <div class="row h-100">
                        @include('main.templates.left-side-bar')
                        <main class="col bg-faded py-3">
                            О нас
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection