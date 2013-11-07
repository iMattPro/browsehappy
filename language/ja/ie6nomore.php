<?php
/**
*
* ie6nomore [Japanese]
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
	'IE6NOMORE_TITLE'		=> 'あなたは旧式ブラウザをご利用中です',
	'IE6NOMORE_MESSAGE1'	=> 'このウェブサイトを快適に閲覧するにはブラウザをアップグレードしてください。',
	'IE6NOMORE_MESSAGE2'	=> 'or install Google Chrome Frame',
	'IE6NOMORE_MESSAGE3'	=> 'Upgrade to a modern web browser',
	'IE6NOMORE_WARNING'		=> 'Warning!',
));
