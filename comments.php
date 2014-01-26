<?php if ( have_comments() ) : ?>

	<h3 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments'); ?></h3>
	
	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>
	
	<ol class="commentlist">
		<?php wp_list_comments( 'avatar_size=64&format=html5' ); ?>
	</ol>
	
	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>
	
<?php else : ?>

	<?php if ( comments_open() ) : ?>
	
	<?php else : ?>
		<p>Comments are closed</p>
		
	<?php endif; ?>
	
<?php endif; ?>
	
<?php if ( comments_open() ) : ?>

<div id="respond">

	<h3><?php comment_form_title( 'Leave a Comment', 'Comment on %s' ); ?></h3>
	
	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>
	
	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to comment.</p>
	<?php else : ?>
	
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	
		<?php if ( is_user_logged_in() ) : ?>
		
			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out">Log out</a></p>
			
		<?php else : ?>
		
			<div>
				<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> placeholder="Name <?php if ($req) echo "(required)"; ?>" />
			</div>
			
			<div>
				<input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> placeholder="E-Mail (non-public) <?php if ($req) echo "(required)"; ?>" />
			</div>
			
			<div>
				<input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" placeholder="Website" />
			</div>
			
		<?php endif; ?>
		
		<div>
			<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4" placeholder="Your Reply..."></textarea>
		</div>
		
		<div>
			<input name="submit" type="submit" id="submit" class="button" tabindex="5" value="Submit Reply" />
			<?php comment_id_fields(); ?>
		</div>
		
		<?php do_action('comment_form', $post->ID); ?>
	
	</form>
	
	<?php endif; ?>

</div>

<?php endif; ?>