<script type="text/javascript">
	jQuery(document).ready(function($) {
		//Getting Font Name
		var fonts = [
			"<?php echo get_option('wpappp-popup14-heading-font-family-option') ?>", 
			"<?php echo get_option('wpappp-popup14-subheading-font-family-option') ?>",
			"<?php echo get_option('wpappp-popup14-action-button-font-family-option') ?>",
			"<?php echo get_option('wpappp-popup14-privacy-font-family-option') ?>"
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
#wpup-popup14-main-text-header{
        font-family: <?php if(get_option('wpappp-popup14-heading-font-family-option')!=''){ echo get_option('wpappp-popup14-heading-font-family-option');}?>;
    }
    #wpup-popup14-main-text-subheader{
        font-family: <?php if(get_option('wpappp-popup14-subheading-font-family-option')!=''){ echo get_option('wpappp-popup14-subheading-font-family-option');}?>;
    }
    #wpup-popup14-button-text{
        font-family: <?php if(get_option('wpappp-popup14-action-button-font-family-option')!=''){ echo get_option('wpappp-popup14-action-button-font-family-option');}?>;
    }
    #wpup-popup14-privacy-text{
        font-family: <?php if(get_option('wpappp-popup14-privacy-font-family-option')!=''){ echo get_option('wpappp-popup14-privacy-font-family-option');}?>;
    }
	#wpup-popup14-container {
		width: <?php echo get_option('wpappp-popup14-width-option') ?>px !important;
		background-color: <?php echo get_option('wpappp-popup14-container-background-color-option') ?> !important;
	}

	#wpup-popup14-header-image {
		background-image: url("<?php echo get_option('wpappp-popup14-background-image-option') ?>") !important;
	}
	#wpup-popup14-top-content {
		background-color: <?php echo get_option('wpappp-popup14-subcontainer-background-color-option') ?> !important;
	}
	#wpup-popup14-main-text-header {
		color: <?php echo get_option('wpappp-popup14-heading-text-color-option') ?> !important;
		font-size: <?php echo get_option('wpappp-popup14-heading-font-size-option') ?> !important;
	}
	#wpup-popup14-main-text-subheader {
		color: <?php echo get_option('wpappp-popup14-subheading-text-color-option') ?> !important;
		font-size: <?php echo get_option('wpappp-popup14-subheading-font-size-option') ?> !important;
	}
	#wpup-popup14-button {
		background-color: <?php echo get_option('wpappp-popup14-action-button-background-color-option') ?> !important;
		color: <?php echo get_option('wpappp-popup14-action-button-text-color-option') ?> !important;
		font-size: 11px;
	}
	#wpup-popup14-privacy-text {
		color: <?php echo get_option('wpappp-popup14-privacy-text-color-option') ?> !important;
	}
	#wpappp-popup14{
		    background: rgba(0,0,0,<?php echo get_option('wpappp-popup14-overlay-option') ?>);
	}
	#wpup-popup14-name-text{
		border-radius: 5px !important;
		height: 40px !important;
	}
	#wpup-popup14-email-text{
		border-radius: 5px !important;
		height: 40px;
	}
	.fa-user:before, .fa-envelope:before{
		    margin-top: 22px;
	}
	#wpup-popup14-security-note{
		margin-top: 40px;
		height: 15px;
	}
#wpappp_popup_close_button{
	width: 15px;
	height: 15px;
	margin-top: 5px;
}
</style>

<script type="text/javascript">
	
</script>

<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
echo '<div id="wpappp-popup14" class="wpappp_popup_wrapper_container" style="display:none;">
			<div id="wpup-popup14-container">
			<div id="wpup-popup14-close-button"><a href="#"><img id="wpappp_popup_close_button" src="'. plugins_url('../images/popup14-img/close_1d.png', __FILE__).'" ></a></div>
				<div id="wpup-popup14-header-image"></div>
				<div id="wpup-popup14-top-content">

					<h3 id="wpup-popup14-main-text-header">'.get_option('wpappp-popup14-heading-text-option').'</h3>
					<p id="wpup-popup14-main-text-subheader">'.get_option('wpappp-popup14-subheading-text-option').' </p>

				</div>

				<div id="wpup-popup14-bottom-container">

					<div id="upc_popup14_name_container" class="wpup-popup14-inputs">

						<span class="fa fa-user"></span>
						<input type="text" class="wpappp_subscriber_name_submit" placeholder="'.get_option('wpappp-popup14-name-textfield-placeholder-option').' " id="wpup-popup14-name-text">

					</div>
					<div id="upc_popup14_email_container" class="wpup-popup14-inputs">
						<span class="fa fa-envelope"></span>
						<input type="text" class="wpappp_subscriber_email_submit" placeholder="'.get_option('wpappp-popup14-email-textfield-placeholder-option').'" id="wpup-popup14-email-text">
					</div>

					<button id="wpup-popup14-button" type="submit" class="wpappp-subscribe-button-submit" ><span id="wpup-popup14-button-text">'.get_option('wpappp-popup14-action-button-text-option').'</span><i style="margin-left: 10px;" class="fa fa-arrow-right"></i></button>
				</div>

				<div id="wpup-popup14-security-note">
					<button id="wpup-popup14-button-lock"><i class="fa fa-lock"></i></button>
					<span id="wpup-popup14-privacy-text" style="font-size: 11px; color: #ffffff;">'.get_option('wpappp-popup14-privacy-text-option').'</span>
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
