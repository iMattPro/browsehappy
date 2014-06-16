<?php
/**
*
* Browse Happy [Japanese]
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
	'BROWSEHAPPY_TITLE'		=> 'あなたは旧式ブラウザをご利用中です',
	'BROWSEHAPPY_MESSAGE'	=> 'このサイトを使用して、より良い、より安全な経験のために、最新のWebブラウザにアップグレードしてください。',
	'BROWSEHAPPY_UPGRADE'	=> '現代のWebブラウザにアップグレード',
	'BROWSEHAPPY_WARNING'	=> '警告',
));
