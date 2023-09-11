<!-- about-start -->
<section class="about-sec">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center order-2 order-lg-1">
                    <div class="about-us-content">
                        <h1 class="h4-title"><?php the_title(); ?></h1>
                        <?php
                        //about banner content
                        the_content();

                        $tree_hugger_about_banner_slogan = get_field("tree_hugger_about_banner_slogan");
                        if($tree_hugger_about_banner_slogan){?>
                            <h2 class="h2-title"><?php echo $tree_hugger_about_banner_slogan; ?></h2>
                            <?php
                        }?>
                    </div>
                </div>
                <?php
                $tree_hugger_about_icon  = get_field("tree_hugger_about_icon");
                $tree_hugger_about_image = get_field("tree_hugger_about_image");
                if($tree_hugger_about_icon || $tree_hugger_about_image){?>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="about-img-wp">
                        <?php
                        if($tree_hugger_about_icon){?>
                            <div class="about-brand">
                                <img src="<?php echo $tree_hugger_about_icon['url']; ?>" alt="Leaf Icon" width="<?php echo $tree_hugger_about_icon['width']; ?>" height="<?php echo $tree_hugger_about_icon['height']; ?>">
                            </div>
                            <?php
                        }
                        if($tree_hugger_about_image){?>
                            <div class="about-sec-img">
                                <div class="back-img img-box img-left-box" style="background-image: url('<?php echo $tree_hugger_about_image; ?>');"></div>
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
<!-- About-end -->

<!-- who-sec start-->
<section class="who-sec">
    <div class="sec-wp">
        <?php
        $tree_hugger_who_we_title       = get_field("tree_hugger_who_we_title");
        $tree_hugger_who_we_content_rep = get_field("tree_hugger_who_we_content_rep");
        if($tree_hugger_who_we_title || $tree_hugger_who_we_content_rep){?>
            <div class="container">
                <?php
                if($tree_hugger_who_we_title){?>
                    <h2 class="h2-title"><?php echo $tree_hugger_who_we_title; ?></h2>
                    <?php
                }?>
                <div class="row">
                    <?php
                    foreach($tree_hugger_who_we_content_rep as $content){?>
                        <div class="col-lg-6">
                            <?php
                            if($content['tree_hugger_who_we_content']){?>
                                <div class="who-title white-text">
                                    <?php echo $content['tree_hugger_who_we_content']; ?>
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
<!-- career-start -->
<section class="profestional">
    <div class="sec-wp">
        <div class="container">
            <?php
            $tree_hugger_work_with_title   = get_field("tree_hugger_work_with_title");
            $tree_hugger_work_with_image   = get_field("tree_hugger_work_with_image");
            $tree_hugger_work_with_content = get_field("tree_hugger_work_with_content");
            if($tree_hugger_work_with_title || $tree_hugger_work_with_image || $tree_hugger_work_with_content){?>
                <div class="row">
                    <?php
                    if($tree_hugger_work_with_image){?>
                        <div class="col-lg-6">
                            <div class="about-us-img">
                                <div class="back-img img-box" style="background-image: url('<?php echo $tree_hugger_work_with_image; ?>');"></div>
                            </div>
                        </div>
                        <?php
                    }?>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-content">
                            <?php
                            if($tree_hugger_work_with_title){?>
                                <h2 class="h2-title"><?php echo $tree_hugger_work_with_title; ?></h2>
                                <?php
                            }
                            //Work with Content
                            echo $tree_hugger_work_with_content; ?>
                        </div>
                    </div>
                </div>
                <?php
            }?>
        </div>
    </div>
</section>
<!--career-end-->
<!-- Arborists start -->
<section class="arborists">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <?php
                $tree_hugger_meet_arborists_title = get_field("tree_hugger_meet_arborists_title");
                $tree_hugger_meet_arborists_content = get_field("tree_hugger_meet_arborists_content");
                if($tree_hugger_meet_arborists_title || $tree_hugger_meet_arborists_content ){?>
                    <div class="col-lg-4">
                        <div class="arborists-title">
                            <?php
                            if($tree_hugger_meet_arborists_title){?>
                                <h2 class="h2-title"><?php echo $tree_hugger_meet_arborists_title; ?></h2>
                                <?php
                            }
                            //arborist content
                            echo $tree_hugger_meet_arborists_content;
                            ?>
                        </div>
                    </div>
                    <?php
                }
                $arborists_query = new WP_Query(array("post_type"=>"our-arborists","post_status"=>"publish","posts_per_page"=>-1));
                if($arborists_query->have_posts()){?>
                    <div class="col-lg-8">
                        <div class="row arborists-slider">
                            <?php
                            while($arborists_query->have_posts()){  $arborists_query->the_post();
                                $arborist_name          = get_the_title();
                                $arborist_exp           = get_field("arborist_experience");
                                $arborist_about         = get_the_content();
                                $arborist_profile_image = get_the_post_thumbnail_url();
                                ?>
                                <div class="col-lg-6">
                                    <div class="arborists-content">
                                        <?php
                                        if($arborist_profile_image){?>
                                            <div class="arborists-img">
                                                <div class="back-img" style="background-image: url('<?php echo $arborist_profile_image; ?>');"></div>
                                            </div>
                                            <?php
                                        }
                                        if($arborist_name){?>
                                            <h3><?php echo $arborist_name; ?></h3>
                                            <?php
                                        }
                                        if($arborist_exp){?>
                                            <p><?php echo $arborist_exp; ?></p>
                                            <?php
                                        }?>
                                        <a href="javascript:void(0);" title="<?php echo $arborist_name.", Learn More"; ?>" class="arborist-learn-more" data-bs-toggle="modal" data-bs-target="#arborist_modal" data-arborist-id="<?php echo get_the_ID(); ?>">Learn More</a>
                                        <div class="popup-content" style="display:none;">
                                            <div class="row">
                                                <?php
                                                if($arborist_profile_image){?>
                                                    <div class="col-lg-4">
                                                        <img src="<?php echo $arborist_profile_image; ?>" alt="<?php echo $arborist_name;  ?>">
                                                    </div>
                                                    <?php
                                                }
                                                if($arborist_name || $arborist_about ||  $arborist_exp){?>
                                                    <div class="col-lg-8">
                                                        <?php
                                                        if($arborist_name){?>
                                                            <div class="arborist-name">
                                                                <h3><?php echo $arborist_name;  ?></h3>
                                                            </div>
                                                            <?php
                                                        }
                                                        if($arborist_exp || $arborist_about){?>
                                                            <div class="arborist-about-exp">
                                                                <?php
                                                                if($arborist_exp){?>
                                                                    <p><strong><?php echo $arborist_exp; ?></strong></p>
                                                                    <?php
                                                                }
                                                                if($arborist_about){?>
                                                                    <p><?php echo $arborist_about; ?></p>
                                                                    <?php
                                                                }?>
                                                            </div>
                                                            <?php
                                                        }
                                                        if(have_rows("arborist_awards_certifications")){?>
                                                            <div class="awards-certifications">
                                                                <p><strong>Awards/Certifications : </strong></p>
                                                                    <ul>
                                                                        <?php
                                                                        while(have_rows("arborist_awards_certifications")){ the_row();?>
                                                                            <li><?php the_sub_field("arborist_awards_certifications_title"); ?></li>
                                                                            <?php
                                                                        }?>
                                                                    </ul>
                                                            </div>
                                                            <?php
                                                        }?>
                                                    </div>
                                                    <?php
                                                }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php
                }?>
            </div>
        </div>
    </div>
</section>
<!-- Arborists end -->
<?php
if(have_rows("awards_certificatons","option")){?>
     <!-- awards-start -->
     <section class="awards cirty">
        <div class="sec-wp">
            <div class="container">
                <div class="awards-img-slider">
                    <?php
                    $home_awards_index = 1;
                    while (have_rows("awards_certificatons", "option")) {
                        the_row();

                        $award_certification_image = get_sub_field("award_certification_image");
                        $award_certification_redirect_url = (get_sub_field("award_certification_redirect_url")) ? get_sub_field("award_certification_redirect_url") : "javascript:void(0);";
                        $target_class = ($award_certification_redirect_url !== "javascript:void(0);") ? "target='_blank'" : "";
                        if ($award_certification_image) { ?>
                            <div class="awards-img">
                                <a href="<?php echo $award_certification_redirect_url; ?>" title="Awards Image <?php echo $home_awards_index; ?>" <?php echo $target_class; ?>>
                                    <img src="<?php echo $award_certification_image['url']; ?>" alt="Awards Image <?php echo $home_awards_index; ?>" width="<?php echo $award_certification_image['width']; ?>" height="<?php echo $award_certification_image['height']; ?>">
                                </a>
                            </div>
                    <?php
                        }
                        $home_awards_index++;
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- awards-end -->
    <?php
}?>