<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class('wayone'); ?>>
  <header class="site-header" role="banner">
    <?php get_template_part('sections/global/nav'); ?>

  </header>