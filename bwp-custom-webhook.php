<?php
/*
Plugin Name: BWP Custom Webhook
Plugin URI: http://bwp.hmn.md/
Description: Add custom webhooks to BackUpWordPress.
Version: 0.1.0
Author: Human Made Limited
Author URI: https://bwp.hmn.md/
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain: backupwordpress
Domain Path: /languages
Network: true
*/

add_action( 'backupwordpress_loaded', function() {

	if ( ! class_exists( 'HMBKP_Webhook_Custom_Service' ) ) {
		require_once __DIR__ . '/inc/class-webhook-custom.php';
	}
} );
