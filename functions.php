<?php

function styles_and_scripts() {
  wp_enqueue_script('main_js', get_theme_file_uri('/js/scripts.js'), NULL, '1.0', true);
  wp_enqueue_script('font_awesome', '//use.fontawesome.com/f8233e3073.js', NULL, '1.0', true);
  wp_enqueue_style('main_styles', get_stylesheet_uri('style.css'));
  wp_enqueue_style('lato-google-fonts', '//fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap');
  wp_enqueue_style('greatvibes-google-fonts', '//fonts.googleapis.com/css?family=Great+Vibes');
//   wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'styles_and_scripts');

function site_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'site_features');