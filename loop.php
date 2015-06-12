<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e('Permalink to', 'resblogsive'); ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<p class="meta">
				<time datetime="<?php the_time( get_option( 'date_format' ) ); ?>"> <?php _e('published on', 'resblogsive') ?> <?php the_time( get_option( 'date_format' ) ); ?></time>
			</p>
		</article>
	<?php endwhile; ?>
<?php else : ?>
	<h2><?php _e('Nothing Found', 'resblogsive'); ?></h2>
<?php endif; ?>
