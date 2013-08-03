<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
	
		<article class="post" id="post-<?php the_ID(); ?>">
		
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			
			<?php the_content('Read Full Article'); ?>
			
			<p class="meta">
				<?php the_time('F, jS, Y'); ?>
			</p>
			
		</article>
		
	<?php endwhile; ?>
	
<?php else : ?>

	<h2>Nothing Found</h2>
	
<?php endif; ?>
