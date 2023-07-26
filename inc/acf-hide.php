<?php
/**
 * Hide the ACF menu item from clients.
 *
 * @link https://www.advancedcustomfields.com/resources/how-to-hide-acf-menu-from-clients/
 */

if ( wp_get_environment_type() === 'production' ) {
	// Only allow fields to be edited on development
	add_filter( 'acf/settings/show_admin', '__return_false' );
}
