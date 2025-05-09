<?php
/*
 * Pricing CPT
 */

function bears_pricing_register() {

	$cpt_slug = get_theme_mod('bears_pricing_slug');

	if(isset($cpt_slug) && $cpt_slug != ''){
		$cpt_slug = $cpt_slug;
	} else {
		$cpt_slug = 'pricing';
	}

	$labels = array(
		'name'               => esc_html__( 'Pricings', 'bears' ),
		'singular_name'      => esc_html__( 'Pricing', 'bears' ),
		'add_new'            => esc_html__( 'Add New', 'bears' ),
		'add_new_item'       => esc_html__( 'Add New Pricing', 'bears' ),
		'all_items'          => esc_html__( 'All Pricings', 'bears' ),
		'edit_item'          => esc_html__( 'Edit Pricing', 'bears' ),
		'new_item'           => esc_html__( 'Add New Pricing', 'bears' ),
		'view_item'          => esc_html__( 'View Item', 'bears' ),
		'search_items'       => esc_html__( 'Search Pricings', 'bears' ),
		'not_found'          => esc_html__( 'No pricing(s) found', 'bears' ),
		'not_found_in_trash' => esc_html__( 'No pricing(s) found in trash', 'bears' )
	);

  $args = array(
		'labels'          => $labels,
		'public'          => true,
		'show_ui'         => true,
		'capability_type' => 'post',
    'publicly_queryable' => false,
		'hierarchical'    => false,
		'menu_icon'       => 'dashicons-admin-post',
		'rewrite'         => array('slug' => $cpt_slug), // Permalinks format
		'supports'        => array('title', 'thumbnail')
  );

  add_filter( 'enter_title_here',  'bears_pricing_change_default_title');

  register_post_type( 'pricing' , $args );
}
add_action('init', 'bears_pricing_register', 1);


function bears_pricing_taxonomy() {

	register_taxonomy(
		"pricing_categories",
		array("pricing"),
		array(
			"hierarchical"   => true,
			"label"          => "Categories",
			"singular_label" => "Category",
			"rewrite"        => true
		)
	);

	register_taxonomy(
        'pricing_tag',
        'pricing',
        array(
            'hierarchical'  => false,
            'label'         => __( 'Tags', 'bears' ),
            'singular_name' => __( 'Tag', 'bears' ),
            'rewrite'       => true,
            'query_var'     => true
        )
    );

}
add_action('init', 'bears_pricing_taxonomy', 1);


function bears_pricing_change_default_title( $title ) {
	$screen = get_current_screen();

	if ( 'pricing' == $screen->post_type )
		$title = esc_html__( "Enter the pricing's name here", 'bears' );

	return $title;
}


function bears_pricing_edit_columns( $pricing_columns ) {
	$pricing_columns = array(
		"cb"                     => "<input type=\"checkbox\" />",
		"title"                  => esc_html__('Title', 'bears'),
		"thumbnail"              => esc_html__('Thumbnail', 'bears'),
		"pricing_categories" 			 => esc_html__('Categories', 'bears'),
		"date"                   => esc_html__('Date', 'bears'),
	);
	return $pricing_columns;
}
add_filter( 'manage_edit-pricing_columns', 'bears_pricing_edit_columns' );

function bears_pricing_column_display( $pricing_columns, $post_id ) {

	switch ( $pricing_columns ) {

		// Display the thumbnail in the column view
		case "thumbnail":
			$width = (int) 64;
			$height = (int) 64;
			$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );

			// Display the featured image in the column view if possible
			if ( $thumbnail_id ) {
				$thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
			}
			if ( isset( $thumb ) ) {
				echo $thumb; // No need to escape
			} else {
				echo esc_html__('None', 'bears');
			}
			break;

		// Display the pricing tags in the column view
		case "pricing_categories":

		if ( $category_list = get_the_term_list( $post_id, 'pricing_categories', '', ', ', '' ) ) {
			echo $category_list; // No need to escape
		} else {
			echo esc_html__('None', 'bears');
		}
		break;
	}
}
add_action( 'manage_pricing_posts_custom_column', 'bears_pricing_column_display', 10, 2 );
