<?php

/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!-- Avoid linking CSS and JS here. Add to functions -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<!-- #masthead -->
		<header id="masthead" class="<?php
										if (is_page('about') || is_page('front-page')) {
											echo 'site-header';
										} else {
											echo 'reverse-header';
										}
										?>" role="banner">
			<div class="site-header-container">

				<!-- (1).site-branding -->
				<div class="site-branding">
					<div class="logo">
						<!-- ADD INHAITENT LOGO -->
						<a href="<?php echo home_url() ?>">
							<img src=" <?php
										if (is_page('about') || is_page('front-page')) {
											echo "../inhabitent/images/logos/inhabitent-logo-tent-white.svg";
										} else {
											echo "../inhabitent/images/logos/inhabitent-logo-tent.svg";
										};
										?> " alt="logo">
						</a>
					</div>
				</div>

				<!-- (2).main-navigation -->
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="navigation-bar">
						<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
					</div>


				</nav>
				<div class="header-search-bar">
					<?php get_search_form() ?>
				</div>
			</div>
		</header>

		<!-- Starting Division of Site Content -->
		<div id="content" class="site-content for-404">