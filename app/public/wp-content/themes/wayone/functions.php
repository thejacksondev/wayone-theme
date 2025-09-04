<?php
add_action('wp_enqueue_scripts', function () {
  $ver = wp_get_theme()->get('Version');
  wp_enqueue_style('wayone', get_template_directory_uri() . '/assets/css/main.css', [], $ver);
  wp_enqueue_script('wayone', get_template_directory_uri() . '/assets/js/bundle.js', [], $ver, true);
});

add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('html5', ['style','script','search-form','gallery','caption']);
});
