<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<main class="ps-main">
<?php
function loop_tree($pages, $is_recursion = false)
{
if($is_recursion = true){?><ul class="dropdown"><?php }
if($is_recursion = false){?><li class="has-children"><?php }?>
    <?php

    foreach ($pages as $page) {
        $children = false;
        if (isset($page['children']) && !empty($page['children'])) {
            $children = true;
        }
        ?>
        <li class="<?= $children === true ? 'has-children' : '' ?>">

            <a href="javascript:void(0);" data-categorie-id="<?= $page['id'] ?>" class="go-category left-side <?= isset($_GET['category']) && $_GET['category'] == $page['id'] ? 'selected' : '' ?>">
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
</li>
<?php
if ($is_recursion === true) {
    ?>
    </li>
    <?php
} ?>
  <?php
}?>
<div class="" data-widget="block" data-visible-on="" data-spacing="lala" style="background-image:url(<?= base_url('template/imgs/banner.jpg')?>);background-position:top;background-repeat:no-repeat;     height: 43em;
width: 100%;" data-bg-position="top" >




<h1 style="font-weight: 700;
font-size: 5.5rem;
color: #1c2486;
margin-left: 110px;
padding-top: 110px;
">Your Local<br> Pharmacy</h1></div>



    </div>


<div class="page-content-background">
<div class="page-content">
<div class="home-categories__header">
  <div class="first hero"> <img src="<?= base_url('template/imgs/otc-logo.jpg') ?>" class="hero-profile-img" alt="">
    <div class="hero-description"><p style="color:black; margin-right:100px; padding-top: 100px; " >  </p></div>
    <div class="hero-btnn" style="font:icon"><a href="<?= LANG_URL . '?category=58&in_stock=&search_in_title=&order_new=&order_price=&order_procurement=&brand_id=&quantity_more=&added_after=&added_before=&search_in_body=&price_from=&price_to=' ?>">Order</a></div></div>

    <div class="second hero"> <img src="<?= base_url('template/imgs/upload-prescription-logo.jpg') ?>" class="hero-profile-img" alt="">
    <div class="hero-description"><p ></p></div>
    <div class="hero-btnn" style="font:icon"><a href="<?= LANG_URL . '/uploadp' ?>">Order</a></div></div>

    <div class="third hero"> <img src="<?= base_url('template/imgs/healthcare-logo.jpg') ?>" class="hero-profile-img" alt="">
    <div class="hero-description"><p ></p></div>
    <div class="hero-btnn" style="font:icon"><a href="<?= LANG_URL . '?category=3&in_stock=&search_in_title=&order_new=&order_price=&order_procurement=&brand_id=&quantity_more=&added_after=&added_before=&search_in_body=&price_from=&price_to=' ?>">Order</a></div></div>

    <div class="forth hero"> <img src="<?= base_url('template/imgs/supplements-logo.jpg') ?>" class="hero-profile-img" alt="">
    <div class="hero-description"><p ></p></div>
    <div class="hero-btnn" style="font:icon"><a href="<?= LANG_URL . '?category=2&in_stock=&search_in_title=&order_new=&order_price=&order_procurement=&brand_id=&quantity_more=&added_after=&added_before=&search_in_body=&price_from=&price_to=' ?>">Order</a></div></div>
</div>


</div>
</div>


<?php
if (count($sliderProducts) > 0) {
?>
<div id="home-slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
        $i = 0;
        while ($i < count($sliderProducts)) {
            ?>
            <li data-target="#home-slider" data-slide-to="0" class="<?= $i == 0 ? 'active' : '' ?>"></li>
            <?php
            $i++;
        }
        ?>
    </ol>
    <div class="container">
        <div class="carousel-inner" role="listbox">
            <?php
            $i = 0;
            foreach ($sliderProducts as $article) {
                ?>
                <div class="item <?= $i == 0 ? 'active' : '' ?>">
                    <div class="row">
                        <div class="col-sm-6 left-side">
                            <a href="<?= LANG_URL . '/' . $article['url'] ?>">
                                <img src="<?= base_url('attachments/shop_images/' . $article['image']) ?>" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-sm-6 right-side">
                            <h3 class="text-right">
                                <a href="<?= LANG_URL . '/' . $article['url'] ?>">
                                    <?= character_limiter($article['title'], 100) ?>
                                </a>
                            </h3>
                            <div class="description text-right">
                                <?= character_limiter(strip_tags($article['basic_description']), 150) ?>
                            </div>
                            <div class="price text-right"><?= $article['price'] . CURRENCY ?></div>
                            <div class="xs-center">
                                <?php if ($hideBuyButtonsOfOutOfStock == 0 || (int)$article['quantity'] > 0) { ?>
                                <a class="option add-to-cart" data-goto="<?= base_url('checkout') ?>" href="javascript:void(0);" data-id="<?= $article['id'] ?>">
                                    <img src="<?= base_url('template/imgs/shopping-cart-icon-515.png') ?>" alt="">
                                    <?= lang('buy_now') ?>
                                </a>
                                <?php } ?>
                                <a class="option right-5" href="<?= LANG_URL . '/' . $article['url'] ?>">
                                    <img src="<?= base_url('template/imgs/info.png') ?>" alt="">
                                    <?= lang('details') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
            }
            ?>
        </div>
    </div>
    <a class="left carousel-control" href="#home-slider" role="button" data-slide="prev"></a>
    <a class="right carousel-control" href="#home-slider" role="button" data-slide="next"></a>
</div>
<?php } ?>


<div class="container" id="home-page" style="margin-top: 30px;">
<div class="row">
















<?php if ($showOutOfStock == 1) { ?>
            <div class="filter-sidebar">
                <div class="title">
                    <span><?= lang('store') ?></span>
                    <?php if (isset($_GET['in_stock']) && $_GET['in_stock'] != '') { ?>
                        <a href="javascript:void(0);" class="clear-filter" data-type-clear="in_stock" data-toggle="tooltip" data-placement="right" title="<?= lang('clear_the_filter') ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <?php } ?>
                </div>
                <ul>
                    <li>
                        <a href="javascript:void(0);" data-in-stock="1" class="in-stock <?= isset($_GET['in_stock']) && $_GET['in_stock'] == '1' ? 'selected' : '' ?>"><?= lang('in_stock') ?> (<?= $countQuantities['in_stock'] ?>)</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-in-stock="0" class="in-stock <?= isset($_GET['in_stock']) && $_GET['in_stock'] == '0' ? 'selected' : '' ?>"><?= lang('out_of_stock') ?> (<?= $countQuantities['out_of_stock'] ?>)</a>
                    </li>
                </ul>
            </div>



        <?php } ?>
    </div>









    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>

<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

	//////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
	  	$('.dropdown-menu a').click(function(e){
	  		e.preventDefault();
	        if($(this).next('.submenu').length){
	        	$(this).next('.submenu').toggle();
	        }
	        $('.dropdown').on('hide.bs.dropdown', function () {
			   $(this).find('.submenu').hide();
			})
	  	});
	}
	
}); // jquery end
</script>

<style type="text/css">
	@media (min-width: 992px){
		.dropdown-menu .dropdown-toggle:after{
			border-top: .3em solid transparent;
		    border-right: 0;
		    border-bottom: .3em solid transparent;
		    border-left: .3em solid;
		}

		.dropdown-menu .dropdown-menu{
			margin-left:0; margin-right: 0;
		}

		.dropdown-menu li{
			position: relative;
		}
		.nav-item .submenu{ 
			display: none;
			position: absolute;
			left:100%; top:-7px;
		}
		.nav-item .submenu-left{ 
			right:100%; left:auto;
		}

		.dropdown-menu > li:hover{ background-color: #f1f1f1 }
		.dropdown-menu > li:hover > .submenu{
			display: block;
		}
	}
    .my-select {
    background-color: white;
    color: black;
    border: 0 none;
    border-radius: 20px;
    padding: 6px 20px;
    width: 166px;
    font-weight: 700;
}
.text {
    color: white;
    font-weight: 700;
}
</style>


























<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

	//////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
	  	$('.dropdown-menu a').click(function(e){
	  		e.preventDefault();
	        if($(this).next('.submenu').length){
	        	$(this).next('.submenu').toggle();
	        }
	        $('.dropdown').on('hide.bs.dropdown', function () {
			   $(this).find('.submenu').hide();
			})
	  	});
	}
	
}); // jquery end
</script>

<style type="text/css">
	@media (min-width: 992px){
		.dropdown-menu .dropdown-toggle:after{
			border-top: .3em solid transparent;
		    border-right: 0;
		    border-bottom: .3em solid transparent;
		    border-left: .3em solid;
		}

		.dropdown-menu .dropdown-menu{
			margin-left:0; margin-right: 0;
		}

		.dropdown-menu li{
			position: relative;
		}
		.nav-item .submenu{ 
			display: none;
			position: absolute;
			left:100%; top:-7px;
		}
		.nav-item .submenu-left{ 
			right:100%; left:auto;
		}

		.dropdown-menu > li:hover{ background-color: #f1f1f1 }
		.dropdown-menu > li:hover > .submenu{
			display: block;
		}
	}
    .my-select {
    background-color: white;
    color: black;
    border: 0 none;
    border-radius: 20px;
    padding: 6px 20px;
    width: 166px;
    font-weight: 700;
}
.text {
    color: white;
    font-weight: 700;
}
</style>


























<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<ul class="navbar-nav">
<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown">FILTER BY CATEGORY</a>
      <?php loop_tree($home_categories); ?>
  </li>
<li class="">
  <div class="container">
  <div class="row">
      <div class="col-md-4">        
        <label class="text">SORT BY PRODUCTS ARIVAL</label>
        <select class="custom-select my-select order form-control" data-order-to="order_new">
        <option <?= isset($_GET['order_new']) && $_GET['order_new'] == "desc" ? 'selected' : '' ?> <?= !isset($_GET['order_new']) || $_GET['order_new'] == "" ? 'selected' : '' ?> value="desc"><?= lang('new') ?> </option>
<option <?= isset($_GET['order_new']) && $_GET['order_new'] == "asc" ? 'selected' : '' ?> value="asc"><?= lang('old') ?> </option>
      </select>
        
      </div>
  </div>
  
</div>

  </li>
  <li class="">
  <div class="container">
  <div class="row">
      <div class="col-md-4">        
        <label class="text">SORT BY PRICE</label>
        <select class="custom-select my-select order form-control" data-order-to="order_new">
        <option label="<?= lang('not_selected') ?>"></option>
<option <?= isset($_GET['order_price']) && $_GET['order_price'] == "asc" ? 'selected' : '' ?> value="asc"><?= lang('price_low') ?> </option>
<option <?= isset($_GET['order_price']) && $_GET['order_price'] == "desc" ? 'selected' : '' ?> value="desc"><?= lang('price_high') ?> </option></select>  
      </div>
  </div> 
</div>
  </li>
  <li class="">
  <div class="container">
  <div class="row">
      <div class="col-md-4">        
        <label class="text">Most Sold Items</label>
        <select class="custom-select my-select order form-control" data-order-to="order_new">
        <option label="<?= lang('not_selected') ?>"></option>
<option <?= isset($_GET['order_procurement']) && $_GET['order_procurement'] == "desc" ? 'selected' : '' ?> value="desc"><?= lang('procurement_desc') ?> </option>
<option <?= isset($_GET['order_procurement']) && $_GET['order_procurement'] == "asc" ? 'selected' : '' ?> value="asc"><?= lang('procurement_asc') ?> </option>
</select>
      </div>
  </div> 
</div>
  </li>
</ul>
 <!-- navbar-collapse.// -->

</nav>

    <div class="col-md-11 eqHeight" id="products-side">

        <?php
        if (!empty($products)) {
            $load::getProducts($products, 'col-sm-4 col-md-3 back ', false);
        } else {
            ?>
            <script>
                $(document).ready(function () {
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
        <div class="col-sm-6 col-sm-offset-3"style="margin-left: 50%;">
            <?= $links_pagination ?>
        </div>
    </div>
<?php } ?>
</div>














function loop_tree($pages, $is_recursion = false)
    {
        $go = true;

        if ($is_recursion == false) { ?><ul class="dropdown-menu">
            <?php $go = true;
        } ?>
            <?php if ($is_recursion == true) { ?><ul class="submenu dropdown-menu"><?php
                                                                                $go = false;
                                                                            } ?>
                <?php

                foreach ($pages as $page) {
                    $children = false;
                    if (isset($page['children']) && !empty($page['children'])) {
                        $children = true;
                    }
                ?>
                    <?php if ($go == true) { ?><li class=" nav-item dropdown b">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle  <?= isset($_GET['category']) && $_GET['category'] == $page['id'] ? 'selected' : '' ?>">
                                <?= $page['name'] ?>
                            </a><?php } ?>
                        <?php if ($go == false) { ?>
                        <li class="b">
                            <a href="javascript:void(0);" class="go-category dropdown-item  <?= isset($_GET['category']) && $_GET['category'] == $page['id'] ? 'selected' : '' ?>">
                                <?= $page['name'] ?>
                            </a><?php } ?>



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
                </li>

                <?php
                if ($is_recursion === true) {
                ?>
                    </li>
                <?php
                } ?>
            <?php
        } ?>









<script type="text/javascript">
                    /// some script

                    // jquery ready start
                    $(document).ready(function() {
                        // jQuery code

                        //////////////////////// Prevent closing from click inside dropdown
                        $(document).on('click', '.dropdown-menu', function(e) {
                            e.stopPropagation();
                        });

                        // make it as accordion for smaller screens
                        if ($(window).width() < 992) {
                            $('.dropdown-menu a').click(function(e) {
                                e.preventDefault();
                                if ($(this).next('.submenu').length) {
                                    $(this).next('.submenu').toggle();
                                }
                                $('.dropdown').on('hide.bs.dropdown', function() {
                                    $(this).find('.submenu').hide();
                                })
                            });
                        }

                    }); // jquery end
                </script>

                <style type="text/css">
                    @media (min-width: 992px) {
                        .dropdown-menu .dropdown-toggle:after {
                            border-top: .3em solid transparent;
                            border-right: 0;
                            border-bottom: .3em solid transparent;
                            border-left: .3em solid;
                            background-color: aliceblue;
                        }

                        .dropdown-menu .dropdown-menu {
                            margin-left: 0;
                            margin-right: 0;
                            background-color: aliceblue;
                            color: #1e1e7b;
                        }

                        .dropdown-menu li {
                            position: relative;
                        }

                        .nav-item .submenu {
                            display: none;
                            position: absolute;
                            left: 100%;
                            top: -7px;
                        }

                        .nav-item .submenu-left {
                            right: 100%;
                            left: auto;
                        }

                        .dropdown-menu>li:hover {
                            background-color: black;
                        }

                        .dropdown-menu>li:hover>.submenu {
                            display: block;
                        }

                        .navbar-dark .navbar-nav .nav-link .dropdown-menu .nav-item {



                            color: black;
                            font-size: 13px;
                            font-weight: 700;
                        }

                        .b {
                            background-color: #1e1e7b;

                            font-size: 13px;
                            font-weight: 700;
                        }

                        .navbar-dark .navbar-nav .nav-link:hover {
                            color: gray;
                        }
                    }

                    .navbar-dark .navbar-nav .nav-link .dropdown-menu .nav-item {
                        background-color: aliceblue;
                        color: black;
                        font-size: 13px;
                        font-weight: 700;
                    }

                    .navbar-dark .navbar-nav .nav-link:hover {
                        color: white;
                    }

                    @media (max-width: 767px) {
                        .navbar-nav .open .dropdown-menu>li>a {
                            line-height: 20px;
                        }
                    }

                    @media (max-width: 767px) {

                        .navbar-nav .open .dropdown-menu .dropdown-header,
                        .navbar-nav .open .dropdown-menu>li>a {
                            padding: 5px 15px 5px 25px;
                        }
                    }

                    .dropdown-menu>li>a {
                        display: block;
                        padding: 3px 20px;
                        clear: both;
                        font-weight: 400;
                        line-height: 1.42857143;
                        color: #fff;
                        white-space: nowrap;

                    }

                    .b {


                        font-size: 13px;
                        font-weight: 700;
                    }
                </style>