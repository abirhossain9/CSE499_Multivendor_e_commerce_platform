<!DOCTYPE html>
<html lang="en">

<head>
	<title>Customer Register</title>
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
								<a href="index.html">E-<span>Mart</span></a>
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
					<li class="menu_item"><a href="#">Shop</a></li>
					<li class="menu_item"><a href="#">Promotion</a></li>
					<li class="menu_item"><a href="#">Pages</a></li>
					<li class="menu_item"><a href="#">Blog</a></li>
					<li class="menu_item"><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>

		<!-- customer login -->
		<div class="cus_reg">
			<div class="container">
				<div class="row">

					<div class="col-lg-12">
						<div
							class="reg_text d-flex flex-column justify-content-center align-items-center text-center">
							<h4 style="margin-bottom: 10px;">Welcome To E-Mart</h4>
							<p>Please <b>Register</b> to Continue</p>
						</div>
					</div>

					<div class="col-lg-6 offset-lg-3">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
						        <form method="POST" action="{{ route('register') }}">
            @csrf
          <!-- Name -->
          <div class="form-group">
            <x-label for="name" :value="__('Name')" />
            <x-input id="name" class="form-control" type="text" placeholder="Enter your username" name="name" :value="old('name')" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="form-group">
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="form-control" type="email" placeholder="Enter your email" name="email" :value="old('email')" required />
        </div>
        <!-- Password -->
        <div class="form-group">
            <x-label for="password" :value="__('Password')" />
            <x-input id="password" class="form-control" type="password" name="password" required placeholder="Enter your password" autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-input id="password_confirmation" class="form-control" type="password" placeholder="Confirm your password" name="password_confirmation" required />
        </div>

          <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
          <div class="form-group">
            <button type="submit" class="btn cus_log_submit_btn btn-block">Sign Up</button>
          </div>
        </form>
					</div>

					<div class="col-lg-12">
						<div
							class="reg_text d-flex flex-column justify-content-center align-items-center text-center">
							<h4 style="margin-bottom: 20px;">Old Member?</h4>
							<p>Please <b><a href="{{route('user.login')}}">Login Here!</a></b></p>
						</div>
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
