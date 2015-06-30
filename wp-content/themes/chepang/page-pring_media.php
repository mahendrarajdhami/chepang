<?php get_header(); ?>
<div class="container voffset-20">
    <div class="col-md-8 voffset-20">
       <h2 class="heading"> <span> Print Media </span></h2>
		<?php if ( have_posts() ) : while(have_posts()):the_post(); the_content(); endwhile; endif; ?>
    </div>
    <?php echo get_template_part("templates/right"); ?>
</div>
<?php get_footer(); ?>