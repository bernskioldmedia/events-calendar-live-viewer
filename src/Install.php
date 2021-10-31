<?php
/**
 * Installer
 *
 * @package BernskioldMedia\BernskioldMedia\EventsCalendarLiveViewer
 */

namespace BernskioldMedia\WP\EventsCalendarLiveViewer;

use ECLW_Vendor\BernskioldMedia\WP\PluginBase\Installer;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Install extends Installer {

	public static function install(): void {
		parent::install();

		do_action( 'events_calendar_live_viewer_install' );
	}

}
