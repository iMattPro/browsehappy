<?php
/**
*
* Browse Happy [French]
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
	'BROWSEHAPPY_TITLE'		=> 'Vous utilisez un navigateur dépassé depuis près de 8 ans!',
	'BROWSEHAPPY_MESSAGE'	=> 'Pour une meilleure expérience, plus sûr utilisant ce site, prenez le temps de mettre votre navigateur à jour.',
	'BROWSEHAPPY_UPGRADE'	=> 'Prenez le temps de mettre votre navigateur à jour',
	'BROWSEHAPPY_WARNING'	=> 'Avertissement!',
));
