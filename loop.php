<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<p class="meta">
				<time><?php the_time('F jS, Y'); ?></time>
			</p>
			
			<?php the_excerpt(); ?>
			
		</article>
		
	<?php endwhile; ?>
	
<?php else : ?>

	<h2>Nothing Found</h2>
	
<?php endif; ?>
