<?php

/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes($classes)
{
	// Adds a class of group-blog to blogs with more than 1 published author.
	if (is_multi_author()) {
		$classes[] = 'group-blog';
	}

	// Quick Debug - Class
	// inhabitent_debug($classes);

	if (is_singular('page')) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	// Quick Debug - Class
	// inhabitent_debug($classes);
	return $classes;
}
add_filter('body_class', 'red_starter_body_classes');

function inhabitent_debug($var)
{
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
}

// Login Head

function inhabitent_logo()
{
	echo '<style type="text/css">                                                                   
		#login h1 a { background-image:url(' . get_stylesheet_directory_uri() . '/images/logos/inhabitent-logo-text-dark.svg); 
		height: 53px; width: 300px; background-size: cover; }                            
	</style>';
}
add_action('login_head', 'inhabitent_logo');

// Login URL

function the_url($url)
{
	return get_bloginfo('url');
}

add_filter('login_headerurl', 'the_url');
