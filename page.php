<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry">
			<?php the_content(); ?>
		</div>
	</article>

<?php endwhile; endif; ?>

<?php comments_template(); ?>

<?php get_footer(); ?>
