@extends('layouts.app')

@section('content')
    <div class="col-md-12 marquee">
        <marquee behavior="alternate" direction="left" bgcolor="white">
            Lorem ipsum dolor sit amet...
        </marquee>
    </div>
    <main class="pb-4 main-block">
        <div class="row">
            <div class="mx-auto col-md-7 bg-white text-center " style="height: 100px;">
                <div class="col-md-3 d-inline-block" style="background-color: red; height: 100px">

                </div>
                <div class="col-md-8 d-inline-block" style="background-color: gray; height: 100px">

                </div>
            </div>
        </div>
    </main>
@endsection