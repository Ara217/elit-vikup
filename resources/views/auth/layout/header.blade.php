<nav class="navbar bg-faded  navbar-custom">
    <div class="container">
        <div class="nav navbar-nav pull-sm-left">
            {{--<img src="{{asset('/images/fireplace-last.png')}}">--}}
        </div>
        <ul class="nav navbar-nav navbar-logo mx-auto">
            <a href="/admin" class="mx-auto">
                <img src="{{asset('images/logo-brand.png')}}">
            </a>
        </ul>
        <ul class="nav navbar-nav pull-sm-right">
            @guest
                <li><a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else
                <li><a class="nav-link text-white" href="{{ route('call-request') }}">Звонки</a></li>
                {{--<li><a class="nav-link text-white" href="{{ route('mail-request') }}">Письма</a></li>--}}
                <li class="nav-item dropdown">
                    <a class="nav-link text-white" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    {{--<a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                        {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                    {{--</a>--}}
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>