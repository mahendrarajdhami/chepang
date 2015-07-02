<?php get_header(); ?>
<div class="container voffset-20">
    <div class="col-md-8 voffset-20">
       <h2 class="heading"> <span> Print Media </span></h2>
       <br>
       <table>
		<?php 
			global $post;
			$args = array('post_type' => 'print','posts_per_page' => 5);
			$my_query = new WP_Query($args);
			if ($my_query->have_posts()) :
			while($my_query->have_posts()):
			   $my_query->the_post();
			$report = get_field('upload_pdf',$post->ID);
			?>
			<tr>
				<td><?php the_title(); ?></td>
				<td class="action-section"><a href="<?php echo $report['url']; ?>" target="_blank" view><span class="icon-eye-open common-iconcls">&nbsp;</span><span class="action_text">View</span></a>&nbsp;&nbsp;
				<a href="<?php echo $report['url']; ?>" download><span class="icon-download common-iconcls">&nbsp;</span><span class="action_text">Download</span></a>
				</td>
			</tr>
			<?php
			endwhile;
			endif;
		?>
		</table>
    </div>
    <?php echo get_template_part("templates/right"); ?>
</div>
<?php get_footer(); ?>