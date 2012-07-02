<?php
/*
Plugin Name: Stop Censorship Ribbon
Plugin URI: http://mind.sh/are/downloads/stop-censorship-wordpress-plugin/
Description: When activated, this plugin will put a Stop Censorship ribbon on the top right corner of your website.
Author: Mindshare Studios
Version: 1.0.5
License: GPLv2
Author URI: http://mind.sh/are/
*/

function render_stop_censorship_ribbon() {
	$ribbon_url = plugins_url('stop-censorship-ribbon.png', __FILE__ );
	if(function_exists('is_admin_bar_showing')) {
		$padding_top = is_admin_bar_showing() ? 28 : 0;
	} else {
		$padding_top = 0;
	}
	echo "<a target='_blank' class='stop-censorship-ribbon' href='http://act.freepress.net/sign/internetdeclaration/' title='Join the fight for internet freedom'><img src='{$ribbon_url}' alt='Stop censorship' style='position: fixed; top: ".$padding_top ."px; right: 0; z-index: 100000; cursor: pointer; border:none;' /></a>";
}
add_action('wp_footer', 'render_stop_censorship_ribbon');