# Options pages and site-wide fields with ACF

This is a WordPress plugin that requires ACF PRO plugin. This plugin demonstrates different ways to create Options pages with site-wide settings. These are often used to allow clients a centralized place to update and control site-wide settings.

This plugin will create three different Options pages.

| Options page name | WP Admin URL | Description |
|---------|-----------------------|
| Theme Settings | `wp-admin/admin.php?page=theme-general-settings` | This is created programmatically with ACF's [`acf_add_options_page()`](https://www.advancedcustomfields.com/resources/acf_add_options_page/) and [`acf_add_options_sub_page()`](https://www.advancedcustomfields.com/resources/acf_add_options_sub_page/). This was the traditional way of registering an Options Page prior to 6.2. |
| Site Settings | `wp-admin/admin.php?page=site-settings` | Utilizes the new, upcoming Options Page UI in ACF to register and save Options Page. The Options Pages are synced with ACF's Local JSON (see `demo-acf-plugin/inc/acf-json.php` and `demon-acf-plugin/acf-json/ui-options_page)_xxxxxxxxxxxx.json`) |
| Theme Settings (WordPress way) | `wp-admin/admin.php?page=wp-core-theme-settings` | A simple example of using WordPress core's Settings & Options APIs to create Options Pages (the hard way). |
