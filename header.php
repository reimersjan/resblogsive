<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link href="<?php bloginfo('template_url'); ?>/images/favicon.ico" rel="shortcut icon" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>

	<header>
		<h1><a href="<?php echo home_url( '/' ); ?>" rel="home"><?php bloginfo('name'); ?></a><br/><small><?php bloginfo('description'); ?></small></h1>
	</header>

  	<nav id="access" role="navigation">
	  	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
  	</nav>

<div class="wrapper">

	<section class="content">