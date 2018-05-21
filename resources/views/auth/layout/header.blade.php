<nav class="navbar navbar-expand-md navbar-light navbar-custom">
    <div class="container">
        {{--<img src="{{asset('/images/fireplace.png')}}" alt="">--}}
        {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
            {{--{{ config('app.name', 'Laravel') }}--}}
        {{--</a>--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <!-- Left Side Of Navbar -->
            {{--<ul class="navbar-nav mr-auto"></ul>--}}
            <a href="/" class="mx-auto">
                <img src="{{asset('images/logo-brand.png')}}" alt="">
            </a>

            <!-- Right Side Of Navbar -->
            <ul>
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li><a class="nav-link text-white" href="{{ route('call-request') }}">Call Requests</a></li>
                    <li><a class="nav-link text-white" href="{{ route('mail-request') }}">Mail Requests</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>