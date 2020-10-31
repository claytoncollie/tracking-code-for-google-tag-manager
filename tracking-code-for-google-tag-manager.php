<?php
/**
 * Plugin Name:     Tracking Code For Google Tag Manager
 * Plugin URI:      https://github.com/claytoncollie/tracking-code-for-google-tag-manager
 * Description:     Simple, lightweight solution for inserting your Google Tag Manager tracking code.
 * Author:          Clayton Collie
 * Author URI:      https://github.com/claytoncollie
 * Text Domain:     tracking-code-for-google-tag-manager
 * Version:         1.0.0
 *
 * @package         Tracking_Code_For_Google_Tag_Manager
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once __DIR__ . '/inc/admin.php';
require_once __DIR__ . '/inc/public.php';
