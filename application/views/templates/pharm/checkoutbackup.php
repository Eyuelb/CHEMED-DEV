<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>z
<div class="container" id="checkout-page" >
    <?php
    if (isset($cartItems['array']) && $cartItems['array'] != null) {
        if ($shippingOrder != 0 && $shippingOrder != null) { ?>
            <div class="filter-sidebar">
                <div class="title">
                    <span><?= lang('freeShippingHeader') ?></span>
                </div>
                <div class="oaerror info">
                    <strong><?= lang('promo') ?></strong> - <?= str_replace(array('%price%', '%currency%'), array($shippingOrder, CURRENCY), lang('freeShipping')) ?>!
                </div>
            </div>
        <?php } ?> 
        <?= purchase_steps(1, 2) ?>
        <div class="row">
            <div class="col-sm-9 left-side">
                <form method="POST" id="goOrder">
                    <div class="title alone">
                        <span><?= lang('checkout') ?></span>
                    </div>
                    <?php
                    if ($this->session->flashdata('submit_error')) {
                        ?>
                        <hr>
                        <div class="alert alert-danger" >
                            <h4><span class="glyphicon glyphicon-alert"></span> <?= lang('finded_errors') ?></h4>
                            <?php
                            foreach ($this->session->flashdata('submit_error') as $error) {
                                echo $error . '<br>';
                            }
                            ?>
                        </div>
                        <hr>
                        <?php
                    }
                    ?>
                    <div class="payment-type-box">
                        <select class="selectpicker payment-type" data-style="btn-blue" name="payment_type">
                            <?php if ($cashondelivery_visibility == 1) { ?>
                                <option value="cashOnDelivery"><?= lang('cash_on_delivery') ?> </option>
                            <?php } if (filter_var($paypal_email, FILTER_VALIDATE_EMAIL)) { ?>
                                <option value="PayPal"><?= lang('paypal') ?> </option>
                            <?php } if ($bank_account['iban'] != null) { ?>
                                <option value="Bank"><?= lang('bank_payment') ?> </option>
                            <?php } ?>
                        </select>
                        <span class="top-header text-center"><?= lang('choose_payment') ?></span>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="firstNameInput"><?= lang('first_name') ?> <span style="color: #a94442;" ><?= lang('requires') ?></span></label>
                            <input id="firstNameInput" class="form-control" name="first_name" value="<?= @$_POST['first_name'] ?>" type="text" placeholder="<?= lang('first_name') ?>">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="lastNameInput"><?= lang('last_name') ?> <span style="color: #a94442;" ><?= lang('requires') ?></span></label>
                            <input id="lastNameInput" class="form-control" name="last_name" value="<?=   @$_POST['last_name'] ?>" type="text" placeholder="<?= lang('last_name') ?>">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="phoneInput"><?= lang('phone') ?> <span style="color: #a94442;" ><?= lang('requires') ?></span></label>
                            <input id="phoneInput" class="form-control" name="phone" value="<?= @$_POST['phone'] ?>" type="text" placeholder="<?= lang('phone') ?>">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="emailAddressInput"><?= lang('email_address') ?> <span style="color: #a94442;" ><?= lang('requires') ?></span></label>
                            <input id="emailAddressInput" class="form-control" name="email" value="<?= @$_POST['email'] ?>" type="text" placeholder="<?= lang('email_address') ?>">
                        </div>
                        
                        <div class="form-group col-sm-6">
                            <label for="addressInput"><?= lang('address') ?> <span style="color: #a94442;" ><?= lang('requires') ?></span></label>
                            <input id="addressInput" class="form-control" name="address" type="text" placeholder="Type your address" rows="3"><?= @$_POST['address'] ?>
                        </div>

		               <div style="min-height:350px">
			           <div id="latlong">
				       <input type="text" id="latbox" name="latbox" placeholder="latitude" class="controls" name="lat" readonly>
				       <input type="text" id="lngbox" name="lngbox" placeholder="longitude" class="controls" name="lng" readonly>
			           </div>
			           <div id="map-canvas"></div>
                       </div>
                       
                    <?php if ($codeDiscounts == 1) { ?>
                        <div class="discount">
                            <label><?= lang('discount_code') ?></label>
                            <input class="form-control" name="discountCode" value="<?= @$_POST['discountCode'] ?>" placeholder="<?= lang('enter_discount_code') ?>" type="text">
                            <a href="javascript:void(0);" class="btn btn-default" onclick="checkDiscountCode()"><?= lang('check_code') ?></a>
                        </div>
                    <?php } ?>
                    <div class="table-responsive" style="margin-top:280px;">
                        <table class="table table-bordered table-products">
                            <thead>
                                <tr>
                                    <th><?= lang('product') ?></th>
                                    <th><?= lang('title') ?></th>
                                    <th><?= lang('quantity') ?></th>
                                    <th><?= lang('price') ?></th>
                                    <th><?= lang('total') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cartItems['array'] as $item) { ?>
                                    <tr>
                                        <td class="relative">
                                            <input type="hidden" name="id[]" value="<?= $item['id'] ?>">
                                            <input type="hidden" name="quantity[]" value="<?= $item['num_added'] ?>">
                                            <img class="product-image" src="<?= base_url('/attachments/shop_images/' . $item['image']) ?>" alt="">
                                            <a href="<?= base_url('home/removeFromCart?delete-product=' . $item['id'] . '&back-to=checkout') ?>" class="btn btn-xs btn-danger remove-product">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </a>
                                        </td>
                                        <td><a href="<?= LANG_URL . '/' . $item['url'] ?>"><?= $item['title'] ?></a></td>
                                        <td>
                                            <a class="btn btn-xs btn-primary refresh-me add-to-cart <?= $item['quantity'] <= $item['num_added'] ? 'disabled' : '' ?>" data-id="<?= $item['id'] ?>" href="javascript:void(0);">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </a>
                                            <span class="quantity-num">
                                                <?= $item['num_added'] ?>
                                            </span>
                                            <a class="btn  btn-xs btn-danger" onclick="removeProduct(<?= $item['id'] ?>, true)" href="javascript:void(0);">
                                                <span class="glyphicon glyphicon-minus"></span>
                                            </a>
                                        </td>
                                        <td><?= $item['price'] . CURRENCY ?></td>
                                        <td><?= $item['sum_price'] . CURRENCY ?></td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="4" class="text-right"><?= lang('total') ?></td>
                                    <td>
                                        <span class="final-amount"><?= $cartItems['finalSum'] ?></span><?= CURRENCY ?>
                                        <input type="hidden" class="final-amount" name="final_amount" value="<?= $cartItems['finalSum'] ?>">
                                        <input type="hidden" name="amount_currency" value="<?= CURRENCY ?>">
                                        <input type="hidden" name="discountAmount" value="">
                                    </td>
                                </tr>

                                <?php
                              $total_parsed = str_replace(' ', '', str_replace(',', '', $cartItems['finalSum']));
                              if((int)$shippingAmount > 0 && ((int)$shippingOrder > $total_parsed)) {
                                ?>
                                <tr>
                                    <td colspan="4" class="text-right"><?= lang('shipping') ?></td>
                                    <td>
                                        <span class="final-amount"><?= (int)$shippingAmount ?></span><?= CURRENCY ?>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </form>
                </div>
                <div>
                    <a href="<?= LANG_URL ?>" class="btn btn-primary go-shop">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                        <?= lang('back_to_shop') ?>
                    </a>
                    <a href="javascript:void(0);" class="btn btn-primary go-order" onclick="document.getElementById('goOrder').submit();" class="pull-left">
                        <?= lang('custom_order') ?> 
                        <span class="glyphicon glyphicon-circle-arrow-right"></span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-sm-3"> 
                <div class="filter-sidebar">
                    <div class="title">
                        <span><?= lang('best_sellers') ?></span>
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                    </div>
                    <?= $load::getProducts($bestSellers, '', true) ?>
                </div>
            </div>
        </div>
    </div>

<?php } else { ?>
    <style>
            @import url(https://fonts.googleapis.com/css?family=Open+Sans);



.area {
    text-align: center;
    font-size: 3.5em;
    color: #2890eb;
    letter-spacing: 1px;
    font-weight: 600;
  
    margin-top: 100px;
    text-shadow: 0px 0px 5px #bae4ff, 0px 0px 7px #fff;
}

.area2 {
    text-align: center;
    margin-bottom:500px;
    
}



        </style>
        <div class="area"> No items in your cart </div>
        <div class="area2"> <img style="width: 152px; height: 172px;" src="<?= base_url('template/imgs/shopping-bag.png') ?>"  alt="<?= $_SERVER['HTTP_HOST'] ?>"> </div>
        </div>
   <?php
   
}
if ($this->session->flashdata('deleted')) {
    ?>
    <script>
        $(document).ready(function () {
            ShowNotificator('alert-info', '<?= $this->session->flashdata('deleted') ?>');
        });
    </script>
<?php } if ($codeDiscounts == 1 && isset($_POST['discountCode'])) { ?>
    <script>
        $(document).ready(function () {
            checkDiscountCode();
        });
    </script>
<?php } ?>
   
  