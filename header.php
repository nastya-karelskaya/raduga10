<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raduga10
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<title>Furnilife - Furniture eCommerce Bootstrap4 Template</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!--=============================================
	=            header container         =
	=============================================-->
	
	<div class="header-container header-sticky">

		<!--=============================================
		=            header top         =
		=============================================-->
		
		<div class="header-top pt-15 pb-15">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-9">
						<div class="header-top-text header-top-text__left header-top-text__phone text-center text-lg-left mb-0 mb-md-15 mb-sm-15">
								<p>
									<!-- <i class="icon ion-md-alarm"></i>  -->
									<i class="fa fa-phone"></i> 
									<span class="support-no">
									<?php 
										$shop_phone = get_option( 'raduga10_phone_field');

									?>
										<a href="tel:<?php echo $shop_phone;?>"><?php echo $shop_phone;?></a>
									</span>
								</p>
						</div>

						<div class="header-top-text header-top-text__left header-top-text__shedule text-center text-lg-left mb-0 mb-md-15 mb-sm-15">
							<p>
								<i class="icon ion-md-alarm"></i> 
								<!-- <i class="fa fa-phone"></i>  -->
								<?php 
										$shop_shedule = get_option( 'raduga10_shedule_field');
									?>
								<span class="support-no">
								<?php echo $shop_shedule;?>
								</span>
							</p>
						</div>

						<div class="header-top-text header-top-text__left header-top-text__address text-center text-lg-left mb-0 mb-md-15 mb-sm-15">
							<p>
								<!-- <i class="icon ion-md-alarm"></i>  -->
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<?php 
										$shop_address = get_option( 'raduga10_address_field');
									?>
								
								<span class="support-no">
									<a href="/contacts"><?php echo $shop_address;?></a>
								</span>
							</p>
						</div>
					</div>

					<div class="col-12 col-lg-3">
						<div class="header-top-dropdown d-flex justify-content-center justify-content-lg-end header-top-text__account-socials">
							<div class="header-top-text header-top-text__left header-top-text__account  text-center text-lg-right mb-0 mb-md-15 mb-sm-15">
								<div class="single-dropdown">
									<a href="/my-account/" id="changeAccount">
										<span id="accountMenuName">
											Мой аккаунт | Войти
											<!-- <i class="fa fa-angle-down"></i> -->
										</span>
									</a>
									<!-- <div class="language-currency-list hidden" id="accountList">
										<ul>
											<li><a href="cart.html">Cart</a></li>
											<li><a href="checkout.html">Checkout</a></li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="login-register.html">Login</a></li>
										</ul>
									</div> -->
								</div>
							</div>
							<div class="header-top-text text-center header-top-text__socials text-lg-right mb-0 mb-md-15 mb-sm-15">
								<p class="header-socials">
								<?php 
											$shop_whatsapp = get_option( 'raduga10_whatsapp_field');
											$shop_vk = get_option( 'raduga10_vk_field');
										?>
									<!-- <i class="icon ion-md-alarm"></i>  -->
									<a href="<?php echo $shop_whatsapp;?>" class="header-socials__wp" target="_blank">
										<i class="fa fa-whatsapp"></i>
									</a>
									<a href="<?php echo $shop_vk;?>" class="header-socials__vk" target="_blank">
										<i class="fa fa-vk"></i> 
									</a>
									
									
								</p>
							</div>
						</div>
					</div>

		
			
				</div>
			</div>
		</div>
		
		<!--=====  End of header top  ======-->
	
		<!--=============================================
		=            navigation menu top            =
		=============================================-->
		
	
		<div class="navigation-menu-top pt-35 pb-35 pt-md-15 pb-md-15 pt-sm-15 pb-sm-15">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-6 col-lg-2 col-md-6 col-sm-6 order-1 order-lg-1">
						<!--=======  logo  =======-->
						
						<div class="logo">
							<!-- <a href="index.html">
								<img src="assets/images/logo.png" class="img-fluid" alt="">
							</a> -->
							<?php
								the_custom_logo();
							
				?>
						</div>
						<!--=======  End of logo  =======-->
					</div>

					<?php 
						//Header options fields
						$raduga10_header_info_first = get_option('raduga10_header_info_first');
						$raduga10_header_info_second = get_option('raduga10_header_info_second');
						$raduga10_header_info_third = get_option('raduga10_header_info_third');

						$raduga10_header_icon_first = get_option('raduga10_header_icon_first');
						$raduga10_header_icon_second = get_option('raduga10_header_icon_second');
						$raduga10_header_icon_third = get_option('raduga10_header_icon_third');					
					?>

					<div class="col-12 col-lg-8 col-md-12 col-sm-12 order-3 order-lg-2">
						<!--=======  header feature container  =======-->
						
						<div class="header-feature-container mt-md-15 mt-sm-15">
							<!--=======  single feature  =======-->
							
							<div class="single-feature d-flex">
								<div class="image">
								<?php echo $raduga10_header_icon_first; ?>
								</div>
								<div class="content">
									<h5><?php echo $raduga10_header_info_first; ?></h5>
									<p></p>
								</div>
							</div>
							
							<!--=======  End of single feature  =======-->	
							<!--=======  single feature  =======-->
							
							<div class="single-feature d-flex">
								<div class="image">
								<?php echo $raduga10_header_icon_second; ?>
								</div>
								<div class="content">
									<h5><?php echo $raduga10_header_info_second; ?></h5>
									<!-- <p>Back guarantee under 7 days</p> -->
								</div>
							</div>
							
							<!--=======  End of single feature  =======-->	
							<!--=======  single feature  =======-->
							
							<div class="single-feature d-flex mb-sm-0">
								<div class="image">
								<?php echo $raduga10_header_icon_third; ?>
								</div>
								<div class="content">
									<h5><?php echo $raduga10_header_info_third; ?></h5>
									<!-- <p>On every order over $120.00</p> -->
								</div>
							</div>
							
							<!--=======  End of single feature  =======-->	
	
							
						</div>
						
						<!--=======  End of header feature container  =======-->
	
						
					</div>
					<div class=" col-6 col-lg-2 col-md-6 col-sm-6 order-2 order-lg-3">
						<!--=======  cart icon  =======-->

						<!-- <div class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></div> -->
						
						<div class="minicart-section">
							
						<?php	
								if ( function_exists( 'raduga10_woocommerce_header_cart' ) ) {	
									raduga10_woocommerce_header_cart();	
								}	
							?>	
						</div>

					
						
						<!--=======  End of cart icon  =======-->
					</div>
				</div>
			</div>
		</div>
		
		<!--=======  End of navigation menu top  =======-->
	
		<!--=============================================
		=            navigation menu         =
		=============================================-->
		
		<div class="navigation-menu">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-12 col-lg-3 col-md-12 col-sm-12">
						<!--=======  category menu  =======-->
						
						<div class="hero-side-category">
							<!-- Category Toggle Wrap -->
							<div class="category-toggle-wrap">
								<!-- Category Toggle -->
								<button class="category-toggle"> <i class="fa fa-bars"></i> <?php esc_html_e( 'Каталог', 'raduga10' ); ?>  </button>
							</div>
	
							<!-- Category Menu -->
							<nav class="category-menu">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-categories',
										'menu'        => '',
										'container' => false,
										'walker'          => '',
// 										'walker' => new Raduga_Walker_Nav_Menu(),
										


									)
								);
								?>
								<!-- <ul>
									<li><a href="shop-left-sidebar.html">1</a></li>
									<li class="menu-item-has-children"><a href="shop-left-sidebar.html">1</a> -->
										<!-- category submenu -->
										<!-- <ul class="category-mega-menu">
											<li><a href="shop-left-sidebar.html">1.1</a></li>
											<li><a href="shop-left-sidebar.html">1.2</a></li>
											<li><a href="shop-left-sidebar.html">1.3</a></li>
										</ul> -->
									<!-- </li>
									<li class="menu-item-has-children"><a href="shop-left-sidebar.html">2</a>
									</li>
									<li><a href="#" id="more-btn">... Посмотреть все</a></li>
								</ul> -->
							</nav>
						</div>
						
						<!--=======  End of category menu =======-->

						<!--=======  sticky logo  =======-->
						
						<div class="sticky-logo">
							<!-- <a href="index.html">
								<img src="assets/images/logo.png" class="img-fluid" alt="">
							</a> -->
							<?php
								the_custom_logo();
							
				?>
						</div>
						
						<!--=======  End of sticky logo  =======-->

						<!--=======  search icon for tablet  =======-->
                                
						<div class="search-icon-menutop-tablet text-right d-inline-block d-lg-none">
							<a href="#" id="search-overlay-active-button" class="mobile-search">
								<i class="icon ion-md-search"></i>
							</a>
							<?php get_search_form(); ?>
						</div>
						
						<!--=======  End of search icon for tablet  =======-->
					</div>
					<div class="col-12 col-lg-6">
						<!-- navigation section -->
						<div class="main-menu">
							<nav>
							
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-main',
										'menu'        => '',
										'container' => false,
										'walker'          => '',
// 										'walker' => new Raduga_Walker_Nav_Menu(),
									)
								);
								?>
							</nav>
						</div>
						<!-- end of navigation section -->
					</div>
					<div class="col-12 col-lg-3">
						<!--=======  navigation search bar  =======-->
						
						<div class="navigation-search d-none d-lg-block">
						<?php get_search_form(); ?>
						</div>
						
						<!--=======  End of navigation search bar  =======-->
					</div>
					<div class="col-12 d-block d-lg-none">
						<!-- Mobile Menu -->
						<div class="mobile-menu">
						<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-main',
										'menu'        => '',
										'container'       => 'nav', 
										'container_class' => 'mean-nav', 
										'walker'          => '',
// 										'walker' => new Raduga_Walker_Nav_Menu(),
										//'container_id'    => '',
										//'menu_class'      => 'menu', 
										//'menu_id'         => '',
									)
								);
								?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--=====  End of navigation menu  ======-->
			
	</div>
	<!--=====  End of header container  ======-->



