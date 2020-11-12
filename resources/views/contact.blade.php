@extends('layouts.master')

@section('content')

    <section class="contact-section">
		<div class="container">
			<div class="row">
                @include('layouts.main-sidebar')
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<!-- Page info -->
					<div class="page-top-info">
						<div class="breadcrumb"> &nbsp;<a href="index.html">Home&nbsp;</a> » &nbsp;<a href="#">Contact Us&nbsp;</a> </div>
						<div class="section-title">
							<h3><span>Contact Us</span></h3>
						</div>
						<div class="category-info">
							<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ulla. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<!-- Page info end -->
					<div class="contact-info">
						<h3>Get in touch</h3>
						<div class="row">
							<div class="col-lg-4">
								<p>Main Str, no 23, New York</p>
								<p>+546 990221 123</p>
								<p>hosting@contact.com</p>
								<div class="contact-social">
									<a href="#"><i class="fa fa-pinterest"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="map"><iframe src="" style="border:0" allowfullscreen=""></iframe></div>
							</div>
						</div>
						<h3 style="margin-top:50px">Get in touch</h3>
						<form class="contact-form">
							<input type="text" placeholder="Your name">
							<input type="text" placeholder="Your e-mail">
							<input type="text" placeholder="Subject">
							<textarea placeholder="Message"></textarea>
							<button style="float: right;" class="site-btn">SEND NOW</button>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</section>

    <section class="related-product-section spad">
		<div class="container">
			<div class="section-title">
				<h2><span>YOUR FAVOURITES</span></h2>
			</div>
			<div class="product-slider owl-carousel owl-loaded owl-drag" style="display: inline-block;">		
				<div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-4993px, 0px, 0px); transition: all 0.25s ease 0s; width: 10282px;">
                        <div class="owl-item" style="width: 263.75px; margin-right: 30px;">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <a href=""><img src="admin/uploads/c7a89ed7fc.jpg" alt=""></a>
                                </div>
                                <div class="pi-text">
                                    <a href=""><p class="pi-title">Another Product edited</p></a>
                                    <p class="pi-desc">Ut wisi enim ad minim veniam, quis nostrud exerci tation ulla. Lorem ipsum dolor</p>
                                    <h6>53900.000 <span class="old-price"> 56788.000</span></h6>
                                    <div class="pi-links">
                                        <a href="product.php?id=21" class="add-card"><i class="flaticon-bag"></i><span>VIEW DETAILS</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 263.75px; margin-right: 30px;">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <a href=""><img src="admin/uploads/5682e4023d.png" alt=""></a>
                                </div>
                                <div class="pi-text">
                                    <a href=""><p class="pi-title">New Product 1</p></a>
                                    <p class="pi-desc">The Inspiration Inspired by the intricate beauty of trees, this collection feat</p>
                                    <h6>21500.000 <span class="old-price"> 22000.000</span></h6>
                                    <div class="pi-links">
                                        <a href="product.php?id=20" class="add-card"><i class="flaticon-bag"></i><span>VIEW DETAILS</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</section>

@endsection