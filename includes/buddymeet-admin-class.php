<?php
/**
 * BuddyMeet Admin
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * The BuddyMeet group class
 *
 * @package BuddyMeet
 * @since 1.0.0
 */
class BuddyMeet_Admin {
	private static $instance;

	public static function instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new BuddyMeet_Admin;
		}
		return self::$instance;
	}

	function __construct() {
		add_action( 'admin_menu', array( $this, 'load_admin_menu' ) );
	}

	public function load_admin_menu() {
		add_menu_page( __( 'BuddyMeet', 'buddymeet' ), __( 'BuddyMeet', 'buddymeet' ), 'manage_options', 'buddymeet', array( $this, 'list_meetings' ), 'dashicons-video-alt2', 5 );
		add_submenu_page( 'buddymeet', __( 'Meeting', 'buddymeet' ), __( 'Add Meeting', 'buddymeet' ), 'manage_options', 'buddymeet-add-meeting', array( $this, 'add_meeting' ) );
	}

	public function list_meetings() {

	}

	public function add_meeting() {

	}

}

function buddymeet_admin() {
	return BuddyMeet_Admin::instance();
}

buddymeet_admin();
