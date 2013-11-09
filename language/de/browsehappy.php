<?php
/**
*
* browsehappy [Deutsch]
*
* @package language
* @copyright (c) 2013 Matt Friedman 
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'BROWSEHAPPY_TITLE'		=> 'Du verwendest einen veralteten Browser!',
	'BROWSEHAPPY_MESSAGE'	=> 'Für ein besseres, sicherere Erlebnis beim Benutzen dieser Seite, aktualisiere bitte auf einen moderneren Webbrowser.',
	'BROWSEHAPPY_UPGRADE'	=> 'aktualisiere bitte auf einen moderneren Webbrowser',
	'BROWSEHAPPY_WARNING'	=> 'Warnung!',
));
