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
								<li class="active"><a href="blog-single.html">Shop Details</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Shop Single -->
		<section class="shop single section">
					<div class="container">
						<div class="row"> 
							<div class="col-12">
								<div class="row">
									<div class="col-lg-6 col-12">
										<!-- Product Slider -->
										<div class="product-gallery">
											<!-- Images slider -->
											<div class="flexslider-thumbnails">
												<ul class="slides">
													<li data-thumb="<?= base_url('/attachments/shop_images/' . $product['image']) ?>" rel="adjustX:10, adjustY:">
														<img src="<?= base_url('/attachments/shop_images/' . $product['image']) ?>" alt="#">
													</li>
												</ul>
											</div>
											<!-- End Images slider -->
										</div>
										<!-- End Product slider -->
									</div>
									<div class="col-lg-6 col-12">
										<div class="product-des">
											<!-- Description -->
											<div class="short">
												<h4><?= $product['title'] ?></h4>
												<div class="rating-main">
													<ul class="rating">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-half-o"></i></li>
														<li class="dark"><i class="fa fa-star-o"></i></li>
													</ul>
													<a  class="total-review">(102) Review</a>
												</div>
												<p class="price">
                                                    <span class="discount"><?= $product['price'] . CURRENCY ?></span>
                                                    <s><?= ($product['old_price'] != '')? $product['old_price'] . CURRENCY:'' ?></s> 
                                                </p>
												</div>
											<!--/ End Description -->


											<!-- Product Buy -->
											<div class="product-buy">
                                            <?php if ($product['quantity'] > 0) { ?>
                                                <div class="add-to-cart">
													<a data-id="<?= $product['id'] ?>" data-goto="<?= LANG_URL . '/shopping-cart' ?>" class="btn" onclick="add_to_cart(this);"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add to cart</a>
													<a data-id="<?= $product['id'] ?>" data-goto="<?= LANG_URL . '/checkout' ?>" class="btn" onclick="buy_now(this);"><i class="fa fa-medkit" aria-hidden="true"></i>  Buy Now</a>
												</div>

                                                <p class="availability">Availability : <?= ($publicQuantity == 1)? '':$product['quantity'] ?> Products In Stock</p>
                                                <?php } else { ?>
                                                    <div class="alert alert-warning" role="alert"><h5>Out of Stock!</h5></div>
                                                <?php } ?>


												<p class="cat">Category : <a href="javascript:void(0);" data-categorie-id="<?= $product['shop_categorie'] ?>" onclick="category_go(this);" ><?= $product['categorie_name'] ?></a></p>

											</div>
											<!--/ End Product Buy -->
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="product-info">
											<div class="nav-main">
												<!-- Tab Nav -->
												<ul class="nav nav-tabs" id="myTab" role="tablist">
													<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a></li>
													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#review" role="tab">Reviews</a></li>
												</ul>
												<!--/ End Tab Nav -->
											</div>
											<div class="tab-content" id="myTabContent">
												<!-- Description Tab -->
												<div class="tab-pane fade show active" id="description" role="tabpanel">
													<div class="tab-single">
														<div class="row">
															<div class="col-12">
                                                            <?= $product['description'] ?>
															</div>
														</div>
													</div>
												</div>
												<!--/ End Description Tab -->

                                                												<!-- Description Tab -->
												<div class="tab-pane fade show active" id="review" role="tabpanel">
													<div class="tab-single">
														<div class="row">
															<div class="col-12">
                                                            
															</div>
														</div>
													</div>
												</div>
												<!--/ End Description Tab -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		</section>
		<!--/ End Shop Single -->
		

	