<nav class="navbar navbar-expand-md navbar-light navbar-custom">
    <div class="container">
        {{--<img src="{{asset('/images/fireplace-last.png')}}">--}}
        {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
        {{--{{ config('app.name', 'Laravel') }}--}}
        {{--</a>--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a href="/" class="mx-auto">
                <img src="{{asset('images/logo-brand.png')}}" alt="">
            </a>
            <ul>
                <li>
                    <a class="nav-link text-white" href="{{ route('login') }}">О нас</a>
                </li>
                <li>
                    <a class="nav-link text-white" href="{{ route('register') }}">Связ с нами</a>
                </li>
                <li>
                    <a class="nav-link text-white" href="{{ route('register') }}">Номера телефонов</a>
                </li>
            </ul>
        </div>
    </div>
</nav>