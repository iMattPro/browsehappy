<?php
/**
 *
 * ie6nomore [English]
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
	'IE6NOMORE_TITLE'		=> 'You are using an outdated browser!',
	'IE6NOMORE_MESSAGE1'	=> 'For a better experience using this site, please upgrade to a modern web browser, or',
	'IE6NOMORE_MESSAGE2'	=> 'install Google Chrome Frame',
	'IE6NOMORE_MESSAGE3'	=> 'Upgrade to a modern web browser',
	'IE6NOMORE_WARNING'		=> 'Warning!',
));
