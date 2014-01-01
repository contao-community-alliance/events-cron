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
 * Class CronEvent
 */
class CronEvent extends Event
{
	protected $run;

	function __construct($run)
	{
		$this->run = $run;
	}

	/**
	 * @return mixed
	 */
	public function getRun()
	{
		return $this->run;
	}
}
