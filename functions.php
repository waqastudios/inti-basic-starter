<?php
/**
 * Inti Foundation Basic Starter Functions
 *
 * @package Inti
 * @author Waqa Studios
 * @since 1.0.0
 * @copyright Copyright (c) 2015, Waqa Studios
 * @license GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 */


/**
 * Child Theme Setup
 * Modify this function to deactivate features in the parent theme
 *
 * See functions.php in Inti Foundation
 * Remove the comment slashes (//) next to the functions
 * 
 * Remove or add array elements in add_theme_support() as needed
 */
function childtheme_override_setup() {

	/**
	 * Inti features
	 */ 
	add_theme_support(
		'inti-menus',
		array('dropdown-menu', 'off-canvas-menu', 'footer-menu')
	);
	
	add_theme_support(
		'inti-sidebars',
		array('primary', 'frontpage', 'footer')
	);
	
	add_theme_support(
		'inti-layouts',
		array('1c', '2c-l', '2c-r', '1c-thin')
	);
	
	add_theme_support(
		'inti-post-types',
		array('slides')
	);
	
	add_theme_support(
		'inti-page-templates',
		array('front-page')
	);

	add_theme_support('inti-customizer');

	add_theme_support('inti-theme-options');

	add_theme_support('inti-backgrounds');
	
	add_theme_support('inti-fonts');

	add_theme_support('inti-breadcrumbs');
	
	add_theme_support('inti-pagination');
	
	add_theme_support('inti-post-header-meta');
	
	add_theme_support('inti-shortcodes');
	
	add_theme_support('inti-custom-login');
	
	/**
	 * WordPress features
	 */ 
	add_theme_support('menus');
	
	// different post formats for tumblog style posting
	add_theme_support(
		'post-formats',
		array('aside', 'gallery','link', 'image', 'quote', 'status', 'video', 'audio', 'chat')
	);
	
	/**
	 * 3rd Party Supprt
	 */
	add_theme_support( 'woocommerce' );
	
	add_theme_support('post-thumbnails');
	
	add_image_size('thumb-300', 300, 250, true);
	add_image_size('thumb-200', 200, 150, true);
	
	
	// RSS feed links to header.php for posts and comments.
	add_theme_support('automatic-feed-links');
	
	// editor stylesheet for TinyMCE
	add_editor_style('/library/css/editor.css');
		
	// enqueue child styles
	wp_register_style('child-styles', get_stylesheet_directory_uri() . '/css/child-min.css', array(), filemtime(get_stylesheet_directory() . '/css/child-min.css'), 'all');
	wp_enqueue_style('child-styles'); 	

	// enqueue child scripts
	wp_register_script('child-js', get_stylesheet_directory_uri() . '/js/child-min.js', array(), filemtime(get_stylesheet_directory() . '/js/child-min.js'), true);
	wp_enqueue_script('child-js');
}
add_action('after_setup_theme', 'childtheme_override_setup', 11);

/**
 * Add your own custom functions below
 */
 