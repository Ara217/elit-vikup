{{--<nav class="navbar bg-faded  navbar-custom">--}}
    {{--<div class="container col-md-10">--}}
        {{--<div class="nav navbar-nav pull-sm-left">--}}
            {{--<img src="{{asset('/images/fireplace-last.png')}}">--}}
        {{--</div>--}}
        {{--<ul class="nav navbar-nav navbar-logo mx-auto">--}}
            {{--<a href="/" class="mx-auto">--}}
                {{--<img src="{{asset('images/logo-brand.png')}}">--}}
            {{--</a>--}}
        {{--</ul>--}}
        {{--<ul class="nav navbar-nav pull-sm-right">--}}
            {{--<li>--}}
                {{--<a class="nav-link text-white" href="{{ route('order-call') }}">Заказать звонок</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="nav-link text-white" href="{{ route('send-email') }}">Отправить Е-mail</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</nav>--}}
<nav class="navbar bg-faded  navbar-custom">
    <div class="container">
        <div >
            <img src="{{asset('/images/fireplace-2.png')}}">
        </div>
        <ul >
            <a href="/" class="mx-auto">
                <img src="{{asset('images/logo-brand.png')}}">
            </a>
        </ul>
        <ul >
            <li>
                <a class="nav-link text-white" href="{{ route('order-call') }}">Заказать звонок</a>
            </li>
            <li>
                <a class="nav-link text-white" href="{{ route('send-email') }}">Отправить Е-mail</a>
            </li>
            <li>
                <a class="nav-link text-white" href="{{ route('about-us') }}">О нас</a>
            </li>
        </ul>
    </div>
</nav>