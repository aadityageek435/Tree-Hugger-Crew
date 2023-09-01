<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tree-hugger-crew
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php tree_hugger_crew_post_thumbnail();  ?>
	
	<header class="entry-header">
		<?php
		if ( !is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		endif;
		?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tree-hugger-crew' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		the_posts_pagination();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php tree_hugger_crew_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
