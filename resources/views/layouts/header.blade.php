{{--<nav class="navbar navbar-expand-md navbar-light navbar-custom">--}}
    {{--<div class="container">--}}
        {{--<img src="{{asset('/images/fireplace-last.png')}}">--}}
        {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
        {{--{{ config('app.name', 'Laravel') }}--}}
        {{--</a>--}}

        {{--<div class="collapse navbar-collapse">--}}
            {{--<a href="/" class="mx-auto">--}}
                {{--<img src="{{asset('images/logo-brand.png')}}">--}}
            {{--</a>--}}
            {{--<ul>--}}
                {{--<li>--}}
                    {{--<a class="nav-link text-white" href="{{ route('about-us') }}">Заказать звонок</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a class="nav-link text-white" href="{{ route('contact-us') }}">Отправить Е-mail</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}
<nav class="navbar bg-faded  navbar-custom">
    <div class="container">
        <div class="nav navbar-nav pull-sm-left">
            <img src="{{asset('/images/fireplace-last.png')}}">
        </div>
        <ul class="nav navbar-nav navbar-logo mx-auto">
            <a href="/" class="mx-auto">
                <img src="{{asset('images/logo-brand.png')}}">
            </a>
        </ul>
        <ul class="nav navbar-nav pull-sm-right">
            <li>
                <a class="nav-link text-white" href="{{ route('order-call') }}">Заказать звонок</a>
            </li>
            <li>
                <a class="nav-link text-white" href="{{ route('send-email') }}">Отправить Е-mail</a>
            </li>
        </ul>
    </div>
</nav>