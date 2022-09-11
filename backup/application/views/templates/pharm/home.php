<?php ?>
    	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider" style="background-image: url('<?= base_url('assets/che-med-assets/images/Che_Banner.png')?>');")>
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										<h1><span>Fast </span>Get your medicines now!</h1>
										<p>You can order your prescribed or otc drugs and delivered straight to your home by using our fast and friendly online pharmacy. <br>Get your Medications now CHEMED! <br></p>
										<div class="button">
											<a  class="btn" onclick="test();">Shop Now!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->

	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="<?= base_url('assets/che-med-assets/images/Che_menu_otc.png')?>" alt="#">
						<div class="content">
							<p>Medication</p>
							<h1>OTC <br> </h3>
							<a href="<?= LANG_URL . '/product_grid?category=58' ?>">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="<?= base_url('assets/che-med-assets/images/Che_menu.png')?>" alt="#">
						<div class="content">
							<p>Medication</p>
							<h3>Upload <br> Your Prescription</h3>
							<a href="<?= LANG_URL . '/uploadp' ?>">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="<?= base_url('assets/che-med-assets/images/Che_menu.png')?>" alt="#">
						<div class="content">
							<p>Personal Care</p>
							<h3>Health Care <br> Up to <span>10%</span> Off</h3>
							<a href="#">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->
	
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Trending Item</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Best Seller</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row" id="product_list">
										<?php foreach($products as $article){ ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
								<div class="single-product">
								<div class="product-img">
									<a href="<?= $article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url'] ?>">
                                    <img class="default-img"  src="<?= base_url('/attachments/shop_images/' . $article['image']) ?>" alt="<?= str_replace('"', "'", $article['title']) ?>" onerror="this.onerror=null; this.src= '<?= base_url('attachments/shop_images/no_image8.jpg') ?>' ">
                                    <img class="hover-img" src="<?= base_url('/attachments/shop_images/' . $article['image']) ?>" alt="<?= str_replace('"', "'", $article['title']) ?>" onerror="this.onerror=null; this.src= '<?= base_url('attachments/shop_images/no_image8.jpg') ?>' ">
									</a>
										<div class="button-head">
											<div class="product-action">
												<a title="Quick View" id="<?= $article['id'] ?>" data-id="<?= $article['id'] ?>" data-title="<?= $article['title'] ?>" data-image="<?= LANG_URL . '/attachments/shop_images/'.$article['image'] ?>" data-description="<?= $article['title'] ?>" onclick="open_description_fun(<?= $article['id'] ?>);"><i class=" ti-eye" ></i><span>Quick Shop</span></a>


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
                                    </div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	


	
	<!-- Modal -->
  <div class="modal fade bd-example-modal-sm" id="description_model" tabindex="-1" role="dialog">
        <div class="modal-sm modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                </div>
                <div id="modal_body" class="modal-body">
                <h6 ></h6>
                    <div class="row no-gutters">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">     
              <div class="product-dicription-image">
                    <img id="description_image" src="" alt="CHEMED" onerror="this.onerror=null; this.src= '<?= base_url('attachments/shop_images/no_image8.jpg') ?>'">
              </div>
               </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="quickview-content">
                                <h2 id="description_title"></h2>
                                <div class="quickview-ratting-review">
                                    <div class="quickview-ratting-wrap">
                                        <div class="quickview-ratting">
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="quickview-stock">
                                        <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                    </div>
                                </div>
                                <h3 id="description_price"></h3>
                                <div class="quickview-peragraph">
                                    <p id="description_description"></p>
                                </div>
                                
                                <div class="quantity">
                <div class="input-group">
                  <div class="button minus">
                    <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                      <i class="ti-minus"></i>
                    </button>
                  </div>
                  <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                  <div class="button plus">
                    <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                      <i class="ti-plus"></i>
                    </button>
                  </div>
                </div>
              
              </div>
              <div class="add-to-cart">
                <a href="#" class="btn">Add to cart</a>
                <a href="#" class="btn min"><i class="ti-heart"></i></a>
                <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
              </div>
                                <div class="default-social">
                <h4 class="share-now">Share:</h4>
                                    <ul>
                                        <li><a class="facebook" ><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" ><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="youtube" ><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a class="dribbble"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div><!-- Modal end -->
    
    <script>

    </script>
