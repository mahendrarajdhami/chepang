<?php
	// Register Styles
	function chepang_register_style(){
		wp_register_style('style', get_template_directory_uri() .'/style.css');
		wp_enqueue_style( 'style');
	}
	add_action('wp_print_styles', 'chepang_register_style');

