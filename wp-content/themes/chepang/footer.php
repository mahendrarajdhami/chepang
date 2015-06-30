<footer>
    <section class="foot_top">
        <div class="container">
            <p class="text-center">Copyright © <?php echo date(Y); ?> DEC Nepal. All rights reserved. </p>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="foot_bottom">
        <div class="container">
            <div class="col-md-6">  Powered by <a href="http://www.kintech.com.np" target="_blank"> kintech </a></div>
            <div class="col-md-6">
                <ul class="list-inline pull-right">
                     <li><a href="http://www.facebook.com" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri();?>/images/fb-foot.png" alt=""> </a> </li>
                     <li><a href="http://www.twitter.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/images/twtr-foot.png" alt=""></a> </li>
                     <li><a href="http://www.linkedin.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/images/in-foot.png" alt=""></a> </li>
                </ul>  
            </div>
        </div>
    </section>
<?php wp_footer(); ?>
</footer>