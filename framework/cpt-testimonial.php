<?php
/*
 * Testimonial CPT
 */

function bears_testimonial_register() {

	$cpt_slug = get_theme_mod('bears_testimonial_slug');

	if(isset($cpt_slug) && $cpt_slug != ''){
		$cpt_slug = $cpt_slug;
	} else {
		$cpt_slug = 'testimonial';
	}

	$labels = array(
		'name'               => esc_html__( 'Testimonials', 'bears' ),
		'singular_name'      => esc_html__( 'Testimonial', 'bears' ),
		'add_new'            => esc_html__( 'Add New', 'bears' ),
		'add_new_item'       => esc_html__( 'Add New Testimonial', 'bears' ),
		'all_items'          => esc_html__( 'All Testimonials', 'bears' ),
		'edit_item'          => esc_html__( 'Edit Testimonial', 'bears' ),
		'new_item'           => esc_html__( 'Add New Testimonial', 'bears' ),
		'view_item'          => esc_html__( 'View Item', 'bears' ),
		'search_items'       => esc_html__( 'Search Testimonials', 'bears' ),
		'not_found'          => esc_html__( 'No testimonial(s) found', 'bears' ),
		'not_found_in_trash' => esc_html__( 'No testimonial(s) found in trash', 'bears' )
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

  add_filter( 'enter_title_here',  'bears_testimonial_change_default_title');

  register_post_type( 'testimonial' , $args );
}
add_action('init', 'bears_testimonial_register', 1);


function bears_testimonial_taxonomy() {

	register_taxonomy(
		"testimonial_categories",
		array("testimonial"),
		array(
			"hierarchical"   => true,
			"label"          => "Categories",
			"singular_label" => "Category",
			"rewrite"        => true
		)
	);

	register_taxonomy(
        'testimonial_tag',
        'testimonial',
        array(
            'hierarchical'  => false,
            'label'         => __( 'Tags', 'bears' ),
            'singular_name' => __( 'Tag', 'bears' ),
            'rewrite'       => true,
            'query_var'     => true
        )
    );

}
add_action('init', 'bears_testimonial_taxonomy', 1);


function bears_testimonial_change_default_title( $title ) {
	$screen = get_current_screen();

	if ( 'testimonial' == $screen->post_type )
		$title = esc_html__( "Enter the testimonial's name here", 'bears' );

	return $title;
}


function bears_testimonial_edit_columns( $testimonial_columns ) {
	$testimonial_columns = array(
		"cb"                     => "<input type=\"checkbox\" />",
		"title"                  => esc_html__('Title', 'bears'),
		"thumbnail"              => esc_html__('Thumbnail', 'bears'),
		"testimonial_categories" 			 => esc_html__('Categories', 'bears'),
		"date"                   => esc_html__('Date', 'bears'),
	);
	return $testimonial_columns;
}
add_filter( 'manage_edit-testimonial_columns', 'bears_testimonial_edit_columns' );

function bears_testimonial_column_display( $testimonial_columns, $post_id ) {

	switch ( $testimonial_columns ) {

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

		// Display the testimonial tags in the column view
		case "testimonial_categories":

		if ( $category_list = get_the_term_list( $post_id, 'testimonial_categories', '', ', ', '' ) ) {
			echo $category_list; // No need to escape
		} else {
			echo esc_html__('None', 'bears');
		}
		break;
	}
}
add_action( 'manage_testimonial_posts_custom_column', 'bears_testimonial_column_display', 10, 2 );
