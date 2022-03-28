<?php
/**
 * Template part for displaying posts.
 *
 * @package Starter
 */

?>

<article id="post-<?php the_ID(); ?>" class="latest-posts-item col-md-3">
	<div class="latest-posts-item-inner">
		<a href="<?php the_permalink() ?>" class="latest-posts-item-link">
			<?php if( get_the_post_thumbnail() ): ?>
				<div class="latest-posts-item-featured-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
				</div>
			<?php else: ?>
				<div class="latest-posts-item-featured-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
				</div>
			<?php endif; ?>
			<div class="latest-posts-main-content-wrapper">
				<div class="latest-posts-description">
					<header class="entry-header">
						<h2 class="entry-title latest-posts-item-title">
							<?php the_title(); ?>
						</h2>
						<div class="entry-content latest-posts-item-excerpt">
							<?php the_excerpt(); ?>
						</div>
					</header>
					<span class="link link-primary link-arrow"><?php _e('Pogledajte projekat', 'arteco') ?> <i class="icon icon-arrow-right"></i></span>
				</div>
			</div>
		</a>
	</div>
</article>
