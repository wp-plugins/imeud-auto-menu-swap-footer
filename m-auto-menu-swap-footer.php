<?php
/******************************************************************/
/*
	Plugin Name: iMeud Auto-menu swap FOOTER
	Plugin URI:  http://main53.com/wordpress/auto-menu-swap-footer/
	Author:      Kittichai
	Author URI:  http://main53.com
	Version:     1.0
	Description: As scrolling (not the bottom), the nav fade out, and as scroll to the bottom to see the show again. * Effective with Theme with nav tag.
*/ 
/******************************************************************/
	add_action( 'init', 'm_auto_menu_swap_footer' ); 

/******************************************************************/
	function m_auto_menu_swap_footer() {
		wp_enqueue_style( 'm_auto_menu_swap_footer_style', plugins_url( '', __FILE__) . '/m-auto-menu-swap-footer.css' );
		wp_enqueue_script('m_auto_menu_swap_footer_script', plugin_dir_url( __FILE__ ) . '/m-auto-menu-swap-footer.js', array('jquery'));	 
	}

/******************************************************************/ 

