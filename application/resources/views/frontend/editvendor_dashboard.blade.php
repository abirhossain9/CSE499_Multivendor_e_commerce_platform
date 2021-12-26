<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font Awesome Cdn -->
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Owl Carousel File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">

    <!-- CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/style.css') }}">

</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header trans_300">
            <!-- main Navigation -->
            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <a href="{{route('home')}}">E-<span>Mart</span></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('shop.index')}}">Shop</a></li>
                                    <li><a href="#">Featuered Item</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                                <ul class="navbar_user">
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>

                                    {{-- cart dropdown --}}
                                        @include('backend.includes.cart_dropdown')

                                    @if (Auth::check())

                                    <li class="dropdown">
                                        <button class="btn dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <li><a href="javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                    </button>
                                    <div class="dropdown-menu custom-dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item custom-dropdown-item disabled" href="javascript:void(0)">Welcome,<br>
                                            <i class="fas fa-id-badge"> {{Auth::user()->name}}</a></i>

                                        @if(Auth::user()->role == 3)
                                        <a class="dropdown-item" href="{{route('user.dashboard')}}"><i class="fa fa-address-card" aria-hidden="true"> Profile Dashboard</i></a>
                                        @elseif(Auth::user()->role == 2)
                                        <a class="dropdown-item" href="{{route('vendor.dashboard')}}"><i class="fa fa-address-card" aria-hidden="true"> Vendor Dashboard</i></a>
                                        @endif

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="fa fa-sign-out"> Logout</i>
                                            </a>
                                        </form>
                                    </div>
                                    </li>

                                    @else
                                    <li class="dropdown">
                                        <button class="btn dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <li><a href="javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                    </button>
                                    <div class="dropdown-menu custom-dropdown-menu-def" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{route('user.login')}}"><i class="fa fa-sign-in"> Sign in</i></a>
                                        <a class="dropdown-item" href="{{route('user.register')}}"><i class="fas fa-id-badge"> Register</i></a>
                                    </div>
                                    </li>

                                    @endif

                                </ul>

                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div class="fs_menu_overlay"></div>
        <div class="hamburger_menu">
            <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="hamburger_menu_content text-right">
                <ul class="menu_top_nav">
                    <li class="menu_item"><a href="{{route('home')}}">Home</a></li>
                    <li class="menu_item"><a href="{{route('shop.index')}}">Shop</a></li>
                    <li class="menu_item"><a href="#">Promotion</a></li>
                    <li class="menu_item"><a href="#">Pages</a></li>
                    <li class="menu_item"><a href="#">Blog</a></li>
                    <li class="menu_item"><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>


        <!-- Profile Dashboard -->
        <div class="dashboard">
            <div class="container">
                <div class="col-lg-12">
                    <div class="dashboard_text d-flex flex-column justify-content-center align-items-center text-center">
                        <h4 style="margin-bottom: 10px;">Vendor Profile</h4>
                        <p>Edit <b>Shop</b> & Manage <b>Orders</b> Below</p>
                    </div>
                </div>
                <div class="main-body">
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="align-items-center text-center">
                                        <img src="{{ asset('frontend/images/shop.jpg') }}" alt="Admin" width="100%">
                                        <div class="mt-3">
                                            <h4>Codies Shop</h4>
                                            <p class="text-primary mb-1">Silver Seller</p>
                                            <p class="text-secondary font-size-sm">Bashundhara, Dhaka</p>
                                            <button class="btn btn-primary">Orders</button>
                                            <button class="btn btn-outline-primary">Manage</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h6 class="mb-0">Profile Link</h6>
                                        <span class="text-secondary">emart.com/codiesshop</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- profile info --}}
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="custom-margin-title">Shop Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="shopname" class="form-control" required="required" value="Codies Shop" autocomplete="off">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="custom-margin-title">Shop Owner</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="fullname" class="form-control" required="required" value="Codie" autocomplete="off">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="custom-margin-title">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="email" name="phone" class="form-control" required="required" value="codiy83461@forfity.com" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="custom-margin-title">Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="number" name="phone" class="form-control" required="required" value="01987654321" autocomplete="off">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="custom-margin-title">Shop Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="phone" class="form-control" required="required" value="Bashundhara, Dhaka" autocomplete="off">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="custom-margin-title">Owners Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="phone" class="form-control" required="required" value="Bashundhara, Dhaka" autocomplete="off">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="custom-margin-title">Reset Password</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <a class="form-control link-primary" href="{{route('password.email')}}" role="button">Click Here</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="custom-margin-title">Shop Banner</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="file" class="form-control-file" name="image">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class="btn btn-info" href="javascript:void(0)">Save Changes</a>
                                            <a class="btn btn-danger" href="{{route('vendor.dashboard')}}">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- order info --}}
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="custom-margin-title">My Orders</h6>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="custom-margin-title">My Returns</h6>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="custom-margin-title">My Cancellations</h6>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="custom-margin-title">My Wishlists</h6>
                                        </div>

                                    </div>
                                    <hr>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                            <ul class="footer_nav">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_nav-container">
                            <div class="cr text-center">© 2021 Copyright – All Rights Reserved by <a href="#">E-Mart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>


<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<!-- Isotope JS File -->
<script src="{{ asset('frontend/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<!-- Owl Carousel JS File -->
<script
    src="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<!-- Javascript File -->
<script src="{{ asset('frontend/js/custom.js') }}"></script>
</body>

</html>
