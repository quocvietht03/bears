<?php
$testimonial_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'testimonial_options'):array();

$positon = isset($testimonial_options['position'])?$testimonial_options['position']:'';

?>
<div class="bt-item">
	<div class="bt-desc"><i class="fa fa-quote-left"></i><?php the_content(); ?><i class="fa fa-quote-right"></i></div>
	<div class="bt-info">
		<?php if( has_post_thumbnail() ) the_post_thumbnail('thumbnail'); ?>
		<?php if($positon) echo '<div class="bt-position">'.$positon.'</div>'; ?>
		<h3 class="bt-title" title="<?php the_title(); ?>"><?php the_title(); ?></h3>
	</div>
</div>
