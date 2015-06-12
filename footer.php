	</main>
</div> <!-- .wrapper -->

<footer class="footer">
	<p><?php _e('powered by', 'resblogsive'); ?> <a target="_blank" href="https://wordpress.org">WordPress</a> <?php _e('and', 'resblogsive'); ?> <a target="_blank" href="<?php echo wp_get_theme()->get('ThemeURI'); ?>"><?php echo wp_get_theme()->get('Name'); ?></a> <?php echo wp_get_theme()->get('Version'); ?></p>
</footer>

<?php if (is_singular()) {
    wp_enqueue_script('comment-reply');
} ?>
<?php wp_footer(); ?>

</body>
</html>
