<?php
/**
 * Public facing features.
 *
 * @package Tracking_Code_For_Google_Tag_Manager
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'wp_head', 'tracking_code_for_google_tag_manager_do_the_head_script', 1, 0 );
/**
 * Output the tracking code snippet to the frontend inside the header element.
 *
 * @return void
 * @since 1.0.0
 */
function tracking_code_for_google_tag_manager_do_the_head_script() {
	/**
	 * Filter the container_id variable to support other methods of setting this value.
	 *
	 * @param string $container_id The Google Tag Manager container ID.
	 * @return string
	 * @since 1.0.0
	 */
	$container_id = apply_filters( 'tracking_code_for_google_tag_manager_id', get_option( 'tracking_code_for_google_tag_manager', '' ) );

	if ( '' === $container_id ) {
		return;
	}

	printf(
		// phpcs:disable
		'
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
		new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
		\'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,\'script\',\'dataLayer\',\'%1$s\');</script>
		<!-- End Google Tag Manager -->
		',
		// phpcs:enable
		esc_attr( $container_id )
	);
}

add_action( 'wp_body_open', 'tracking_code_for_google_tag_manager_do_the_body_script', 1, 0 );
/**
 * Output the tracking code snippet to the frontend inside the body element.
 *
 * @return void
 * @since 1.0.0
 */
function tracking_code_for_google_tag_manager_do_the_body_script() {
	/**
	 * Filter the container_id variable to support other methods of setting this value.
	 *
	 * @param string $container_id The Google Tag Manager container ID.
	 * @return string
	 * @since 1.0.0
	 */
	$container_id = apply_filters( 'tracking_code_for_google_tag_manager_id', get_option( 'tracking_code_for_google_tag_manager', '' ) );

	if ( '' === $container_id ) {
		return;
	}

	printf(
		// phpcs:disable
		'
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=%1$s"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		',
		// phpcs:enable
		esc_attr( $container_id )
	);
}
