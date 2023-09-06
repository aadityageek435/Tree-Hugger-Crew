<!-- about-start -->
<section class="about-sec tree-removal">
    <div class="sec-wp">     
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-content">
                        <h1 class="h4-title"><?php the_title(); ?></h1>
                        <?php  
                        //service banner content
                        the_content();
                        ?>
                    </div>
                </div>
                <?php  
                $tree_services_banner_icon  = get_field("tree_services_banner_icon");
                $tree_services_banner_image = get_field("tree_services_banner_image");
                if($tree_services_banner_icon || $tree_services_banner_image){?>
                    <div class="col-lg-6">
                        <?php  
                        if($tree_services_banner_icon){?>  
                            <div class="about-brand">
                                <img src="<?php echo $tree_services_banner_icon['url']; ?>" alt="<?php echo get_the_title()." Icon"; ?>" width="<?php echo $tree_services_banner_icon['width']; ?>" height="<?php echo $tree_services_banner_icon['height']; ?>">
                            </div>
                            <?php
                        }
                        if($tree_services_banner_image){?>
                            <div class="about-sec-img">
                                <div class="back-img img-box" style="background-image: url('<?php echo $tree_services_banner_image; ?>');"></div>
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
<?php 
if(have_rows("tree_services_how_we_content")){?>
    <!-- who-sec start-->
    <section class="who-sec tree-help">
        <div class="sec-wp">
            <div class="container">
                <?php  
                while(have_rows("tree_services_how_we_content")){  the_row();

                    $tree_services_main_heading = get_sub_field("tree_services_main_heading");
                    $select_content_fields = get_sub_field("select_content_fields");

                    if($tree_services_main_heading){?>
                        <h2 class="h2-title"><?php echo $tree_services_main_heading; ?></h2>
                        <?php
                    }
                    // title / content
                    if($select_content_fields === "title_content_rep"){?>
                        <div class="row">
                            <?php  
                            while(have_rows("tree_services_title_content")){ the_row();
                                $tree_services_how_we_help_title   = get_sub_field("tree_services_how_we_help_title");
                                $tree_services_how_we_help_content = get_sub_field("tree_services_how_we_help_content");
                                if($tree_services_how_we_help_title || $tree_services_how_we_help_content){?>
                                    <div class="col-lg-6">
                                        <div class="who-title white-text">
                                            <?php 
                                            if($tree_services_how_we_help_title){?>
                                                <h3 class="h3-title"><?php echo $tree_services_how_we_help_title; ?></h3>
                                                <?php
                                            }
                                            //service content
                                            echo $tree_services_how_we_help_content; ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }?>
                        </div>
                        <?php
                    }
                    // list of points
                    if($select_content_fields === "list_of_points"){?>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="tree-pruning-list">
                                    <?php  
                                    while(have_rows("tree_services_list_of_points")){ the_row();
                                        
                                        $tree_services_points_title = get_sub_field("tree_services_points_title");
                                        if($tree_services_points_title){?>
                                            <li><?php echo $tree_services_points_title; ?></li>
                                            <?php
                                        }
                                    }?>
                                </ul>
                            </div>
                        </div>
                        <?php
                    }
                }?>
            </div>
        </div>
    </section>
    <!-- who-sec end-->
    <?php
}?>
<!-- tree-need-start -->
<section class="profestional tree-need">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <?php 
                $tree_services_contact_image = get_field("tree_services_contact_image");
                if($tree_services_contact_image){?>
                    <div class="col-lg-6">
                        <div class="about-us-img">
                            <div class="back-img img-box" style="background-image: url('<?php echo $tree_services_contact_image; ?>');"></div>
                        </div>
                    </div>
                    <?php
                }
                $tree_services_contact_title     = get_field("tree_services_contact_title");
                $tree_services_contact_content   = get_field("tree_services_contact_content");
                $tree_hugger_contact_free_quote_url = get_field("tree_hugger_contact_free_quote_url","option");
                $tree_hugger_phone_number        = get_field("tree_hugger_phone_number","option");
                $service_conv_number             = preg_replace('/[^0-9.]/', '', $tree_hugger_phone_number);
                if($tree_services_contact_title || $tree_services_contact_content || $tree_hugger_contact_free_quote_url || $tree_hugger_phone_number){?>
                    <div class="col-lg-6 align-self-center">
                        <div class="tree-content">
                            <?php 
                            if($tree_services_contact_title){?>
                                <h2 class="h2-title"><?php echo $tree_services_contact_title; ?></h2>
                                <?php
                            }
                            //contact content
                            echo $tree_services_contact_content;?>
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