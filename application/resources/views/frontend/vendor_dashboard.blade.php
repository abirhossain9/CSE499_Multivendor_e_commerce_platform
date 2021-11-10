<!DOCTYPE html>
<html lang="en">

<head>
	<title>Vendor Dashboard</title>
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
									<li><a href="#">Shop</a></li>
									<li><a href="#">Featuered Item</a></li>
									<li><a href="#">Pages</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
								<ul class="navbar_user">
									<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
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
			<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="hamburger_menu_content text-right">
				<ul class="menu_top_nav">
					<li class="menu_item"><a href="{{route('home')}}">Home</a></li>
					<li class="menu_item"><a href="#">Shop</a></li>
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
                    <div
                        class="dashboard_text d-flex flex-column justify-content-center align-items-center text-center">
                        <h4 style="margin-bottom: 10px;">Vendor Profile</h4>
                        <p>Customize <b>Shop</b> & Manage <b>Orders</b> Below</p>
                    </div>
                </div>
                <div class="main-body">
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="align-items-center text-center">
                                        @if (Auth::user()->image==NULL)
                                         <img src="{{asset('frontend/images/user/default.JPG')}}" alt="" width="150">
                                        @else
                                         <img src="{{asset('frontend/images/user/'.Auth::user()->image)}}" alt="" width="150">
                                        @endif                                        <div class="mt-3">
                                            <h4>{{Auth::user()->name}}</h4>
                                            <p class="text-primary mb-1">Silver Seller</p>
                                            <p class="text-secondary font-size-sm">Bashundhara, Dhaka</p>
                                            <button class="btn btn-primary" style="padding: 5px 5px">Orders</button>
                                            <button class="btn btn-outline-primary" style="padding: 5px 5px">Manage</button>
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
                                            <h6>Full Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">{{Auth::user()->name}}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6>Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">{{Auth::user()->email}}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6>Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">{{Auth::user()->phone}}</div>
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
                                        <div class="col-sm-12">
                                            <a class="btn btn-info" href="{{ route('user.editdashboard')}}">Edit Profile</a>
                                            @if(Auth::user()->status == 1 && Auth::user()->shop_status == 1)
                                            <a class="btn btn-info" href="{{ route('shop.dashboard')}}">Manage Shop</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- shop setup --}}
                            @if (Auth::user()->status == 2)
                                <div class="alert alert-warning" role="alert">
                                    Your account has not been activated yet. Please wait till the admin set your status active!
                                </div>
                                @elseif(Auth::user()->status == 1 && Auth::user()->shop_status == 2)
                                <div class="alert alert-success" role="alert">
                                    Congratulation, your account has been activated. Please setup your shop!<hr>
                                    <a class="btn btn-success btn-block" href="{{route('vendor.shopdetails')}}">Setup Shop</a>
                                </div>
                            @endif

                        </div>



                        {{-- order info --}}
                        <div class="col-md-12">
                            <div class="card mb-3">

                                <div class="accordion" id="orderSection">

                                    <div class="card">
                                        <div class="card-header" id="orders">
                                            <h2 class="mb-0">
                                                <button class="btn btn-outline-info btn-block text-left" type="button" data-toggle="collapse" data-target="#myOrder" aria-expanded="true" aria-controls="myOrder">
                                                 Orders
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="myOrder" class="collapse show" aria-labelledby="orders" data-parent="">
                                            <div class="card-body">
                                                <table class="table table-hover table-bordered table-sm table-responsive-sm">
                                                    <caption>Active Orders</caption>
                                                    <thead>
                                                        <tr class="table-active">
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Product Name</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Placed On</th>
                                                            <th scope="col">Buyer</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Item Name 1</td>
                                                            <td>1</td>
                                                            <td>14/10/2021</td>
                                                            <td>User 1</td>
                                                            <td>500৳</td>
                                                            <td><a class="btn btn-link btn-sm" href="javascript:void(0)" role="button">Manage</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Item Name 2</td>
                                                            <td>2</td>
                                                            <td>14/10/2021</td>
                                                            <td>User 2</td>
                                                            <td>1000৳</td>
                                                            <td><a class="btn btn-link btn-sm" href="javascript:void(0)" role="button">Manage</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="orderHistory">
                                            <h2 class="mb-0">
                                                <button class="btn btn-outline-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#myOrderHistory" aria-expanded="false" aria-controls="myOrderHistory">
                                                 Order History
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="myOrderHistory" class="collapse" aria-labelledby="orderHistory" data-parent="">
                                            <div class="card-body">
                                                <table class="table table-hover table-bordered table-sm table-responsive-sm">
                                                    <caption>Completed Orders</caption>
                                                    <thead>
                                                        <tr class="table-active">
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Product Name</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Placed On</th>
                                                            <th scope="col">Seller</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Item Name 1</td>
                                                            <td>1</td>
                                                            <td>14/10/2021</td>
                                                            <td>User 1</td>
                                                            <td>500৳</td>
                                                            <td><a class="btn btn-success btn-sm disabled" role="button">Completed</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Item Name 2</td>
                                                            <td>2</td>
                                                            <td>14/10/2021</td>
                                                            <td>User 2</td>
                                                            <td>1000৳</td>
                                                            <td><a class="btn btn-success btn-sm disabled" role="button">Completed</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="card">
                                        <div class="card-header" id="returns">
                                            <h2 class="mb-0">
                                                <button class="btn btn-outline-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#myReturns" aria-expanded="false" aria-controls="myReturns">
                                                My Returns
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="myReturns" class="collapse" aria-labelledby="returns" data-parent="#orderSection">
                                            <div class="card-body">
                                                <table class="table table-hover table-bordered table-sm table-responsive-sm">
                                                    <caption>Returned Orders</caption>
                                                    <thead>
                                                        <tr class="table-active">
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Product Name</th>
                                                            <th scope="col">Placed On</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Item Name 1</td>
                                                            <td>14/10/2021</td>
                                                            <td>500৳</td>
                                                            <td><a class="btn btn-link btn-sm" href="javascript:void(0)" role="button">Manage</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Item Name 2</td>
                                                            <td>14/10/2021</td>
                                                            <td>1000৳</td>
                                                            <td><a class="btn btn-link btn-sm" href="javascript:void(0)" role="button">Manage</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="card">
                                        <div class="card-header" id="cancellations">
                                            <h2 class="mb-0">
                                                <button class="btn btn-outline-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#myCancellations" aria-expanded="false" aria-controls="myCancellations">
                                                 Cancellations
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="myCancellations" class="collapse" aria-labelledby="cancellations" data-parent="">
                                            <div class="card-body">
                                                <table class="table table-hover table-bordered table-sm table-responsive-sm">
                                                    <caption>Canceled Orders</caption>
                                                    <thead>
                                                        <tr class="table-active">
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Product Name</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Placed On</th>
                                                            <th scope="col">Buyer</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Item Name 1</td>
                                                            <td>1</td>
                                                            <td>14/10/2021</td>
                                                            <td>User 1</td>
                                                            <td>500৳</td>
                                                            <td><a class="btn btn-danger btn-sm disabled" role="button">Canceled</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Item Name 2</td>
                                                            <td>2</td>
                                                            <td>14/10/2021</td>
                                                            <td>User 2</td>
                                                            <td>1000৳</td>
                                                            <td><a class="btn btn-danger btn-sm disabled" role="button">Canceled</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="card">
                                        <div class="card-header" id="wishlists">
                                            <h2 class="mb-0">
                                                <button class="btn btn-outline-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#myWishlists" aria-expanded="false" aria-controls="myWishlists">
                                                My Wishlists
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="myWishlists" class="collapse" aria-labelledby="wishlists" data-parent="#orderSection">
                                            <div class="card-body">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam maxime, ullam placeat sapiente eaque numquam vero aliquam nemo enim saepe.
                                            </div>
                                        </div>
                                    </div> --}}

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
						<div
							class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
							<ul class="footer_nav">
								<li><a href="#">Blog</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-6">
						<div
							class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
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

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	{{-- <!-- Bootstrap JS CDN -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
		integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
		crossorigin="anonymous"></script>
	<!-- jquery JS File -->
	<script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script> --}}
	<!-- Isotope JS File -->
	<script src="{{ asset('frontend/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
	<!-- Owl Carousel JS File -->
	<script src="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
	<!-- Javascript File -->
	<script src="{{ asset('frontend/js/custom.js') }}"></script>
</body>

</html>
