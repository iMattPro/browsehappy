<?php
/**
*
* ie6nomore [Ukrainian]
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
	'IE6NOMORE_TITLE'		=> 'Ви використовуєте застарілий браузер!',
	'IE6NOMORE_MESSAGE1'	=> 'Для кращого досвід використання цього сайту, будь ласка, оновіть свій браузер на нову версію, або',
	'IE6NOMORE_MESSAGE2'	=> 'встановіть Google Chrome Frame',
	'IE6NOMORE_MESSAGE3'	=> 'Оновити ваш веб-браузер',
	'IE6NOMORE_WARNING'		=> 'Увага!',
));
