@extends('admin_layout')

@section('mobileView')

<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner make-center">
                <div id="logoId">
                    <a class="logo" href="index.html">
                        <img src="{{asset('admin/dash/images/f2g.png')}}" alt="Food2Go" />
                    </a>
                </div>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <li class="active has-sub">
                        <a class="js-arrow" href="{{URL::to('/dashboard')}} ">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <a class="js-arrow" href="#">
                        <i class="fas fa-list-alt"></i>Category</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href={{URL::to('/all-category')}}>All Categories</a>
                        </li>
                        <li>
                            <a href="index2.html">Manage Categories</a>
                        </li>
                    </ul>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-hamburger"></i>Food Items</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">All Foods</a>
                        </li>
                        <li>
                            <a href="index2.html">Manage Food Items</a>
                        </li>
                    </ul>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-cart-arrow-down"></i>Orders</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">All Orders</a>
                        </li>
                        <li>
                            <a href="index2.html">Manage Orders</a>
                        </li>
                    </ul>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Users</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">All Users</a>
                        </li>
                        <li>
                            <a href="index2.html">Manage Orders</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
@endsection



@section('normalViewnavBar')
<aside class="menu-sidebar d-none d-lg-block">
    <div class="make-center center">
        <div id="logoId" class="make-center">
                <a href="#">
                    <img src="{{asset('Admin/dash/images/f2g.png')}}" alt="Food2Go" />
                    <div class="text-bold text-white"> Admin Dashboard</div>
                </a>
        </div>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                <a class="js-arrow" href="{{URL::to('/dashboard')}} ">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-list-alt"></i>Category</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href={{URL::to('/all-category')}}>All Categories</a>
                        </li>
                        <li>
                            <a href="index2.html">Manage Categories</a>
                        </li>
                    </ul>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-hamburger"></i>Food Items</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.html">All Foods</a>
                        </li>
                        <li>
                            <a href="index2.html">Manage Food Items</a>
                        </li>
                    </ul>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-cart-arrow-down"></i>Orders</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.html">All Orders</a>
                        </li>
                        <li>
                            <a href="index2.html">Manage Orders</a>
                        </li>
                    </ul>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Users</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.html">All Users</a>
                        </li>
                        <li>
                            <a href="index2.html">Manage Orders</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
@endsection

@section('dash_header')
<!-- HEADER DESKTOP-->
<header class="header-desktop">
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="header-wrap">
            <form class="form-header" action="" method="POST">
                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                <button class="au-btn--submit" type="submit">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </form>
            <div class="header-button">
                <div class="noti-wrap">
                    <div class="noti__item js-item-menu">
                        <i class="zmdi zmdi-comment-more"></i>
                        <span class="quantity">1</span>
                        <div class="mess-dropdown js-dropdown">
                            <div class="mess__title">
                                <p>You have 2 news message</p>
                            </div>
                            <div class="mess__item">
                                <div class="image img-cir img-40">
                                    <img src="{{asset('admin/dash/images/icon/avatar-06.jpg')}}" alt="Michelle Moreno" />
                                </div>
                                <div class="content">
                                    <h6>Michelle Moreno</h6>
                                    <p>Have sent a photo</p>
                                    <span class="time">3 min ago</span>
                                </div>
                            </div>
                            <div class="mess__item">
                                <div class="image img-cir img-40">
                                    <img src="{{asset('admin/dash/images/icon/avatar-04.jpg')}}" alt="Diane Myers" />
                                </div>

                                <div class="content">
                                    <h6>Diane Myers</h6>
                                    <p>You are now connected on message</p>
                                    <span class="time">Yesterday</span>
                                </div>
                            </div>
                            <div class="mess__footer">
                                <a href="#">View all messages</a>
                            </div>
                        </div>
                    </div>
                    <div class="noti__item js-item-menu">
                        <i class="zmdi zmdi-email"></i>
                        <span class="quantity">1</span>
                        <div class="email-dropdown js-dropdown">
                            <div class="email__title">
                                <p>You have 3 New Emails</p>
                            </div>
                            <div class="email__item">
                                <div class="image img-cir img-40">
                                    <img src="{{asset('admin/dash/images/icon/avatar-06.jpg')}}" alt="Cynthia Harvey" />
                                </div>
                                <div class="content">
                                    <p>Meeting about new dashboard...</p>
                                    <span>Cynthia Harvey, 3 min ago</span>
                                </div>
                            </div>
                            <div class="email__item">
                                <div class="image img-cir img-40">
                                    <img src="{{asset('admin/dash/images/icon/avatar-05.jpg')}}" alt="Cynthia Harvey" />
                                </div>
                                <div class="content">
                                    <p>Meeting about new dashboard...</p>
                                    <span>Cynthia Harvey, Yesterday</span>
                                </div>
                            </div>
                            <div class="email__item">
                                <div class="image img-cir img-40">
                                    <img src="{{asset('admin/dash/images/icon/avatar-04.jpg')}}" alt="Cynthia Harvey" />
                                </div>
                                <div class="content">
                                    <p>Meeting about new dashboard...</p>
                                    <span>Cynthia Harvey, April 12,,2018</span>
                                </div>
                            </div>
                            <div class="email__footer">
                                <a href="#">See all emails</a>
                            </div>
                        </div>
                    </div>
                    <div class="noti__item js-item-menu">
                        <i class="zmdi zmdi-notifications"></i>
                        <span class="quantity">3</span>
                        <div class="notifi-dropdown js-dropdown">
                            <div class="notifi__title">
                                <p>You have 3 Notifications</p>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c1 img-cir img-40">
                                    <i class="zmdi zmdi-email-open"></i>
                                </div>
                                <div class="content">
                                    <p>You got a email notification</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c2 img-cir img-40">
                                    <i class="zmdi zmdi-account-box"></i>
                                </div>
                                <div class="content">
                                    <p>Your account has been blocked</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c3 img-cir img-40">
                                    <i class="zmdi zmdi-file-text"></i>
                                </div>
                                <div class="content">
                                    <p>You got a new file</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__footer">
                                <a href="#">All notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                        <div class="image">
                            <img src="{{asset('admin/dash/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                        </div>
                        <div class="content">
                        <a class="js-acc-btn" href="#">{{Session::get('username')}}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="{{asset('admin/dash/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">{{Session::get('username')}}</a>
                                    </h5>
                                    <span class="email">{{Session::get('email')}}</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href={{URL::to('/logout')}}>
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
@endsection


@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">overview</h2>
                        <button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>add item</button>
                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h2>10368</h2>
                                    <span>members online</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                                <div class="text">
                                    <h2>388,688</h2>
                                    <span>items solid</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                                <div class="text">
                                    <h2>1,086</h2>
                                    <span>this week</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                                <div class="text">
                                    <h2>$1,060,386</h2>
                                    <span>total earnings</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart4"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
                            <h3 class="title-2">recent reports</h3>
                            <div class="chart-info">
                                <div class="chart-info__left">
                                    <div class="chart-note">
                                        <span class="dot dot--blue"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note mr-0">
                                        <span class="dot dot--green"></span>
                                        <span>services</span>
                                    </div>
                                </div>
                                <div class="chart-info__right">
                                    <div class="chart-statis">
                                        <span class="index incre">
                                            <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                        <span class="label">products</span>
                                    </div>
                                    <div class="chart-statis mr-0">
                                        <span class="index decre">
                                            <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                        <span class="label">services</span>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-report__chart">
                                <canvas id="recent-rep-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="au-card chart-percent-card">
                        <div class="au-card-inner">
                            <h3 class="title-2 tm-b-5">char by %</h3>
                            <div class="row no-gutters">
                                <div class="col-xl-6">
                                    <div class="chart-note-wrap">
                                        <div class="chart-note mr-0 d-block">
                                            <span class="dot dot--blue"></span>
                                            <span>products</span>
                                        </div>
                                        <div class="chart-note mr-0 d-block">
                                            <span class="dot dot--red"></span>
                                            <span>services</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="percent-chart">
                                        <canvas id="percent-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="title-1 m-b-25">Earnings By Items</h2>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>date</th>
                                    <th>order ID</th>
                                    <th>name</th>
                                    <th class="text-right">price</th>
                                    <th class="text-right">quantity</th>
                                    <th class="text-right">total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>100398</td>
                                    <td>iPhone X 64Gb Grey</td>
                                    <td class="text-right">$999.00</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">$999.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-28 01:22</td>
                                    <td>100397</td>
                                    <td>Samsung S8 Black</td>
                                    <td class="text-right">$756.00</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">$756.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-27 02:12</td>
                                    <td>100396</td>
                                    <td>Game Console Controller</td>
                                    <td class="text-right">$22.00</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">$44.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-26 23:06</td>
                                    <td>100395</td>
                                    <td>iPhone X 256Gb Black</td>
                                    <td class="text-right">$1199.00</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">$1199.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-25 19:03</td>
                                    <td>100393</td>
                                    <td>USB 3.0 Cable</td>
                                    <td class="text-right">$10.00</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">$30.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>100392</td>
                                    <td>Smartwatch 4.0 LTE Wifi</td>
                                    <td class="text-right">$199.00</td>
                                    <td class="text-right">6</td>
                                    <td class="text-right">$1494.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-24 19:10</td>
                                    <td>100391</td>
                                    <td>Camera C430W 4k</td>
                                    <td class="text-right">$699.00</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">$699.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-22 00:43</td>
                                    <td>100393</td>
                                    <td>USB 3.0 Cable</td>
                                    <td class="text-right">$10.00</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">$30.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h2 class="title-1 m-b-25">Top countries</h2>
                    <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                        <div class="au-card-inner">
                            <div class="table-responsive">
                                <table class="table table-top-countries">
                                    <tbody>
                                        <tr>
                                            <td>United States</td>
                                            <td class="text-right">$119,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>Australia</td>
                                            <td class="text-right">$70,261.65</td>
                                        </tr>
                                        <tr>
                                            <td>United Kingdom</td>
                                            <td class="text-right">$46,399.22</td>
                                        </tr>
                                        <tr>
                                            <td>Turkey</td>
                                            <td class="text-right">$35,364.90</td>
                                        </tr>
                                        <tr>
                                            <td>Germany</td>
                                            <td class="text-right">$20,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>France</td>
                                            <td class="text-right">$10,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>Australia</td>
                                            <td class="text-right">$5,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>Italy</td>
                                            <td class="text-right">$1639.32</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                        <div class="au-card-title" style="background-image:url('images/bg-title-
01.jpg');">
                            <div class="bg-overlay bg-overlay--blue"></div>
                            <h3>
                                <i class="zmdi zmdi-account-calendar"></i>26 April, 2018</h3>
                            <button class="au-btn-plus">
                                <i class="zmdi zmdi-plus"></i>
                            </button>
                        </div>
                        <div class="au-task js-list-load">
                            <div class="au-task__title">
                                <p>Tasks for {{Session::get('username')}}</p>
                            </div>
                            <div class="au-task-list js-scrollbar3">
                                <div class="au-task__item au-task__item--danger">
                                    <div class="au-task__item-inner">
                                        <h5 class="task">
                                            <a href="#">Meeting about plan for Admin Template
2018</a>
                                        </h5>
                                        <span class="time">10:00 AM</span>
                                    </div>
                                </div>
                                <div class="au-task__item au-task__item--warning">
                                    <div class="au-task__item-inner">
                                        <h5 class="task">
                                            <a href="#">Create new task for Dashboard</a>
                                        </h5>
                                        <span class="time">11:00 AM</span>
                                    </div>
                                </div>
                                <div class="au-task__item au-task__item--primary">
                                    <div class="au-task__item-inner">
                                        <h5 class="task">
                                            <a href="#">Meeting about plan for Admin Template
2018</a>
                                        </h5>
                                        <span class="time">02:00 PM</span>
                                    </div>
                                </div>
                                <div class="au-task__item au-task__item--success">
                                    <div class="au-task__item-inner">
                                        <h5 class="task">
                                            <a href="#">Create new task for Dashboard</a>
                                        </h5>
                                        <span class="time">03:30 PM</span>
                                    </div>
                                </div>
                                <div class="au-task__item au-task__item--danger js-load-item">
                                    <div class="au-task__item-inner">
                                        <h5 class="task">
                                            <a href="#">Meeting about plan for Admin Template
2018</a>
                                        </h5>
                                        <span class="time">10:00 AM</span>
                                    </div>
                                </div>
                                <div class="au-task__item au-task__item--warning js-load-item">
                                    <div class="au-task__item-inner">
                                        <h5 class="task">
                                            <a href="#">Create new task for Dashboard</a>
                                        </h5>
                                        <span class="time">11:00 AM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-task__footer">
                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                        <div class="au-card-title" style="background-image:url('images/bg-title-
02.jpg');">
                            <div class="bg-overlay bg-overlay--blue"></div>
                            <h3>
                                <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
                            <button class="au-btn-plus">
                                <i class="zmdi zmdi-plus"></i>
                            </button>
                        </div>
                        <div class="au-inbox-wrap js-inbox-wrap">
                            <div class="au-message js-list-load">
                                <div class="au-message__noti">
                                    <p>You Have
                                        <span>2</span>
                                        new messages
                                    </p>
                                </div>
                                <div class="au-message-list">
                                    <div class="au-message__item unread">
                                        <div class="au-message__item-inner">
                                            <div class="au-message__item-text">
                                                <div class="avatar-wrap">
                                                    <div class="avatar">
                                                        <img src="
{{asset('admin/dash/images/icon/avatar-
02.jpg')}}" alt="John Smith">
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <h5 class="name">John Smith</h5>
                                                    <p>Have sent a photo</p>
                                                </div>
                                            </div>
                                            <div class="au-message__item-time">
                                                <span>12 Min ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="au-message__item unread">
                                        <div class="au-message__item-inner">
                                            <div class="au-message__item-text">
                                                <div class="avatar-wrap online">
                                                    <div class="avatar">
                                                        <img src="
{{asset('admin/dash/images/icon/avatar-
03.jpg')}}" alt="Nicholas Martinez">
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <h5 class="name">Nicholas Martinez</h5>
                                                    <p>You are now connected on message</p>
                                                </div>
                                            </div>
                                            <div class="au-message__item-time">
                                                <span>11:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="au-message__item">
                                        <div class="au-message__item-inner">
                                            <div class="au-message__item-text">
                                                <div class="avatar-wrap online">
                                                    <div class="avatar">
                                                        <img src="
{{asset('admin/dash/images/icon/avatar-
04.jpg')}}" alt="Michelle Sims">
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <h5 class="name">Michelle Sims</h5>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <div class="au-message__item-time">
                                                <span>Yesterday</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="au-message__item">
                                        <div class="au-message__item-inner">
                                            <div class="au-message__item-text">
                                                <div class="avatar-wrap">
                                                    <div class="avatar">
                                                        <img src="
{{asset('admin/dash/images/icon/avatar-
05.jpg')}}" alt="Michelle Sims">
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <h5 class="name">Michelle Sims</h5>
                                                    <p>Purus feugiat finibus</p>
                                                </div>
                                            </div>
                                            <div class="au-message__item-time">
                                                <span>Sunday</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="au-message__item js-load-item">
                                        <div class="au-message__item-inner">
                                            <div class="au-message__item-text">
                                                <div class="avatar-wrap online">
                                                    <div class="avatar">
                                                        <img src="
{{asset('admin/dash/images/icon/avatar-
04.jpg')}}" alt="Michelle Sims">
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <h5 class="name">Michelle Sims</h5>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <div class="au-message__item-time">
                                                <span>Yesterday</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="au-message__item js-load-item">
                                        <div class="au-message__item-inner">
                                            <div class="au-message__item-text">
                                                <div class="avatar-wrap">
                                                    <div class="avatar">
                                                        <img src="
{{asset('admin/dash/images/icon/avatar-
05.jpg')}}" alt="Michelle Sims">
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <h5 class="name">Michelle Sims</h5>
                                                    <p>Purus feugiat finibus</p>
                                                </div>
                                            </div>
                                            <div class="au-message__item-time">
                                                <span>Sunday</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="au-message__footer">
                                    <button class="au-btn au-btn-load js-load-btn">load
more</button>
                                </div>
                            </div>
                            <div class="au-chat">
                                <div class="au-chat__title">
                                    <div class="au-chat-info">
                                        <div class="avatar-wrap online">
                                            <div class="avatar avatar--small">
                                                <img src="{{asset('admin/dash/images/icon/avatar-
02.jpg')}}" alt="John Smith">
                                            </div>
                                        </div>
                                        <span class="nick">
                                            <a href="#">John Smith</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="au-chat__content">
                                    <div class="recei-mess-wrap">
                                        <span class="mess-time">12 Min ago</span>
                                        <div class="recei-mess__inner">
                                            <div class="avatar avatar--tiny">
                                                <img src="{{asset('admin/dash/images/icon/avatar-
02.jpg')}}" alt="John Smith">
                                            </div>
                                            <div class="recei-mess-list">
                                                <div class="recei-mess">Lorem ipsum dolor sit amet,
consectetur adipiscing elit non iaculis</div>
                                                <div class="recei-mess">Donec tempor, sapien ac
viverra</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="send-mess-wrap">
                                        <span class="mess-time">30 Sec ago</span>
                                        <div class="send-mess__inner">
                                            <div class="send-mess-list">
                                                <div class="send-mess">Lorem ipsum dolor sit amet,
consectetur adipiscing elit non iaculis</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="au-chat-textfield">
                                    <form class="au-form-icon">
                                        <input class="au-input au-input--full au-input--h65"
type="text" placeholder="Type a message">
                                        <button class="au-input-icon">
                                            <i class="zmdi zmdi-camera"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection