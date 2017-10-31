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
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-dark">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="<?php print get_bloginfo("template_url");?>/img/lvshlogo.png" class="topLogo" /></a>
						
						<?php endif; ?>

					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>

                <form method="get" id="searchform" action="http://localhost/" role="search">

                    <div class="input-group">
                        <input class="field form-control" id="s" name="s" type="text" placeholder="Search …">
                        <span class="input-group-btn input-group-sm">
			<input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit" value="Search">
	</span>
                    </div>
                </form>

                <a class="socialIcons" href="https://www.facebook.com/LarryVsHarryCargobikes" title="Join Larry vs Harry on Facebook" alt="Ikke-navngivet-1"><img src="http://larryvsharry.com/wp-content/uploads/2015/09/Ikke-navngivet-1.png"></a>
                <a class="socialIcons" href="https://www.instagram.com/larryvsharry/" title="Follow Larry vs Harry on Instagram" alt="Ikke-navngivet-2"><img src="http://larryvsharry.com/wp-content/uploads/2015/09/Ikke-navngivet-2.png"></a>
                <a class="socialIcons" href="https://www.flickr.com/groups/larryvsharry" title="See Larry vs Harry on Flickr" alt="Ikke-navngivet-4"><img src="http://larryvsharry.com/wp-content/uploads/2015/09/Ikke-navngivet-4.png"></a>
                <a href="https://twitter.com/larryvsharry" title="Chekout Larry vs Harry on Twitter" alt="Ikke-navngivet-3"><img src="http://larryvsharry.com/wp-content/uploads/2015/09/Ikke-navngivet-3.png"></a>
           <a href="#" ><i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i></a>
            </div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
