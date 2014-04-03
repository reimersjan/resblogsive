<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e('Permalink to', 'resblogsive'); ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<p class="meta">
				<time datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('F jS, Y'); ?></time>
			</p>
			<?php the_excerpt(); ?>
		</article>
	<?php endwhile; ?>
<?php else : ?>
	<h2><?php _e('Nothing Found', 'resblogsive'); ?></h2>
<?php endif; ?>