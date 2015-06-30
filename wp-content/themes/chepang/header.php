<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="docs/favicon.ico"> -->
    <title>Reinforcing Women of  the Chepang community as change agents for promoting local governance in Nepal</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
  <noscript>
    <link rel="stylesheet" type="text/css" href="css/nojs.css" />
  </noscript>
 <?php wp_head(); ?>
</head>

<body role="document">
<header>
  <div class="clearfix"></div>
  <section class="container">
   <div class="col-md-2">
      <h1 id="logo"> <a href="<?php echo home_url(); ?>"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/uneflogo.png" alt="">  </a> </h1>
   </div>
   <div class="col-md-8 col-sm-1 col-md-offset-0 "> <p class="webfont headercaption voffset-10 left40">Reinforcing Women of the Chepang community as change agents for promoting local governance in Nepal</p> </div>
   <div class="col-md-1 voffset-10 float1 offset0"> <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/declogo.png" alt="" class="float1 text-right"> </a> </div>
  </section>
  <div class="clearfix"></div>
  <div class="container">
    <ul id="main-menu" class="sm sm-blue">
      <li ><a href="<?php echo home_url(); ?>" <?php if(is_home()) echo "class='current'";?>>Home</a></li>
      <li><a href="<?php echo site_url() ?>/voice-from-chepang" <?php if(get_current_page() =="voice-from-chepang") echo "class='current'";?> >Voices From Chepang</a></li>
      <li><a href="#" id="document" <?php if(get_current_page()=="document") echo "class='current'";?>>Documents &amp; Publication</a>
        <ul>
           <li><a href="#" id="media_coverage">Media Coverage</a>
                  <ul>
                      <li><a href="<?php echo site_url() ?>/print-media">Print Media</a></li>
                      <li><a href="<?php echo site_url() ?>/audio-visuals">Audio Visuals</a></li>
                  </ul>
           </li>
        </ul>
      </li>
      <li><a href="<?php echo site_url() ?>/gallery" <?php if(get_current_page()=="gallery") echo "class='current'";?>>Photo gallery</a></li>
      <li><a href="<?php echo site_url() ?>/category/events" <?php if(get_cat_slug()=="events") echo "class='current'";?>>Events</a></li>
      <li><a href="<?php echo site_url() ?>/category/anouncement" <?php if(get_cat_slug()=="anouncement") echo "class='current'";?>>Announcement</a></li>
      <li><a href="<?php echo site_url() ?>/learning" <?php if(get_current_page()=="learning") echo "class='current'";?>>Learning Insights</a></li>
    </ul>
  </div>
</header>
<div class="clearfix"></div>