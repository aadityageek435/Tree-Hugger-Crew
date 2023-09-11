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

$tree_hugger_site_mobile_logo    = get_field("tree_hugger_site_mobile_logo","option");
$tree_hugger_phone_number        = get_field("tree_hugger_phone_number", "option");
$conv_number                     = preg_replace('/[^0-9.]/', '', $tree_hugger_phone_number);
$tree_hugger_instagram_url       = get_field("tree_hugger_instagram_url", "option");
$tree_hugger_facebook_url        = get_field("tree_hugger_facebook_url", "option");
$tree_hugger_contact_free_quote_url = get_field("tree_hugger_contact_free_quote_url", "option");
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
		<!-- Header Start -->
		<header id="masthead" class="site-header">
			<div class="header-sidebar">
				<div class="main-header-sidebar-wp" data-simplebar>
					<div class="main-header-sidebar">
						<div class="site-branding for-des">
							<?php the_custom_logo(); ?>
						</div>
						<?php
						if($tree_hugger_site_mobile_logo){?>
							<div class="mob-logo for-mob">
								<a href="<?php echo home_url(); ?>">
								<img src="<?php echo $tree_hugger_site_mobile_logo['url']; ?>" alt="<?php echo $tree_hugger_site_mobile_logo['alt']; ?>" width="<?php echo $tree_hugger_site_mobile_logo['width']; ?>" height="<?php echo $tree_hugger_site_mobile_logo['height']; ?>">
								</a>
							</div>
							<?php
						}
						if ($tree_hugger_phone_number) { ?>
							<div class="mob-call for-mob">
								<a href="tel:<?php echo $conv_number; ?>" class="site-call callus" title="Call on <?php echo $tree_hugger_phone_number; ?>">
									<img src="<?php echo home_url(); ?>/wp-content/uploads/2023/09/mob-call.svg" alt="Tree Hugger Call Logo" width="30" height="30">
								</a>
							</div>
							<?php
						} ?>
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
									<?php
									if ($tree_hugger_phone_number || $tree_hugger_instagram_url || $tree_hugger_facebook_url || $tree_hugger_contact_free_quote_url) { ?>
										<div class="site-contact">
											<?php
											if ($tree_hugger_phone_number) { ?>
												<a href="tel:<?php echo $conv_number; ?>" class="site-call" title="Call on <?php echo $tree_hugger_phone_number; ?>"><?php echo $tree_hugger_phone_number; ?></a>
												<?php
											} ?>
											<ul>
												<?php
												if ($tree_hugger_facebook_url) { ?>
													<li>
														<a class="contact-icon" href="<?php echo $tree_hugger_facebook_url; ?>" title="Follow on Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
													</li>
												<?php
												}
												if ($tree_hugger_instagram_url) { ?>
													<li>
														<a class="contact-icon" href="<?php echo $tree_hugger_instagram_url; ?>" title="Follow on Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
													</li>
												<?php
												} ?>
											</ul>
										</div>
										<?php
										if ($tree_hugger_contact_free_quote_url) { ?>
											<div class="contact-header-btn">
												<a href="<?php echo $tree_hugger_contact_free_quote_url['url']; ?>" title="Request a Quote" class="sec-btn">Request a Quote</a>
											</div>
											<?php
										}
									} ?>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->