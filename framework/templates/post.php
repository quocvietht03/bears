<article <?php post_class('bt-post'); ?>>
	<?php
		echo bears_post_featured_render('full');
		echo bears_post_publish_render();
		if(is_single()){
      echo bears_single_post_title_render();
		}else{
      echo bears_post_title_render();
		}
		echo bears_post_meta_render();
		echo bears_post_content_render();
	?>
</article>
