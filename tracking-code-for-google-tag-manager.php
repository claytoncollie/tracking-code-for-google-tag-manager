<?php
/**
 * Plugin Name:     Tracking Code For Google Tag Manager
 * Plugin URI:      https://github.com/claytoncollie/tracking-code-for-google-tag-manager
 * Description:     Simple, lightweight solution for inserting your Google Tag Manager tracking code.
 * Author:          Clayton Collie
 * Author URI:      https://github.com/claytoncollie
 * Text Domain:     tracking-code-for-google-tag-manager
 * Version:         2.0.0
 *
 * @package         Tracking_Code_For_Google_Tag_Manager
 */

namespace Tracking_Code_For_Google_Tag_Manager;

const OPTION_NAME = 'tracking_code_for_google_tag_manager';
const FILTER_NAME = 'tracking_code_for_google_tag_manager_id';
const CONFIG_NAME = 'TRACKING_CODE_FOR_GOOGLE_TAG_MANAGER_ID';

require_once __DIR__ . '/inc/tracking-id.php';
require_once __DIR__ . '/inc/admin.php';
require_once __DIR__ . '/inc/public.php';
