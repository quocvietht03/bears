<?php
/*
 * Team CPT
 */

function bears_team_register() {

	$cpt_slug = get_theme_mod('bears_team_slug');

	if(isset($cpt_slug) && $cpt_slug != ''){
		$cpt_slug = $cpt_slug;
	} else {
		$cpt_slug = 'team';
	}

	$labels = array(
		'name'               => esc_html__( 'Teams', 'bears' ),
		'singular_name'      => esc_html__( 'Team', 'bears' ),
		'add_new'            => esc_html__( 'Add New', 'bears' ),
		'add_new_item'       => esc_html__( 'Add New Team', 'bears' ),
		'all_items'          => esc_html__( 'All Teams', 'bears' ),
		'edit_item'          => esc_html__( 'Edit Team', 'bears' ),
		'new_item'           => esc_html__( 'Add New Team', 'bears' ),
		'view_item'          => esc_html__( 'View Item', 'bears' ),
		'search_items'       => esc_html__( 'Search Teams', 'bears' ),
		'not_found'          => esc_html__( 'No team(s) found', 'bears' ),
		'not_found_in_trash' => esc_html__( 'No team(s) found in trash', 'bears' )
	);

  $args = array(
		'labels'          => $labels,
		'public'          => true,
		'show_ui'         => true,
		'capability_type' => 'post',
		'hierarchical'    => false,
		'menu_icon'       => 'dashicons-admin-post',
		'rewrite'         => array('slug' => $cpt_slug), // Permalinks format
		'supports'        => array('title', 'editor', 'thumbnail')
  );

  add_filter( 'enter_title_here',  'bears_team_change_default_title');

  register_post_type( 'team' , $args );
}
add_action('init', 'bears_team_register', 1);


function bears_team_taxonomy() {

	register_taxonomy(
		"team_categories",
		array("team"),
		array(
			"hierarchical"   => true,
			"label"          => "Categories",
			"singular_label" => "Category",
			"rewrite"        => true
		)
	);

	register_taxonomy(
        'team_tag',
        'team',
        array(
            'hierarchical'  => false,
            'label'         => __( 'Tags', 'bears' ),
            'singular_name' => __( 'Tag', 'bears' ),
            'rewrite'       => true,
            'query_var'     => true
        )
    );

}
add_action('init', 'bears_team_taxonomy', 1);


function bears_team_change_default_title( $title ) {
	$screen = get_current_screen();

	if ( 'team' == $screen->post_type )
		$title = esc_html__( "Enter the member's name here", 'bears' );

	return $title;
}


function bears_team_edit_columns( $team_columns ) {
	$team_columns = array(
		"cb"                     => "<input type=\"checkbox\" />",
		"title"                  => esc_html__('Title', 'bears'),
		"thumbnail"              => esc_html__('Thumbnail', 'bears'),
		"team_categories" 			 => esc_html__('Categories', 'bears'),
		"date"                   => esc_html__('Date', 'bears'),
	);
	return $team_columns;
}
add_filter( 'manage_edit-team_columns', 'bears_team_edit_columns' );

function bears_team_column_display( $team_columns, $post_id ) {

	switch ( $team_columns ) {

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

		// Display the team tags in the column view
		case "team_categories":

		if ( $category_list = get_the_term_list( $post_id, 'team_categories', '', ', ', '' ) ) {
			echo $category_list; // No need to escape
		} else {
			echo esc_html__('None', 'bears');
		}
		break;
	}
}
add_action( 'manage_team_posts_custom_column', 'bears_team_column_display', 10, 2 );
