<?php
// Include the Bootstrap Navwalker class
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

add_action('wp_enqueue_scripts', function () {
  $ver = wp_get_theme()->get('Version');
  wp_enqueue_style('wayone', get_template_directory_uri() . '/assets/css/main.css', [], $ver);
  wp_enqueue_script('wayone', get_template_directory_uri() . '/assets/js/bundle.js', [], $ver, true);
});

add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('html5', ['style','script','search-form','gallery','caption']);
  add_theme_support('menus');
});

// Register menu locations
add_action('init', function () {
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'wayone'),
    'footer'  => __('Footer Menu', 'wayone'),
  ));
});
