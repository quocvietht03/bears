<?php
	global $bears_options;
	$fullwidth = isset($bears_options['titlebar_fullwidth'])&&$bears_options['titlebar_fullwidth'] ? 'fullwidth': 'container';
?>
<div class="bt-titlebar bt-titlebar-v2">
	<div class="bt-titlebar-inner">
		<div class="bt-overlay"></div>
		<div class="bt-subheader">
			<div class="bt-subheader-inner <?php echo esc_attr($fullwidth); ?>">
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<div class="bt-page-title">
							<?php
								if(isset($bears_options['titlebar_page_title_before'])&&$bears_options['titlebar_page_title_before']&&isset($bears_options['titlebar_page_title_before_content'])&&$bears_options['titlebar_page_title_before_content']){
									echo '<div class="bt-before">'.$bears_options['titlebar_page_title_before_content'].'</div>';
								}
							?>
							<h2><?php echo bears_page_title(); ?></h2>
							<?php
								if(isset($bears_options['titlebar_page_title_after'])&&$bears_options['titlebar_page_title_after']&&isset($bears_options['titlebar_page_title_after_content'])&&$bears_options['titlebar_page_title_after_content']){
									echo '<div class="bt-after">'.$bears_options['titlebar_page_title_after_content'].'</div>';
								}
							?>
						</div>
					</div>
				</div>
				<div class="bt-subheader-cell bt-right">
					<div class="bt-content text-right">
						<div class="bt-breadcrumb">
							<?php
								if(isset($bears_options['titlebar_breadcrumb_before'])&&$bears_options['titlebar_breadcrumb_before']&&isset($bears_options['titlebar_breadcrumb_before_content'])&&$bears_options['titlebar_breadcrumb_before_content']){
									echo '<div class="bt-before">'.$bears_options['titlebar_breadcrumb_before_content'].'</div>';
								}
							?>
							<div class="bt-path">
								<?php
									$home_text = (isset($bears_options['titlebar_breadcrumb_home_text'])&&$bears_options['titlebar_breadcrumb_home_text'])?$bears_options['titlebar_breadcrumb_home_text']: 'Home';
									$delimiter = (isset($bears_options['titlebar_breadcrumb_delimiter'])&&$bears_options['titlebar_breadcrumb_delimiter'])?$bears_options['titlebar_breadcrumb_delimiter']: '-';
									
									echo bears_page_breadcrumb($home_text, $delimiter);
								?>
							</div>
							<?php
								if(isset($bears_options['titlebar_breadcrumb_after'])&&$bears_options['titlebar_breadcrumb_after']&&isset($bears_options['titlebar_breadcrumb_after_content'])&&$bears_options['titlebar_breadcrumb_after_content']){
									echo '<div class="bt-after">'.$bears_options['titlebar_breadcrumb_after_content'].'</div>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>