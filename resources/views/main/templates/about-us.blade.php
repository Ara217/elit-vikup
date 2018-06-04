@extends('layouts.app')
@section('title', 'О нас - elitvikup.com')

@section('content')
    <div class="col-md-12 marquee">
        @include('main.templates.marquee')
    </div>
    <main class="main-block">
        <div class="row content-block">
            <div class="mx-auto col-md-7 bg-white {{--text-center--}}">
                <div class="wrapper">
                    <!-- Sidebar Holder -->
                @include('main.templates.left-side-bar')
                <!-- Page Content Holder -->
                    <div id="content">
                        @include('main.templates.menu-button')
                        <div>
                            <h3>О нас</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection