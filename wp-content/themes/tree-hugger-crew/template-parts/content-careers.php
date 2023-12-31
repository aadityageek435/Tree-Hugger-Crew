<!-- about-start -->
<section class="about-sec tree-career">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <?php
                $tree_hugger_careers_title       = get_field("tree_hugger_careers_title");
                $tree_hugger_careers_sub_title   = get_field("tree_hugger_careers_sub_title");
                if($tree_hugger_careers_title || $tree_hugger_careers_sub_title){?>
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="about-us-content wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <?php
                                if($tree_hugger_careers_title){?>
                                    <h1 class="h4-title"><?php echo $tree_hugger_careers_title; ?></h1>
                                    <?php
                                }
                                if($tree_hugger_careers_sub_title){?>
                                    <h3 class="h3-title"><?php echo $tree_hugger_careers_sub_title; ?></h3>
                                    <?php
                                }?>
                        </div>
                    </div>
                    <?php
                }
                $tree_huggers_carrers_icon       = get_field("tree_huggers_carrers_icon");
                $tree_hugger_careers_video_url   = get_field("tree_hugger_careers_video_url");
                $tree_hugger_careers_video_thumb = get_field("tree_hugger_careers_video_thumb");

                if($tree_huggers_carrers_icon || $tree_hugger_careers_video_url || $tree_hugger_careers_video_thumb){?>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="about-img-wp wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <?php
                        if($tree_huggers_carrers_icon){?>
                            <div class="about-brand">
                                <img src="<?php echo $tree_huggers_carrers_icon['url']; ?>" alt="Service Icon" width="<?php echo $tree_huggers_carrers_icon['width']; ?>" height="<?php echo $tree_huggers_carrers_icon['height']; ?>">
                            </div>
                            <?php
                        }
                        if($tree_hugger_careers_video_thumb || $tree_hugger_careers_video_url){?>
                            <div class="about-sec-img">
                                <div class="back-img img-box img-left-box" style="background-image: url('<?php echo $tree_hugger_careers_video_thumb; ?>');">
                                    <?php
                                    if($tree_hugger_careers_video_url){?>
                                    <div class="play_btn_wp">
                                        <a class="play-btn" href="<?php echo $tree_hugger_careers_video_url; ?>" title="play-video" data-fancybox="careers-video"></a>
                                        </div>
                                        <?php
                                    }?>
                                </div>
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
<section class="who-sec employee">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <?php
                $tree_hugger_employee_main_title = get_field("tree_hugger_employee_main_title");
                $tree_hugger_employee_sub_title  = get_field("tree_hugger_employee_sub_title");
                if($tree_hugger_employee_main_title || $tree_hugger_employee_sub_title){?>
                    <div class="col-lg-5">
                        <div class="who-title white-text wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <?php
                            if($tree_hugger_employee_main_title){?>
                                <h2 class="h2-title"><?php echo $tree_hugger_employee_main_title; ?></h2>
                                <?php
                            }
                            if($tree_hugger_employee_sub_title){?>
                                <p><?php echo $tree_hugger_employee_sub_title; ?></p>
                                <?php
                            }?>
                        </div>
                    </div>
                    <?php
                }
                if(have_rows("tree_hugger_employee_benefits")){?>
                    <div class="col-lg-7">
                        <ul class="tree-pruning-list wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <?php
                            while(have_rows("tree_hugger_employee_benefits")){ the_row();

                                $employee_points_of_title = get_sub_field("employee_points_of_title");
                                if($employee_points_of_title){?>
                                    <li><?php echo $employee_points_of_title; ?></li>
                                    <?php
                                }
                            }?>
                        </ul>
                    </div>
                    <?php
                }?>
            </div>
        </div>
    </div>
</section>
<!-- who-sec end-->

<?php
if(have_rows("tree_hugger_positions_available")){?>
    <!-- position-start -->
    <section class="position">
        <div class="sec-wp">
            <div class="container">
                <?php
                $tree_hugger_careers_position_main_title = get_field("tree_hugger_careers_position_main_title");
                if($tree_hugger_careers_position_main_title){?>
                    <h2 class="h2-title  wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php echo $tree_hugger_careers_position_main_title; ?></h2>
                    <?php
                }
                while(have_rows("tree_hugger_positions_available")){ the_row();

                        $position_avail_name               = get_sub_field("position_avail_name");
                        $position_avail_about              = get_sub_field("position_avail_about");
                        $list_of_requirements              = get_sub_field("list_of_requirements");
                        $position_avail_apply_now_url      = get_sub_field("position_avail_apply_now_url");
                        $position_avail_requirements_title = get_sub_field("position_avail_requirements_title");

                        ?>
                    <div class="position-wp wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                        <div class="row">
                            <?php
                            if($position_avail_name || $position_avail_about || $position_avail_apply_now_url){?>
                                <div class="col-lg-7">
                                    <div class="position-content">
                                        <?php
                                        if($position_avail_name){?>
                                            <h3 class="h3-title"><?php echo $position_avail_name; ?></h3>
                                            <?php
                                        }
                                        //position about content
                                        echo $position_avail_about;

                                        if($position_avail_apply_now_url){?>
                                            <a href="<?php echo $position_avail_apply_now_url; ?>" class="underline_link" title="<?php echo "Apply For ".$position_avail_name; ?>">Apply Now</a>
                                            <?php
                                        }?>
                                    </div>
                                </div>
                                <?php
                            }
                            if($position_avail_requirements_title || $list_of_requirements){?>
                                <div class="col-lg-5">
                                    <div class="position-list">
                                        <?php
                                        if($position_avail_requirements_title){?>
                                            <h5><?php echo $position_avail_requirements_title; ?></h5>
                                            <?php
                                        }
                                        if($list_of_requirements){?>
                                            <ul>
                                                <?php
                                                foreach($list_of_requirements as $requirement){
                                                    $list_of_requirements_rep_title = $requirement['list_of_requirements_rep_title'];
                                                    if($list_of_requirements_rep_title){?>
                                                        <li><?php echo $list_of_requirements_rep_title; ?></li>
                                                        <?php
                                                    }
                                                }?>
                                            </ul>
                                            <?php
                                        }?>
                                    </div>
                                </div>
                                <?php
                            }?>
                        </div>
                    </div>
                    <?php
                }?>
            </div>
        </div>
    </section>
    <!-- position-end -->
    <?php
}?>