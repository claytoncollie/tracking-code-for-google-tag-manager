<?php
/**
 * Public facing features.
 *
 * @package Tracking_Code_For_Google_Tag_Manager
 */

namespace Tracking_Code_For_Google_Tag_Manager;

use function Tracking_Code_For_Google_Tag_Manager\get_the_id;

add_action( 'wp_head', __NAMESPACE__ . '\head_script', 1 );
/**
 * Output the tracking code snippet to the frontend inside the header element.
 *
 * @return void
 * @since 1.0.0
 */
function head_script() : void {
	$container_id = get_the_id();

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

add_action( 'wp_body_open', __NAMESPACE__ . '\body_script', 1 );
/**
 * Output the tracking code snippet to the frontend inside the body element.
 *
 * @return void
 * @since 1.0.0
 */
function body_script() : void {
	$container_id = get_the_id();

	if ( '' === $container_id ) {
		return;
	}

	printf(
		// phpcs:disable
		'
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=%1$s" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		',
		// phpcs:enable
		esc_attr( $container_id )
	);
}
