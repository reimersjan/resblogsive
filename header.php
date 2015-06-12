<?php
    $attachment_id = get_post_thumbnail_id();
    $image_attributes = wp_get_attachment_image_src($attachment_id, 'full');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title('-', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link href="<?php echo get_template_directory(); ?>/images/favicon.ico" rel="shortcut icon" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if (is_single()): ?>
	<button class="nav-trigger genericon genericon-menu"></button>
	<button class="nav-close genericon genericon-close-alt"></button>
	<nav class="access" role="navigation">
		<?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'primary')); ?>
	</nav>
	<?php if (has_post_thumbnail()): ?>
		<header style="background-image: url(<?php echo $image_attributes[0]; ?>);">
	<?php else : ?>
		<header style="background-image: url(<?php header_image(); ?>);">
	<?php endif; ?>
		<h1><?php the_title(); ?></h1>
	</header>
	<?php else : ?>
	<header style="background-image: url(<?php header_image(); ?>);">
		<h1><a href="<?php echo home_url('/'); ?>" rel="home"><?php bloginfo('name'); ?></a><br/><small><?php bloginfo('description'); ?></small></h1>
	</header>
	<button class="nav-trigger genericon genericon-menu"></button>
	<button class="nav-close genericon genericon-close-alt"></button>
	<nav class="access" role="navigation">
		<?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'primary')); ?>
	</nav>
	<?php endif; ?>

<div class="wrapper">
	<main>
