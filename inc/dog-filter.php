<?php

// array of filters (field key => field name)
$GLOBALS['my_query_filters'] = array(
	'field_1'	=> 'city',
	'field_2'	=> 'bedrooms'
);


// action
add_action('pre_get_posts', 'my_pre_get_posts', 10, 1);

function my_pre_get_posts( $query ) {

	// bail early if is in admin
	if( is_admin() ) return;


	// bail early if not main query
	// - allows custom code / plugins to continue working
	if( !$query->is_main_query() ) return;


	// get meta query
	$meta_query = $query->get('meta_query');


	// loop over filters
	foreach( $GLOBALS['my_query_filters'] as $key => $name ) {

		// continue if not found in url
		if( empty($_GET[ $name ]) ) {

			continue;

		}


		// get the value for this filter
		// eg: http://www.website.com/events?city=melbourne,sydney
		$value = explode(',', $_GET[ $name ]);


		// append meta query
    	$meta_query[] = array(
            'key'		=> $name,
            'value'		=> $value,
            'compare'	=> 'IN',
        );

	}


	// update meta query
	$query->set('meta_query', $meta_query);

}
