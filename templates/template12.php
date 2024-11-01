<script type="text/javascript">
	jQuery(document).ready(function($) {
		//Getting Font Name
		var fonts = [
			"<?php echo get_option('wpappp-popup12-heading-font-family-option') ?>", 
			"<?php echo get_option('wpappp-popup12-subheading-font-family-option') ?>",
			"<?php echo get_option('wpappp-popup12-action-button-font-family-option') ?>",
			"<?php echo get_option('wpappp-popup12-terms-font-family-option') ?>"
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
#wpup-popup12-heading1{
        font-family: <?php if(get_option('wpappp-popup12-heading-font-family-option')!=''){ echo get_option('wpappp-popup12-heading-font-family-option');}?>;
    }
    #wpup-popup12-heading2{
        font-family: <?php if(get_option('wpappp-popup12-subheading-font-family-option')!=''){ echo get_option('wpappp-popup12-subheading-font-family-option');}?>;
    }
    #wpup-popup12-button{
        font-family: <?php if(get_option('wpappp-popup12-action-button-font-family-option')!=''){ echo get_option('wpappp-popup12-action-button-font-family-option');}?>;
    }
    #wpup-popup12-terms{
        font-family: <?php if(get_option('wpappp-popup12-terms-font-family-option')!=''){ echo get_option('wpappp-popup12-terms-font-family-option');}?>;
    }
	#wpup-popup12-container {
		width: <?php echo get_option('wpappp-popup12-width-option') ?>px !important;
		background-image: url("<?php echo get_option('wpappp-popup12-background-image-option') ?>") !important;
		background-color: <?php echo get_option('wpappp-popup12-background-color-option') ?> !important;
	}
	#wpup-popup12-heading1 {
		color: <?php echo get_option('wpappp-popup12-heading-text-color-option') ?> !important;
		font-size: <?php echo get_option('wpappp-popup12-heading-font-size-option') ?> !important;
	}
	#wpup-popup12-heading2 {
		color: <?php echo get_option('wpappp-popup12-subheading-text-color-option') ?> !important;
		font-size: <?php echo get_option('wpappp-popup12-subheading-font-size-option') ?> !important;
	}
	#wpup-popup12-button {
		background-color: <?php echo get_option('wpappp-popup12-action-button-background-color-option') ?> !important;
		color: <?php echo get_option('wpappp-popup12-action-button-text-color-option') ?> !important;
	}
	#wpup-popup12-terms {
		color: <?php echo get_option('wpappp-popup12-terms-text-color-option') ?> !important;
	}
	#wpappp-popup12{
		    background: rgba(0,0,0,<?php echo get_option('wpappp-popup12-overlay-option') ?>);
	}
	#wpup-popup12-email-text{
		border-radius: 0px !important;
	}
	#wpup-popup12-button{
		border-radius: 0px !important;
	}
</style>

<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
echo '<div id="wpappp-popup12" class="wpappp_popup_wrapper_container" style="display:none;">
			<div id="wpup-popup12-container">

				<div id="wpup-popup12-close-button"><a href="#"><img id="wpappp_popup_close_button" style="height:20px;" src="'.plugins_url('../images/popup12-img/close.png', __FILE__).'"></a></div>

				<h1 id="wpup-popup12-heading1">'.get_option('wpappp-popup12-heading-text-option').'</h1>
				<h3 id="wpup-popup12-heading2">'.get_option('wpappp-popup12-subheading-text-option').'</h3>
				<input type="text" id="wpup-popup12-email-text" class="wpappp_subscriber_email_submit" name="" placeholder="'.get_option('wpappp-popup12-email-textfield-placeholder-option').'"> <br/>
				<input type="submit" class="wpappp-subscribe-button-submit" id="wpup-popup12-button" name="" value="'.get_option('wpappp-popup12-action-button-text-option').'">
				<p id="wpup-popup12-terms">'.get_option('wpappp-popup12-terms-text-option').'</p>
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