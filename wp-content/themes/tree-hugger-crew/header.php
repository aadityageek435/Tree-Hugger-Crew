<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tree-hugger-crew
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/tree-hugger-crew/assets/fonts/Lora-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/tree-hugger-crew/assets/fonts/Lora-Medium.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/tree-hugger-crew/assets/fonts/Lora-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/tree-hugger-crew/assets/fonts/Lora-SemiBoldItalic.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/tree-hugger-crew/assets/fonts/Roboto-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/tree-hugger-crew/assets/fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/tree-hugger-crew/assets/fonts/Roboto-Italic.woff2" as="font" type="font/woff2" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'tree-hugger-crew'); ?></a>

		<!-- Header Start -->
		<header id="masthead" class="site-header">
			<div class="header-sidebar">
				<div class="main-header-sidebar-wp" data-simplebar>
					<div class="main-header-sidebar">
						<div class="site-branding">
							<?php the_custom_logo(); ?>
						</div>
						<div class="header-menu">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
									<span></span>
									<span></span>
									<span></span>
								</button>
								<div class="header-mobile-menu">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'header-menu',
											'menu_id'        => 'primary-menu',
										)
									); ?>
								</div>
							</nav>
						</div>
					</div>
					<div class="site-contact">
						<a href="tel:515520-0971" class="site-call" title="(515) 520-0971">(515) 520-0971</a>
						<ul>
							<li><a class="contact-icon" href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
							<li><a class="contact-icon" href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="contact-header-btn">
						<a href="javascript:void(0);" title="Request A Quote" class="sec-btn">Request A Quote</a>
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->