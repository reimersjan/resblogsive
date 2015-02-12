<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</article>
				<p class="meta">
						<time datetime="<?php the_time('Y-m-d H:i'); ?>"><?php _e('published on', 'resblogsive') ?> <?php the_time('F jS, Y'); ?></time> &mdash; <?php _e('by', 'resblogsive'); ?> <?php the_author(); ?>
					<p class="categories">Categories: <?php the_category( ', ' ); ?></p>
					<p class="tags"><?php the_tags('Tags: ', ', '); ?></p>
				</p>

		<?php endwhile; ?>
	<?php else : ?>
		<h2><?php _e('Nothing Found', 'resblogsive'); ?></h2>
	<?php endif; ?>

	<?php comments_template(); ?>
	<?php wp_link_pages(); ?>
<?php get_footer(); ?>
