<?php 
	/* get thumbnail */
	if( has_post_thumbnail() ){
		$thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
		echo '<a href="'.get_the_permalink().'"><div class="bt-thumb" style="background: url('.esc_url($thumbnail_data[0]).') no-repeat center center / cover, #333"></div></a>';
	}
?>
<div class="bt-content">
	<div class="bt-date"><?php echo get_the_date(get_option('date_format')); ?></div>
	<h3 class="bt-title" title="<?php the_title(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</div>
