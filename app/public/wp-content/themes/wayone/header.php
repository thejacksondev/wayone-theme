<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="minimal-ui, width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class('wayone'); ?>>
  <?php get_template_part('sections/global/mobile-nav'); ?>
  <header class="site-header" role="banner">
    <?php get_template_part('sections/global/nav'); ?>
  </header>