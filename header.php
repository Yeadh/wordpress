<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package premix
 */

?><!doctype html>
<html class="no-js" lang="en"> 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     
    <!-- Favicon and Apple Touch Icon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">   
    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700%7CRoboto:300,400" rel="stylesheet">     

    <!-- Modernizr -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Preloader -->
	<?php /**
	<div id="preloaders">
		<div class="premix-table">
			<div class="premix-table-cell">
				<div class="bar-c">
					<div id="bar-1" class="bar"></div>
					<div id="bar-2" class="bar"></div>
					<div id="bar-3" class="bar"></div>
					<div id="bar-4" class="bar"></div>
					<div id="bar-5" class="bar"></div>
					<div id="bar-6" class="bar"></div>
					<div id="bar-7" class="bar"></div>
				</div>
			</div>
		</div>
	</div>	
	**/
	?>
	<!-- Premix Body Start -->
	<!-- Premix Header Start -->
	<div id="main_menu_fixed"></div>
	<header class="premix-main-menu-area">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="logo">
						 <?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							if ( has_custom_logo() && function_exists( 'the_custom_logo' ) ) {
								
									printf('<a href="%s" class="custom-logo-link">', home_url());
									the_custom_logo();
									printf('</a>');
							
							}
							 else 
							{
								printf('<span class="site-title"><a href="%s">%s</a></span>', home_url(), esc_attr( get_bloginfo( 'name' ) ));
							}
							
						?>
					</div> <!-- .logo End -->
				</div>
				<div class="col-md-10 col-sm-9 col-xs-6 premix-menu-section">
					<div class="premix-menu">
						<?php 
							wp_nav_menu( array( 
								'theme_location' => 'primary-nav'
							) );  
						 ?>
					</div> <!-- .premix-menu End -->
					<div class="premix-menu premix-mobile-menu">
						
						<?php 
							wp_nav_menu( array( 
								'theme_location' => 'primary-nav',
								'menu_class'	 => 'slimmenu'
							) );  
						 ?>
					</div> <!-- .premix-menu End -->
				</div>
			</div>
		</div>
		<progress value="0" id="premix-progressBar" class="premix-single">
			<div class="premix-progress-container">
				<span class="premix-progress-bar"></span>
			</div>
		</progress>
	</header>
	<!-- Premix Welcome Section Start -->
	