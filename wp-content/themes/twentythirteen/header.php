<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory');?>/js/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php bloginfo("template_directory");?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php bloginfo("template_directory");?>/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo("template_directory");?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo("template_directory");?>/img/favicon/apple-touch-icon-114x114.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="<?php bloginfo("template_directory");?>/css/zoom.css" rel="stylesheet">
	<link href="<?php bloginfo("template_directory");?>/css/animate.css" rel="stylesheet">

	<link href="<?php bloginfo("template_directory");?>/css/jquery-ui.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/main.css">

	<?php wp_head(); ?>
</head>



