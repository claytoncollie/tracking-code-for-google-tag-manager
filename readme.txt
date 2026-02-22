=== Tracking Code for Google Tag Manager ===
Contributors: claytoncollie
Donate link: https://github.com/sponsors/claytoncollie
Tags: google, tag manager, tracking code, container, google tag manager
Requires at least: 5.2
Tested up to: 6.9
Requires PHP: 7.2
Stable tag: 2.0.0
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Simple, lightweight solution for inserting your Google Tag Manager tracking code.

== Description ==

Tracking Code For Google Tag Manager is a simple, lightweight WordPress plugin for inserting your Google Tag Manager tracking code. The plugin does one thing and one thing only; prints the standard Google Tag Manager tracking script to the `<head>` and `<body>` of your website. To insert your container ID, navigate to Settings > General and then scroll to the bottom of the page.

### Composer

`composer require claytoncollie/tracking-code-for-google-tag-manager`

### Definitions

If you want to set the container ID with a constant in your `wp-config.php` file, use the definition below. When a definition is set, the admin input field will be disabled.

`define( 'TRACKING_CODE_FOR_GOOGLE_TAG_MANAGER_ID', 'GTM-1234567' );`

### Filters

If you want to set the container ID without using the wp-admin user interface, use the filter below. When a filter is set, the admin input field will be disabled.

`
add_filter(
	'tracking_code_for_google_tag_manager_id',
	/**
	 * Set Google Tag Manager container ID.
	 *
	 * @param string $container_id Container ID.
	 *
	 * @return string
	 */
	function ( $container_id ) {
		return 'GTM-7654321';
	}
);
`

### Related Plugins

* [Tracking Code for Google Analytics](https://wordpress.org/plugins/tracking-code-for-google-analytics/)
* [Tracking Code for LinkedIn Insights Tag](https://wordpress.org/plugins/tracking-code-for-linkedin-insights-tag/)
* [Tracking Code for Pinterest Pixel](https://wordpress.org/plugins/tracking-code-for-pinterest-pixel/)
* [Tracking Code for Twitter Pixel](https://wordpress.org/plugins/tracking-code-for-twitter-pixel/)

### Contributing

While the purpose of this plugin is to be very tightly scoped, issues and pull requests are welcome, but I do not guarantee that everything will be merged or support will be given.

https://github.com/claytoncollie/tracking-code-for-google-tag-manager

== Installation ==

1. Upload `tracking-code-for-google-tag-manager` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Navigate to Settings > General > scroll to the bottom of the page
4. Insert your container ID
5. Save your changes

== Frequently Asked Questions ==

= Why did you build this plugin? =

The plugins I have used in the past to solve this problem have too many features for my liking. This plugin is comprised of three functions. One for registering a settings field on the Options General page. And another two for printing the tracking code to the frontend. I want a lightweight solution for the websites that I build without all of the extra bells and whistles. If you are expecting this plugin to do more or grow in the future, please do not use it.

= Where is the tracking code inserted? =

The tracking code is inserted into the `<head>` and `<body>` sections.

= Will this plugin slow down my website? =

No. This plugin is intentionally lightweight. All it does is register a settings field, saves to the database, and then inserts the tracking code. Nothing more.

= I found a bug. How do I report it? =

https://github.com/claytoncollie/tracking-code-for-google-tag-manager/issues

= Can I use this plugin with Composer? =

https://packagist.org/packages/claytoncollie/tracking-code-for-google-tag-manager

== Changelog ==

= 2.0.0 =
* Add PHP namespace
* Add wp-config.php definition support for container ID
* Add filter-based configuration support
* Add disabled input field when definition or filter overrides value
* Add parameter and return type hints to all functions
* Bump minimum PHP version to 7.2
* Bump tested up to WordPress 6.9

= 1.0.0 =
* Initial release
