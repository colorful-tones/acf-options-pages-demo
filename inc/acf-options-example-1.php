<?php
/**
 * Demonstrating the current way to register Options pages
 * with ACF PRO (prior to 6.2).
 *
 * NOTE: there is no template logic for outputting any of
 * these fields or settings, and merely registering stuff.
 *
 * @link https://www.advancedcustomfields.com/resources/options-page/
 */

/**
 * Register ACF fields with PHP.
 *
 * @link https://www.advancedcustomfields.com/resources/register-fields-via-php/
 */
add_action(
	'acf/include_fields',
	function() {
		if ( ! function_exists( 'acf_add_local_field_group' ) ) {
			return;
		}

		acf_add_local_field_group(
			array(
				'key'                   => 'group_64c026dd06f95',
				'title'                 => 'Footer',
				'fields'                => array(
					array(
						'key'               => 'field_64c026dd08838',
						'label'             => 'Footer scripts',
						'name'              => 'footer_scripts',
						'aria-label'        => '',
						'type'              => 'textarea',
						'instructions'      => 'Scripts that need to go before the closing body.',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'maxlength'         => '',
						'rows'              => '',
						'placeholder'       => '',
						'new_lines'         => '',
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => 'acf-options-footer',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => '',
				'show_in_rest'          => 0,
			)
		);

		acf_add_local_field_group(
			array(
				'key'                   => 'group_64c025ec50848',
				'title'                 => 'Header',
				'fields'                => array(
					array(
						'key'               => 'field_64c025ecab30b',
						'label'             => 'Head scripts',
						'name'              => 'head_scripts',
						'aria-label'        => '',
						'type'              => 'textarea',
						'instructions'      => 'Scripts that need to go in the head of the document.',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'maxlength'         => '',
						'rows'              => '',
						'placeholder'       => '',
						'new_lines'         => '',
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => 'acf-options-header',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => '',
				'show_in_rest'          => 0,
			)
		);

		acf_add_local_field_group(
			array(
				'key'                   => 'group_64c01ae329594',
				'title'                 => 'Theme Settings',
				'fields'                => array(
					array(
						'key'               => 'field_64c01ae3acbdf',
						'label'             => 'Brand colors',
						'name'              => 'brand_colors',
						'aria-label'        => '',
						'type'              => 'group',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'layout'            => 'table',
						'sub_fields'        => array(
							array(
								'key'               => 'field_64c01b20acbe0',
								'label'             => 'Primary',
								'name'              => 'primary',
								'aria-label'        => '',
								'type'              => 'color_picker',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'enable_opacity'    => 1,
								'return_format'     => 'string',
							),
							array(
								'key'               => 'field_64c01b2facbe1',
								'label'             => 'Secondary',
								'name'              => 'secondary',
								'aria-label'        => '',
								'type'              => 'color_picker',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'enable_opacity'    => 1,
								'return_format'     => 'string',
							),
							array(
								'key'               => 'field_64c01b8facbe2',
								'label'             => 'Base',
								'name'              => 'base',
								'aria-label'        => '',
								'type'              => 'color_picker',
								'instructions'      => 'Used mostly for the site\'s background color. Should contrast with <strong>Contrast</strong>. Ideally passing <a href="https://webaim.org/resources/contrastchecker/" target="_blank">WCAG AA Guildlines</a>.',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'enable_opacity'    => 1,
								'return_format'     => 'string',
							),
							array(
								'key'               => 'field_64c01bacacbe3',
								'label'             => 'Contrast',
								'name'              => 'contrast',
								'aria-label'        => '',
								'type'              => 'color_picker',
								'instructions'      => 'Should contrast with <strong>Base</strong>. Ideally passing <a href="https://webaim.org/resources/contrastchecker/" target="_blank">WCAG AA Guildlines</a>.',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'enable_opacity'    => 1,
								'return_format'     => 'string',
							),
						),
					),
					array(
						'key'               => 'field_64c01f4b1b1af',
						'label'             => 'Social Links',
						'name'              => 'social_links',
						'aria-label'        => '',
						'type'              => 'group',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'layout'            => 'row',
						'sub_fields'        => array(
							array(
								'key'               => 'field_64c01f621b1b0',
								'label'             => 'Twitter URL',
								'name'              => 'twitter_url',
								'aria-label'        => '',
								'type'              => 'url',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'placeholder'       => '',
							),
							array(
								'key'               => 'field_64c01f721b1b1',
								'label'             => 'Facebook URL',
								'name'              => 'facebook_url',
								'aria-label'        => '',
								'type'              => 'url',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'placeholder'       => '',
							),
							array(
								'key'               => 'field_64c01f7d1b1b2',
								'label'             => 'Instagram URL',
								'name'              => 'instagram_url',
								'aria-label'        => '',
								'type'              => 'url',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'placeholder'       => '',
							),
						),
					),
					array(
						'key'               => 'field_64c01f9db57c8',
						'label'             => 'Default Images',
						'name'              => 'default_images',
						'aria-label'        => '',
						'type'              => 'group',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'layout'            => 'block',
						'sub_fields'        => array(
							array(
								'key'               => 'field_64c01fadb57c9',
								'label'             => 'Archive image (default)',
								'name'              => 'archive_image_default',
								'aria-label'        => '',
								'type'              => 'image',
								'instructions'      => 'Whenever there is a category then there is likely a landing page for that category (or term). This will be the fallback image for that landing page.',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'return_format'     => 'array',
								'library'           => 'all',
								'min_width'         => '',
								'min_height'        => '',
								'min_size'          => '',
								'max_width'         => '',
								'max_height'        => '',
								'max_size'          => '',
								'mime_types'        => '',
								'preview_size'      => 'full',
							),
							array(
								'key'               => 'field_64c01fd6b57ca',
								'label'             => 'Single Post image (default)',
								'name'              => 'single_post_default',
								'aria-label'        => '',
								'type'              => 'image',
								'instructions'      => 'If you forget to set a Featured Image on a Post then this will be the fallback, default image shown.',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'return_format'     => 'array',
								'library'           => 'all',
								'min_width'         => '',
								'min_height'        => '',
								'min_size'          => '',
								'max_width'         => '',
								'max_height'        => '',
								'max_size'          => '',
								'mime_types'        => '',
								'preview_size'      => 'medium',
							),
						),
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => 'theme-general-settings',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => '',
				'show_in_rest'          => 0,
			)
		);
	}
);

/**
 * Add ACF Options pages / sub-pages.
 */
if ( function_exists( 'acf_add_options_page' ) ) {

	/**
	 * Add a top-level ACF Options page.
	 *
	 * @link https://www.advancedcustomfields.com/resources/acf_add_options_page/
	 */
	acf_add_options_page(
		array(
			'page_title' => 'Theme General Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect'   => false,
			'icon_url'   => 'data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTUgMjQiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTQzLjk5ODYgMjMuODgxNkgzOC4wNTIxVjAuMDI1MzQ0OEg1My45MDM0VjUuNTgwNjRINDMuOTk4NlY5LjgzNzYySDUzLjMzNFYxNS4yNTQ3SDQzLjk5ODZWMjMuODgyNVYyMy44ODE2WiIgZmlsbD0iYmxhY2siLz48cGF0aCBvcGFjaXR5PSIwLjA1IiBkPSJNMzYuNDgzMiAxMy44Njk3SDQyLjM3NzJDNDEuNTA1MSAxOS45NDE3IDM2LjM4NDkgMjMuOTU3NCAzMC4xODE0IDIzLjk1NzRDMjMuMzg4MiAyMy45NTc0IDE3Ljg1NzIgMTguODgwOSAxNy44NTcyIDEyLjA0NDhDMTcuODQzIDEwLjQ1NTEgMTguMTUyMSA4Ljg3OSAxOC43NjU4IDcuNDEyMzlDMTkuMzc5NSA1Ljk0NTc5IDIwLjI4NDkgNC42MTkyNCAyMS40MjcxIDMuNTEzMzRDMjMuNzcxNCAxLjI0MzA0IDI2LjkxODIgLTAuMDA4MzQxMDQgMzAuMTgxNCAwLjAzMjAzMzVDMzYuMzI3NSAwLjAzMjAzMzUgNDEuNTkwOCA0LjA3ODc5IDQyLjMzOTIgMTAuMDUzNkgzNi40NTExQzM0LjY4MDcgMy4yODU2IDIzLjY0OSAzLjk0NzQxIDIzLjY0OSAxMi4wNDQ4QzIzLjY0OSAyMC4xNDMyIDM0LjgxODkgMjAuNzM5OCAzNi40ODMyIDEzLjg3MTZWMTMuODY5N1oiIGZpbGw9ImJsYWNrIi8+PHBhdGggZD0iTTM1LjI3NzIgMTMuODY5N0MzNC4yNjYgMTcuMjg1OCAzMC42NjcgMTkuMzE3IDI3LjEyNDQgMTguNDY2NEMyMy41Nzk4IDE3LjYxMjggMjEuMzU4OCAxNC4xODcgMjIuMDk0NiAxMC43MDQ3QzIyLjgyOTQgNy4yMjE0NiAyNi4yNTcyIDQuOTI2NTUgMjkuODU4MiA1LjUwNzU4QzMxLjMzMzQgNS43MDczOCAzMi42OTM3IDYuNDEyNDcgMzMuNzA3NCA3LjUwMjczQzM0LjQwOCA4LjIyMzk0IDM0LjkzMzcgOS4wOTYzIDM1LjI0NDIgMTAuMDUyNkg0MC45NkM0MC4yMTE2IDQuMDY0MjUgMzQuOTMzNyAwLjAzMjA4NzUgMjguODAyMiAwLjAzMjA4NzVDMjUuNTM4NiAtMC4wMDk0MjkzOSAyMi4zOTEgMS4yNDEyOSAyMC4wNDU5IDMuNTExNDRDMTguOTAzIDQuNjE3NjEgMTcuOTk3IDUuOTQ0NzMgMTcuMzgzMSA3LjQxMjA4QzE2Ljc2OTMgOC44Nzk0MiAxNi40NjAzIDEwLjQ1NjMgMTYuNDc1MSAxMi4wNDY4QzE2LjQ3NTEgMTguODgyOSAyMS45NzM5IDIzLjk1NzQgMjguODA0MiAyMy45NTc0QzM1LjAwMjggMjMuOTU3NCA0MC4xMDg0IDE5Ljk0MTggNDAuOTk2IDEzLjg2OTdIMzUuMjc2M0gzNS4yNzcyWiIgZmlsbD0iYmxhY2siLz48cGF0aCBvcGFjaXR5PSIwLjA1IiBkPSJNMTcuNTE0NiAyMC40MTA5SDkuMjM5MUw3Ljg4NjI5IDIzLjg3NzZIMS41NTMzN0wxMS4yNDUgMEgxNS40Njg5TDI1LjU0NTkgMjMuODg1NEgxOC44NTk3TDE3LjUxMjcgMjAuNDEwOUgxNy41MTQ2Wk0xMS41OTE0IDE0LjUwMDRMMTEuMzg0MSAxNS4wMzk2SDE1LjQwMTdMMTUuMjYyNSAxNC42MzQ3TDEzLjM5MTkgOS41MTQ0NkwxMS41OTE0IDE0LjUwMDRaIiBmaWxsPSJibGFjayIvPjxwYXRoIGQ9Ik0xNS45NDc2IDIwLjQxMDlINy42ODU3M0w2LjMzMzg5IDIzLjg3NzZIMEw5LjY5MjU3IDBIMTMuOTE2NUwyMy45OTM1IDIzLjg4NTRIMTcuMzEwMkwxNS45NDc2IDIwLjQxMDlaTTEwLjAzODEgMTQuNTAwNEw5LjgzMTc0IDE1LjAzOTZIMTMuODQ5M0wxMy43MDkyIDE0LjYzNDdMMTEuODM5NiA5LjUxNDQ2TDEwLjAzOSAxNC41MDA0SDEwLjAzODFaIiBmaWxsPSJibGFjayIvPjwvc3ZnPg==',
		)
	);

	/**
	 * Add an ACF Options sub-page.
	 *
	 * @link https://www.advancedcustomfields.com/resources/acf_add_options_sub_page/
	 */
	acf_add_options_sub_page(
		array(
			'page_title'  => 'Theme Header Settings',
			'menu_title'  => 'Header',
			'parent_slug' => 'theme-general-settings',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title'  => 'Theme Footer Settings',
			'menu_title'  => 'Footer',
			'parent_slug' => 'theme-general-settings',
		)
	);

}
