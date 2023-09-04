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
					<?php 
					
					$tree_hugger_phone_number        = get_field("tree_hugger_phone_number","option"); 
					$conv_number                     = preg_replace('/[^0-9.]/', '', $tree_hugger_phone_number);
					$tree_hugger_instagram_url       = get_field("tree_hugger_instagram_url","option");
					$tree_hugger_facebook_url        = get_field("tree_hugger_facebook_url","option");
					$tree_hugger_contact_request_url = get_field("tree_hugger_contact_request_url","option");

					if($tree_hugger_phone_number || $tree_hugger_instagram_url || $tree_hugger_facebook_url || $tree_hugger_contact_request_url){?>
						<div class="site-contact">
							<?php 
							if($tree_hugger_phone_number){?>
								<a href="tel:<?php echo $conv_number; ?>" class="site-call" title="Call on <?php echo $tree_hugger_phone_number; ?>"><?php echo $tree_hugger_phone_number; ?></a>
								<?php
							}?>
							<ul>
								<?php 
								if($tree_hugger_facebook_url){?>
									<li>
										<a class="contact-icon" href="<?php echo $tree_hugger_facebook_url; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
									</li>
									<?php
								}
								if($tree_hugger_instagram_url){?>
									<li>
										<a class="contact-icon" href="<?php echo $tree_hugger_instagram_url; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
									</li>
									<?php
								}?>
							</ul>
						</div>
						<?php  
						if($tree_hugger_contact_request_url){?>
							<div class="contact-header-btn">
								<a href="<?php echo $tree_hugger_contact_request_url['url']; ?>" title="<?php echo $tree_hugger_contact_request_url['title']; ?>" class="sec-btn"><?php echo $tree_hugger_contact_request_url['title']; ?></a>
							</div>
							<?php
						}
					}?>
				</div>
			</div>
		</header>
		<!-- Header End -->