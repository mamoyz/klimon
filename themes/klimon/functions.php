<?php

function my_init() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}
add_action('init', 'my_init');


function mandomo_scripts()
{
    /* ----------- Stylesheets --------------- */
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.min.css');
    wp_enqueue_style('swiper-style','https://unpkg.com/swiper/swiper-bundle.min.css');

    /* ----------- Stylesheets --------------- */

    /* ----------- Javascripts --------------- */
    wp_enqueue_script('jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, false);
    wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
    // wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array(), null, true);
    /* ----------- Javascripts --------------- */
}
add_action('wp_enqueue_scripts', 'mandomo_scripts');		
// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'nav-menu' => __( 'Primary Nav Menu', 'klimon' ),
		'flavors-menu' => __( 'Flavors Menu', 'klimon' ),
		'footer-menu' => __( 'Footer Menu', 'klimon' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );

// Register Custom Post Type
function flavors_post_type() {

	$labels = array(
		'name'                  => _x( 'Flavors', 'Post Type General Name', 'klimon' ),
		'singular_name'         => _x( 'Flavor', 'Post Type Singular Name', 'klimon' ),
		'menu_name'             => __( 'Flavors', 'klimon' ),
		'name_admin_bar'        => __( 'Flavor', 'klimon' ),
		'archives'              => __( 'Item Archives', 'klimon' ),
		'attributes'            => __( 'Item Attributes', 'klimon' ),
		'parent_item_colon'     => __( 'Parent Item:', 'klimon' ),
		'all_items'             => __( 'All Items', 'klimon' ),
		'add_new_item'          => __( 'Add New Item', 'klimon' ),
		'add_new'               => __( 'Add New', 'klimon' ),
		'new_item'              => __( 'New Item', 'klimon' ),
		'edit_item'             => __( 'Edit Item', 'klimon' ),
		'update_item'           => __( 'Update Item', 'klimon' ),
		'view_item'             => __( 'View Item', 'klimon' ),
		'view_items'            => __( 'View Items', 'klimon' ),
		'search_items'          => __( 'Search Item', 'klimon' ),
		'not_found'             => __( 'Not found', 'klimon' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'klimon' ),
		'featured_image'        => __( 'Featured Image', 'klimon' ),
		'set_featured_image'    => __( 'Set featured image', 'klimon' ),
		'remove_featured_image' => __( 'Remove featured image', 'klimon' ),
		'use_featured_image'    => __( 'Use as featured image', 'klimon' ),
		'insert_into_item'      => __( 'Insert into item', 'klimon' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'klimon' ),
		'items_list'            => __( 'Items list', 'klimon' ),
		'items_list_navigation' => __( 'Items list navigation', 'klimon' ),
		'filter_items_list'     => __( 'Filter items list', 'klimon' ),
	);
	$args = array(
		'label'                 => __( 'Flavor', 'klimon' ),
		'description'           => __( 'Flavors', 'klimon' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'flavors', $args );

}
add_action( 'init', 'flavors_post_type', 0 );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

// Remove auto p from Contact Form 7 shortcode output
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
} 