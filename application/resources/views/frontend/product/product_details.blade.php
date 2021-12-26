<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Product Details</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Colo Shop Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- font Awesome Cdn -->
        <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

        <!-- Bootstrap cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

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


            <!-- Product Details -->
            <div class="find_shops">
                <div class="container">

                    <div class="row">
                        <div class="col text-center">
                            <div class="section_title find_shop_title">
                                <h2>Product Details</h2>
                            </div>
                        </div>
                    </div>

                    {{-- product info --}}
                        <div class="container">
                            <!-- product -->
                            <div class="product-content product-wrap clearfix product-deatil">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="product-image">

                                            <div id="productCarousel" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner carousel_img">
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('backend/img/product/'.$product->product_image) }}" class="d-block w-100" alt="">
                                                    </div>
                                                    @foreach ($product->images as $img)
                                                    {{-- <div class="carousel-item active "> --}}
                                                    {{-- @if ($product->product_image == null)
                                                     <img src="{{ asset('frontend/images/product_2.png') }}" class="d-block w-100" alt="">
                                                    @else
                                                    <img src="{{ asset('backend/img/product/'.$product->product_image) }}" class="d-block w-100" alt="">
                                                    @endif
                                                    </div>
                                                    <div class="carousel-item ">
                                                        @if ($product->product_image == null)
                                                     <img src="{{ asset('frontend/images/product_2.png') }}" class="d-block w-100" alt="">
                                                    @else
                                                    <img src="{{ asset('backend/img/product/'.$product->product_image) }}" class="d-block w-100" alt="">
                                                    @endif
                                                    </div>
                                                    <div class="carousel-item ">
                                                    @if ($product->product_image == null)
                                                    <img src="{{ asset('frontend/images/product_2.png') }}" class="d-block w-100" alt="">
                                                    @else
                                                    <img src="{{ asset('backend/img/product/'.$product->product_image) }}" class="d-block w-100" alt="">
                                                    @endif --}}
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('backend/img/product/'.$img->image) }}" class="d-block w-100" alt="">
                                                    </div>
                                                    {{-- </div> --}}
                                                    @endforeach
                                                </div>
                                                {{--
                                                multiple image code
                                                @foreach ($product->images as $img)
                                                    @php $i = 0 @endphp
                                                    @if ($i == 0)
                                                     <div class="carousel-item active">
                                                        <img src="{{ asset('backend/img/product/'.$img->image) }}" class="d-block w-100" alt="">
                                                    </div>
                                                    @php $i-- @endphp
                                                    @else
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('backend/img/product/'.$img->image) }}" class="d-block w-100" alt="">
                                                    </div>
                                                    @endif

                                                    @endforeach
                                                --}}
                                                <button class="btn btn-light carousel-control-prev" type="button" data-target="#productCarousel" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </button>
                                                <button class="btn btn-light carousel-control-next" type="button" data-target="#productCarousel" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </button>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                                        <h4 class="red_title_color">{{ $product->product_name }}</h4>
                                        <hr>
                                        <h6><span class="red_title_color">Details: </span>
                                            {{ $product->product_description_short }}
                                        </h6>
                                        <hr>
                                        <span class="red_title_color">Review: </span>
                                            <i class="fa fa-star fa-2x text-primary"></i>
                                            <i class="fa fa-star fa-2x text-primary"></i>
                                            <i class="fa fa-star fa-2x text-primary"></i>
                                            <i class="fa fa-star fa-2x text-primary"></i>
                                            <i class="fa fa-star fa-2x text-muted"></i>
                                            <span class="fa fa-2x"><h5>(45) Votes</h5></span>
                                            <a class="red_title_color" href="javascript:void(0);">45 customer reviews</a>
                                        <hr>
                                        <span class="red_title_color">Product By: <a href="javascript:void(0);">{{ $product->shop->shop_name }}</a></span>
                                        <hr>
                                        <h6><span class="red_title_color">Category: </span>
                                            {{ $product->category->name }}
                                        </h6>
                                        <hr>
                                        <h6><span class="red_title_color">Available Quantity: </span>
                                            {{ $product->prodcut_quantity }}
                                        </h6>
                                        <hr>
                                        <span class="red_title_color">Select Quantity:
                                            <div class="input-group quantity_size">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                        <span class="fa fa-minus"></span>
                                                    </button>
                                                </span>
                                                <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[1]">
                                                        <span class="fa fa-plus"></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </span>
                                        <hr>
                                        <span class="red_title_color">Price: <h3 class="price-container">{{ $product->product_price }} ৳</h3></span>
                                        <hr>
                                        {{-- add to cart --}}
                                        <div class="pl-0">
                                            <div class="btn-group">
                                                <form action="{{ route('carts.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <input type="hidden" name="shop_id" value="{{ $product->shop->id }}">
                                                    <button type="submit" href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="certified">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0);">Delivery time<span>7 Working Days</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Certified<span>Quality Assured</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr />

                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-selected="true">Description</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-selected="false">Reviews</a>
                                            </li>
                                            </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                                {{ $product->product_description_long }}
                                            </div>
                                            <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                                <form method="POST">
                                                    <textarea rows="2" class="form-control" placeholder="Write a review"></textarea>
                                                    <div style="margin: 3px 0">
                                                        <button type="submit" class="btn btn-sm btn-primary">Submit Review</button>
                                                    </div>
                                                </form>
                                                <div class="profile-message">
                                                    <ul>
                                                        <li class="message">
                                                            <img src="{{ asset('frontend/images/profile.JPG') }}" class="online" />
                                                            <span class="message-text">
                                                                <a href="javascript:void(0);" class="username">
                                                                    User 1
                                                                    <span class="float-right">
                                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                                        <i class="fa fa-star fa-2x text-muted"></i>
                                                                    </span>
                                                                </a>
                                                                <br>
                                                                Excellent product, love it!
                                                            </span>
                                                            <ul class="list-inline font-xs">
                                                                <li>
                                                                    <small class="text-muted"> Posted 1 year ago </small>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <hr>
                                                        <li class="message">
                                                            <img src="{{ asset('frontend/images/profile.JPG') }}" class="online" />
                                                            <span class="message-text">
                                                                <a href="javascript:void(0);" class="username">
                                                                    User 2
                                                                    <span class="float-right">
                                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                                    </span>
                                                                </a>
                                                                <br>
                                                                Excellent product, love it!
                                                            </span>
                                                            <ul class="list-inline font-xs">
                                                                <li>
                                                                    <small class="text-muted"> Posted 1 year ago </small>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                    </div>
                                </div>
                            </div>
                            <!-- end product -->
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
