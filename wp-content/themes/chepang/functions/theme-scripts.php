<?php

if ( ! is_admin() ) { add_action( 'wp_print_scripts', 'chepang_js' ); }

function chepang_js() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('jquery-1.11.1','/js/jquery-1.11.1.js','','', false);
  wp_enqueue_script('bootstrap.min', get_template_directory_uri() .'/js/bootstrap.min.js','','', false);
  wp_enqueue_script('owl.carousel.min', get_template_directory_uri() .'/js/owl.carousel.min.js','','', true);
  wp_enqueue_script('modernizr.custom.28468', get_template_directory_uri() .'/js/modernizr.custom.28468.js','','', false);
  wp_enqueue_script('custom', get_template_directory_uri() .'/js/custom.js','','', false);
  wp_enqueue_script('main', get_template_directory_uri() .'/js/main.js','','', false);
  wp_enqueue_script('jquery.smartmenus', get_template_directory_uri() .'/js/jquery.smartmenus.js','','', false);

}