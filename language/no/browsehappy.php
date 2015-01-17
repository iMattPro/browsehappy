<?php
/**
*
* Browse Happy [Norwegian]
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
	'BROWSEHAPPY_TITLE'		=> 'Du bruker en foreldet webleser!',
	'BROWSEHAPPY_MESSAGE'	=> 'For en bedre og sikrere opplevelse ved bruk av denne siden bør du oppdatere til en nyere nettleser.',
	'BROWSEHAPPY_UPGRADE'	=> 'Vennligst bytt til en nyere nettleser',
	'BROWSEHAPPY_WARNING'	=> 'Advarsel!',
));
