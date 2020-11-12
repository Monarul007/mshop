@extends('layouts.master')

@section('content')
    <section class="contact-section">
		<div class="container">
		    <div class="row">
				@include('layouts.sidebar')
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<!-- Page info -->
					<div class="page-top-info">
						<div class="breadcrumb"> &nbsp;<a href="index.php">Home&nbsp;</a> » &nbsp;<a href="req_quotation.php">Request Custom Design&nbsp;</a> </div>
						<div class="section-title">
							<h3><span>Request Custom Design</span></h3>
						</div>
						<div class="category-info">
							<p>Welcome! Monarul Islam. Here you can edit your account info, change password, see order history, manage orders, check order status etc.
                            </p>
						</div>
					</div>
                    <!-- Page info end -->
                    <div class="information_content">
                        <h3>Request a custom design for jewelry</h3>
                        <div class="content inner">
                        						<form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="Name..." class="form-control" id="name" name="name">
								</div>
								<div class="form-holder">
									<input type="email" placeholder="Email Address..." class="form-control" id="email" name="email">
								</div>
                            </div>
                            <div class="form-row">
								<div class="form-holder">
									<label for="address">Contact Number</label>
									<input type="text" placeholder="Enter Contact Number" class="form-control" id="phone" name="ContactNumber">
								</div>
								<div class="form-holder">
                                    <label for="DesignImage">Upload images of the jewellery you'd like to repurpose.</label>
									<input type="file" name="image">
								</div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
									<label for="address">Address</label>
									<input type="text" name="req_address" placeholder="Enter your address">
								</div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="details">Any other info you'd like to include?</label>
                                    <textarea name="details" placeholder="If you have any special instruction, query or sayings you can describe here..." cols="30" rows="5"></textarea>
                                </div>
                                <div class="form-holder form-holder-2">
                                    <button type="submit" name="submit" class="site-btn" style="float: right;margin-top: 30px;">Submit Request
							    </button></div>
                            </div>
						</form>
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