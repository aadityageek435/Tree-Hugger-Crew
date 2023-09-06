<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tree-hugger-crew
 */

?>

<footer id="colophon" class="site-footer">
	<div class="sec-wp">
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="footer-content">
							<img src="<?php echo home_url(); ?>/wp-content/themes/tree-hugger-crew/assets/images/good-shape.svg" alt="Footer Shape" width="70" height="76">
							<?php
							$tree_hugger_footer_title = get_field("tree_hugger_footer_title", "option");
							if ($tree_hugger_footer_title) { ?>
								<h2 class="h2-title"><?php echo $tree_hugger_footer_title; ?></h2>
							<?php
							}
							$tree_hugger_footer_sub_title = get_field("tree_hugger_footer_sub_title", "option");
							if ($tree_hugger_footer_sub_title) { ?>
								<h3 class="h3-title"><?php echo $tree_hugger_footer_sub_title; ?></h3>
							<?php
							} ?>
							<div class="row">
								<div class="col-lg-6">
									<?php
									$tree_hugger_phone_number = get_field("tree_hugger_phone_number", "option");
									$footer_conv_number       = preg_replace('/[^0-9.]/', '', $tree_hugger_phone_number);
									$tree_hugger_email        = get_field("tree_hugger_email", "option");
									if ($tree_hugger_phone_number || $tree_hugger_email) { ?>
										<ul class="contact-info">
											<?php
											if ($tree_hugger_phone_number && $footer_conv_number) { ?>
												<li class="phone">
													<a href="tel:<?php echo $footer_conv_number; ?>" title="Call on <?php echo $tree_hugger_phone_number; ?>">
														<span class="callus"><?php echo $tree_hugger_phone_number; ?></span>
													</a>
												</li>
											<?php
											}
											if ($tree_hugger_email) { ?>
												<li>
													<a href="mailto:<?php echo $tree_hugger_email; ?>" title="Mail at <?php echo $tree_hugger_email; ?>"><?php echo $tree_hugger_email; ?></a>
												</li>
											<?php
											} ?>
										</ul>
									<?php
									}
									$shop_treehugger_wood_slabs_url = get_field("shop_treehugger_wood_slabs_url", "option");
									if ($shop_treehugger_wood_slabs_url) { ?>
										<ul class="footer-page">
											<li>
												<a href="<?php echo $shop_treehugger_wood_slabs_url['url']; ?>" title="<?php echo $shop_treehugger_wood_slabs_url['title']; ?>"><?php echo $shop_treehugger_wood_slabs_url['title']; ?></a>
											</li>
										</ul>
									<?php
									} ?>
								</div>
								<div class="col-lg-6">
									<div class="footer-add for-des">
										<?php
										$tree_hugger_hours_title = get_field("tree_hugger_hours_title", "option");
										$tree_huggers_hours_content = get_field("tree_huggers_hours_content", "option");
										if ($tree_hugger_hours_title || $tree_huggers_hours_content) { ?>
											<div class="footer-hour">
												<?php
												if ($tree_hugger_hours_title) { ?>
													<h5><?php echo $tree_hugger_hours_title; ?></h5>
												<?php
												}
												// Hours Content
												echo $tree_huggers_hours_content;
												?>
											</div>
										<?php
										}
										$tree_hugger_location_text = get_field("tree_hugger_location_text", "option");
										$tree_hugger_location_url  = get_field("tree_hugger_location_url", "option");
										if ($tree_hugger_location_text || $tree_hugger_location_url) { ?>
											<ul class="footer-loaction">
												<?php
												if ($tree_hugger_location_text) { ?>
													<li><?php echo $tree_hugger_location_text; ?></li>
												<?php
												}
												if ($tree_hugger_location_url) { ?>
													<li>
														<a href="<?php echo $tree_hugger_location_url['url']; ?>" target="<?php echo $tree_hugger_location_url['target']; ?>" title="<?php echo $tree_hugger_location_url['title']; ?>"><?php echo $tree_hugger_location_url['title']; ?></a>
													</li>
												<?php
												} ?>
											</ul>
										<?php
										} ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer-form">
							<?php echo
							do_shortcode("[contact-form-7 id='53bcbd7' title='Footer Form']");
							?>
							<div class="footer-add for-mob">
								<?php
								$tree_hugger_location_text = get_field("tree_hugger_location_text", "option");
								$tree_hugger_location_url  = get_field("tree_hugger_location_url", "option");
								if ($tree_hugger_location_text || $tree_hugger_location_url) { ?>
									<ul class="footer-loaction">
										<?php
										if ($tree_hugger_location_text) { ?>
											<li><?php echo $tree_hugger_location_text; ?></li>
										<?php
										}
										if ($tree_hugger_location_url) { ?>
											<li>
												<a href="<?php echo $tree_hugger_location_url['url']; ?>" target="<?php echo $tree_hugger_location_url['target']; ?>" title="<?php echo $tree_hugger_location_url['title']; ?>"><?php echo $tree_hugger_location_url['title']; ?></a>
											</li>
										<?php
										} ?>
									</ul>
								<?php
								}
								$tree_hugger_hours_title = get_field("tree_hugger_hours_title", "option");
								$tree_huggers_hours_content = get_field("tree_huggers_hours_content", "option");
								if ($tree_hugger_hours_title || $tree_huggers_hours_content) { ?>
									<div class="footer-hour">
										<?php
										if ($tree_hugger_hours_title) { ?>
											<h5><?php echo $tree_hugger_hours_title; ?></h5>
										<?php
										}
										// Hours Content
										echo $tree_huggers_hours_content;
										?>
									</div>
								<?php
								} 	?>
							</div>
							<div class="site-contact">
								<ul>
									<li>
										<a class="contact-icon" href="<?php echo $tree_hugger_facebook_url; ?>" title="Follow on Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
									</li>

									<li>
										<a class="contact-icon" href="<?php echo $tree_hugger_instagram_url; ?>" title="Follow on Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
<div class="sec-wp">
	<div class="footer-bottom-box">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<div class="footer-bottom-text">
						<div class="copy-right">
							<p>© <?php echo date('Y'); ?> TreeHugger Complete Lawn Care</p>
						</div>
						<div class="footer-bottom-link">
							<ul>
								<li><a href="<?php echo home_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
								<li><a href="<?php echo home_url(); ?>/terms-of-service" title="Terms of Service">Terms of Service</a></li>
								<li><a href="<?php echo home_url(); ?>/cookies-policy" title="Cookies">Cookies</a></li>
							</ul>
						</div>
						<div class="footer-other-link">
							<p>Website Design by <a href="https://gro.consulting/social/" target="_blank" title="Gró Social" class="Gró Social-link">Gró Social</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div><!-- #page -->

<!-- Modal Start -->
<div class="modal common-popup" id="arborist_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="popup-title">
				<h2 class="h2-title">Arborist Details :</h2>
				<button type="button" class="close close-popup" data-bs-dismiss="modal"></button>
			</div>
			<div class="common-popup-overflow">
				<div class="common-popup-text" data-simplebar>
					<div class="arborist-info">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal End -->

<?php wp_footer(); ?>

</body>

</html>