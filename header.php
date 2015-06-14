<?php
    $attachment_id = get_post_thumbnail_id();
    $image_attributes = wp_get_attachment_image_src($attachment_id, 'full');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link href="<?php echo get_template_directory(); ?>/images/favicon.ico" rel="shortcut icon" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<button class="nav-trigger genericon genericon-menu"></button>
	<button class="nav-close genericon genericon-close-alt"></button>
	<nav class="access" role="navigation">
		<?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'primary')); ?>
	</nav>
  <header class="header-main">
		<h1><?php the_title(); ?></h1>
	</header>


<div class="wrapper">
	<main>
