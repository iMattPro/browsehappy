<?php
/**
*
* browsehappy [Ukrainian]
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
	'BROWSEHAPPY_TITLE'		=> 'Ви використовуєте застарілий браузер!',
	'BROWSEHAPPY_MESSAGE'	=> 'Для кращого досвід використання цього сайту, будь ласка, оновіть свій браузер на нову версію.',
	'BROWSEHAPPY_UPGRADE'	=> 'Оновити ваш веб-браузер',
	'BROWSEHAPPY_WARNING'	=> 'Увага!',
));
