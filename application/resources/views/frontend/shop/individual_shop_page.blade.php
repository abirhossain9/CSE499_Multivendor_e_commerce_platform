<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Shop Page</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Colo Shop Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- font Awesome Cdn -->
        <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

        <!-- Bootstrap cdn -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
            crossorigin="anonymous">

        <!-- Owl Carousel File -->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">

        <!-- CSS File -->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('frontend/styles/style.css') }}">

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
                                        <li>
                                            <a href="{{route('home')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('shop.index')}}">Shop</a>
                                        </li>
                                        <li>
                                            <a href="#">Featuered Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Pages</a>
                                        </li>
                                        <li>
                                            <a href="#">Blog</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact us</a>
                                        </li>
                                    </ul>
                                    <ul class="navbar_user">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="checkout">
                                            <a href="#">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                <span id="checkout_items" class="checkout_items">2</span>
                                            </a>
                                        </li>
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
                                                    <a class="dropdown-item"
                                                        href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">
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
                <div class="hamburger_close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <div class="hamburger_menu_content text-right">
                    <ul class="menu_top_nav">
                        <li class="menu_item">
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="menu_item">
                            <a href="cus_login.html">Profile</a>
                        </li>
                        <li class="menu_item">
                            <a href="{{route('shop.index')}}">Shop</a>
                        </li>
                        <li class="menu_item">
                            <a href="#">Promotion</a>
                        </li>
                        <li class="menu_item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="menu_item">
                            <a href="#">Blog</a>
                        </li>
                        <li class="menu_item">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- Find Shops -->
            <div class="find_shops">
                <div class="container">

                    <div class="row">
                        <div class="col text-center">
                            <div class="section_title find_shop_title">
                                <h2>Shop Info</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Dashboard -->
                    <div class="shop_page_dashboard">
                        <div class="container">
                            <div class="main-body">
                                <div class="row gutters-sm">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="align-items-center text-center">
                                                    <img src="{{asset('backend/img/shop/361003459.JPG')}}" alt="" width="150px">
                                                    <div class="mt-3">
                                                        <h4>shop name</h4>
                                                        <p class="text-primary mb-1">shop category</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- shop info --}}
                                    <div class="col-md-8">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6>Shop Name</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">shop name</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6>Address</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">{{Auth::user()->address}}</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6>Phone</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">{{Auth::user()->phone}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- New Arrivals -->
                    <div class="new_arrivals">
                        <div class="container">

                            <div class="row">
                                <div class="col text-center">
                                    <div class="section_title">
                                        <h2>Browse Items</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="product-grid" data-isotope='{"itemSelector": ".product-item", "layoutMode": "fitRows"}'>

                                        <!-- Product-1 -->
                                        <div class="product-item">
                                            <div class="product">
                                                <div class="product_image">
                                                    <img src="{{ asset('frontend/images/product_2.png') }}" alt="">
                                                </div>
                                                <div class="favorite"></div>
                                                <div
                                                    class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
                                                    <span>New</span>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_name">
                                                        <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                                    </h6>
                                                    <div class="product_price">610.00৳</div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button">
                                                <a href="#">add to cart</a>
                                            </div>
                                        </div>

                                        <!-- Product-2 -->
                                        <div class="product-item">
                                            <div class="product">
                                                <div class="product_image">
                                                    <img src="{{ asset('frontend/images/product_3.png') }}" alt="">
                                                </div>
                                                <div class="favorite"></div>
                                                <div class="product_info">
                                                    <h6 class="product_name">
                                                        <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                                    </h6>
                                                    <div class="product_price">120.00৳</div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button">
                                                <a href="#">add to cart</a>
                                            </div>
                                        </div>

                                        <!-- Product-3 -->
                                        <div class="product-item">
                                            <div class="product">
                                                <div class="product_image">
                                                    <img src="{{ asset('frontend/images/product_7.png') }}" alt="">
                                                </div>
                                                <div class="favorite"></div>
                                                <div
                                                    class="product_bubble product_bubble_left product_bubble_red d-flex flex-column align-items-center">
                                                    <span>20%</span>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_name">
                                                        <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                                    </h6>
                                                    <div class="product_price">410.00৳<span>300.00৳</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button">
                                            <a href="#">add to cart</a>
                                        </div>
                                    </div>

                                    <!-- Product-4 -->
                                    <div class="product-item">
                                        <div class="product">
                                            <div class="product_image">
                                                <img src="{{ asset('frontend/images/product_9.png') }}" alt="">
                                            </div>
                                            <div class="favorite"></div>
                                            <div
                                                class="product_bubble product_bubble_left product_bubble_red d-flex flex-column align-items-center">
                                                <span>40%</span>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_name">
                                                    <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                                </h6>
                                                <div class="product_price">520.00৳<span>590.00৳</div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button">
                                            <a href="#">add to cart</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
             </div>






    <!-- Benefit -->
    <div class="benefit">
        <div class="container">
            <div class="row benefit_row">

                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                        </div>
                        <div class="benefit_content">
                            <h6>Free Shipping</h6>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon">
                            <i class="fa fa-undo" aria-hidden="true"></i>
                        </div>
                        <div class="benefit_content">
                            <h6>45 Days Return</h6>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <div class="benefit_content">
                            <h6>Cash on Delivery</h6>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                        <div class="benefit_content">
                            <h6>Open 24/7</h6>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
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
                    <div
                        class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                        <ul class="footer_nav">
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">FAQs</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div
                        class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-skype" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_nav-container">
                        <div class="cr text-center">© 2021 Copyright – All Rights Reserved by
                            <a href="#">E-Mart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Bootstrap JS CDN -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>
<!-- jquery JS File -->
<script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
<!-- Isotope JS File -->
<script src="{{ asset('frontend/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<!-- Owl Carousel JS File -->
<script
    src="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<!-- Javascript File -->
<script src="{{ asset('frontend/js/custom.js') }}"></script>
</body>

</html>