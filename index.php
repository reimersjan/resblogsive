<?php get_header(); ?>
 
  <?php get_template_part( 'loop', 'index' ); ?>
  
  <?php previous_posts_link(); ?>
  <?php next_posts_link(); ?>

<?php get_footer(); ?>
