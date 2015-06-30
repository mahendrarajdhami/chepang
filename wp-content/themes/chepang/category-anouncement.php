<?php get_header(); ?>
<div class="col-md-4 voffset-20"> 
 <h2 class="heading"> <span> Anouncement </span> </h2>
 <ul class=" media-list anounc voffset-10">
    <?php while (have_posts()) : the_post(); ?>
    <li> 
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
        <span><?php echo get_the_date(); ?></span>
    </li>
    <?php endwhile;?>
 </ul>
</div>
 <div class="clearfix voffset-bottom20 voffset-20"></div>
<?php get_footer(); ?>