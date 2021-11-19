<!DOCTYPE html>
<html lang="en">

<head>
	<title>Shop Details</title>
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
									<li><a href="{{route('user.login')}}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
									<li class="checkout">
										<a href="#">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
											<span id="checkout_items" class="checkout_items">2</span>
										</a>
									</li>
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

		<!-- Vendor Reguster -->
		<div class="ven_reg">
			<div class="container">
				<div class="row">

					<div class="col-lg-12">
						<div
							class="reg_text d-flex flex-column justify-content-center align-items-center text-center">
							<h4 style="margin-bottom: 10px;">Welcome To E-Mart.</h4>
							<p>Please Enter Your <b>Shop Details</b> Below</p>
						</div>
					</div>

                    <div class="col-lg-6 offset-lg-3">

                        <form method="POST" action="{{ route('shop.store') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Shop Name -->

                            <div class="form-group">
                                 <label>Shop Name</label>
                                 <input type="text" name="shop_name" placeholder="Enter Your Shop name" class="form-control" required="required" autocomplete="off">
                            </div>

                            <!-- Email Address -->
                            <div class="form-group" hidden>
                                 <label>Shop Owner</label>
                                 <input type="text" name="shop_owner" value="{{ Auth::user()->id}}" class="form-control" required="required" autocomplete="off">
                            </div>

                            <!-- Shop Address -->
                             <div class="form-group">
                                 <label>Shop Address</label>
                                 <input type="text" name="shop_address" placeholder="Enter Your Shop Address" class="form-control" required="required" autocomplete="off">
                            </div>

                            <!-- Phone Num -->
                            <div class="form-group">
                                 <label>Shop Phone</label>
                                 <input type="text" name="shop_phone" placeholder="Enter Your Shop Contact No" class="form-control" required="required" autocomplete="off">
                            </div>
                            <div class="form-group">
                                 <label>Shop Description [Your shop will be approved based on your description]</label>
                                 <textarea class="form-control" name="shop_description" rows="4" required></textarea>
                            </div>

                        {{-- shop category --}}
                            <div class="form-group">
                                <label>Shop Type [eg: groceries, cosmetics, sports etc]</label>
                                <input type="text" name="shop_type" placeholder="Enter Your Shop Type" class="form-control" required="required" autocomplete="off">
                            </div>
                             {{-- shop image --}}
                             <div class="form-gorup">
                                <label>Shop Image</label>
                                 <input type="file" name="shop_image" class="form-control-file" required>
                              </div>
                              <br>

                            <div class="form-group tx-12 alert alert-warning" >By clicking the Register Shop button below, you agreed to our privacy policy and terms of use of our website.</div>
                            <div class="form-group d-flex flex-column justify-content-center align-items-center">
                                <button type="submit" class="btn cus_log_submit_btn btn-block">Register Shop</button>
                            </div>
                        </form>

                    </div>


				</div>
			</div>
		</div>

		<!-- Benefit -->
		<div class="benefit">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title">
							<h2>Benefits</h2>
						</div>
					</div>
				</div>
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


	<!-- Bootstrap JS CDN -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
		integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
		crossorigin="anonymous"></script>
	<!-- jquery JS File -->
	<script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
	<!-- Isotope JS File -->
	<script src="{{ asset('frontend/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
	<!-- Owl Carousel JS File -->
	<script src="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
	<!-- Javascript File -->
	<script src="{{ asset('frontend/js/custom.js') }}"></script>
</body>

</html>
