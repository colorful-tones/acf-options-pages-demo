<?php
/**
 * Demo WP core Options & Settings plugin.
 */

// Register a new top level "Theme Settings" menu item in WP Admin.
function wpe_example_add_options_page() {
	/**
	 * Registers a new top level "Theme Settings" menu item.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_menu_page/
	 */
	add_menu_page(
		__( 'Theme General Settings', 'wpe-example' ),  // Page title.
		__( 'Theme Settings', 'wpe-example' ),          // Menu title.
		'manage_options',                               // Capabilities to access.
		'wp-core-theme-settings',                       // Menu slug.
		'wpe_example_options_page_html',                // Callback function.
		'dashicons-wordpress-alt',                      // Icon.
	);
}
// Fires before the administration menu loads in the admin.
add_action( 'admin_menu', 'wpe_example_add_options_page' );

function wpe_example_settings_init() {
	/**
	 * Register a new settings group for "Site Settings" page,
	 * and assign an option.
	 *
	 * @link https://developer.wordpress.org/reference/functions/register_setting/
	 */
	// Phone Number.
	register_setting(
		'theme-settings-general',  // Settings group name.
		'wpe_example_phone_number' // Name of option.
	);

	// Notification bar: on/off.
	register_setting(
		'theme-settings-general',          // Settings group name.
		'wpe_example_notification_enabled' // Name of option.
	);

	// Notification bar: text.
	register_setting(
		'theme-settings-general',          // Settings group name.
		'wpe_example_notification_content' // Name of option.
	);

	/**
	 * Register a new section in the "Site Settings" page.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_settings_section/
	 */
	// Section: Contact Info.
	add_settings_section(
		'wpe_example_contact_info_section',  // Unique ID.
		__( 'Contact Info', 'wpe-example' ), // Title for section.
		null,                                // Callback function.
		'wp-core-theme-settings'             // Slug of page to associate with section.
	);

	// Section: Notification Bar.
	add_settings_section(
		'wpe_example_notification_section',      // Unique ID.
		__( 'Notification Bar', 'wpe-example' ), // Title for section.
		'wpe_example_notification_section_cb',   // Callback function.
		'wp-core-theme-settings'                 // Slug of page to associate with section.
	);

	/**
	 * Register a new field in the "Theme Settings" page.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_settings_field/
	 */
	// Field: Phone Number.
	add_settings_field(
		'wpe_example_phone_number',          // Unique ID.
		__( 'Phone Number', 'wpe-example' ), // Title (and label).
		'wpe_example_phone_number_cb',       // Callback function.
		'wp-core-theme-settings',            // Slug of page to associate with field.
		'wpe_example_contact_info_section',  // Slug of section to associate with field.
	);

	// Field: Notification bar On/Off.
	add_settings_field(
		'wpe_example_notification_enabled',         // Unique ID.
		__( 'Notification On/Off', 'wpe-example' ), // Title (and label).
		'wpe_example_notification_enabled_cb',      // Callback function.
		'wp-core-theme-settings',                   // Slug of page to associate with field.
		'wpe_example_notification_section',         // Slug of section to associate with field.
	);

	// Field: Notification message.
	add_settings_field(
		'wpe_example_notification_msg',              // Unique ID.
		__( 'Notification message', 'wpe-example' ), // Title (and label).
		'wpe_example_notification_msg_cb',           // Callback function.
		'wp-core-theme-settings',                    // Slug of page to associate with field.
		'wpe_example_notification_section',          // Slug of section to associate with field.
	);
}

/**
 * Register our wpe_example_settings_init to the admin_init action hook.
 */
add_action( 'admin_init', 'wpe_example_settings_init' );

/**
 * Custom option and settings:
 *  - callback functions
 */

/**
 * Callback function for the notification bar section
 */
function wpe_example_notification_section_cb() {
	echo 'Configure the notification bar settings below:';
}

/**
 * Site-wide phone number field callback function.
 */
function wpe_example_phone_number_cb() {
	// Get the value of the setting we've registered with register_setting()
	$phone_number = get_option( 'wpe_example_phone_number', '(555) 555-1234' );
	?>

	<input type="text" name="phone_number" value="<?php echo esc_attr( $phone_number ); ?>" />
	<?php
}

/**
 * Callback function for the notification bar enabled field
 */
function wpe_example_notification_enabled_cb() {
	$notification_enabled = get_option( 'wpe_example_notification_enabled' );
	echo '<input type="checkbox" name="notification_bar_enabled" value="1" ' . checked( 1, $notification_enabled, false ) . ' />';
}

/**
 * Callback function for the notification bar text field
 */
function wpe_example_notification_msg_cb() {
	$notification_message = get_option( 'wpe_example_notification_msg' );
	echo '<textarea name="notification_msg" rows="10" cols="20" class="regular-text code">' . esc_textarea( $notification_message ) . '</textarea>';
}

/**
 * Top level menu callback function.
 */
function wpe_example_options_page_html() {
	// Check user capabilities.
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	// Add error/update messages

	// Check if the user have submitted the settings
	// WordPress will add the "settings-updated" $_GET parameter to the url
	if ( isset( $_GET['settings-updated'] ) ) {
		// Add settings saved message with the class of "updated"
		add_settings_error(
			'wpe_example_messages',
			'wpe_example_message',
			__( 'Settings Saved', 'wpe-example' ),
			'updated'
		);
	}

	// Show error/update messages
	settings_errors( 'wpe_example_messages' );
	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			<?php
			// Output security fields for the registered setting "Theme Settings"
			settings_fields( 'theme-settings-general' );
			// Output setting sections and their fields
			do_settings_sections( 'wp-core-theme-settings' );
			// Output save settings button
			submit_button( 'Save Settings' );
			?>
		</form>
	</div>
	<?php
}
