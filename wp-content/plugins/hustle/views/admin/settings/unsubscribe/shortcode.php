<div id="shortcode-row" class="sui-box-settings-row">

	<div class="sui-box-settings-col-1">
		<span class="sui-settings-label"><?php esc_html_e( 'Shortcode', 'wordpress-popup' ); ?></span>
		<span class="sui-description"><?php esc_html_e( 'Use shortcode to display unsubscribe form anywhere you want to.', 'wordpress-popup' ); ?></span>
	</div>

	<div class="sui-box-settings-col-2">

		<div class="sui-with-button sui-with-button-inside">
			<input type="text"
				value='[wd_hustle_unsubscribe id="" ]'
				class="sui-form-control"
				readonly="readonly">
			<button class="sui-button-icon hustle-copy-shortcode-button">
				<i class="sui-icon-copy" aria-hidden="true"></i>
				<span class="sui-screen-reader-text"><?php esc_html_e( 'Copy shortcode', 'wordpress-popup' ); ?></span>
			</button>
		</div>

		<span class="sui-description"><?php esc_html_e( 'By default, the Unsubscribe form works for all the modules. If you want to let visitors unsubscribe from specific modules only, add the comma separated module ids in the id attribute.', 'wordpress-popup' ); ?></span>
		<span class="sui-description"><?php printf( esc_html__( 'You can find the module\'s ID in the URL of the module\'s wizard page: %s.', 'wordpress-popup' ), '/wp-admin/admin.php?page=hustle_popup&<b>id=58</b>' ); ?></span>

	</div>

</div>
