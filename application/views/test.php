<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="" />
    <meta name="keywords" content="admin template,html 5 admin template , dmeki admin , dashboard template, bootstrap 5 admin template, responsive admin template" />
    <title>SIPK-POLMAN BABEL|Modal</title>
    <!-- shortcut icon-->
    <link rel="icon" href="<?= base_url() ?>assets/images/logo/icon-logo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/icon-logo.png" type="image/x-icon" />
    <!-- Fonts css-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet" />
    <!-- Font awesome -->
    <link href="<?= base_url() ?>assets/css/vendor/font-awesome.css" rel="stylesheet" />
    <!-- themify icon-->
    <link href="<?= base_url() ?>assets/css/vendor/themify-icons.css" rel="stylesheet" />
    <!-- Scrollbar-->
    <link href="<?= base_url() ?>assets/css/vendor/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap css-->
    <link href="<?= base_url() ?>assets/css/vendor/bootstrap.css" rel="stylesheet" />
    <!-- Custom css-->
    <link href="<?= base_url() ?>assets/css/style.css" id="customstyle" rel="stylesheet" />
</head>

<body>
    <!-- Loader Start-->
    <!-- <div class="codex-loader">
        <div class="linespinner"></div>
    </div> -->
    <header class="codex-header">
        <div class="header-contian d-flex justify-content-between align-items-center">
            <div class="header-left d-flex align-items-center">
                <div class="sidebar-action navicon-wrap"><i data-feather="menu"></i></div>
                <div class="search-bar">
                    <div class="form-group mb-0">
                        <div class="input-group">
                            <input class="form-control" type="text" value="" placeholder="Search Here....."><span class="input-group-text"><i data-feather="search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-right d-flex align-items-center justify-content-end">
                <ul class="nav-iconlist">
                    <li>
                        <div class="navicon-wrap action-dark"><i class="fa fa-moon-o icon-dark"></i><i class="fa fa-sun-o icon-light" style="display:none;"></i></div>
                    </li>
                    <li>
                        <div class="navicon-wrap"><i data-feather="bell"></i>
                            <div class="noti-count">04</div>
                        </div>
                        <div class="hover-dropdown navnotification-drop">
                            <div class="drop-header">
                                <h5>notification<span>05</span></h5>
                            </div>
                            <ul data-simplebar>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="icon-nav bg-primary"><i class="fa fa-check-square-o"></i></div>
                                            <div class="media-body">
                                                <h6>order Cheked</h6><span class="text-light">1 hour ago</span>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="icon-nav bg-secondary"><i class="fa fa-first-order"></i></div>
                                            <div class="media-body">
                                                <h6>order receved</h6><span class="text-light">1 day ago</span>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="icon-nav bg-success"><i class="fa fa-money"></i></div>
                                            <div class="media-body">
                                                <h6>payment received</h6><span class="text-light">2 day ago</span>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="icon-nav bg-warning"><i class="fa fa-truck"></i></div>
                                            <div class="media-body">
                                                <h6>order shipped</h6><span class="text-light">2 day ago</span>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="icon-nav bg-info"><i class="fa fa-first-order"></i></div>
                                            <div class="media-body">
                                                <h6>order receved</h6><span class="text-light">1 day ago</span>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="icon-nav bg-success"><i class="fa fa-money"></i></div>
                                            <div class="media-body">
                                                <h6>payment received</h6><span class="text-light">2 day ago</span>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="icon-nav bg-warning"><i class="fa fa-truck"></i></div>
                                            <div class="media-body">
                                                <h6>order shipped</h6><span class="text-light">2 day ago</span>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="icon-nav bg-info"><i class="fa fa-first-order"></i></div>
                                            <div class="media-body">
                                                <h6>order receved</h6><span class="text-light">1 day ago</span>
                                            </div>
                                        </div>
                                    </a></li>
                            </ul>
                            <div class="drop-footer"><a href="email-inbox.html">See All Notification</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="navicon-wrap"><i data-feather="shopping-cart"></i>
                            <div class="noti-count">07</div>
                        </div>
                        <div class="hover-dropdown navshop-drop">
                            <div class="drop-header">
                                <h5>Shopping<span>7</span></h5>
                            </div>
                            <ul data-simplebar>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid" src="../assets/images/ecom-dashboard/small-pro/1.jpg" alt=""></div>
                                            <div class="media-body">
                                                <h6>teddy bear</h6><span class="text-light">$250</span>
                                            </div>
                                            <div class="close-pro"><i class="ti-trash"></i></div>
                                        </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid" src="../assets/images/ecom-dashboard/small-pro/2.jpg" alt=""></div>
                                            <div class="media-body">
                                                <h6>iphone</h6><span class="text-light">$140</span>
                                            </div>
                                            <div class="close-pro"><i class="ti-trash"></i></div>
                                        </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid" src="../assets/images/ecom-dashboard/small-pro/3.jpg" alt=""></div>
                                            <div class="media-body">
                                                <h6>Apple Airpod</h6><span class="text-light">$310</span>
                                            </div>
                                            <div class="close-pro"><i class="ti-trash"></i></div>
                                        </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid" src="../assets/images/ecom-dashboard/small-pro/4.jpg" alt=""></div>
                                            <div class="media-body">
                                                <h6>Motors</h6><span class="text-light">$510</span>
                                            </div>
                                            <div class="close-pro"><i class="ti-trash"></i></div>
                                        </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid" src="../assets/images/ecom-dashboard/small-pro/5.jpg" alt=""></div>
                                            <div class="media-body">
                                                <h6>iphone</h6><span class="text-light">$140</span>
                                            </div>
                                            <div class="close-pro"><i class="ti-trash"></i></div>
                                        </div>
                                    </a></li>
                            </ul>
                            <div class="drop-footer"><a href="checkout.html">Checkout All</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="navicon-wrap btn-windowfull"><i data-feather="maximize"></i></div>
                    </li>
                    <li class="nav-profile">
                        <div class="media">
                            <div class="user-icon"><img class="img-fluid rounded-50" src="../assets/images/avtar/3.jpg" alt="logo"></div>
                            <div class="media-body">
                                <h6>Thomas Vactom</h6><span class="text-light">Web designer</span>
                            </div>
                        </div>
                        <div class="hover-dropdown navprofile-drop">
                            <ul>
                                <li><a href="profile.html"><i class="ti-user"></i>profile</a></li>
                                <li><a href="email-inbox.html"><i class="ti-email"></i>inbox</a></li>
                                <li><a href="user-edit.html"><i class="ti-settings"></i>setting</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out"></i>log out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <aside class="codex-sidebar">
        <div class="logo-gridwrap"><a class="codexbrand-logo" href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt="theeme-logo"></a><a class="codex-darklogo" href="index.html"><img class="img-fluid" src="../assets/images/logo/dark-logo.png" alt="theeme-logo"></a>
            <div class="sidebar-action"><i data-feather="menu"></i></div>
        </div>
        <div class="icon-logo"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/icon-logo.png" alt="theeme-logo"></a></div>
        <div class="codex-menuwrapper">
            <ul class="codex-menu custom-scroll" data-simplebar>
                <li class="cdxmenu-title">
                    <h5>Dashboards</h5>
                </li>
                <!-- <li class="menu-item" id="chatbot">
                <a href="<?= base_url('mahasiswa/riwayat') ?>"><i class="fa fa-history"></i> <span class="nav-label">Riwayat</span></a>
            </li>
            <li id="logout">
                <a href="<?= base_url('AdminController') ?>" class="logout"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
            </li> -->

                <!-- <li class="menu-item"><a href="index.html">
                    <div class="icon-item"><i data-feather="home"></i></div><span>default</span>
                </a></li> -->
                <li class="menu-item"><a href="<?= base_url('mahasiswa/riwayat') ?>">
                        <div class="icon-item"><i data-feather="airplay"></i></div><span>Dashboard</span>
                    </a></li>
                <li class="cdxmenu-title">
                    <h5>application</h5>
                </li>
                <li class="menu-item"><a href="<?= base_url('mahasiswa/riwayat') ?>">
                        <div class="icon-item"><i data-feather="calendar"></i></div><span>Riwayat Peminjaman</span>
                    </a></li>
                <li class="menu-item"><a href="<?= base_url('logout') ?>">
                        <div class="icon-item"><i data-feather="log-out"></i></div><span>Logout</span>
                    </a></li>
                <!-- <li class="menu-item"><a href="todo.html">
                    <div class="icon-item"><i data-feather="clock"></i></div><span>todo</span>
                </a></li>
            <li class="menu-item"><a href="javascript:void(0);">
                    <div class="icon-item"><i data-feather="mail"></i></div><span>email</span><i class="fa fa-angle-down"></i>
                </a>
                <ul class="submenu-list">
                    <li><a href="email-inbox.html">email inbox</a></li>
                    <li><a href="email-read.html">email read</a></li>
                </ul>
            </li>
            <li class="menu-item"><a href="javascript:void(0);">
                    <div class="icon-item"> <i data-feather="user"></i></div><span>Users</span><i class="fa fa-angle-down"></i>
                </a>
                <ul class="submenu-list">
                    <li><a href="profile.html">profile</a></li>
                    <li><a href="user-list.html">user list</a></li>
                    <li><a href="user-edit.html">user edit</a></li>
                </ul>
            </li>
            <li class="menu-item"><a href="javascript:void(0);">
                    <div class="icon-item"><i data-feather="shopping-bag"></i></div><span>ecommerce</span><i class="fa fa-angle-down"></i>
                </a>
                <ul class="submenu-list">
                    <li><a href="product.html">product</a></li>
                    <li><a href="product-detail.html">product detail</a></li>
                    <li><a href="add-product.html">add product</a></li>
                    <li><a href="product-list.html">product list</a></li>
                    <li><a href="order-history.html">order history</a></li>
                    <li><a href="cart.html">cart</a></li>
                    <li><a href="wishlist.html">wishlist</a></li>
                    <li><a href="checkout.html">checkout</a></li>
                    <li><a href="pricing.html">pricing</a></li>
                </ul>
            </li>
            <li class="menu-item"><a href="invoice.html">
                    <div class="icon-item"><i data-feather="file-minus"></i></div><span>invoice</span>
                </a></li>
            <li class="cdxmenu-title">
                <h5>pages</h5>
            </li> -->

            </ul>
        </div>
    </aside>
    <!-- sidebar end-->
    <div class="themebody-wrap">
        <!-- breadcrumb start-->
        <div class="codex-breadcrumb">
            <div class="breadcrumb-contain">
                <div class="left-breadcrumb">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <h1>Dashboard</h1>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">element</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="javascript:void(0);">modal</a>
                        </li>
                    </ul>
                </div>
                <div class="right-breadcrumb">
                    <ul>
                        <li>
                            <div class="bread-wrap"><i class="fa fa-clock-o"></i></div>
                            <span class="liveTime"></span>
                        </li>
                        <li>
                            <div class="bread-wrap"><i class="fa fa-calendar"></i></div>
                            <span class="getDate"> </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb end-->
        <!-- theme body start-->
        <div class="theme-body">
            <div class="custom-container element-buttons">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>theme modal</h4>
                            </div>
                            <div class="card-body">
                                <!-- normal modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#normalModal">
                                    Normal modal
                                </button>
                                <div class="modal fade" id="normalModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- normal modal end-->
                                <!-- static backdrop modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    static backdrop modal
                                </button>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                    Modal title
                                                </h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Understood
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- static backdrop modal end-->
                                <!-- Scrolling long content modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#scrollinglongModal">
                                    Scrolling long content
                                </button>
                                <div class="modal fade" id="scrollinglongModal">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore
                                                    eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.
                                                </p>
                                                <p class="mt-50">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore
                                                    eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.
                                                </p>
                                                <p class="mt-50">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore
                                                    eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.
                                                </p>
                                                <p class="mt-50">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore
                                                    eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.
                                                </p>
                                                <p class="mt-50">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore
                                                    eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.
                                                </p>
                                                <p class="mt-50">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore
                                                    eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Scrolling long content modal end-->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>advance modals</h4>
                            </div>
                            <div class="card-body">
                                <!-- Vertically centered modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#verticallycenterModal">
                                    Vertically centered
                                </button>
                                <div class="modal fade" id="verticallycenterModal">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">vertically center</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Vertically centered modal end-->
                                <!-- Vertically centered modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#verticallycenterscrollModal">
                                    Vertically centered scrollable
                                </button>
                                <div class="modal fade" id="verticallycenterscrollModal">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    Vertically centered scrollable
                                                </h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore
                                                    eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.
                                                </p>
                                                <p class="mt-50">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore
                                                    eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.
                                                </p>
                                                <p class="mt-50">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore
                                                    eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.
                                                </p>
                                                <p class="mt-50">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore
                                                    eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.
                                                </p>
                                                <p class="mt-50">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore
                                                    eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.
                                                </p>
                                                <p class="mt-50">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore
                                                    eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Vertically centered modal end-->
                                <!-- tool tip & popover modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#toolpopModal">
                                    tool tip & popover
                                </button>
                                <div class="modal fade" id="toolpopModal">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    Vertically centered scrollable
                                                </h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Popover in a modal</h5>
                                                <p>
                                                    This
                                                    <a class="btn btn-secondary popover-test" href="#" role="button" title="Popover title" data-bs-content="Popover body content is set in this attribute.">button</a>
                                                    triggers a popover on click.
                                                </p>
                                                <hr />
                                                <h5>Tooltips in a modal</h5>
                                                <p>
                                                    <a class="tooltip-test" href="#" title="Tooltip">This link</a>
                                                    and
                                                    <a class="tooltip-test" href="#" title="Tooltip">that link</a>
                                                    have tooltips on hover.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- tool tip & popover modal end-->
                                <!-- grid  modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#usegridModal">
                                    use grid
                                </button>
                                <div class="modal fade" id="usegridModal">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    Vertically centered scrollable
                                                </h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-4">.col-md-4</div>
                                                        <div class="col-md-4 ms-auto">
                                                            .col-md-4 .ms-auto
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3 ms-auto">
                                                            .col-md-3 .ms-auto
                                                        </div>
                                                        <div class="col-md-2 ms-auto">
                                                            .col-md-2 .ms-auto
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 ms-auto">
                                                            .col-md-6 .ms-auto
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-9">
                                                            Level 1: .col-sm-9
                                                            <div class="row">
                                                                <div class="col-8 col-sm-6">
                                                                    Level 2: .col-8 .col-sm-6
                                                                </div>
                                                                <div class="col-4 col-sm-6">
                                                                    Level 2: .col-4 .col-sm-6
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- grid  modal end-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Varying modal</h4>
                            </div>
                            <div class="card-body">
                                <!-- Varying modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#VaryingModal" data-bs-whatever="@mdo">
                                    Open modal for @mdo
                                </button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#VaryingModal" data-bs-whatever="@fat">
                                    Open modal for @fat
                                </button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#VaryingModal" data-bs-whatever="@getbootstrap">
                                    Open modal for @getbootstrap
                                </button>
                                <div class="modal fade" id="VaryingModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">New message</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Recipient:</label>
                                                        <input class="form-control" id="recipient-name" type="text" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="message-text">Message:</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Send message
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Varying modal end--><a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>
                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalToggleLabel">
                                                    Modal 1
                                                </h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                Show a second modal and hide this one with the button
                                                below.
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
                                                    Open second modal
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalToggleLabel2">
                                                    Modal 2
                                                </h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                Hide this modal and show the first with the button
                                                below.
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">
                                                    Back to first
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>sizing modal</h4>
                            </div>
                            <div class="card-body">
                                <!-- xl modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#xlModal">
                                    extra larg modal
                                </button>
                                <div class="modal fade" id="xlModal">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- xl modal end-->
                                <!-- lg modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#lgModal">
                                    Large modal
                                </button>
                                <div class="modal fade" id="lgModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- lg modal end-->
                                <!-- sm modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#smModal">
                                    small modal
                                </button>
                                <div class="modal fade" id="smModal">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- sm modal end-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Fullscreen Modal</h4>
                            </div>
                            <div class="card-body">
                                <!--  Always full screen modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
                                    Full screen
                                </button>
                                <div class="modal fade" id="fullscreenModal">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  Always full screen modal end-->
                                <!--  small  device full screen modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#smfullscreenModal">
                                    Full screen below sm
                                </button>
                                <div class="modal fade" id="smfullscreenModal">
                                    <div class="modal-dialog modal-fullscreen-sm-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  small  device full screen modal end-->
                                <!--  medium device full screen modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#mdfullscreenModal">
                                    Full screen below md
                                </button>
                                <div class="modal fade" id="mdfullscreenModal">
                                    <div class="modal-dialog modal-fullscreen-md-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  medium device full screen modal end-->
                                <!--  large device full screen modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#lgfullscreenModal">
                                    Full screen below lg
                                </button>
                                <div class="modal fade" id="lgfullscreenModal">
                                    <div class="modal-dialog modal-fullscreen-lg-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  large device full screen modal end-->
                                <!-- extra large device full screen modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#xlfullscreenModal">
                                    Full screen below xl
                                </button>
                                <div class="modal fade" id="xlfullscreenModal">
                                    <div class="modal-dialog modal-fullscreen-xl-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- extra large device full screen modal end-->
                                <!-- extra large device full screen modal start-->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#xxlfullscreenModal">
                                    Full screen below xxl
                                </button>
                                <div class="modal fade" id="xxlfullscreenModal">
                                    <div class="modal-dialog modal-fullscreen-xxl-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
                                            </div>
                                            <div class="modal-body">...</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary ml-10" type="button">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- extra large device full screen modal end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- theme body end-->
    </div>
    <!-- footer start-->
    <footer class="codex-footer">
        <p>Copyright 2022-23 © dmeki All rights reserved.</p>
    </footer>
    <!-- footer end-->
    <!-- back to top start //-->
    <div class="scroll-top"><i class="fa fa-angle-double-up"></i></div>
    <!-- back to top end //-->
    <!-- main jquery-->
    <script src="<?= base_url() ?>assets/js/jquery-3.6.0.js"></script>
    <!-- Theme Customizer-->
    <script src="<?= base_url() ?>assets/js/layout-storage.js"></script>
    <script src="<?= base_url() ?>assets/js/customizer.js"></script>
    <!-- Feather icons js-->
    <script src="<?= base_url() ?>assets/js/icons/feather-icon/feather.js"></script>
    <!-- Bootstrap js-->
    <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
    <!-- Scrollbar-->
    <script src="<?= base_url() ?>assets/js/vendors/simplebar.js"></script>
    <!-- Custom script-->
    <script src="<?= base_url() ?>assets/js/custom-script.js"></script>
</body>

</html>