<?php
/*
Plugin Name: Stop Censorship Ribbon
Plugin URI: http://mind.sh/are/downloads/stop-censorship-wordpress-plugin/
Description: When activated, this plugin will put a Stop Censorship ribbon on the top right corner of your website. This is a fork of Konstantin Kovshenin's plugin.
Author: Mindshare Studios
Version: 1.0.1
License: GPLv2
Author URI: http://mind.sh/are/
*/

function render_stop_censorship_ribbon() {
	$ribbon_url = plugins_url( 'stop-censorship-ribbon.png', __FILE__ );
	echo "<a target='_blank' class='stop-censorship-ribbon' href='http://americancensorship.org/'><img src='{$ribbon_url}' alt='Stop censorship' style='position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer; border:none;' /></a>";
}
add_action( 'wp_footer', 'render_stop_censorship_ribbon' );