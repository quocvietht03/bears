<?php
class WPBakeryShortCode_bt_events_grid extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'layout_type' => 'bt-grid-auto',
			'columns' =>  '',
			'space' =>  30,
			'show_pagination' => 0,
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'category' => '',
			'posts_per_page' => 10,
			'eventdisplay' => 'custom',
			'start_date' => '',
			'end_date' => '',
			'venue' => '',
			'organizer' => '',
			
			'layout' => 'default',
			'img_size' => '',
			'excerpt_limit' => 20,
			'excerpt_more' => '.',
			'readmore_text' => esc_html__('Read More', 'bears'),
			
			'columns_md' => '',
			'columns_sm' => '',
			'columns_xs' => '',
			
			'css' => ''
			
		), $atts));
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-events-grid-element',
			$layout_type,
			$layout,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		/* Space */
		$item_style = array();
		$item_style[] = 'padding-left: '.($space/2).'px;';
		$item_style[] = 'padding-right: '.($space/2).'px;';
		$item_style[] = 'margin-bottom: '.$space.'px;';
		
		$item_attributes = array();
		if ( ! empty( $item_style ) ) {
			$item_attributes[] = 'style="' . esc_attr( implode(' ', $item_style) ) . '"';
		}
		
		/* Columns */
		$column_class = array();
		$column_class[] = (!empty($columns)) ? $columns: 'col-lg-3';
		if($columns != 'col-lg-12'){
			$column_class[] = (!empty($columns_md)) ? $columns_md : 'col-md-4';
			$column_class[] = (!empty($columns_sm)) ? $columns_sm : 'col-sm-6';
			$column_class[] = (!empty($columns_xs)) ? $columns_xs : 'col-xs-12';
		}
		
		if ( ! empty( $column_class ) ) {
			$item_attributes[] = 'class="' . esc_attr( implode(' ', $column_class) ) . '"';
		}
		
		/* Query */
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
		
		$args = array(
			'posts_per_page' => $posts_per_page,
			'paged' => $paged,
			'eventDisplay' => $eventdisplay,
			'start_date' => $start_date,
			'end_date'   => $end_date,
			'venue'   => $venue,
			'organizer'   => $organizer
		);
		if (isset($category) && $category != '') {
			$cats = explode(',', $category);
			$taxonomy = array();
			foreach ((array) $cats as $cat){
				$taxonomy[] = trim($cat);
			}
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'tribe_events_cat',
					'field' => 'slug',
					'terms' => $taxonomy
				)
			);
		}
		
		$events = tribe_get_events($args);
		
		//get max num page
		$args['posts_per_page'] = -1;
		$max_num_page = ceil(count(tribe_get_events($args))/$posts_per_page);
		
		wp_enqueue_script('html5lightbox');
		if($layout_type == 'bt-grid-masonry') wp_enqueue_script('isotope');
		
		ob_start();
		if ( !empty( $events ) ) {
		?>
			<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>"  <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
				<div class="row">
					<?php foreach( $events as $event ) { ?>
						<div <?php echo implode(' ', $item_attributes); ?>>
							<?php
								require get_template_directory().'/framework/elements/events_layouts/'.$layout.'.php'; 
							?>
						</div>
					<?php } ?>
				</div>
				<?php if ($show_pagination) { ?>
					<nav class="bt-pagination" role="navigation">
						<?php
							$big = 999999999; // need an unlikely integer
							
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' => $max_num_page,
								'prev_text' => '<i class="fa fa-angle-left"></i>',
								'next_text' => '<i class="fa fa-angle-right"></i>',
							) );
						?>
					</nav>
				<?php } ?>
			</div>
		<?php
		} else {
			esc_html_e('Post not found!', 'bears');
		}
		wp_reset_query();
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => esc_html__('Events Grid', 'bears'),
	'base' => 'bt_events_grid',
	'category' => esc_html__('BT Elements', 'bears'),
	'icon' => 'bt-icon',
	'params' => array(
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => esc_html__('Layout', 'bears'),
			'param_name' => 'layout_type',
			'value' => array(
				'Auto' => 'bt-grid-auto',
				'Fixed Row' => 'bt-grid-fixed',
				'Masonry' => 'bt-grid-masonry'
			),
			'admin_label' => true,
			'description' => esc_html__('Select layout display in this element.', 'bears')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => esc_html__('Columns', 'bears'),
			'param_name' => 'columns',
			'value' => array(
				'4 Columns' => 'col-lg-3',
				'3 Columns' => 'col-lg-4',
				'2 Columns' => 'col-lg-6',
				'1 Column' => 'col-lg-12'
			),
			'description' => esc_html__('Select columns display in this element.', 'bears')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__('Item Space', 'bears'),
			'param_name' => 'space',
			'value' => 30,
			'description' => esc_html__( 'Please, enter number space in this element.', 'bears' )
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => esc_html__('Show Pagination', 'bears'),
			'param_name' => 'show_pagination',
			'value' => '',
			'description' => esc_html__('Show or not pagination in this element.', 'bears')
		),
		vc_map_add_css_animation(),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__('Element ID', 'bears'),
			'param_name' => 'el_id',
			'value' => '',
			'description' => esc_html__( 'Enter element ID (Note: make sure it is unique and valid).', 'bears' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__('Extra Class', 'bears'),
			'param_name' => 'el_class',
			'value' => '',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'bears' )
		),
		array (
			'type' => 'bt_taxonomy',
			'taxonomy' => 'tribe_events_cat',
			'heading' => esc_html__( 'Categories', 'bears' ),
			'param_name' => 'category',
			'group' => esc_html__('Data Setting', 'bears'),
			'description' => esc_html__( 'Note: By default, all your projects will be displayed. If you want to narrow output, select category(s) above. Only selected categories will be displayed.', 'bears' )
		),
		array (
			'type' => 'textfield',
			'heading' => esc_html__( 'Count', 'bears' ),
			'param_name' => 'posts_per_page',
			'value' => 10,
			'group' => esc_html__('Data Setting', 'bears'),
			'description' => esc_html__( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', 'bears' )
		),
		array (
			'type' => 'dropdown',
			'heading' => esc_html__( 'Event Display', 'bears' ),
			'param_name' => 'eventdisplay',
			'value' => Array (
					'All' => 'custom',
					'Past' => 'past',
					'Upcoming' => 'upcoming'
			),
			'group' => esc_html__('Data Setting', 'bears'),
			'description' => esc_html__( 'Select event display.', 'bears' )
		),
		array (
			'type' => 'textfield',
			'heading' => esc_html__( 'Start Date', 'bears' ),
			'param_name' => 'start_date',
			'value' => '',
			'group' => esc_html__('Data Setting', 'bears'),
			'description' => esc_html__( 'Minimum start date of the Event. Ex: 2018-04-17 00:00', 'bears' )
		),
		array (
			'type' => 'textfield',
			'heading' => esc_html__( 'End Date', 'bears' ),
			'param_name' => 'end_date',
			'value' => '',
			'group' => esc_html__('Data Setting', 'bears'),
			'description' => esc_html__( 'Maximum end date of the Event. Ex: 2018-04-20 00:00', 'bears' )
		),
		array (
			'type' => 'textfield',
			'heading' => esc_html__( 'Venue', 'bears' ),
			'param_name' => 'venue',
			'value' => '',
			'group' => esc_html__('Data Setting', 'bears'),
			'description' => esc_html__( 'Enter Venue ID to Show events from a specific Venue. Ex: 107', 'bears' )
		),
		array (
			'type' => 'textfield',
			'heading' => esc_html__( 'Organizer', 'bears' ),
			'param_name' => 'organizer',
			'value' => '',
			'group' => esc_html__('Data Setting', 'bears'),
			'description' => esc_html__( 'Enter Organizer ID to Show events from a specific Organizer. Ex: 108', 'bears' )
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => esc_html__('Layout', 'bears'),
			'param_name' => 'layout',
			'value' => array(
				'Default' => 'default',
				'Layout 1' => 'layout1'
			),
			'admin_label' => true,
			'group' => esc_html__('Item Setting', 'bears'),
			'description' => esc_html__('Select layout of items display in this element.', 'bears')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Image size', 'bears' ),
			'param_name' => 'img_size',
			'value' => 'full',
			'group' => esc_html__('Item Setting', 'bears'),
			'description' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'bears' ),
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__('Excerpt Limit', 'bears'),
			'param_name' => 'excerpt_limit',
			'value' => 20,
			'group' => esc_html__('Item Setting', 'bears'),
			'description' => esc_html__('Please, Enter number excerpt limit of post in this element.', 'bears')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__('Excerpt More', 'bears'),
			'param_name' => 'excerpt_more',
			'value' => '.',
			'group' => esc_html__('Item Setting', 'bears'),
			'description' => esc_html__('Please, Enter text excerpt more of post in this element.', 'bears')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__('Readmore Text', 'bears'),
			'param_name' => 'readmore_text',
			'value' => 'Read More',
			'group' => esc_html__('Item Setting', 'bears'),
			'description' => esc_html__('Please, Enter text of label button readmore in this element.', 'bears')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => esc_html__('Columns Medium Screen', 'bears'),
			'param_name' => 'columns_md',
			'value' => array(
				'Auto' => '',
				'4 Columns' => 'col-md-3',
				'3 Columns' => 'col-md-4',
				'2 Columns' => 'col-md-6',
				'1 Column' => 'col-md-12'
			),
			'group' => esc_html__('Responsive', 'bears'),
			'description' => esc_html__('Select columns display in this element (Screen width >=992px and <1199px).', 'bears')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => esc_html__('Columns Small Screen', 'bears'),
			'param_name' => 'columns_sm',
			'value' => array(
				'Auto' => '',
				'4 Columns' => 'col-sm-3',
				'3 Columns' => 'col-sm-4',
				'2 Columns' => 'col-sm-6',
				'1 Column' => 'col-sm-12'
			),
			'group' => esc_html__('Responsive', 'bears'),
			'description' => esc_html__('Select columns display in this element (Screen width >=768px and <992px).', 'bears')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => esc_html__('Columns Extra Screen', 'bears'),
			'param_name' => 'columns_xs',
			'value' => array(
				'Auto' => '',
				'4 Columns' => 'col-xs-3',
				'3 Columns' => 'col-xs-4',
				'2 Columns' => 'col-xs-6',
				'1 Column' => 'col-xs-12'
			),
			'group' => esc_html__('Responsive', 'bears'),
			'description' => esc_html__('Select columns display in this element (Screen <768px).', 'bears')
		),
		
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'CSS box', 'bears' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design Options', 'bears' ),
		)
	)
));
