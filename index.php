<?php get_header(); ?>

  <?php get_template_part('loop', 'index'); ?>

  <p class="posts-navigation">
    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>
  </p>

<?php get_footer(); ?>
