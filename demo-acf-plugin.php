<?php
/**
 * Plugin Name:       Demo ACF plugin
 * Description:       A WordPress plugin for custom ACF Blocks, site options fields and more.
 * Requires at least: 6.2
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            WP Engine DevRel (DAC)
 * Author URI:        https://github.com/colorful-tones
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       demo-acf
 *
 * @package           demo-acf
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define some constants.
define( 'DEMO_ACF_DIR', dirname( __FILE__ ) );

// Example of current ACF way (pre 6.2, code only)
require DEMO_ACF_DIR . '/inc/acf-options-example-1.php';
// Example of WP core's Settings & Options APIs.
require DEMO_ACF_DIR . '/inc/wp-core-example.php';
// Set custom load & save JSON points for ACF sync.
require DEMO_ACF_DIR . '/inc/acf-json.php';
// Custom ACF Blocks and block-related stuff.
require DEMO_ACF_DIR . '/inc/acf-blocks.php';
// Example of newer ACF way (6.2 Options UI)
require DEMO_ACF_DIR . '/inc/acf-options-example-2.php';

// Optional - Hide ACF from WP Admin on Production.
// require DEMO_ACF_DIR . '/inc/acf-hide.php';
