<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<p class="meta">
					<time datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('F jS, Y'); ?></time> - <?php _e('by', 'resblogsive'); ?> <?php the_author(); ?>
				</p>
				<?php the_content(); ?>
				<p class="meta">
					<?php the_category(); ?>
					<?php the_tags(); ?>
				</p>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<h2><?php _e('Nothing Found', 'resblogsive'); ?></h2>
	<?php endif; ?>

	<?php comments_template(); ?>
	<?php wp_link_pages(); ?>
<?php get_footer(); ?>
