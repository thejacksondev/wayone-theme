<?php

require_once __DIR__ . '/class-wp-bootstrap-navwalker.php';

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

register_nav_menus(array(
  'primary' => __('Primary Menu', 'wayone'),
));




function wayone_enqueue_scripts()
{
  // Enqueue jQuery (WordPress comes with jQuery)
  wp_enqueue_script('jquery');

  // Enqueue Bootstrap JS (depends on jQuery)
  wp_enqueue_script(
    'bootstrap-js',
    'https://cdn.jsdelivr.net/npm/bootstrap3@3.3.5/dist/js/bootstrap.min.js',
    array('jquery'),
    null,
    true // load in footer
  );
  wp_register_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), null, true);
  wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css');
  wp_enqueue_script('aos');
}
add_action('wp_enqueue_scripts', 'wayone_enqueue_scripts');


add_action('wp_enqueue_scripts', function () {
  $ver = wp_get_theme()->get('Version');

  // Enqueue Bootstrap CSS first so it can be overridden
  wp_enqueue_style(
    'bootstrap-css',
    'https://cdn.jsdelivr.net/npm/bootstrap3@3.3.5/dist/css/bootstrap.min.css'
  );

  // Enqueue theme CSS after Bootstrap to override it
  wp_enqueue_style('wayone', get_template_directory_uri() . '/assets/css/main.css', ['bootstrap-css'], $ver);
  wp_enqueue_script('wayone', get_template_directory_uri() . '/assets/js/bundle.js', [], $ver, true);
});
