<?php

namespace BernskioldMedia\WP\EventsCalendarLiveViewer;

use BernskioldMedia\WP\EventsCalendarLiveViewer\Blocks\Live_Viewer;
use BernskioldMedia\WP\EventsCalendarLiveViewer\Rest\NextVideo;
use ECLW_Vendor\BernskioldMedia\WP\PluginBase\BasePlugin;
use ECLW_Vendor\BernskioldMedia\WP\PluginBase\Blocks\Has_Blocks;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Plugin extends BasePlugin {

	use Has_Blocks;

	protected static string $slug             = 'events_calendar_live_viewer';
	protected static string $version          = '1.0.0';
	protected static string $textdomain       = 'events-calendar-live-viewer';
	protected static string $plugin_file_path = EVENTS_CALENDAR_LIVE_VIEWER_FILE_PATH;

	protected static array $boot = [
		Assets::class,
	];

	protected static array $rest_endpoints = [
		NextVideo::class,
	];

	public static array $dynamic_blocks = [
		'live-viewer' => Live_Viewer::class,
	];

}
