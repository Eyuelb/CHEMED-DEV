<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>CHE-MED</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?= base_url('assets/che-med-assets/images/Che_Logo.png') ?>">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/bootstrap.css') ?>">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/magnific-popup.min.css') ?>">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/font-awesome.css') ?>">
	<!-- Jquery Ui -->
	<link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/jquery-ui.css') ?>">
	<!-- Fancybox -->
	<link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/jquery.fancybox.min.css') ?>">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/themify-icons.css') ?>">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/niceselect.css') ?>">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/animate.css') ?>">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/flex-slider.min.css') ?>">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/owl-carousel.css') ?>">
	<!-- Slicknav -->
    <link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/slicknav.min.css') ?>">
	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"rel = "stylesheet">

	
	<!-- CHEMED StyleSheet -->
  <link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/reset.css').'?'.date('l jS \of F Y h:i:s A')?>">
  <link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/style.css').'?'.date('l jS \of F Y h:i:s A') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/che-med-assets/css/responsive.css').'?'.date('l jS \of F Y h:i:s A') ?>">
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB0j8WyLVBP1WRKhP5Cr946Xf55BjA3wbA"></script>
  
</head>
<body class="js">
	
	<!-- Preloader -->
	
	<div class="loaderMain">
		<div class="loaderPill-text"><img src="<?= base_url('assets/che-med-assets/images/Che_Logo.png') ?>" alt="CHEMED"></div>
		<div class="loaderPill">
			<div class="loaderPill-anim">
				<div class="loaderPill-anim-bounce">
					<div class="loaderPill-anim-flop">
						<div class="loaderPill-pill"></div>
					</div>
				</div>
			</div>
			<div class="loaderPill-floor">
				<div class="loaderPill-floor-shadow"></div>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	


  	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +251912603463</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
							<li><i class="ti-user"></i> <a href="<?= LANG_URL . '/myaccount' ?>">My account</a></li>
							<?php if (isset($_SESSION['logged_user'])) { ?>
					        <li><i class="ti-power-off"></i><a href="<?= LANG_URL . '/logout' ?>">Log out</a></li>
                            <?php } else { ?>
                            <li><i class="ti-power-off"></i><a href="<?= LANG_URL . '/login' ?>">Login</a></li>
                            <?php } ?>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo brand_logo">
							<a href="<?= base_url() ?>"><img class="brand_logo" src="<?= base_url('assets/che-med-assets/images/Che_Logo.png') ?>" alt="CHEMED"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a ><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<form method="GET" action="<?= LANG_URL. '/product_grid'?>" id="search_box">
                            <input type="hidden" name="search_in_title" value="<?= isset($_GET['category']) ? htmlspecialchars($_GET['category']) : '' ?>">
		                    </form>
							<div class="search-top">
								<div class="search-form">
								<div class = "ui-widget">
									<input id="search_in_title2" type="search" name="search_in_title" value="<?= isset($_GET['search_in_title']) ? $_GET['search_in_title'] : '' ?>" >
									<button value="search"  data-id="2" onclick="search_go(this);"><i class="ti-search"></i></button>
									</div>
                             </div>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
							<div class = "ui-widget">
									<input id="search_in_title1" type="search" name="search_in_title" value="<?= isset($_GET['search_in_title']) ? $_GET['search_in_title'] : '' ?>" >
									<button class="btnn" data-id="1" onclick="search_go(this);"><i class="ti-search" ></i></button>
							</div>
							</div>
						</div>
					</div>












					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="<?= LANG_URL . '/shopping-cart' ?>" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="<?= LANG_URL . '/myaccount' ?>" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?= is_numeric($cartItems) && (int)$cartItems == 0 ? 0 : $sumOfItems ?></span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
								<?php $load::getCartItems($cartItems) ?>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>




				</div>
			</div>
		</div>
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
							
		<!-- Header Inner -->	<?php
		function loop_tree($pages, $is_recursion = false)
		{
			?>
			<ul class="<?= $is_recursion === true ? 'sub-category' : 'main-category anyClass' ?>">
				<?php
				foreach ($pages as $page) {
					$children = false;
					if (isset($page['children']) && !empty($page['children'])) {
						$children = true;
					}
					?>
					<li><a href="javascript:void(0);" data-categorie-id="<?= $page['id'] ?>" onclick="category_go(this);">
							<?= $page['name'] ?>
						<?php if ($children === true) {
							?>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
						<?php } else { ?>
							
						<?php } ?>

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

		loop_tree($categories);
		?>
		<form method="GET" action="<?= LANG_URL. '/product_grid'?>" id="category-search">
        <input type="hidden" name="category" value="<?= isset($_GET['category']) ? htmlspecialchars($_GET['category']) : '' ?>">
		</form>
		   
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li <?= urldecode(uri_string('')) == '' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>">Home</a></li>
													<li <?= urldecode(uri_string('product_grid')) == 'product_grid' ? 'class="active"' : '' ?>><a href="<?= LANG_URL . '/product_grid' ?>">Product</a></li>												
													<li <?= urldecode(uri_string('uploadp')) == 'uploadp' ? 'class="active"' : '' ?> ><a href="<?= LANG_URL . '/uploadp' ?>"><?= lang('uploadp') ?><span class="new">New</span></a></li>
													<li <?= urldecode(uri_string('shopping-cart')) == 'shopping-cart' ? 'class="active"' : '' ?>><a href="<?= LANG_URL . '/shopping-cart' ?>">SHOPPING CART</a></li>									
													<li><a>Blog<span class="new">Comming soon!</span></a></li>
													<li <?= urldecode(uri_string('contacts')) == 'contacts' ? 'class="active"' : '' ?>><a href="<?= LANG_URL . '/contacts' ?>">Contact Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>

	<!--/ End Header -->