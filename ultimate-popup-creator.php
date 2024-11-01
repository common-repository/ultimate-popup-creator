<?php
/*
Plugin name: Ultimate Popup by Arrow Plugins
Plugin URI:  https://wordpress.org/plugins/ultimate-popup-creator/
Description: Add beautiful popups on your WordPress site to convert visitors into subscibers.
Author: Arrow Plugins
Author URI: https://profiles.wordpress.org/arrowplugins
Version: 3.2.6
License: GplV2
Copyright: 2019 Arrow Plugins
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_action( 'admin_enqueue_scripts', 'upc_enqueue_asf_script_style' );
add_action( 'wp_enqueue_scripts', 'upc_enqueue_asf_script_style' );
add_action( 'wp_enqueue_scripts', 'upc_enqueue_front_script_style' );

/*Adding style sheets and scripts*/

function upc_enqueue_asf_script_style() {

    wp_enqueue_script('jquery');
    wp_register_style( 'font_select', plugin_dir_url( __FILE__ )  . 'css/wpappp_fontselect.css', false, '1.0.0' );
    wp_register_style( 'wpapp_admin_css', plugin_dir_url( __FILE__ )  . 'css/wpappp_style.css', false, '1.0.0' );
    wp_register_script( 'gfonts', plugin_dir_url(__FILE__) . 'js/wpappp_fontselect.js', array('jquery'), '1.0', true );
    wp_register_script( 'wpappp_script', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'), '1.0', true );
    wp_localize_script( 'wpappp_script', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php')));

    wp_enqueue_script('gfonts' );

    wp_enqueue_style( 'wpapp_admin_css');
    wp_enqueue_style( 'font_select');
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wp-color-picker-script',  plugin_dir_url(__FILE__) .'/js/wpappp_colorpicker.js', array( 'wp-color-picker' ), false, true );
    wp_enqueue_script( 'wpappp_script');

}
function upc_enqueue_front_script_style() {

if(get_option('wpappp-popup-show-on-post-popup') == '1'  && is_single() || get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page() || get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() || get_option('wpappp-popup-show-on-front-popup') == '1'  && is_front_page()){

    

    wp_enqueue_script('jquery');

    wp_register_style( 'wpappp_front_style', plugin_dir_url( __FILE__ )  . 'public/css/wpappp_front_style.css', false, '1.0.0' );
    wp_enqueue_style('wpappp_front_style' );


   

    wp_register_style( 'wpappp_front_animation', plugin_dir_url( __FILE__ )  . 'public/css/animate.css', false, '1.0.0' );
    wp_enqueue_style('wpappp_front_animation' );

    wp_register_script( 'upc_animation', plugin_dir_url(__FILE__) . 'public/js/upc_popup_animate_functions.js', array('jquery'), '1.0', true );
    wp_enqueue_script('upc_animation' );


    wp_register_script( 'wpappp_cookiejq', plugin_dir_url(__FILE__) . 'public/js/wpappp_cookiejq.js', array('jquery'), '1.0', true );
    wp_enqueue_script('wpappp_cookiejq' );

    if(get_option('wpappp-popup-show-hide-popup-animation') == 1){
    
        wp_register_script( 'wpappp_front_script_a', plugin_dir_url(__FILE__) . 'public/js/wpappp_front_script_a.js', array('jquery'), '1.0', true );
        wp_enqueue_script('wpappp_front_script_a' );
    

    }else{
    
        wp_register_script( 'wpappp_front_script_na', plugin_dir_url(__FILE__) . 'public/js/wpappp_front_script_na.js', array('jquery'), '1.0', true );
        wp_enqueue_script('wpappp_front_script_na' );
    
    }

    wp_register_script( 'cf_mod_script', plugin_dir_url(__FILE__) . 'js/libs/modernizr-1.7.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script('cf_mod_script' );

     wp_register_script( 'cf_plugin_script', plugin_dir_url(__FILE__) . 'js/cf_plugins.js', array('jquery'), '1.0', true );
    wp_enqueue_script('cf_plugin_script' );

     wp_register_script( 'cf_script', plugin_dir_url(__FILE__) . 'js/cf_script.js', array('jquery'), '1.0', true );
    wp_enqueue_script('cf_script' );

    wp_register_script( 'wpappp_script', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'), '1.0', true );
    wp_localize_script( 'wpappp_script', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php')));

    wp_enqueue_script( 'wpappp_script');
}
}

add_action('admin_menu', 'upc_plugin_create_menu');

function upc_plugin_create_menu() {

//create new top-level menu
    add_menu_page('Ultimate Popup', 'Ultimate Popup', 'administrator', 'wpup_options_page', 'wpup_plugin_settings_page' , 'dashicons-feedback' , 28 );
    add_submenu_page('wpup_options_page', 'Support', 'Support', 'manage_options','wpup_support_page', 'upc_support_page');

//call register settings function
    add_action( 'admin_init', 'register_wpup_plugin_settings' );
}
 function upc_support_page(){
  ?>
    
    <div id="container">
        <div id="upc_contact-form" class="clearfix">
            <h1>Get 24/7 Support!</h1>
            <h2>Contact us anytime, we'll do our best to answer and resolve all your questions as soon as possible</h2>

            <?php
            
            //init variables

            $cf = array();
            $sr = false;
            
            if(isset($_SESSION['cf_returndata'])){
                $cf = $_SESSION['cf_returndata'];
                $sr = true;
            }
            ?>
            <ul id="upc_errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                <li id="upc_info">There were some problems with your form submission:</li>
                <?php 
                if(isset($cf['errors']) && count($cf['errors']) > 0) :
                    foreach($cf['errors'] as $error) :
                ?>
                <li><?php echo $error ?></li>
                <?php
                    endforeach;
                endif;
                ?>
            </ul>
            <p id="upc_success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>
            <form method="post" action="<?php echo plugins_url('/includes/upc_process.php',__FILE__); ?>">
                <label for="name">Name: <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" required autofocus />
                
                <label for="email">Email Address: <span class="required">*</span></label>
                <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@example.com" required />
                
                <label for="telephone">Telephone: </label>
                <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
                
                <label for="enquiry">Enquiry: </label>
                <select id="enquiry" name="enquiry">
                    <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>General</option>
                    <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Support</option>
                </select>
                
                <label for="message">Message: <span class="required">*</span></label>
                <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                
                <span id="loading"></span>
                <input type="submit" value="Submit!" id="submit-button" />
                <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
            </form>
            <?php unset($_SESSION['cf_returndata']); ?>
        </div>
    </div>

    <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg');</script>
    <![endif]-->
  <?php
 }

function load_wp_media_files() {
    wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'load_wp_media_files' );


function upc_send_email(){
    $name = upc_sanitize_options($_POST['dname']);
    $email = upc_sanitize_options($_POST['demail']);
    $blog_name = get_bloginfo( 'name' );
    $blog_email = get_bloginfo( 'admin_email' );

    $headers = 'From: ' .$blog_name.' <'.$blog_email.'>'. "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $to = esc_attr(get_option('wpappp-email-field'));
    $subject = 'New Subscriber from Popup Plugin by Arrow Plugin';
    $message = 'Subscriber Name: '.$name.'<br/>Subscriber Email: '.$email;
    mail($to,$subject,$message,$headers);
    wp_die();

}

function upc_send_to_mailchimp(){
// grab an API Key from http://admin.mailchimp.com/account/api/
    require_once('MCAPI.class.php');
    $wpappp_api_key = upc_sanitize_options($_POST['get_mc_api_key']);
    $api = new WPAPPP_MCAPI($wpappp_api_key);
    $list_id = upc_sanitize_options($_POST['get_mc_list_id']);

    $name = upc_sanitize_options($_POST['dname']);
    $email = upc_sanitize_options($_POST['demail']);
    $merge_vars = array('FNAME' => $name, 'EMAIL' => $email);
    if($api->listSubscribe($list_id, upc_sanitize_options($_POST['demail']), $merge_vars , upc_sanitize_options($_POST['demail'])) === true){
        echo 'Success!&nbsp; Check your inbox or spam folder for a message containing a confirmation link.';
    wp_die();
    }
    else{
        echo  $api->errorMessage;
    wp_die();
    }

    wp_die();


}


function upc_send_to_db(){
    $name = upc_sanitize_options($_POST['dname']);
    $email = upc_sanitize_options($_POST['demail']);
    $resultss='';
    global $wpdb;
    $table_name = $wpdb->prefix . 'wpappp_subs';
    $check_existing = $wpdb->get_results(
        "SELECT * FROM `$table_name` WHERE `email` = '$email'" 
        );
    if (empty($check_existing)) {
        $resultss = $wpdb->insert( 
            $table_name, 
            array( 
                'name' => $name, 
                'email' => $email, 
                ) 
            );
        return $resultss;
    }else{
        return 'Subscriber Already Exists';
    wp_die();

    }
    wp_die();

}

function upc_delete_db_data(){
    global $wpdb;
    $table  = $wpdb->prefix . 'wpappp_subs';
    $delete = $wpdb->query("TRUNCATE TABLE $table");
    wp_die();

}
function upc_delete_db_record(){
    $id = upc_sanitize_options($_POST['id']);
    global $wpdb;
    $table  = $wpdb->prefix . 'wpappp_subs';
    $delete = $wpdb->query("DELETE FROM $table WHERE id=".$id);
    wp_die();
}


add_action('wp_ajax_upc_send_email', 'upc_send_email');
add_action('wp_ajax_nopriv_upc_send_email', 'upc_send_email');

add_action('wp_ajax_upc_send_to_db', 'upc_send_to_db');
add_action('wp_ajax_nopriv_upc_send_to_db', 'upc_send_to_db');

add_action('wp_ajax_upc_send_to_mailchimp', 'upc_send_to_mailchimp');
add_action('wp_ajax_nopriv_upc_send_to_mailchimp', 'upc_send_to_mailchimp');

add_action('wp_ajax_upc_delete_db_data', 'upc_delete_db_data');
add_action('wp_ajax_nopriv_upc_delete_db_data', 'upc_delete_db_data');

add_action('wp_ajax_upc_export_to_csv', 'upc_export_to_csv');
add_action('wp_ajax_nopriv_upc_export_to_csv', 'upc_export_to_csv');

add_action('wp_ajax_upc_delete_db_record', 'upc_delete_db_record');
add_action('wp_ajax_nopriv_upc_delete_db_record', 'upc_delete_db_record');

 
function register_wpup_plugin_settings() {
//register our settings

    /*===============================popup1 settings======================================*/

    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-width-option', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-background-image-option', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-heading-text-option', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-heading-text-color-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-heading-font-size-option', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-heading-font-family-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-seperator-color-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-subheading-text-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-subheading-text-color-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-subheading-font-size-option', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-subheading-font-family-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-textfields-border-color-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-name-textfield-placeholder-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-email-textfield-placeholder-option', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-action-button-background-color-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-action-button-text-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-action-button-text-color-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-action-button-font-family-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-security-note-text-option', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-security-note-font-family-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-security-note-text-color-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-overlay-option', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup1-close-button-option' , 'upc_sanitize_options');

    /*=============================Display Settings======================================*/
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-selected-popup' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-enable-popup' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-show-selected-popup' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-show-on-post-popup', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-show-on-pages-popup' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-show-on-home-popup', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-show-on-top-post', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-show-on-bottom-post', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-auto-close-time-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-show-popup-time-option', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-show-once-or-everytime' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-cookie-expire-time', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-email-field' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp_selected_tab' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-start-date-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-end-date-option', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-show-exit-popup-option' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-show-hide-popup-animation' , 'upc_sanitize_options');
    /*=============================Display Settings ends======================================*/

    /*=============================General Settings======================================*/

    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-subscribe-data', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-enable-ajax', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-hide-form' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-redirect-url' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-success-message' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-invalid-email', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-required-field' , 'upc_sanitize_options');
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-already-subscribed', 'upc_sanitize_options' );
    register_setting( 'wpup-plugin-settings-group', 'wpappp-popup-general-error', 'upc_sanitize_options' );

}

function wpup_plugin_settings_page() {
    ?>
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
    #wpup-popup2-heading1{
        font-family: <?php if(get_option('wpappp-popup2-heading-font-family-option')!=''){ echo get_option('wpappp-popup2-heading-font-family-option');}?>;
    }
    #wpup-popup2-subheading1{
        font-family: <?php if(get_option('wpappp-popup2-subheading1-font-family-option')!=''){ echo get_option('wpappp-popup2-subheading1-font-family-option');}?>;
    }
    #wpup-popup2-subheading2{
        font-family: <?php if(get_option('wpappp-popup2-subheading2-font-family-option')!=''){ echo get_option('wpappp-popup2-subheading2-font-family-option');}?>;
    }
    #wpup-popup2-subscribe-button{
        font-family: <?php if(get_option('wpappp-popup2-action-button-font-family-option')!=''){ echo get_option('wpappp-popup2-action-button-font-family-option');}?>;
    }
    #wpup-popup2-security-note-text{
        font-family: <?php if(get_option('wpappp-popup2-security-note-font-family-option')!=''){ echo get_option('wpappp-popup2-security-note-font-family-option');}?>;
    }
    #wpup-popup3-heading1{
        font-family: <?php if(get_option('wpappp-popup3-heading-font-family-option')!=''){ echo get_option('wpappp-popup3-heading-font-family-option');}?>;
    }
    #wpup-popup3-subheading1{
        font-family: <?php if(get_option('wpappp-popup3-subheading1-font-family-option')!=''){ echo get_option('wpappp-popup3-subheading1-font-family-option');}?>;
    }
    #wpup-popup3-subheading2{
        font-family: <?php if(get_option('wpappp-popup3-subheading2-font-family-option')!=''){ echo get_option('wpappp-popup3-subheading2-font-family-option');}?>;
    }
    #wpup-popup3-subscribe-button{
        font-family: <?php if(get_option('wpappp-popup3-action-button-font-family-option')!=''){ echo get_option('wpappp-popup3-action-button-font-family-option');}?>;
    }
    #wpup-popup3-security-note-text{
        font-family: <?php if(get_option('wpappp-popup3-security-note-text-font-family-option')!=''){ echo get_option('wpappp-popup3-security-note-text-font-family-option');}?>;
    }
    #wpup-popup4-heading1{
        font-family: <?php if(get_option('wpappp-popup4-heading-font-family-option')!=''){ echo get_option('wpappp-popup4-heading-font-family-option');}?>;
    }
    #wpup-popup4-heading2{
        font-family: <?php if(get_option('wpappp-popup4-subheading1-font-family-option')!=''){ echo get_option('wpappp-popup4-subheading1-font-family-option');}?>;
    }
    #wpup-popup4-subheading1{
        font-family: <?php if(get_option('wpappp-popup4-subheading2-font-family-option')!=''){ echo get_option('wpappp-popup4-subheading2-font-family-option');}?>;
    }
    #wpup-popup4-label-name{
        font-family: <?php if(get_option('wpappp-popup4-name-textfield-font-family-option')!=''){ echo get_option('wpappp-popup4-name-textfield-font-family-option');}?>;
    }
    #wpup-popup4-label-email{
        font-family: <?php if(get_option('wpappp-popup4-email-textfield-font-family-option')!=''){ echo get_option('wpappp-popup4-email-textfield-font-family-option');}?>;
    }
    #wpup-popup4-subscribe-button{
        font-family: <?php if(get_option('wpappp-popup4-action-button-font-family-option')!=''){ echo get_option('wpappp-popup4-action-button-font-family-option');}?>;
    }
    #wpup-popup4-security-note-text{
        font-family: <?php if(get_option('wpappp-popup4-security-note-font-family-option')!=''){ echo get_option('wpappp-popup4-security-note-font-family-option');}?>;
    }
    #wpup-popup5-header{
        font-family: <?php if(get_option('wpappp-popup5-heading-font-family-option')!=''){ echo get_option('wpappp-popup5-heading-font-family-option');}?>;
    }
    #wpup-popup5-subheader{
        font-family: <?php if(get_option('wpappp-popup5-subheading-font-family-option')!=''){ echo get_option('wpappp-popup5-subheading-font-family-option');}?>;
    }
    #wpup-popup5-subscribe-button{
        font-family: <?php if(get_option('wpappp-popup5-action-button-font-family-option')!=''){ echo get_option('wpappp-popup5-action-button-font-family-option');}?>;
    }
    #wpup-popup5-security-note-text{
        font-family: <?php if(get_option('wpappp-popup5-security-note-font-family-option')!=''){ echo get_option('wpappp-popup5-security-note-font-family-option');}?>;
    }
    #wpup-popup6-heading{
        font-family: <?php if(get_option('wpappp-popup6-heading-font-family-option')!=''){ echo get_option('wpappp-popup6-heading-font-family-option');}?>;
    }
    #wpup-popup6-subscribe-button{
        font-family: <?php if(get_option('wpappp-popup6-action-button-font-family-option')!=''){ echo get_option('wpappp-popup6-action-button-font-family-option');}?>;
    }
    #wpup-popup6-info{
        font-family: <?php if(get_option('wpappp-popup6-closing-note-font-family-option')!=''){ echo get_option('wpappp-popup6-closing-note-font-family-option');}?>;
    }
    #wpup-popup7-heading1{
        font-family: <?php if(get_option('wpappp-popup7-heading-font-family-option')!=''){ echo get_option('wpappp-popup7-heading-font-family-option');}?>;
    }
    #wpup-popup7-heading2{
        font-family: <?php if(get_option('wpappp-popup7-subheading-font-family-option')!=''){ echo get_option('wpappp-popup7-subheading-font-family-option');}?>;
    }
    #wpup-popup7-close-note{
        font-family: <?php if(get_option('wpappp-popup7-closing-note-font-family-option')!=''){ echo get_option('wpappp-popup7-closing-note-font-family-option');}?>;
    }
    #wpup-popup8-heading1{
        font-family: <?php if(get_option('wpappp-popup8-heading-font-family-option')!=''){ echo get_option('wpappp-popup8-heading-font-family-option');}?>;
    }
    #wpup-popup8-heading2{
        font-family: <?php if(get_option('wpappp-popup8-subheading1-font-family-option')!=''){ echo get_option('wpappp-popup8-subheading1-font-family-option');}?>;
    }
    #wpup-popup8-subheading{
        font-family: <?php if(get_option('wpappp-popup8-subheading2-font-family-option')!=''){ echo get_option('wpappp-popup8-subheading2-font-family-option');}?>;
    }
    #wpup-popup8-button{
        font-family: <?php if(get_option('wpappp-popup8-action-button-font-family-option')!=''){ echo get_option('wpappp-popup8-action-button-font-family-option');}?>;
    }
    #wpup-popup8-close-text{
        font-family: <?php if(get_option('wpappp-popup8-closing-note-font-family-option')!=''){ echo get_option('wpappp-popup8-closing-note-font-family-option');}?>;
    }
    #wpup-popup9-heading1{
        font-family: <?php if(get_option('wpappp-popup9-heading-font-family-option')!=''){ echo get_option('wpappp-popup9-heading-font-family-option');}?>;
    }
    #wpup-popup9-main-text{
        font-family: <?php if(get_option('wpappp-popup9-subheading-font-family-option')!=''){ echo get_option('wpappp-popup9-subheading-font-family-option');}?>;
    }
    #wpup-popup9-button{
        font-family: <?php if(get_option('wpappp-popup9-action-button-font-family-option')!=''){ echo get_option('wpappp-popup9-action-button-font-family-option');}?>;
    }
    #wpup-popup9-privacy-text{
        font-family: <?php if(get_option('wpappp-popup9-privacy-note-font-family-option')!=''){ echo get_option('wpappp-popup9-privacy-note-font-family-option');}?>;
    }
    #wpup-popup9-close-text1{
        font-family: <?php if(get_option('wpappp-popup9-closing-note-font-family-option')!=''){ echo get_option('wpappp-popup9-closing-note-font-family-option');}?>;
    }
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
    #wpup-popup11-heading{
        font-family: <?php if(get_option('wpappp-popup11-heading-font-family-option')!=''){ echo get_option('wpappp-popup11-heading-font-family-option');}?>;
    }
    #wpup-popup11-main-text{
        font-family: <?php if(get_option('wpappp-popup11-subheading-font-family-option')!=''){ echo get_option('wpappp-popup11-subheading-font-family-option');}?>;
    }
    #wpup-popup11-button{
        font-family: <?php if(get_option('wpappp-popup11-action-button-font-family-option')!=''){ echo get_option('wpappp-popup11-action-button-font-family-option');}?>;
    }
    #wpup-popup11-close-text{
        font-family: <?php if(get_option('wpappp-popup11-closing-note-font-family-option')!=''){ echo get_option('wpappp-popup11-closing-note-font-family-option');}?>;
    }
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
    #wpup-popup13-heading{
        font-family: <?php if(get_option('wpappp-popup13-heading-font-family-option')!=''){ echo get_option('wpappp-popup13-heading-font-family-option');}?>;
    }
    #wpup-popup13-main-text{
        font-family: <?php if(get_option('wpappp-popup13-subheading-font-family-option')!=''){ echo get_option('wpappp-popup13-subheading-font-family-option');}?>;
    }
    #wpup-popup13-button{
        font-family: <?php if(get_option('wpappp-popup13-action-button-font-family-option')!=''){ echo get_option('wpappp-popup13-action-button-font-family-option');}?>;
    }
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

</style>
    <form id="upc_popup_form" method="post" action="options.php">
        <?php settings_fields('wpup-plugin-settings-group'); ?>
        <input type="hidden" id="wpapp_selected_id" name="wpappp_selected_tab" value="<?php echo esc_attr(get_option('wpappp_selected_tab') ); ?>"/>

        <ul class="wpappp-popup-tabs">
            <li>
                <input type="radio" name="wpappp-popup-tabs" id="wpappp-popup-tab1" <?php if(get_option('wpappp_selected_tab')!=''){echo 'checked';} ?>checked />
                <label for="wpappp-popup-tab1" class="wpappp-tabs-label">How It Looks!</label>
                <div id="wpappp-popup-tab-content1" class="wpappp-popup-tab-content">

                    <div id="wpappp-settings-main-container">
<style>
#upc-upgrade-now-button{
        position: absolute;
    bottom: 14px;
    left: 50%;
    background: #039389;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 4px;
    color: white;
    text-decoration: none;
    transition: ease .5s;
    font-weight: bold;
    letter-spacing: 2px;
    }
    #upc-upgrade-now-button:hover{
        background-color: #004d48;
    }
</style>
       <div id="upc_pro_container">
           <div id="upc_pro_container1" style="display: inline-block;"><a target="_blank" href="https://www.arrowplugins.com/popup-plugin"><img src="<?php echo plugins_url('images/pro.png',__FILE__);?>" width="150px"/></a></div>
           <div id="upc_pro_container2" style="position: relative; width: 48%; display: inline-block; vertical-align: top;">
           <p style="    font-size: 15px;
    margin: 0;
    margin-top: 5px;font-weight: bold;;">You are using Lite Version of Popup Plugin, Upgrade to Pro and</p>
           <ul>
               <li style="width: 100%">- Unlock all 14 pre-designed popups with animation appearances</li>
               <li style="width: 100%">- Unlock MailChimp, GetResponse and Active Campaign Integrations</li>
               <li style="width: 100%">- Unlock 14 more special options </li>
               <li style="width: 100%">- Fastest Support & much more...</li>
           </ul>
           <a id="upc-upgrade-now-button" style="" target="_blank" href="https://www.arrowplugins.com/popup-plugin">Upgrade Now!</a>
           </div>
       </div>
                        <div>
                        <input type="hidden" name="wpappp-popup-selected-popup" id="wpappp-popup-selected-popup" value="<?php echo esc_attr(get_option('wpappp-popup-selected-popup')); ?>" />

                        <span>Form Theme: </span>
                        <select id="wpappp-popup-select-theme">
                            <option value="select" <?php selected( get_option('wpappp-popup-selected-popup'),'select'); ?>>Select Popup</option>
                            <option value="popup1" <?php selected( get_option('wpappp-popup-selected-popup'),'popup1'); ?>>Popup 1</option>
                            <option value="popup2" <?php selected( get_option('wpappp-popup-selected-popup'),'popup2'); ?>>Popup 2</option>
                            <option value="popup3" <?php selected( get_option('wpappp-popup-selected-popup'),'popup3'); ?>>Popup 3</option>
                            <option value="popup4" <?php selected( get_option('wpappp-popup-selected-popup'),'popup4'); ?>>Popup 4</option>
                            <option value="popup5" <?php selected( get_option('wpappp-popup-selected-popup'),'popup5'); ?>>Popup 5</option>
                            <option value="popup6" <?php selected( get_option('wpappp-popup-selected-popup'),'popup6'); ?>>Popup 6</option>
                            <option value="popup7" <?php selected( get_option('wpappp-popup-selected-popup'),'popup7'); ?>>Popup 7</option>
                            <option value="popup8" <?php selected( get_option('wpappp-popup-selected-popup'),'popup8'); ?>>Popup 8</option>
                            <option value="popup9" <?php selected( get_option('wpappp-popup-selected-popup'),'popup9'); ?>>Popup 9</option>
                            <option value="popup10" <?php selected( get_option('wpappp-popup-selected-popup'),'popup10'); ?>>Popup 10</option>
                            <option value="popup11" <?php selected( get_option('wpappp-popup-selected-popup'),'popup11'); ?>>Popup 11</option>
                            <option value="popup12" <?php selected( get_option('wpappp-popup-selected-popup'),'popup12'); ?>>Popup 12</option>
                            <option value="popup13" <?php selected( get_option('wpappp-popup-selected-popup'),'popup13'); ?>>Popup 13</option>
                            <option value="popup14" <?php selected( get_option('wpappp-popup-selected-popup'),'popup14'); ?>>Popup 14</option>
                        </select>

                        <input type="button" id="wpappp_reset_popup_settings" class="wpappp_buton" value="Reset Popup Settings" />
                        </div>

                        <br/>
                        <strong>Note: Live Preview maximum width is 500px.</strong>
                        <br/>

                         <div id="wpappp-popup1" style="display:none">

                            <div id="wpup-popup1-container">

                                <div id="wpup-popup-close-button">

                                    <a href="#"><img src="<?php echo plugins_url('images/popup1-img/close.png', __FILE__); ?>"></a>

                                </div>

                                <div id="wpup-popup1-container-content">

                                    <h2 id="wpup-popup1-heading1">This is a heading</h2>

                                    <div id="line-break"></div>

                                    <h4 id="wpup-popup1-heading2">This is a subheading</h4>

                                    <p><input type="text" id="wpup-popup1-name-text" class="wpappp-popup1-border-color" name="" value="" placeholder=" Enter Your Name..."></p>

                                    <p><input type="text" id="wpup-popup1-email-text" class="wpappp-popup1-border-color" name="" value="" placeholder=" Enter Your E-mail..."></p>

                                    <input type="button" id="wpup-popup1-subscribe-button" name="" value="Subscribe Now!">

                                    <div id="wpup-popup-security-note">

                                          <?php if(get_option('wpappp-popup1-security-note-text-option') != ''){ ?>
                                        <img style="margin-bottom: -3px;" src="<?php echo plugins_url('images/popup1-img/lock.png', __FILE__); ?>" />
                                         <?php } ?>

                                        <span id="wpup-popup1-security-note-text">This is a security note</span>

                                    </div>

                                </div>

                            </div>


                            <table id="wpappp-options-table" width="100%">

                                <tr>
                                    <th style="width:50%">Width:</th>
                                    <td class="up-content-options"><input type="text" id="wpappp-popup1-width" class="wpappp-tf-width" name="wpappp-popup1-width-option" value="<?php if(get_option('wpappp-popup1-width-option') == '') { echo '500';}else { echo get_option('wpappp-popup1-width-option');} ?>"></td>
                                </tr>

                                <tr>
                                    <th>Background Image:</th>
                                    <td>
                                        <div>
                                    <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a><br/>
                                        
                                            <input type="hidden" id="wpappp-default-background-image" value="<?php echo plugins_url('images/defaultpp1bg.jpg', __FILE__); ?>" />
                                            <img src="<?php if(get_option('wpappp-popup1-background-image-option') == '') { echo plugins_url('images/defaultpp1bg.jpg', __FILE__);}else { echo get_option('wpappp-popup1-background-image-option');} ?>" width="200px" id="wpappp-popup1-url-image" class="wpappp-popup1-image-url" />
                                            <input type="hidden" name="" id="wpappp-popup1-image-url" class="regular-text" value="<?php if(get_option('wpappp-popup1-background-image-option') == '') { echo plugins_url('images/defaultpp1bg.jpg', __FILE__);}else { echo get_option('wpappp-popup1-background-image-option');} ?>">
                                            <br/>
                                            <input type="button" name="upload-btn" id="wpappp-popup1-upload-btn" class="button-secondary wpappp_image_uploader" value="Upload Image">
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <th>Heading:</th>
                                    <td class="up-content-options">
                                        <input type="text" id="wpappp-popup1-heading-text" name="wpappp-popup1-heading-text-option" value="<?php if(get_option('wpappp-popup1-heading-text-option') == '') { echo 'This is heading text';}else { echo get_option('wpappp-popup1-heading-text-option');} ?>" placeholder="Enter Heading Text">
                                        <input type="text" id="wpappp-popup1-heading-text-color" name="wpappp-popup1-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup1-heading-text-color-option') == '') { echo '#ffffff';}else { echo get_option('wpappp-popup1-heading-text-color-option');} ?>"> 
                                        <select id="wpappp-popup1-heading-font-size" name="wpappp-popup1-heading-font-size-option">
                                            <option>Font Size</option>
                                            <?php
                                            for ($i=12; $i < 73; $i++) { 
                                                ?>
                                                <option value="<?php echo $i; ?>px" <?php selected( get_option('wpappp-popup1-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        
                                    </td>
                                </tr>

                                <tr>
                                    <th>Seperator Color:</th>
                                    <td class="up-content-options">
                                    <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                    <input type="text" id="wpappp-popup1-seperator-color" class="color_picker" name="wpappp-popup1-seperator-color-option" value=""></td> 
                                </tr>

                                <tr>
                                    <th>Sub Heading:</th>
                                    <td class="up-content-options">
                                        <input type="text" id="wpappp-popup1-subheading-text" name="wpappp-popup1-subheading-text-option" value="<?php if(get_option('wpappp-popup1-subheading-text-option') == '') { echo 'This is subheading text';}else { echo get_option('wpappp-popup1-subheading-text-option');} ?>" placeholder="Enter Sub-Heading Text">
                                        <input type="text" id="wpappp-popup1-subheading-text-color" name="wpappp-popup1-subheading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup1-subheading-text-color-option') == '') { echo '#ffffff';}else { echo get_option('wpappp-popup1-subheading-text-color-option');} ?>"> 
                                        <select id="wpappp-popup1-subheading-font-size" name="wpappp-popup1-subheading-font-size-option">
                                            <option>Font Size</option>
                                            <?php
                                            for ($i=12; $i < 73; $i++) { 
                                                ?>
                                                <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup1-subheading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                                <?php
                                            }
                                            ?>
                                        </select></td>
                                    </tr>

                                    <tr>
                                        <th>Text Fields Border:</th>
                                        <td class="up-content-options">
                                        <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                            <input type="text" id="wpappp-popup1-text-field-border-color" class="color_picker" name="wpappp-popup1-textfields-border-color-option" value="#ff4300"/></td>
                                        </tr>

                                        <tr>
                                            <th>Name Text Field Placeholder:</th>
                                            
                                            <td class="up-content-options">
                                            <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                            <input type="text" id="wpappp-popup1-name-text-placeholder" name="wpappp-popup1-name-textfield-placeholder-option" value="Enter Your Name" placeholder="Enter Your Name" disabled /><br/><span> Empty for Default</span></td>
                                        </tr>

                                        <tr>
                                            <th>E-mail Field Placeholder:</th>
                                            
                                            <td class="up-content-options">
                                            <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                            <input type="text" id="wpappp-popup1-email-text-placeholder" name="wpappp-popup1-email-textfield-placeholder-option" value="Enter Your Email" placeholder="Enter Your e-mail" disabled /><br/><span> Empty for Default</span></td>
                                        </tr>

                                        <tr>
                                            <th>Action Button Background:</th>
                                            <td class="up-content-options">
                                            <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                            <input type="text" id="wpappp-popup1-action-button-background-color" class="color_picker" name="wpappp-popup1-action-button-background-color-option" value="#ff4300"> </td>
                                        </tr>

                                        <tr>
                                            <th>Action Button Text:</th>
                                            <td class="up-content-options"><input type="text" id="wpappp-popup1-action-button-text" name="wpappp-popup1-action-button-text-option" value="<?php if(get_option('wpappp-popup1-action-button-text-option') == '') { echo 'Subscribe Now!';}else { echo get_option('wpappp-popup1-action-button-text-option');} ?>" placeholder="Action Button Text"></td>
                                        </tr>

                                        <tr>
                                            <th>Action Button Text Color:</th>
                                            <td class="up-content-options">
                                            <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a><input type="text" id="wpappp-popup1-action-button-text-color" class="color_picker" name="wpappp-popup1-action-button-text-color-option" value="#ffffff"> </td>
                                        </tr>

                                        <tr>
                                            <th>Security Note Text:</th>
                                            <td class="up-content-options"><input type="text" id="wpappp-popup1-security-note-text" name="wpappp-popup1-security-note-text-option" value="<?php if(get_option('wpappp-popup1-security-note-text-option') == '') { echo '';}else { echo get_option('wpappp-popup1-security-note-text-option');} ?>" placeholder="This is a Security Note">
                                                <br/><span>Leave empty if you don't want to show security note in popup</span>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th>Security Note Text Color:</th>
                                            <td class="up-content-options"><input type="text" id="wpappp-popup1-security-note-text-color" class="color_picker" name="wpappp-popup1-security-note-text-color-option" value="<?php echo esc_attr(get_option('wpappp-popup1-security-note-text-color-option') ); ?>"> </td>
                                        </tr>

                                        <tr>
                                            <th>Overlay:</th>
                                            <td class="up-content-options">
                                                <select id="wpappp-popup1-overlay-setting" name="wpappp-popup1-overlay-option">
                                                    <option value="0.6"<?php selected( get_option('wpappp-popup1-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                                    <option disabled>10% opacity (Premium)</option>
                                                    <option disabled>20% opacity (Premium)</option>
                                                    <option disabled>30% opacity (Premium)</option>
                                                    <option disabled>40% opacity (Premium)</option>
                                                    <option disabled>50% opacity (Premium)</option>
                                                    <option disabled>70% opacity (Premium)</option>
                                                    <option disabled>80% opacity (Premium)</option>
                                                    <option disabled>90% opacity (Premium)</option>
                                                    <option disabled>100% opacity (Premium)</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div id="wpappp-popup2"  style="display:none">
                                                                    <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>

                                    <div id="wpup-popup2-container">

                                        <div id="wpup-popup2-container-top">

                                            <div id="wpup-popup2-close-button">

                                                <a href="#"><img src="<?php echo plugins_url('images/popup1-img/close.png', __FILE__); ?>"></a>

                                            </div>

                                            <h3  id="wpup-popup2-heading1">ARE YOU READY? GET IT NOW!</h3>


                                        </div>

                                        <div id="wpup-popup2-container-content">

                                            <div id="wpappp-popup2-triangle-down"></div>

                                            <h4 id="wpup-popup2-subheading1">Increase more than 700% of E-mail Subscribers!</h4>
                                            <p id="wpup-popup2-subheading2">agasg sagasg asgasbhas sgfasgasg asgahag kmgaksmg mkamsgkasla fasmgksamg sgakmgkmg  gsmamw fmaskgmow gsaetarfaf.</p>
                                            <p id="wpup-popup2-name-wraper"><input type="text" id="wpup-popup2-name-text" name="" value="" placeholder="Your name"></p>
                                            <p id="wpup-popup2-email-wraper"><input type="text" id="wpup-popup2-email-text" name="" value="" placeholder="Your e-mail"></p>

                                            <input type="button" id="wpup-popup2-subscribe-button" name="" value="SUBSCRIBE NOW!">
                                            <div id="wpup-popup2-security-note">
                                                <img src="<?php echo plugins_url('images/popup2-img/lock.png', __FILE__); ?>" style="margin-bottom: -3px;">
                                                <span id="wpup-popup2-security-note-text">This information will never be share to third party</span>
                                            </div>
                                        </div>

                                    </div>

                                    <table id="wpappp-options-table" width="100%">

                                        <tr>
                                            <th style="width:50%">Width:</th>
                                            <td class="up-content-options">
                                                <input type="text" id="wpappp-popup2-width" class="wpappp-tf-width" name="wpappp-popup2-width-option" value="<?php if(get_option('wpappp-popup2-width-option') == '') { echo '600';}else { echo esc_attr(get_option('wpappp-popup2-width-option'));} ?>"></td>
                                            </tr>

                                            <tr>
                                                <th>Background Color:</th>
                                                <td class="up-content-options"><input type="text" id="wpappp-popup2-background-color" name="wpappp-popup2-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup2-background-color-option') == '') { echo '#0074ed';}else { echo esc_attr(get_option('wpappp-popup2-background-color-option'));} ?>"></td>
                                            </tr>


                                            <tr>
                                                <th>Heading:</th>
                                                <td class="up-content-options">
                                                    <input type="text" id="wpappp-popup2-heading-text" name="wpappp-popup2-heading-text-option" value="<?php if(get_option('wpappp-popup2-heading-text-option') == '') { echo 'ARE YOU READY? GET IT NOW!';}else { echo esc_attr(get_option('wpappp-popup2-heading-text-option'));} ?>" placeholder="Enter Heading Text">
                                                    <input type="text" id="wpappp-popup2-heading-text-color" name="wpappp-popup2-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup2-heading-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup2-heading-text-color-option'));} ?>"> 
                                                    <select id="wpappp-popup2-heading-font-size" name="wpappp-popup2-heading-font-size-option">
                                                        <option>Font Size</option>
                                                        <?php
                                                        for ($i=12; $i < 73; $i++) { 
                                                            ?>
                                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup2-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <p>
                                        <input name="wpappp-popup2-heading-font-family-option" id="wpappp-popup2-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup2-heading-font-family-option') ); ?>"/>
                                        </p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Sub Heading 1:</th>
                                                <td class="up-content-options">
                                                    <input type="text" id="wpappp-popup2-subheading1-text" name="wpappp-popup2-subheading1-text-option" value="<?php if(get_option('wpappp-popup2-subheading1-text-option') == '') { echo 'Increase more than 700% of E-mail Subscribers!';}else { echo esc_attr(get_option('wpappp-popup2-subheading1-text-option'));} ?>" placeholder="Enter Sub-Heading Text">
                                                    <input type="text" id="wpappp-popup2-subheading1-text-color" name="wpappp-popup2-subheading1-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup2-subheading1-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup2-subheading1-text-color-option'));} ?>">
                                                    <select id="wpappp-popup2-subheading1-font-size" name="wpappp-popup2-subheading1-font-size-option">
                                                        <option>Font Size</option>
                                                        <?php
                                                        for ($i=12; $i < 73; $i++) { 
                                                            ?>
                                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup2-subheading1-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                      <p>
                                        <input name="wpappp-popup2-subheading1-font-family-option" id="wpappp-popup2-subheading1-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup2-subheading1-font-family-option') ); ?>"/>
                                        </p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Sub Heading 2:</th>
                                                    <td class="up-content-options">
                                                        <input type="text" id="wpappp-popup2-subheading2-text" name="wpappp-popup2-subheading2-text-option" value="<?php if(get_option('wpappp-popup2-subheading2-text-option') == '') { echo 'agasg sagasg asgasbhas sgfasgasg asgahag kmgaksmg mkamsgkasla fasmgksamg sgakmgkmg  gsmamw fmaskgmow gsaetarfaf.';}else { echo esc_attr(get_option('wpappp-popup2-subheading2-text-option'));} ?>" placeholder="Enter Sub-Heading2 Text">
                                                        <input type="text" id="wpappp-popup2-subheading2-text-color" name="wpappp-popup2-subheading2-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup2-subheading2-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup2-subheading2-text-color-option'));} ?>">
                                                        <select id="wpappp-popup2-subheading2-font-size" name="wpappp-popup2-subheading2-font-size-option">
                                                            <option>Font Size</option>
                                                            <?php
                                                            for ($i=12; $i < 73; $i++) { 
                                                                ?>
                                                                <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup2-subheading2-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                           <p>
                                        <input name="wpappp-popup2-subheading2-font-family-option" id="wpappp-popup2-subheading2-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup2-subheading2-font-family-option') ); ?>"/>
                                        </p>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Name Text Field Placeholder:</th>
                                                        <td class="up-content-options"><input type="text" id="wpappp-popup2-name-text-placeholder" name="wpappp-popup2-name-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup2-name-textfield-placeholder-option') == '') { echo 'Enter Your Name';}else { echo esc_attr(get_option('wpappp-popup2-name-textfield-placeholder-option'));} ?>" placeholder="Enter Your Name"><br/><span> Empty for Default</span></td>
                                                    </tr>

                                                    <tr>
                                                        <th>E-mail Field Placeholder:</th>
                                                        <td class="up-content-options"><input type="text" id="wpappp-popup2-email-text-placeholder" name="wpappp-popup2-email-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup2-email-textfield-placeholder-option') == '') { echo 'Enter Your E-mail';}else { echo esc_attr(get_option('wpappp-popup2-email-textfield-placeholder-option'));} ?>" placeholder="Enter Your e-mail"><br/><span> Empty for Default</span></td>
                                                    </tr>



                                                    <tr>
                                                        <th>Action Button Background:</th>
                                                        <td class="up-content-options"><input type="text" id="wpappp-popup2-action-button-background-color" class="color_picker" name="wpappp-popup2-action-button-background-color-option" value="<?php if(get_option('wpappp-popup2-action-button-background-color-option') == '') { echo '#f95549';}else { echo esc_attr(get_option('wpappp-popup2-action-button-background-color-option'));} ?>"> </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Action Button Text:</th>
                                                        <td class="up-content-options"><input type="text" id="wpappp-popup2-action-button-text" name="wpappp-popup2-action-button-text-option" value="<?php if(get_option('wpappp-popup2-action-button-text-option') == '') { echo 'SUBSCRIBE NOW!';}else { echo esc_attr(get_option('wpappp-popup2-action-button-text-option'));} ?>" placeholder="Action Button Text">
  <p>
                                        <input name="wpappp-popup2-action-button-font-family-option" id="wpappp-popup2-action-button-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup2-action-button-font-family-option') ); ?>"/>
                                        </p>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Action Button Text Color:</th>
                                                        <td class="up-content-options"><input type="text" id="wpappp-popup2-action-button-text-color" class="color_picker" name="wpappp-popup2-action-button-text-color-option" value="<?php if(get_option('wpappp-popup2-action-button-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup2-action-button-text-color-option'));} ?>"> </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Action Button Border Shadow Color:</th>
                                                        <td class="up-content-options"><input type="text" id="wpappp-popup2-action-button-border-shadow-color" class="color_picker" name="wpappp-popup2-action-button-border-shadow-color-option" value="<?php if(get_option('wpappp-popup2-action-button-border-shadow-color-option') == '') { echo '#f95549';}else { echo esc_attr(get_option('wpappp-popup2-action-button-border-shadow-color-option'));} ?>"></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Security Note Text:</th>
                                                        <td class="up-content-options"><input type="text" id="wpappp-popup2-security-note-text" name="wpappp-popup2-security-note-text-option" value="<?php if(get_option('wpappp-popup2-security-note-text-option') == '') { echo 'This is a security note';}else { echo esc_attr(get_option('wpappp-popup2-security-note-text-option'));} ?>" placeholder="This is a Security Note">
                                                              <p>
                                        <input name="wpappp-popup2-security-note-font-family-option" id="wpappp-popup2-security-note-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup2-security-note-font-family-option') ); ?>"/>
                                        </p>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Security Note Text Color:</th>
                                                        <td class="up-content-options"><input type="text" id="wpappp-popup2-security-note-text-color" class="color_picker" name="wpappp-popup2-security-note-text-color-option" value="<?php if(get_option('wpappp-popup2-security-note-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup2-security-note-text-color-option'));} ?>"> </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Overlay:</th>
                                                        <td class="up-content-options">
                                                            <select id="wpappp-popup2-overlay-setting" name="wpappp-popup2-overlay-option">
                                                                <option value="0.6"<?php selected( get_option('wpappp-popup2-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                                                <option value="0.1"<?php selected( get_option('wpappp-popup2-overlay-option'),'0.1'); ?>>10% opacity</option>
                                                                <option value="0.2"<?php selected( get_option('wpappp-popup2-overlay-option'),'0.2'); ?>>20% opacity</option>
                                                                <option value="0.3"<?php selected( get_option('wpappp-popup2-overlay-option'),'0.3'); ?>>30% opacity</option>
                                                                <option value="0.4"<?php selected( get_option('wpappp-popup2-overlay-option'),'0.4'); ?>>40% opacity</option>
                                                                <option value="0.5"<?php selected( get_option('wpappp-popup2-overlay-option'),'0.5'); ?>>50% opacity</option>
                                                                <option value="0.7"<?php selected( get_option('wpappp-popup2-overlay-option'),'0.7'); ?>>70% opacity</option>
                                                                <option value="0.8"<?php selected( get_option('wpappp-popup2-overlay-option'),'0.8'); ?>>80% opacity</option>
                                                                <option value="0.9"<?php selected( get_option('wpappp-popup2-overlay-option'),'0.9'); ?>>90% opacity</option>
                                                                <option value="1"<?php selected( get_option('wpappp-popup2-overlay-option'),'1'); ?>>100% opacity</option>
                                                            </select>
                                                        </td>
                                                    </tr>

                                                </table>


                                            </div>
                                            <div id="wpappp-popup3"  style="display:none">
                                                                                <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>

                                                <div id="wpup-popup3-container">

                                                    <div id="wpup-popup3-close-button">

                                                        <a href="#"><img src="<?php echo plugins_url('images/popup3-img/close.png', __FILE__); ?>"></a>

                                                    </div>

                                                    <div id="wpup-popup3-container-top">

                                                        <h2 id="wpup-popup3-heading1">ARE YOU READY? GET IT!</h2>
                                                        <div id="wpup-popup3-background-image"></div>
                                                        <h4 id="wpup-popup3-subheading1">Increase more than 700% of Email Subscribers!</h4>
                                                        <p id="wpup-popup3-subheading2">Dis hac netus sed vivamus Lorem Purus posuere diam natoque orci curae; posuere quisque. Molestie lacus Accumsan egestas vivamus aenean aliquam laoreet lobortis eleifend, sit curabitur, senectus. Dapibus dignissim etiam.</p>

                                                    </div>

                                                    <div id="wpup-popup3-container-middle">

                                                        <p id="wpup-popup3-name-wraper"><input type="text" id="wpup-popup3-name-text" name="" value="" placeholder="Your name"></p>
                                                        <p id="wpup-popup3-email-wraper"><input type="text" id="wpup-popup3-email-text" name="" value="" placeholder="Your e-mail"></p>

                                                        <input type="button" id="wpup-popup3-subscribe-button" name="" value="SUBSCRIBE NOW!">

                                                    </div>

                                                    <div id="wpup-popup3-security-note-container">

                                                        <img src="<?php echo plugins_url('images/popup3-img/lock.png', __FILE__); ?>" style="margin-bottom:-3px;">
                                                        <span id="wpup-popup3-security-note-text">This information will never be shared to third party</span>

                                                    </div>

                                                </div>

                                                <table id="wpappp-options-table" width="100%">

                                                    <tr>
                                                        <th style="width:50%">Width:</th>
                                                        <td class="up-content-options"><input type="text" id="wpappp-popup3-width" class="wpappp-tf-width" name="wpappp-popup3-width-option" value="<?php if(get_option('wpappp-popup3-width-option') == '') { echo '660';}else { echo esc_attr(get_option('wpappp-popup3-width-option'));} ?>"></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Background Color:</th>
                                                        <td class="up-content-options"><input type="text" id="wpappp-popup3-background-color" name="wpappp-popup3-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup3-background-color-option') == '') { echo '#222222';}else { echo esc_attr(get_option('wpappp-popup3-background-color-option'));} ?>"></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Background Image:</th>
                                                        <td>
                                                            <div>
                                                                <input type="hidden" id="wpappp-popup3-default-background-image" value="<?php echo plugins_url('images/defaultpp3bg.png', __FILE__); ?>" />
                                                                <img src="<?php if(get_option('wpappp-popup3-background-image-option') == '') { echo plugins_url('images/defaultpp3bg.png', __FILE__);}else { echo esc_attr(get_option('wpappp-popup3-background-image-option'));} ?>" width="200px" id="wpappp-popup3-url-image" class="wpappp-popup3-image-url" />

                                                                <input type="hidden" name="wpappp-popup3-background-image-option" id="wpappp-popup3-image-url" class="regular-text" value="<?php if(get_option('wpappp-popup3-background-image-option') == '') { echo plugins_url('images/defaultpp3bg.png', __FILE__);}else { echo esc_attr(get_option('wpappp-popup3-background-image-option'));} ?>">

                                                                <br/>

                                                                <input type="button" name="upload-btn" id="wpappp-popup3-upload-btn" class="button-secondary wpappp_image_uploader" value="Upload Image">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Heading:</th>
                                                        <td class="up-content-options">
                                                            <input type="text" id="wpappp-popup3-heading-text" name="wpappp-popup3-heading-text-option" value="<?php if(get_option('wpappp-popup3-heading-text-option') == '') { echo 'ARE YOU READY? GET IT!';}else { echo esc_attr(get_option('wpappp-popup3-heading-text-option'));} ?>" placeholder="Enter Heading Text">

                                                            <input type="text" id="wpappp-popup3-heading-text-color" name="wpappp-popup3-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup3-heading-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup3-heading-text-color-option'));} ?>">

                                                            <select id="wpappp-popup3-heading-font-size" name="wpappp-popup3-heading-font-size-option">
                                                                <option>Font Size</option>
                                                                <?php
                                                                for ($i=12; $i < 73; $i++) { 
                                                                    ?>
                                                                    <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup3-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                             <p>
                                        <input name="wpappp-popup3-heading-font-family-option" id="wpappp-popup3-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup3-heading-font-family-option') ); ?>"/>
                                        </p>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Sub Heading 1:</th>
                                <td class="up-content-options">

                                    <input type="text" id="wpappp-popup3-subheading1-text" name="wpappp-popup3-subheading1-text-option" value="<?php if(get_option('wpappp-popup3-subheading1-text-option') == '') { echo 'Increase more than 700% of Email Subscribers!';}else { echo get_option('wpappp-popup3-subheading1-text-option');} ?>" placeholder="Enter Sub-Heading Text">

                                    <input type="text" id="wpappp-popup3-subheading1-text-color" name="wpappp-popup3-subheading1-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup3-subheading1-text-color-option') == '') { echo '#ffffff';}else { echo get_option('wpappp-popup3-subheading1-text-color-option');} ?>">

                                    <select id="wpappp-popup3-subheading1-font-size" name="wpappp-popup3-subheading1-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup3-subheading1-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                      <p>
                                        <input name="wpappp-popup3-subheading1-font-family-option" id="wpappp-popup3-subheading1-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup3-subheading1-font-family-option') ); ?>"/>
                                        </p>

                                    </td>
                                </tr>

                                <tr>
                                    <th>Sub Heading 2:</th>
                                    <td class="up-content-options">
                                        <input type="text" id="wpappp-popup3-subheading2-text" name="wpappp-popup3-subheading2-text-option" value="<?php if(get_option('wpappp-popup3-subheading2-text-option') == '') { echo 'Dis hac netus sed vivamus Lorem Purus posuere diam natoque orci curae; posuere quisque. Molestie lacus Accumsan egestas vivamus aenean aliquam laoreet lobortis eleifend, sit curabitur, senectus. Dapibus dignissim etiam.';}else { echo get_option('wpappp-popup3-subheading2-text-option');} ?>" placeholder="Enter Sub-Heading2 Text">

                                        <input type="text" id="wpappp-popup3-subheading2-text-color" name="wpappp-popup3-subheading2-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup3-subheading2-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup3-subheading2-text-color-option'));} ?>">

                                        <select id="wpappp-popup3-subheading2-font-size" name="wpappp-popup3-subheading2-font-size-option">
                                            <option>Font Size</option>
                                            <?php
                                            for ($i=12; $i < 73; $i++) { 
                                                ?>
                                                <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup3-subheading2-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <p>
                                        <input name="wpappp-popup3-subheading2-font-family-option" id="wpappp-popup3-subheading2-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup3-subheading2-font-family-option') ); ?>"/>
                                        </p>

                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Form Background Color:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup3-form-background-color" name="wpappp-popup3-form-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup3-form-background-color-option') == '') { echo '#fb0007';}else { echo esc_attr(get_option('wpappp-popup3-form-background-color-option'));} ?>"> </td>
                                    </tr>

                                    <tr>
                                        <th>Name Text Field Placeholder:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup3-name-text-placeholder" name="wpappp-popup3-name-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup3-name-textfield-placeholder-option') == '') { echo 'Your Name';}else { echo esc_attr(get_option('wpappp-popup3-name-textfield-placeholder-option'));} ?>" placeholder="Enter Your Name"><br/><span> Empty for Default</span></td>
                                    </tr>

                                    <tr>
                                        <th>E-mail Field Placeholder:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup3-email-text-placeholder" name="wpappp-popup3-email-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup3-email-textfield-placeholder-option') == '') { echo 'Your Email';}else { echo esc_attr(get_option('wpappp-popup3-email-textfield-placeholder-option'));} ?>" placeholder="Enter Your e-mail"><br/><span> Empty for Default</span></td>
                                    </tr>



                                    <tr>
                                        <th>Action Button Background:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup3-action-button-background-color" class="color_picker" name="wpappp-popup3-action-button-background-color-option" value="<?php if(get_option('wpappp-popup3-action-button-background-color-option') == '') { echo '#fb0007';}else { echo esc_attr(get_option('wpappp-popup3-action-button-background-color-option'));} ?>"></td>
                                    </tr>

                                    <tr>
                                        <th>Action Button Text:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup3-action-button-text" name="wpappp-popup3-action-button-text-option" value="<?php if(get_option('wpappp-popup3-action-button-text-option') == '') { echo 'SUBSCRIBE NOW!';}else { echo esc_attr(get_option('wpappp-popup3-action-button-text-option'));} ?>" placeholder="Action Button Text">
                                            <p>
                                        <input name="wpappp-popup3-action-button-font-family-option" id="wpappp-popup3-action-button-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup3-action-button-font-family-option') ); ?>"/>
                                        </p>

                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Action Button Text Color:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup3-action-button-text-color" class="color_picker" name="wpappp-popup3-action-button-text-color-option" value="<?php if(get_option('wpappp-popup3-action-button-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup3-action-button-text-color-option'));} ?>"> </td>
                                    </tr>

                                    <tr>
                                        <th>Security Note Text:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup3-security-note-text" name="wpappp-popup3-security-note-text-option" value="<?php if(get_option('wpappp-popup3-security-note-text-option') == '') { echo 'This is a security note';}else { echo esc_attr(get_option('wpappp-popup3-security-note-text-option'));} ?>" placeholder="This is a Security Note">
                                                 <p>
                                        <input name="wpappp-popup3-security-note-text-font-family-option" id="wpappp-popup3-security-note-text-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup3-security-note-text-font-family-option') ); ?>"/>
                                        </p>

                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Security Note Text Color:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup3-security-note-text-color" class="color_picker" name="wpappp-popup3-security-note-text-color-option" value="<?php if(get_option('wpappp-popup3-security-note-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup3-security-note-text-color-option'));} ?>"></td>
                                    </tr>

                                    <tr>
                                        <th>Security Note Background Color:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup3-security-note-background-color" name="wpappp-popup3-security-note-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup3-security-note-background-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup3-security-note-background-color-option'));} ?>"></td>
                                    </tr>

                                    <tr>
                                        <th>Overlay:</th>
                                        <td class="up-content-options">
                                            <select id="wpappp-popup3-overlay-setting" name="wpappp-popup3-overlay-option">
                                                <option value="0.6"<?php selected( get_option('wpappp-popup3-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                                <option value="0.1"<?php selected( get_option('wpappp-popup3-overlay-option'),'0.1'); ?>>10% opacity</option>
                                                <option value="0.2"<?php selected( get_option('wpappp-popup3-overlay-option'),'0.2'); ?>>20% opacity</option>
                                                <option value="0.3"<?php selected( get_option('wpappp-popup3-overlay-option'),'0.3'); ?>>30% opacity</option>
                                                <option value="0.4"<?php selected( get_option('wpappp-popup3-overlay-option'),'0.4'); ?>>40% opacity</option>
                                                <option value="0.5"<?php selected( get_option('wpappp-popup3-overlay-option'),'0.5'); ?>>50% opacity</option>
                                                <option value="0.7"<?php selected( get_option('wpappp-popup3-overlay-option'),'0.7'); ?>>70% opacity</option>
                                                <option value="0.8"<?php selected( get_option('wpappp-popup3-overlay-option'),'0.8'); ?>>80% opacity</option>
                                                <option value="0.9"<?php selected( get_option('wpappp-popup3-overlay-option'),'0.9'); ?>>90% opacity</option>
                                                <option value="1"<?php selected( get_option('wpappp-popup3-overlay-option'),'1'); ?>>100% opacity</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                            <div id="wpappp-popup4"  style="display:none">
                                                                <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>

                                <div id="wpup-popup4-container">

                                    <div id="wpup-popup4-close-button">
                                        <a href="#"><img src="<?php echo plugins_url('images/popup4-img/close.png', __FILE__); ?>"></a>
                                    </div>

                                    <div id="wpup-popup4-top-content">

                                        <h2 id="wpup-popup4-heading1">ARE YOU READY? GET IT NOW!</h2>
                                        <h4 id="wpup-popup4-heading2">Increase more than 700% of Email Subscribers!</h4>
                                        <p id="wpup-popup4-subheading1">Dapibus. Nonummy congue, lacus placerat erat quisque euismod facilisis praesent tristique scelerisque aptent nonummy. Convallis nisl faucibus urna sem. Dui purus eros.</p>

                                    </div>

                                    <div id="wpup-popup4-center-content">

                                        <label id="wpup-popup4-label-name" for="wpup-popup4-name-text">ENTER YOUR NAME</label>
                                        <p id="wpup-popup4-name-wraper"><input type="text" id="wpup-popup4-name-text" name="" value=""></p>
                                        <label id="wpup-popup4-label-email" for="wpup-popup4-email-text">ENTER YOUR E-MAIL</label>
                                        <p id="wpup-popup4-email-wraper"><input type="text" id="wpup-popup4-email-text" name="" value=""></p>
                                        <input type="button" id="wpup-popup4-subscribe-button" name="" value="SUBSCRIBE NOW!">

                                        <div id="wpup-popup4-security-note">
                                            <img src="<?php echo plugins_url('images/popup4-img/lock.png', __FILE__); ?>" style="margin-bottom:-3px;">
                                            <span id="wpup-popup4-security-note-text">This information will never be shared to third party</span>
                                        </div>

                                    </div>

                                </div>
                                <table id="wpappp-options-table" width="100%">

                    <tr>
                        <th style="width:50%">Width:</th>
                        <td class="up-content-options"><input type="text" id="wpappp-popup4-width" class="wpappp-tf-width" name="wpappp-popup4-width-option" value="<?php if(get_option('wpappp-popup4-width-option') == '') { echo '600';}else { echo esc_attr(get_option('wpappp-popup4-width-option'));} ?>"></td>
                    </tr>

                    <tr>
                        <th>Background Color:</th>
                        <td class="up-content-options"><input type="text" id="wpappp-popup4-background-color" name="wpappp-popup4-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup4-background-color-option') == '') { echo '';}else { echo esc_attr(get_option('wpappp-popup4-background-color-option'));} ?>"> </td>
                    </tr>

                    <tr>
                        <th>Background Image:</th>
                        <td>
                            <div>
                                <input type="hidden" id="wpappp-popup4-default-background-image" value="<?php echo plugins_url('images/defaultpp4bg.png', __FILE__); ?>" />
                                <img src="<?php if(get_option('wpappp-popup4-background-image-option') == '') { echo plugins_url('images/defaultpp4bg.png', __FILE__);}else { echo esc_attr(get_option('wpappp-popup4-background-image-option'));} ?>" width="200px" id="wpappp-popup4-url-image" class="wpappp-popup4-image-url" />
                                <input type="hidden" name="wpappp-popup4-background-image-option" id="wpappp-popup4-image-url" class="regular-text" value="<?php if(get_option('wpappp-popup4-background-image-option') == '') { echo plugins_url('images/defaultpp4bg.png', __FILE__);}else { echo esc_attr(get_option('wpappp-popup4-background-image-option'));} ?>">
                                <br/>
                                <input type="button" name="upload-btn" id="wpappp-popup4-upload-btn" class="button-secondary wpappp_image_uploader" value="Upload Image">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th>Heading:</th>
                        <td class="up-content-options">
                            <input type="text" id="wpappp-popup4-heading-text" name="wpappp-popup4-heading-text-option" value="<?php if(get_option('wpappp-popup4-heading-text-option') == '') { echo 'ARE YOU READY? GET IT NOW!';}else { echo esc_attr(get_option('wpappp-popup4-heading-text-option'));} ?>" placeholder="Enter Heading Text">

                            <input type="text" id="wpappp-popup4-heading-text-color" name="wpappp-popup4-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup4-heading-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup4-heading-text-color-option'));} ?><?php echo esc_attr(get_option('wpappp-popup4-heading-text-color-option') ); ?>">

                            <select id="wpappp-popup4-heading-font-size" name="wpappp-popup4-heading-font-size-option">
                                <option>Font Size</option>
                                <?php
                                for ($i=12; $i < 73; $i++) { 
                                    ?>
                                    <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup4-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                    <?php
                                }
                                ?>
                            </select>

                                         <p>
                                        <input name="wpappp-popup4-heading-font-family-option" id="wpappp-popup4-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup4-heading-font-family-option') ); ?>"/>
                                        </p>

                        </td>
                    </tr>

                    <tr>
                        <th>Sub Heading 1:</th>
                        <td class="up-content-options">
                            <input type="text" id="wpappp-popup4-subheading1-text" name="wpappp-popup4-subheading1-text-option" value="<?php if(get_option('wpappp-popup4-subheading1-text-option') == '') { echo 'Increase more than 700% of Email Subscribers!';}else { echo esc_attr(get_option('wpappp-popup4-subheading1-text-option'));} ?>" placeholder="Enter Sub-Heading Text">

                            <input type="text" id="wpappp-popup4-subheading1-text-color" name="wpappp-popup4-subheading1-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup4-subheading1-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup4-subheading1-text-color-option'));} ?>">

                            <select id="wpappp-popup4-subheading1-font-size" name="wpappp-popup4-subheading1-font-size-option">
                                <option>Font Size</option>
                                <?php
                                for ($i=12; $i < 73; $i++) { 
                                    ?>
                                    <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup4-subheading1-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                    <?php
                                }
                                ?>
                            </select>

             <p>
                                        <input name="wpappp-popup4-subheading1-font-family-option" id="wpappp-popup4-subheading1-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup4-subheading1-font-family-option') ); ?>"/>
                                        </p>

                            </td>
                        </tr>

                        <tr>
                            <th>Sub Heading 2:</th>
                            <td class="up-content-options">
                                <input type="text" id="wpappp-popup4-subheading2-text" name="wpappp-popup4-subheading2-text-option" value="<?php if(get_option('wpappp-popup4-subheading2-text-option') == '') { echo 'Dapibus. Nonummy congue, lacus placerat erat quisque euismod facilisis praesent tristique scelerisque aptent nonummy. Convallis nisl faucibus urna sem. Dui purus eros.';}else { echo esc_attr(get_option('wpappp-popup4-subheading2-text-option'));} ?>" placeholder="Enter Sub-Heading2 Text">

                                <input type="text" id="wpappp-popup4-subheading2-text-color" name="wpappp-popup4-subheading2-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup4-subheading2-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup4-subheading2-text-color-option'));} ?><?php echo esc_attr(get_option('wpappp-popup4-subheading2-text-color-option') ); ?>">

                                <select id="wpappp-popup4-subheading2-font-size" name="wpappp-popup4-subheading2-font-size-option">
                                    <option>Font Size</option>
                                    <?php
                                    for ($i=12; $i < 73; $i++) { 
                                        ?>
                                        <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup4-subheading2-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                        <?php
                                    }
                                    ?>
                                </select>
             <p>
                                        <input name="wpappp-popup4-subheading2-font-family-option" id="wpappp-popup4-subheading2-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup4-subheading2-font-family-option') ); ?>"/>
                                        </p>


                                </td>
                            </tr>

                            <tr>
                                <th>Form Background Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup4-form-background-color" name="wpappp-popup4-form-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup4-form-background-color-option') == '') { echo '#88D16F';}else { echo esc_attr(get_option('wpappp-popup4-form-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Name Text Field Label:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup4-name-text-placeholder" name="wpappp-popup4-name-textfield-label-option" value="<?php if(get_option('wpappp-popup4-name-textfield-label-option') == '') { echo 'ENTER YOUR NAME';}else { echo esc_attr(get_option('wpappp-popup4-name-textfield-label-option'));} ?>" placeholder="Enter Your Name"><br/><span> Empty for Default</span>
                                       <p>
                                        <input name="wpappp-popup4-name-textfield-font-family-option" id="wpappp-popup4-name-textfield-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup4-name-textfield-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>E-mail Field Label:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup4-email-text-placeholder" name="wpappp-popup4-email-textfield-label-option" value="<?php if(get_option('wpappp-popup4-email-textfield-label-option') == '') { echo 'ENTER YOUR EMAIL';}else { echo esc_attr(get_option('wpappp-popup4-email-textfield-label-option'));} ?>" placeholder="Enter Your e-mail"><br/><span> Empty for Default</span>

                                      <p>
                                        <input name="wpappp-popup4-email-textfield-font-family-option" id="wpappp-popup4-email-textfield-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup4-email-textfield-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>



                            <tr>
                                <th>Action Button Background:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup4-action-button-background-color" class="color_picker" name="wpappp-popup4-action-button-background-color-option" value="<?php if(get_option('wpappp-popup4-action-button-background-color-option') == '') { echo '#F95549';}else { echo esc_attr(get_option('wpappp-popup4-action-button-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Action Button Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup4-action-button-text" name="wpappp-popup4-action-button-text-option" value="<?php if(get_option('wpappp-popup4-action-button-text-option') == '') { echo 'SUBSCRIBE NOW!';}else { echo esc_attr(get_option('wpappp-popup4-action-button-text-option'));} ?>" placeholder="Action Button Text">
                                                 <p>
                                        <input name="wpappp-popup4-action-button-font-family-option" id="wpappp-popup4-action-button-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup4-action-button-font-family-option') ); ?>"/>
                                        </p>


                                </td>
                            </tr>

                            <tr>
                                <th>Action Button Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup4-action-button-text-color" class="color_picker" name="wpappp-popup4-action-button-text-color-option" value="<?php if(get_option('wpappp-popup4-action-button-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup4-action-button-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Action Button Border Shadow Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup4-action-button-border-shadow-color" class="color_picker" name="wpappp-popup4-action-button-border-shadow-color-option" value="<?php if(get_option('wpappp-popup4-action-button-border-shadow-color-option') == '') { echo '#D00F00';}else { echo esc_attr(get_option('wpappp-popup4-action-button-border-shadow-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Security Note Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup4-security-note-text" name="wpappp-popup4-security-note-text-option" value="<?php if(get_option('wpappp-popup4-security-note-text-option') == '') { echo 'Your information will not be shared with anyone.';}else { echo esc_attr(get_option('wpappp-popup4-security-note-text-option'));} ?>" placeholder="This is a Security Note">
                                        <p>
                                        <input name="wpappp-popup4-security-note-font-family-option" id="wpappp-popup4-security-note-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup4-security-note-font-family-option') ); ?>"/>
                                        </p>


                                </td>
                            </tr>

                            <tr>
                                <th>Security Note Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup4-security-note-text-color" class="color_picker" name="wpappp-popup4-security-note-text-color-option" value="<?php if(get_option('wpappp-popup4-security-note-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup4-security-note-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Overlay:</th>
                                <td class="up-content-options">
                                    <select id="wpappp-popup4-overlay-setting" name="wpappp-popup4-overlay-option">
                                        <option value="0.6"<?php selected( get_option('wpappp-popup4-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                        <option value="0.1"<?php selected( get_option('wpappp-popup4-overlay-option'),'0.1'); ?>>10% opacity</option>
                                        <option value="0.2"<?php selected( get_option('wpappp-popup4-overlay-option'),'0.2'); ?>>20% opacity</option>
                                        <option value="0.3"<?php selected( get_option('wpappp-popup4-overlay-option'),'0.3'); ?>>30% opacity</option>
                                        <option value="0.4"<?php selected( get_option('wpappp-popup4-overlay-option'),'0.4'); ?>>40% opacity</option>
                                        <option value="0.5"<?php selected( get_option('wpappp-popup4-overlay-option'),'0.5'); ?>>50% opacity</option>
                                        <option value="0.7"<?php selected( get_option('wpappp-popup4-overlay-option'),'0.7'); ?>>70% opacity</option>
                                        <option value="0.8"<?php selected( get_option('wpappp-popup4-overlay-option'),'0.8'); ?>>80% opacity</option>
                                        <option value="0.9"<?php selected( get_option('wpappp-popup4-overlay-option'),'0.9'); ?>>90% opacity</option>
                                        <option value="1"<?php selected( get_option('wpappp-popup4-overlay-option'),'1'); ?>>100% opacity</option>
                                    </select>
                                </td>
                            </tr>
                           </table>

                    </div>
                    <div id="wpappp-popup5"  style="display:none">
                                                        <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>

                        <div id="wpup-popup5-container">
                            <div id="wpup-popup5-close-button">
                                <a href="#"><img src="<?php echo plugins_url('images/popup5-img/close.png', __FILE__); ?>"></a>

                            </div>

                            <div id="wpup-popup5-top-content">

                                <h2 id="wpup-popup5-header">Hungry for Options? GET IT! NOW!</h2>
                                <p id="wpup-popup5-subheader">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ex fermentum, placerat sapien non, egestas dui. Donec dictum vehicula.</p>

                            </div>

                            <div id="wpup-popup5-center-content">

                                <div id="wpup-popup5-center-content-left">
                                </div>

                                <div id="wpup-popup5-center-content-right">

                                    <p id="wpup-popup5-name-wraper"><input type="text" id="wpup-popup5-name-text" name="" value="" placeholder="Your name"></p>
                                    <p id="wpup-popup5-email-wraper"><input type="text" id="wpup-popup5-email-text" name="" value="" placeholder="Your email"></p>

                                    <input type="button" id="wpup-popup5-subscribe-button" name="" value="SUBSCRIBE NOW!">

                                    <div id="wpup-popup5-security-note">

                                        <img src="<?php echo plugins_url('images/popup5-img/lock.png', __FILE__); ?>" style="margin-bottom:-3px;">
                                        <span id="wpup-popup5-security-note-text">This information will never be shared to third party</span>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <table id="wpappp-options-table" width="100%">

                            <tr>
                                <th style="width:50%">Width:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup5-width" class="wpappp-tf-width" name="wpappp-popup5-width-option" value="<?php if(get_option('wpappp-popup5-width-option') == '') { echo '700';}else { echo esc_attr(get_option('wpappp-popup5-width-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Background Image:</th>
                                <td>
                                    <div>
                                        <input type="hidden" id="wpappp-popup5-default-background-image" value="<?php echo plugins_url('images/defaultpp5bg.png', __FILE__); ?>" />
                                        <img src="<?php if(get_option('wpappp-popup5-background-image-option') == '') { echo plugins_url('images/defaultpp5bg.png', __FILE__);}else { echo esc_attr(get_option('wpappp-popup5-background-image-option'));} ?>" width="200px" id="wpappp-popup5-url-image" class="wpappp-popup5-image-url" />
                                        <input type="hidden" name="wpappp-popup5-background-image-option" id="wpappp-popup5-image-url" class="regular-text" value="<?php if(get_option('wpappp-popup5-background-image-option') == '') { echo plugins_url('images/defaultpp5bg.png', __FILE__);}else { echo esc_attr(get_option('wpappp-popup5-background-image-option'));} ?>">
                                        <br/>
                                        <input type="button" name="upload-btn" id="wpappp-popup5-upload-btn" class="button-secondary wpappp_image_uploader" value="Upload Image">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>Background Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup5-background-color" name="wpappp-popup5-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup5-background-color-option') == '') { echo '#FFD804';}else { echo esc_attr(get_option('wpappp-popup5-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup5-heading-text" name="wpappp-popup5-heading-text-option" value="<?php if(get_option('wpappp-popup5-heading-text-option') == '') { echo 'Hungry for Options? GET IT! NOW!';}else { echo esc_attr(get_option('wpappp-popup5-heading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup5-heading-text-color" name="wpappp-popup5-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup5-heading-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup5-heading-text-color-option'));} ?>">

                                    <select id="wpappp-popup5-heading-font-size" name="wpappp-popup5-heading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup5-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                      <p>
                                        <input name="wpappp-popup5-heading-font-family-option" id="wpappp-popup5-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup5-heading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Sub Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup5-subheading-text" name="wpappp-popup5-subheading-text-option" value="<?php if(get_option('wpappp-popup5-subheading-text-option') == '') { echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ex fermentum, placerat sapien non, egestas dui. Donec dictum vehicula.';}else { echo esc_attr(get_option('wpappp-popup5-subheading-text-option'));} ?>" placeholder="Enter Sub-Heading Text">

                                    <input type="text" id="wpappp-popup5-subheading-text-color" name="wpappp-popup5-subheading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup5-subheading-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup5-subheading-text-color-option'));} ?>">

                                    <select id="wpappp-popup5-subheading-font-size" name="wpappp-popup5-subheading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup5-subheading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <p>
                                        <input name="wpappp-popup5-subheading-font-family-option" id="wpappp-popup5-subheading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup5-subheading-font-family-option') ); ?>"/>
                                        </p>

                                    </td>
                                </tr>

                                <tr>
                                    <th>Name Text Field Placeholder:</th>
                                    <td class="up-content-options"><input type="text" id="wpappp-popup5-name-text-placeholder" name="wpappp-popup5-name-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup5-name-textfield-placeholder-option') == '') { echo 'Your name';}else { echo esc_attr(get_option('wpappp-popup5-name-textfield-placeholder-option'));} ?>" placeholder="Enter Your Name"><br/><span> Empty for Default</span></td>
                                </tr>

                                <tr>
                                    <th>E-mail Field Placeholder:</th>
                                    <td class="up-content-options"><input type="text" id="wpappp-popup5-email-text-placeholder" name="wpappp-popup5-email-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup5-email-textfield-placeholder-option') == '') { echo 'Your email';}else { echo esc_attr(get_option('wpappp-popup5-email-textfield-placeholder-option'));} ?>" placeholder="Enter Your e-mail"><br/><span> Empty for Default</span></td>
                                </tr>


                                <tr>
                                    <th>Action Button Background:</th>
                                    <td class="up-content-options"><input type="text" id="wpappp-popup5-action-button-background-color" class="color_picker" name="wpappp-popup5-action-button-background-color-option" value="<?php if(get_option('wpappp-popup5-action-button-background-color-option') == '') { echo '#936B0C';}else { echo esc_attr(get_option('wpappp-popup5-action-button-background-color-option'));} ?>"></td>
                                </tr>

                                <tr>
                                    <th>Action Button Text:</th>
                                    <td class="up-content-options"><input type="text" id="wpappp-popup5-action-button-text" name="wpappp-popup5-action-button-text-option" value="<?php if(get_option('wpappp-popup5-action-button-text-option') == '') { echo 'SUBSCRIBE NOW!';}else { echo esc_attr(get_option('wpappp-popup5-action-button-text-option'));} ?>" placeholder="Action Button Text">
                                        <p>
                                        <input name="wpappp-popup5-action-button-font-family-option" id="wpappp-popup5-action-button-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup5-action-button-font-family-option') ); ?>"/>
                                        </p>

                                    </td>
                                </tr>

                                <tr>
                                    <th>Action Button Text Color:</th>
                                    <td class="up-content-options"><input type="text" id="wpappp-popup5-action-button-text-color" class="color_picker" name="wpappp-popup5-action-button-text-color-option" value="<?php if(get_option('wpappp-popup5-action-button-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup5-action-button-text-color-option'));} ?>"></td>
                                </tr>

                                <tr>
                                    <th>Action Button Border Shadow Color:</th>
                                    <td class="up-content-options"><input type="text" id="wpappp-popup5-action-button-border-shadow-color" class="color_picker" name="wpappp-popup5-action-button-border-shadow-color-option" value="<?php if(get_option('wpappp-popup5-action-button-border-shadow-color-option') == '') { echo '#936B0C';}else { echo esc_attr(get_option('wpappp-popup5-action-button-border-shadow-color-option'));} ?>"></td>
                                </tr>

                                <tr>
                                    <th>Security Note Text:</th>
                                    <td class="up-content-options"><input type="text" id="wpappp-popup5-security-note-text" name="wpappp-popup5-security-note-text-option" value="<?php if(get_option('wpappp-popup5-security-note-text-option') == '') { echo 'This information will never be shared to third party';}else { echo esc_attr(get_option('wpappp-popup5-security-note-text-option'));} ?>" placeholder="This is a Security Note">

                                        <p>
                                        <input name="wpappp-popup5-security-note-font-family-option" id="wpappp-popup5-security-note-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup5-security-note-font-family-option') ); ?>"/>
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Security Note Text Color:</th>
                                    <td class="up-content-options"><input type="text" id="wpappp-popup5-security-note-text-color" class="color_picker" name="wpappp-popup5-security-note-text-color-option" value="<?php if(get_option('wpappp-popup5-security-note-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup5-security-note-text-color-option'));} ?><?php echo esc_attr(get_option('wpappp-popup5-security-note-text-color-option') ); ?>"></td>
                                </tr>

                                <tr>
                                    <th>Overlay:</th>
                                    <td class="up-content-options">
                                        <select id="wpappp-popup5-overlay-setting" name="wpappp-popup5-overlay-option">
                                            <option value="0.6"<?php selected( get_option('wpappp-popup5-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                            <option value="0.1"<?php selected( get_option('wpappp-popup5-overlay-option'),'0.1'); ?>>10% opacity</option>
                                            <option value="0.2"<?php selected( get_option('wpappp-popup5-overlay-option'),'0.2'); ?>>20% opacity</option>
                                            <option value="0.3"<?php selected( get_option('wpappp-popup5-overlay-option'),'0.3'); ?>>30% opacity</option>
                                            <option value="0.4"<?php selected( get_option('wpappp-popup5-overlay-option'),'0.4'); ?>>40% opacity</option>
                                            <option value="0.5"<?php selected( get_option('wpappp-popup5-overlay-option'),'0.5'); ?>>50% opacity</option>
                                            <option value="0.7"<?php selected( get_option('wpappp-popup5-overlay-option'),'0.7'); ?>>70% opacity</option>
                                            <option value="0.8"<?php selected( get_option('wpappp-popup5-overlay-option'),'0.8'); ?>>80% opacity</option>
                                            <option value="0.9"<?php selected( get_option('wpappp-popup5-overlay-option'),'0.9'); ?>>90% opacity</option>
                                            <option value="1"<?php selected( get_option('wpappp-popup5-overlay-option'),'1'); ?>>100% opacity</option>
                                        </select>
                                    </td>
                                </tr>

                            </table>

                        </div>
                        <div id="wpappp-popup6"  style="display:none">
                                                            <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>


                            <div id="wpup-popup6-container">

                                <div id="wpup-popup6-close-button">
                                    <img src="<?php echo plugins_url('images/popup6-img/close.png', __FILE__); ?>">     
                                </div>

                                <div id="wpup-popup6-content">

                                    <h2 id="wpup-popup6-heading">Subscribe and get more traffic right now!</h2>
                                    <p id="wpup-popup6-name-wraper"><input type="text" id="wpup-popup6-name-text" name="" value="" placeholder="Your name"></p>
                                    <p id="wpup-popup6-email-wraper"><input type="text" id="wpup-popup6-email-text" name="" value="" placeholder="Your email"></p>
                                    <input type="button" id="wpup-popup6-subscribe-button" name="" value="SUBSCRIBE">
                                    <p><a id="wpup-popup6-info">Don't show this information again</a></p>

                                </div>

                            </div>

                            <table id="wpappp-options-table" width="100%">

                                <tr>
                                    <th style="width:50%">Width:</th>
                                    <td class="up-content-options"><input type="text" id="wpappp-popup6-width" class="wpappp-tf-width" name="wpappp-popup6-width-option" value="<?php if(get_option('wpappp-popup6-width-option') == '') { echo '890';}else { echo esc_attr(get_option('wpappp-popup6-width-option'));} ?>"></td>
                                </tr>

                                <tr>
                                    <th>Background Color:</th>
                                    <td class="up-content-options"><input type="text" id="wpappp-popup6-background-color" name="wpappp-popup6-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup6-background-color-option') == '') { echo '#e7e7e7';}else { echo esc_attr(get_option('wpappp-popup6-background-color-option'));} ?>"></td>
                                </tr>

                                <tr>
                                    <th>Heading:</th>
                                    <td class="up-content-options">
                                        <input type="text" id="wpappp-popup6-heading-text" name="wpappp-popup6-heading-text-option" value="<?php if(get_option('wpappp-popup6-heading-text-option') == '') { echo 'Subscribe and get more traffic right now!';}else { echo esc_attr(get_option('wpappp-popup6-heading-text-option'));} ?>" placeholder="Enter Heading Text">

                                        <input type="text" id="wpappp-popup6-heading-text-color" name="wpappp-popup6-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup6-heading-text-color-option') == '') { echo '#363636';}else { echo esc_attr(get_option('wpappp-popup6-heading-text-color-option'));} ?>">

                                        <select id="wpappp-popup6-heading-font-size" name="wpappp-popup6-heading-font-size-option">
                                            <option>Font Size</option>
                                            <?php
                                            for ($i=12; $i < 73; $i++) { 
                                                ?>
                                                <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup6-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                         <p>
                                        <input name="wpappp-popup6-heading-font-family-option" id="wpappp-popup6-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup6-heading-font-family-option') ); ?>"/>
                                        </p>
                                    </td>
                                </tr>

                                <tr>


                                    <tr>
                                        <th>Name Text Field Placeholder:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup6-name-text-placeholder" name="wpappp-popup6-name-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup6-name-textfield-placeholder-option') == '') { echo 'Your name';}else { echo esc_attr(get_option('wpappp-popup6-name-textfield-placeholder-option'));} ?>" placeholder="Enter Your Name"><br/><span> Empty for Default</span></td>
                                    </tr>

                                    <tr>
                                        <th>E-mail Field Placeholder:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup6-email-text-placeholder" name="wpappp-popup6-email-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup6-email-textfield-placeholder-option') == '') { echo 'Your email';}else { echo esc_attr(get_option('wpappp-popup6-email-textfield-placeholder-option'));} ?>" placeholder="Enter Your e-mail"><br/><span> Empty for Default</span></td>
                                    </tr>

                                    <tr>
                                        <th>Action Button Background:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup6-action-button-background-color" class="color_picker" name="wpappp-popup6-action-button-background-color-option" value="<?php if(get_option('wpappp-popup6-action-button-background-color-option') == '') { echo '#4ecdc4';}else { echo esc_attr(get_option('wpappp-popup6-action-button-background-color-option'));} ?>"></td>
                                    </tr>

                                    <tr>
                                        <th>Action Button Text:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup6-action-button-text" name="wpappp-popup6-action-button-text-option" value="<?php if(get_option('wpappp-popup6-action-button-text-option') == '') { echo 'Subscribe Now!';}else { echo esc_attr(get_option('wpappp-popup6-action-button-text-option'));} ?>" placeholder="Action Button Text">
                                               <p>
                                        <input name="wpappp-popup6-action-button-font-family-option" id="wpappp-popup6-action-button-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup6-action-button-font-family-option') ); ?>"/>
                                        </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Action Button Text Color:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup6-action-button-text-color" class="color_picker" name="wpappp-popup6-action-button-text-color-option" value="<?php if(get_option('wpappp-popup6-action-button-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup6-action-button-text-color-option'));} ?>"></td>
                                    </tr>

                                    <tr>
                                        <th>Action Button Border Color:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup6-action-button-border-color" class="color_picker" name="wpappp-popup6-action-button-border-color-option" value="<?php if(get_option('wpappp-popup6-action-button-border-color-option') == '') { echo '#45b7af';}else { echo esc_attr(get_option('wpappp-popup6-action-button-border-color-option'));} ?>"></td>
                                    </tr>

                                    <tr>
                                        <th>Close Note Text:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup6-close-note-text" name="wpappp-popup6-closing-note-text-option" value="<?php if(get_option('wpappp-popup6-closing-note-text-option') == '') { echo 'Do not show this again';}else { echo esc_attr(get_option('wpappp-popup6-closing-note-text-option'));} ?>" placeholder="This is a Closing Note">
                                              <p>
                                        <input name="wpappp-popup6-closing-note-font-family-option" id="wpappp-popup6-closing-note-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup6-closing-note-font-family-option') ); ?>"/>
                                        </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Close Note Text Color:</th>
                                        <td class="up-content-options"><input type="text" id="wpappp-popup6-close-note-text-color" class="color_picker" name="wpappp-popup6-closing-note-text-color-option" value="<?php if(get_option('wpappp-popup4-security-note-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup4-security-note-text-color-option'));} ?>  "></td>
                                    </tr>

                                    <tr>
                                        <th>Overlay:</th>
                                        <td class="up-content-options">
                                            <select id="wpappp-popup6-overlay-setting" name="wpappp-popup6-overlay-option">
                                                <option value="0.6"<?php selected( get_option('wpappp-popup6-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                                <option value="0.1"<?php selected( get_option('wpappp-popup6-overlay-option'),'0.1'); ?>>10% opacity</option>
                                                <option value="0.2"<?php selected( get_option('wpappp-popup6-overlay-option'),'0.2'); ?>>20% opacity</option>
                                                <option value="0.3"<?php selected( get_option('wpappp-popup6-overlay-option'),'0.3'); ?>>30% opacity</option>
                                                <option value="0.4"<?php selected( get_option('wpappp-popup6-overlay-option'),'0.4'); ?>>40% opacity</option>
                                                <option value="0.5"<?php selected( get_option('wpappp-popup6-overlay-option'),'0.5'); ?>>50% opacity</option>
                                                <option value="0.7"<?php selected( get_option('wpappp-popup6-overlay-option'),'0.7'); ?>>70% opacity</option>
                                                <option value="0.8"<?php selected( get_option('wpappp-popup6-overlay-option'),'0.8'); ?>>80% opacity</option>
                                                <option value="0.9"<?php selected( get_option('wpappp-popup6-overlay-option'),'0.9'); ?>>90% opacity</option>
                                                <option value="1"<?php selected( get_option('wpappp-popup6-overlay-option'),'1'); ?>>100% opacity</option>
                                            </select>
                                        </td>
                                    </tr>

                                   </table>

                            </div>

<div id="wpappp-popup7"  style="display:none">
                                    <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>

    <div id="wpup-popup7-container">

        <div id="wpup-popup7-close-button"><a href="#"><img src="<?php echo plugins_url('images/popup7-img/close.png', __FILE__); ?>"></a></div>
        <h3 id="wpup-popup7-heading1">We are building a new fantastic website.</h3>
        <h3 id="wpup-popup7-heading2">Leave your e-mail and we let you know when we started.</h3>
        <div><input type="text" id="wpup-popup7-email-text" name="" value="" placeholder="Your Email">
            <input type="button" id="wpup-popup7-button" name="" value=" "></div>
            <p><a id="wpup-popup7-close-note">Close this popup</a></p>

        </div>

        <table id="wpappp-options-table" width="100%">

            <tr>
                <th style="width:50%">Width:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup7-width" class="wpappp-tf-width" name="wpappp-popup7-width-option" value="<?php if(get_option('wpappp-popup7-width-option') == '') { echo '700';}else { echo esc_attr(get_option('wpappp-popup7-width-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Background Color</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup7-background-color" name="wpappp-popup7-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup7-background-color-option') == '') { echo '#f2f2f2';}else { echo esc_attr(get_option('wpappp-popup7-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup7-heading-text" name="wpappp-popup7-heading-text-option" value="<?php if(get_option('wpappp-popup7-heading-text-option') == '') { echo 'We are building a new fantastic website';}else { echo esc_attr(get_option('wpappp-popup7-heading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup7-heading-text-color" name="wpappp-popup7-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup7-heading-text-color-option') == '') { echo '#a0a4a9';}else { echo esc_attr(get_option('wpappp-popup7-heading-text-color-option'));} ?>">

                                    <select id="wpappp-popup7-heading-font-size" name="wpappp-popup7-heading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup7-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                       <p>
                                        <input name="wpappp-popup7-heading-font-family-option" id="wpappp-popup7-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup7-heading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Sub Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup7-subheading-text" name="wpappp-popup7-subheading-text-option" value="<?php if(get_option('wpappp-popup7-subheading-text-option') == '') { echo 'Leave your e-mail and we let you know when we started.';}else { echo esc_attr(get_option('wpappp-popup7-subheading-text-option'));} ?>" placeholder="Enter Sub-Heading Text">

                                    <input type="text" id="wpappp-popup7-subheading-text-color" name="wpappp-popup7-subheading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup7-subheading-text-color-option') == '') { echo '#a0a4a9';}else { echo esc_attr(get_option('wpappp-popup7-subheading-text-color-option'));} ?>">

                                    <select id="wpappp-popup7-subheading-font-size" name="wpappp-popup7-subheading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup7-subheading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <p>
                                        <input name="wpappp-popup7-subheading-font-family-option" id="wpappp-popup7-subheading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup7-subheading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>E-mail Field Placeholder:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup7-email-text-placeholder" name="wpappp-popup7-email-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup7-email-textfield-placeholder-option') == '') { echo 'Enter your email to subscribe';}else { echo esc_attr(get_option('wpappp-popup7-email-textfield-placeholder-option'));} ?>" placeholder="Enter Your e-mail"><br/><span> Empty for Default</span></td>
                            </tr>

                            <tr>
                                <th>Text Field Border:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup7-text-field-border-color" class="color_picker" name="wpappp-popup7-email-textfield-border-color-option" value="<?php if(get_option('wpappp-popup7-email-textfield-border-color-option') == '') { echo '#a0a4a9';}else { echo esc_attr(get_option('wpappp-popup7-email-textfield-border-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Action Button Background:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup7-action-button-background-color" class="color_picker" name="wpappp-popup7-action-button-background-color-option" value="<?php if(get_option('wpappp-popup7-action-button-background-color-option') == '') { echo '#c90000';}else { echo esc_attr(get_option('wpappp-popup7-action-button-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Close Link Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup7-close-note-text" name="wpappp-popup7-closing-note-text-option" value="<?php if(get_option('wpappp-popup7-closing-note-text-option') == '') { echo 'Close this popup';}else { echo esc_attr(get_option('wpappp-popup7-closing-note-text-option'));} ?>" placeholder="Close Link Text">
                                     <p>
                                        <input name="wpappp-popup7-closing-note-font-family-option" id="wpappp-popup7-closing-note-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup7-closing-note-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Close Link Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup7-close-note-text-color" class="color_picker" name="wpappp-popup7-closing-note-text-color-option" value="<?php if(get_option('wpappp-popup7-closing-note-text-color-option') == '') { echo '#b5b5b5';}else { echo esc_attr(get_option('wpappp-popup7-closing-note-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Overlay:</th>
                                <td class="up-content-options">
                                    <select id="wpappp-popup7-overlay-setting" name="wpappp-popup7-overlay-option">
                                        <option value="0.6"<?php selected( get_option('wpappp-popup7-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                        <option value="0.1"<?php selected( get_option('wpappp-popup7-overlay-option'),'0.1'); ?>>10% opacity</option>
                                        <option value="0.2"<?php selected( get_option('wpappp-popup7-overlay-option'),'0.2'); ?>>20% opacity</option>
                                        <option value="0.3"<?php selected( get_option('wpappp-popup7-overlay-option'),'0.3'); ?>>30% opacity</option>
                                        <option value="0.4"<?php selected( get_option('wpappp-popup7-overlay-option'),'0.4'); ?>>40% opacity</option>
                                        <option value="0.5"<?php selected( get_option('wpappp-popup7-overlay-option'),'0.5'); ?>>50% opacity</option>
                                        <option value="0.7"<?php selected( get_option('wpappp-popup7-overlay-option'),'0.7'); ?>>70% opacity</option>
                                        <option value="0.8"<?php selected( get_option('wpappp-popup7-overlay-option'),'0.8'); ?>>80% opacity</option>
                                        <option value="0.9"<?php selected( get_option('wpappp-popup7-overlay-option'),'0.9'); ?>>90% opacity</option>
                                        <option value="1"<?php selected( get_option('wpappp-popup7-overlay-option'),'1'); ?>>100% opacity</option>
                                    </select>
                                </td>
                            </tr>

                         </table>

                    </div>
                    <div id="wpappp-popup8" style="display:none">
                                                        <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>

                        <div id="wpup-popup8-container">

                            <div id="wpup-popup8-close-button"><a href="#"><img src="<?php echo plugins_url('images/popup8-img/close.png', __FILE__); ?>"></a></div>

                            <div id="wpup-popup8-content">

                                <h2 id="wpup-popup8-heading1">NEWSLETTER</h2>
                                <h2 id="wpup-popup8-heading2">SIGN UP!</h2>
                                <p id="wpup-popup8-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ex fermentum, placerat sapien non, egestas dui. Donec dictum vehicula.</p>
                                <input type="text" id="wpup-popup8-email-text" name="" placeholder="Your Email">
                                <input type="button" id="wpup-popup8-button" name="" value="Subscribe !">
                                <p><a id="wpup-popup8-close-text">Close this popup</a></p>
                            </div>

                        </div>

                        <table id="wpappp-options-table" width="100%">

                            <tr>
                                <th style="width:50%">Width:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup8-width" class="wpappp-tf-width" name="wpappp-popup8-width-option" value="<?php if(get_option('wpappp-popup8-width-option') == '') { echo '500';}else { echo esc_attr(get_option('wpappp-popup8-width-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Background Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup8-background-color" name="wpappp-popup8-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup8-background-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup8-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup8-heading-text" name="wpappp-popup8-heading-text-option" value="<?php if(get_option('wpappp-popup8-heading-text-option') == '') { echo 'NEWSLETTER';}else { echo esc_attr(get_option('wpappp-popup8-heading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup8-heading-text-color" name="wpappp-popup8-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup8-heading-text-color-option') == '') { echo '#e80000';}else { echo esc_attr(get_option('wpappp-popup8-heading-text-color-option'));} ?>">

                                    <select id="wpappp-popup8-heading-font-size" name="wpappp-popup8-heading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup8-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                       <p>
                                        <input name="wpappp-popup8-heading-font-family-option" id="wpappp-popup8-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup8-heading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Sub Heading1:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup8-subheading-text" name="wpappp-popup8-subheading1-text-option" value="<?php if(get_option('wpappp-popup8-subheading1-text-option') == '') { echo 'SIGN UP!';}else { echo esc_attr(get_option('wpappp-popup8-subheading1-text-option'));} ?>" placeholder="Enter Sub-Heading1 Text">

                                    <input type="text" id="wpappp-popup8-subheading-text-color" name="wpappp-popup8-subheading1-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup8-subheading1-text-color-option') == '') { echo '#979ea3';}else { echo esc_attr(get_option('wpappp-popup8-subheading1-text-color-option'));} ?>">

                                    <select id="wpappp-popup8-subheading-font-size" name="wpappp-popup8-subheading1-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup8-subheading1-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                      <p>
                                        <input name="wpappp-popup8-subheading1-font-family-option" id="wpappp-popup8-subheading1-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup8-subheading1-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Sub Heading 2:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup8-subheading2-text" name="wpappp-popup8-subheading2-text-option" value="<?php if(get_option('wpappp-popup8-subheading2-text-option') == '') { echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ex fermentum, placerat sapien non, egestas dui. Donec dictum vehicula';}else { echo esc_attr(get_option('wpappp-popup8-subheading2-text-option'));} ?>" placeholder="Enter Sub-Heading Text">

                                    <input type="text" id="wpappp-popup8-subheading2-text-color" name="wpappp-popup8-subheading2-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup8-subheading2-text-color-option') == '') { echo '#979ea3';}else { echo esc_attr(get_option('wpappp-popup8-subheading2-text-color-option'));} ?>">

                                    <select id="wpappp-popup8-subheading2-font-size" name="wpappp-popup8-subheading2-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup8-subheading2-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                    <p>
                                        <input name="wpappp-popup8-subheading2-font-family-option" id="wpappp-popup8-subheading2-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup8-subheading2-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>E-mail Field Placeholder:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup8-email-text-placeholder" name="wpappp-popup8-email-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup8-email-textfield-placeholder-option') == '') { echo 'Your Email';}else { echo esc_attr(get_option('wpappp-popup8-email-textfield-placeholder-option'));} ?>" placeholder="Enter Your e-mail"><br/><span> Empty for Default</span></td>
                            </tr>

                            <tr>
                                <th>Action Button Background:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup8-action-button-background-color" class="color_picker" name="wpappp-popup8-action-button-background-color-option" value="<?php if(get_option('wpappp-popup8-action-button-background-color-option') == '') { echo '#e80000';}else { echo esc_attr(get_option('wpappp-popup8-action-button-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Action Button Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup8-action-button-text" name="wpappp-popup8-action-button-text-option" value="<?php if(get_option('wpappp-popup8-action-button-text-option') == '') { echo 'Subscribe!';}else { echo esc_attr(get_option('wpappp-popup8-action-button-text-option'));} ?>" placeholder="Enter Your Text">

                                       <p>
                                        <input name="wpappp-popup8-action-button-font-family-option" id="wpappp-popup8-action-button-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup8-action-button-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Action Button Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup8-action-button-text-color" class="color_picker" name="wpappp-popup8-action-button-text-color-option" value="<?php if(get_option('wpappp-popup8-action-button-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup8-action-button-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Close link Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup8-close-note-text" name="wpappp-popup8-closing-note-text-option" value="<?php if(get_option('wpappp-popup8-closing-note-text-option') == '') { echo 'Close this popup';}else { echo esc_attr(get_option('wpappp-popup8-closing-note-text-option'));} ?>" placeholder="Close Link Text">

                                         <p>
                                        <input name="wpappp-popup8-closing-note-font-family-option" id="wpappp-popup8-closing-note-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup8-closing-note-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Close link Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup8-close-note-text-color" class="color_picker" name="wpappp-popup8-closing-note-text-color-option" value="<?php if(get_option('wpappp-popup8-closing-note-text-color-option') == '') { echo '#979ea3';}else { echo esc_attr(get_option('wpappp-popup8-closing-note-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Overlay:</th>
                                <td class="up-content-options">
                                    <select id="wpappp-popup8-overlay-setting" name="wpappp-popup8-overlay-option">
                                        <option value="0.6"<?php selected( get_option('wpappp-popup8-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                        <option value="0.1"<?php selected( get_option('wpappp-popup8-overlay-option'),'0.1'); ?>>10% opacity</option>
                                        <option value="0.2"<?php selected( get_option('wpappp-popup8-overlay-option'),'0.2'); ?>>20% opacity</option>
                                        <option value="0.3"<?php selected( get_option('wpappp-popup8-overlay-option'),'0.3'); ?>>30% opacity</option>
                                        <option value="0.4"<?php selected( get_option('wpappp-popup8-overlay-option'),'0.4'); ?>>40% opacity</option>
                                        <option value="0.5"<?php selected( get_option('wpappp-popup8-overlay-option'),'0.5'); ?>>50% opacity</option>
                                        <option value="0.7"<?php selected( get_option('wpappp-popup8-overlay-option'),'0.7'); ?>>70% opacity</option>
                                        <option value="0.8"<?php selected( get_option('wpappp-popup8-overlay-option'),'0.8'); ?>>80% opacity</option>
                                        <option value="0.9"<?php selected( get_option('wpappp-popup8-overlay-option'),'0.9'); ?>>90% opacity</option>
                                        <option value="1"<?php selected( get_option('wpappp-popup8-overlay-option'),'1'); ?>>100% opacity</option>
                                    </select>
                                </td>
                            </tr>

                           </table>

                    </div>
                    <div id="wpappp-popup9"  style="display:none">
                                                        <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>

                        <div id="wpup-popup9-container">

                            <div id="wpup-popup9-close-button"><a href="#"><img src="<?php echo plugins_url('images/popup9-img/close.png', __FILE__); ?>"></a></div>

                            <div id="wpup-popup9-top-content">

                                <h1 id="wpup-popup9-heading1">GET IT NOW! Increase more than 700% of Email Subscribers!</h1>

                            </div>

                            <div id="wpup-popup9-middle-content">

                                <p id="wpup-popup9-main-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ex fermentum, placerat sapien non, egestas dui.</p>

                                <input type="text" id="wpup-popup9-email-text" name="" placeholder="Your E-mail">
                                <input type="button" id="wpup-popup9-button" name="" value="SUBSCRIBE">

                                <div id="wpup-popup9-security-note">

                                    <img src="<?php echo plugins_url('images/popup9-img/locker.png', __FILE__); ?>" style="margin-bottom: -3px;">
                                    <span id="wpup-popup9-privacy-text">Privacy Policy. This information will never be shared.</span>
                                    <p><a href="#" id="wpup-popup9-close-text1">No Thanks, dont show this window again</a></p>

                                </div>

                            </div>

                        </div>

                        <table id="wpappp-options-table" width="100%">

                            <tr>
                                <th style="width:50%">Width:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup9-width" class="wpappp-tf-width" name="wpappp-popup9-width-option" value="<?php if(get_option('wpappp-popup9-width-option') == '') { echo '700';}else { echo esc_attr(get_option('wpappp-popup9-width-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Background Color Top:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup9-background-color-top" name="wpappp-popup9-background-color-top-option" class="color_picker" value="<?php if(get_option('wpappp-popup9-background-color-top-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup9-background-color-top-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup9-heading-text" name="wpappp-popup9-heading-text-option" value="<?php if(get_option('wpappp-popup9-heading-text-option') == '') { echo 'GET IT NOW! Increase more than 700% of Email Subscribers!';}else { echo esc_attr(get_option('wpappp-popup9-heading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup9-heading-text-color" name="wpappp-popup9-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup9-heading-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup9-heading-text-color-option'));} ?>">

                                    <select id="wpappp-popup9-heading-font-size" name="wpappp-popup9-heading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup9-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                        <p>
                                        <input name="wpappp-popup9-heading-font-family-option" id="wpappp-popup9-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup9-heading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Seperator Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup9-seperator-color" class="color_picker" name="wpappp-popup9-seperator-color-option" value="<?php if(get_option('wpappp-popup9-seperator-color-option') == '') { echo '#e0e0e0';}else { echo esc_attr(get_option('wpappp-popup9-seperator-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Background Color Bottom:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup9-background-color-bottom" name="wpappp-popup9-background-color-bottom-option" class="color_picker" value="<?php if(get_option('wpappp-popup9-background-color-bottom-option') == '') { echo '#d4d4d4';}else { echo esc_attr(get_option('wpappp-popup9-background-color-bottom-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Sub Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup9-subheading-text" name="wpappp-popup9-subheading-text-option" value="<?php if(get_option('wpappp-popup9-subheading-text-option') == '') { echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ex fermentum, placerat sapien non, egestas dui.';}else { echo esc_attr(get_option('wpappp-popup9-subheading-text-option'));} ?>" placeholder="Enter Sub-Heading Text">

                                    <input type="text" id="wpappp-popup9-subheading-text-color" name="wpappp-popup9-subheading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup9-subheading-text-color-option') == '') { echo '#969696';}else { echo esc_attr(get_option('wpappp-popup9-subheading-text-color-option'));} ?>">

                                    <select id="wpappp-popup9-subheading-font-size" name="wpappp-popup9-subheading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup9-subheading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                     <p>
                                        <input name="wpappp-popup9-subheading-font-family-option" id="wpappp-popup9-subheading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup9-subheading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>E-mail Field Placeholder:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup9-email-text-placeholder" name="wpappp-popup9-email-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup9-email-textfield-placeholder-option') == '') { echo 'Enter Your Email to sucbscribe';}else { echo esc_attr(get_option('wpappp-popup9-email-textfield-placeholder-option'));} ?>" placeholder="Enter Your e-mail"><br/><span> Empty for Default</span></td>
                            </tr>

                            <tr>
                                <th>Action Button Background:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup9-action-button-background-color" class="color_picker" name="wpappp-popup9-action-button-background-color-option" value="<?php if(get_option('wpappp-popup9-action-button-background-color-option') == '') { echo '#ef0000';}else { echo esc_attr(get_option('wpappp-popup9-action-button-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Action Button Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup9-action-button-text" name="wpappp-popup9-action-button-text-option" value="<?php if(get_option('wpappp-popup9-action-button-text-option') == '') { echo 'Subscribe';}else { echo esc_attr(get_option('wpappp-popup9-action-button-text-option'));} ?>" placeholder="Enter Your Text">
                                      <p>
                                        <input name="wpappp-popup9-action-button-font-family-option" id="wpappp-popup9-action-button-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup9-action-button-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Action Button Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup9-action-button-text-color" class="color_picker" name="wpappp-popup9-action-button-text-color-option" value="<?php if(get_option('wpappp-popup9-action-button-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup9-action-button-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Privacy Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup9-privacy-text" name="wpappp-popup9-privacy-note-text-option" value="<?php if(get_option('wpappp-popup9-privacy-note-text-option') == '') { echo 'Privacy Policy. This information will never be shared.';}else { echo esc_attr(get_option('wpappp-popup9-privacy-note-text-option'));} ?>" placeholder="Enter Privacy Text">
                                      <p>
                                        <input name="wpappp-popup9-privacy-note-font-family-option" id="wpappp-popup9-privacy-note-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup9-privacy-note-font-family-option') ); ?>"/>
                                        </p>

                                </td>
                            </tr>

                            <tr>
                                <th>Privacy Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup9-privacy-text-color" class="color_picker" name="wpappp-popup9-privacy-note-text-color-option" value="<?php if(get_option('wpappp-popup9-privacy-note-text-color-option') == '') { echo '#969696';}else { echo esc_attr(get_option('wpappp-popup9-privacy-note-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Close link Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup9-close-note-text" name="wpappp-popup9-closing-note-text-option" value="<?php if(get_option('wpappp-popup9-closing-note-text-option') == '') { echo 'No Thanks, dont show this window again';}else { echo esc_attr(get_option('wpappp-popup9-closing-note-text-option'));} ?>" placeholder="Close Link Text">
                                      <p>
                                        <input name="wpappp-popup9-closing-note-font-family-option" id="wpappp-popup9-closing-note-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup9-closing-note-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Close link Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup9-close-note-text-color" class="color_picker" name="wpappp-popup9-closing-note-text-color-option" value="<?php if(get_option('wpappp-popup9-closing-note-text-color-option') == '') { echo '#969696';}else { echo esc_attr(get_option('wpappp-popup9-closing-note-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Overlay:</th>
                                <td class="up-content-options">
                                    <select id="wpappp-popup9-overlay-setting" name="wpappp-popup9-overlay-option">
                                        <option value="0.6"<?php selected( get_option('wpappp-popup9-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                        <option value="0.1"<?php selected( get_option('wpappp-popup9-overlay-option'),'0.1'); ?>>10% opacity</option>
                                        <option value="0.2"<?php selected( get_option('wpappp-popup9-overlay-option'),'0.2'); ?>>20% opacity</option>
                                        <option value="0.3"<?php selected( get_option('wpappp-popup9-overlay-option'),'0.3'); ?>>30% opacity</option>
                                        <option value="0.4"<?php selected( get_option('wpappp-popup9-overlay-option'),'0.4'); ?>>40% opacity</option>
                                        <option value="0.5"<?php selected( get_option('wpappp-popup9-overlay-option'),'0.5'); ?>>50% opacity</option>
                                        <option value="0.7"<?php selected( get_option('wpappp-popup9-overlay-option'),'0.7'); ?>>70% opacity</option>
                                        <option value="0.8"<?php selected( get_option('wpappp-popup9-overlay-option'),'0.8'); ?>>80% opacity</option>
                                        <option value="0.9"<?php selected( get_option('wpappp-popup9-overlay-option'),'0.9'); ?>>90% opacity</option>
                                        <option value="1"<?php selected( get_option('wpappp-popup9-overlay-option'),'1'); ?>>100% opacity</option>
                                    </select>
                                </td>
                            </tr>

                         </table>

                    </div>
                    <div id="wpappp-popup10" style="display:none">
                                                        <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>

                        <div id="wpup-popup10-container">

                            <div id="wpup-popup10-top-content">

                                <div id="wpup-popup10-close-button"><a href="#"><img src="<?php echo plugins_url('images/popup10-img/close_1d.png', __FILE__); ?>"></a></div>
                                <h3 id="wpup-popup10-heading1">Do you want to increase your Subscribers up to 700% ?</h3>

                            </div>

                            <div id="wpup-popup10-middle-content">

                                <img src="<?php echo plugins_url('images/popup10-img/info.png', __FILE__); ?>" id="wpup-popup10-info-image" height="139px" width="139px">
                                <p id="wpup-popup10-main-text">Sed ut perspiciatis unde omnis iste atus error sit voluptatem accusantium doloremque laudantium, totam rem</p>
                                <input type="text" id="wpup-popup10-email-text" class="wpappp_subscriber_email_submit wpappp-popup10-border-color" name="wpappp_subscriber_email" value="" placeholder=" Enter your email to subscribe!">
                                <input type="button" id="wpup-popup10-button1" name="" value="YES, I want to get more subscribers"> <br/>
                                <p><a id="wpup-popup10-button2" name="">No, thank you, I m good to go</a></p>

                            </div>

                        </div>

                        <table id="wpappp-options-table" width="100%">

                            <tr>
                                <th style="width:50%">Width:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup10-width" class="wpappp-tf-width" name="wpappp-popup10-width-option" value="<?php if(get_option('wpappp-popup10-width-option') == '') { echo '600';}else { echo esc_attr(get_option('wpappp-popup10-width-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Background Color Top:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup10-background-color-top" name="wpappp-popup10-background-color-top-option" class="color_picker" value="<?php if(get_option('wpappp-popup10-background-color-top-option') == '') { echo '#68d1e6';}else { echo esc_attr(get_option('wpappp-popup10-background-color-top-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup10-heading-text" name="wpappp-popup10-heading-text-option" value="<?php if(get_option('wpappp-popup10-heading-text-option') == '') { echo 'Do you want to increase your Subscribers up to 700% ?';}else { echo esc_attr(get_option('wpappp-popup10-heading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup10-heading-text-color" name="wpappp-popup10-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup10-heading-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup10-heading-text-color-option'));} ?>">

                                    <select id="wpappp-popup10-heading-font-size" name="wpappp-popup10-heading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup10-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                     <p>
                                        <input name="wpappp-popup10-heading-font-family-option" id="wpappp-popup10-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup10-heading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Upload Image:</th>
                                <td>
                                    <div>
                                        <input type="hidden" id="wpappp-popup10-default-background-image" value="<?php echo plugins_url('images/defaultpp10bg.png', __FILE__); ?>" />
                                        <img src="<?php if(get_option('wpappp-popup10-upload-image-option') == '') { echo plugins_url('images/defaultpp10bg.png', __FILE__);}else { echo esc_attr(get_option('wpappp-popup10-upload-image-option'));} ?>" width="200px" id="wpappp-popup10-url-image" class="wpappp-popup10-image-url" />

                                        <input type="hidden" name="wpappp-popup10-upload-image-option" id="wpappp-popup10-image-url" class="regular-text" value="<?php if(get_option('wpappp-popup10-upload-image-option') == '') { echo plugins_url('images/defaultpp10bg.png', __FILE__);}else { echo esc_attr(get_option('wpappp-popup10-upload-image-option'));} ?>">
                                        <br/>
                                        <input type="button" name="upload-btn" id="wpappp-popup10-upload-btn" class="button-secondary wpappp_image_uploader" value="Upload Image">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>Background Color Bottom:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup10-background-color-bottom" name="wpappp-popup10-background-color-bottom-option" class="color_picker" value="<?php if(get_option('wpappp-popup10-background-color-bottom-option') == '') { echo '#f8f8f8';}else { echo esc_attr(get_option('wpappp-popup10-background-color-bottom-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Sub Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup10-subheading-text" name="wpappp-popup10-subheading-text-option" value="<?php if(get_option('wpappp-popup10-subheading-text-option') == '') { echo 'Sed ut perspiciatis unde omnis iste atus error sit voluptatem accusantium doloremque laudantium, totam rem';}else { echo esc_attr(get_option('wpappp-popup10-subheading-text-option'));} ?>" placeholder="Enter Sub-Heading Text">

                                    <input type="text" id="wpappp-popup10-subheading-text-color" name="wpappp-popup10-subheading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup10-subheading-text-color-option') == '') { echo '#d3d3d3';}else { echo esc_attr(get_option('wpappp-popup10-subheading-text-color-option'));} ?>">

                                    <select id="wpappp-popup10-subheading-font-size" name="wpappp-popup10-subheading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup10-subheading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                     <p>
                                        <input name="wpappp-popup10-subheading-font-family-option" id="wpappp-popup10-subheading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup10-subheading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Action Button Background:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup10-action-button-background-color" class="color_picker" name="wpappp-popup10-action-button-background-color-option" value="<?php if(get_option('wpappp-popup10-action-button-background-color-option') == '') { echo '#f98531';}else { echo esc_attr(get_option('wpappp-popup10-action-button-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Action Button Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup10-action-button-text" name="wpappp-popup10-action-button-text-option" value="<?php if(get_option('wpappp-popup10-action-button-text-option') == '') { echo 'YES, Sucbscribe me now!';}else { echo esc_attr(get_option('wpappp-popup10-action-button-text-option'));} ?>" placeholder="Enter Your Text">
                                    <p>
                                         <input name="wpappp-popup10-action-button-font-family-option" id="wpappp-popup10-action-button-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup10-action-button-font-family-option') ); ?>"/>
                                        </p>

                                </td>
                            </tr>

                            <tr>
                                <th>Action Button Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup10-action-button-text-color" class="color_picker" name="wpappp-popup10-action-button-text-color-option" value="<?php if(get_option('wpappp-popup10-action-button-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup10-action-button-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Close link Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup10-close-note-text" name="wpappp-popup10-closing-note-text-option" value="<?php if(get_option('wpappp-popup10-closing-note-text-option') == '') { echo 'No, thank you, I m good to go';}else { echo esc_attr(get_option('wpappp-popup10-closing-note-text-option'));} ?>" placeholder="Close Link Text">
                                     <p>
                                         <input name="wpappp-popup10-closing-note-font-family-option" id="wpappp-popup10-closing-note-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup10-closing-note-font-family-option') ); ?>"/>
                                        </p>

                                </td>
                            </tr>

                            <tr>
                                <th>Close link Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup10-close-note-text-color" class="color_picker" name="wpappp-popup10-closing-note-text-color-option" value="<?php if(get_option('wpappp-popup10-closing-note-text-color-option') == '') { echo '#d3d3d3';}else { echo esc_attr(get_option('wpappp-popup10-closing-note-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Overlay:</th>
                                <td class="up-content-options">
                                    <select id="wpappp-popup10-overlay-setting" name="wpappp-popup10-overlay-option">
                                        <option value="0.6"<?php selected( get_option('wpappp-popup10-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                        <option value="0.1"<?php selected( get_option('wpappp-popup10-overlay-option'),'0.1'); ?>>10% opacity</option>
                                        <option value="0.2"<?php selected( get_option('wpappp-popup10-overlay-option'),'0.2'); ?>>20% opacity</option>
                                        <option value="0.3"<?php selected( get_option('wpappp-popup10-overlay-option'),'0.3'); ?>>30% opacity</option>
                                        <option value="0.4"<?php selected( get_option('wpappp-popup10-overlay-option'),'0.4'); ?>>40% opacity</option>
                                        <option value="0.5"<?php selected( get_option('wpappp-popup10-overlay-option'),'0.5'); ?>>50% opacity</option>
                                        <option value="0.7"<?php selected( get_option('wpappp-popup10-overlay-option'),'0.7'); ?>>70% opacity</option>
                                        <option value="0.8"<?php selected( get_option('wpappp-popup10-overlay-option'),'0.8'); ?>>80% opacity</option>
                                        <option value="0.9"<?php selected( get_option('wpappp-popup10-overlay-option'),'0.9'); ?>>90% opacity</option>
                                        <option value="1"<?php selected( get_option('wpappp-popup10-overlay-option'),'1'); ?>>100% opacity</option>
                                    </select>
                                </td>
                            </tr>

                          </table>

                    </div>
                    <div id="wpappp-popup11" style="display:none">
                                                        <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>

                        <div id="wpup-popup11-container">

                            <div id="wpup-popup11-content">

                                <div id="wpup-popup11-close-button"><a href="#"><img src="<?php echo plugins_url('images/popup11-img/close.png', __FILE__); ?>" width="50px" height="50px"></a></div>

                                <h1 id="wpup-popup11-heading">Hey You!</h1>
                                <p id="wpup-popup11-main-text">Subscribe and get exclusive offer! <br/> Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                <input type="text" id="wpup-popup11-email-text" name="" placeholder="Your e-mail"> <br/>
                                <input type="button" id="wpup-popup11-button" name="" value="Send now!">
                                <p id="wpup-popup11-close-text1"><a id="wpup-popup11-close-text">No Than your, I don't need it.</a></p>

                            </div>

                        </div>

                        <table id="wpappp-options-table" width="100%">

                            <tr>
                                <th style="width:50%">Width:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup11-width" class="wpappp-tf-width" name="wpappp-popup11-width-option" value="<?php if(get_option('wpappp-popup11-width-option') == '') { echo '700';}else { echo esc_attr(get_option('wpappp-popup11-width-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Background Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup11-background-color" name="wpappp-popup11-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup11-background-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup11-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup11-heading-text" name="wpappp-popup11-heading-text-option" value="<?php if(get_option('wpappp-popup11-heading-text-option') == '') { echo 'Hey You!';}else { echo esc_attr(get_option('wpappp-popup11-heading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup11-heading-text-color" name="wpappp-popup11-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup11-heading-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup11-heading-text-color-option'));} ?>">

                                    <select id="wpappp-popup11-heading-font-size" name="wpappp-popup11-heading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup11-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                       <p>
                                         <input name="wpappp-popup11-heading-font-family-option" id="wpappp-popup11-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup11-heading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Sub-Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup11-subheading-text" name="wpappp-popup11-subheading-text-option" value="<?php if(get_option('wpappp-popup11-subheading-text-option') == '') { echo 'Subscribe and get exclusive offer! Lorem ipsum dolor sit amet, consectetur adipiscing elit';}else { echo esc_attr(get_option('wpappp-popup11-subheading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup11-subheading-text-color" name="wpappp-popup11-subheading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup11-subheading-text-color-option') == '') { echo '#2b2b2b';}else { echo esc_attr(get_option('wpappp-popup11-subheading-text-color-option'));} ?><?php echo esc_attr(get_option('wpappp-popup11-subheading-text-color-option') ); ?>">

                                    <select id="wpappp-popup11-subheading-font-size" name="wpappp-popup11-subheading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup11-subheading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                      <p>
                                         <input name="wpappp-popup11-subheading-font-family-option" id="wpappp-popup11-subheading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup11-subheading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>E-mail Field Placeholder:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup11-email-text-placeholder" name="wpappp-popup11-email-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup11-email-textfield-placeholder-option') == '') { echo 'Your e-mail';}else { echo esc_attr(get_option('wpappp-popup11-email-textfield-placeholder-option'));} ?>" placeholder="Enter Your e-mail"><br/><span> Empty for Default</span></td>
                            </tr>

                            <tr>
                                <th>Action Button Background:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup11-action-button-background-color" class="color_picker" name="wpappp-popup11-action-button-background-color-option" value="<?php if(get_option('wpappp-popup11-action-button-background-color-option') == '') { echo '#2b2b2b';}else { echo esc_attr(get_option('wpappp-popup11-action-button-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Action Button Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup11-action-button-text" name="wpappp-popup11-action-button-text-option" value="<?php if(get_option('wpappp-popup11-action-button-text-option') == '') { echo 'Subscribe Me!';}else { echo esc_attr(get_option('wpappp-popup11-action-button-text-option'));} ?>" placeholder="Action Button Text">
                                     <p>
                                         <input name="wpappp-popup11-action-button-font-family-option" id="wpappp-popup11-action-button-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup11-action-button-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Action Button Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup11-action-button-text-color" class="color_picker" name="wpappp-popup11-action-button-text-color-option" value="<?php if(get_option('wpappp-popup11-action-button-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup11-action-button-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Close Note Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup11-close-note-text" name="wpappp-popup11-closing-note-text-option" value="<?php if(get_option('wpappp-popup11-closing-note-text-option') == '') { echo 'No Thank your, I do not need it.';}else { echo esc_attr(get_option('wpappp-popup11-closing-note-text-option'));} ?>" placeholder="This is a Closing Note">
                                     <p>
                                         <input name="wpappp-popup11-closing-note-font-family-option" id="wpappp-popup11-closing-note-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup11-closing-note-font-family-option') ); ?>"/>
                                        </p>

                                </td>
                            </tr>

                            <tr>
                                <th>Close Note Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup11-close-note-text-color" class="color_picker" name="wpappp-popup11-closing-note-text-color-option" value="<?php if(get_option('wpappp-popup11-closing-note-text-color-option') == '') { echo '#d3d3d3';}else { echo esc_attr(get_option('wpappp-popup11-closing-note-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Overlay:</th>
                                <td class="up-content-options">
                                    <select id="wpappp-popup11-overlay-setting" name="wpappp-popup10-overlay-option">
                                        <option value="0.6"<?php selected( get_option('wpappp-popup11-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                        <option value="0.1"<?php selected( get_option('wpappp-popup11-overlay-option'),'0.1'); ?>>10% opacity</option>
                                        <option value="0.2"<?php selected( get_option('wpappp-popup11-overlay-option'),'0.2'); ?>>20% opacity</option>
                                        <option value="0.3"<?php selected( get_option('wpappp-popup11-overlay-option'),'0.3'); ?>>30% opacity</option>
                                        <option value="0.4"<?php selected( get_option('wpappp-popup11-overlay-option'),'0.4'); ?>>40% opacity</option>
                                        <option value="0.5"<?php selected( get_option('wpappp-popup11-overlay-option'),'0.5'); ?>>50% opacity</option>
                                        <option value="0.7"<?php selected( get_option('wpappp-popup11-overlay-option'),'0.7'); ?>>70% opacity</option>
                                        <option value="0.8"<?php selected( get_option('wpappp-popup11-overlay-option'),'0.8'); ?>>80% opacity</option>
                                        <option value="0.9"<?php selected( get_option('wpappp-popup11-overlay-option'),'0.9'); ?>>90% opacity</option>
                                        <option value="1"<?php selected( get_option('wpappp-popup11-overlay-option'),'1'); ?>>100% opacity</option>
                                    </select>
                                </td>
                            </tr>

                         </table>

                    </div>
                    <div id="wpappp-popup12" style="display:none">
                                                        <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>

                        <div id="wpup-popup12-container">

                            <div id="wpup-popup12-close-button"><a href="#"><img src="<?php echo plugins_url('images/popup12-img/close.png', __FILE__); ?>"></a></div>

                            <h1 id="wpup-popup12-heading1">SUIT UP!</h1>
                            <h3 id="wpup-popup12-heading2">GET YOUR 25% DISCOUNT!*</h3>
                            <input type="text" id="wpup-popup12-email-text" name="" placeholder="Your e-mail address"> <br/>
                            <input type="button" id="wpup-popup12-button" name="" value="Give me a discount">
                            <p id="wpup-popup12-terms">*apply only to max 3 suites</p>

                        </div>

                        <table id="wpappp-options-table" width="100%">

                            <tr>
                                <th style="width:50%">Width:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup12-width" class="wpappp-tf-width" name="wpappp-popup12-width-option" value="<?php if(get_option('wpappp-popup12-width-option') == '') { echo '800';}else { echo esc_attr(get_option('wpappp-popup12-width-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Upload Image:</th>
                                <td>
                                    <div>
                                        <input type="hidden" id="wpappp-popup12-default-background-image" value="<?php echo plugins_url('images/defaultpp12bg.png', __FILE__); ?>" />
                                        <img src="<?php if(get_option('wpappp-popup12-background-image-option') == '') { echo plugins_url('images/defaultpp12bg.png', __FILE__);}else { echo esc_attr(get_option('wpappp-popup12-background-image-option'));} ?>" width="200px" id="wpappp-popup12-url-image" class="wpappp-popup12-image-url" />

                                        <input type="hidden" name="wpappp-popup12-background-image-option" id="wpappp-popup12-image-url" class="regular-text" value="<?php if(get_option('wpappp-popup12-background-image-option') == '') { echo plugins_url('images/defaultpp12bg.png', __FILE__);}else { echo esc_attr(get_option('wpappp-popup12-background-image-option'));} ?>">

                                        <br/>
                                        <input type="button" name="upload-btn" id="wpappp-popup12-upload-btn" class="button-secondary wpappp_image_uploader" value="Upload Image">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>Background Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup12-background-color" name="wpappp-popup12-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup12-background-color-option') == '') { echo '';}else { echo esc_attr(get_option('wpappp-popup12-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup12-heading-text" name="wpappp-popup12-heading-text-option" value="<?php if(get_option('wpappp-popup12-heading-text-option') == '') { echo 'SUIT UP!';}else { echo esc_attr(get_option('wpappp-popup12-heading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup12-heading-text-color" name="wpappp-popup12-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup12-heading-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup12-heading-text-color-option'));} ?>">

                                    <select id="wpappp-popup12-heading-font-size" name="wpappp-popup12-heading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup12-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                     <p>
                                         <input name="wpappp-popup12-heading-font-family-option" id="wpappp-popup12-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup12-heading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Sub-Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup12-subheading-text" name="wpappp-popup12-subheading-text-option" value="<?php if(get_option('wpappp-popup12-subheading-text-option') == '') { echo 'GET YOUR 25% DISCOUNT!*';}else { echo esc_attr(get_option('wpappp-popup12-subheading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup12-subheading-text-color" name="wpappp-popup12-subheading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup12-subheading-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup12-subheading-text-color-option'));} ?><?php echo esc_attr(get_option('wpappp-popup12-subheading-text-color-option') ); ?>">

                                    <select id="wpappp-popup12-subheading-font-size" name="wpappp-popup12-subheading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup12-subheading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                      <p>
                                         <input name="wpappp-popup12-subheading-font-family-option" id="wpappp-popup12-subheading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup12-subheading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>E-mail Field Placeholder:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup12-email-text-placeholder" name="wpappp-popup12-email-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup12-email-textfield-placeholder-option') == '') { echo 'Your e-mail address';}else { echo esc_attr(get_option('wpappp-popup12-email-textfield-placeholder-option'));} ?>" placeholder="Enter Your e-mail"><br/><span> Empty for Default</span></td>
                            </tr>

                            <tr>
                                <th>Action Button Background:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup12-action-button-background-color" class="color_picker" name="wpappp-popup12-action-button-background-color-option" value="<?php if(get_option('wpappp-popup12-action-button-background-color-option') == '') { echo '#f2ce27';}else { echo esc_attr(get_option('wpappp-popup12-action-button-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Action Button Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup12-action-button-text" name="wpappp-popup12-action-button-text-option" value="<?php if(get_option('wpappp-popup12-action-button-text-option') == '') { echo 'Give me discount!';}else { echo esc_attr(get_option('wpappp-popup12-action-button-text-option'));} ?>" placeholder="Action Button Text">
                                    <p>
                                         <input name="wpappp-popup12-action-button-font-family-option" id="wpappp-popup12-action-button-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup12-action-button-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Action Button Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup12-action-button-text-color" class="color_picker" name="wpappp-popup12-action-button-text-color-option" value="<?php if(get_option('wpappp-popup12-action-button-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup12-action-button-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Terms Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup12-terms-text" name="wpappp-popup12-terms-text-option" value="<?php if(get_option('wpappp-popup12-terms-text-option') == '') { echo '*apply only to max 3 suites';}else { echo esc_attr(get_option('wpappp-popup12-terms-text-option'));} ?>" placeholder="Enter Your Terms">
                                    <p>
                                         <input name="wpappp-popup12-terms-font-family-option" id="wpappp-popup12-terms-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup12-terms-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Terms Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup12-terms-text-color" class="color_picker" name="wpappp-popup12-terms-text-color-option" value="<?php if(get_option('wpappp-popup12-terms-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup12-terms-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Overlay:</th>
                                <td class="up-content-options">
                                    <select id="wpappp-popup12-overlay-setting" name="wpappp-popup10-overlay-option">
                                        <option value="0.6"<?php selected( get_option('wpappp-popup12-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                        <option value="0.1"<?php selected( get_option('wpappp-popup12-overlay-option'),'0.1'); ?>>10% opacity</option>
                                        <option value="0.2"<?php selected( get_option('wpappp-popup12-overlay-option'),'0.2'); ?>>20% opacity</option>
                                        <option value="0.3"<?php selected( get_option('wpappp-popup12-overlay-option'),'0.3'); ?>>30% opacity</option>
                                        <option value="0.4"<?php selected( get_option('wpappp-popup12-overlay-option'),'0.4'); ?>>40% opacity</option>
                                        <option value="0.5"<?php selected( get_option('wpappp-popup12-overlay-option'),'0.5'); ?>>50% opacity</option>
                                        <option value="0.7"<?php selected( get_option('wpappp-popup12-overlay-option'),'0.7'); ?>>70% opacity</option>
                                        <option value="0.8"<?php selected( get_option('wpappp-popup12-overlay-option'),'0.8'); ?>>80% opacity</option>
                                        <option value="0.9"<?php selected( get_option('wpappp-popup12-overlay-option'),'0.9'); ?>>90% opacity</option>
                                        <option value="1"<?php selected( get_option('wpappp-popup12-overlay-option'),'1'); ?>>100% opacity</option>
                                    </select>
                                </td>
                            </tr>

                          </table>

                    </div>
                    <div id="wpappp-popup13" style="display:none">
                                                        <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>

                        <div id="wpup-popup13-container">

                            <div id="wpup-popup13-content">

                                <div id="wpup-popup13-left-content">

                                </div>

                                <div id="wpup-popup13-right-content">

                                    <div id="wpup-popup13-close-button"><a href="#"><img src="<?php echo plugins_url('images/popup13-img/close.png', __FILE__); ?>" height="28px" width="28px"></a></div>
                                    <h1 id="wpup-popup13-heading">Wanna try our next new stuff?</h1>
                                    <p id="wpup-popup13-main-text">Sign up to recieve the latest news from our store. Plus be the first to hear about new arrivals and our special promotions for loyal customers</p>
                                    <input type="text" id="wpup-popup13-email-text" name="" placeholder="Enter your e-mail address">
                                    <input type="button" id="wpup-popup13-button" name="" value="SUBMIT">

                                </div>

                            </div>

                        </div>

                        <table id="wpappp-options-table" width="100%">

                            <tr>
                                <th style="width:50%">Width:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup13-width" class="wpappp-tf-width" name="wpappp-popup13-width-option" value="<?php if(get_option('wpappp-popup13-width-option') == '') { echo '800';}else { echo esc_attr(get_option('wpappp-popup13-width-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Background Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup13-background-color" name="wpappp-popup13-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup13-background-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup13-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Background Image:</th>
                                <td>
                                    <div>
                                        <input type="hidden" id="wpappp-popup13-default-background-image" value="<?php echo plugins_url('images/defaultpp13bg.jpg', __FILE__); ?>" />
                                        <img src="<?php if(get_option('wpappp-popup13-background-image-option') == '') { echo plugins_url('images/defaultpp13bg.jpg', __FILE__);}else { echo esc_attr(get_option('wpappp-popup13-background-image-option'));} ?>" width="200px" id="wpappp-popup13-url-image" class="wpappp-popup13-image-url" />

                                        <input type="hidden" name="wpappp-popup13-background-image-option" id="wpappp-popup13-image-url" class="regular-text" value="<?php if(get_option('wpappp-popup13-background-image-option') == '') { echo plugins_url('images/defaultpp13bg.jpg', __FILE__);}else { echo esc_attr(get_option('wpappp-popup13-background-image-option'));} ?>">

                                        <br/>
                                        <input type="button" name="upload-btn" id="wpappp-popup13-upload-btn" class="button-secondary wpappp_image_uploader" value="Upload Image">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup13-heading-text" name="wpappp-popup13-heading-text-option" value="<?php if(get_option('wpappp-popup13-heading-text-option') == '') { echo 'Wanna try our next new stuff?';}else { echo esc_attr(get_option('wpappp-popup13-heading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup13-heading-text-color" name="wpappp-popup13-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup13-heading-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup13-heading-text-color-option'));} ?>">

                                    <select id="wpappp-popup13-heading-font-size" name="wpappp-popup13-heading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup13-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                     <p>
                                         <input name="wpappp-popup13-heading-font-family-option" id="wpappp-popup13-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup13-heading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Sub-Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup13-subheading-text" name="wpappp-popup13-subheading-text-option" value="<?php if(get_option('wpappp-popup13-subheading-text-option') == '') { echo 'Sign up to recieve the latest news from our store. Plus be the first to hear about new arrivals and our special promotions for loyal customers';}else { echo esc_attr(get_option('wpappp-popup13-subheading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup13-subheading-text-color" name="wpappp-popup13-subheading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup13-subheading-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup13-subheading-text-color-option'));} ?>">

                                    <select id="wpappp-popup13-subheading-font-size" name="wpappp-popup13-subheading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup13-subheading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                     <p>
                                         <input name="wpappp-popup13-subheading-font-family-option" id="wpappp-popup13-subheading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup13-subheading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>E-mail Field Placeholder:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup13-email-text-placeholder" name="wpappp-popup13-email-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup13-email-textfield-placeholder-option') == '') { echo 'Enter your e-mail address';}else { echo esc_attr(get_option('wpappp-popup13-email-textfield-placeholder-option'));} ?>" placeholder="Enter Your e-mail"><br/><span> Empty for Default</span></td>
                            </tr>

                            <tr>
                                <th>Action Button Background:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup13-action-button-background-color" class="color_picker" name="wpappp-popup13-action-button-background-color-option" value="<?php if(get_option('wpappp-popup13-action-button-background-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup13-action-button-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Action Button Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup13-action-button-text" name="wpappp-popup13-action-button-text-option" value="<?php if(get_option('wpappp-popup13-action-button-text-option') == '') { echo 'Submit';}else { echo esc_attr(get_option('wpappp-popup13-action-button-text-option'));} ?>" placeholder="Action Button Text">
                                     <p>
                                         <input name="wpappp-popup13-action-button-font-family-option" id="wpappp-popup13-action-button-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup13-action-button-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Action Button Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup13-action-button-text-color" class="color_picker" name="wpappp-popup13-action-button-text-color-option" value="<?php if(get_option('wpappp-popup13-action-button-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup13-action-button-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Overlay:</th>
                                <td class="up-content-options">
                                    <select id="wpappp-popup13-overlay-setting" name="wpappp-popup13-overlay-option">
                                        <option value="0.6"<?php selected( get_option('wpappp-popup13-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                        <option value="0.1"<?php selected( get_option('wpappp-popup13-overlay-option'),'0.1'); ?>>10% opacity</option>
                                        <option value="0.2"<?php selected( get_option('wpappp-popup13-overlay-option'),'0.2'); ?>>20% opacity</option>
                                        <option value="0.3"<?php selected( get_option('wpappp-popup13-overlay-option'),'0.3'); ?>>30% opacity</option>
                                        <option value="0.4"<?php selected( get_option('wpappp-popup13-overlay-option'),'0.4'); ?>>40% opacity</option>
                                        <option value="0.5"<?php selected( get_option('wpappp-popup13-overlay-option'),'0.5'); ?>>50% opacity</option>
                                        <option value="0.7"<?php selected( get_option('wpappp-popup13-overlay-option'),'0.7'); ?>>70% opacity</option>
                                        <option value="0.8"<?php selected( get_option('wpappp-popup13-overlay-option'),'0.8'); ?>>80% opacity</option>
                                        <option value="0.9"<?php selected( get_option('wpappp-popup13-overlay-option'),'0.9'); ?>>90% opacity</option>
                                        <option value="1"<?php selected( get_option('wpappp-popup13-overlay-option'),'1'); ?>>100% opacity</option>
                                    </select>
                                </td>
                            </tr>

                           </table>

                    </div>
                    <div id="wpappp-popup14" style="display:none">
                                                        <p style="
   width: 200%;
   font-size: 15px;font-weight: bold;
">This popup is for preview only, includes in premium version, <a href="https://www.arrowplugins.com/popup-plugin" target="_blank">Buy Premium</a></p>

                        <div id="wpup-popup14-container">

                            <div id="wpup-popup14-close-button"><a href="#"><img src="<?php echo plugins_url('images/popup14-img/close_1d.png', __FILE__); ?>" ></a></div>

                            <div id="wpup-popup14-header-image"></div>
                            <div id="wpup-popup14-top-content">

                                <h3 id="wpup-popup14-main-text-header">Subscribe to Newsletter</h3>
                                <p id="wpup-popup14-main-text-subheader">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas </p>

                            </div>

                            <div id="wpup-popup14-bottom-container">

                                <div class="wpup-popup14-inputs">

                                    <span class="fa fa-user"></span>
                                    <input placeholder="Your name " id="wpup-popup14-name-text">

                                </div>
                                <div class="wpup-popup14-inputs">
                                    <span class="fa fa-envelope"></span>
                                    <input placeholder="Your e-mail" id="wpup-popup14-email-text">
                                </div>

                                <button id="wpup-popup14-button" type="button"><span id="wpup-popup14-button-text">SUBSCRIBE  NOW</span><i style="margin-left: 10px;" class="fa fa-arrow-right"></i></button>
                            </div>

                            <div id="wpup-popup14-security-note">
                                <button id="wpup-popup14-button-lock"><i class="fa fa-lock"></i></button>
                                <span id="wpup-popup14-privacy-text" style="font-size: 11px; color: #ffffff;">We never share this data with 3rd part companies.</span>
                            </div>

                        </div>

                        <table id="wpappp-options-table" width="100%">

                            <tr>
                                <th style="width:50%">Width:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup14-width" class="wpappp-tf-width" name="wpappp-popup14-width-option" value="<?php if(get_option('wpappp-popup14-width-option') == '') { echo '400';}else { echo esc_attr(get_option('wpappp-popup14-width-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Container Background Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup14-container-background-color" name="wpappp-popup14-container-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup14-container-background-color-option') == '') { echo '#092a4e';}else { echo esc_attr(get_option('wpappp-popup14-container-background-color-option'));} ?>"></td>
                            </tr>

                            
<input type="hidden" name="wpappp-popup14-background-image-option" id="wpappp-popup14-image-url" class="regular-text" value="<?php if(get_option('wpappp-popup14-background-image-option') == '') { echo plugins_url('images/defaultpp14bg.png', __FILE__);}else { echo esc_attr(get_option('wpappp-popup14-background-image-option'));} ?>">
                            <tr>
                                <th>Sub-Container Background Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup14-subcontainer-background-color" name="wpappp-popup14-subcontainer-background-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup14-subcontainer-background-color-option') == '') { echo '#fecc00';}else { echo esc_attr(get_option('wpappp-popup14-subcontainer-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup14-heading-text" name="wpappp-popup14-heading-text-option" value="<?php if(get_option('wpappp-popup14-heading-text-option') == '') { echo 'Subscribe to Newsletter';}else { echo esc_attr(get_option('wpappp-popup14-heading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup14-heading-text-color" name="wpappp-popup14-heading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup14-heading-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup14-heading-text-color-option'));} ?>">

                                    <select id="wpappp-popup14-heading-font-size" name="wpappp-popup14-heading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup14-heading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                     <p>
                                         <input name="wpappp-popup14-heading-font-family-option" id="wpappp-popup14-heading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup14-heading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Sub-Heading:</th>
                                <td class="up-content-options">
                                    <input type="text" id="wpappp-popup14-subheading-text" name="wpappp-popup14-subheading-text-option" value="<?php if(get_option('wpappp-popup14-subheading-text-option') == '') { echo 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas';}else { echo esc_attr(get_option('wpappp-popup14-subheading-text-option'));} ?>" placeholder="Enter Heading Text">

                                    <input type="text" id="wpappp-popup14-subheading-text-color" name="wpappp-popup14-subheading-text-color-option" class="color_picker" value="<?php if(get_option('wpappp-popup14-subheading-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup14-subheading-text-color-option'));} ?>">

                                    <select id="wpappp-popup14-subheading-font-size" name="wpappp-popup14-subheading-font-size-option">
                                        <option>Font Size</option>
                                        <?php
                                        for ($i=12; $i < 73; $i++) { 
                                            ?>
                                            <option value="<?php echo $i;?>px"<?php selected( get_option('wpappp-popup14-subheading-font-size-option'), $i.'px'); ?> > <?php echo $i.'px'; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                     <p>
                                         <input name="wpappp-popup14-subheading-font-family-option" id="wpappp-popup14-subheading-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup14-subheading-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Name Field Placeholder:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup14-name-text-placeholder" name="wpappp-popup14-name-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup14-name-textfield-placeholder-option') == '') { echo 'Your name';}else { echo esc_attr(get_option('wpappp-popup14-name-textfield-placeholder-option'));} ?>" placeholder="Enter Your Name"><br/><span> Empty for Default</span></td>
                            </tr>

                            <tr>
                                <th>E-mail Field Placeholder:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup14-email-text-placeholder" name="wpappp-popup14-email-textfield-placeholder-option" value="<?php if(get_option('wpappp-popup14-email-textfield-placeholder-option') == '') { echo 'Your email';}else { echo esc_attr(get_option('wpappp-popup14-email-textfield-placeholder-option'));} ?>" placeholder="Enter Your e-mail"><br/><span> Empty for Default</span></td>
                            </tr>

                            <tr>
                                <th>Action Button Background:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup14-action-button-background-color" class="color_picker" name="wpappp-popup14-action-button-background-color-option" value="<?php if(get_option('wpappp-popup14-action-button-background-color-option') == '') { echo '#fecc00';}else { echo esc_attr(get_option('wpappp-popup14-action-button-background-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Action Button Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup14-action-button-text" name="wpappp-popup14-action-button-text-option" value="<?php if(get_option('wpappp-popup14-action-button-text-option') == '') { echo 'SUBSCRIBE NOW';}else { echo esc_attr(get_option('wpappp-popup14-action-button-text-option'));} ?>" placeholder="Action Button Text">
                                      <p>
                                         <input name="wpappp-popup14-action-button-font-family-option" id="wpappp-popup14-action-button-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup14-action-button-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Action Button Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup14-action-button-text-color" class="color_picker" name="wpappp-popup14-action-button-text-color-option" value="<?php if(get_option('wpappp-popup14-action-button-text-color-option') == '') { echo '#000000';}else { echo esc_attr(get_option('wpappp-popup14-action-button-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Privacy Text:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup14-privacy-text" name="wpappp-popup14-privacy-text-option" value="<?php if(get_option('wpappp-popup14-privacy-text-option') == '') { echo ' We never share this data with 3rd part companies.';}else { echo esc_attr(get_option('wpappp-popup14-privacy-text-option'));} ?>" placeholder="Enter Your Privacy Text">
                                        <p>
                                         <input name="wpappp-popup14-privacy-font-family-option" id="wpappp-popup14-privacy-font-family-option"  type="text" value="<?php echo esc_attr(get_option('wpappp-popup14-privacy-font-family-option') ); ?>"/>
                                        </p>
                                </td>
                            </tr>

                            <tr>
                                <th>Privacy Text Color:</th>
                                <td class="up-content-options"><input type="text" id="wpappp-popup14-privacy-text-color" class="color_picker" name="wpappp-popup14-privacy-text-color-option" value="<?php if(get_option('wpappp-popup14-privacy-text-color-option') == '') { echo '#ffffff';}else { echo esc_attr(get_option('wpappp-popup14-privacy-text-color-option'));} ?>"></td>
                            </tr>

                            <tr>
                                <th>Overlay:</th>
                                <td class="up-content-options">
                                    <select id="wpappp-popup14-overlay-setting" name="wpappp-popup14-overlay-option">
                                        <option value="0.6"<?php selected( get_option('wpappp-popup14-overlay-option'),'0.6'); ?>>Default (60% opacity)</option>
                                        <option value="0.1"<?php selected( get_option('wpappp-popup14-overlay-option'),'0.1'); ?>>10% opacity</option>
                                        <option value="0.2"<?php selected( get_option('wpappp-popup14-overlay-option'),'0.2'); ?>>20% opacity</option>
                                        <option value="0.3"<?php selected( get_option('wpappp-popup14-overlay-option'),'0.3'); ?>>30% opacity</option>
                                        <option value="0.4"<?php selected( get_option('wpappp-popup14-overlay-option'),'0.4'); ?>>40% opacity</option>
                                        <option value="0.5"<?php selected( get_option('wpappp-popup14-overlay-option'),'0.5'); ?>>50% opacity</option>
                                        <option value="0.7"<?php selected( get_option('wpappp-popup14-overlay-option'),'0.7'); ?>>70% opacity</option>
                                        <option value="0.8"<?php selected( get_option('wpappp-popup14-overlay-option'),'0.8'); ?>>80% opacity</option>
                                        <option value="0.9"<?php selected( get_option('wpappp-popup14-overlay-option'),'0.9'); ?>>90% opacity</option>
                                        <option value="1"<?php selected( get_option('wpappp-popup14-overlay-option'),'1'); ?>>100% opacity</option>
                                    </select>
                                </td>
                            </tr>

                            </table>
                    </div>

                    <p class="submit">
                        <input type="submit" class="wpappp_buton" value="<?php _e( 'Save Changes' ); ?>" />
                    </p>
                </form>

            </div>

        </div>
    </li>

  <li>
        <input type="radio" name="wpappp-popup-tabs" id="wpappp-popup-tab2" />
        <label for="wpappp-popup-tab2" class="wpappp-tabs-label">Display Settings</label>
        <div id="wpappp-popup-tab-content2" class="wpappp-popup-tab-content">



            <table id="wpappp-display-settings">

                <tr>
                    <th>Enable Popup:</th>
                    <td class="wpappp-margin"><input type="checkbox" name="wpappp-popup-enable-popup" value="1" <?php checked('1', get_option('wpappp-popup-enable-popup')); ?> ></td>
                </tr>

                <tr>
                    <th>Show Popup:</th>
                    <td class="wpappp-margin">
                        <select id="wpappp-select-popup" name="wpappp-popup-show-selected-popup">
                            <option value="popup1" <?php selected( get_option('wpappp-popup-show-selected-popup'),'popup1'); ?>  >Popup1</option>
                            <option value=""  disabled >Popup2 (Premium)</option>
                            <option value=""  disabled >Popup3 (Premium)</option>
                            <option value=""  disabled >Popup4 (Premium)</option>
                            <option value=""  disabled >Popup5 (Premium)</option>
                            <option value=""  disabled >Popup6 (Premium)</option>
                            <option value=""  disabled >Popup7 (Premium)</option>
                            <option value=""  disabled >Popup8 (Premium)</option>
                            <option value=""  disabled >Popup9 (Premium)</option>
                            <option value=""  disabled >Popup10 (Premium)</option>
                            <option value=""  disabled >Popup11 (Premium)</option>
                            <option value=""  disabled >Popup12 (Premium)</option>
                            <option value=""  disabled >Popup13 (Premium)</option>
                            <option value=""  disabled >Popup14 (Premium)</option>
                        </select><br/>
                        <strong>After changing the look & feel from "How it Looks" tab, select that popup from here to show on your site.</strong>
                    </td>
                </tr>
                <tr>
                    <th>Show / Hide Popup on Mobile Devices:</th>
                    <td class="wpappp-margin">
                    <input disabled type="checkbox" name="" value=""  ><a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a><br/>
                        <strong>This option will allow you to Show or Hide popup when user opens your website on mobile devices.</strong>

                    </td>
                </tr>
                 <tr>
                    <th>Enable / Disable Popup Animation:</th>
                    <td class="wpappp-margin">
                    <input type="checkbox" name="wpappp-popup-show-hide-popup-animation" value="1" <?php checked('1', get_option('wpappp-popup-show-hide-popup-animation')); ?>  ><br/>
                        <strong>To animate popup please check this box.</strong>
                    </td>
                </tr>
                <tr>
                    <th>Show Popup on:</th>
                    <td class="wpappp-margin">
                        <input type="checkbox" name="wpappp-popup-show-on-post-popup" value="1" <?php checked('1', get_option('wpappp-popup-show-on-post-popup')); ?> > <span>Post</span>

                        <input type="checkbox" name="wpappp-popup-show-on-pages-popup" value="1" <?php checked('1', get_option('wpappp-popup-show-on-pages-popup')); ?> > <span>Pages</span>

                        <input type="checkbox" name="wpappp-popup-show-on-home-popup" value="1" <?php checked('1', get_option('wpappp-popup-show-on-home-popup')); ?> > <span>Home</span>
                    </tr>
                     <tr>
                    <th>Click to Popup:</th>
                    <td class="wpappp-margin">
                    <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a><br/>
                    <input type="text" name="wpappp-click-to-popup" value="<?php echo get_option('wpappp-click-to-popup');?>" placeholder="button-id1,button-id2....." style="width: 300px;" > Enter button IDs comma seperated<br/>
                        <strong>This option allows you to show popup only when user click on a specific button on a Post, Page or on Home Page <br/><a href="#">Help: How to get button id in your site</a></strong>
                    </td>
                </tr>
                    <tr>
                        <th class="wpappp-popup-pd">Show Popup:</th>
                        <td class="wpappp-popup-pd">
                            <select id="" name="wpappp-popup-show-once-or-everytime">
                                <option value="once" <?php selected( get_option('wpappp-popup-show-once-or-everytime'),'once'); ?>>Only once per page</option>
                                <option value="everytime" <?php selected( get_option('wpappp-popup-show-once-or-everytime'),'everytime'); ?>>Everytime page reloads</option>
                            </select>
                        </td>
                    </tr>
                    <tr>

                    <tr>
                        <th>Auto Close Popup:</th>
                        <td class="up-content-options"><input type="text" id="wpappp-popup-auto-close-time" value="" name="wpappp-popup-auto-close-time-option" disabled><span> (miliseconds)</span> <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a><br/>Leave empty if you want user to close the popup<br/><strong>"Auto Close Popup" Value should be higher than "Show Popup After" Value</strong></td>
                    </tr>

                    <tr>
                        <th>Show Popup After:</th>
                        <td class="up-content-options"><input type="text" id="wpappp-popup-show-popup-time" value="" name="wpappp-popup-show-popup-time-option" disabled><span> (miliseconds)</span> <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a><br/>Leave empty if you want to show popup right after page load<br/><strong>"Show Popup After" Value should be lesser than "Auto Close Popup" Value</strong></td>
                    </tr>
                    <tr>
                        <th class="wpappp-popup-pd">Cookie Expire Time on Close:</th>
                        <td class="wpappp-popup-pd">
                            <input type="text" name="wpappp-popup-cookie-expire-time" value="" disabled /> days <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a><br/><strong>When user click close button, how long should it be before the popup is shown again?</strong>
                        </td>
                    </tr>
                </table>


                <p class="submit">
                    <input type="submit" class="wpappp_buton" id="wpappp_save_changes" value="<?php _e( 'Save Changes' ); ?>" />
                </p>



            </div>
        </li>





        <li>
            <input type="radio" name="wpappp-popup-tabs" id="wpappp-popup-tab3" />
            <label for="wpappp-popup-tab3" class="wpappp-tabs-label">General Settings</label>
            <div id="wpappp-popup-tab-content3" class="wpappp-popup-tab-content">

                <table id="wpappp-general-settings">

                    <tr>
                        <th class="wpappp-popup-pd" width="60%">Send Subscribed Data to:</th>
                        <td class="wpappp-popup-pd">
                            <select id="wpappp-subscribe-dropdown" name="wpappp-popup-subscribe-data">
                                <option value="local_db" <?php selected( get_option('wpappp-popup-subscribe-data'),'local_db'); ?>>Local Database</option>
                                <option value="mail_chimp">MailChimp (Premium)</option>
                                <option value="get_response">GetResponse (Premium)</option>
                                <option value="active_campaign">Active Campaign (Premium)</option>
                                <option value="mail_list" >Send to E-Mail (Premium)</option>
                            </select>
                            <table id="wpappp-mail-chimp-settings" style="display:none;" border="0">
                                <tr>
                                    <td>
                                        <label for="wpappp-popup-api-key">MailChimp API Key:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="wpappp-popup-api-key" name="wpappp-popup-api-key" value="" disabled />  <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="wpappp-popup-list-id">MailChimp List ID:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="wpappp-popup-list-id" name="wpappp-popup-list-id" value="" disabled />  <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                    </td>
                                </tr>
                            </table>
                            <table id="wpappp-get-response-settings" style="display:none;" border="0">
                                <tr>
                                    <td>
                                        <label for="wpappp-popup-api-key">GetResponse API Key:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="wpappp-popup-api-key" name="wpappp-popup-api-key" value="" disabled />  <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="wpappp-popup-list-id">GetResponse Compaign Name:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="wpappp-popup-list-id" name="wpappp-popup-list-id" value="" disabled />  <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                    </td>
                                </tr>
                            </table>
                             <table id="wpappp-active-campaign-settings" style="display:none;" border="0">
                                <tr>
                                    <td>
                                        <label for="wpappp-popup-api-key">Active Campaign URL:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="wpappp-popup-api-key" name="wpappp-popup-api-key" value="" disabled />  <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="wpappp-popup-list-id">Active Campaign API Key:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="wpappp-popup-list-id" name="wpappp-popup-list-id" value="" disabled />  <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="wpappp-popup-list-id">Active Campaign List ID:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="wpappp-popup-list-id" name="wpappp-popup-list-id" value="" disabled />  <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                    </td>
                                </tr>
                            </table>
                            <table id="wpappp-email-settings" style="display:none;" border="0">
                                <tr>
                                    <td>
                                        <label for="wpappp-email-field">Email Address:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="wpappp-email-field" name="wpappp-email-field" value="" disabled />  <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <th class="wpappp-popup-pd">Enable AJAX Form Submission:</th>
                        <td class="wpappp-popup-pd">

                            <input disabled="disabled" type="checkbox" name="wpappp-popup-enable-ajax" value="1" checked="checked" ><br/><strong>Can't disble, For best user experience AJAX will be used</strong>
                        </td>
                    </tr>

                    <tr>
                        <th class="wpappp-popup-pd">Hide form after a successful send data to database or mailchimp:</th>
                        <td class="wpappp-popup-pd">

                            <input type="checkbox" name="wpappp-popup-hide-form" value="1" disabled > <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                        </td>
                    </tr>

                    <tr>
                        <th class="wpappp-popup-pd">Redirct to url after successful sign-ups:</th>
                        <td class="wpappp-popup-pd">
                         <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                            <input type="text" id="wpappp-popup-redirect-url" class="wpappp-popup-general-textfields" placeholder="Example:http://localhost/wp41/thank-you/" name="wpappp-popup-redirect-url" value="" disabled />  <br/><strong>Don't forget to add 'http://' while entering URL : http://www.redirect-url.com/</strong>
                        </td>
                    </tr>

                    <tr>
                        <th class="wpappp-popup-pd">Success Message:</th>
                        <td class="wpappp-popup-pd">
                         <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                            <input type="text" id="wpappp-popup-success-message" class="wpappp-popup-general-textfields" placeholder="Thank you, Your sign-up request was successful!" name="wpappp-popup-success-message" value="" disabled /> <br/><strong>Leave empty, if you don't want to show any message after user subscribed</strong>
                        </td>
                    </tr>

                    <tr>
                        <th class="wpappp-popup-pd">Invalid e-mail address message:</th>
                        <td class="wpappp-popup-pd">
                         <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                            <input type="text" id="wpappp-popup-valid-email" class="wpappp-popup-general-textfields" placeholder="Please Enter a Valid E-mail." name="wpappp-popup-invalid-email" value="" disabled />  
                            <br/><strong>Will show the default meesage if left empty</strong>
                        </td>
                    </tr>

                    <tr>
                        <th class="wpappp-popup-pd">Required field missing message:</th>
                        <td class="wpappp-popup-pd">
                         <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                            <input type="text" id="wpappp-popup-required-field" class="wpappp-popup-general-textfields" placeholder="Please fill in the required field." name="wpappp-popup-required-field" value="" disabled /> 
                            <br/><strong>Will show the default meesage if left empty</strong>
                        </td>
                    </tr>


                    <tr>
                        <th class="wpappp-popup-pd">General error message:</th>
                        <td class="wpappp-popup-pd">
                         <a href="https://www.arrowplugins.com/popup-plugin" class="upc_premium_feature">Premium Feature</a>
                            <input type="text" id="wpappp-popup-general-error" class="wpappp-popup-general-textfields" placeholder="Oops, something went wrong. Please try again later." name="wpappp-popup-general-error" value="" disabled />  <br/><strong>Will show the default meesage if left empty</strong>
                        </td>
                    </tr>

                </table>

                <p class="submit">
                    <input type="submit" class="wpappp_buton" id="wpappp_save_changes" value="<?php _e( 'Save Changes' ); ?>" />
                </p>

            </form>


        </div>
    </li>


    <li>
        <input type="radio" name="wpappp-popup-tabs" id="wpappp-popup-tab4" />
        <label for="wpappp-popup-tab4" class="wpappp-tabs-label">Subscriber's List</label>
        <div id="wpappp-popup-tab-content4" class="wpappp-popup-tab-content">
            <p style="text-align:center;margin:0" class="wpappp_sub_text">Subscriber List</p>
            <p style="text-align:center;margin:0"><strong>Subscriber's data is saved locally do make backup or export before uninstalling plugin</strong></p>
            <div>
                <table id="upc_subscriber_tab">
                    <tr>
                        <td><strong>Download & Export All Subscriber to CSV file: </strong></td>
                        <td><a href="<?php echo plugins_url('/includes/upc_subscriber_list.php?download_file=upc_subcribers_list.csv',__FILE__); ?>" class="wpappp_buton" id="wpappp_export_to_csv" value="Export to CSV" href="#">Download & Export to CSV</a></td>
                        <td><strong>Delete All Subscibers from Database: </strong></td>
                        <td><input type="button" class="wpappp_buton" id="wpappp_delete_all_data" value="Delete All Data" /></td>
                    </tr>
                </table>
            </div>
            <div>
                <table border="1" class="responstable">
                    <tr>
                        <th width="15%">ID</th>
                        <th width="25%">Name</th>
                        <th width="45%">Email</th>
                        <th width="25%">Edit</th>
                    </tr>
                    <?php
                    global $wpdb;
                    $table_name = $wpdb->prefix . "wpappp_subs";
                    $result = $wpdb->get_results ( "SELECT * FROM ".$table_name );
                    if($result){
                        foreach ( $result as $print )   {
                            ?>
                            <tr>
                                <td><?php echo $print->id;?></td>
                                <td><?php echo $print->name;?></td>
                                <td><?php echo $print->email;?></td>
                                <td><input type="button" data-delete="<?php echo $print->id;?>" class="upc_delete_entry wpappp_buton" id="upc_delete_entry" value="Delete Record" style="margin:0 auto;display:block;"/>
                                </td>
                            </tr>
                            <?php }
                        }
                        else{
                            ?><p>No Subscriber Found!</p><?php
                        }
                        ?>    
                    </div>

                </div>
            </li>


        </ul>


        <?php } 
        function upc_sanitize_options($value){
            $value = stripslashes($value);
            $value = filter_var($value,FILTER_SANITIZE_STRING);
            $value = sanitize_text_field($value);
            return $value;
        }
        require('includes/wpappp_uninstall.php');
        require('public/public-script.php');
        require('includes/wpappp_local.php');



        register_uninstall_hook(__FILE__, 'upc_delete_options');
        register_activation_hook(__FILE__, 'upc_install');



                                                            ?>