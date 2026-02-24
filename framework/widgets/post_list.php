<?php
class bears_Post_List_Widget extends bears_Widget {
	function __construct() {
		parent::__construct(
			'bears_post_list', // Base ID
			esc_html__('Post List', 'bears'), // Name
			array('description' => esc_html__('Display a list of your posts on your site.', 'bears'),) // Args
        );
		
		$this->settings           = array(
			'title'  => array(
				'type'  => 'text',
				'std'   => esc_html__( 'Post List', 'bears' ),
				'label' => esc_html__( 'Title', 'bears' )
			),
			'category' => array(
				'type'   => 'bears_taxonomy',
				'std'    => '',
				'label'  => esc_html__( 'Categories', 'bears' ),
			),
			'posts_per_page' => array(
				'type'  => 'number',
				'step'  => 1,
				'min'   => 1,
				'max'   => '',
				'std'   => 3,
				'label' => esc_html__( 'Number of posts to show', 'bears' )
			),
			'orderby' => array(
				'type'  => 'select',
				'std'   => 'none',
				'label' => esc_html__( 'Order by', 'bears' ),
				'options' => array(
					'none'   => esc_html__( 'None', 'bears' ),
					'comment_count'  => esc_html__( 'Comment Count', 'bears' ),
					'title'  => esc_html__( 'Title', 'bears' ),
					'date'   => esc_html__( 'Date', 'bears' ),
					'ID'  => esc_html__( 'ID', 'bears' ),
				)
			),
			'order' => array(
				'type'  => 'select',
				'std'   => 'none',
				'label' => esc_html__( 'Order', 'bears' ),
				'options' => array(
					'none'  => esc_html__( 'None', 'bears' ),
					'asc'  => esc_html__( 'ASC', 'bears' ),
					'desc' => esc_html__( 'DESC', 'bears' ),
				)
			),
			'layout' => array(
				'type'  => 'select',
				'std'   => 'none',
				'label' => esc_html__( 'Layout', 'bears' ),
				'options' => array(
					'default'  => esc_html__( 'Default', 'bears' ),
					'layout1'  => esc_html__( 'Layout 1', 'bears' )
				)
			),
			'el_class'  => array(
				'type'  => 'text',
				'std'   => '',
				'label' => esc_html__( 'Extra Class', 'bears' )
			)
		);
		add_action('admin_enqueue_scripts', array($this, 'widget_scripts'));
	}
        
	function widget_scripts() {
		wp_enqueue_script('widget_scripts', get_template_directory_uri() . '/framework/widgets/widgets.js');
	}

	function widget( $args, $instance ) {
		global $post;
		extract( $args );
                
		$title                  = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base );
		$category               = isset($instance['category'])? $instance['category'] : '';
		$posts_per_page         = absint( $instance['posts_per_page'] );
		$orderby                = sanitize_title( $instance['orderby'] );
		$order                  = sanitize_title( $instance['order'] );
		$layout                 = sanitize_title( $instance['layout'] );
		$el_class               = sanitize_title( $instance['el_class'] );
        
		$el_class .= $layout;
		
		// no 'class' attribute - add one with the value of width
        if (strpos($before_widget, 'class') === false) {
            $before_widget = str_replace('>', 'class="' . esc_attr($el_class) . '"', $before_widget);
        }
        // there is 'class' attribute - append width value to it
        else {
            $before_widget = str_replace('class="', 'class="' . esc_attr($el_class) . ' ', $before_widget);
        }
		
		$query_args = array(
			'posts_per_page' => $posts_per_page,
			'orderby' => $orderby,
			'order' => $order,
			'post_type' => 'post',
			'post_status' => 'publish');
		if (isset($category) && $category != '') {
			$cats = explode(',', $category);
			$category = array();
			foreach ((array) $cats as $cat) :
			$category[] = trim($cat);
			endforeach;
			$query_args['tax_query'] = array(
									array(
										'taxonomy' => 'category',
										'field' => 'id',
										'terms' => $category
									)
							);
		}
		
		$wp_query = new WP_Query($query_args);                
		
		
		ob_start();
		echo apply_filters('bt_before_widget_filter', $before_widget);
		
		if ( $title )
				echo ''.$before_title . $title . $after_title;
		
		if ($wp_query->have_posts()){
			?>
				<ul class="bt-post-list">
					<?php while ($wp_query->have_posts()){ $wp_query->the_post(); ?>
						<li>
							<?php require get_template_directory().'/framework/widgets/post_list/'.$layout.'.php'; ?>
						</li>
					<?php } ?>
				</ul>
			<?php 
		}
		wp_reset_postdata();
		echo apply_filters('bt_after_widget_filter', $after_widget);
		echo ob_get_clean();
		
	}
}
/* Class bears_Post_List_Widget */
function bears_post_list_widget() {
    register_widget('bears_Post_List_Widget');
}

add_action('widgets_init', 'bears_post_list_widget');
