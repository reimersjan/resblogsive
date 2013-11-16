<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post(); ?>
		
			<article class="post" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>

				<p class="meta">
					<time><?php the_time('F jS, Y'); ?></time> - by <?php the_author(); ?>
				</p>

				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
				?>

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
