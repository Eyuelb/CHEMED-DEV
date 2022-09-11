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
								<li class="active"><a href="blog-single.html">Register</a></li>
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
							<h2>Register</h2>
							<p>Please register in order to checkout</p>
							<!-- Form -->
							<form class="form" method="POST" action="">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
                                        <?php if ($this->session->flashdata('userError')) { foreach ($this->session->flashdata('userError') as $error) { ?><div class="col-xs-12 txt-c text-danger" translate=""><?php if (strpos($error, 'Username') !== false) { echo $error;}?></div><?php } ?><?php } ?>
											<label>Your Name<span>*</span></label>
											<input type="text" name="name" placeholder="Username" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" >
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
                                        <?php if ($this->session->flashdata('userError')) { foreach ($this->session->flashdata('userError') as $error) { ?><div class="col-xs-12 txt-c text-danger" translate=""><?php if (strpos($error, 'Email') !== false) { echo $error;}?></div><?php } ?><?php } ?>
											<label>Your Email<span>*</span></label>
											<input type="email" name="email" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" >
										</div>
									</div>
                                    <div class="col-12">
										<div class="form-group">
                                        <?php if ($this->session->flashdata('userError')) { foreach ($this->session->flashdata('userError') as $error) { ?><div class="col-xs-12 txt-c text-danger" translate=""><?php if (strpos($error, 'Phone') !== false) { echo $error;}?></div><?php } ?><?php } ?>
											<label>Your Phone Number<span>*</span></label>
											<input type="text" name="phone" placeholder="Phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" >
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
                                        <?php if ($this->session->flashdata('userError')) { foreach ($this->session->flashdata('userError') as $error) { ?><div class="col-xs-12 txt-c text-danger" translate=""><?php if (strpos($error, 'Password') !== false) { echo $error;}?></div><?php } ?><?php } ?>
											<label>Your Password<span>*</span></label>
											<input type="password" name="pass" placeholder="Password" value="<?= isset($_POST['pass']) ? $_POST['pass'] : '' ?>" >
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
                                        <?php if ($this->session->flashdata('userError')) { foreach ($this->session->flashdata('userError') as $error) { ?><div class="col-xs-12 txt-c text-danger" translate=""><?php if (strpos($error, 'match') !== false) { echo $error;}?></div><?php } ?><?php } ?>
											<label>Confirm Password<span>*</span></label>
											<input type="password" name="pass_repeat" placeholder="Password repeat" value="<?= isset($_POST['pass_repeat']) ? $_POST['pass_repeat'] : '' ?>" >
										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
                                        <input type="hidden" name="signup" value="CREATE ACCOUNT">
											<button class="btn" type="submit">Register</button>
											<a href="<?= LANG_URL . '/login' ?>" class="btn">Login</a>
										</div>
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