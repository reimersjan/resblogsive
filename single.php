<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post(); ?>
		
			<article class="post" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<?php the_content('Read Full Article'); ?>
				
				<p class="meta">
					<?php the_time('F jS, Y'); ?> - <?php the_author(); ?>
				</p>
			</article>
			
		<?php endwhile; ?>
		
	<?php else : ?>
	
		<h2>Nothing Found</h2>
		
	<?php endif; ?>
	
	<?php comments_template(); ?>
	
<?php get_footer(); ?>
