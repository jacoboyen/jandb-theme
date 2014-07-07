<?php
	// ----------------------------------------------------------------
	// Remove WordPress stuff that we don't want
	// ----------------------------------------------------------------
	// Headers
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
	remove_action('wp_head', 'start_post_rel_link', 10, 0 );
	remove_action('wp_head', 'rel_canonical');
	
	// ----------------------------------------------------------------
	// Unregister default widgets
	// ----------------------------------------------------------------
	function unregister_default_wp_widgets(){
		unregister_widget('WP_Widget_Pages');
		unregister_widget('WP_Widget_Calendar');
		unregister_widget('WP_Widget_Archives');
		unregister_widget('WP_Widget_Meta');
		unregister_widget('WP_Widget_Search');
		unregister_widget('WP_Widget_Categories');
		unregister_widget('WP_Widget_Recent_Posts');
		unregister_widget('WP_Widget_Recent_Comments');
		unregister_widget('WP_Widget_RSS');
		unregister_widget('WP_Widget_Tag_Cloud');
	}
	add_action('widgets_init', 'unregister_default_wp_widgets', 1);

	// ----------------------------------------------------------------
	// Add post thumbnail features
	// ----------------------------------------------------------------
	add_theme_support('post-thumbnails');
	if (function_exists('add_image_size')){
		add_image_size('mobile-featured', 400);
		add_image_size('desktop-featured', 1024, 300, array('left', 'center'));
	}
	// ----------------------------------------------------------------
	// Add custom header image
	// ----------------------------------------------------------------
	$header_args = array(
		'width' => 1024,
		'height' => 300,
		'uploads' => true,
		'header-text' => false
	);
	add_theme_support('custom-header',$header_args);

	// ----------------------------------------------------------------
	// Add menu functionality to template
	// ----------------------------------------------------------------
	function register_top_menu() {
	  register_nav_menu('top-menu',__( 'Top Menu' ));
	}
	add_action( 'init', 'register_top_menu' );	
	
	//add_action('wp_head', 'show_template');
	//function show_template() {
	//	global $template;
	//   print_r($template);
	//}
?>