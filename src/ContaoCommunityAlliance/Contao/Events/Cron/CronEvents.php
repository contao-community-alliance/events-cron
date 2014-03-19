<?php

/**
 * Cron event for Contao Open Source CMS
 * Copyright (C) 2013, 2014 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  (c) 2013, 2014 Contao Community Alliance
 * @author         Tristan Lins <tristan.lins@bit3.de>
 * @package        events-cron
 * @license        LGPL
 * @filesource
 */

namespace ContaoCommunityAlliance\Contao\Events\Cron;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class CronEvents
 */
class CronEvents
{
	/**
	 * The MONTHLY event occurs monthly.
	 *
	 * This event allows you to handle monthly actions. The event listener method receives
	 * a ContaoCommunityAlliance\Contao\Events\Cron\CronEvent instance.
	 *
	 * @var string
	 *
	 * @api
	 */
	const MONTHLY = 'cron.monthly';

	/**
	 * The WEEKLY event occurs weekly.
	 *
	 * This event allows you to handle weekly actions. The event listener method receives
	 * a ContaoCommunityAlliance\Contao\Events\Cron\CronEvent instance.
	 *
	 * @var string
	 *
	 * @api
	 */
	const WEEKLY = 'cron.weekly';

	/**
	 * The DAILY event occurs daily.
	 *
	 * This event allows you to handle daily actions. The event listener method receives
	 * a ContaoCommunityAlliance\Contao\Events\Cron\CronEvent instance.
	 *
	 * @var string
	 *
	 * @api
	 */
	const DAILY = 'cron.daily';

	/**
	 * The HOURLY event occurs hourly.
	 *
	 * This event allows you to handle hourly actions. The event listener method receives
	 * a ContaoCommunityAlliance\Contao\Events\Cron\CronEvent instance.
	 *
	 * @var string
	 *
	 * @api
	 */
	const HOURLY = 'cron.hourly';

	/**
	 * The MINUTELY event occurs minutely.
	 *
	 * This event allows you to handle minutely actions. The event listener method receives
	 * a ContaoCommunityAlliance\Contao\Events\Cron\CronEvent instance.
	 *
	 * @var string
	 *
	 * @api
	 */
	const MINUTELY = 'cron.minutely';
}
