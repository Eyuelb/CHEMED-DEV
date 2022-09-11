<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="blog-single.html">Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Shop Login -->
		<section class="shop login section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-6 offset-lg-3 col-12">
						<div class="login-form">
                        	<h2>Login</h2>
							<p>Account required to order products</p>
							<!-- Form -->
							<form class="form" method="POST" action="">
                            <?php if ($this->session->flashdata('userError')) { ?><div class="col-xs-12 txt-c text-danger" translate="">Email or Password incorrect, Please try again</div><?php } ?>
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>Your Email<span>*</span></label>
											<input type="email" name="email" id="email" value="<?= set_value('email') ?>" placeholder="" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Your Password<span>*</span></label>
											<input type="password" name="pass" id="password" placeholder="" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
                                            <input type="hidden" name="login">
											<button class="btn" type="submit">Login</button>
											<a class="btn" href="<?= LANG_URL . '/register' ?>" >Register</a>
										</div>
										<div class="checkbox">
											<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Remember me</label>
										</div>
										<a href="#" class="lost-pass">Lost your password?</a>
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Login -->











