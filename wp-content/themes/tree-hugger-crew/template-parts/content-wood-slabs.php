<!-- about-start -->
<section class="about-sec lot-clearing wood-slab">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <?php
                $wood_slabs_banner_title        = get_field("wood_slabs_banner_title");
                $wood_slabs_banner_sub_title    = get_field("wood_slabs_banner_sub_title");
                $tree_hugger_our_inventory_url  = get_field("tree_hugger_our_inventory_url","option");
                 if($wood_slabs_banner_title || $wood_slabs_banner_sub_title || $tree_hugger_our_inventory_url){?>
                    <div class="col-lg-6 align-self-center order-2 order-lg-1">
                        <div class="about-us-content">
                            <?php
                            if($wood_slabs_banner_title){?>
                                <h1 class="h4-title"><?php echo $wood_slabs_banner_title; ?></h1>
                                <?php
                            }

                            if($wood_slabs_banner_sub_title){?>
                                <h3 class="h3-title"><?php echo $wood_slabs_banner_sub_title; ?></h3>
                                <?php
                            }
                            // lot clearing banner content
                            the_content();
                            if($tree_hugger_our_inventory_url){?>
                                <a href="<?php echo $tree_hugger_our_inventory_url['url']; ?>" title="<?php echo $tree_hugger_our_inventory_url['title']; ?>" target="_blank"><?php echo $tree_hugger_our_inventory_url['title']; ?></a>
                                <?php
                            }?>
                        </div>
                    </div>
                    <?php
                }
                $wood_slabs_banner_image = get_field("wood_slabs_banner_image");
                $wood_slabs_banner_icon = get_field("wood_slabs_banner_icon");
                if($wood_slabs_banner_image || $wood_slabs_banner_icon){?>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="about-img-wp">
                        <?php
                        if($wood_slabs_banner_icon){?>
                            <div class="about-brand">
                                <img src="<?php echo $wood_slabs_banner_icon['url']; ?>" alt="<?php echo get_the_title()." Icon"; ?>" width="<?php echo $wood_slabs_banner_icon['width']; ?>" height="<?php echo $wood_slabs_banner_icon['height']; ?>">
                            </div>
                            <?php
                        }
                        if($wood_slabs_banner_image){?>
                            <div class="about-sec-img">
                                <div class="back-img img-box img-left-box" style="background-image: url('<?php echo $wood_slabs_banner_image; ?>');"></div>
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
<section class="who-sec approach-sec dry-sec">
    <div class="sec-wp">
        <?php
        $wood_slabs_why_idry_title       = get_field("wood_slabs_why_idry_title");
        $tree_hugger_contact_free_quote_url = get_field("tree_hugger_contact_free_quote_url","option");
        $wood_slabs_why_idry_content_rep = get_field("wood_slabs_why_idry_content_rep");
        if($wood_slabs_why_idry_title || $wood_slabs_why_idry_content_rep || $tree_hugger_contact_free_quote_url){?>
            <div class="container">
                <?php
                if($wood_slabs_why_idry_title){?>
                    <h2 class="h2-title"><?php echo $wood_slabs_why_idry_title; ?></h2>
                    <?php
                }?>
                <div class="row">
                    <?php
                    foreach($wood_slabs_why_idry_content_rep as $content){?>
                        <div class="col-lg-6">
                            <?php
                            if($content['wood_slabs_why_idry_content']){?>
                                <div class="who-title white-text">
                                    <?php
                                    echo $content['wood_slabs_why_idry_content'];
                                    ?>
                                </div>
                                <?php
                            }?>
                        </div>
                       <?php
                    }
                    ?>
                </div>
            </div>
            <?php
        }?>
    </div>
</section>
<!-- who-sec end-->

<?php
$wood_slabs_gallery_images = get_field("wood_slabs_gallery_images");
if ($wood_slabs_gallery_images) { ?>
    <!-- gallery-start -->
    <section class="gallery lot-gallery">
        <div class="sec-wp">
            <div class="container">
                <div class="gallery-img-slider">
                    <?php
                    $wood_gallery_index = 1;
                    foreach ($wood_slabs_gallery_images as $image) { ?>
                        <div class="gallery-img">
                            <a href="<?php echo $image; ?>" data-fancybox="gallery-img" title="<?php echo "Wood Gallery Image " . $wood_gallery_index; ?>">
                                <div class="back-img" style="background-image: url('<?php echo $image; ?>');"></div>
                            </a>
                        </div>
                        <?php
                        $wood_gallery_index++;
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery-end -->
    <?php
}?>
