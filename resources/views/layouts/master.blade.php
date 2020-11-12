
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" mshop | eCommerce Jewelry Shop">
	<meta name="keywords" content="eGoona, eCommerce, creative, html, jewelry">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'eGohona | Jewelry at your door step') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body class="" cz-shortcut-listen="true" style="">

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.php" class="site-logo">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form action="search.php" method="get" class="header-search-form">
							<input name="search" type="text" placeholder="Search on eGohona ....">
							<button type="submiit" name="submit" value="search"><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item dropdown">
								<i class="flaticon-profile"></i>
																		<a href="login.php">Login</a>
															</div>
							<div class="up-item dropdown">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>
										2									</span>
								</div>
																<a href="#" style="padding: 10px 0;" class="dropdown-toggle" id="cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shopping Cart</a>
								<div class="inner dropdown-menu dropdown-menu-right" aria-labelledby="cart">
								<div class="shopping-cart col-12 table-responsive" style="padding: 0 10px;">
																		<table class="table table-sm table-hover table-bordered">
                                        <thead style="background-color: antiquewhite;">
                                            <tr>
                                            <td class="name">Product Name</td>
                                            <td class="model">Model</td>
                                            <td class="tquantity">Qty.</td>
                                            <td class="price">Price</td>
                                            <td class="total">Total</td>
                                            </tr>
                                        </thead>
										                                        <tbody>
										
                                            <tr>
                                            <td class="name"><a href="product.php?id=19">Simple Solitaire Pendant 4</a></td>
                                            <td class="model">EG00011</td>
                                            <td class="tquantity">2</td>
                                            <td class="price">৳ 35832.00</td>
                                            <td class="total">৳ 71664</td>
                                            </tr>
											
                                        </tbody>
										
										                                        <tbody>
										
                                            <tr>
                                            <td class="name"><a href="product.php?id=18">Simple Solitaire Pendant 3</a></td>
                                            <td class="model">EG00011</td>
                                            <td class="tquantity">2</td>
                                            <td class="price">৳ 35832.00</td>
                                            <td class="total">৳ 71664</td>
                                            </tr>
											
                                        </tbody>
										
										                                        <tfoot>
                                            <tr>
                                            <td colspan="4" class="price"><b>Sub-Total:</b></td>
                                            <td class="total">৳ 143328</td>
                                            </tr>
                                            <tr>
                                            <td colspan="4" class="price"><b>Flat Shipping Rate:</b></td>
                                            <td class="total">৳ 60</td>
                                            </tr>
                                            <tr>
                                            <td colspan="4" class="price"><b>Total:</b></td>
                                            <td class="total">৳ 143388</td>
                                            </tr>
																						
                                        </tfoot>
                                        </table>
										<div class="btn-group dropup" style="float: right;margin-bottom: 20px;">
											<a href="cart.php" class="site-btn" style="color: #fff;">View Cart</a>
											<a href="checkout.php" class="site-btn" style="color: #fff; margin-left: 10px;">Checkout</a>
										</div>
																			</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container"><div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a><ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
					<li><a href="index.php" role="menuitem" tabindex="-1">Home</a></li>
					<li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="#" tabindex="-1">Rings</a>
						<span class="slicknav_arrow"><i class="flaticon-right-arrow"></i></span></a><ul class="sub-menu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
													<li><a href="category.php?id=14" role="menuitem" tabindex="-1">Engagement Rings</a></li>
													<li><a href="category.php?id=15" role="menuitem" tabindex="-1">Bridal Set</a></li>
													<li><a href="category.php?id=16" role="menuitem" tabindex="-1">Casual Rings</a></li>
													<li><a href="category.php?id=17" role="menuitem" tabindex="-1">Flexi Rings</a></li>
												</ul>
					</li>
					<li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="#" tabindex="-1">Earrings</a>
						<span class="slicknav_arrow"><i class="flaticon-right-arrow"></i></span></a><ul class="sub-menu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
													<li><a href="category.php?id=19" role="menuitem" tabindex="-1">Stud Earrings</a></li>
													<li><a href="category.php?id=20" role="menuitem" tabindex="-1">Jhumka Earrings</a></li>
													<li><a href="category.php?id=21" role="menuitem" tabindex="-1">Ear Cuff Earrings</a></li>
													<li><a href="category.php?id=22" role="menuitem" tabindex="-1">Pearl Earrings</a></li>
												</ul>
					</li>
					<li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="#" tabindex="-1">Bracelets &amp; Bangles</a>
						<span class="slicknav_arrow"><i class="flaticon-right-arrow"></i></span></a><ul class="sub-menu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
													<li><a href="category.php?id=24" role="menuitem" tabindex="-1">Chain Bracelets</a></li>
													<li><a href="category.php?id=25" role="menuitem" tabindex="-1">Flexible Bracelets</a></li>
													<li><a href="category.php?id=26" role="menuitem" tabindex="-1">Gold Bangles</a></li>
													<li><a href="category.php?id=27" role="menuitem" tabindex="-1">Diamond Bangles</a></li>
												</ul>
					</li>
					<li><a href="category.php" role="menuitem" tabindex="-1">Shop Page
						<span class="new">New</span>
					</a></li>
					<li><a href="req_quotation.php" role="menuitem" tabindex="-1">Submit Design</a></li>
					<li><a href="about.php" role="menuitem" tabindex="-1">About Us</a></li>
					<li><a href="./contact.php" role="menuitem" tabindex="-1">Contact Us</a></li>
				</ul></div>
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Rings</a>
						<ul class="sub-menu">
													<li><a href="category.php?id=14">Engagement Rings</a></li>
													<li><a href="category.php?id=15">Bridal Set</a></li>
													<li><a href="category.php?id=16">Casual Rings</a></li>
													<li><a href="category.php?id=17">Flexi Rings</a></li>
												</ul>
					</li>
					<li><a href="#">Earrings</a>
						<ul class="sub-menu">
													<li><a href="category.php?id=19">Stud Earrings</a></li>
													<li><a href="category.php?id=20">Jhumka Earrings</a></li>
													<li><a href="category.php?id=21">Ear Cuff Earrings</a></li>
													<li><a href="category.php?id=22">Pearl Earrings</a></li>
												</ul>
					</li>
					<li><a href="#">Bracelets &amp; Bangles</a>
						<ul class="sub-menu">
													<li><a href="category.php?id=24">Chain Bracelets</a></li>
													<li><a href="category.php?id=25">Flexible Bracelets</a></li>
													<li><a href="category.php?id=26">Gold Bangles</a></li>
													<li><a href="category.php?id=27">Diamond Bangles</a></li>
												</ul>
					</li>
					<li><a href="category.php">Shop Page
						<span class="new">New</span>
					</a></li>
					<li><a href="req_quotation.php">Submit Design</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="./contact.php">Contact Us</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->

	@yield('content')

	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Customer Service</h2>
						<ul>
							<li><a href="req_quotation.php">Request Custom Design</a></li>
							<li><a href="">About Us</a></li>
							<li><a href="order_history.php">Track Orders</a></li>
							<li><a href="my_account.php">My Account</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Latest Products</h2>
						<div class="fw-latest-post-widget">
													<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="admin/uploads/c7a89ed7fc.jpg" style="background-image: url(&quot;admin/uploads/c7a89ed7fc.jpg&quot;);"></div>
								<div class="lp-content">
									<h6>Another Product edited</h6>
									<span>June 30, 2020, 11:03 pm</span>
									<a href="product.php?id=21" class="readmore">Read More</a>
								</div>
							</div>
													<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="admin/uploads/5682e4023d.png" style="background-image: url(&quot;admin/uploads/5682e4023d.png&quot;);"></div>
								<div class="lp-content">
									<h6>New Product 1</h6>
									<span>June 19, 2020, 1:13 pm</span>
									<a href="product.php?id=20" class="readmore">Read More</a>
								</div>
							</div>
												</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Contact With Us</h2>
						<div class="con-info">
							<span>A.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<p class="text-center">Copyright ©<script>document.write(new Date().getFullYear());</script>2020 All rights reserved - Developed by <a href="mailto:monarul007@gmail.com" target="_blank">Monarul Islam</a></p>
			</div>
		</div>
	</section>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/jquery.slicknav.min.js')}}"></script>
	<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('js/jquery.nicescroll.min.js')}}"></script>
	<script src="{{ asset('js/jquery.zoom.min.js')}}"></script>
	<script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/jquery.steps.js')}}"></script>
	
</body></html>