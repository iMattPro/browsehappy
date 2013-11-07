<?php
/**
*
* ie6nomore [Deutsch]
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
	'IE6NOMORE_TITLE'		=> 'Du verwendest einen veralteten Browser!',
	'IE6NOMORE_MESSAGE1'	=> 'Für ein besseres Erlebnis beim Benutzen dieser Seite, aktualisiere bitte auf einen moderneren Webbrowser, oder',
	'IE6NOMORE_MESSAGE2'	=> 'installation von Google Chrome Frame',
	'IE6NOMORE_MESSAGE3'	=> 'aktualisiere bitte auf einen moderneren Webbrowser',
	'IE6NOMORE_WARNING'		=> 'Warnung!',
));
