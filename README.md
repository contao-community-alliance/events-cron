# Events: Cron

Provide the cron hooks as events.

```php
$GLOBALS['TL_EVENTS']['cron.monthly'][] = function($event) {
	// run monthly
};

$GLOBALS['TL_EVENTS']['cron.weekly'][] = function($event) {
	// run weekly
};

$GLOBALS['TL_EVENTS']['cron.daily'][] = function($event) {
	// run daily
};

$GLOBALS['TL_EVENTS']['cron.hourly'][] = function($event) {
	// run hourly
};

// only support in Contao 3.0 or newer
$GLOBALS['TL_EVENTS']['cron.minutely'][] = function($event) {
	// run minutely
};
```

See the [event dispatcher documentation](https://github.com/contao-community-alliance/event-dispatcher#listen-on-events)
for more examples how to listen on an event.
