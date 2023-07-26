<?php
/**
 * ACF Blocks stuff: registration, block categories, etc.
 */

/**
 * Register our blocks.
 *
 * @link https://www.advancedcustomfields.com/resources/whats-new-with-acf-blocks-in-acf-6/
 *
 * @return void
 */
function demo_acf_blocks_register() {
	/**
	 * We register our block's with WordPress's handy
	 * register_block_type();
	 *
	 * @link https://developer.wordpress.org/reference/functions/register_block_type/
	 */
	// Phone Number block.
	register_block_type( DEMO_ACF_DIR . '/blocks/phone-number' );
}
add_action( 'init', 'demo_acf_blocks_register', 5 );

/**
 * Register a custom "ACF Blocks" block category for our blocks.
 *
 * @link https://developer.wordpress.org/reference/hooks/block_categories_all/
 *
 * @param array  $block_categories Existing block categories
 * @return array Block categories
 */
function demo_acf_block_category( $block_categories ) {

	$block_categories = array_merge(
		array(
			array(
				'slug'  => 'demo-acf-blocks',
				'title' => __( 'ACF Blocks', 'demo-acf' ),
				'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 13.87A4 4 0 0 1 7.41 6a5.11 5.11 0 0 1 1.05-1.54 5 5 0 0 1 7.08 0A5.11 5.11 0 0 1 16.59 6 4 4 0 0 1 18 13.87V21H6Z"></path><line x1="6" y1="17" x2="18" y2="17"></line></svg>',
			),
		),
		$block_categories,
	);

	return $block_categories;
}
add_filter( 'block_categories_all', 'demo_acf_block_category' );

/**
 * Add a custom message for this block in the editor sidebar.
 *
 * @link https://www.advancedcustomfields.com/resources/whats-new-with-acf-blocks-in-acf-6/#blocks-without-fields
 *
 * @param   string $message The default incoming message from ACF.
 * @param   string $block_name The block name current being rendered.
 *
 * @return  string The html that makes up a block form with no fields.
 */
function demo_acf_notification_no_fields_msg( $message, $block_name ) {
	if ( 'acf/phone-number' === $block_name ) {
		$message = sprintf(
			/* translators: %s: an admin URL to the field group edit screen */
			__( 'Edit the phone number in the <a href="%s" target="_blank">Site Settings</a>.', 'demo-acf' ),
			admin_url( 'admin.php?page=site-settings' )
		);
	}

	return $message;
}
add_filter( 'acf/blocks/no_fields_assigned_message', 'demo_acf_notification_no_fields_msg', 10, 2 );
