<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<?php if (has_post_thumbnail()) { ?>
			<div class="bt-media <?php echo get_post_format(); ?>">
				<?php the_post_thumbnail('full'); ?>
			</div>
		<?php } ?>
		
		<?php the_terms( get_the_ID(), 'category', '<div class="bt-term"><i class="fa fa-folder"></i> '.esc_html__('in ', 'bears'), ', ', '</div>' ); ?>
		
		<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		
		<ul class="bt-meta">
			<li><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo esc_html__('by ', 'bears').get_the_author(); ?></a></li>
			<li><i class="fa fa-calendar"></i> <a href="<?php the_permalink(); ?>"><?php echo esc_html__('on ', 'bears').get_the_date(get_option('date_format')); ?></a></li>
			<?php if(comments_open()){ ?>
				<li><i class="fa fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number( esc_html__('0 Comments', 'bears'), esc_html__('1 Comment', 'bears'), esc_html__('% Comments', 'bears') ); ?></a></li>
			<?php } ?>
		</ul>
	
		<div class="bt-excerpt">
			<?php the_excerpt(); ?>
		</div>
		
		<a class="bt-readmore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'bears'); ?></a>
		
	</div>
</article>
