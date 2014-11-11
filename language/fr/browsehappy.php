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
	'BROWSEHAPPY_TITLE'		=> 'Vous utilisez un navigateur obsolète depuis près de 8 ans !',
	'BROWSEHAPPY_MESSAGE'	=> 'Pour une meilleure expérience et une utilisation de ce site plus sécurisée, prenez le temps de mettre à jour votre navigateur.',
	'BROWSEHAPPY_UPGRADE'	=> 'Prendre le temps de mettre à jour votre navigateur',
	'BROWSEHAPPY_WARNING'	=> 'Attention !',
));
