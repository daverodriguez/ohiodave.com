<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<?php wp_head(); ?>

	<link href='http://fonts.googleapis.com/css?family=Abril+Fatface:400|Martel:400,600|Merriweather:300,300italic,400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/favicon.ico" />
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/favicon.ico" />
</head>
