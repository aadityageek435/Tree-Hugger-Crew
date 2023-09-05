<?php
$home_banner_image             = (get_field("home_banner_image")) ? get_field("home_banner_image") : home_url() . "/wp-content/uploads/2023/09/banner-bg.jpg";
$home_banner_title             = get_field("home_banner_title");
$home_banner_sub_title         = get_field("home_banner_sub_title");
$home_banner_free_quote_url    = get_field("home_banner_free_quote_url");
$home_tree_hugger_phone_number = get_field("tree_hugger_phone_number", "option");
$home_conv_number              = preg_replace('/[^0-9.]/', '', $home_tree_hugger_phone_number); ?>
<!-- banner-start -->
<section class="main-banner back-img" style="background-image: url(<?php echo $home_banner_image; ?>);">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <?php
                if ($home_banner_title || $home_banner_sub_title || $home_banner_free_quote_url || $home_tree_hugger_phone_number) { ?>
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <?php
                            if ($home_banner_title) { ?>
                                <h1 class="h1-title"><?php echo $home_banner_title; ?></h1>
                            <?php
                            }
                            if ($home_banner_sub_title) { ?>
                                <h3 class="h3-title"><?php echo $home_banner_sub_title; ?></h3>
                            <?php
                            } ?>
                            <div class="banner-btn">
                                <?php
                                if ($home_banner_free_quote_url) { ?>
                                    <a href="<?php echo $home_banner_free_quote_url['url']; ?>" title="<?php echo $home_banner_free_quote_url['title']; ?>" class="sec-btn"><?php echo $home_banner_free_quote_url['title']; ?></a>
                                <?php
                                }
                                if ($home_tree_hugger_phone_number && $home_conv_number) { ?>
                                    <a href="tel:<?php echo $home_conv_number; ?>" title="Call <?php echo $home_tree_hugger_phone_number; ?>" class="sec-btn  white-outline-btn">Call &nbsp;<span class="for-des callus"><?php echo $home_tree_hugger_phone_number; ?></span><span class="for-mob">Now!</span></a>
                                <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- banner-end -->

<!-- about-start -->
<section class="sec-about-us">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <?php
                $home_about_image            = get_field("home_about_image");
                $home_about_accredited_image = get_field("home_about_accredited_image");
                if ($home_about_image) { ?>
                    <div class="col-lg-6">
                        <div class="about-img-wp">
                            <?php
                            if ($home_about_accredited_image) { ?>
                                <div class="about-brand">
                                    <img src="<?php echo $home_about_accredited_image['url']; ?>" alt="About Accredied Image" width="<?php echo $home_about_accredited_image['width']; ?>" height="<?php echo $home_about_accredited_image['height']; ?>">
                                </div>
                            <?php
                            } ?>
                            <div class="about-us-img">
                                <div class="back-img img-box" style="background-image: url('<?php echo $home_about_image; ?>');"></div>
                            </div>
                        </div>
                    </div>
                <?php
                }

                $home_about_title     = get_field("home_about_title");
                $home_about_sub_title = get_field("home_about_sub_title");
                $home_about_page_url  = get_field("home_about_page_url");
                $home_about_content   = get_field("home_about_content");
                if ($home_about_title || $home_about_sub_title || $home_about_page_url || $home_about_content) { ?>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-content">
                            <?php
                            if ($home_about_title) { ?>
                                <h2 class="h2-title"><?php echo $home_about_title; ?></h2>
                            <?php
                            }
                            if ($home_about_sub_title) { ?>
                                <h3 class="h3-title"><?php echo $home_about_sub_title; ?></h3>
                            <?php
                            }
                            //About main content
                            echo $home_about_content;

                            if ($home_about_page_url) { ?>
                                <a href="<?php echo $home_about_page_url; ?>" title="About Us, Learn More">Learn More</a>
                            <?php
                            } ?>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
            <?php
            if (have_rows("home_about_points")) { ?>
                <div class="row">
                    <?php
                    while (have_rows("home_about_points")) {
                        the_row();

                        $points_title   = get_sub_field("points_title");
                        $points_content = get_sub_field("points_content");

                        if ($points_title || $points_content) { ?>
                            <div class="col-lg-4">
                                <div class="about-box">
                                    <?php
                                    if ($points_title) { ?>
                                        <h3 class="h3-title"><?php echo $points_title; ?></h3>
                                    <?php
                                    }
                                    //About points content
                                    echo $points_content;
                                    ?>
                                </div>
                            </div>
                    <?php
                        }
                    } ?>
                </div>
            <?php
            } ?>
        </div>
    </div>
</section>
<!-- about-end-->

<!-- service-start -->
<section class="main-service">
    <div class="sec-wp">
        <div class="container">
            <?php
            $our_services_title     = get_field("our_services_title");
            $our_services_sub_title = get_field("our_services_sub_title");
            if ($our_services_title || $our_services_sub_title) { ?>
                <div class="service-title">
                    <?php
                    if ($our_services_title) { ?>
                        <h2 class="h2-title">Our Services</h2>
                    <?php
                    }
                    if ($our_services_title) { ?>
                        <h3 class="h3-title"><?php echo $our_services_sub_title; ?></h3>
                    <?php
                    } ?>
                </div>
            <?php
            }
            //main services repeater
            if (have_rows("our_services")) { ?>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-tab">
                            <ul>
                                <?php
                                while (have_rows("our_services")) {
                                    the_row();
                                    $home_our_services_title = get_sub_field("home_our_services_title");
                                    if ($home_our_services_title) { ?>
                                        <li data-index="<?php echo get_row_index(); ?>"><?php echo $home_our_services_title; ?></li>
                                <?php
                                    }
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8" id="service_ajax_response">
                        <?php
                        while (have_rows("our_services")) {
                            the_row();

                            $home_our_services_title    = get_sub_field("home_our_services_title");
                            $home_our_services_page_url = get_sub_field("home_our_services_page_url");
                            $home_our_services_image    = get_sub_field("home_our_services_image");
                            $home_our_services_icon     = get_sub_field("home_our_services_icon");
                            $home_our_services_content  = get_sub_field("home_our_services_content");

                            if (get_row_index() == 1) {
                                if ($home_our_services_icon || $home_our_services_image || $home_our_services_title || $home_our_services_content || $home_our_services_page_url) { ?>
                                    <div class="service-content">
                                        <?php
                                        if ($home_our_services_icon) { ?>
                                            <div class="about-brand">
                                                <img src="<?php echo $home_our_services_icon['url']; ?>" alt="<?php echo $home_our_services_title . " Image";  ?>" width="230" height="230">
                                            </div>
                                        <?php
                                        }
                                        if ($home_our_services_image) { ?>
                                            <div class="service-img">
                                                <div class="back-img img-box img-left-box" style="background-image: url('<?php echo $home_our_services_image; ?>');"></div>
                                            </div>
                                        <?php
                                        }
                                        if ($home_our_services_title) { ?>
                                            <h3 class="h3-title"><?php echo $home_our_services_title; ?></h3>
                                        <?php
                                        }
                                        //our service main content
                                        echo $home_our_services_content;

                                        if ($home_our_services_page_url) { ?>
                                            <a href="<?php echo $home_our_services_page_url; ?>" title="<?php echo $home_our_services_title . ", Learn More"; ?>">Learn More</a>
                                        <?php
                                        } ?>
                                    </div>
                        <?php
                                }
                            }
                        } ?>
                    </div>
                    <div class="service-loader"><i class="fas fa-spinner"></i></div>
                </div>
            <?php
            } ?>
        </div>
    </div>
</section>
<!-- service-end -->

<!-- store-start -->
<section class="store">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <?php
                $home_tree_award_image  = get_field("home_tree_award_image");
                $home_tree_hugger_image = get_field("home_tree_hugger_image");
                if ($home_tree_award_image || $home_tree_hugger_image) { ?>
                    <div class="col-lg-6">
                        <div class="about-img-wp">
                            <?php
                            if ($home_tree_award_image) { ?>
                                <div class="about-brand">
                                    <img src="<?php echo $home_tree_award_image['url']; ?>" alt="Tree Wood Store Image" width="230" height="230">
                                </div>
                            <?php
                            }
                            if ($home_tree_hugger_image) { ?>
                                <div class="store-img">
                                    <div class="back-img img-box" style="background-image: url('<?php echo $home_tree_hugger_image; ?>');"></div>
                                </div>
                            <?php
                            } ?>
                        </div>
                    </div>
                <?php
                }
                $home_tree_hugger_title         = get_field("home_tree_hugger_title");
                $home_tree_hugger_content       = get_field("home_tree_hugger_content");
                $home_tree_hugger_page_url      = get_field("home_tree_hugger_page_url");
                $home_tree_hugger_inventory_url = get_field("home_tree_hugger_inventory_url");
                if ($home_tree_hugger_title || $home_tree_hugger_page_url || $home_tree_hugger_inventory_url || $home_tree_hugger_content) { ?>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-content store-content">
                            <?php
                            if ($home_tree_hugger_title) { ?>
                                <h2 class="h2-title"><?php echo $home_tree_hugger_title; ?></h2>
                            <?php
                            }
                            //tree hugger II content
                            echo $home_tree_hugger_content;

                            if ($home_tree_hugger_page_url) { ?>
                                <a href="<?php echo $home_tree_hugger_page_url; ?>" title="Tree Hugger II, Learn More">Learn More</a>
                            <?php
                            }
                            if ($home_tree_hugger_inventory_url) { ?>
                                <a href="<?php echo $home_tree_hugger_inventory_url; ?>" title="See Our Inventory" target="_blank">See Our Inventory</a>
                            <?php
                            } ?>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- store-end -->

<?php
if (have_rows("health_care_details")) { ?>
    <!-- health-start -->
    <section class="health">
        <div class="sec-wp">
            <div class="container">
                <?php
                while (have_rows("health_care_details")) {
                    the_row();

                    $home_health_care_title   = get_sub_field("home_health_care_title");
                    $home_health_care_image   = get_sub_field("home_health_care_image");
                    $home_health_care_content = get_sub_field("home_health_care_content");
                    $health_care_points       = get_sub_field("health_care_points");

                    if (get_row_index() % 2 == 0) { ?>
                        <div class="health-wp">
                            <div class="row">
                                <?php
                                if ($home_health_care_image) { ?>
                                    <div class="col-lg-6">
                                        <div class="health-img even">
                                            <div class="back-img img-box" style="background-image: url('<?php echo $home_health_care_image; ?>');"></div>
                                        </div>
                                    </div>
                                <?php
                                }
                                if ($home_health_care_title || $home_health_care_content) { ?>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="about-us-content store-content health-content even">
                                            <?php
                                            if ($home_health_care_title) { ?>
                                                <h2 class="h2-title"><?php echo $home_health_care_title; ?></h2>
                                            <?php
                                            }
                                            // health care content
                                            echo $home_health_care_content;
                                            ?>
                                        </div>
                                    </div>
                                <?php
                                } ?>
                            </div>
                        </div>
                    <?php
                    } else { ?>
                        <div class="health-wp">
                            <div class="row">
                                <?php
                                if ($home_health_care_title || $home_health_care_content || $health_care_points) { ?>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="about-us-content store-content health-content">
                                            <?php
                                            if ($home_health_care_title) { ?>
                                                <h2 class="h2-title"><?php echo $home_health_care_title; ?></h2>
                                            <?php
                                            }
                                            // health care content
                                            echo $home_health_care_content;

                                            if ($health_care_points) { ?>
                                                <ul class="health-list">
                                                    <?php
                                                    foreach ($health_care_points as $points) {
                                                        $health_points_list_title = $points['health_care_points_list_title'];
                                                        if ($health_points_list_title) { ?>
                                                            <li><?php echo $health_points_list_title; ?></li>
                                                    <?php
                                                        }
                                                    } ?>
                                                </ul>
                                            <?php
                                            } ?>
                                        </div>
                                    </div>
                                <?php
                                }
                                if ($home_health_care_image) { ?>
                                    <div class="col-lg-6">
                                        <div class="health-img">
                                            <div class="back-img img-box img-left-box" style="background-image: url('<?php echo $home_health_care_image; ?>');"></div>
                                        </div>
                                    </div>
                                <?php
                                } ?>
                            </div>
                        </div>
                <?php
                    }
                } ?>
            </div>
        </div>
    </section>
    <!-- health-end-->
<?php
} ?>

<!-- testimonial-start-->
<section class="testimonial">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <?php
                $home_testimonials_title     = get_field("home_testimonials_title");
                $home_testimonials_sub_title = get_field("home_testimonials_sub_title");
                if ($home_testimonials_title || $home_testimonials_sub_title) { ?>
                    <div class="col-lg-4">
                        <div class="testimonial-title">
                            <?php
                            if ($home_testimonials_title) { ?>
                                <h2 class="h2-title"><?php echo $home_testimonials_title; ?></h2>
                            <?php
                            }
                            if ($home_testimonials_sub_title) { ?>
                                <h3 class="h3-title"><?php echo $home_testimonials_sub_title; ?></h3>
                            <?php
                            } ?>
                        </div>
                    </div>
                <?php
                }
                $testimonials_query = new WP_Query(array("post_type" => "testimonials", "post_status" => "publish", "posts_per_page" => -1));

                if ($testimonials_query->have_posts()) { ?>
                    <div class="col-lg-8">
                        <div class="testimonial-box">
                            <div class="about-brand">
                                <img src="<?php echo home_url(); ?>/wp-content/themes/tree-hugger-crew/assets/images/testimonial-brand.svg" alt="testi-brand" width="110" height="120">
                            </div>
                            <div class="testimonial-slider">
                                <?php
                                while ($testimonials_query->have_posts()) {
                                    $testimonials_query->the_post();

                                    $testimonial_title = get_the_title();
                                    $testimonial_content = get_the_content();
                                    $testimonial_project = get_field("testimonial_project_name");

                                    if ($testimonial_title || $testimonial_content || $testimonial_project) { ?>
                                        <div class="testimonial-content">
                                            <?php
                                            if ($testimonial_content) { ?>
                                                <p><?php echo $testimonial_content; ?></p>
                                            <?php
                                            }
                                            if ($testimonial_title) { ?>
                                                <h3><?php echo $testimonial_title; ?></h3>
                                            <?php
                                            }
                                            if ($testimonial_project) { ?>
                                                <span><?php echo $testimonial_project; ?></span>
                                            <?php
                                            } ?>
                                        </div>
                                <?php
                                    }
                                    wp_reset_postdata();
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-end-->
<?php
$home_gallery_images = get_field("home_gallery_images");
if ($home_gallery_images) { ?>
    <!-- gallery-start -->
    <section class="gallery">
        <div class="sec-wp">
            <div class="container">
                <div class="gallery-img-slider">
                    <?php
                    $gallery_index = 1;
                    foreach ($home_gallery_images as $image) { ?>
                        <div class="gallery-img">
                            <a href="<?php echo $image; ?>" data-fancybox="gallery-img" title="<?php echo "Gallery Image " . $gallery_index; ?>">
                                <div class="back-img" style="background-image: url('<?php echo $image; ?>');"></div>
                            </a>
                        </div>
                    <?php
                        $gallery_index++;
                    } ?>
                </div>
            </div>
    </section>
    <!-- gallery-end -->
<?php
} ?>
<!-- career-start -->
<section class="career">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <?php
                $home_careers_image = get_field("home_careers_image");
                if ($home_careers_image) { ?>
                    <div class="col-lg-6">
                        <div class="about-us-img">
                            <div class="back-img img-box" style="background-image: url('<?php echo $home_careers_image; ?>');"></div>
                        </div>
                    </div>
                <?php
                }
                $home_careers_title     = get_field("home_careers_title");
                $home_careers_sub_title = get_field("home_careers_sub_title");
                $home_careers_page_url  = get_field("home_careers_page_url");
                $home_careers_image     = get_field("home_careers_image");
                $home_careers_content   = get_field("home_careers_content");

                if ($home_careers_title || $home_careers_sub_title || $home_careers_page_url || $home_careers_image || $home_careers_content) { ?>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-content">
                            <?php
                            if ($home_careers_title) { ?>
                                <h2 class=" h2-title"><?php echo $home_careers_title; ?></h2>
                            <?php
                            }
                            if ($home_careers_sub_title) { ?>
                                <h3 class="h3-title"><?php echo $home_careers_sub_title; ?></h3>
                            <?php
                            }
                            if ($home_careers_content) {
                                //main careers content
                                echo $home_careers_content;
                            }
                            if ($home_careers_page_url) { ?>
                                <a href="<?php echo $home_careers_page_url; ?>" title="Careers, Learn More">Learn More</a>
                            <?php
                            } ?>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>
</section>
<!--career-end-->
<?php
if (have_rows("awards_certificatons", "option")) { ?>
    <!-- awards-start -->
    <section class="awards">
        <div class="sec-wp">
            <div class="container">
                <div class="awards-img">
                    <?php
                    $awards_index = 1;
                    while (have_rows("awards_certificatons", "option")) {
                        the_row();

                        $award_certification_image = get_sub_field("award_certification_image");
                        $award_certification_redirect_url = (get_sub_field("award_certification_redirect_url")) ? get_sub_field("award_certification_redirect_url") : "javascript:void(0);";
                        if ($award_certification_image) { ?>
                            <a href="<?php echo $award_certification_redirect_url; ?>">
                                <img src="<?php echo $award_certification_image['url']; ?>" alt="Awards Image <?php echo $awards_index; ?>" width="<?php echo $award_certification_image['width']; ?>" height="<?php echo $award_certification_image['height']; ?>">
                            </a>
                    <?php
                        }
                        $awards_index++;
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- awards-end -->
<?php
} ?>
<!-- ig-start -->
<section class="instagram">
    <div class="sec-wp">
        <div class="container">
            <div class="ig-title">
                <h2 class="h2-title">Instagram</h2>
                <ul>
                    <li>Follow Us</li>
                    <li><a class="mail" href="mailto:@treehuggercrew">@treehuggercrew</a></li>
                </ul>
            </div>
            <div class="row">
                <?php echo
                do_shortcode("[instagram-feed feed=1]");
                ?>
            </div>
        </div>
    </div>
</section>
<!-- ig-end -->