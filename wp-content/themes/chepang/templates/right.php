<div class="col-md-4 voffset-20"> 
 <h2 class="heading"> <span> Announcement </span> </h2>
 <ul class=" media-list anounc voffset-10">
    <?php
    query_posts( array( 'category_name' => 'anouncement', 'posts_per_page' => 4) );
    while (have_posts()) : the_post(); ?>
    <li> 
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
        <span><?php echo get_the_date(); ?></span>
    </li>
    <?php endwhile; wp_reset_query();?>
 </ul>
 <a href="<?php echo site_url();?>/category/anouncement" class="more_1"> Read More &raquo;</a>
 <div class="clearfix voffset-bottom20 voffset-20"></div>
 <h2 class="heading"> <span> Latest Events </span> </h2>
 <ul class=" media-list anounc voffset-10">
    <?php
    query_posts( array( 'category_name' => 'events', 'posts_per_page' => 4) );
    while (have_posts()) : the_post(); ?>
    <li> 
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
        <span><?php echo get_the_date(); ?></span>
    </li>
    <?php endwhile; wp_reset_query(); ?>
 </ul>
 <a href="<?php echo site_url();?>/category/events" class="more_1"> Read More &raquo;</a>
 <div class="clearfix voffset-bottom20 voffset-20"></div>
</div>
 
           
           