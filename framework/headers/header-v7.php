<?php 
	global $bears_options;
	$page_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'page_options'):array();
	
	$container_class = (isset($bears_options['h7_fullwidth'])&&$bears_options['h7_fullwidth'])?'fullwidth':'container';
	if(isset($page_options['header_fullwidth'])&&$page_options['header_fullwidth']){ $container_class = 'container'; }
	
	$header_class = 'bt-header bt-header-v7';
	
	if(isset($bears_options['h7_header_bottom_absolute'])&&$bears_options['h7_header_bottom_absolute']){
		$header_class .= ' bt-absolute';
	}
	
	$menu_assign = isset($bears_options['h7_menu_assign'])&&($bears_options['h7_menu_assign'] != 'auto')?$bears_options['h7_menu_assign']:'';
	if(isset($page_options['header_menu_assign'])&&$page_options['header_menu_assign'] != 'auto'){ $menu_assign = $page_options['header_menu_assign']; }
	
	$header_stick = (isset($bears_options['h7_header_stick'])&&$bears_options['h7_header_stick'])?$bears_options['h7_header_stick']:'';
	if(isset($page_options['header_stick'])&&$page_options['header_stick']){ $header_stick = ''; }
	if($header_stick){
		$header_class .= ' bt-stick';
	}
	
?>
<header id="bt_header" class="<?php echo esc_attr($header_class); ?>">
	<div class="bt-header-desktop">
		<div class="bt-subheader bt-bottom">
			<div class="bt-subheader-inner <?php echo esc_attr($container_class); ?>">
				<?php if(isset($bears_options['h7_menu_content_left'])&&$bears_options['h7_menu_content_left']&&isset($bears_options['h7_menu_content_left_element'])&&$bears_options['h7_menu_content_left_element']){ ?>
					<div class="bt-subheader-cell bt-left-before">
						<div class="bt-content text-left">
							<?php
								echo '<div class="bt-menu-content-left">';
									foreach($bears_options['h7_menu_content_left_element'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								echo '</div>';
							?>
						</div>
					</div>
				<?php } ?>
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<?php
							$logo = isset($bears_options['h7_logo']['url'])?$bears_options['h7_logo']['url']:'';
							if(isset($page_options['header_logo']['url'])&&$page_options['header_logo']['url']){
								$logo = $page_options['header_logo']['url'];
							}
							
							$logo_height = (isset($bears_options['h7_logo_height'])&&$bears_options['h7_logo_height'])?$bears_options['h7_logo_height']:'40';
							if(isset($page_options['header_logo_height'])&&$page_options['header_logo_height']){
								$logo_height = $page_options['header_logo_height'];
							}
							
							bears_logo($logo, $logo_height); 
							
							if(isset($bears_options['h7_menu_align'])&&$bears_options['h7_menu_align']=='left') {
								bears_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
							}
						?>
					</div>
				</div>
				<div class="bt-subheader-cell bt-right">
					<div class="bt-content text-right">
						<?php
							if(isset($bears_options['h7_menu_align'])&&$bears_options['h7_menu_align']=='right'||!isset($bears_options['h7_menu_align'])) {
								bears_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
							}
							
							if(isset($bears_options['h7_menu_canvas'])&&$bears_options['h7_menu_canvas']){
								echo '<a href="#" class="bt-menu-canvas-toggle"><i class="fa fa-bars"></i></a>';
							}
						?>
					</div>
				</div>
				<?php if(isset($bears_options['h7_menu_content_right'])&&$bears_options['h7_menu_content_right']&&isset($bears_options['h7_menu_content_right_element'])&&$bears_options['h7_menu_content_right_element']){ ?>
					<div class="bt-subheader-cell bt-right-after">
						<div class="bt-content text-right">
							<?php
								echo '<div class="bt-menu-content-right">';
									foreach($bears_options['h7_menu_content_right_element'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								echo '</div>';
							?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>

	</div>
	
	<div class="bt-header-stick">
		<div class="bt-subheader">
			<div class="bt-subheader-inner <?php echo esc_attr($container_class); ?>">
				<?php if(isset($bears_options['h7_menu_content_left'])&&$bears_options['h7_menu_content_left']&&isset($bears_options['h7_menu_content_left_element'])&&$bears_options['h7_menu_content_left_element']){ ?>
					<div class="bt-subheader-cell bt-left-before">
						<div class="bt-content text-left">
							<?php
								echo '<div class="bt-menu-content-left">';
									foreach($bears_options['h7_menu_content_left_element'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								echo '</div>';
							?>
						</div>
					</div>
				<?php } ?>
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<?php
							$logo_stick = isset($bears_options['h7_logo_stick']['url'])?$bears_options['h7_logo_stick']['url']:'';
							if(isset($page_options['header_logo_stick']['url'])&&$page_options['header_logo_stick']['url']){
								$logo_stick = $page_options['header_logo_stick']['url'];
							}
							
							$logo_stick_height = isset($bears_options['h7_logo_stick_height'])?$bears_options['h7_logo_stick_height']:'30';
							if(isset($page_options['header_logo_stick_height'])&&$page_options['header_logo_stick_height']){
								$logo_stick_height = $page_options['header_logo_stick_height'];
							}
							
							bears_logo($logo_stick, $logo_stick_height); 
							
							if(isset($bears_options['h7_menu_align'])&&$bears_options['h7_menu_align']=='left') {
								bears_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
							}
						?>
					</div>
				</div>
				<div class="bt-subheader-cell bt-right">
					<div class="bt-content text-right">
						<?php
							if(isset($bears_options['h7_menu_align'])&&$bears_options['h7_menu_align']=='right') {
								bears_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
							}
							
							if(isset($bears_options['h7_menu_canvas'])&&$bears_options['h7_menu_canvas']){
								echo '<a href="#" class="bt-menu-canvas-toggle"><i class="fa fa-bars"></i></a>';
							}
						?>
					</div>
				</div>
				<?php if(isset($bears_options['h7_menu_content_right'])&&$bears_options['h7_menu_content_right']&&isset($bears_options['h7_menu_content_right_element'])&&$bears_options['h7_menu_content_right_element']){ ?>
					<div class="bt-subheader-cell bt-right-after">
						<div class="bt-content text-right">
							<?php
								echo '<div class="bt-menu-content-right">';
									foreach($bears_options['h7_menu_content_right_element'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								echo '</div>';
							?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	
	<div class="bt-header-mobile">
		<div class="bt-subheader bt-bottom">
			<div class="bt-subheader-inner container">
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<?php
							$logo_mobile = isset($bears_options['h7_logo_mobile']['url'])?$bears_options['h7_logo_mobile']['url']:'';
							if(isset($page_options['logo_mobile']['url'])&&$page_options['logo_mobile']['url']){
								$logo_mobile = $page_options['logo_mobile']['url'];
							}
							
							$logo_mobile_height = isset($bears_options['h7_logo_mobile_height'])?$bears_options['h7_logo_mobile_height']:'30';
							if(isset($page_options['logo_mobile_height'])&&$page_options['logo_mobile_height']){
								$logo_mobile_height = $page_options['logo_mobile_height'];
							}
							
							bears_logo($logo_mobile, $logo_mobile_height); 
						?>
					</div>
				</div>
				<div class="bt-subheader-cell bt-right">
					<div class="bt-content text-right">
						<?php
							if(isset($bears_options['h7_menu_content_right'])&&$bears_options['h7_menu_content_right']&&isset($bears_options['h7_menu_content_right_element'])&&$bears_options['h7_menu_content_right_element']){
								echo '<div class="bt-menu-content-right">';
									foreach($bears_options['h7_menu_content_right_element'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								echo '</div>';
							}
							
							if(isset($bears_options['h7_menu_canvas'])&&$bears_options['h7_menu_canvas']){
								echo '<a href="#" class="bt-menu-canvas-toggle"><i class="fa fa-bars"></i></a>';
							}
						?>
						<div class="bt-menu-toggle">
							<div class="bt-menu-toggle-content"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="bt-menu-mobile-wrap">
			<div class="container">
				<?php bears_nav_menu($menu_assign, 'mobile_navigation', 'bt-menu-mobile'); ?>
			</div>
		</div>
	</div>
</header>
