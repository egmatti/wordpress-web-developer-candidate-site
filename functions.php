<?php

// ENQUEUE STYLES

function wordpress_web_developer_candidate_site_styles() {
  wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i|Montserrat:300,300i,400,400i,700,700i');
  wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wordpress_web_developer_candidate_site_styles');


// ENQUEUE SCRIPTS

function wordpress_web_developer_candidate_site_js() {

  wp_enqueue_script('slick_js', get_template_directory_uri() . '/js/slick.js', array('jquery'), '', true);

  wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array('jquery', 'slick_js'), '', true);
}

add_action('wp_enqueue_scripts', 'wordpress_web_developer_candidate_site_js');


// REMOVE ADMIN BAR PUSH

add_action('get_header', 'my_filter_head');

function my_filter_head() {
 remove_action('wp_head', '_admin_bar_bump_cb');
}


// ADD POST THUMBNAILS

add_theme_support( 'post-thumbnails' );


// POST THUMBNAIL ALT TAGS

function get_the_post_thumbnail_alt($post_id) {
  return get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true);
}

function the_post_thumbnail_alt($post_id) {
  echo get_the_post_thumbnail_alt($post_id);
}
