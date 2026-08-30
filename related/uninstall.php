<?php
/*
 * This file will be called when pressing 'Delete' on Dashboard > Plugins.
 */


// if uninstall.php is not called by WordPress, die.
if ( ! defined('WP_UNINSTALL_PLUGIN') ) {
	die();
}

$option_names = array(
		'related_show',
		'related_list',
		'related_content',
		'related_content_all',
		'related_content_rss',
		'related_content_title',
		'related_content_extended',
		'related_double_plugin',
		'related_du_show',
		'related_du_list',
		'related_du_content',
		'related_du_content_all',
		'related_du_content_rss',
		'related_du_content_title',
		'related_du_content_extended',
	);

foreach ( $option_names as $option_name ) {

	delete_option( $option_name );

	// for site options in Multisite
	delete_site_option( $option_name );

}
