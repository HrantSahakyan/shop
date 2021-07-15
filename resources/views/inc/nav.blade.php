{{--<nav class="navbar navbar-expand-md navbar-light shadow-sm">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand text-white" href="{{ url('/') }}">--}}
{{--            Shop--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <!-- Left Side Of Navbar -->--}}
{{--            <ul class="navbar-nav mr-auto ml-5">--}}
{{--                <form class="form-inline my-2 my-lg-0">--}}
{{--                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>--}}
{{--                </form>--}}
{{--            </ul>--}}

{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    @if (Route::has('login'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link text-white btn btn-outline-light mr-2" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}

{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link text-white btn btn-outline-light" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-white" href="/basket">--}}
{{--                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-white" href="/orders">--}}
{{--                            Orders--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"--}}
{{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::user()->name }}--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}

{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item">
                                <a title="Hotline: (+374) 77 77-77-77" href="#"><span
                                        class="icon label-before fa fa-mobile"></span>Hotline: (+374) 77 77-77-77</a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-menu right-menu">
                        @guest
                            <ul>
                                @if (Route::has('login'))
                                    <li class="menu-item">
                                        <a title="Register or Login" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="menu-item">
                                        <a title="Register or Login"
                                           href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                @else
                                    @if(Auth::user()->user_type === 'customer')
                                        <div class="dropdown user-dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown dropdown-toggle text-white"
                                               href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false" v-pre>
                                                {{ Auth::user()->name . ' (' . Auth::user()->user_type . ')'}}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                 aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="/profile">
                                                    {{ __('My page') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                    @if(Auth::user()->user_type === 'company')
                                        <div class="dropdown user-dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown dropdown-toggle text-white"
                                               href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false" v-pre>
                                                {{ Auth::user()->name . ' (' . Auth::user()->user_type . ')'}}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                 aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="/profile">
                                                    {{ __('Shop page') }}
                                                </a>
                                                <a class="dropdown-item" href="/dashboard">
                                                    {{ __('Dashboard') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                            </ul>
                        @endguest
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="/" class="link-to-home"><img src="{{asset('assets/images/logo.png')}}" alt="Shop logo"></a>
                    </div>

                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="#" id="form-search-top" name="form-search-top">
                                <input type="text" name="search" value="" placeholder="Search here...">
                                <button form="form-search-top" type="button"><i class="fa fa-search"
                                                                                aria-hidden="true"></i></button>
                                <div class="wrap-list-cate">
                                    <input type="hidden" name="product-cate" value="0" id="product-cate">
                                    <a href="#" class="link-control">All Category</a>
                                    <ul class="list-cate">
                                        <li class="level-0">All Category</li>
                                        <li class="level-1">-Electronics</li>
                                        <li class="level-2">Batteries & Chargens</li>
                                        <li class="level-2">Headphone & Headsets</li>
                                        <li class="level-2">Mp3 Player & Acessories</li>
                                        <li class="level-1">-Smartphone & Table</li>
                                        <li class="level-2">Batteries & Chargens</li>
                                        <li class="level-2">Mp3 Player & Headphones</li>
                                        <li class="level-2">Table & Accessories</li>
                                        <li class="level-1">-Electronics</li>
                                        <li class="level-2">Batteries & Chargens</li>
                                        <li class="level-2">Headphone & Headsets</li>
                                        <li class="level-2">Mp3 Player & Acessories</li>
                                        <li class="level-1">-Smartphone & Table</li>
                                        <li class="level-2">Batteries & Chargens</li>
                                        <li class="level-2">Mp3 Player & Headphones</li>
                                        <li class="level-2">Table & Accessories</li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="wrap-icon right-section">
                        <div class="wrap-icon-section minicart">
                            <a href="#" class="link-direction">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="index">4 items</span>
                                    <span class="title">CART</span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">
                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                            <li class="menu-item home-icon">
                                <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                                                                    aria-hidden="true"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="/store" class="link-term mercado-item-title">Store</a>
                            </li>
                            <li class="menu-item">
                                <a href="/about" class="link-term mercado-item-title">About Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="/contact" class="link-term mercado-item-title">Contact Us</a>
                            </li>
                            @if(Auth::check() === false or Auth::user()->user_type === 'customer')

                                <li class="menu-item">
                                    <a href="/cart" class="link-term mercado-item-title">Cart</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/checkout" class="link-term mercado-item-title">Checkout</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
