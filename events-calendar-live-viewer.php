<?php
/**
 * Plugin Name: Events Calendar Live Viewer
 * Plugin URI:  https://bernskioldmedia.com
 * Description: An auto-updating live viewer for virtual events in The Events Calendar.
 * Version:     1.0.0
 * Author:      Bernskiold Media
 * Author URI:  https://bernskioldmedia.com
 * Text Domain: events-calendar-live-viewer
 * Domain Path: /languages/
 *
 * @package BernskioldMedia\BernskioldMedia\EventsCalendarLiveViewer
 */

use BernskioldMedia\WP\EventsCalendarLiveViewer\Plugin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Autoloader
 */
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require __DIR__ . '/vendor/autoload.php';
} else {
	throw new Exception( 'Autoload does not exist. Please run composer install --no-dev -o.' );
}

/**
 * Basic Constants
 */
define( 'EVENTS_CALENDAR_LIVE_VIEWER_FILE_PATH', __FILE__ );

/**
 * Initialize and boot the plugin.
 *
 * @return Plugin
 */
function events_calendar_live_viewer() {
	return Plugin::instance();
}

events_calendar_live_viewer();
