<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                        <h1 class="h1-title"><?php printf(esc_html__('Search Results for: %s', 'tree-hugger-crew'), '<span>' . get_search_query() . '</span>'); ?></h1>
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
                <div class="col-lg-8">
                    <div class="inner-page-box">
                        <div id="primary" class="content-area">
                            <main id="primary" class="site-main">
                                <?php if (have_posts()) :
                                    /* Start the Loop */
                                    while (have_posts()) : the_post();

                                        get_template_part('template-parts/content', 'search');

                                    endwhile;

                                    the_posts_pagination();
                                else :
                                    get_template_part('template-parts/content', 'none');
                                endif;
                                ?>
                            </main><!-- #main -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
