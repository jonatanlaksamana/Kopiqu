<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
@include('layouts.PageFoundation.AdminCSS')
</head>
<body class="animsition">
<div class="page-wrapper">


    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="{{asset('storage/img/brand/logo.jpg')}}" width="40%" alt="KopiQu Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="{{route('admin.panel')}}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard Admin</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">

                        </ul>
                    </li>
                    <li>
                        <a href="{{route('view.productlist')}}">
                            <i class="fas fa-chart-bar"></i>Product List</a>
                    </li>
                    <li>
                        <a href="{{route('view.orderlist')}}">
                            <i class="fas fa-table"></i>OrderList</a>
                    </li>


                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <div class="header-button">

                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="{{asset('storage/img/adminprofile/profile.png')}}"  />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#"></a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="content">
                                                <h5 class="name">

                                                    <a href="#">{{$adminlogin->name}}</a>
                                                </h5>
                                                <span class="email">{{$adminlogin->email}}</span>

                                            </div>
                                            <div class="content">
                                                <h5 class="name">

                                                    <a href="{{route('index')}}">home</a>
                                                </h5>


                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">


                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
@yield('content')
    </div>
</div>


@include('layouts.PageFoundation.AdminScript')
<script>
    $('#editorder').on('show.bs.modal', function (e) {
        // do something...
        var button = $(e.relatedTarget);
        var data = button.data('orderid');

        var modal = $(this);
        modal.find('.modal-body #id').val(data);

    })
</script>
</body>
</html>
