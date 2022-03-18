<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<?php echo wp_kses( get_theme_mod( 'google_analytics_code' ), [ 'script' => [] ] ); ?>
	<meta name="theme-color" content="#010101">
</head>

<body <?php body_class(); ?>>
<div class="page-loader-wrapper">
    <div class="page-loader"></div>
</div>
<div id='toTop'><i class="icon icon-angle-up"></i></div>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'arteco' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-inner">
			<div class="container">
				<div class="row justify-content-between top-header-details">
					<div class="contact-details">
						<?php
							$title = get_field('title', 'option');
							$phone_number = get_field('phone_number', 'option');
							$email = get_field('email', 'option');
							$title_s = get_field('title_s', 'option');
							$phone_number_s = get_field('phone_number_s', 'option');
							$email_s = get_field('email_cs', 'option');
						?>
						<div class="contact-details-item">
							<?php if ( $title ) : ?>
								<p class="contact-details-title"><?php echo $title; ?></p>
							<?php endif; ?>
							<?php if ( $phone_number || $email ) : ?>
								<div class="contact-details-phone-email-wrapper">
									<?php if ( $phone_number ) : ?>
										<div class="contact-details-phone">
											<i class="icon icon-phone"></i>
											<a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>
										</div>
									<?php endif; ?>
									<?php if ( $email ) : ?>
										<div class="contact-details-email">
											<i class="icon icon-envelope"></i>
											<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="contact-details-item">
							<?php if ( $title_s ) : ?>
								<p class="contact-details-title"><?php echo $title_s; ?></p>
							<?php endif; ?>
							<?php if ( $phone_number_s || $email_s ) : ?>
								<div class="contact-details-phone-email-wrapper">
									<?php if ( $phone_number_s ) : ?>
										<div class="contact-details-phone">
											<i class="icon icon-phone"></i>
											<a href="tel:<?php echo $phone_number_s; ?>"><?php echo $phone_number_s; ?></a>
										</div>
									<?php endif; ?>
									<?php if ( $email_s ) : ?>
										<div class="contact-details-email">
											<i class="icon icon-envelope"></i>
											<a href="mailto:<?php echo $email_s; ?>"><?php echo $email_s; ?></a>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="social-icons-wrapper">
						<?php the_social_links( true ); ?>
					</div><!-- /.social-icons-wrapper -->
				</div>
			</div> <!-- /.container -->
		</div> <!-- /.site-header-inner -->
		
		<div class="container logo-menu-wrapper">
			<div class="justify-content-between row main-logo-nav-wrapper">
				<div class="site-branding-main-logo site-branding">
					<div class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo( esc_url( get_header_image() ) ); ?>" alt="<?php echo( esc_attr( get_bloginfo( 'title' ) ) ); ?>"/>
						</a>
					</div>
					<?php if ( bloginfo( 'description' ) != '' ) : ?>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
			
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php

						wp_nav_menu(
							array(
								'theme_location' 		=> 	'primary',
								'menu_id' 				=> 	'primary-menu',
								'menu_class' 			=> 	'main-header-menu',
								'container_class'		=>	'main-menu-container'
							)
						);

						?>
				</nav><!-- #site-navigation -->
				
				<div class="menu-toggle-wrapper">
					<a href='#' class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
			</div> <!-- /.row justify-content-between -->
		</div> <!-- /.container logo-menu-wrapper -->
	</header><!-- #masthead /.site-header -->

	<div id="content" class="site-content">