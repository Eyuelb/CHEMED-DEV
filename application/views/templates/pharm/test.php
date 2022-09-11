		
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="blog-single.html">Shop Grid</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2 col-lg-2 col-12">
						<div class="shop-sidebar">
								<!-- Single Widget -->
								<div class="single-widget category">
									<h3 class="title">Categories</h3>
									<ul class="categor-list" id="categories_list">
										
								  </ul>
								</div>
								<!--/ End Single Widget -->
								<!-- Shop By Price -->
                <div class="single-widget range">
										<h3 class="title">Shop by Price</h3>
										<div class="price-filter">
											<div class="price-filter-inner">
												<div id="slider-range2"></div>
													<div class="price_slider_amount">
													<div class="label-input">
														<span>Range:</span>
                            <input type="text" id="amount" name="price" placeholder="Add Your Price"/>
                            <input type="hidden" id="range_amount_from"/>
                            <input type="hidden" id="range_amount_upto" />
													</div>
												</div>
											</div>
										</div>
										<ul class="check-box-list">
											<li>
												<label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$5 - $50<span class="count"></span></label>
											</li>
											<li>
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count"></span></label>
											</li>
											<li>
												<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 - $250<span class="count"></span></label>
											</li>
                      <li>
												<label class="checkbox-inline" for="4"><input name="news" id="4" type="checkbox">$250 - $500<span class="count"></span></label>
											</li>
                      <li>
												<label class="checkbox-inline" for="5"><input name="news" id="5" type="checkbox">$500 - ...<span class="count"></span></label>
											</li>
										</ul>
									</div>
									<!--/ End Shop By Price -->

								<!-- Single Widget -->

						</div>
					</div>
					<div class="col-md-10 col-lg-10 col-12">
						<div class="row">
							<div class="col-12">
								<!-- Shop Top -->
								<div class="shop-top">
									<div class="shop-shorter">
										<div class="single-shorter">
											<label>Show :</label>
											<select>
												<option selected="selected">09</option>
												<option>15</option>
												<option>25</option>
												<option>30</option>
											</select>
										</div>
										<div class="single-shorter">
											<label>Sort By :</label>
											<select>
												<option selected="selected">Name</option>
												<option>Price</option>
												<option>Size</option>
											</select>
										</div>
									</div>
									<ul class="view-mode">
										<li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
										<li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
									</ul>
								</div>
								<!--/ End Shop Top -->
							</div>
						</div>
                          <div class="row" id="product_list">
                     <?php foreach($products as $article){ ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
								<div class="single-product">z
								<div class="product-img">
									<a href="<?= $article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url'] ?>">
                                    <img class="default-img"  src="<?= base_url('/attachments/shop_images/' . $article['image']) ?>" alt="<?= str_replace('"', "'", $article['title']) ?>" onerror="this.onerror=null; this.src= '<?= base_url('attachments/shop_images/no_image8.jpg') ?>' ">
                                    <img class="hover-img" src="<?= base_url('/attachments/shop_images/' . $article['image']) ?>" alt="<?= str_replace('"', "'", $article['title']) ?>" onerror="this.onerror=null; this.src= '<?= base_url('attachments/shop_images/no_image8.jpg') ?>' ">
									</a>
										<div class="button-head">
											<div class="product-action">
												<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
												<a title="Add to Cart" data-goto="<?= LANG_URL . '/shopping-cart' ?>"   data-id="<?= $article['id'] ?>"  onclick="add_to_cart(this);"><i class="ti-heart"></i><span>Add to Wishlist</span></a>
												<a title="Buy Now"  data-goto="<?= LANG_URL . '/checkout' ?>" data-id="<?= $article['id'] ?>" onclick="buy_now(this);"><i class="ti-bag"></i><span>Buy Now</span></a>
											</div>
											<div class="product-action-2">
											<a title="Add to Cart" href="javascript:void(0);" class="add-to-cart" data-goto="<?= LANG_URL . '/shopping-cart' ?>" data-id="<?= $article['id'] ?>">Add to Cart</a>
											</div>
											
									</div>
								</div>
									<div class="product-content">
									    <div class="product-title">
										<h3><a href="<?= $article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url'] ?>"><?= character_limiter($article['title'], 70) ?></a></h3>
										</div>
										<div class="product-price">
										<span class="old"><?= $article['old_price'] != '' ? number_format($article['old_price'], 2) . CURRENCY : '' ?></span>
										<span><?= $article['price'] != '' ? number_format($article['price'], 2) : 0 ?><?= CURRENCY ?></span>
										</div>
									</div>
								</div>
							</div>
							<?php }?>


               <!-- product list  -->     

            </div>
		
			<?php if ($links_pagination != '') { ?>
                            <div class="col-sm-6 col-sm-offset-3">
                                <?= $links_pagination ?>
                            </div>
                    <?php } ?>
          </div>
              </div>
			</div>
		</section>
		<!--/ End Product Style 1  -->	

		<!-- Start Shop Newsletter  -->
		<section class="shop-newsletter section">
			<div class="container">
				<div class="inner-top">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 col-12">
							<!-- Start Newsletter Inner -->
							<div class="inner">
								<h4>Newsletter</h4>
								<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="EMAIL" placeholder="Your email address" required="" type="email">
									<button class="btn">Subscribe</button>
								</form>
							</div>
							<!-- End Newsletter Inner -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Shop Newsletter -->
		
		