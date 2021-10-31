<?php

namespace BernskioldMedia\WP\EventsCalendarLiveViewer;

class Queries {

	public static function get_current_or_next_event(): ?\WP_Post {
		$current_event = self::get_current_event();

		if ( $current_event && ! EventsHelper::should_load_next() ) {
			return $current_event;
		}

		$next_event = self::get_next_event();

		if ( $next_event ) {
			return $next_event;
		}

		return null;
	}

	public static function get_current_event(): ?\WP_Post {
		$events = tribe_events()->where( 'starts_before', 'now' )->where( 'ends_after', 'now' )->per_page( 1 )->all();

		return $events[0] ?? null;
	}

	public static function get_next_event(): ?\WP_Post {
		$events = tribe_events()->where( 'starts_after', 'now' )->per_page( 1 )->all();

		return $events[0] ?? null;
	}
}
