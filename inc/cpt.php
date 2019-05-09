<?php function cptui_register_my_cpts() {

/**
 * Post Type: information items.
 */

$labels = array(
	"name" => __( "information items", "understrap" ),
	"singular_name" => __( "information item", "understrap" ),
);

$args = array(
	"label" => __( "information items", "understrap" ),
	"labels" => $labels,
	"description" => "use this to edit the information posts displayed on the front page",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"delete_with_user" => false,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"has_archive" => true,
	"show_in_menu" => true,
	"show_in_nav_menus" => false,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"rewrite" => array( "slug" => "information", "with_front" => true ),
	"query_var" => true,
	"supports" => array( "title", "editor", "thumbnail" ),
	"taxonomies" => array( "sos_size", "sos_location" ),
);

register_post_type( "sos_information", $args );

/**
 * Post Type: dogs.
 */

$labels = array(
	"name" => __( "dogs", "understrap" ),
	"singular_name" => __( "dog", "understrap" ),
);

$args = array(
	"label" => __( "dogs", "understrap" ),
	"labels" => $labels,
	"description" => "add dogs here",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"delete_with_user" => false,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"has_archive" => "dogs",
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => true,
	"rewrite" => array( "slug" => "dog", "with_front" => true ),
	"query_var" => true,
	"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
	"taxonomies" => array( "category", "sos_size", "sos_location" ),
);

register_post_type( "sos_dogs", $args );

/**
 * Post Type: success stories.
 */

$labels = array(
	"name" => __( "success stories", "understrap" ),
	"singular_name" => __( "success story", "understrap" ),
);

$args = array(
	"label" => __( "success stories", "understrap" ),
	"labels" => $labels,
	"description" => "shows satisfied \"customers\" reviews",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"delete_with_user" => false,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"has_archive" => false,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"rewrite" => array( "slug" => "success-stories", "with_front" => true ),
	"query_var" => true,
	"supports" => array( "title", "editor", "thumbnail" ),
);

register_post_type( "sos_success", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
