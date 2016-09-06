<?php
/**
 *
 * Browse Happy [English]
 *
 * @copyright (c) 2013 Matt Friedman
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BROWSEHAPPY_TITLE'		=> 'You are using an outdated browser!',
	'BROWSEHAPPY_MESSAGE'	=> 'For a better, safer experience using this site, please upgrade to a modern web browser.',
	'BROWSEHAPPY_UPGRADE'	=> 'Upgrade to a modern web browser',
	'BROWSEHAPPY_WARNING'	=> 'Warning!',
));
