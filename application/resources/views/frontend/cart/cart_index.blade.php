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
                                            <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0 cart_image">
                                                <img src="{{ asset('backend/img/product/'.$item->product->product_image) }}" class="d-block w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-9 col-xl-9">
                                            <div>

                                                <div class="d-flex justify-content-between">
                                                    <div class="col-md-8 ">
                                                        <div class="row"><h5>{{ $item->product->product_name }}</h5></div>
                                                        <div class="row"><p class="mb-3 text-muted text-uppercase small">{{ $item->product->	product_description_short }}</p></div>
                                                        <div class="row"><p class="mb-2 text-muted text-uppercase small">Available Quantity: {{ $item->product->prodcut_quantity }}</p></div>
                                                    </div>
                                                    <div class="col-md-4 input-group quantity_size form-control" style="background: none; border: none;">
                                                        <form action="{{ route('carts.update',$item->id) }}" method="POST">
                                                            @csrf

                                                            <div class="input-group mb-3">
                                                                <input type="number" name="product_quantityp" class="form-control" required="required" value={{ $item->product_quantity }} autocomplete="off">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-success" type="submit">update</button>
                                                                </div>
                                                            </div>

                                                            {{-- <input type="text" name="product_quantityp" class="form-control" required="required" value={{ $item->product_quantity }} autocomplete="off">
                                                            <input type="submit" value="update item" class="btn btn-success"> --}}
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2">
                                                        <div class="row">
                                                            <form action="{{ route('carts.destroy',$item->id) }}" method="POST">
                                                                @csrf

                                                                <button type="submit" class="btn btn-outline-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i> remove</button>
                                                                {{-- <input type="submit" value="delete item" class="btn btn-danger btn-sm"> --}}
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p class="mb-0 float-right text-info"><span><strong id="summary">Item Price: {{ $item->product->product_price}}</strong></span></p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p class="mb-0  float-right red_title_color"><span><strong id="summary">Grand Total: {{ $item->product->product_price * $item->product_quantity }}</strong></span></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php $i++ @endphp
                                    @php $total_price += $item->product->product_price * $item->product_quantity @endphp
                                    @endforeach

                                    <hr class="mb-4">
                                </div>
                            </div>
                            <!-- Card -->

                            {{-- billing info --}}
                            <h4 class="mb-3 red_title_color">Billing Information</h4>
                            <hr class="mb-3">
                            <div class="col-lg-12 col-md-12">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="address">Full Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="" required="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="address">Billing Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="" required="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="address">Optional Information</label>
                                        <input type="text" class="form-control" id="address" placeholder="i.e. house near united hospital | Floor no 4 etc..." required="">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="state">Division</label>
                                            <select class="custom-select d-block w-100" id="state" required="">
                                                <option value="1">Dhaka</option>
                                                <option value="2">Barisal</option>
                                                <option value="3">Chittagong </option>
                                                <option value="4">Khulna</option>
                                                <option value="5">Mymensingh </option>
                                                <option value="6">Rajshahi</option>
                                                <option value="7">Sylhet</option>
                                                <option value="8">Rangpur</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="zip">Zip</label>
                                            <input type="text" class="form-control" id="zip" placeholder="" required="">
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Card -->
                            <div class="mb-3">
                                <div class="pt-4">
                                    <h5 class="mb-2">Expected shipping delivery</h5>
                                    <p class="mb-0"> Within  7 Days</p>
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
                                            Shipping Fee
                                            <span>0 ৳</span>
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

                                        <!-- coupon -->
                                        <div class="mb-3">
                                            <div class="pt-4">
                                                <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
                                                    aria-expanded="false" aria-controls="collapseExample">
                                                    Add a discount code (optional)
                                                    <span><i class="fas fa-chevron-down pt-1"></i></span>
                                                </a>
                                                <div class="collapse" id="collapseExample">
                                                    <div class="mt-3">
                                                        <div class="md-form md-outline mb-0">
                                                            <input type="text" id="discount-code" class="form-control font-weight-light"
                                                            placeholder="Enter coupon code">
                                                            <input class="mt-2 btn btn-primary btn-block" type="submit" value="Apply Coupon">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- coupon -->

                                    </div>

                                    <hr class="mb-4">
                                    <p class="red_title_color mb-0"><i class="fas fa-info-circle mr-1"></i> Please recheck all the products, quantity and billing address before checkout.</p>
                                    <hr class="mb-4">

                                    <button type="button" class="btn btn-primary btn-block"><i class="fas fa-long-arrow-alt-right"></i> go to checkout</button>
                                    <a class="btn btn-primary btn-block" href="{{route('shop.index')}}" role="button"><i class="fas fa-long-arrow-alt-left"></i> continue shopping</a>

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
