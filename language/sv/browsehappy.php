<?php
/**
 *
 * Browse Happy [Swedish]
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
	'BROWSEHAPPY_TITLE'		=> 'Du använder en föråldrad webbläsare!',
	'BROWSEHAPPY_MESSAGE'	=> 'För en bättre, säkrare erfarenhet av att använda denna webbplats, vänligen byt till en modern webbläsare.',
	'BROWSEHAPPY_UPGRADE'	=> 'Vänligen byt till en modern webbläsare',
	'BROWSEHAPPY_WARNING'	=> 'Varning!',
));
