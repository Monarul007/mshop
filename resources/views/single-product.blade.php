@extends('layouts.master')

@section('content')
    
    <section class="product-section">
		<div class="container">
			<div class="row">
                @include('layouts.main-sidebar')
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
									<!-- Page info -->
					<div class="page-top-info">
						<div class="breadcrumb"> &nbsp;<a href="index.php">Home&nbsp;</a> » &nbsp;<a href="product.php?id=5">Mesh Cluster Ring&nbsp;</a> </div>
						<div class="section-title">
							<h3><span>Mesh Cluster Ring</span></h3>
						</div>
					</div>
					<!-- Page info end -->
										
			<div class="row">
								<div class="col-lg-6">
					<div class="product-pic-zoom" style="position: relative; overflow: hidden;">
						<img class="product-big-img" src="admin/uploads/f66aed52cf.jpg" alt="">
					<img role="presentation" alt="" src="http://localhost/egohona/admin/uploads/f66aed52cf.jpg" class="zoomImg" style="position: absolute; top: -428.809px; left: -232.461px; opacity: 0; width: 850px; height: 850px; border: none; max-width: none; max-height: none;"></div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<div class="pt active" data-imgbigurl="admin/uploads/f66aed52cf.jpg"><img src="admin/uploads/f66aed52cf.jpg" alt=""></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h3 class="p-price"><span class="old-price"> 17885.000</span>17085.000</h3>
					<h4 class="p-stock">Available: <span>
					In Stock					</span></h4>
					<h4 class="p-stock">Brand: <span>eGohona</span></h4>
					<h4 class="p-stock">Product Code: <span>EG0001</span></h4>
					
					<div class="quantity">
						<p>Qty:</p>
						<div class="pro-qty"><span class="dec qtybtn"></span>
						<form action="" method="POST">
							<input type="text" value="1" name="qty"></form><span class="inc qtybtn"></span></div>
							<input type="submit" href="#" name="submit" value="Add to cart" class="site-btn">
						
                    </div>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
								<div class="panel-body">
									<p>The Inspiration
                                    This diamond ring is carefully crafted to ensure your beautiful jewellery is always protected.

                                    The Design Story
                                    Go solo with this ring on your finger, or throw a few more in and stack up. There are no shortage of pretty rings for you.</p>
                                                                        <p>Product Information
                                    Width - 20.42 mm
                                    Height - 23.38 mm
                                    Purity - 18 Kt
                                    Weight - 2.45 g
                                    Size - 12

                                    Set in 18 Kt White &amp; Yellow Gold(2.45 g) with diamonds (0.07 Ct ,IJ-SI)</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">card details </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
								<div class="panel-body">
									<img src="./img/cards.png" alt="">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping &amp; Returns</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
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