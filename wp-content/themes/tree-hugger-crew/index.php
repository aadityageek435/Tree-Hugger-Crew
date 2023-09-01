<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tree-hugger-crew
 */

get_header();

$page_title = get_the_title( get_option('page_for_posts', true) );
?>
<!-- Banner Start -->
<section class="main-banner inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1 class="h1-title"><?php echo $page_title; ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->
  
<div class="inner-page-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="inner-page-box">
                    <div id="primary" class="content-area">
						<main id="primary" class="site-main">
							<?php
							if ( have_posts() ) :
								/* Start the Loop */
								while ( have_posts() ) : the_post();
									
									get_template_part( 'template-parts/content', get_post_type() );

								endwhile;
                                
								the_posts_pagination();
							else :
								get_template_part( 'template-parts/content', 'none' );
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
<?php
get_footer();
