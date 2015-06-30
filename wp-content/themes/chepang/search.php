
<?php get_header(); ?>
<div id="conatiner">
	<div class="details_wrap">
		<div class="breadcumb">
		  <ul>
		   <li><a href="<?php echo get_site_url('home' ); ?>">HOME</a></li>
		   <li>&gt</li>
		   <li>キーワード</li>
		  </ul>
		</div>
		<div class="news_wrap">
		    <?php
		     	if (have_posts()) : while (have_posts()) :the_post();
		    ?>
		    <a href="<?php echo the_permalink(); ?>">
		    	<div class="search_list">
		    		<div class="search_icon">
		    			<?php if ( has_post_thumbnail()) {
		    				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
		    				$thumb_src = $src[0];
		    			 ?>
		    			  <div class="img-wrap">
		    			  <?php
		    			  	// the_post_thumbnail('search-feature-image');
		    			  ?>
		    			  	<img src="<?php echo get_stylesheet_directory_uri();?>/phpscripts/timthumb.php?src=<?php echo $thumb_src;?>&w=242&h=160&q=100">
		    			  </div>
		    			<?php }else{ ?>
		    			<div class="img-wrap">
		    			  <img src="<?php echo get_stylesheet_directory_uri();?>/images/search_no-img.jpg">
		    			</div>
		    			  <?php }?>
		    		</div>
		    		<div class="search_info">
		    			<p class="year"><?php date_with_japanese_day(); ?></p>
		    			<p class="thank"><?php custom_shortTitle('..',CUSTOM_SHORTTITLE_NEWS_ARCH_TAXO); ?></p>
		    			<p><?php if(do_shortcode('[prefix-top-level-terms-building]')){
		    			     echo do_shortcode('[prefix-top-level-terms-building]');
		    				}elseif(do_shortcode('[prefix-top-level-terms-news]')){
		    				 echo do_shortcode('[prefix-top-level-terms-news]');
		    				}
		    			 ?>
		    			 </p>
		    		</div>
		    		<div class="arrow_list"><!-- <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow.png"></span> --></div>
		    	</div>
		    </a>
			<?php  endwhile;else: ?>
			<div class="news">
			<p class="post"><?php _e('Sorry, no posts matched your criteria','whitewater');?></p>
			<p class="title-search-undefined"><?php _e('Perhaps You will find something interesting from other keyword in search...','whitewater');?>
			</p>
			</div>
			<?php endif; ?>
			<div class="pagination">
		        <ul>
		          <!-- <li>1</li>
		          <li><a href="">2</a></li> -->

		          <?php pagination('&laquo;', '&raquo;'); ?>
		        </ul>
		  	</div>
		</div>
		<?php get_sidebar('news_rooms'); ?>
	</div>
</div>
<?php get_footer(); ?>