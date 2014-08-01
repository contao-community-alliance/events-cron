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

$GLOBALS['TL_CRON']['monthly'][]  = array(
	'ContaoCommunityAlliance\Contao\Events\Cron\CronDispatcher',
	'monthly'
);
$GLOBALS['TL_CRON']['weekly'][]   = array(
	'ContaoCommunityAlliance\Contao\Events\Cron\CronDispatcher',
	'weekly'
);
$GLOBALS['TL_CRON']['daily'][]    = array(
	'ContaoCommunityAlliance\Contao\Events\Cron\CronDispatcher',
	'daily'
);
$GLOBALS['TL_CRON']['hourly'][]   = array(
	'ContaoCommunityAlliance\Contao\Events\Cron\CronDispatcher',
	'hourly'
);
$GLOBALS['TL_CRON']['minutely'][] = array(
	'ContaoCommunityAlliance\Contao\Events\Cron\CronDispatcher',
	'minutely'
);
