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
    <div class="page-loader">
	<svg id="wrap" width="300" height="300">
  
  <!-- background -->
  <svg>
    <circle cx="150" cy="150" r="130" style="stroke: #1E2227; stroke-width:18; fill:transparent"/>
    <circle cx="150" cy="150" r="115" style="fill:#1E2227"/>
    <path style="stroke: #F8A116; stroke-dasharray:820; stroke-dashoffset:820; stroke-width:18; fill:transparent" d="M150,150 m0,-130 a 130,130 0 0,1 0,260 a 130,130 0 0,1 0,-260">
      <animate attributeName="stroke-dashoffset" dur="6s" to="-820" repeatCount="indefinite"/>
    </path>
  </svg>
  
  <!-- image -->
  <svg>
    <path id="hourglass" d="M150,150 C60,85 240,85 150,150 C60,215 240,215 150,150 Z" style="stroke: white; stroke-width:5; fill:white;" />
    
    <path id="frame" d="M100,97 L200, 97 M100,203 L200,203 M110,97 L110,142 M110,158 L110,200 M190,97 L190,142 M190,158 L190,200 M110,150 L110,150 M190,150 L190,150" style="stroke:#F8A116; stroke-width:6; stroke-linecap:round" />
    
    <animateTransform xlink:href="#frame" attributeName="transform" type="rotate" begin="0s" dur="3s" values="0 150 150; 0 150 150; 180 150 150" keyTimes="0; 0.8; 1" repeatCount="indefinite" />
    <animateTransform xlink:href="#hourglass" attributeName="transform" type="rotate" begin="0s" dur="3s" values="0 150 150; 0 150 150; 180 150 150" keyTimes="0; 0.8; 1" repeatCount="indefinite" />
  </svg>
  
  <!-- sand -->
  <svg>
    <!-- upper part -->
    <polygon id="upper" points="120,125 180,125 150,147" style="fill:#F8A116;">
      <animate attributeName="points" dur="3s" keyTimes="0; 0.8; 1" values="120,125 180,125 150,147; 150,150 150,150 150,150; 150,150 150,150 150,150" repeatCount="indefinite"/>
    </polygon>
    
    <!-- falling sand -->
    <path id="line" stroke-linecap="round" stroke-dasharray="1,4" stroke-dashoffset="200.00" stroke="#F8A116" stroke-width="2" d="M150,150 L150,198">
      <!-- running sand -->
      <animate attributeName="stroke-dashoffset" dur="3s" to="1.00" repeatCount="indefinite"/>
      <!-- emptied upper -->
      <animate attributeName="d" dur="3s" to="M150,195 L150,195" values="M150,150 L150,198; M150,150 L150,198; M150,198 L150,198; M150,195 L150,195" keyTimes="0; 0.65; 0.9; 1" repeatCount="indefinite"/>
      <!-- last drop -->
      <animate attributeName="stroke" dur="3s" keyTimes="0; 0.65; 0.8; 1" values="#F8A116;#F8A116;transparent;transparent" to="transparent" repeatCount="indefinite"/>
    </path>
    
    <!-- lower part -->
    <g id="lower">
      <path d="M150,180 L180,190 A28,10 0 1,1 120,190 L150,180 Z" style="stroke: transparent; stroke-width:5; fill:#F8A116;">
        <animateTransform attributeName="transform" type="translate" keyTimes="0; 0.65; 1" values="0 15; 0 0; 0 0" dur="3s" repeatCount="indefinite" />
      </path>
      <animateTransform xlink:href="#lower" attributeName="transform"
                    type="rotate"
                    begin="0s" dur="3s"
                    values="0 150 150; 0 150 150; 180 150 150"
                    keyTimes="0; 0.8; 1"
                    repeatCount="indefinite"/>
    </g>
    
    <!-- lower overlay - hourglass -->
    <path d="M150,150 C60,85 240,85 150,150 C60,215 240,215 150,150 Z" style="stroke: white; stroke-width:5; fill:transparent;">
      <animateTransform attributeName="transform"
                    type="rotate"
                    begin="0s" dur="3s"
                    values="0 150 150; 0 150 150; 180 150 150"
                    keyTimes="0; 0.8; 1"
                    repeatCount="indefinite"/>
    </path>
    
    <!-- lower overlay - frame -->
    <path id="frame" d="M100,97 L200, 97 M100,203 L200,203" style="stroke:#F8A116; stroke-width:6; stroke-linecap:round">
      <animateTransform attributeName="transform"
                    type="rotate"
                    begin="0s" dur="3s"
                    values="0 150 150; 0 150 150; 180 150 150"
                    keyTimes="0; 0.8; 1"
                    repeatCount="indefinite"/>
    </path>
  </svg>
  
</svg>
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