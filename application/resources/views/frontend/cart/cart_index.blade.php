<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Cart</title>
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
                                        <li class="dropdown">
                                            <button class="btn dropdown-toggle dropdown-toggle-split" type="button" id="dropdownCartButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <li><a href="javascript:void(0)"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span id="checkout_items" class="checkout_items">2</span></a></li>
                                            </button>

                                            <div class="dropdown-menu" aria-labelledby="dropdownCartButton">
                                                {{-- <div class="col-md-12 dropdown-item">
                                                    <ul class="shopping-cart-items">
                                                        <li class="clearfix">
                                                            <div class="col-md-4  text-left">
                                                                <img src="{{ asset('frontend/images/product_2.png') }}" alt="" />
                                                            </div>
                                                            <div class="col-md-8  text-right">
                                                                <span class="item-name">black tshirt</span>
                                                                <span class="item-price">500 ৳</span>
                                                                <span class="item-quantity">Quantity: 01</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                                <div class="container">
                                                    <div class="shopping-cart">
                                                        <div class="shopping-cart-header">
                                                            <i class="fa fa-shopping-cart cart-icon"></i><span class="cart_badge">2</span>
                                                            <div class="shopping-cart-total">
                                                                <span class="text-info">Total:</span>
                                                                <span class="red_title_color">1000 ৳</span>
                                                            </div>
                                                        </div> <!--end shopping-cart-header -->

                                                        <ul class="shopping-cart-items">
                                                            <li class="clearfix">
                                                                <img src="{{ asset('frontend/images/product_2.png') }}" alt="item1" />
                                                                <span class="cartitem-name">black tshirt</span>
                                                                <span class="cartitem-price">500 ৳</span>
                                                                <span class="cartitem-quantity">Quantity: 01</span>
                                                            </li>

                                                            <li class="clearfix">
                                                                <img src="{{ asset('frontend/images/product_2.png') }}" alt="item1" />
                                                                <span class="cartitem-name">black tshirt</span>
                                                                <span class="cartitem-price">500 ৳</span>
                                                                <span class="cartitem-quantity">Quantity: 01</span>
                                                            </li>
                                                        </ul>
                                                        <div class="shopping-cart-total">
                                                                <span class="text-info">Total:</span>
                                                                <span class="red_title_color">1000 ৳</span>
                                                        </div>
                                                        <button type="button" class="btn btn-primary btn-block">checkout</button>
                                                    </div> <!--end shopping-cart -->
                                                    </div> <!--end container -->
                                            </div>


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


            <!-- Product Details -->
            <div class="find_shops">
                <div class="container">

                    <div class="row">
                        <div class="col text-center">
                            <div class="section_title find_shop_title">
                                <h2>Cart</h2>
                            </div>
                        </div>
                    </div>

                    {{-- cart info --}}
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-lg-8">

                            <!-- Card -->
                            <div class="mb-3">
                                <div class="pt-4 wish-list">
                                @php $i = 1 @endphp
                                @php $total_price = 0 @endphp
                                <h5 class="mb-4 red_title_color">Cart (<span>{{ $cartItems->count() }}</span> items)</h5>
                                @foreach ($cartItems as $item)

                                <div class="row mb-4">
                                    <div class="col-md-5 col-lg-3 col-xl-3">
                                        <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                            <img src="{{ asset('backend/img/product/'.$item->product->product_image) }}" class="d-block w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-lg-9 col-xl-9">
                                        <div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5>{{ $item->product->product_name }}</h5>
                                                    <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                                                    <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                                                    <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                                                </div>
                                                <div class="input-group quantity_size form-control" style="background: none; border: none;">
                                                    {{--  <span class="input-group-prepend">
                                                        <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="quant[{{ $i }}]">
                                                            <span class="fa fa-minus"></span>
                                                        </button>
                                                    </span>
                                                    <input type="text" name="quant[{{ $i }}]" class="form-control input-number" value="{{ $item->product_quantity }}" min="1" max="10">
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[{{ $i }}]">
                                                            <span class="fa fa-plus"></span>
                                                        </button>
                                                    </span>  --}}
                                                    <form action="{{ route('carts.update',$item->id) }}" method="POST">
                                                        @csrf
                                                        <input type="text" name="product_quantityp" class="form-control" required="required" value={{ $item->product_quantity }} autocomplete="off">
                                                        <input type="submit" value="Update item" class="btn btn-success">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <form action="{{ route('carts.delete',$item->id) }}" method="POST">
                                                        @csrf
                                                        <input type="submit" value="Delete item" class="btn btn-success">
                                                    </form>
                                                </div>
                                                <p class="mb-0"><span><strong id="summary">Each Item Price : {{ $item->product->product_price}}</strong></span></p class="mb-0">
                                                <p class="mb-0"><span><strong id="summary">Grand Total: {{ $item->product->product_price * $item->product_quantity }}</strong></span></p class="mb-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 @php $i++ @endphp
                                 @php $total_price += $item->product->product_price * $item->product_quantity @endphp
                                @endforeach

                                <hr class="mb-4">
                                {{-- <div class="row mb-4">
                                    <div class="col-md-5 col-lg-3 col-xl-3">
                                        <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                            <img class="img-fluid w-100" src="{{ asset('frontend/images/product_2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-lg-9 col-xl-9">
                                        <div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5>Black t-shirt</h5>
                                                    <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                                                    <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                                                    <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                                                </div>
                                                <div class="input-group quantity_size form-control" style="background: none; border: none;">
                                                    <span class="input-group-prepend">
                                                        <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                                                            <span class="fa fa-minus"></span>
                                                        </button>
                                                    </span>
                                                    <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="10">
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[2]">
                                                            <span class="fa fa-plus"></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="javascript:void(0)" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                                        class="fas fa-trash-alt mr-1"></i> Remove item
                                                    </a>
                                                </div>
                                                <p class="mb-0"><span><strong id="summary">500 ৳</strong></span></p class="mb-0">
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <p class="red_title_color mb-0"><i class="fas fa-info-circle mr-1"></i> Please recheck all the products and quantity before checkout.</p>

                                </div>
                            </div>
                            <!-- Card -->

                            <!-- Card -->
                            <div class="mb-3">
                                <div class="pt-4">
                                    <h5 class="mb-4">Expected shipping delivery</h5>
                                    <p class="mb-0"> Tuesday, 12.03.2021 - Sunday, 16.03.2021</p>
                                    <p class="text-muted small">condition applied</p>
                                </div>
                            </div>
                            <!-- Card -->

                            <!-- Card -->
                            <div class="mb-3">
                                <div class="pt-4">

                                <h5 class="mb-4">We accept</h5>

                                <img class="mr-2" width="45px"
                                    src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                    alt="Visa">
                                <img class="mr-2" width="45px"
                                    src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                    alt="American Express">
                                <img class="mr-2" width="45px"
                                    src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                    alt="Mastercard">
                                <img class="mr-2" width="45px"
                                    src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
                                    alt="PayPal acceptance mark">
                                </div>
                            </div>
                            <!-- Card -->

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4">

                            <!-- Card -->
                            <div class="mb-3">
                                <div class="pt-4">

                                    <h5 class="mb-3">Payment Information</h5>

                                    <div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 pb-0">
                                            Total Amount
                                            <span>{{ $total_price}} ৳</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Shipping
                                            <span>Address</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 mb-3">
                                            <div>
                                                <strong>The total amount of</strong>
                                                <strong>
                                                <p class="mb-0">(Including Coupon)</p>
                                                </strong>
                                            </div>
                                            <span><strong>{{ $total_price}}  ৳</strong></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <button type="button" class="btn btn-primary btn-block"><i class="fas fa-long-arrow-alt-right"></i> go to checkout</button>
                                    <a class="btn btn-primary btn-block" href="{{route('shop.index')}}" role="button"><i class="fas fa-long-arrow-alt-left"></i> continue shopping</a>

                                </div>
                            </div>
                            <!-- Card -->

                            <!-- Card -->
                            <div class="mb-3">
                                <div class="pt-4">
                                    <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        Add a discount code (optional)
                                        <span><i class="fas fa-chevron-down pt-1"></i></span>
                                    </a>
                                    <div class="" id="collapseExample">
                                        <div class="mt-3">
                                            <div class="md-form md-outline mb-0">
                                                <input type="text" id="discount-code" class="form-control font-weight-light"
                                                placeholder="Enter coupon code">
                                                <input class="mt-2 btn btn-primary btn-block" type="submit" value="Submit">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->

                            </div>
                            <!--Grid column-->

                        </div>
                        <!-- Grid row -->



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
