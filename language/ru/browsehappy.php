<?php
/**
*
* Browse Happy [Russian]
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
	'BROWSEHAPPY_TITLE'		=> 'Вы используете устаревший браузер!',
	'BROWSEHAPPY_MESSAGE'	=> 'Для полноценного использования этого сайта, пожалуйста, установите современный браузер.',
	'BROWSEHAPPY_UPGRADE'	=> 'Обновление браузера',
	'BROWSEHAPPY_WARNING'	=> 'Внимание!',
));
