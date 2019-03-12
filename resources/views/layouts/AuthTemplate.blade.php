<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sally Coffe</title>
    {{--css load--}}
    @include('layouts.PageFoundation.CssLoad')

</head>
<body data-spy="scroll" data-target="#navbar-example">
{{--navbar--}}

<div id="preloader"></div>

<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <!-- Navigation -->
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                <h1><span>Coffe</span>qu</h1>

                                <!-- Uncomment below if you prefer to use an image logo -->
                                <!-- <img src="img/logo.png" alt="" title=""> -->
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a class="page-scroll" href="{{route('index')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('order.cart')}}" >Shooping Cart</a>
                                </li>

                                </li>

                                @guest

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    @if(Auth::user()->role === 'admin')
                                        <li>
                                            <a class="" href="{{route('admin.panel')}}">Admin</a>
                                        </li>
                                    @endif
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{ Auth::user()->name }}<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>

                                                </a></li>

                                        </ul>
                                    </li>


                                @endguest
                            </ul>
                        </div>
                        <!-- navbar-collapse -->
                    </nav>
                    <!-- END: Navigation -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
</header>


{{--content--}}
@yield('content')

{{--footer--}}
@include('layouts.Snipsets.PublicFooter')
{{--script load--}}
@include('layouts.PageFoundation.ScriptLoad')
</body>
</html>
