<?php 
	/* get thumbnail */
	if( has_post_thumbnail() ){
		$thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
		echo '<a href="'.get_the_permalink().'"><div class="bt-thumb" style="background: url('.esc_url($thumbnail_data[0]).') no-repeat center center / cover, #333"></div></a>';
	}
?>
<div class="bt-term"><?php the_terms( get_the_ID(), 'category', '', '' ); ?></div>
<h3 class="bt-title" title="<?php the_title(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<ul class="bt-meta">
	<li><?php echo get_the_date(get_option('date_format')); ?></li>
	<li><?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></li>
</ul>
