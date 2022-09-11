<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>


<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datepicker.min.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/new/css/custom_home.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/new/css/style-static.min.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/bootstrap-select-1.12.1/bootstrap-select.min.css') ?>" />

<main class="ps-main">

    <?php
    function loop_tree($pages, $is_recursion = false)
    {
    ?>
        <ul class="<?= $is_recursion === true ? 'children' : 'parent' ?>">
            <?php
            foreach ($pages as $page) {
                $children = false;
                if (isset($page['children']) && !empty($page['children'])) {
                    $children = true;
                }
            ?>
                <li>
                    <?php if ($children === true) {
                        $text_style= "font-size: 14px; font-weight: 700; color:#1e1e7b;";
                    ?>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <?php } else {
                        $text_style= "font-size: 12px; font-weight: 600;color:#1e1e7b;"; ?>
                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                    <?php } ?>
                    <a href="javascript:void(0);" data-categorie-id="<?= $page['id'] ?>" class="go-category left-side <?= isset($_GET['category']) && $_GET['category'] == $page['id'] ? 'selected' : '' ?>" style="<?= $text_style ?> ">
                        <?= $page['name'] ?>
                    </a>
                    <?php
                    if ($children === true) {
                        loop_tree($page['children'], true);
                    } else {
                    ?>
                </li>
        <?php
                    }
                }
        ?>
        </ul>
        <?php
        if ($is_recursion === true) {
        ?>
            </li>
    <?php
        }
    }


    ?>



    <div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider">
        <div class="et_pb_row et_pb_row_0">
            <div class="et_pb_column et_pb_column_2_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
                <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_dark">
                    <div class="et_pb_text_inner">
                        <h6>CHEMED</h6>
                        <h1>Online Medication Shop</h1>
                        <h6>Contact us +251910625286 </h6>
                        <p></p>
                    </div>
                </div>
                <style>

                </style>
                <div class="et_pb_button_module_wrapper et_pb_button_0_wrapper  et_pb_module ">
                    <a class="et_pb_button et_pb_button_0 et_hover_enabled et_pb_bg_layout_dark" style="" href="<?= LANG_URL . '/uploadp' ?>">Upload Your Prescription</a>
                </div>


            </div>

            <div class="et_pb_column et_pb_column_1_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child et_pb_column_empty">
            </div>
        </div>
        <div class="et_pb_bottom_inside_divider"></div>
    </div>





    <div class="container" id="home-page" style="margin-top: 30px;">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <br><br>


        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }


            #header {
                width: 100%;
                height: 60px;
                box-shadow: 5px 5px 15px #e8e8e8
            }

            .col-lg-4,
            .col-md-6 {
                padding-right: 0
            }

            button.btn.btn-hide {
                height: inherit;
                background-color: #1e1e7b;
                color: #fff;
                font-size: 0.82rem;
                padding-left: 40px;
                padding-right: 40px;
                border-top-right-radius: 0px;
                border-bottom-right-radius: 0px
            }

            .btn:focus {
                box-shadow: none
            }

            .box-label .btn {
                background-color: #fff;
                padding: 0;
                font-size: 0.8rem
            }

            .btn-red {
                background-color: #e00000ce
            }

            .btn-orange {
                background-color: #ffa500
            }

            .btn-pink {
                background-color: #e0009dce
            }

            .btn-green {
                background-color: #00811c
            }

            .btn-blue {
                background-color: #026bc2
            }

            .btn-brown {
                background-color: #994a00
            }

            .navbar {
                display: inline-flex
            }

            .pagination .page-item .page-link {
                color: #333;
                border: none;
                width: 40px;
                text-align: center
            }

            .pagination .page-item.active .page-link {
                background-color: #fff;
                border: 1px solid #333
            }

            select {
                outline: none;
                padding: 6px 12px;
                margin: 0px 4px;
                color: #999;
                font-size: 0.85rem;
                width: 140px
            }

            #select2 {
                border: 1px solid #777;
                color: #999
            }

            #pro {
                border: none;
                color: #333;
                font-weight: 700;
                padding-left: 0px;
                width: initial
            }

            #filterbar {
                width: 30%;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 15px;
                float: left
            }

            #filterbar input[type="radio"] {
                visibility: hidden
            }

            #filterbar input[type='radio']:checked {
                background-color: #16c79a;
                border: none
            }

            #filterbar .btn.btn-success {
                background-color: #ddd;
                color: #333;
                border: none;
                width: 115px
            }

            #filterbar .btn.btn-success:hover {
                background-color: #aff1e1;
                color: #444
            }

            #filterbar .btn-success:not(:disabled):not(.disabled).active,
            #filterbar .btn-success:not(:disabled):not(.disabled):active {
                background-color: #16c79a;
                color: #fff
            }

            label {
                cursor: pointer
            }

            .tick {
                display: block;
                position: relative;
                padding-left: 23px;
                cursor: pointer;
                font-size: 0.9rem;
                margin: 0
            }

            .tick input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
                height: 0;
                width: 0
            }

            .check {
                position: absolute;
                top: 1px;
                left: 0;
                height: 18px;
                width: 18px;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 3px
            }

            .tick:hover input~.check {
                background-color: #f3f3f3
            }

            .tick input:checked~.check {
                background-color: #ffffff
            }

            .check:after {
                content: "";
                position: absolute;
                display: none
            }

            .tick input:checked~.check:after {
                display: block;
                transform: rotate(45deg) scale(1)
            }

            .tick .check:after {
                left: 6px;
                top: 2px;
                width: 5px;
                height: 10px;
                border: solid rgb(0, 0, 0);
                border-width: 0 3px 3px 0;
                transform: rotate(45deg) scale(2)
            }

            .box {
                padding: 10px
            }

            .box-label {
                color: #11698e;
                font-size: 0.9rem;
                font-weight: 800
            }

            #inner-box,
            #inner-box2 {
                height: 150px;
                overflow-y: scroll
            }

            #inner-box2 {
                height: 132px
            }

            #inner-box::-webkit-scrollbar,
            #inner-box2::-webkit-scrollbar {
                width: 6px
            }

            #inner-box::-webkit-scrollbar-track,
            #inner-box2::-webkit-scrollbar-track {
                background-color: #ddd;
                border-radius: 2px
            }

            #inner-box::-webkit-scrollbar-thumb,
            #inner-box2::-webkit-scrollbar-thumb {
                background-color: #333;
                border-radius: 2px
            }

            #price {
                height: 45px
            }

            #size input[type="checkbox"] {
                visibility: hidden
            }

            #size input[type='checkbox']:checked {
                background-color: #16c79a;
                border: none
            }

            #size .btn.btn-success {
                background-color: #ddd;
                color: #333;
                border: none;
                width: 40px;
                font-size: 0.8rem;
                border-radius: 0
            }

            #size .btn.btn-success:hover {
                background-color: #aff1e1;
                color: #444
            }

            #size .btn-success:not(:disabled):not(.disabled).active,
            #size .btn-success:not(:disabled):not(.disabled):active {
                background-color: #16c79a;
                color: #fff
            }

            #size label {
                margin: 10px;
                margin-left: 0px
            }

            .card {
                padding: 10px;
                cursor: pointer;
                transition: .3s all ease-in-out;
                height: 350px
            }

            .card:hover {
                box-shadow: 2px 2px 15px #fd9a6ce5;
                transform: scale(1.02)
            }

            .card .product-name {
                font-weight: 600
            }

            .card-body {
                padding-bottom: 0
            }

            .card .text-muted {
                font-size: 0.82rem
            }

            .card-img img {
                padding-top: 10px;
                width: inherit;
                height: 180px;
                object-fit: contain;
                display: block
            }

            .card-body .btn-group .btn {
                padding: 0;
                width: 20px;
                height: 20px;
                margin-right: 5px;
                border-radius: 50%;
                position: relative
            }

            .card-body .btn-group>.btn-group:not(:last-child)>.btn,
            .card-body .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
                border-radius: 50%;
                transition: ease-in all .4s
            }

            .card-body input[type="radio"] {
                visibility: hidden
            }

            .card-body .btn:not(:disabled):not(.disabled).active::after,
            .card-body .btn:not(:disabled):not(.disabled):active::after {
                content: "";
                width: 10px;
                height: 10px;
                border-radius: 50%;
                top: 4px;
                left: 4.2px;
                background-color: #fff;
                position: absolute;
                transition: ease-in all .4s
            }

            .card-body .btn.btn-light:not(:disabled):not(.disabled).active::after,
            .card-body .btn.btn-light:not(:disabled):not(.disabled):active::after {
                background-color: #000
            }

            #avail-size input[type="checkbox"] {
                visibility: hidden
            }

            #avail-size input[type='checkbox']:checked {
                background-color: #16c79a;
                border: none
            }

            #avail-size .btn.btn-success {
                background-color: #ddd;
                color: #333;
                border: none;
                width: 20px;
                font-size: 0.7rem;
                border-radius: 0;
                padding: 0
            }

            #avail-size .btn.btn-success:hover {
                background-color: #aff1e1;
                color: #444
            }

            #avail-size .btn-success:not(:disabled):not(.disabled).active,
            #avail-size .btn-success:not(:disabled):not(.disabled):active {
                background-color: #16c79a;
                color: #fff
            }

            #avail-size label {
                margin: 10px;
                margin-left: 0px
            }

            #shirt {
                height: 170px
            }

            .middle {
                position: relative;
                width: 100%;
                margin-top: 25px
            }

            .slider {
                position: relative;
                z-index: 1;
                height: 5px;
                margin: 0 15px
            }

            .slider>.track {
                position: absolute;
                z-index: 1;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                border-radius: 5px;
                background-color: #ddd
            }

            .slider>.range {
                position: absolute;
                z-index: 2;
                left: 25%;
                right: 25%;
                top: 0;
                bottom: 0;
                border-radius: 5px;
                background-color: #36a31b
            }

            .slider>.thumb {
                position: absolute;
                top: 2px;
                z-index: 3;
                width: 20px;
                height: 20px;
                background-color: #36a31b;
                border-radius: 50%;
                box-shadow: 0 0 0 0 rgba(63, 204, 75, 0.705);
                transition: box-shadow .3s ease-in-out
            }

            .slider>.thumb::after {
                position: absolute;
                width: 8px;
                height: 8px;
                left: 28%;
                top: 30%;
                border-radius: 50%;
                content: '';
                background-color: #fff
            }

            .slider>.thumb.left {
                left: 25%;
                transform: translate(-15px, -10px)
            }

            .slider>.thumb.right {
                right: 25%;
                transform: translate(15px, -10px)
            }

            .slider>.thumb.hover {
                box-shadow: 0 0 0 10px rgba(125, 230, 134, 0.507)
            }

            .slider>.thumb.active {
                box-shadow: 0 0 0 10px rgba(63, 204, 75, 0.623)
            }

            input[type=range] {
                position: absolute;
                pointer-events: none;
                -webkit-appearance: none;
                z-index: 2;
                height: 10px;
                width: 100%;
                opacity: 0
            }

            input[type=range]::-webkit-slider-thumb {
                pointer-events: all;
                width: 30px;
                height: 30px;
                border-radius: 0;
                border: 0 none;
                background-color: red;
                -webkit-appearance: none
            }

            .del {
                text-decoration: line-through;
                color: red
            }

            @media(min-width:1199.6px) {
                #filterbar {
                    width: 25%
                }
            }

            @media(max-width:1199.5px) {
                #filterbar {
                    width: 28%
                }

                .card {
                    height: 350px
                }

                .price {
                    font-size: 0.9rem
                }

                .product-name {
                    font-size: 0.8rem
                }
            }

            @media(max-width: 991.5px) {
                .navbar-nav {
                    min-width: 290px;
                    position: absolute;
                    left: -168px;
                    bottom: -146px;
                    padding: 20px 10px;
                    display: block;
                    background-image: none;
                    z-index: 2;
                    background-color: #1d1c1cb2
                }

                #filterbar {
                    width: 36%
                }

                #sort {
                    background-color: inherit;
                    color: #fff;
                    margin: 0;
                    margin-bottom: 20px;
                    width: 100%
                }

                #sort option,
                #pro option {
                    color: #000
                }

                #pro,
                #select2,
                .result {
                    background-color: inherit;
                    color: #fff
                }

                .card {
                    height: 345px
                }

                .price {
                    font-size: 0.85rem
                }
            }

            @media(max-width: 767.5px) {
                #filterbar {
                    width: 50%
                }
            }

            @media(max-width: 525.5px) {
                #filterbar {
                    float: none;
                    width: 100%;
                    margin-bottom: 20px;
                    border-radius: 5px
                }

                #content.my-5 {
                    margin-top: 20px !important;
                    margin-bottom: 20px !important
                }

                .col-lg-4,
                .col-md-6 {
                    padding-left: 0
                }
            }

      
        </style>
        <div class="container">
            <div class="bg-white rounded d-flex align-items-center justify-content-between" id="header"> <button class="btn btn-hide text-uppercase" type="button" data-toggle="collapse" data-target="#filterbar" aria-expanded="false" aria-controls="filterbar" id="filter-btn" onclick="changeBtnTxt()"> <span class="fas fa-angle-left" id="filter-angle"></span> <span id="btn-txt">Hide filters</span> </button>
                <nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pl-auto"> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation" onclick="chnageIcon()" id="icon"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="mynav">
                        <ul class="navbar-nav d-lg-flex align-items-lg-center">
                            <li class="nav-item active">
                                <select class="selectpicker order form-control" data-order-to="order_new">
                                    <option <?= isset($_GET['order_new']) && $_GET['order_new'] == "desc" ? 'selected' : '' ?> <?= !isset($_GET['order_new']) || $_GET['order_new'] == "" ? 'selected' : '' ?> value="desc"><?= lang('new') ?> </option>
                                    <option <?= isset($_GET['order_new']) && $_GET['order_new'] == "asc" ? 'selected' : '' ?> value="asc"><?= lang('old') ?> </option>
                                </select>
                            </li>
                            <li class="nav-item active">
                                <select class="selectpicker order form-control" data-order-to="order_price" title="<?= lang('price_title') ?>..">
                                    <option label="<?= lang('not_selected') ?>"></option>
                                    <option <?= isset($_GET['order_price']) && $_GET['order_price'] == "asc" ? 'selected' : '' ?> value="asc"><?= lang('price_low') ?> </option>
                                    <option <?= isset($_GET['order_price']) && $_GET['order_price'] == "desc" ? 'selected' : '' ?> value="desc"><?= lang('price_high') ?> </option>
                                </select>
                            </li>
                            <li class="nav-item active">
                                <select class="selectpicker order form-control" data-order-to="order_procurement" title="<?= lang('procurement_title') ?>..">
                                    <option label="<?= lang('not_selected') ?>"></option>
                                    <option <?= isset($_GET['order_procurement']) && $_GET['order_procurement'] == "desc" ? 'selected' : '' ?> value="desc"><?= lang('procurement_desc') ?> </option>
                                    <option <?= isset($_GET['order_procurement']) && $_GET['order_procurement'] == "asc" ? 'selected' : '' ?> value="asc"><?= lang('procurement_asc') ?> </option>
                                </select>
                            </li>


                            <li class="nav-item d-lg-none d-inline-flex"> </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <div id="content" class="my-5">
                <div id="filterbar" class="collapse">

                    <div class="box border-bottom">
                        <div class="box-label text-uppercase d-flex align-items-center">category <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#inner-box" aria-expanded="false" aria-controls="inner-box" id="out" onclick="outerFilter()"> <span class="fas fa-plus"></span> </button> </div>

            
                        <div id="nav-categories">
                            <?php loop_tree($home_categories); ?>
                        </div>
                    </div>

                    <div class="box border-bottom">
                        <div class="box-label text-uppercase d-flex align-items-center">price <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#price" aria-expanded="false" aria-controls="price"><span class="fas fa-plus"></span></button> </div>
                        <div class="collapse" id="price">
                            <div class="middle">
                                <div class="multi-range-slider"> <input type="range" id="input-left" min="0" max="100" value="10"> <input type="range" id="input-right" min="0" max="100" value="50">
                                    <div class="slider">
                                        <div class="track"></div>
                                        <div class="range"></div>
                                        <div class="thumb left"></div>
                                        <div class="thumb right"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <div> <span id="amount-left" class="font-weight-bold"></span> Birr </div>
                                <div> <span id="amount-right" class="font-weight-bold"></span> Birr </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
            <div id="products">
                <div class="row mx-0">
                    <div class="row" id="products-side">

                        <?php
                        if (!empty($products)) {
                            $load::getProducts($products, 'col-md-3 col-sm-6', false);
                        } else {
                        ?>
                            <script>
                                $(document).ready(function() {
                                    ShowNotificator('alert-info', '<?= lang('no_results') ?>');
                                });
                            </script>
                        <?php
                        }
                        ?>
                    </div>
                    </div>
                    <?php if ($links_pagination != '') { ?>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <?= $links_pagination ?>
                            </div>
                        </div>
                    <?php } ?>
                





            </div>
            
        </div>
    </div>


    <script>
        // For Filters
        document.addEventListener("DOMContentLoaded", function() {
            var filterBtn = document.getElementById('filter-btn');
            var btnTxt = document.getElementById('btn-txt');
            var filterAngle = document.getElementById('filter-angle');

            $('#filterbar').collapse(false);
            var count = 0,
                count2 = 0;

            function changeBtnTxtt() {
                $('#filterbar').collapse(true);
                count++;
                if (count % 2 != 0) {
                    filterAngle.classList.add("fa-angle-right");
                    btnTxt.innerText = "show filters"
                    filterBtn.style.backgroundColor = "#36a31b";
                } else {
                    filterAngle.classList.remove("fa-angle-right")
                    btnTxt.innerText = "hide filters"
                    filterBtn.style.backgroundColor = "#ff935d";
                }

            }

            // For Applying Filters
            $('#inner-box').collapse(false);
            $('#inner-box2').collapse(false);

            // For changing NavBar-Toggler-Icon

        });
    </script>
   								<?php
		function checkbox_loop_tree($pages, $is_recursion = false)
		{
			?>
			<ul class="<?= $is_recursion === true ? '' : 'multiple-checkbox' ?>">
				<?php
				foreach ($pages as $page) {
					$children = false;
					if (isset($page['children']) && !empty($page['children'])) {
						$children = true;
					}
					?>
					<li>
					<input type="checkbox"  name="cat_checkbox[]"><?= $page['name'] ?>
						<?php
						if ($children === true) {
							checkbox_loop_tree($page['children'], true);
						} else {
							?>
						</li>
						<?php
					}
				}
				?>
			</ul>
			<?php
			if ($is_recursion === true) {
				?>
				</li>
				<?php
			}
		}

		checkbox_loop_tree($home_categories);
		?>
<!--
<ul class="multiple-checkbox">
    <li><input type="checkbox" />Administration
        <ul>
            <li><input type="checkbox" />Manager 1</li>
			<li><input type="checkbox" />Manager 1</li>
			<li><input type="checkbox" />Manager 1</li>
		</ul>
    </li>
</ul>

-->
	













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
  


<img class='default-img'  src='<?= base_url('/attachments/shop_images/' . $article['image']) ?>' alt='<?= str_replace(''', ''', $article['title']) ?>' onerror='this.onerror=null; this.src= '<?= base_url('attachments/shop_images/no_image8.jpg') ?>' '>
                    <img class='hover-img' src='<?= base_url('/attachments/shop_images/' . $article['image']) ?>' alt='<?= str_replace(''', ''', $article['title']) ?>' onerror='this.onerror=null; this.src= '<?= base_url('attachments/shop_images/no_image8.jpg') ?>' '>
                    </a>
                        <div class='button-head'>
                            <div class='product-action'>
                                <a data-toggle='modal' data-target='#exampleModal' title='Quick View' href='#'><i class=' ti-eye'></i><span>Quick Shop</span></a>
                                <a title='Add to Cart' data-goto='<?= LANG_URL . '/shopping-cart' ?>'   data-id='<?= $article['id'] ?>'  onclick='add_to_cart(this);'><i class='ti-heart'></i><span>Add to Wishlist</span></a>
                                <a title='Buy Now'  data-goto='<?= LANG_URL . '/checkout' ?>' data-id='<?= $article['id'] ?>' onclick='buy_now(this);'><i class='ti-bag'></i><span>Buy Now</span></a>
                            </div>
                            <div class='product-action-2'>
                            <a title='Add to Cart' href='javascript:void(0);' class='add-to-cart' data-goto='<?= LANG_URL . '/shopping-cart' ?>' data-id='<?= $article['id'] ?>'>Add to Cart</a>
                            </div>
                            
                    </div>
                </div>
                    <div class='product-content'>
                        <div class='product-title'>
                        <h3><a href='<?= $article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url'] ?>'><?= character_limiter($article['title'], 70) ?></a></h3>
                        </div>
                        <div class='product-price'>
                        <span class='old'><?= $article['old_price'] != '' ? number_format($article['old_price'], 2) . CURRENCY : '' ?></span>
                        <span><?= $article['price'] != '' ? number_format($article['price'], 2) : 0 ?><?= CURRENCY ?></span>
                        </div>
                    </div>
                </div>
            </div>























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
							<?php }








                            public function getProductGrid()
    {
        $products = $this->Public_model->getProducts($this->num_rows, $this->page_start, $_GET);
        $result = $this->setProductGrid($products);
        echo $result;
        
    }
    public function setProductGrid($products = [])
    {
        $v = '';
        
         foreach($products as $article){ 
            $v .= "<div class='col-xl-3 col-lg-4 col-md-4 col-12'>";
            $v .= "<div class='single-product'>";
            $v .= "<div class='product-img'>";
            $v .= "<a href='".$article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url']."';";
            $v .= "</div></div></div>";
             }


          echo $v;

        
    }