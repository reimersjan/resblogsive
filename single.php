<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<p class="meta">
					<time datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('F jS, Y'); ?></time> - by <?php the_author(); ?>
				</p>
				<?php the_content(); ?>
				<p class="meta">
					<?php the_category(); ?>
					<?php the_tags(); ?>
				</p>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<h2>Nothing Found</h2>
	<?php endif; ?>
	
	<?php comments_template(); ?>
<?php get_footer(); ?>
