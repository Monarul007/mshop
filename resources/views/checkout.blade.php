@extends('layouts.master')

@section('content')

    <div class="container" style="margin-top: 30px;">
		<div class="page-top-info">
			<div class="breadcrumb"> &nbsp;<a href="index.html">Home&nbsp;</a> » &nbsp;<a href="#">Checkout&nbsp;</a> </div>
			<div class="section-title">
				<h3><span>Checkout</span></h3>
			</div>
		</div>
	</div>

    <section class="checkout-section spad">
		<div class="container">
			<div class="wizard-v5-content">
				<div class="wizard-form">
					<form class="form-register needs-validation" id="form-register" action="#" method="post" novalidate="">
						<div id="form-total" role="application" class="wizard clearfix"><div class="steps clearfix"><ul role="tablist"><li role="tab" aria-disabled="false" class="first current" aria-selected="true"><a id="form-total-t-0" href="#form-total-h-0" aria-controls="form-total-p-0"><span class="current-info audible"> </span><div class="title">
								<span class="step-icon"><i class="fa fa-check"></i></span>
								<span class="step-text">BILLING DETAILS</span>
							</div></a></li><li role="tab" aria-disabled="false"><a id="form-total-t-1" href="#form-total-h-1" aria-controls="form-total-p-1"><div class="title">
								<span class="step-icon"><i class="fa fa-check"></i></span>
								<span class="step-text">SHIPPING DETAILS</span>
							</div></a></li><li role="tab" aria-disabled="false" class="last"><a id="form-total-t-2" href="#form-total-h-2" aria-controls="form-total-p-2"><div class="title">
								<span class="step-icon"><i class="fa fa-check"></i></span>
								<span class="step-text">Confirm Details</span>
							</div></a></li></ul></div><div class="content clearfix">
							<!-- SECTION 1 -->
							<h2 id="form-total-h-0" tabindex="-1" class="title current">
								<span class="step-icon"><i class="fa fa-check"></i></span>
								<span class="step-text">BILLING DETAILS</span>
							</h2>
							<section id="form-total-p-0" role="tabpanel" aria-labelledby="form-total-h-0" class="body current" aria-hidden="false">
								<div class="inner">
									<h3 style="margin-bottom: 18px; padding: 0;">Billing Details</h3>
																		<div class="form-row">
										<div class="form-holder">
											<input type="text" value="Monarul Islam" class="form-control" id="name" name="name">
										</div>
										<div class="form-holder">
											<input type="email" name="email" class="email input-step-2-1" id="Email" value="monarul007@gmail.com" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<input type="text" value="Sapahar, Naogaon" class="form-control" id="address" name="address">
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder">
											<input type="number" value="01782833296" class="form-control" id="phone" name="phone">
										</div>
										<div class="form-holder">
											<input type="number" value="6560" class="form-control" id="code" name="code" pattern="[0-9]{4}">
										</div>
									</div>
								</div>
							</section>
							<!-- SECTION 2 -->
							<h2 id="form-total-h-1" tabindex="-1" class="title">
								<span class="step-icon"><i class="fa fa-check"></i></span>
								<span class="step-text">SHIPPING DETAILS</span>
							</h2>
							<section id="form-total-p-1" role="tabpanel" aria-labelledby="form-total-h-1" class="body" aria-hidden="true" style="display: none;">
								<div class="inner">
									<h3 style="margin-bottom: 15px; padding: 0;">Shipping Address</h3>
									<input type="checkbox" id="same" name="same" onchange="addressFunction()">			 
									<label for="same">Same as Billing Details</label>
									<div class="form-row">
										<div class="form-holder">
											<input type="text" placeholder="Reciever name..." class="form-control" id="samename" name="samename">
										</div>
										<div class="form-holder">
											
											<input type="email" name="sameEmail" class="email input-step-2-1" id="sameEmail" placeholder="example@email.com" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
										
											<input type="text" placeholder="Delivery address..." class="form-control" id="sameaddress" name="sameaddress" pattern="[0-9]{4}">
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder">
											<input type="number" placeholder="Reciever phone number..." class="form-control" id="samephone" name="samephone">
										</div>
										<div class="form-holder">
											<input type="number" placeholder="Postcode" class="form-control" id="samecode" name="samecode">
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<label for="notes" class="form-label">Special Notes</label>
											<textarea type="text" name="special_note" id="account_name" placeholder="Notes about your order, e.g. special notes for delivery." class="valid" aria-invalid="false"></textarea>
										</div>
									</div>
								</div>
								<script> 
									function addressFunction() 
									{ 
									if (document.getElementById('same').checked) 
									{ 
										document.getElementById('samename').value=document. 
												getElementById('name').value; 
										document.getElementById('sameaddress').value=document. 
												getElementById('address').value;
										document.getElementById('samephone').value=document. 
												getElementById('phone').value;
										document.getElementById('samecode').value=document. 
												getElementById('code').value;
										document.getElementById('sameEmail').value=document. 
												getElementById('Email').value;
									} 
										
									else
									{ 
										document.getElementById('samename').value=""; 
										document.getElementById('sameaddress').value=""; 
										document.getElementById('samephone').value=""; 
										document.getElementById('samecode').value=""; 
										document.getElementById('sameEmail').value="";
									} 
									} 
								</script> 
							</section>
							<!-- SECTION 3 -->
							<h2 id="form-total-h-2" tabindex="-1" class="title">
								<span class="step-icon"><i class="fa fa-check"></i></span>
								<span class="step-text">Confirm Details</span>
							</h2>
							<section id="form-total-p-2" role="tabpanel" aria-labelledby="form-total-h-2" class="body" aria-hidden="true" style="display: none;">
								<div class="inner">
									<h3>Comfirm Details</h3>
									<div class="table-responsive" style="padding: 0 20px;">
										<table class="table table-hover table-bordered table-sm">
											<tbody>
												<tr class="space-row">
													<th>Full Name:</th>
													<td id="samename-val"> </td>
												</tr>
												<tr class="space-row">
													<th>Email Address:</th>
													<td id="sameEmail-val"></td>
												</tr>
												<tr class="space-row">
													<th>Phone Number:</th>
													<td id="samephone-val"></td>
												</tr>
												<tr class="space-row">
													<th>Shipping Address:</th>
													<td id="sameaddress-val"></td>
												</tr>
												<tr class="space-row">
													<th>Postcode / ZIP:</th>
													<td id="samecode-val"></td>
												</tr>
												<tr class="space-row">
													<th>Special Notes:</th>
													<td id="account-name-val"></td>
												</tr>
											</tbody>
										</table>
									</div>
									<h3>Your cart details</h3>
									<div class="checkout-product table-responsive" style="padding: 0 20px;">
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
									    </div>
										<div class="rright">
                                            <button type="submit" name="submit" class="site-btn">Place Order</button>
                                        </div>
                                    </div>
							    </section>
						    </div>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</section>

@endsection