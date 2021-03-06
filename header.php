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
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link href="https://fonts.googleapis.com/css?family=Jaldi" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->

	<div class="wrapper-fluid svm-topbar">
		
	</div>

	<div class="wrapper-fluid svm-logobar">

		<div class="container">
			<div style="margin-left: 100px; padding-top: 35px;">
			
				<img src="<?php bloginfo('template_url'); ?>/img/svm_logo.png" class="svm-logo" />
				<!--<form class="navbar-form align-bottom svm-searchbar" role="search" style="width: 30%">
					<div class="input-group add-on">
					<input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>
				</form>-->

				<div class="svm-sitetitle">
					<!-- <div>
						some more stuff
					</div> -->
					<div class="svm-sitetitle-text">Sportverein Mühlbach</div>
					<!-- <div>
						seit 19XX
					</div> -->

					<img src="<?php bloginfo('template_url'); ?>/img/runner.png" class="svm-header-bgimg hidden-xs-down" />
				</div>
			</div>
		</div>

		<div class="container svm-carousel">
			<img src="<?php bloginfo('template_url'); ?>/img/header1.jpg" width="24%" />
			<img src="<?php bloginfo('template_url'); ?>/img/header2.jpg" width="24%" />
			<img src="<?php bloginfo('template_url'); ?>/img/header3.jpg" width="24%" />
			<img src="<?php bloginfo('template_url'); ?>/img/header4.jpg" width="24%" />	
		</div>
	</div>

	

	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-toggleable-md  navbar-inverse bg-inverse">
		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

					<!-- Your site title as branding in the menu -->
					<!-- <?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"> <?php bloginfo( 'name' ); ?></a></h1>
							
						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">  <?php bloginfo( 'name' ); ?></a>
						
						<?php endif; ?>
						
					
					<?php } else {
						the_custom_logo();
					} ?> -->
					
					<!-- end custom logo -->

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav svm-menu-item',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Level2_Navwalker(),
					)
				); 

				/*wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav svm-menu-item',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Level22_Navwalker(),
					)
				);*/

				/*wp_nav_menu(
					array(
						"level" => 1,
						"container"         => "nav",
						"container_class"   => "container",
						"container_id"      => "nav",
						"fallback_cb"       => false,
						"menu_class"        => "twelve columns omega main-nav sf-menu",
						"theme_location"    => "primary"
					)
				);

				echo("PAGENAME: " . wp_title(''));

				wp_nav_menu(
					array(
						"level" => 2,
						"child_of" => "Home",
						"container"         => "nav",
						"container_class"   => "container",
						"container_id"      => "nav",
						"fallback_cb"       => false,
						"menu_class"        => "twelve columns omega main-nav sf-menu",
						"theme_location"    => "primary"
					)
				);*/
				
				?>

				<!-- <form style="width: 100%; max-width: 320px; margin: 0" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
					<div class="input-group">
						<input class="field form-control" id="s" name="s" type="text"
							placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap' ); ?>">
						<span class="input-group-btn">
							<input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
							value="<?php esc_attr_e( 'Search', 'understrap' ); ?>">
						</span>
					</div>
				</form> -->

			<?php if ( 'container' == $container ) : ?>

			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
