<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</article>
				<p class="meta">
					<time datetime="<?php the_time( get_option( 'date_format' ) ); ?>"><?php _e('published on', 'resblogsive') ?> <?php the_time( get_option( 'date_format' ) ); ?></time> &mdash; <?php _e('by', 'resblogsive'); ?> <?php the_author(); ?>
					<p class="categories"><?php _e('Categories', 'resblogsive'); ?>: <?php the_category(', '); ?></p>
					<p class="tags"><?php _e('Tags', 'resblogsive'); ?>: <?php the_tags('', ', '); ?></p>
				</p>

		<?php endwhile; ?>
	<?php else : ?>
		<h2><?php _e('Nothing Found', 'resblogsive'); ?></h2>
	<?php endif; ?>

	<?php comments_template(); ?>
	<?php wp_link_pages(); ?>
<?php get_footer(); ?>
