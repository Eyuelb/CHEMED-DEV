<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="<?= base_url(); ?>">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="<?= LANG_URL . '/checkout' ?>">Checkout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
					<?php if (isset($cartItems['array']) && $cartItems['array'] != null) { ?> 
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h3>Checkout</h3>
								</div>
								<!-- Error -->
                                 <div>  <?php
                                 if(isset($errors)){
                                    foreach ($errors as $error) 
                                    { ?>
                                        <div class="alert alert-danger" role="alert">
                                        <p><?php echo $error;?> </p> 
                                        </div>
                                        <?php 
                                        }
                                    } ?> </div>
                                <!-- Error end -->
                                <form class="form" method="POST" id="checkout_form">
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>First Name<span>*</span></label>
												<input type="text"  name="first_name" id="first_name" value="<?= set_value('first_name'); ?>" placeholder="First Name"required>
											</div>
										</div>
                                        <div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Last Name<span>*</span></label>
												<input type="text"  name="last_name" id="last_name" value="<?= @$_POST['last_name']; ?>" placeholder="Last Name"required>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input type="text"  name="phone" id="phone" value="<?= @$_POST['phone'];?>" placeholder="Phone.." required>
											</div>	
										</div>
                                        <div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Email Address<span>*</span></label>
											<input type="email" name="email" placeholder="Email address" value="<?= @$_POST['email'];?>" required>
										</div>
									</div>
										<div class="col-12">
											<div class="form-group">
												<label>Your location<span>*</span></label>
												<input type="text" name="address" id="address" value="<?= @$_POST['address'];?>"  placeholder="Type your address" >
											</div>
											<div class="map-section">
												<div class="Map-view-holder">
												<div id="latlong">
	                                                <input type="hidden" id="latbox" name="latbox" name="lat" readonly>
	                                                <input type="hidden" id="lngbox" name="lngbox" name="lng" readonly>
	                                                </div>
	                                                <div id="map-canvas">

													</div> 
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">	
											</div>
										</div>
										<div class="col-lg-6 col-12">
										<div class="col-lg-6 col-12">
											<div class="form-group button">
                                            <button class="btn" onclick="checkout_form_submit();">Order</button>
											</div>
										</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group button">
                                            <a href="<?= LANG_URL ?>" class="btn ">Back to Shopping</a>
											</div>
										</div>
									</div>
									<?php foreach ($cartItems['array'] as $item) { ?>
                                    <input type="hidden" name="id[]" value="<?= $item['id'] ?>">
                                    <input type="hidden" name="quantity[]" value="<?= $item['num_added'] ?>"> 
                                    <?php } ?> 
                                    <input type="hidden" class="final-amount" name="final_amount" value="<?= $cartItems['finalSum'] ?>">
                                    <input type="hidden" name="amount_currency" value="<?= CURRENCY ?>">
                                    <input type="hidden" name="discountAmount" value="">
								</form>
							</div>
						</div>
						<?php } ?> 	
						
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Call us Now:</h4>
									<ul>
										<li>+251912603463</li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email:</h4>
									<ul>
										<li><a href="mailto:support@chemeds.com">support@chemeds.com</a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Our Address:</h4>
									<ul>
										<li>Bola</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->
	<div class="modal fade" id="checkout_model" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="images/Che_menu.png" alt="CHEMED">
											</div>
											<div class="single-slider">
												<img src="images/Che_menu.png" alt="CHEMED">
											</div>
											<div class="single-slider">
												<img src="images/Che_menu.png" alt="CHEMED">
											</div>
											<div class="single-slider">
												<img src="images/Che_menu.png" alt="CHEMED">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity">
									<div class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<div class="row">
										<div class="button">
										<div class="minus">
											<a type="button" class="minus_btn" onclick="removeProduct(<?= $item['id'] ?>, true)" href="javascript:void(0);">
												<i class="ti-minus"></i>
                                            </a>
										</div>
										</div>
										<div class="input">
										<input type="text" name="quant" class="input-number"  data-min="1" data-max="100" value="<?= $item['num_added'] ?>">
										</div>
										<div class="button">
										<div class="plus">
											<a type="button" class="plus_btn refresh-me" data-id="<?= $item['id'] ?>" onclick="add_to_cart(this)" href="javascript:void(0);">
												<i class="ti-plus"></i>
                                            </a>
										</div>
										</div>
									    </div>
									</div>
									</div>
									<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
	

















