<?php
  $includes_path = get_template_directory() . '/functions/';
  /***Theme actions and scripts***/
  require_once ($includes_path . 'theme-actions.php');
  // Load JavaScript via wp_enqueue_script
  require_once ($includes_path . 'theme-scripts.php');

  //calling theme options and its framework
  define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/chepang-theme-option.php');
    require_once dirname(__FILE__) . '/inc/chepang-theme-options.php';
  // load textdomain for translation
  add_action('after_setup_theme', 'chepang_setup');
  function chepang_setup(){
    load_theme_textdomain('chepang', get_template_directory() . '/languages');
  }
  //give  short title of post page
  function trimed_title($after = '', $length, $content = null) {
    if ($content) {
      $scontent = strip_tags($content);
      if (mb_strlen($scontent) > $length) {
        $scontent = mb_substr($scontent, 0, $length);
        echo $scontent . $after;
      }
    }
    else {
      $mytitle = get_the_title();
      $smytitle = strip_tags($mytitle);
      if (mb_strwidth($smytitle) > $length) {
        $smytitle = mb_strimwidth($smytitle, 0, $length, "");
        echo $smytitle . $after;
      }
      else{
        echo $smytitle;
      }
    }
  }
  /*get current page slug*/
  function get_current_page(){
    global $post;
    $slug = get_post($post)->post_name;
    return $slug;
  }
  /*get current category slug*/
  function get_cat_slug(){
   if(is_category()){
    $cats = get_query_var('cat');
    $cat = get_category($cats);
    return $cat->slug;
   } 
   
  }
  //post thumbnail support of theme
  if (function_exists('add_theme_support')) {
    // add_image_size('edit-room-slider',100,100,true);
  }

  /*@mahen*/
  /*hiding comment menu from admin*/
  add_action( 'admin_menu', 'my_remove_menu_pages' );
  function my_remove_menu_pages() {
      remove_menu_page('edit-comments.php');
  }
?>
