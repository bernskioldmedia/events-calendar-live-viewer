<?php

namespace BernskioldMedia\WP\EventsCalendarLiveViewer\Rest;

use BernskioldMedia\WP\EventsCalendarLiveViewer\EventsHelper;
use BernskioldMedia\WP\EventsCalendarLiveViewer\Queries;
use ECLW_Vendor\BernskioldMedia\WP\PluginBase\Rest\RestEndpoint;
use WP_REST_Response;

defined( 'ABSPATH' ) || exit;

class NextVideo extends RestEndpoint {

	protected $namespace = 'eclw';

	protected function setup_routes(): void {
		$this->add_route( '/next-video', [
			'methods'             => self::READABLE,
			'callback'            => function() {
				$post = Queries::get_next_event();

				if ( ! $post ) {
					$data = [
						'id'             => null,
						'start_time'     => null,
						'end_time'       => null,
						'should_refresh' => false,
					];
				} else {
					$data = [
						'id'             => $post->ID,
						'start_time'     => EventsHelper::get_start_time( $post->ID ),
						'end_time'       => EventsHelper::get_end_time( $post->ID ),
						'should_refresh' => EventsHelper::should_load_next(),
					];
				}

				return new WP_REST_Response( $data, 200 );
			},
			'permission_callback' => [ $this, 'has_public_access' ],
		] );
	}
}
