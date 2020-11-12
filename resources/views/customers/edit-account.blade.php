@extends('layouts.master')

@section('content')

    <section class="contact-section">
		<div class="container">
		    <div class="row">
				@include('layouts.sidebar')
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<!-- Page info -->
					<div class="page-top-info">
						<div class="breadcrumb"> &nbsp;<a href="index.php">Home&nbsp;</a> » &nbsp;<a href="edit_account.php">Edit Account&nbsp;</a> </div>
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
                        <h3>Edit Account Details</h3>
                        <div class="content inner">
						<form action="" method="POST">
							<div class="table-responsive">
								<table class="table table-hover table-bordered table-sm">
																	<tbody>
										<tr class="space-row">
											<th>Full Name:</th>
											<td><input name="full_name" type="text" value="Monarul Islam"></td>
										</tr>
										<tr class="space-row">
											<th>Username:</th>
											<td><input name="username" type="text" value="monarul007@gmail.com"></td>
										</tr>
										<tr class="space-row">
											<th>Email Address:</th>
											<td><input name="email_address" type="text" value="monarul007@gmail.com"></td>
										</tr>
										<tr class="space-row">
											<th>Phone Number:</th>
											<td><input name="phone" type="text" value="01782833296"></td>
										</tr>
										<tr class="space-row">
											<th>Billing Address:</th>
											<td><input name="billing_address" type="text" value="Sapahar, Naogaon"></td>
										</tr>
										<tr class="space-row">
											<th>City:</th>
											<td><input name="city" type="text" value="Naogaon"></td>
										</tr>
										<tr class="space-row">
											<th>Postcode / ZIP:</th>
											<td><input name="postcode" type="number" value="6560"></td>
										</tr>
										<tr class="space-row">
											<th>Special Notes:</th>
											<td><textarea name="profile_bio" type="text">kkkk</textarea></td>
										</tr>
									</tbody>
								</table>
								<button type="submit" name="submit" class="site-btn" style="float: right;">Update Details</button>
							</div>
						</form>
                        </div>
					</div>
			    </div>
			</div>
		</div>
	</section>

@endsection