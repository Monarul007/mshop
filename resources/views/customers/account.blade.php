@extends('layouts.master')

@section('content')

    <section class="contact-section">
		<div class="container">
			<div class="row">
				@include('layouts.sidebar')
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<!-- Page info -->
					<div class="page-top-info">
						<div class="breadcrumb"> &nbsp;<a href="index.php">Home&nbsp;</a> » &nbsp;<a href="my_account.php">My Account&nbsp;</a> </div>
						<div class="section-title">
							<h3><span>Manage Your Account</span></h3>
						</div>
						<div class="category-info">
							<p>Welcome! Monarul Islam. Here you can edit your account info, change password, see order history, manage orders, check order status etc.
                            </p>
						</div>
					</div>
                    <!-- Page info end -->
                    <div class="information_content">
                        <h3>Account Details</h3>
                        <div class="content inner">
							<div class="table-responsive">
								<table class="table table-hover table-bordered table-sm">
									<tbody>
										<tr class="space-row">
											<th>Full Name:</th>
											<td id="fullname-val">Monarul Islam</td>
										</tr>
										<tr class="space-row">
											<th>Username:</th>
											<td id="username-val">monarul007@gmail.com</td>
										</tr>
										<tr class="space-row">
											<th>Email Address:</th>
											<td id="email-val">monarul007@gmail.com</td>
										</tr>
										<tr class="space-row">
											<th>Phone Number:</th>
											<td id="phone-val">01782833296</td>
										</tr>
										<tr class="space-row">
											<th>Billing Address:</th>
											<td id="address-val">Sapahar, Naogaon</td>
										</tr>
										<tr class="space-row">
											<th>Postcode / ZIP:</th>
											<td id="account-number-val">6560</td>
										</tr>
										<tr class="space-row">
											<th>Special Notes:</th>
											<td id="account-name-val">kkkk</td>
										</tr>
									</tbody>
								</table>
							</div>
                        </div>
                        <h3>My Requests</h3>
                        <div class="content inner">
							<div class="table table-sm table-hover table-bordered">
                                <table class="mb-0 table">
                                    <thead style="background-color: antiquewhite;">
                                            <tr>
                                                <th>SL.</th>
                                                <th>Request Date</th>
                                                <th>Requested By</th>
                                                <th>Design Image</th>
                                                <th>Design Type</th>
                                                <th>Design For</th>
                                                <th>Phone</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										                                        </tbody>
								</table>
                            </div>
                        </div>   
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