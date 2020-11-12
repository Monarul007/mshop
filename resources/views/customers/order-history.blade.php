@extends('layouts.master')

@section('content')

    <section class="contact-section">
		<div class="container">
			<div class="row">
				@include('layouts.sidebar')
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<!-- Page info -->
					<div class="page-top-info">
						<div class="breadcrumb"> &nbsp;<a href="index.php">Home&nbsp;</a> » &nbsp;<a href="order_history.php">Your Orders&nbsp;</a> </div>
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
                        <h3>Order History</h3>
                        <div class="table-responsive">
                        <table class="table table-sm table-hover table-bordered">
                            <thead style="background-color: #fff;">
                                <tr>
                                    <td class="left">SL.</td>
                                    <td class="left">Product</td>
                                    <td class="left">Quantity</td>
                                    <td class="left">Amount</td>
                                    <td class="left">Order Date</td>
                                    <td class="left">Status</td>
                                    <td class="left">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="left">1</td>
                                    <td class="left">Amber Cutout Drop Earrings</td>
                                    <td class="left">4</td>
                                    <td class="left">TK. 41608</td>
                                    <td class="left">October 17, 2020, 1:40 am</td>
                                    <td class="left">Pending </td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <td class="left">2</td>
                                    <td class="left">Petals Adjustable Bracelet</td>
                                    <td class="left">1</td>
                                    <td class="left">TK. 30526</td>
                                    <td class="left">October 17, 2020, 1:40 am</td>
                                    <td class="left">
                                    Pending                                    </td>
                                                                            <td>N/A</td>
                                                                    </tr>
                                                            <tr>
                                    <td class="left">3</td>
                                    <td class="left">Maura Classic Bracelet</td>
                                    <td class="left">3</td>
                                    <td class="left">TK. 50235</td>
                                    <td class="left">October 17, 2020, 1:40 am</td>
                                    <td class="left">
                                    Pending                                    </td>
                                                                            <td>N/A</td>
                                                                    </tr>
                                                            <tr>
                                    <td class="left">4</td>
                                    <td class="left">New Product 1</td>
                                    <td class="left">2</td>
                                    <td class="left">TK. 43000</td>
                                    <td class="left">October 17, 2020, 1:27 am</td>
                                    <td class="left">
                                    OK                                    </td>
                                                                            <td>OK</td>
                                                                    </tr>
                                                        </tbody>
                        </table>
                        </div>
					</div>
									</div>
			</div>
		</div>
	</section>

@endsection