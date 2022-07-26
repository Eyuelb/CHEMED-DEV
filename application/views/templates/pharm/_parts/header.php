<!DOCTYPE html>
<html lang="<?= MY_LANGUAGE_ABBR ?>">

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="<?= $description ?>" />
        <meta name="keywords" content="<?= $keywords ?>" />
        <meta property="og:title" content="<?= $title ?>" />
        <meta property="og:description" content="<?= $description ?>" />
        <meta property="og:url" content="<?= LANG_URL ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?= isset($image) && !is_null($image) ? $image : base_url('assets/img/site-overview.png') ?>" />
        <title><?= $title ?></title>
        <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/imgs/ch-logo.jpeg') ?>" />
 


<script src="<?= base_url('assets/form-validator/jquery.form-validator.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/new/plugins/font-awesome/css/font-awesome.min.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/new/plugins/ps-icon/style.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/new/plugins/bootstrap/dist/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/new/plugins/owl-carousel/assets/owl.carousel.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/new/css/style.css') ?>" />

<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('loadlanguage/all.js') ?>"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB0j8WyLVBP1WRKhP5Cr946Xf55BjA3wbA"></script>

<script src="<?= base_url('assets/new/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/new/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') ?>"></script>
<script src="<?= base_url('assets/new/plugins/owl-carousel/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/new/js/main.js') ?>"></script>
<script>
  $(function() {
    // setup validate
    $.validate();
  });
</script>
<?php if ($cookieLaw != false) { ?>
            <script type="text/javascript">
                window.cookieconsent_options = {"message": "<?= $cookieLaw['message'] ?>", "dismiss": "<?= $cookieLaw['button_text'] ?>", "learnMore": "<?= $cookieLaw['learn_more'] ?>", "link": "<?= $cookieLaw['link'] ?>", "theme": "<?= $cookieLaw['theme'] ?>"};
            </script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
        <?php } ?>
<body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions">
                  
                  <?php if (isset($_SESSION['logged_user'])) { ?>
                      <a href="<?= LANG_URL . '/myaccount' ?>">My Account</a>
                      <a href="<?= LANG_URL . '/logout' ?>">LOG OUT</a>
                  <?php } else { ?>
                    <a href="<?= LANG_URL . '/login' ?>">Login & Regiser</a>
                  <?php } ?>

                    <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ETB<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#"><img src="images/flag/usa.svg" alt=""> ETB</a></li>

                      </ul>
                    </div>
                    <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>

                      </ul>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a href="<?= base_url() ?>"><h1 style="font-weight: 700; margin-left:60px;color: #1e1e7b;">CHEMED</h1></a></div>
          </div>
          
          <div class="navigation__column center">
                <ul class="main-menu menu">
                <li<?= uri_string() == '' || uri_string() == MY_LANGUAGE_ABBR ? ' class="active"' : '' ?>><a href="<?= LANG_URL ?>"><?= lang('home') ?></a></li>
                <li<?= uri_string() == 'uploadp' || uri_string() == MY_LANGUAGE_ABBR . '/uploadp' ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/uploadp' ?>"><?= lang('uploadp') ?></a></li>
                <li<?= uri_string() == 'shopping-cart' || uri_string() == MY_LANGUAGE_ABBR . '/shopping-cart' ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/shopping-cart' ?>"><?= lang('shopping_cart') ?></a></li>


                </ul>
          </div>
          <div class="navigation__column right">
          <div class="ps-search--header">
          <input id="search_in_title"  type="search" name="search" value="<?= isset($_GET['search_in_title']) ? $_GET['search_in_title'] : '' ?>"  placeholder="Search your product" >                
<button type="button" onclick="submitForm()"><i class="ps-icon-search"></i></button>
</div>
            <form method="GET" action="<?= isset($vendor_url) ? $vendor_url : LANG_URL ?>" id="bigger-search">
            
                     
                                                        <input type="hidden" name="category" value="<?= isset($_GET['category']) ? htmlspecialchars($_GET['category']) : '' ?>">
                                                        <input type="hidden" name="in_stock" value="<?= isset($_GET['in_stock']) ? htmlspecialchars($_GET['in_stock']) : '' ?>">
                                                        <input type="hidden" name="search_in_title" value="<?= isset($_GET['search_in_title']) ? htmlspecialchars($_GET['search_in_title']) : '' ?>">
                                                        <input type="hidden" name="order_new" value="<?= isset($_GET['order_new']) ? htmlspecialchars($_GET['order_new']) : '' ?>">
                                                        <input type="hidden" name="order_price" value="<?= isset($_GET['order_price']) ? htmlspecialchars($_GET['order_price']) : '' ?>">
                                                        <input type="hidden" name="order_procurement" value="<?= isset($_GET['order_procurement']) ? htmlspecialchars($_GET['order_procurement']) : '' ?>">
                                                        <input type="hidden" name="brand_id" value="<?= isset($_GET['brand_id']) ? htmlspecialchars($_GET['brand_id']) : '' ?>">
                                                        <input type="hidden" value="<?= isset($_GET['quantity_more']) ? htmlspecialchars($_GET['quantity_more']) : '' ?>" name="quantity_more" id="quantity_more" placeholder="<?= lang('type_a_number') ?>" class="form-control">
                                                        <input type="hidden" value="<?= isset($_GET['added_after']) ? htmlspecialchars($_GET['added_after']) : '' ?>" name="added_after" id="added_after" class="form-control">
                                                                        <input type="hidden" value="<?= isset($_GET['added_before']) ? htmlspecialchars($_GET['added_before']) : '' ?>" name="added_before" id="added_before" class="form-control">
                                                                       <input class="form-control" value="<?= isset($_GET['search_in_body']) ? htmlspecialchars($_GET['search_in_body']) : '' ?>" name="search_in_body" id="search_in_body" type="hidden" />
                                                                    <input type="hidden" value="<?= isset($_GET['price_from']) ? htmlspecialchars($_GET['price_from']) : '' ?>" name="price_from" id="price_from" class="form-control" placeholder="<?= lang('type_a_number') ?>">
                                                                    <input type="hidden" name="price_to" value="<?= isset($_GET['price_to']) ? htmlspecialchars($_GET['price_to']) : '' ?>" id="price_to" class="form-control" placeholder="<?= lang('type_a_number') ?>">
                                                                    
                                                                    
                                                    </form>
            <div class="ps-cart"><a class="ps-cart__toggle" href="<?= LANG_URL . '/shopping-cart' ?>"><span><i><?= is_numeric($cartItems) && (int)$cartItems == 0 ? 0 : $sumOfItems ?></i></span><i class="ps-icon-shopping-cart" ></i></a>

            </div>
            <div class="menu-toggle" style="background-color: #1e1e7b;"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="header-services" style="background-color: #1e1e7b;height: 3px;">
    
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>               </strong></p>

      </div>
    </div>

<style>
  
.page-content-background{

width: inherit;
background-color:#ffffff;

}


.page-content {
    display: block;
    grid-gap: 1rem;
    max-width: fit-content;
    font-family: var(--font-sans);

    margin-left: auto;
    margin-right: auto;

    position: relative;
    width: 100%;
  }

  .home-categories__header {
    display: block;
    position: relative;
    padding: 50px;
}


.home-categories__header__title{

    font-size: 3.125rem;
    font-weight: 700;
    line-height: 1.5rem;
    margin: 0;
    margin-bottom: 20px;
    text-align: center;
    padding-top: 10px;
    color: #000;
}

  .main_2{
    width:100%;
    padding: 20px;



  }

    .hero {
      display: inline-block;
      position: relative;
      flex-direction: row;
      width: 300px;
      min-width: 200px;
      height: 150px;
      border-radius: 7px;
      overflow: hidden;
      box-shadow: 5px 5px 30px rgb(255 255 255);
      margin: 4px;
  }

  .hero-profile-img {
    height: 100%;
  }

  .hero-description-bk {

    border-radius: 30px;
    position: absolute;
    top: 55%;
    left: -5px;
    height: 0%;
    width: 0%;
    transform: skew(19deg, -9deg);
  }

  .second .hero-description-bk {
    background-image: linear-gradient(-20deg , #bb7413, #e7d25c)
  }

  .hero-logo {
    height: 80px;
    width: 80px;
    border-radius: 20px;
    background-color: #fff;
    position: absolute;
    bottom: 30%;
    left: 30px;
    overflow:hidden;
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.7);
  }

  .hero-logo img {
    height: 100%;
  }

  .hero-description {
    position: absolute;
    color: #fff;
    font-weight: 900;
    left: 150px;
    bottom: 26%;
  }

  .hero-btnn {
    position: absolute;
    color: rgb(0, 0, 0);
    right: 30px;
    bottom: 10%;
    padding: 7px 15px;
    border: 2px solid rgb(255, 255, 255);
    border-radius: 7px;
    background-color: #fff700;
  }

  .hero-btnn a {
    color: rgb(0, 0, 0);
    font-weight: 900;
  }


  /* END CARD DESIGN */


  .btnn i:before {
    width: 14px;
    height: 14px;
    position: fixed;
    color: #fff;
    background: #0077B5;
    padding: 10px;
    border-radius: 50%;
    top:5px;
    right:5px;
  }












 /* Map css */

	#pac-input, #latlong input {

    background-color: #fff;
    padding: 0 11px 0 13px;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    text-overflow: ellipsis;

}
#pac-input {

    width: 50%;

}
.controls {

    margin-top: 16px;
    border: 1px solid transparent;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    height: 32px;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);

}

#map-canvas {
    width: 100%;
    height: 350px;
    padding: 0px;
    float: left;
}


.back{background-color : #fff2fd;}






</style>







    