<script type="text/javascript">
	jQuery(document).ready(function($) {
		//Getting Font Name
		var fonts = [
			"<?php echo get_option('wpappp-popup13-heading-font-family-option') ?>", 
			"<?php echo get_option('wpappp-popup13-subheading-font-family-option') ?>",
			"<?php echo get_option('wpappp-popup13-action-button-font-family-option') ?>"
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
#wpup-popup13-heading{
        font-family: <?php if(get_option('wpappp-popup13-heading-font-family-option')!=''){ echo get_option('wpappp-popup13-heading-font-family-option');}?>;
    }
    #wpup-popup13-main-text{
        font-family: <?php if(get_option('wpappp-popup13-subheading-font-family-option')!=''){ echo get_option('wpappp-popup13-subheading-font-family-option');}?>;
    }
    #wpup-popup13-button{
        font-family: <?php if(get_option('wpappp-popup13-action-button-font-family-option')!=''){ echo get_option('wpappp-popup13-action-button-font-family-option');}?>;
    }
	#wpup-popup13-container {
		width: <?php echo get_option('wpappp-popup13-width-option') ?>px !important;
		background-color: <?php echo get_option('wpappp-popup13-background-color-option') ?> !important;
	}

	#wpup-popup13-left-content {
		background-image: url("<?php echo get_option('wpappp-popup13-background-image-option') ?>") !important;
	}
	#wpup-popup13-heading {
		color: <?php echo get_option('wpappp-popup13-heading-text-color-option') ?> !important;
		font-size: <?php echo get_option('wpappp-popup13-heading-font-size-option') ?> !important;
	}
	#wpup-popup13-main-text {
		color: <?php echo get_option('wpappp-popup13-subheading-text-color-option') ?> !important;
		font-size: <?php echo get_option('wpappp-popup13-subheading-font-size-option') ?> !important;
	}
	#wpup-popup13-button {
		background-color: <?php echo get_option('wpappp-popup13-action-button-background-color-option') ?> !important;
		color: <?php echo get_option('wpappp-popup13-action-button-text-color-option') ?> !important;
	}
	#wpappp-popup13{
		    background: rgba(0,0,0,<?php echo get_option('wpappp-popup13-overlay-option') ?>);
	}
	#wpup-popup13-email-text{
		border-radius: 0px !important;
	}
	#wpup-popup13-button{
		border-radius: 0px !important;
	}
</style>

<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
echo '<div id="wpappp-popup13" class="wpappp_popup_wrapper_container" style="display:none;">
			<div id="wpup-popup13-container">

				<div id="wpup-popup13-content">

					<div id="wpup-popup13-left-content">

					</div>

					<div id="wpup-popup13-right-content">

						<div id="wpup-popup13-close-button"><a href="#"><img id="wpappp_popup_close_button" src="'.plugins_url('../images/popup13-img/close.png', __FILE__).'" height="28px" width="28px"></a></div>
						<h1 id="wpup-popup13-heading">'.get_option('wpappp-popup13-heading-text-option').'</h1>
						<p id="wpup-popup13-main-text">'.get_option('wpappp-popup13-subheading-text-option').'</p>
						<input type="text" id="wpup-popup13-email-text" name="" class="wpappp_subscriber_email_submit" placeholder="'.get_option('wpappp-popup13-email-textfield-placeholder-option').'">
						<input type="submit" class="wpappp-subscribe-button-submit"  id="wpup-popup13-button" name="" value="'.get_option('wpappp-popup13-action-button-text-option').'">

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
		<input type="hidden" id="wpappp-popup-show-selected-popup" name="wpappp-popup-show-selected-popup" value="'.get_option('wpappp-popup-show-selected-popup').'"/>
		<input type="hidden" id="wpappp-popup-general-error" name="wpappp-popup-general-error" value="'.get_option('wpappp-popup-general-error').'"/>
						<input type="hidden" id="wpappp-mc-api-key" name="wpappp-mc-api-key" value="'.get_option('wpappp-popup-api-key').'"/>
		<input type="hidden" id="wpappp-mc-list-id" name="wpappp-mc-list-id" value="'.get_option('wpappp-popup-list-id').'"/>
			</div>';