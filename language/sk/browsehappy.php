<?php
/**
*
* browsehappy [Slovak]
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
	'BROWSEHAPPY_TITLE'		=> 'Používate zastaralý prehliadač!',
	'BROWSEHAPPY_MESSAGE'	=> 'Pre lepšie zobrazenie tohto webu, môžete prejsť na moderný webový prehliadač.',
	'BROWSEHAPPY_UPGRADE'	=> 'Môžete prejsť na moderný webový prehliadač',
	'BROWSEHAPPY_WARNING'	=> 'Výstraha!',
));
