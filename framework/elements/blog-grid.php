<?php
class WPBakeryShortCode_bt_blog_grid extends WPBakeryShortCode {
	
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
			'orderby' => 'none',
			'order' => 'none',
			
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
			'bt-blog-grid-element',
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
			'orderby' => $orderby,
			'order' => $order,
			'post_type' => 'post',
			'post_status' => 'publish');
		if (isset($category) && $category != '') {
			$cats = explode(',', $category);
			$taxonomy = array();
			foreach ((array) $cats as $cat){
				$taxonomy[] = trim($cat);
			}
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => $taxonomy
				)
			);
		}
		$wp_query = new WP_Query($args);
		
		wp_enqueue_script('html5lightbox');
		if($layout_type == 'bt-grid-masonry') wp_enqueue_script('isotope');
		
		ob_start();
		if ( $wp_query->have_posts() ) {
		?>
			<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>"  <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
				<div class="row">
					<?php while ( $wp_query->have_posts() ) { $wp_query->the_post(); ?>
						<div <?php echo implode(' ', $item_attributes); ?>>
							<?php
								$media_type = 'multi';
								require get_template_directory().'/framework/elements/blog_layouts/'.$layout.'.php'; 
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
								'total' => $wp_query->max_num_pages,
								'prev_text' => '<i class="fa fa-angle-left"></i>',
								'next_text' => '<i class="fa fa-angle-right"></i>',
							) );
						?>
					</nav>
				<?php } ?>
			</div>
		<?php
		} else {
			echo 'Post not found!';
		}
		wp_reset_query();
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => esc_html__('Blog Grid', 'bears'),
	'base' => 'bt_blog_grid',
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
			'taxonomy' => 'category',
			'heading' => esc_html__( 'Categories', 'bears' ),
			'param_name' => 'category',
			'group' => esc_html__('Data Setting', 'bears'),
			'description' => esc_html__( 'Note: By default, all your projects will be displayed. If you want to narrow output, select category(s) above. Only selected categories will be displayed.', 'bears' )
		),
		array (
			'type' => 'textfield',
			'heading' => esc_html__( 'Count', 'bears' ),
			'param_name' => 'posts_per_page',
			'value' => '10',
			'group' => esc_html__('Data Setting', 'bears'),
			'description' => esc_html__( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', 'bears' )
		),
		array (
			'type' => 'dropdown',
			'heading' => esc_html__( 'Order by', 'bears' ),
			'param_name' => 'orderby',
			'value' => array (
					'None' => 'none',
					'Title' => 'title',
					'Date' => 'date',
					'ID' => 'ID'
			),
			'group' => esc_html__('Data Setting', 'bears'),
			'description' => esc_html__( 'Select order type.', 'bears' )
		),
		array (
			'type' => 'dropdown',
			'heading' => esc_html__( 'Order', 'bears' ),
			'param_name' => 'order',
			'value' => Array (
					'None' => 'none',
					'ASC' => 'ASC',
					'DESC' => 'DESC'
			),
			'group' => esc_html__('Data Setting', 'bears'),
			'description' => esc_html__( 'Select sorting order.', 'bears' )
		),
		array(
			'type' => 'bt_layout',
			'folder' => 'blog',
			'class' => '',
			'heading' => esc_html__('Layout', 'bears'),
			'param_name' => 'layout',
			'value' => array(
				'Default' => 'default',
				'Layout 1' => 'layout1',
				'Layout 2' => 'layout2',
				'Layout 3' => 'layout3',
				'Layout 4' => 'layout4',
				'Layout 5' => 'layout5',
				'Layout 6' => 'layout6',
				'Layout 7' => 'layout7',
				'Layout 8' => 'layout8',
				'Layout 9' => 'layout9',
				'Layout 10' => 'layout10',
				'Layout 11' => 'layout11',
				'Layout 12' => 'layout12'
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
