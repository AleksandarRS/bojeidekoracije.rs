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
	<?php  echo wp_kses( get_theme_mod( 'google_analytics_code' ), [ 'script' => [] ] ); ?>

    <!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-H1VESZY41V"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-H1VESZY41V');
	</script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '475718288097469'); 
        fbq('track', 'PageView');
	</script>
	<!-- <noscript><img src="https://www.facebook.com/tr?id=475718288097469&ev=PageView&noscript=1" alt="Facebook pixel image" height="1" width="1" /></noscript> -->
    <!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
<div class="page-loader-wrapper">
    <div class="page-loader">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Arteco-logo-tapete-dekorativni-materijali.png" alt="<?php _e('Arteco logo loader', 'arteco') ?>">
	</div>
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
							$phone_number_tr = get_field('phone_number_tr', 'option');
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
							<?php if ( $phone_number_s || $phone_number_tr || $email_s ) : ?>
								<div class="contact-details-phone-email-wrapper">
									<?php if ( $phone_number_s ) : ?>
										<div class="contact-details-phone">
											<i class="icon icon-phone"></i>
											<a href="tel:<?php echo $phone_number_s; ?>"><?php echo $phone_number_s; ?></a>
											<i class="icon icon-phone"></i>
											<a href="tel:<?php echo $phone_number_tr; ?>"><?php echo $phone_number_tr; ?></a>
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
						<span><?php _e('Dekorativni elementi', 'arteco'); ?></span>
					</div>
					<?php if ( bloginfo( 'description' ) != '' ) : ?>
					
						<p class="site-description">
							
							<span><?php bloginfo( 'description' ); ?></span>
						</p>
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