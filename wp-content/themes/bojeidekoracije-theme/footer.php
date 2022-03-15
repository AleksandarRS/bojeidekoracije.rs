<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Starter
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="widget-wrapper">
					<div class="container">
						<div class="row footer-widgets-wrapper">
							<?php get_template_part('template-parts/footer', 'widgets'); ?>
						</div>
					</div>
				</div>
				<?php if (get_theme_mod('footer_customizer_text') != ''): ?>
					<div class="site-info">
						<div class="container">
							<div class="footer-copyright row d-flex">
								<div class="copy-right-content col-md-6">
									<?php echo get_theme_mod('footer_customizer_text'); ?>
								</div>
								<div class="privacy-policy-menu col-md-6">
									<?php wp_nav_menu(
										array(
											'theme_location' 		=> 	'privacy',
											'menu_id' 				=> 	'privacy-menu',
											'menu_class' 			=> 	'main-header-menu',
											'container_class'		=>	'main-menu-container'
										)
									); ?>
								</div>
							</div>
						</div>
					</div><!-- .site-info -->
				<?php endif; ?>
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<!-- W3TC-include-css -->
		<?php wp_footer(); ?>
	<!-- W3TC-include-js-head -->
	</body>
</html>
