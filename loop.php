<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
	
		<article class="post" id="post-<?php the_ID(); ?>">
		
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			
			<?php get_the_excerpt(); ?>
			
		</article>
		
	<?php endwhile; ?>
	
<?php else : ?>

	<h2>Nothing Found</h2>
	
<?php endif; ?>
