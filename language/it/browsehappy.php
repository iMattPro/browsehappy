<?php
/**
*
* browsehappy [Italian]
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
	'BROWSEHAPPY_TITLE'		=> 'Stai usando un browser obsoleto!',
	'BROWSEHAPPY_MESSAGE'	=> 'Per una migliore navigazione su questo sito, per cortesia passa ad un browser di ultima generazione.',
	'BROWSEHAPPY_UPGRADE'	=> 'Per cortesia passa ad un browser di ultima generazione',
	'BROWSEHAPPY_WARNING'	=> 'Avvertimento!',
));
