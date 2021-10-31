# Events Calendar Live Viewer

This plugin provides a live viewer interface for virtual events in The Events Calendar.

The live page automatically refreshes with the new video content from your live events when they are scheduled to start. This lets viewers stay on one page and enjoy your full
event. Perfect for conferences and events with multiple sessions in a row.

## Requirements

The following plugins are required:

- [The Events Calendar](https://theeventscalendar.com/products/wordpress-events-calendar/)
- [Virtual Events](https://theeventscalendar.com/products/wordpress-virtual-events/)

For this plugin to work your event needs to be structured:

- One event per session
- Multiple sessions scheduled in a row
- Using YouTube Live Premieres

## Installation

Currently we support a composer-based installation only:

```shell
composer require bernskioldmedia/events-calendar-live-viewer
```

We may in the future support a ZIP file installable through WordPress.org.

## Usage

On any of your pages add the "Live Viewer" block.

The live viewer block will show events based on the start and end times of your events. The block will show the current event based on the current time. If no current event exists,
the next event is shown.

Five minutes prior to the next event, the page will automatically refresh, loading the new event video embed.

Behind the scenes, the page polls the REST API automatically every minute to check if the page should refresh based on the next events start time. This means you can change your
schedule as the event happens, should you be running late.

## Customize

You can use the following actions and filters to customize this plugin.

### Change how long before the next event is loaded

By default the next event is loaded five minutes before its start time. To change this:

```php
// Load next event one minute before it starts.
add_filter( 'eclw_seconds_before_to_load_next', static function() {
	return MINUTE_IN_SECONDS;
} );
```

### Change how often the page should poll

By default, the page will poll the system every minute for updated data. To change this:

```php
// Poll for new data every five minutes.
add_filter( 'eclw_polling_interval', static function() {
	return 5 * MINUTE_IN_SECONDS;
} );
```
