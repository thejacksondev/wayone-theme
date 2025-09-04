<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class('wayone'); ?>>
<header class="site-header" role="banner">
  <div class="container">
    <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>">wayone</a>
    <?php // Add a nav later if needed ?>
  </div>
</header>
