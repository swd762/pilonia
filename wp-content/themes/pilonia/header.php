<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 *
 */


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/dist/images/favicon.png" type="image/x-icon"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<?php wp_head(); ?>
</head>
<body>
<div id="header">
    <div class="navbar container d-flex flex-wrap">
        <a href="/" class="logo">
            <img src="<?php echo get_template_directory_uri() . '/images/logo.svg' ?>" alt="logo">
        </a>
        <div class="col d-lg-flex xl-pl-20" id="menu-top">
        </div>
        <a href="#" class="top_shortcuts">+1 201 989 74 55</a>
        <a href="#" class="top_shortcuts">info@pilonia.com</a>
        <span class="hamburger-btn"></span>
    </div>
</div>
