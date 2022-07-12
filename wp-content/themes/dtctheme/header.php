<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dtctheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dtctheme' ); ?></a>

	<header id="masthead" class="site-header">





		<div class="site-branding pb-4 pt-4 d-flex justify-content-center">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$dtctheme_description = get_bloginfo( 'description', 'display' );
			if ( $dtctheme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $dtctheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->



		<div class="navigation-main ">
				
			<div class="main-nav container d-flex justify-content-center align-items-center">		
			
				<div class="col-sm-1 container search-bar d-flex justify-content-center align-items-center">	
						<button onclick="myFunction()" class="dropbtn"><i class="bi bi-search"></i></button>
						<div id="myDropdown" class="dropdown-content">
							<div id="myInput"><?php aws_get_search_form( true ); ?></div>
						</div>
				</div><!-- .search-bar -->

				<nav id="site-navigation" class="col container main-navigation d-flex justify-content-center align-items-center">
				<div class="row">
				<div class="col-12 d-flex justify-content-center">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<i class="bi bi-list"></i>
						<?php esc_html_e( 'Primary Menu', 'dtc-theme' ); ?>
					</button>
				</div>

				<div class="col-12 text-center">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu'
							)
						);
					?>
				</div>

			</div>
					
				</nav><!-- #site-navigation -->
					<div class="col-sm-1 cart-bar d-flex justify-content-center align-items-center ">
						<?php echo do_shortcode("[woo_cart_but]"); ?>				
					</div>

			</div>
			
			
		</div>
		

	</header><!-- #masthead -->
