<?php
/**
 *
 * ie6nomore [Dutch-Nederlands]
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
	'IE6NOMORE_TITLE'		=> 'Je gebruikt een verouderde webbrowser!',
	'IE6NOMORE_MESSAGE1'	=> 'Voor een betere ervaring die deze plaats gebruikt, gelieve te bevorderen aan moderne Webbrowser, of',
	'IE6NOMORE_MESSAGE2'	=> 'installeer dan Google Chrome Frame',
	'IE6NOMORE_MESSAGE3'	=> 'Gelieve te bevorderen aan moderne Webbrowser',
	'IE6NOMORE_WARNING'		=> 'Waarschuwing!',
));
