@extends('layouts.master')

@section('content')

    <div class="container" style="margin-top: 30px;">
		<div class="page-top-info">
			<div class="breadcrumb"> &nbsp;<a href="index.html">Home&nbsp;</a> » &nbsp;<a href="#">Clothes For Girls&nbsp;</a> </div>
			<div class="section-title">
				<h3><span>Your Cart</span></h3>
			</div>
		</div>
	</div>

    <section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
													<div class="cart-table-warp" tabindex="1" style="overflow: hidden; outline: none;">
													<table>
							<thead>
								<tr>
									<th class="product-th">Product</th>
									<th class="quy-th">Quantity</th>
									<th class="size-th">Price</th>
									<th class="total-th">Total</th>
								</tr>
							</thead>
							<tbody>
															<tr>
									<td class="product-col">
										<img src="admin/uploads/f66aed52cf.jpg" alt="">
										<div class="pc-title">
											<h4>Mesh Cluster Ring</h4>
											<p>17085.00</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
											<form action="" method="POST">
												<input type="hidden" name="cartId" value="123">
												<div class="pro-qty"><span class="dec qtybtn"></span>
													<input type="text" name="quantity" value="1"> <br>
												<span class="inc qtybtn"></span></div>
												<button title="Update Quantity" class="icon" type="submit" name="submit"><i class="fa fa-refresh"></i></button>
												<a title="Delete from cart" class="icon" onclick="return confirm('Are you sure to delete !')" href="?delpro=123"><i class="fa fa-times"></i></a>
											</form>
                    					</div>
									</td>
									<td class="size-col"><h4>TK. 17085.00</h4></td>
									<td class="total-col"><h4>TK. 17085</h4></td>
								</tr>
																							<tr>
									<td class="product-col">
										<img src="admin/uploads/65b4d030eb.png" alt="">
										<div class="pc-title">
											<h4>Simple Solitaire Pendant 4</h4>
											<p>35832.00</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
											<form action="" method="POST">
												<input type="hidden" name="cartId" value="124">
												<div class="pro-qty"><span class="dec qtybtn"></span>
													<input type="text" name="quantity" min="1" value="1"> <br>
												<span class="inc qtybtn"></span></div>
												<button title="Update Quantity" class="icon" type="submit" name="submit"><i class="fa fa-refresh"></i></button>
												<a title="Delete from cart" class="icon" onclick="return confirm('Are you sure to delete !')" href="?delpro=124"><i class="fa fa-times"></i></a>
											</form>
                    					</div>
									</td>
									<td class="size-col"><h4>TK. 35832.00</h4></td>
									<td class="total-col"><h4>TK. 35832</h4></td>
								</tr>
							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Total <span>TK. 52917</span></h6>
						</div>
											</div>
				</div>
				<div class="col-lg-4 card-right">
					<a href="checkout.php" class="site-btn">Proceed to checkout</a>
					<a href="category.php" class="site-btn sb-dark">Continue shopping</a>
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