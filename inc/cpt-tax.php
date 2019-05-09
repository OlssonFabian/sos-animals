<?php function cptui_register_my_taxes() {

/**
 * Taxonomy: sizes.
 */

$labels = array(
	"name" => __( "sizes", "understrap" ),
	"singular_name" => __( "size", "understrap" ),
	"menu_name" => __( "Size", "understrap" ),
);

$args = array(
	"label" => __( "sizes", "understrap" ),
	"labels" => $labels,
	"public" => true,
	"publicly_queryable" => true,
	"hierarchical" => true,
	"show_ui" => true,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"query_var" => true,
	"rewrite" => array( 'slug' => 'sizes', 'with_front' => true,  'hierarchical' => true, ),
	"show_admin_column" => false,
	"show_in_rest" => true,
	"rest_base" => "sos_size",
	"rest_controller_class" => "WP_REST_Terms_Controller",
	"show_in_quick_edit" => true,
	);
register_taxonomy( "sos_size", array( "sos_dogs" ), $args );

/**
 * Taxonomy: locations.
 */

$labels = array(
	"name" => __( "locations", "understrap" ),
	"singular_name" => __( "location", "understrap" ),
);

$args = array(
	"label" => __( "locations", "understrap" ),
	"labels" => $labels,
	"public" => true,
	"publicly_queryable" => true,
	"hierarchical" => true,
	"show_ui" => true,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"query_var" => true,
	"rewrite" => array( 'slug' => 'location', 'with_front' => true, ),
	"show_admin_column" => false,
	"show_in_rest" => true,
	"rest_base" => "sos_location",
	"rest_controller_class" => "WP_REST_Terms_Controller",
	"show_in_quick_edit" => false,
	);
register_taxonomy( "sos_location", array( "sos_dogs" ), $args );

/**
 * Taxonomy: adopted dogs.
 */

$labels = array(
	"name" => __( "adopted dogs", "understrap" ),
	"singular_name" => __( "adopted dog", "understrap" ),
);

$args = array(
	"label" => __( "adopted dogs", "understrap" ),
	"labels" => $labels,
	"public" => true,
	"publicly_queryable" => true,
	"hierarchical" => true,
	"show_ui" => true,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"query_var" => true,
	"rewrite" => array( 'slug' => 'adopted', 'with_front' => true, ),
	"show_admin_column" => false,
	"show_in_rest" => true,
	"rest_base" => "sos_adopted",
	"rest_controller_class" => "WP_REST_Terms_Controller",
	"show_in_quick_edit" => false,
	);
register_taxonomy( "sos_adopted", array( "sos_dogs" ), $args );

/**
 * Taxonomy: genders.
 */

$labels = array(
	"name" => __( "genders", "understrap" ),
	"singular_name" => __( "gender", "understrap" ),
);

$args = array(
	"label" => __( "genders", "understrap" ),
	"labels" => $labels,
	"public" => true,
	"publicly_queryable" => true,
	"hierarchical" => true,
	"show_ui" => true,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"query_var" => true,
	"rewrite" => array( 'slug' => 'gender', 'with_front' => true, ),
	"show_admin_column" => false,
	"show_in_rest" => true,
	"rest_base" => "sos_gender",
	"rest_controller_class" => "WP_REST_Terms_Controller",
	"show_in_quick_edit" => false,
	);
register_taxonomy( "sos_gender", array( "sos_dogs" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
