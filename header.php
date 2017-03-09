<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title"
	      content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<?php wp_head(); ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-91739673-1', 'auto');
	  ga('send', 'pageview');

	</script>

</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar nav-bg-taxplus site-navigation navbar-fixed-top" itemscope="itemscope"
		     itemtype="http://schema.org/SiteNavigationElement">

			<div class="<?php echo esc_html( $container ); ?>" id="content">
				<div class="call-button">Call 310 398-3231</div>
				<div class="clearfix"></div>

				<div class="navbar-header">

					<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle hidden-sm-up" type="button" data-toggle="collapse"
					        data-target=".exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false"
					        aria-label="Toggle navigation">
		        <span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>

        	</button>


					<!-- Your site title as branding in the menu -->
					

					<!-- <a class="res-logo" href="<?php //echo esc_url( home_url( '/' ) ); ?>">
					   <img src="/wp-content/uploads/2017/01/TaxPlusLogo-res.png">
					</a> -->
					<a class="scroll-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					   <img src="/wp-content/uploads/2017/01/TaxPlusLogo-res.png">
					</a>

					<?php if ( ! has_custom_logo() ) { ?>
					<a class="res-logo-hp" class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
					   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						<?php bloginfo( 'name' ); ?>
					</a>
					<?php } else {
						the_custom_logo();
} ?><!-- end custom logo -->

				</div>
				

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar',
						'container_id'    => 'exCollapsingNavbar',
						'menu_class'      => 'nav navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>


				

			</div> <!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
























