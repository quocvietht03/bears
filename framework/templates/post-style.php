<article <?php post_class('bt-post'); ?>>
  <div class="bt-post--inner">
    <?php echo bears_post_cover_featured_render($args['image-size']); ?>
    <div class="bt-post--infor">
      <?php
        echo bears_post_publish_render();
        echo bears_post_title_render();
        echo bears_post_short_meta_render();
      ?>
    </div>
  </div>
</article>
