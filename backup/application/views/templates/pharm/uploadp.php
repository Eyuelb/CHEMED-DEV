
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="<?= base_url(); ?>">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="<?= LANG_URL . '/uploadp' ?>">ORDER-VIA-PRESCRIPTION</a></li>
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
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Upload</h4>
									<h3>Your Prescription</h3>
								</div>
								<!-- Error -->
                                 <div>  <?php echo validation_errors(); if(isset($error)){?>
                                 <div class="alert alert-danger" role="alert">
                                 <p><?php print $error;?> </p> 
                                 </div>
                                 <?php } ?> </div>


                                  <div>  <?php if(isset($msg)){?>
                                  <div class="alert alert-success" role="alert">
                                  <p><?php print $msg;?> </p> 
                                  </div>
                                  <?php } ?> </div>
                                <!-- Error end -->
								<?php echo form_open_multipart("uploadp/file_data");?>
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input type="text"  name="full_name" id="full_name" value="<?= set_value('full_name'); ?>" placeholder="Full Name"required>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input type="text"  name="phone" id="phone" value="<?= set_value('phone'); ?>" placeholder="Phone.." required>
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Your location<span>*</span></label>
												<input type="text" name="address" id="address" value="<?= set_value('address'); ?>"  placeholder="Type your address" >
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
												<label>Upload Prescription<span>*</span></label>
												<input type="hidden" name="size" value="1000000">
             	                                <input type="file" name="pic_file" id="pic_file">
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group button">
											<button type="submit" name="upload" class="btn ">Send</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
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
	