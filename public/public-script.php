<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
add_action( 'wp_footer', 'upc_public_script_top_level' );
function upc_public_script_top_level() {
	if(get_option('wpappp-popup-enable-popup') == '1'){
		if(get_option('wpappp-popup-show-selected-popup') == 'popup1'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template1.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template1.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template1.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template1.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup2'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template2.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template2.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template2.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template2.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup3'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template3.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template3.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() ){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template3.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template3.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup4'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template4.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template4.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() ){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template4.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template4.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup5'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template5.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template5.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() ){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template5.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template5.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup6'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template6.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template6.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() ){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template6.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template6.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup7'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template7.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template7.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() ){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template7.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template7.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup8'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template8.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template8.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() ){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template8.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template8.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup9'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template9.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template9.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() ){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template9.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template9.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup10'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template10.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template10.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() ){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template10.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template10.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup11'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template11.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template11.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() ){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template11.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template11.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup12'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template12.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template12.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() ){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template12.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template12.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup13'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template13.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template13.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() ){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template13.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template13.php' );

			}
		}
		if(get_option('wpappp-popup-show-selected-popup') == 'popup14'){
			if(get_option('wpappp-popup-show-on-post-popup') == '1' && is_single()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template14.php' );

			}
			if(get_option('wpappp-popup-show-on-pages-popup') == '1' && is_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template14.php' );

			}
			if(get_option('wpappp-popup-show-on-home-popup') == '1' && is_home() ){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template14.php' );

			}
			if(get_option('wpappp-popup-show-on-front-popup') == '1' && is_front_page()){

				include_once( plugin_dir_path( __FILE__ ) . '../templates/template14.php' );

			}
		}
	}
}
