<?php
/** 
Plugin Name: Notification admin panel benaceur
Plugin URI: http://benaceur-php.com/
Description: display a message or notice in the admin panel to a particular group or a member by his user id or username.
Version: 1.1.4
Author: benaceur
Author URI: http://benaceur-php.com/
License: GPL2
*/

define("NOTIFICATION_ADMIN_PANEL_BENACEUR", "Notification-Admin-Benaceur");

// Add settings link on plugin page
function admin_panel_benaceur_action_links($links){
	$links[] = '<a href="'.get_admin_url(null, '?page='.NOTIFICATION_ADMIN_PANEL_BENACEUR.'').'">'.__("Settings", 'notification-admin-benaceur').'</a>';
	return $links;
}
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'admin_panel_benaceur_action_links');
// Add settings link on plugin page


load_plugin_textdomain( 'notification-admin-benaceur', false, basename( dirname( __FILE__ ) ) . '/languages/' );

add_action('admin_init', 'notification_admin_benaceur_register_options');

  add_action('admin_menu', 'lien_menu_notification_admin_benaceur');
  function lien_menu_notification_admin_benaceur() {
  if (function_exists('add_options_page')) {
  $plugin_page_options = add_menu_page('notification-admin-benaceur', 'Notif-Admin-Benaceur', 'administrator', 'Notification-Admin-Benaceur', 'fonction_de_la_page_options', WP_PLUGIN_URL.'/notification-admin-panel-benaceur/admin/mib.png');
  }
}
  if (get_option( 'notification_admin_benaceur_enable_plug' )) {
  add_action('admin_footer-index.php', 'wp_notification_admin_benaceur');
  function wp_notification_admin_benaceur() { 
	
	if ( ( id_user_nab() || role_cap_nab() || name_user_nab() || logged_in_nab() ) && !wp_notification_admin_benaceur_tw() && !wp_notification_admin_benaceur_th() )
    {
		include('pages/notification-admin-page.php');
		
    }
}

  add_action('admin_footer-index.php', 'wp_notification_admin_benaceur_tw');
  function wp_notification_admin_benaceur_tw() { 
	
	if ( (id_user_nab_tw() || role_cap_nab_tw() || name_user_nab_tw() || logged_in_nab_tw()) && !wp_notification_admin_benaceur() && !wp_notification_admin_benaceur_th() )
    {
		include('pages/notification-admin-page_tw.php');
    }
}

  add_action('admin_footer-index.php', 'wp_notification_admin_benaceur_th');
  function wp_notification_admin_benaceur_th() { 
	
	if ( (id_user_nab_th() || role_cap_nab_th() || name_user_nab_th() || logged_in_nab_th()) && !wp_notification_admin_benaceur() && !wp_notification_admin_benaceur_tw() )
    {
		include('pages/notification-admin-page_th.php');
    }
}
  }

  function notification_admin_benaceur_register_options() { 
    register_setting('notification_admin_benaceur_group', 'notification_admin_benaceur_enable_plug');
    register_setting('notification_admin_benaceur_group', 'notification_admin_benaceur_text');
    register_setting('notification_admin_benaceur_group', 'notification_admin_benaceur_for_users');
    register_setting('notification_admin_benaceur_group', 'notification_admin_benaceur_for_role_x');
    register_setting('notification_admin_benaceur_group', 'notification_admin_benaceur_for_user_id');
    register_setting('notification_admin_benaceur_group', 'notification_admin_benaceur_for_user_name');
    register_setting('notification_admin_benaceur_group_tw', 'notification_admin_benaceur_text_tw');
    register_setting('notification_admin_benaceur_group_tw', 'notification_admin_benaceur_for_users_tw');
    register_setting('notification_admin_benaceur_group_tw', 'notification_admin_benaceur_for_role_x_tw');
    register_setting('notification_admin_benaceur_group_tw', 'notification_admin_benaceur_for_user_id_tw');
    register_setting('notification_admin_benaceur_group_tw', 'notification_admin_benaceur_for_user_name_tw');
    register_setting('notification_admin_benaceur_group_th', 'notification_admin_benaceur_text_th');
    register_setting('notification_admin_benaceur_group_th', 'notification_admin_benaceur_for_users_th');
    register_setting('notification_admin_benaceur_group_th', 'notification_admin_benaceur_for_role_x_th');
    register_setting('notification_admin_benaceur_group_th', 'notification_admin_benaceur_for_user_id_th');
    register_setting('notification_admin_benaceur_group_th', 'notification_admin_benaceur_for_user_name_th');
	
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_color_back');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_color_back2');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_align_msg');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_color_text');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_color_border');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_border_top');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_border_bottom');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_border_right');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_border_left');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_border_radius');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_opacity');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_font');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_font_size');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_width');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_text_align');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_padding_top');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_padding_bottom');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_margin_top');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_margin_bottom');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_font_weight');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_text_shadow');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_text_shadow_color');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_box_shadow');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_box_shadow_color');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_box_shadow_v');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_disable_this_font');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_disable_clignotement');
    register_setting('notification_admin_benaceur_group_sty', 'notification_admin_benaceur_default');
	
	    if( $_GET['page'] == 'Notification-Admin-Benaceur' ){
		wp_enqueue_script ('jquery');
		wp_enqueue_script('farbtastic');
		wp_enqueue_script('notification_admin_benaceur_register_options',plugins_url('admin/notification-admin-benaceur.js',__FILE__), array('jquery'));
		wp_enqueue_style('notification_admin_benaceur_register_options',plugins_url('admin/notification-admin-benaceur.css',__FILE__), false, '' );
		wp_enqueue_style('farbtastic');	
	}
	    if (is_admin()) {
		wp_enqueue_script ('jquery');
		wp_enqueue_script('notification_admin_benaceur_scripts',plugins_url('admin/notification-admin-benaceur-clgn.js',__FILE__), array('jquery'));
		}
}

function nab_form_admin_scripts() {
   if ( is_admin() ){ 
      if ( isset($_GET['page']) && $_GET['page'] == 'Notification-Admin-Benaceur' ) {
         wp_enqueue_script('jquery');
         wp_enqueue_script( 'jquery-form' );
      }
   }
}
add_action( 'admin_init', 'nab_form_admin_scripts' );

	function get_settings_nab( $inherit = false ) {

		$settings = array( 
			'rolexcap_nab' => (array) get_option( 'notification_admin_benaceur_for_role_x', array() )
		);

		$settings[ 'rolexcap_nab' ] = array_map( 'trim', array_unique( array_filter( $settings[ 'rolexcap_nab' ] ) ) );
		
		return $settings;
		
	}

	function get_settings_nab_tw( $inherit = false ) {

		$settings_tw = array( 
			'rolexcap_nab_tw' => (array) get_option( 'notification_admin_benaceur_for_role_x_tw', array() )
		);

		$settings_tw[ 'rolexcap_nab_tw' ] = array_map( 'trim', array_unique( array_filter( $settings_tw[ 'rolexcap_nab_tw' ] ) ) );
		
		return $settings_tw;
		
	}
	
	function get_settings_nab_th( $inherit = false ) {

		$settings_th = array( 
			'rolexcap_nab_th' => (array) get_option( 'notification_admin_benaceur_for_role_x_th', array() )
		);

		$settings_th[ 'rolexcap_nab_th' ] = array_map( 'trim', array_unique( array_filter( $settings_th[ 'rolexcap_nab_th' ] ) ) );
		
		return $settings_th;
		
	}
	
    function id_user_nab() {

	$current_user = wp_get_current_user();
	$user_id = get_current_user_id();
	
	$iduser_nab = explode(',', get_option('notification_admin_benaceur_for_user_id'));
	
	if(is_array($iduser_nab)) {
		
		foreach($iduser_nab as $user_id) {
			
			if( $current_user->ID == $user_id ) {
				
	return true;
			}
		}
	}
	
	return false;
}

    function role_cap_nab() {

        $settings = get_settings_nab( true );	
		$rolexcap_nab = $settings[ 'rolexcap_nab' ];

		if ( !empty( $rolexcap_nab ) ) {
			if ( !is_array( $rolexcap_nab ) ) {
				$rolexcap_nab = array( $rolexcap_nab );
			}

			foreach ( $rolexcap_nab as $role ) {
	
			
			if ( current_user_can( $role ) ) {
				
	return true;
			}
		}
	}
	
	return false;
}

    function name_user_nab() {
	
	$current_user = wp_get_current_user();
	$nameuser_nab = explode(',', get_option('notification_admin_benaceur_for_user_name'));
	
	if(is_array($nameuser_nab)) {
		
		foreach($nameuser_nab as $user_login) {
			
			if( $current_user->user_login == $user_login ) {
				
	return true;
			}
		}
	}
	
	return false;
}

    function logged_in_nab() {
	
	$loggedin_nab = get_option('notification_admin_benaceur_for_users');
	
	if($loggedin_nab) {
		
		if(is_user_logged_in() ) {
			
			return true;
		}
	}
	
	return false;
}

// 2

    function id_user_nab_tw() {

	$current_user = wp_get_current_user();
	$user_id = get_current_user_id();
	
	$iduser_nab_tw = explode(',', get_option('notification_admin_benaceur_for_user_id_tw'));
	
	if(is_array($iduser_nab_tw)) {
		
		foreach($iduser_nab_tw as $user_id) {
			
			if( $current_user->ID == $user_id ) {
				
	return true;
			}
		}
	}
	
	return false;
}

    function role_cap_nab_tw() {

        $settings_tw = get_settings_nab_tw( true );	
		$rolexcap_nab_tw = $settings_tw[ 'rolexcap_nab_tw' ];

		if ( !empty( $rolexcap_nab_tw ) ) {
			if ( !is_array( $rolexcap_nab_tw ) ) {
				$rolexcap_nab_tw = array( $rolexcap_nab_tw );
			}

			foreach ( $rolexcap_nab_tw as $role_tw ) {
	
			
			if ( current_user_can( $role_tw ) ) {
				
	return true;
			}
		}
	}
	
	return false;
}

    function name_user_nab_tw() {
	
	$current_user = wp_get_current_user();
	$nameuser_nab_tw = explode(',', get_option('notification_admin_benaceur_for_user_name_tw'));
	
	if(is_array($nameuser_nab_tw)) {
		
		foreach($nameuser_nab_tw as $user_login) {
			
			if( $current_user->user_login == $user_login ) {
				
	return true;
			}
		}
	}
	
	return false;
}

    function logged_in_nab_tw() {
	
	$loggedin_nab_tw = get_option('notification_admin_benaceur_for_users_tw');
	
	if($loggedin_nab_tw) {
		
		if(is_user_logged_in() ) {
			
			return true;
		}
	}
	
	return false;
}

// 3

    function id_user_nab_th() {

	$current_user = wp_get_current_user();
	$user_id = get_current_user_id();
	
	$iduser_nab_th = explode(',', get_option('notification_admin_benaceur_for_user_id_th'));
	
	if(is_array($iduser_nab_th)) {
		
		foreach($iduser_nab_th as $user_id) {
			
			if( $current_user->ID == $user_id ) {
				
	return true;
			}
		}
	}
	
	return false;
}

    function role_cap_nab_th() {

        $settings_th = get_settings_nab_th( true );	
		$rolexcap_nab_th = $settings_th[ 'rolexcap_nab_th' ];

		if ( !empty( $rolexcap_nab_th ) ) {
			if ( !is_array( $rolexcap_nab_th ) ) {
				$rolexcap_nab_th = array( $rolexcap_nab_th );
			}

			foreach ( $rolexcap_nab_th as $role_th ) {
	
			
			if ( current_user_can( $role_th ) ) {
				
	return true;
			}
		}
	}
	
	return false;
}

    function name_user_nab_th() {
	
	$current_user = wp_get_current_user();
	$nameuser_nab_th = explode(',', get_option('notification_admin_benaceur_for_user_name_th'));
	
	if(is_array($nameuser_nab_th)) {
		
		foreach($nameuser_nab_th as $user_login) {
			
			if( $current_user->user_login == $user_login ) {
				
	return true;
			}
		}
	}
	
	return false;
}

    function logged_in_nab_th() {
	
	$loggedin_nab_th = get_option('notification_admin_benaceur_for_users_th');
	
	if($loggedin_nab_th) {
		
		if(is_user_logged_in() ) {
			
			return true;
		}
	}
	
	return false;
}


require ('notification-admin-benaceur-page.php');

