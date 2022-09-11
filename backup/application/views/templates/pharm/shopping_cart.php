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
							<li><a href="<?= LANG_URL ?>">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a>Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
        <?php if (!isset($cartItems['array']) || $cartItems['array'] == null) { ?>
              <tr><td>Empty Cart</td></tr>

        <?php } else {        
             foreach ($cartItems['array'] as $item) { ?>
							<tr>
								<td class="image" data-title="No"><img src="<?= base_url('/attachments/shop_images/' . $item['image']) ?>" alt="<?= str_replace('"', "'", $item['title']) ?>" onerror="this.onerror=null; this.src= '<?= base_url('attachments/shop_images/no_image8.jpg') ?>' "></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="<?= LANG_URL . '/' . $item['url'] ?>"><?= $item['title'] ?></p>
									<p class="product-des"></p>
								</td>
								<td class="price" data-title="Price"><span><?= $item['price'] . CURRENCY ?></span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
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
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" data-title="Total"><span><?= $item['sum_price'] . CURRENCY ?></span></td>
								<td class="action" data-title="Remove"><a href="<?= base_url('home/removeFromCart?delete-product=' . $item['id'] . '&back-to=shopping-cart') ?>"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
                            <?php } } ?>
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
										<form action="#" target="_blank">
											<input name="Coupon" placeholder="Enter Your Coupon">
											<button class="btn" disabled>Coupon Apply</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span><?= (isset($cartItems['finalSum'])) ? $cartItems['finalSum'] . CURRENCY:'0'  ?></span></li>
										<!--/ <li>Shipping<span>Free</span></li>-->
										<!--/ <li>You Save<span>$20.00</span></li>-->
										<li class="last">You Pay<span><?= (isset($cartItems['finalSum'])) ? $cartItems['finalSum'] . CURRENCY:'0'  ?></span></li>
                                        <input type="hidden" class="final-amount" name="final_amount" value="<?= (isset($cartItems['finalSum'])) ? $cartItems['finalSum']:''  ?>">
                                        <input type="hidden" name="amount_currency" value="<?= CURRENCY ?>">
                                        <input type="hidden" name="discountAmount" value="">
									</ul>
									<div class="button5">
                                        <?php
                                        if (isset($cartItems['array'])) { ?>
										<a class="btn" href="<?= LANG_URL . '/checkout' ?>">Checkout</a>
                                        <?php } ?>
										<a class="btn" href="<?= LANG_URL ?>">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
    <?php
    if ($this->session->flashdata('deleted')) {
    ?>
    <script>
        $(document).ready(function () {
            ShowNotificator('alert-info', '<?= $this->session->flashdata('deleted') ?>');
        });
    </script>
<?php } ?>

