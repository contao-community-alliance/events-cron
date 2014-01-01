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
		$eventDispatcher->dispatch('cron.monthly', new CronEvent('monthly'));
	}

	/**
	 * Dispatch weekly cron
	 */
	public function weekly()
	{
		$eventDispatcher = $this->getEventDispatcher();
		$eventDispatcher->dispatch('cron.weekly', new CronEvent('weekly'));
	}

	/**
	 * Dispatch daily cron
	 */
	public function daily()
	{
		$eventDispatcher = $this->getEventDispatcher();
		$eventDispatcher->dispatch('cron.daily', new CronEvent('daily'));
	}

	/**
	 * Dispatch hourly cron
	 */
	public function hourly()
	{
		$eventDispatcher = $this->getEventDispatcher();
		$eventDispatcher->dispatch('cron.hourly', new CronEvent('hourly'));
	}

	/**
	 * Dispatch minutely cron
	 */
	public function minutely()
	{
		$eventDispatcher = $this->getEventDispatcher();
		$eventDispatcher->dispatch('cron.minutely', new CronEvent('minutely'));
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
