<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url('assets/new/css/custom_shopping_cart.css') ?>" />
<div class="" id="shopping-cart"     style="margin-bottom: 100px;">

    <hr>
    <?php
    if (!isset($cartItems['array']) || $cartItems['array'] == null) {
        ?>

        <div class="area"> No items in your cart </div>
        <div class="area2"> <img style="width: 152px; height: 172px;" src="<?= base_url('template/imgs/shopping-bag.png') ?>"  alt="<?= $_SERVER['HTTP_HOST'] ?>"> 
        <a href="<?= LANG_URL ?>" class="btn btn-primary go-shop">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                        <?= lang('back_to_shop') ?>
                    </a>
        </div>
        <?php
    } else {
       
        ?>

<div class="card">
            <div class="row">
                <div class="col-md-8 cart">
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

                            <div class="col"><a href="<?= base_url('home/removeFromCart?delete-product=' . $item['id'] . '&back-to=shopping-cart') ?>" >
                            <?= $item['sum_price'] . CURRENCY ?><span class="close">&#10005;</span>
                                </a></div>
                            
                        </div>
                    </div>
            <?php } ?>
                 <a href="<?= LANG_URL ?>" class="btn btn-primary back-to-shop go-shop">
                       <span class="glyphicon glyphicon-circle-arrow-left"></span><?= lang('back_to_shop') ?></a></div>
                    <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>

                    
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right"><?= $cartItems['finalSum'] . CURRENCY ?></div>
                        <input type="hidden" class="final-amount" name="final_amount" value="<?= $cartItems['finalSum'] ?>">
                        <input type="hidden" name="amount_currency" value="<?= CURRENCY ?>">
                        <input type="hidden" name="discountAmount" value="">
                    </div>
                    <a class="btn btn-primary go-checkout" href="<?= LANG_URL . '/checkout' ?>"><?= lang('checkout') ?><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
                </div>
            </div>
            </div>  
        
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        </div>
        <?php } ?>
<?php
if ($this->session->flashdata('deleted')) {
    ?>
    <script>
        $(document).ready(function () {
            ShowNotificator('alert-info', '<?= $this->session->flashdata('deleted') ?>');
        });
    </script>
<?php } ?>