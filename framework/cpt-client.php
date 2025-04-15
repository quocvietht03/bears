<?php
/*
 * Client CPT
 */

function bears_client_register() {

	$cpt_slug = get_theme_mod('bears_client_slug');

	if(isset($cpt_slug) && $cpt_slug != ''){
		$cpt_slug = $cpt_slug;
	} else {
		$cpt_slug = 'client';
	}

	$labels = array(
		'name'               => esc_html__( 'Clients', 'bears' ),
		'singular_name'      => esc_html__( 'Client', 'bears' ),
		'add_new'            => esc_html__( 'Add New', 'bears' ),
		'add_new_item'       => esc_html__( 'Add New Client', 'bears' ),
		'all_items'          => esc_html__( 'All Clients', 'bears' ),
		'edit_item'          => esc_html__( 'Edit Client', 'bears' ),
		'new_item'           => esc_html__( 'Add New Client', 'bears' ),
		'view_item'          => esc_html__( 'View Item', 'bears' ),
		'search_items'       => esc_html__( 'Search Clients', 'bears' ),
		'not_found'          => esc_html__( 'No client(s) found', 'bears' ),
		'not_found_in_trash' => esc_html__( 'No client(s) found in trash', 'bears' )
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

  add_filter( 'enter_title_here',  'bears_client_change_default_title');

  register_post_type( 'client' , $args );
}
add_action('init', 'bears_client_register', 1);


function bears_client_taxonomy() {

	register_taxonomy(
		"client_categories",
		array("client"),
		array(
			"hierarchical"   => true,
			"label"          => "Categories",
			"singular_label" => "Category",
			"rewrite"        => true
		)
	);

	register_taxonomy(
        'client_tag',
        'client',
        array(
            'hierarchical'  => false,
            'label'         => __( 'Tags', 'bears' ),
            'singular_name' => __( 'Tag', 'bears' ),
            'rewrite'       => true,
            'query_var'     => true
        )
    );

}
add_action('init', 'bears_client_taxonomy', 1);


function bears_client_change_default_title( $title ) {
	$screen = get_current_screen();

	if ( 'client' == $screen->post_type )
		$title = esc_html__( "Enter the client's name here", 'bears' );

	return $title;
}


function bears_client_edit_columns( $client_columns ) {
	$client_columns = array(
		"cb"                     => "<input type=\"checkbox\" />",
		"title"                  => esc_html__('Title', 'bears'),
		"thumbnail"              => esc_html__('Thumbnail', 'bears'),
		"client_categories" 			 => esc_html__('Categories', 'bears'),
		"date"                   => esc_html__('Date', 'bears'),
	);
	return $client_columns;
}
add_filter( 'manage_edit-client_columns', 'bears_client_edit_columns' );

function bears_client_column_display( $client_columns, $post_id ) {

	switch ( $client_columns ) {

		// Display the thumbnail in the column view
		case "thumbnail":
			$width = (int) 64;
			$height = (int) 64;
			$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );

			// Display the featured image in the column view if possible
			if ( $thumbnail_id ) {
				$thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
				var_dump($thumb);
			}
			if ( isset( $thumb ) ) {
				echo $thumb; // No need to escape
			} else {
				echo esc_html__('None', 'bears');
			}
			break;

		// Display the client tags in the column view
		case "client_categories":

		if ( $category_list = get_the_term_list( $post_id, 'client_categories', '', ', ', '' ) ) {
			echo $category_list; // No need to escape
		} else {
			echo esc_html__('None', 'bears');
		}
		break;
	}
}
add_action( 'manage_client_posts_custom_column', 'bears_client_column_display', 10, 2 );
