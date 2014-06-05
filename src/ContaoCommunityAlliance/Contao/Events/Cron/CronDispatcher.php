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

use Symfony\Component\EventDispatcher\EventDispatcher;

/**
 * Class CronDispatcher
 */
class CronDispatcher
{
	/**
	 * Dispatch monthly cron
	 */
	public function monthly()
	{
		$eventDispatcher = $this->getEventDispatcher();
		$eventDispatcher->dispatch(CronEvents::MONTHLY, new CronEvent('monthly'));
	}

	/**
	 * Dispatch weekly cron
	 */
	public function weekly()
	{
		$eventDispatcher = $this->getEventDispatcher();
		$eventDispatcher->dispatch(CronEvents::WEEKLY, new CronEvent('weekly'));
	}

	/**
	 * Dispatch daily cron
	 */
	public function daily()
	{
		$eventDispatcher = $this->getEventDispatcher();
		$eventDispatcher->dispatch(CronEvents::DAILY, new CronEvent('daily'));
	}

	/**
	 * Dispatch hourly cron
	 */
	public function hourly()
	{
		$eventDispatcher = $this->getEventDispatcher();
		$eventDispatcher->dispatch(CronEvents::HOURLY, new CronEvent('hourly'));
	}

	/**
	 * Dispatch minutely cron
	 */
	public function minutely()
	{
		$eventDispatcher = $this->getEventDispatcher();
		$eventDispatcher->dispatch(CronEvents::MINUTELY, new CronEvent('minutely'));
	}

	/**
	 * Return the event dispatcher.
	 *
	 * @return EventDispatcher
	 */
	public function getEventDispatcher()
	{
		return $GLOBALS['container']['event-dispatcher'];
	}
}
