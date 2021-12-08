<!DOCTYPE html>
<html lang="en">

    <head>
        <title>E-Mart</title>
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

                                        {{-- <li class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">
                                                    Welcome,
                                                {{Auth::user()->name}}</a>

                                            </div>
                                        </li> --}}

                                        {{-- <li>
                                            <a href="{{route('user.dashboard')}}">
                                                <i class="fa fa-address-card" aria-hidden="true"></i>
                                            </a>
                                        </li> --}}

                                        {{-- <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a
                                                href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="fa fa-sign-out-alt"></i>
                                            </a>
                                        </form>
                                        </li> --}}

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


                                        {{-- <li class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{route('user.login')}}">Sign in</a>
                                                <a class="dropdown-item" href="#">Register</a>

                                            </div>
                                        </li> --}}
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

            <!-- Slider -->
            @foreach($banners as $banner)
            <div class="main_slider" style="background-image: url({{ asset('backend/img/banner/'.$banner->banner_image) }});">
                <div class="container fill_height">
                    <div class="row align-items-center fill_height">
                        <div class="col">
                            <div class="main_slider_content">
                                <h6>Spring / Summer Collection 2021</h6>
                                <h1>{{$banner->banner_text}}</h1>
                                <div class="red_button shop_now_button">
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Banner -->
            <div class="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div
                                class="banner_item align-item-center"
                                style="background-image: url({{ asset('frontend/images/banner_1.jpg') }});">
                                <div class="banner_category">
                                    <a href="#">Women's</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div
                                class="banner_item align-item-center"
                                style="background-image: url({{ asset('frontend/images/banner_2.jpg') }});">
                                <div class="banner_category">
                                    <a href="#">Accesories</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div
                                class="banner_item align-item-center"
                                style="background-image: url({{ asset('frontend/images/banner_3.jpg') }});">
                                <div class="banner_category">
                                    <a href="#">Men's</a>
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
                            <div class="section_title new_arrivals_title">
                                <h2>New Arrivals</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <div class="new_arrivals_sorting">

                                <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                                    <li
                                        class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked"
                                        data-filter="*">all</li>
                                    <li
                                        class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                        data-filter=".women">womens's</li>
                                    <li
                                        class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                        data-filter=".accesssories">accesssories</li>
                                    <li
                                        class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                        data-filter=".men">men's</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div
                                class="product-grid"
                                data-isotope='{"itemSelector": ".product-item", "layoutMode": "fitRows"}'>

                                <!-- Product-1 -->
                                <div class="product-item men">
                                    <div class="product discount product_filter">
                                        <div class="product_image">
                                            <img src="{{ asset('frontend/images/product_1.png') }}" alt="">
                                        </div>
                                        <div class="favorite favorite_left"></div>
                                        <div
                                            class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                            <span>-70৳</span>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_name">
                                                <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                            </h6>
                                            <div class="product_price">520.00৳<span>590.00৳</span></div>
                                        </div>
                                    </div>
                                    <div class="red_button add_to_cart_button">
                                        <a href="#">add to cart</a>
                                    </div>
                                </div>

                                <!-- Product-2 -->
                                <div class="product-item women">
                                    <div class="product product_filter">
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

                                <!-- Product-3 -->
                                <div class="product-item women">
                                    <div class="product product_filter">
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

                                <!-- Product-4 -->
                                <div class="product-item accesssories">
                                    <div class="product product_filter">
                                        <div class="product_image">
                                            <img src="{{ asset('frontend/images/product_4.png') }}" alt="">
                                        </div>
                                        <div class="favorite favorite_left"></div>
                                        <div
                                            class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                            <span>sale</span>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_name">
                                                <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                            </h6>
                                            <div class="product_price">410.00৳</span></div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button">
                                    <a href="#">add to cart</a>
                                </div>
                            </div>

                            <!-- Product-5 -->
                            <div class="product-item women men">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="{{ asset('frontend/images/product_5.png') }}" alt="">
                                    </div>
                                    <div class="favorite"></div>
                                    <div class="product_info">
                                        <h6 class="product_name">
                                            <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                        </h6>
                                        <div class="product_price">180.00৳</div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button">
                                    <a href="#">add to cart</a>
                                </div>
                            </div>

                            <!-- Product-6 -->
                            <div class="product-item accesssories">
                                <div class="product discount product_filter">
                                    <div class="product_image">
                                        <img src="{{ asset('frontend/images/product_6.png') }}" alt="">
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div
                                        class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                        <span>-20৳</span>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_name">
                                            <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                        </h6>
                                        <div class="product_price">520.00৳<span>590.00৳</span></div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button">
                                    <a href="#">add to cart</a>
                                </div>
                            </div>

                            <!-- Product-7 -->
                            <div class="product-item women">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="{{ asset('frontend/images/product_7.png') }}" alt="">
                                    </div>
                                    <div class="favorite"></div>
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

                            <!-- Product-8 -->
                            <div class="product-item accesssories">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="{{ asset('frontend/images/product_8.png') }}" alt="">
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

                            <!-- Product-9 -->
                            <div class="product-item men">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="{{ asset('frontend/images/product_9.png') }}" alt="">
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div
                                        class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                        <span>sale</span>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_name">
                                            <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                        </h6>
                                        <div class="product_price">410.00৳</div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button">
                                    <a href="#">add to cart</a>
                                </div>
                            </div>

                            <!-- Product-10 -->
                            <div class="product-item men">
                                <div class="product product_filter">
                                    <div class="product_image">
                                        <img src="{{ asset('frontend/images/product_10.png') }}" alt="">
                                    </div>
                                    <div class="favorite"></div>
                                    <div class="product_info">
                                        <h6 class="product_name">
                                            <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                        </h6>
                                        <div class="product_price">180.00৳</div>
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

        <!-- Deal of the week -->
        <div class="deal_ofthe_week">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="deal_ofthe_week_img">
                            <img src="{{ asset('frontend/images/deal_ofthe_week.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 text-right deal_ofthe_week_col">
                        <div
                            class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                            <div class="section_title">
                                <h2>Deal Of The Week</h2>
                            </div>
                            <ul class="timer">
                                <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                    <div id="day" class="timer_num">03</div>
                                    <div class="timer_unit">Day</div>
                                </li>
                                <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                    <div id="hour" class="timer_num">15</div>
                                    <div class="timer_unit">Hours</div>
                                </li>
                                <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                    <div id="minute" class="timer_num">45</div>
                                    <div class="timer_unit">Mins</div>
                                </li>
                                <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                    <div id="second" class="timer_num">23</div>
                                    <div class="timer_unit">Sec</div>
                                </li>
                            </ul>

                            <div class="red_button deal_ofthe_week_button">
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Best Sellers -->
        <div class="best_sellers">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title new_arrivals_title">
                            <h2>Best Sellers</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="product_slider_container">
                            <div class="owl-carousel owl-theme product_slider">

                                <!-- slider-1 -->
                                <div class="owl-item product_slider_item">
                                    <div class="product-item men">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="{{ asset('frontend/images/product_1.png') }}" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div
                                                class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                <span>-70৳</span>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_name">
                                                    <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                                </h6>
                                                <div class="product_price">520.00৳<span>590.00৳</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- slider-2 -->
                                <div class="owl-item product_slider_item">
                                    <div class="product-item women">
                                        <div class="product product_filter">
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
                                    </div>
                                </div>

                                <!-- slider-3 -->
                                <div class="owl-item product_slider_item">
                                    <div class="product-item women">
                                        <div class="product product_filter">
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
                                    </div>
                                </div>

                                <!-- slider-4 -->
                                <div class="owl-item product_slider_item">
                                    <div class="product-item accesssories">
                                        <div class="product product_filter">
                                            <div class="product_image">
                                                <img src="{{ asset('frontend/images/product_4.png') }}" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div
                                                class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                <span>sale</span>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_name">
                                                    <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                                </h6>
                                                <div class="product_price">410.00৳</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- slider-5 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item women men">
                                    <div class="product product_filter">
                                        <div class="product_image">
                                            <img src="{{ asset('frontend/images/product_5.png') }}" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name">
                                                <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                            </h6>
                                            <div class="product_price">180.00৳</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- slider-6 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item accesssories">
                                    <div class="product discount product_filter">
                                        <div class="product_image">
                                            <img src="{{ asset('frontend/images/product_6.png') }}" alt="">
                                        </div>
                                        <div class="favorite favorite_left"></div>
                                        <div
                                            class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                            <span>-20৳</span>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_name">
                                                <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                            </h6>
                                            <div class="product_price">520.00৳<span>590.00৳</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- slider-7 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item women">
                                    <div class="product product_filter">
                                        <div class="product_image">
                                            <img src="{{ asset('frontend/images/product_7.png') }}" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name">
                                                <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                            </h6>
                                            <div class="product_price">610.00৳</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- slider-8 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item accesssories">
                                    <div class="product product_filter">
                                        <div class="product_image">
                                            <img src="{{ asset('frontend/images/product_8.png') }}" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name">
                                                <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                            </h6>
                                            <div class="product_price">120.00৳</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- slider-9 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item men">
                                    <div class="product product_filter">
                                        <div class="product_image">
                                            <img src="{{ asset('frontend/images/product_9.png') }}" alt="">
                                        </div>
                                        <div class="favorite favorite_left"></div>
                                        <div
                                            class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                            <span>sale</span>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_name">
                                                <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                            </h6>
                                            <div class="product_price">410.00৳</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- slider-10 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item men">
                                    <div class="product product_filter">
                                        <div class="product_image">
                                            <img src="{{ asset('frontend/images/product_10.png') }}" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name">
                                                <a href="#">Men's Solid Slim Fit Casual Shirt</a>
                                            </h6>
                                            <div class="product_price">180.00৳</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Slider Navigation -->
                        <div
                            class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>

                        <div
                            class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
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

    <!-- Blogs -->
    <div class="blogs">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">
                        <h2>Latest Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row blogs_container">

                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div
                            class="blog_background"
                            style="background-image: url({{ asset('frontend/images/blog_1.jpg') }});"></div>
                        <div
                            class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Here are the Trends I See Coming This Fall</h4>
                            <span class="blog_meta">by admin | october 01, 2021</span>
                            <a class="blog_more" href="#">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div
                            class="blog_background"
                            style="background-image:url({{ asset('frontend/images/blog_2.jpg') }});"></div>
                        <div
                            class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Here are the Trends I See Coming This Fall</h4>
                            <span class="blog_meta">by admin | october 10, 2021</span>
                            <a class="blog_more" href="#">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div
                            class="blog_background"
                            style="background-image:url({{ asset('frontend/images/blog_3.jpg') }});"></div>
                        <div
                            class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Here are the Trends I See Coming This Fall</h4>
                            <span class="blog_meta">by admin | october 15, 2021</span>
                            <a class="blog_more" href="#">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div
                        class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                        <h4>Newsletter</h4>
                        <p>Subscribe to Our Newsletter and Get 10% off of Your First Purchase</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="POST">
                        <div
                            class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                            <input
                                id="newsletter_email"
                                type="email"
                                placeholder="Enter Your Email"
                                required="required"
                                data-error="Valid Email is Required">
                            <button
                                id="newsletter_submit"
                                type="submit"
                                class="newsletter_submit_btn trans_300"
                                value="submit">Subscribe</button>
                        </div>
                    </form>
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
