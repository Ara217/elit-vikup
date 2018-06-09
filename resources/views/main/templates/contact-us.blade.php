@extends('layouts.app')
@section('title', 'Связ с нами - elitvikup.com')

@section('content')
    <div class="col-md-12 marquee">
        @include('main.templates.marquee')
    </div>
    <main class="main-block">
        <div class="row content-block">
            <div class="mx-auto col-md-7 bg-white {{--text-center--}}" >
                <div class="container-fluid ">
                    <div class="row ">
                        @include('main.templates.left-side-bar')
                        <main class="col bg-faded py-3">
                            <h2>Связ с нами</h2>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection