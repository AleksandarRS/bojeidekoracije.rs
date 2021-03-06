<?php
/**
 * The template for displaying all single posts.
 *
 * @package Starter
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single-proizvod' );

			//the_post_navigation();
			
			get_template_part( 'template-parts/post', 'author' );
			
		endwhile; // End of the loop.
		?>
			
	</main><!-- #main -->
</div><!-- #primary -->
<?php // get_sidebar(); ?>

<?php get_footer(); ?>
