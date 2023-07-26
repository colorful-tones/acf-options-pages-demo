<?php
/**
 * ACF Set custom load and save JSON points.
 *
 * @link https://www.advancedcustomfields.com/resources/local-json/
 */

/**
 * Set custom ACF JSON save point.
 *
 * @link https://www.advancedcustomfields.com/resources/local-json/#saving-explained
 *
 * @param string  $path Existing, incoming path.
 *
 * @return string $path New, outgoing path.
 */
function demo_acf_json_save_point( $path ) {
	// Update ACF JSON save path.
	$path = DEMO_ACF_DIR . '/acf-json';

	return $path;
}
add_filter( 'acf/settings/save_json', 'demo_acf_json_save_point' );

/**
 * Set a custom ACF JSON load path.
 *
 * @link https://www.advancedcustomfields.com/resources/local-json/#loading-explained
 *
 * @param array  $paths Existing, incoming path.
 *
 * @return array $paths New, outgoing path.
 */
function demo_acf_json_load_point( $paths ) {
	// Append our new path.
	$paths[] = DEMO_ACF_DIR . '/acf-json';

	return $paths;
}
add_filter( 'acf/settings/load_json', 'demo_acf_json_load_point' );
