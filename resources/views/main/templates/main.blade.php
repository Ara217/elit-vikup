@extends('layouts.app')

@section('content')
    <div class="col-md-12 marquee">
        <marquee behavior="alternate" direction="left" bgcolor="white">
            Lorem ipsum dolor sit amet...
        </marquee>
    </div>
    <main class="pb-4 main-block">
        <div class="row">
            <div class="mx-auto col-md-7 bg-white text-center">
                <div class="container-fluid h-100">
                    <div class="row h-100">
                        @include('main.templates.left-side-bar')
                        <main class="col bg-faded py-3">
                            <h3>Продать алкоголь</h3>
                            <p>
                                Скупка элитного алкоголя ! Скупка виски ! Скупка вина ! Скупка коньяка !
                            </p>
                            <p>
                                Компания Вип-Выкуп - Ваш надежный партнер если интересует скупка алкоголя в день обращения!
                                Нам можно продать алкоголь в Москве, продать алкоголь в Санкт-Петербурге, продать алкоголь в Самаре, продать алкоголь в Ростове-на-Дону, продать алкоголь в Перми, продать алкоголь в Анапе, продать алкоголь в Саранске и практически в любом другом городе России !
                            </p>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection