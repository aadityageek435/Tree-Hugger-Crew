<!-- about-start -->
<section class="about-sec lot-clearing">
    <div class="sec-wp">     
        <div class="container">
            <div class="row">
                <?php 
                $lot_clearing_banner_title       = get_field("lot_clearing_banner_title");
                $lot_clearing_importance_heading = get_field("lot_clearing_importance_heading");
                $lot_clearing_importance_points  = get_field("lot_clearing_importance_points");
                if($lot_clearing_banner_title || $lot_clearing_importance_heading || $lot_clearing_importance_points){?>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-content">
                            <?php  
                            if($lot_clearing_banner_title){?>
                                <h1 class="h4-title"><?php echo $lot_clearing_banner_title; ?></h1>
                                <?php
                            }
                            // lot clearing banner content
                            the_content();

                            if($lot_clearing_importance_heading){?>
                                <h3 class="h3-title"><?php echo $lot_clearing_importance_heading; ?></h3>
                                <?php
                            }
                            if($lot_clearing_importance_points){?>
                                <ul class="lot-list">
                                    <?php 
                                    foreach($lot_clearing_importance_points as $imp_point){ 
                                        $importance_point_icon = $imp_point['importance_point_icon'];
                                        $importance_point_title = $imp_point['importance_point_title']; 
                                        if($importance_point_icon || $importance_point_title){ ?>
                                            <li>
                                                <?php  
                                                if($importance_point_icon){?>
                                                    <span>
                                                        <img src="<?php echo $importance_point_icon; ?>" alt="<?php echo $importance_point_title; ?>" width="46" height="46">
                                                    </span>
                                                    <?php
                                                }
                                                //importance point title
                                                echo $importance_point_title;
                                                ?>
                                            </li>
                                            <?php
                                        }
                                    }?>
                                </ul>
                                <?php
                            }?>
                        </div>
                    </div>
                    <?php
                }
                $lot_clearing_banner_image = get_field("lot_clearing_banner_image");
                $lot_clearing_banner_icon = get_field("lot_clearing_banner_icon");
                if($lot_clearing_banner_image || $lot_clearing_banner_icon){?>
                    <div class="col-lg-6">
                        <?php 
                        if($lot_clearing_banner_icon){?>
                            <div class="about-brand">
                                <img src="<?php echo $lot_clearing_banner_icon['url']; ?>" alt="<?php echo get_the_title()." Icon"; ?>" width="<?php echo $lot_clearing_banner_icon['width']; ?>" height="<?php echo $lot_clearing_banner_icon['height']; ?>">
                            </div>
                            <?php
                        }
                        if($lot_clearing_banner_image){?>
                            <div class="about-sec-img">
                                <div class="back-img img-box img-left-box" style="background-image: url('<?php echo $lot_clearing_banner_image; ?>');"></div>
                            </div>
                            <?php
                        }?>
                    </div>
                    <?php
                }?>
            </div>
        </div>
    </div>
</section>
<!-- About-end -->

<!-- who-sec start-->
<section class="who-sec approach-sec">
    <div class="sec-wp">
        <?php 
        $lot_clearing_our_approach_title       = get_field("lot_clearing_our_approach_title");
        $lot_clearing_our_approach_content_rep = get_field("lot_clearing_our_approach_content_rep");
        if($lot_clearing_our_approach_title || $lot_clearing_our_approach_content_rep){?>
            <div class="container">
                <?php  
                if($lot_clearing_our_approach_title){?>
                    <h2 class="h2-title"><?php echo $lot_clearing_our_approach_title; ?></h2>
                    <?php
                }?>
                <div class="row">
                    <?php  
                    foreach($lot_clearing_our_approach_content_rep as $content){?>
                        <div class="col-lg-6">
                            <?php
                            if($content['tree_hugger_our_approach_main_content']){?> 
                                <div class="who-title white-text">
                                    <?php echo $content['tree_hugger_our_approach_main_content']; ?>
                                </div>
                                <?php
                            }?>
                        </div>
                        <?php
                    }?>
                </div>
            </div>
            <?php
        }?>
    </div>
</section>
<!-- who-sec end-->

<!-- tree-need-start -->
<section class="profestional tree-need ready">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <?php 
                $lot_clearing_contact_image = get_field("lot_clearing_contact_image");
                if($lot_clearing_contact_image){?>
                    <div class="col-lg-6">
                        <div class="about-us-img">
                            <div class="back-img img-box" style="background-image: url('<?php echo $lot_clearing_contact_image; ?>');"></div>
                        </div>
                    </div>
                    <?php
                }
                $lot_clearing_contact_title     = get_field("lot_clearing_contact_title");
                $lot_clearing_contact_content   = get_field("lot_clearing_contact_content");
                $tree_hugger_contact_free_quote_url = get_field("tree_hugger_contact_free_quote_url","option");
                $tree_hugger_phone_number        = get_field("tree_hugger_phone_number","option");
                $service_conv_number             = preg_replace('/[^0-9.]/', '', $tree_hugger_phone_number);
                if($lot_clearing_contact_title || $lot_clearing_contact_content || $tree_hugger_contact_free_quote_url || $tree_hugger_phone_number){?>
                    <div class="col-lg-6 align-self-center">
                        <div class="tree-content">
                            <?php 
                            if($lot_clearing_contact_title){?>
                                <h2 class="h2-title"><?php echo $lot_clearing_contact_title; ?></h2>
                                <?php
                            }
                            //contact content
                            echo $lot_clearing_contact_content;?>
                            <?php  
                            if($tree_hugger_contact_free_quote_url || $tree_hugger_phone_number){?>
                                <div class="banner-btn">
                                    <?php  
                                    if($tree_hugger_contact_free_quote_url){?>
                                        <a href="<?php echo $tree_hugger_contact_free_quote_url['url']; ?>" title="<?php echo $tree_hugger_contact_free_quote_url['title']; ?>" class="sec-btn"><?php echo $tree_hugger_contact_free_quote_url['title']; ?></a>
                                        <?php
                                    }
                                    if($tree_hugger_phone_number && $service_conv_number){?>
                                        <a href="tel:<?php echo $service_conv_number; ?>" title="Call <?php echo $tree_hugger_phone_number; ?>" class="sec-btn  white-outline-btn">Call &nbsp;<span class="for-des callus"><?php echo $tree_hugger_phone_number; ?></span><span class="for-mob">Now!</span></a>
                                        <?php
                                    }?>
                                </div>
                                <?php
                            }?>
                        </div>
                    </div>
                    <?php
                }?>
            </div>
        </div>
    </div>
</section>
<!--tree-need-end-->
