<?php
/**
 * Plugin Name: Premier Popups for Wordpress
 * Plugin URI: 
 * Description: Add popup/popover
 * Version: 1.0
 * Author: Andrew Dushane
 * Author URI: http://premierprograming.com
 * License: GPL2
 */

include_once('includes/options.php');

/**
 * Include popup content, called in premier_popups_scripts
 */
function premier_popup_content() {
	$popup_options = get_option('premier_popups');
	if( $popup_options != '' ) {
		$popup_ID		  = $popup_options['popup_ID'];
		$popup_background = $popup_options['popup_background'];
		$popup_color	  = $popup_options['popup_color'];
        $popup_width	  = $popup_options['popup_width'];
		$popup_height	  = $popup_options['popup_height'];
		$popup_mobile     = $popup_options['popup_mobile'];
		if ($popup_mobile) {
			$popup_hide = '';
		} else {
			$popup_hide='class="mobile-hide"';
		}
		
	}
	include_once( 'includes/custom-styles.php' );
	include_once( 'includes/display-popup.php');
}

/**
 * Register and enqueue stylesheet and script
 */
function premier_popups_scripts() {
	if ( is_home() ) { //Only proceed on the homepage
        $popup_options = get_option('premier_popups');
        $popup_delay = $popup_options['popup_delay'];
        if( !(is_int($popup_delay)) ) {
            $popup_delay = 7;
        }
        $cookie = get_bloginfo('name');
		if( !isset($_COOKIE['premier-popups']) || $_COOKIE['premier-popups'] != $cookie) { //Only proceed if no cookie is set for this site
			setcookie('premier-popups', $cookie, time() + (86400 * $popup_delay) ); //Set cookie expiration
			wp_register_style( 'premier-popups', plugins_url( 'premier-popups/includes/style.css') );
			wp_enqueue_style( 'premier-popups' );
			wp_enqueue_script('premier-popups', plugins_url( 'premier-popups/includes/pop.js'), array( 'jquery', 'jquery-effects-core' ), '1.0', true);
			add_action('wp_head', 'premier_popup_content');
		} //end cookie conditional
	} //end home conditional
} // end premier_popups_scripts
add_action( 'wp_enqueue_scripts', 'premier_popups_scripts' );

/**
 * Create popups post type
 */
function popup_posttype() {
  register_post_type( 'premier_popup',
    array(
      'labels' => array(
        'name' => __( 'Popups' ),
        'singular_name' => __( 'Popup' )
      ),
      'public' => true,
	  'exclude_from_search' => true,
	  'menu_position' => 62,
      'has_archive' => true,
      'rewrite' => array('slug' => 'popups'),
    )
  );
}
add_action( 'init', 'popup_posttype' );
