<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tree-hugger-crew
 */

get_header();
?>
<!-- Banner Start -->
<section class="main-banner inner-banner">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1 class="h1-title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<div class="inner-page-text">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-box">
                        <div id="primary" class="content-area">
                            <main id="primary" class="site-main">
                                <?php
                                while (have_posts()) :
                                    the_post();

                                    get_template_part('template-parts/content', 'page');

                                endwhile; // End of the loop.
                                ?>
                            </main><!-- #main -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
