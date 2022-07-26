<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url('assets/new/css/custom_shopping_cart.css') ?>" />
<div class="" id="checkout-page" >
<style media="screen">


.lh-condensed { line-height: 1.25; }
</style>
    <?php
    if (isset($cartItems['array']) && $cartItems['array'] != null) {
        if ($shippingOrder != 0 && $shippingOrder != null) { ?>
            <div class="filter-sidebar">

 
            </div>
        <?php } ?> 
        <div class="container">
    <div class="row">
           <div class="col-md-8 order-md-1">
            <h4 class="mb-3"><h3>Buyer Profile</h3></h4>
            <form method="POST" id="goOrder">



            <?php if ($this->session->flashdata('submit_error')) {
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
                        <select class=" payment-type" data-style="btn-blue" name="payment_type">
                            <?php if ($cashondelivery_visibility == 1) { ?>
                                <option value="cashOnDelivery"><?= lang('cash_on_delivery') ?> </option>
                            <?php } if (filter_var($paypal_email, FILTER_VALIDATE_EMAIL)) { ?>
                                <option value="PayPal"><?= lang('paypal') ?> </option>
                            <?php } if ($bank_account['iban'] != null) { ?>
                                <option value="Bank"><?= lang('bank_payment') ?> </option>
                            <?php } ?>
                        </select>
                        
                    </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstNameInput"><?= lang('first_name') ?> <span style="color: #a94442;" ><?= lang('requires') ?></span></label>
                          <input id="firstNameInput" class="form-control" name="first_name" value="<?= @$_POST['first_name'] ?>" type="text" placeholder="<?= lang('first_name') ?>">
                  
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lastNameInput"><?= lang('last_name') ?> <span style="color: #a94442;" ><?= lang('requires') ?></span></label>
                          <input id="lastNameInput" class="form-control" name="last_name" value="<?=   @$_POST['last_name'] ?>" type="text" placeholder="<?= lang('last_name') ?>">
 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="phoneInput"><?= lang('phone') ?> <span style="color: #a94442;" ><?= lang('requires') ?></span></label>
                            <input id="phoneInput" class="form-control" name="phone" value="<?= @$_POST['phone'] ?>" type="text" placeholder="<?= lang('phone') ?>">
   
                    </div>
     
                    <div class="col-md-6 mb-3">
                <label for="emailAddressInput"><?= lang('email_address') ?> <span style="color: #a94442;" ><?= lang('requires') ?></span></label>
                            <input id="emailAddressInput" class="form-control" name="email" value="<?= @$_POST['email'] ?>" type="text" placeholder="<?= lang('email_address') ?>">
  
                </div>
                </div>

                <div class="mb-3">
                  <label for="addressInput"><?= lang('address') ?> <span style="color: #a94442;" ><?= lang('requires') ?></span></label>
                  <input id="address" class="form-control" name="address" type="text" placeholder="Type your address" rows="3"><?= @$_POST['address'] ?>

                </div>
                <div style="min-height:350px">
                			           <div id="latlong">
                				       <input type="text" id="latbox" name="latbox" placeholder="latitude" class="controls" name="lat" readonly>
                				       <input type="text" id="lngbox" name="lngbox" placeholder="longitude" class="controls" name="lng" readonly>
                			           </div>
                			           <div id="map-canvas"></div>
                                       </div>

                <hr class="mb-4">
                <?php if ($codeDiscounts == 1) { ?>
                        <div class="discount">
                            <label><?= lang('discount_code') ?></label>
                            <input class="form-control" name="discountCode" value="<?= @$_POST['discountCode'] ?>" placeholder="<?= lang('enter_discount_code') ?>" type="text">
                            <a href="javascript:void(0);" class="btn btn-default" onclick="checkDiscountCode()"><?= lang('check_code') ?></a>
                        </div>
                    <?php } ?>

                    <div class="card">
            <div class="row">
                <div class="col-md-10 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
                            <div class="col align-self-center text-right text-muted">Items</div>
                        </div>
                    </div> 
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col"><h5>Product</h5></div>
                            <div class="col"><h5>Name</h5></div>
                            <div class="col"><h5>Quantity</h5></div>
                            <div class="col"><h5>Price</h5></div>
                            <div class="col"><h5>Final sum</h5></div>
                        </div>
                    </div>
                    <?php foreach ($cartItems['array'] as $item) { ?>
                  <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <input type="hidden" name="id[]" value="<?= $item['id'] ?>">
                            <input type="hidden" name="quantity[]" value="<?= $item['num_added'] ?>"> 
                            <div class="col-2"><img class="img-fluid" src="<?= base_url('/attachments/shop_images/' . $item['image']) ?>" alt=""></div>
                            <div class="col">
                                <div class="row"><a href="<?= LANG_URL . '/' . $item['url'] ?>"><?= $item['title'] ?></a></div>
                            </div>
                            <div class="col">
                            <a class="refresh-me add-to-cart <?= $item['quantity'] <= $item['num_added'] ? 'disabled' : '' ?>" data-id="<?= $item['id'] ?>" href="javascript:void(0);">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </a>
                                <span class="border">
                                    <?= $item['num_added'] ?>
                                </span>
                                <a class="" onclick="removeProduct(<?= $item['id'] ?>, true)" href="javascript:void(0);">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </a>
                                
                            </div>


                            <div class="col"><?= $item['price'] . CURRENCY ?></div>

                            <div class="col"><a href="<?= base_url('home/removeFromCart?delete-product=' . $item['id'] . '&back-to=checkout') ?>" >
                            <?= $item['sum_price'] . CURRENCY ?><span class="close">&#10005;</span>
                                </a></div>
                            
                        </div>
                    </div>
            <?php } ?>
</div>
                    <div class="col-md-12 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>

                    
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right"><?= $cartItems['finalSum'] . CURRENCY ?></div>
                        <input type="hidden" class="final-amount" name="final_amount" value="<?= $cartItems['finalSum'] ?>">
                        <input type="hidden" name="amount_currency" value="<?= CURRENCY ?>">
                        <input type="hidden" name="discountAmount" value="">
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
            </div>
            </div>  
        
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        </div>
       
            </form>
            
        </div>
    </div>

</div>

        

        </div>
   

        <?php } else { ?>

        <div class="area"> No items in your cart </div>
        <div class="area2"> <img style="width: 152px; height: 172px;" src="<?= base_url('template/imgs/shopping-bag.png') ?>"  alt="<?= $_SERVER['HTTP_HOST'] ?>"> </div>
        <a href="<?= LANG_URL ?>" class="btn btn-primary go-shop">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                        <?= lang('back_to_shop') ?>
                    </a>
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
  