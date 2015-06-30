<?php get_header(); ?>
<div class="container">
    <div class="bxslider" style="margin-left:15px;">
    	<?php echo do_shortcode("[metaslider id=4]"); ?>
	</div>
</div>
<!-- /container -->
<div class="clearfix"></div>
<div class="container voffset-20 ">
    <div class="col-md-8 voffset-20">
	    <h2 class="heading"> <span> About Chepang Project </span> </h2>
	    <p class="voffset-20"> Development and fulfillment of the right to live with dignity is still a far- fetched dream for people living in poverty and marginalization such as the Chepang, one of the marginalized indigenous groups of Nepal. Women of this community are further marginalized with lower literacy rates, less access to health services as well as limited influence on economic and political opportunities. Due to the communities’ negligible presence in local budget planning processes, Village Development Committees  have not allocated budget for the development of Chepang communities. The project will be implemented in six villages where the majority of Chepang communities live in the Chitwan district.<a href="<?php echo site_url() ?>/about" class="more_1"> Learn More &raquo;</a></p>
	    <h2 class="heading"> <span> Gallery Images </span></h2> 
	    <div class="carousel_wrap">
	    	<div class="carousel_innner">
	    		<div id="owl-demo">
	    		  	<?php
	    		  	$args = array('post_type' => 'gallery','posts_per_page'=>3);//here posts_per_page means images from recent two galleries.
	    		  	$my_query = new WP_Query($args);
	    		  	  if($my_query->have_posts()):
	    		  	  while ($my_query->have_posts()) : $my_query->the_post();
	    		  		$image_query = new WP_Query( array( 'post_type' => 'attachment', 'post_status' => 'inherit', 'post_mime_type' => 'image', 'posts_per_page' => -1, 'post_parent' => get_the_ID() ) );
	      		        while( $image_query->have_posts() ) {
	      		            $image_query->the_post();
	      		            ?>
	      		            <a href="<?php echo site_url('/gallery'); ?>" title="Go to Gallery"><div class="item"><?php echo wp_get_attachment_image( get_the_ID() ); ?></div></a>
	      		            <?php
	      		        }
	    		  	endwhile; endif; wp_reset_query();?>
	    		</div>
	    	</div>
	    </div>          
	    	
	    <a href="<?php echo site_url() ?>/gallery" class="more_1"> Read More &raquo;</a>            
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	      <div class="modal-dialog">
	        <div class="modal-content">         
	          <div class="modal-body">                
	          </div>
	        </div><!-- /.modal-content -->
	      </div><!-- /.modal-dialog -->
		</div>
    </div>
    <?php echo get_template_part("templates/right"); ?>
</div>
<div class="clearfix voffset-bottom20"></div>
<?php get_footer(); ?>
