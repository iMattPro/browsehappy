<?php
/**
*
* browsehappy [Dutch-Nederlands]
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
	'BROWSEHAPPY_TITLE'		=> 'Je gebruikt een verouderde webbrowser!',
	'BROWSEHAPPY_MESSAGE'	=> 'Voor een betere ervaring die deze plaats gebruikt, gelieve te bevorderen aan moderne Webbrowser.',
	'BROWSEHAPPY_UPGRADE'	=> 'Gelieve te bevorderen aan moderne Webbrowser',
	'BROWSEHAPPY_WARNING'	=> 'Waarschuwing!',
));
