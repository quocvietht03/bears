<?php
/*
 * Single Post
 */

get_header();
get_template_part( 'framework/templates/site', 'titlebar');

?>

<main id="bt_main" class="bt-site-main">
	<div class="bt-main-content-ss">
		<div class="bt-container">
			<div class="bt-main-post-row">
				<div class="bt-main-post-col">
					<?php
						while ( have_posts() ) : the_post();
							?>
							<div class="bt-main-post">
								<?php get_template_part( 'framework/templates/post'); ?>
							</div>
							<?php
							echo bears_tags_render();
							echo bears_share_render();
							echo bears_author_render();

							echo bears_related_posts();

							// bears_post_nav();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) comments_template();
						endwhile;
					?>
				</div>
				<div class="bt-sidebar-col">
					<div class="bt-sidebar">
						<?php if(is_active_sidebar('main-sidebar')) echo get_sidebar('main-sidebar'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part( 'framework/templates/social', 'media-channels'); ?>
</main><!-- #main -->

<?php get_footer(); ?>
