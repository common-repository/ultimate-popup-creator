<script type="text/javascript">
	jQuery(document).ready(function($) {
		//Getting Font Name
		var fonts = [
			"<?php echo get_option('wpappp-popup1-heading-font-family-option') ?>", 
			"<?php echo get_option('wpappp-popup1-subheading-font-family-option') ?>", 
			"<?php echo get_option('wpappp-popup1-action-button-font-family-option') ?>", 
			"<?php echo get_option('wpappp-popup1-security-note-font-family-option') ?>"
		];
		// Removing Duplicate Fonts
		var uniqueNames = [];
		$.each(fonts, function(i, el){
			if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
		});

		// Replacing Space with +
		array = $.map(uniqueNames, function(value){
			return value.replace(/ /g, '+');
		});
		// Function to load fonts in head
		function addGoogleFont(FontName) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + FontName + "' rel='stylesheet' type='text/css'>");
		}
		// Looping through font names to load in head
		for (var i = 0; i < array.length; i++) {
			addGoogleFont(array[i]);
		}
	});
</script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>

	#wpup-popup1-heading1{
		font-family: <?php if(get_option('wpappp-popup1-heading-font-family-option')!=''){ echo get_option('wpappp-popup1-heading-font-family-option');}?>;
	}
	#wpup-popup1-heading2{
		font-family: <?php if(get_option('wpappp-popup1-subheading-font-family-option')!=''){ echo get_option('wpappp-popup1-subheading-font-family-option');}?>;
	}
	#wpup-popup1-subscribe-button{
		font-family: <?php if(get_option('wpappp-popup1-action-button-font-family-option')!=''){ echo get_option('wpappp-popup1-action-button-font-family-option');}?>;
	}
	#wpup-popup1-security-note-text{
		font-family: <?php if(get_option('wpappp-popup1-security-note-font-family-option')!=''){ echo get_option('wpappp-popup1-security-note-font-family-option');}?>;
	}
	#wpup-popup1-container {
		background-image: url("<?php echo plugins_url('../images/popup1-img/bg.jpg',__FILE__)?>") !important;
		width: <?php echo get_option('wpappp-popup1-width-option') ?>px !important;	
	}
	#wpup-popup1-heading1 {
		color: <?php echo get_option('wpappp-popup1-heading-text-color-option') ?> !important;
		font-size: <?php echo get_option('wpappp-popup1-heading-font-size-option') ?> !important;
	}
	#wpup-popup1-heading2 {
		color: <?php echo get_option('wpappp-popup1-subheading-text-color-option') ?> !important;
		font-size: <?php echo get_option('wpappp-popup1-subheading-font-size-option') ?> !important;
	}
	.wpappp-popup1-border-color {
		border-color: <?php echo get_option('wpappp-popup1-textfields-border-color-option') ?> !important;
	}
	#line-break {
		background-color: <?php echo get_option('wpappp-popup1-seperator-color-option') ?> !important;
	}
	#wpup-popup1-subscribe-button {
		background-color: <?php echo get_option('wpappp-popup1-action-button-background-color-option') ?> !important;
		color: <?php echo get_option('wpappp-popup1-action-button-text-color-option') ?> !important;
		padding: 0;
	}
	#wpup-popup1-security-note-text {
		color: <?php echo get_option('wpappp-popup1-security-note-text-color-option') ?> !important;
	}
	#wpappp-popup1{
		background: rgba(0,0,0,<?php echo get_option('wpappp-popup1-overlay-option') ?>) !important;
	}
	#wpup-popup1-name-text{
		border-radius: 0px !important;
	}
	#wpup-popup1-email-text{
		border-radius: 0px !important;
	}
	#wpaup_lock_image{
		display: <?php if(get_option('wpappp-popup1-security-note-text-option')==''){ echo 'none !important';}else{ echo 'inline-block !important'; }?>;
	}
</style>
<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

echo '
<div id="wpappp-popup1" class="wpappp_popup_wrapper_container animated" style="display:none;">
	<div id="wpup-popup1-container" class="animated">

		<div id="wpup-popup-close-button" class="animated">

			<a><img id="wpappp_popup_close_button" src="'.  plugins_url('../images/popup1-img/close.png', __FILE__) .'"></a>

		</div>

		<div id="wpup-popup1-container-content" class="animated">

			<h2 id="wpup-popup1-heading1" class="animated"> '.get_option('wpappp-popup1-heading-text-option').' </h2>

			<div id="line-break" class="animated"></div>

			<h4 id="wpup-popup1-heading2" class="animated"> '.get_option('wpappp-popup1-subheading-text-option').' </h4>

			<p id="popup1_name_text"><input type="text" id="wpup-popup1-name-text" class="wpappp_subscriber_name_submit wpappp-popup1-border-color animated" name="wpappp_subscriber_name" value="" placeholder=" '.get_option('wpappp-popup1-name-textfield-placeholder-option').' "></p>

			<p id="popup1_email_text"><input type="text" id="wpup-popup1-email-text" class="wpappp_subscriber_email_submit wpappp-popup1-border-color animated" name="wpappp_subscriber_email" value="" placeholder=" '.get_option('wpappp-popup1-email-textfield-placeholder-option').'"></p>

			<input type="submit" id="wpup-popup1-subscribe-button" class="wpappp-subscribe-button-submit animated" name="wpappp-subscribe-button" value=" '.get_option('wpappp-popup1-action-button-text-option').'">

			<div id="wpup-popup-security-note">

				<img id="wpaup_lock_image" class="animated" style="margin-bottom: -2px;" src="'.  plugins_url('../images/popup1-img/lock.png', __FILE__) .'" />

				<span class="animated" id="wpup-popup1-security-note-text"> '.get_option('wpappp-popup1-security-note-text-option').'</span>

			</div>

		</div>
		<input type="hidden" id="wpappp-show-popup" value="'.get_option('wpappp-popup-show-once-or-everytime').'"/>
		<input type="hidden" id="wpappp-auto-close-popup" value="'.get_option('wpappp-popup-auto-close-time-option').'"/>
		<input type="hidden" id="wpappp-show-popup-after" value="'.get_option('wpappp-popup-show-popup-time-option').'"/>
		<input type="hidden" id="wpappp-cookie-expire-time" value="'.get_option('wpappp-popup-cookie-expire-time').'"/>
		<input type="hidden" id="wpappp-cookie-expire-time" value="'.get_option('wpappp-email-field').'"/>
		<input type="hidden" id="wpappp_subscribe_option" name="wpappp_subscribe_option" value="'.get_option('wpappp-popup-subscribe-data').'"/>

		<input type="hidden" id="wpappp_close_after_success" name="wpappp_close_after_success" value="'.get_option('wpappp-popup-hide-form').'"/>
		<input type="hidden" id="wpappp_redirect_after_success" name="wpappp_redirect_after_success" value="'.get_option('wpappp-popup-redirect-url').'"/>

		<input type="hidden" id="wpappp-popup-success-message" name="wpappp-popup-success-message" value="'.get_option('wpappp-popup-success-message').'"/>
		<input type="hidden" id="wpappp-popup-invalid-email" name="wpappp-popup-invalid-email" value="'.get_option('wpappp-popup-invalid-email').'"/>
		<input type="hidden" id="wpappp-popup-required-field" name="wpappp-popup-required-field" value="'.get_option('wpappp-popup-required-field').'"/>
		<input type="hidden" id="wpappp-popup-general-error" name="wpappp-popup-general-error" value="'.get_option('wpappp-popup-general-error').'"/>
		<input type="hidden" id="wpappp-popup-show-selected-popup" name="wpappp-popup-show-selected-popup" value="'.get_option('wpappp-popup-show-selected-popup').'"/>
						<input type="hidden" id="wpappp-mc-api-key" name="wpappp-mc-api-key" value="'.get_option('wpappp-popup-api-key').'"/>
		<input type="hidden" id="wpappp-mc-list-id" name="wpappp-mc-list-id" value="'.get_option('wpappp-popup-list-id').'"/>


	</div>

	';