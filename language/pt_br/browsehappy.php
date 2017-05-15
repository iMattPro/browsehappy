<?php
/**
 *
 * Browse Happy [Portuguese]
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
	'BROWSEHAPPY_TITLE'		=> 'Você está usando um navegador desatualizado!',
	'BROWSEHAPPY_MESSAGE'	=> 'Para navegar melhor neste site, por favor, atualize seu navegador.',
	'BROWSEHAPPY_UPGRADE'	=> 'Por favor, atualize seu navegador',
	'BROWSEHAPPY_WARNING'	=> 'AVISO!',
));
