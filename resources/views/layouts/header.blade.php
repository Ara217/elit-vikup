<nav class="navbar bg-faded  navbar-custom">
    <div class="container">
        <div class="header-logo">
            <img src="{{asset('/images/fireplace-2.png')}}" alt="Элит выкуп">
        </div>
        <ul class="nav navbar-nav navbar-logo mx-auto logo-block">
            <a href="/" class="mx-auto">
                <img src="{{asset('images/ruseren-logo2.png')}}" class="logo-img" alt="Элит выкуп">
            </a>
        </ul>
        <ul class="nav navbar-nav pull-sm-right">
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