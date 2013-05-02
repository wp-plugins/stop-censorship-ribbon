<?php
/*
Plugin Name: Stop Censorship Ribbon
Plugin URI: http://mind.sh/are/downloads/stop-censorship-wordpress-plugin/
Description: When activated, this plugin will put a Stop Censorship ribbon on the top right corner of your website.
Version: 1.0.7
License: GPLv2
Author: Mindshare Studios
Author URI: http://mind.sh/are/
*/


/*
You can use CSS in your site stylesheet to control the z-index or modify the exact positioning:

.stop-censorship-ribbon img {
	z-index: 10 !important;
}
*/

function render_stop_censorship_ribbon() {
	$ribbon_url = plugins_url('stop-censorship-ribbon.png', __FILE__);
	$action_url = "http://www.cispaisback.org/";
	if(function_exists('is_admin_bar_showing')) {
		$padding_top = is_admin_bar_showing() ? 28 : 0;
	} else {
		$padding_top = 0;
	}
	echo "<a target='_blank' class='stop-censorship-ribbon' href='".$action_url."' title='Join the fight for internet freedom'><img src='{$ribbon_url}' alt='Stop censorship' style='position: fixed; top: ".$padding_top."px; right: 0; z-index: 100000; cursor: pointer; border:none;' /></a>";
}

add_action('wp_footer', 'render_stop_censorship_ribbon');
