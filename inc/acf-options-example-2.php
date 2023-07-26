<?php
/**
 * Nothing to really see here.
 * Everything is registered in ACF 6.2's UI,
 * and saved to the /acf-json/.
 *
 * The rest (below) is just some simple output
 * logic for the demo site.
 */

/**
 * Get the site notice message, and display it.
 *
 * @return void
 */
function demo_acf_output_notification() {
	$has_notice = get_field( 'notification_bar', 'options' );

	if ( ! $has_notice || ! $has_notice['notification_onoff'] ) {
		return;
	}
	?>

	<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color is-layout-flow" style="margin-top:0;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px">
		<div class="wp-block-group is-content-justification-center is-layout-flex">
			<p class="has-text-align-center has-x-small-font-size" style="line-height:1.5;margin-inline:auto;"><?php echo wp_kses_post( $has_notice['notification_message'] ); ?></p>
		</div>
	</div>
	<?php
}
// Notification to be placed after opening body tag.
add_action( 'wp_body_open', 'demo_acf_output_notification' );

/**
 * Get the GA ID and output in the site <head>.
 *
 * @return void
 */
function demo_acf_output_ga() {
	$ga4_id = get_field( 'ga4_id', 'options' );

	if ( ! $ga4_id ) {
		return;
	}
	?>

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', '<?php echo esc_attr( $ga4_id ); ?>', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- End Google Analytics -->
	<?php
}
// Notification to be placed after opening body tag.
add_action( 'wp_head', 'demo_acf_output_ga' );
