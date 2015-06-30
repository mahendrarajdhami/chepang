<?php
	/**
	* A unique identifier is defined to store the options in the database and reference them from the theme.
	* By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
	* If the identifier changes, it'll appear as if the options have been reset.
	*/
	function optionsframework_option_name() {
	// This gets the theme name from the stylesheet
		$themename = wp_get_theme();
		$themename = preg_replace("/\W/", "_", strtolower($themename) );
		$optionsframework_settings = get_option( 'optionsframework' );
		$optionsframework_settings['id'] = $themename;
		update_option( 'optionsframework', $optionsframework_settings );
	}
	/**
	* Defines an array of options that will be used to generate the settings page and be saved in the database.
	* When creating the 'id' fields, make sure to use all lowercase and no spaces.
	*/

	function optionsframework_options() {
		// If using image radio buttons, define a directory path
		$imagepath =  get_template_directory_uri() . '/images/';

		$options = array();
		
		//first tab when theme option is clicked (for official social links)
		$options[] = array(
			'name' => __('Social Links', 'chepang'),
			'type' => 'heading');
		$options[] =array(
			'name' => __('Facebook', 'chepang'),
			'desc' => __('Official Facebook page'),
			'std'  => 'https://www.facebook.com/pages/miracleinterface',
			'id'   => 'footer_social_link_facebook',
			'type' =>'text',
			);
		$options[] =array(
			'name' => __('Twitter', 'chepang'),
			'desc' => __('Official Twitter page'),
			'std'  => '',
			'id'   => 'footer_social_link_twitter',
			'type' =>'text',
			);

		$options[] =array(
			'name' => __('Googleplus', 'chepang'),
			'desc' => __('Official google+ page'),
			'id'   => 'footer_social_link_google',
			'std'  => '',
			'type' =>'text',
			);
		
		return $options;
	}//end of optionsframework_options function