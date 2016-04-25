<?php

// jQuery NO CONFLICT INIT
function my_init() {
if (!is_admin()) {


// jQuery
wp_deregister_script('jquery');
wp_register_script('jquery', get_template_directory_uri() .'/assets/bower_components/jquery/dist/jquery.min.js');
wp_enqueue_script('jquery');
}
}
add_action('init', 'my_init');

// load scripts (and/or styles)
//
function my_theme_load_scripts(){

wp_register_script('tether', get_template_directory_uri() .'/assets/js/tether.js');
wp_enqueue_script('tether');

wp_register_script('bootstrap', get_template_directory_uri() .'/assets/bower_components/bootstrap/dist/js/bootstrap.min.js');
wp_enqueue_script('bootstrap');

// wp_register_script('mousewheel', get_template_directory_uri() .'/assets/js/mouse-scroll/jquery.mousewheel.min.js');
// wp_enqueue_script('mousewheel');

// wp_register_script('smoothscroll', get_template_directory_uri() .'/assets/js/mouse-scroll/jquery.simplr.smoothscroll.min.js');
// wp_enqueue_script('smoothscroll');
//


wp_register_script('gmap', 'https://maps.googleapis.com/maps/api/js?v=3');
wp_enqueue_script('gmap');

wp_register_script('googlemap', get_template_directory_uri() .'/assets/js/googlemap.js');
wp_enqueue_script('googlemap');

wp_register_script('slick', get_template_directory_uri() .'/assets/js/slick-1.5.9/slick/slick.js');
wp_enqueue_script('slick');

wp_register_script('custom', get_template_directory_uri() .'/assets/js/custom.js');
wp_enqueue_script('custom');

}

function load_prevent() {
  wp_enqueue_script(
    'custom-script',
    get_template_directory_uri() . '/assets/js/prevent-default-navbar.js',
    array('jquery')
  );
}
if(is_page( 'main' ) ) add_action('wp_enqueue_scripts', 'load_prevent');


//register hook to load scripts
add_action('wp_enqueue_scripts', 'my_theme_load_scripts');

//remove feed link from header
remove_action( 'wp_head', 'feed_links_extra', 3 ); //Extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // General feeds: Post and Comment Feed

// register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// register nav menu
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'terapienaturalne' ),
    'secondary' => __( 'Secondary Menu', 'blog' ),
) );

// Get URL of first image in a post
function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];

// no image found display default image instead
if(empty($first_img)){
$first_img = "/images/default.jpg";
}
return $first_img;
}

// for the_excerption:
function fr_excerpt_by_id($post_id, $excerpt_length = 35, $line_breaks = TRUE){
$the_post = get_post($post_id); //Gets post ID
$the_excerpt = $the_post->post_excerpt ? $the_post->post_excerpt : $the_post->post_content; //Gets post_excerpt or post_content to be used as a basis for the excerpt
$the_excerpt = apply_filters('the_excerpt', $the_excerpt);
$the_excerpt = $line_breaks ? strip_tags(strip_shortcodes($the_excerpt), '<p><br>') : strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
$words = explode(' ', $the_excerpt, $excerpt_length + 1);
if(count($words) > $excerpt_length) :
  array_pop($words);
  array_push($words, '…');
  $the_excerpt = implode(' ', $words);
  $the_excerpt = $line_breaks ? $the_excerpt . '</p>' : $the_excerpt;
endif;
$the_excerpt = trim($the_excerpt);
return $the_excerpt;
}

?>
