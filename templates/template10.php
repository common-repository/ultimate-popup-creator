<script type="text/javascript">
	jQuery(document).ready(function($) {
		//Getting Font Name
		var fonts = [
			"<?php echo get_option('wpappp-popup10-heading-font-family-option') ?>", 
			"<?php echo get_option('wpappp-popup10-subheading-font-family-option') ?>",
			"<?php echo get_option('wpappp-popup10-action-button-font-family-option') ?>",
			"<?php echo get_option('wpappp-popup10-closing-note-font-family-option') ?>"
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
<style>
#wpup-popup10-heading1{
        font-family: <?php if(get_option('wpappp-popup10-heading-font-family-option')!=''){ echo get_option('wpappp-popup10-heading-font-family-option');}?>;
    }
    #wpup-popup10-main-text{
        font-family: <?php if(get_option('wpappp-popup10-subheading-font-family-option')!=''){ echo get_option('wpappp-popup10-subheading-font-family-option');}?>;
    }
    #wpup-popup10-button1{
        font-family: <?php if(get_option('wpappp-popup10-action-button-font-family-option')!=''){ echo get_option('wpappp-popup10-action-button-font-family-option');}?>;
    }
    #wpup-popup10-button2{
        font-family: <?php if(get_option('wpappp-popup10-closing-note-font-family-option')!=''){ echo get_option('wpappp-popup10-closing-note-font-family-option');}?>;
    }
	#wpup-popup10-container {
		width: <?php echo get_option('wpappp-popup10-width-option') ?>px !important;
	}
	#wpup-popup10-top-content {
		background-color: <?php echo get_option('wpappp-popup10-background-color-top-option') ?> !important;
	}
	#wpup-popup10-heading1 {
		color: <?php echo get_option('wpappp-popup10-heading-text-color-option') ?> !important;
		font-size: <?php echo get_option('wpappp-popup10-heading-font-size-option') ?> !important;
	}
	#wpup-popup10-middle-content {
		background-color: <?php echo get_option('wpappp-popup10-background-color-bottom-option') ?> !important;
	}
	#wpup-popup10-main-text {
		color: <?php echo get_option('wpappp-popup10-subheading-text-color-option') ?> !important;
		font-size: <?php echo get_option('wpappp-popup10-subheading-font-size-option') ?> !important;
	}
	#wpup-popup10-button1 {
		background-color: <?php echo get_option('wpappp-popup10-action-button-background-color-option') ?> !important;
		color: <?php echo get_option('wpappp-popup10-action-button-text-color-option') ?> !important;
	}
	#wpup-popup10-button2 {
		color: <?php echo get_option('wpappp-popup10-closing-note-text-color-option') ?> !important;
	}
	#wpappp-popup10{
		    background: rgba(0,0,0,<?php echo get_option('wpappp-popup10-overlay-option') ?>);
	}
</style>

<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
echo '<div id="wpappp-popup10" class="wpappp_popup_wrapper_container" style="display:none;">
			<div id="wpup-popup10-container">

				<div id="wpup-popup10-top-content">

					<div id="wpup-popup10-close-button"><a href="#"><img id="wpappp_popup_close_button" src="'.plugins_url('../images/popup10-img/close_1d.png', __FILE__).'"></a></div>
					<h3 id="wpup-popup10-heading1">'.get_option('wpappp-popup10-heading-text-option').'</h3>

				</div>

				<div id="wpup-popup10-middle-content">

					<img src="'. get_option('wpappp-popup10-upload-image-option').'" id="wpup-popup10-info-image" height="139px" width="139px">
					<p id="wpup-popup10-main-text">'.get_option('wpappp-popup10-subheading-text-option').'</p>
					<input type="text" id="wpup-popup10-email-text" class="wpappp_subscriber_email_submit wpappp-popup10-border-color" name="wpappp_subscriber_email" value="" placeholder=" Enter your email to subscribe!">
					<input type="submit" id="wpup-popup10-button1" class="wpappp-subscribe-button-submit"  name="" value="'.get_option('wpappp-popup10-action-button-text-option').'"> <br/>
					<p id="upc_closing_text"><a id="wpup-popup10-button2" name="">'.get_option('wpappp-popup10-closing-note-text-option').'</a></p>

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
		<input type="hidden" id="wpappp-popup-show-selected-popup" name="wpappp-popup-show-selected-popup" value="'.get_option('wpappp-popup-show-selected-popup').'"/>
		<input type="hidden" id="wpappp-popup-general-error" name="wpappp-popup-general-error" value="'.get_option('wpappp-popup-general-error').'"/>
						<input type="hidden" id="wpappp-mc-api-key" name="wpappp-mc-api-key" value="'.get_option('wpappp-popup-api-key').'"/>
		<input type="hidden" id="wpappp-mc-list-id" name="wpappp-mc-list-id" value="'.get_option('wpappp-popup-list-id').'"/>
			</div>';