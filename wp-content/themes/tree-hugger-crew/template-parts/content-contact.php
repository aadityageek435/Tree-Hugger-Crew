<!-- about-start -->
<section class="about-sec form-sec">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="about-us-content wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <h1 class="h4-title for-des"><?php the_title(); ?></h1>
                        <?php
                        $tree_hugger_footer_title = get_field("tree_hugger_footer_title","option");
                        if($tree_hugger_footer_title){?>
                            <h3 class="h3-title"><?php echo $tree_hugger_footer_title; ?></h3>
                            <?php
                        }
                        $tree_hugger_footer_sub_title = get_field("tree_hugger_footer_sub_title","option");
                        if($tree_hugger_footer_sub_title){?>
                            <p><?php echo $tree_hugger_footer_sub_title; ?></p>
                            <?php
                        }?>
                        <div class="contact-add">
                            <?php
                            $tree_hugger_phone_number = get_field("tree_hugger_phone_number","option");
                            $footer_conv_number       = preg_replace('/[^0-9.]/', '', $tree_hugger_phone_number);
                            $tree_hugger_email        = get_field("tree_hugger_email","option");
                            if($tree_hugger_phone_number || $tree_hugger_email){?>
                                <ul class="contact-info">
                                    <?php
                                    if($tree_hugger_phone_number && $footer_conv_number){?>
                                        <li class="phone">
                                            <a href="tel:<?php echo $footer_conv_number; ?>" title="Call on <?php echo $tree_hugger_phone_number; ?>">
                                                <span class="callus"><?php echo $tree_hugger_phone_number; ?></span>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                    if($tree_hugger_email){?>
                                        <li>
                                            <a href="mailto:<?php echo $tree_hugger_email; ?>" title="Mail at <?php echo $tree_hugger_email; ?>"><?php echo $tree_hugger_email; ?></a>
                                        </li>
                                        <?php
                                    }?>
                                </ul>
                                <?php
                            }
                            $tree_hugger_hours_title = get_field("tree_hugger_hours_title","option");
                            $tree_huggers_hours_content = get_field("tree_huggers_hours_content","option");
                            if($tree_hugger_hours_title || $tree_huggers_hours_content){?>
                                <div class="footer-hour">
                                    <?php
                                    if($tree_hugger_hours_title){?>
                                        <h5><?php echo $tree_hugger_hours_title; ?></h5>
                                        <?php
                                    }
                                    // Hours Content
                                    echo $tree_huggers_hours_content;
                                    ?>
                                </div>
                                <?php
                            }
                            $tree_hugger_location_text = get_field("tree_hugger_location_text","option");
                            $tree_hugger_location_url  = get_field("tree_hugger_location_url","option");
                            if($tree_hugger_location_text || $tree_hugger_location_url){?>
                                <ul class="footer-loaction">
                                    <?php
                                    if($tree_hugger_location_text){?>
                                        <li><?php echo $tree_hugger_location_text; ?></li>
                                        <?php
                                    }
                                    if($tree_hugger_location_url){?>
                                        <li>
                                            <a href="<?php echo $tree_hugger_location_url['url']; ?>" target="<?php echo $tree_hugger_location_url['target']; ?>" title="<?php echo $tree_hugger_location_url['title']; ?>"><?php echo $tree_hugger_location_url['title']; ?></a>
                                        </li>
                                        <?php
                                    }?>
                                </ul>
                                <?php
                            }?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2" >
                    <div class="contact-form-wp wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <h2 class="h4-title for-mob"><?php the_title(); ?></h2>
                        <div class="contact-form">
                            <?php
                            echo do_shortcode('[contact-form-7 id="388fa1c" title="Contact Page Form"]');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-end -->