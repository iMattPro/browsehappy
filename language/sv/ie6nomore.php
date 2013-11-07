<?php
/**
*
* ie6nomore [Swedish]
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
	'IE6NOMORE_TITLE'		=> 'Du använder en föråldrad webbläsare!',
	'IE6NOMORE_MESSAGE1'	=> 'För en bättre upplevelse på denna webbplats, vänligen byt till en modern webbläsare, eller',
	'IE6NOMORE_MESSAGE2'	=> 'du installera Google Chrome Frame',
	'IE6NOMORE_MESSAGE3'	=> 'Vänligen byt till en modern webbläsare',
	'IE6NOMORE_WARNING'		=> 'Varning!',
));
