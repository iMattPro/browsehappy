<?php
/**
*
* browsehappy [Spanish]
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
	'BROWSEHAPPY_TITLE'		=> 'Usted está usando un navegador obsoleto!',
	'BROWSEHAPPY_MESSAGE'	=> 'Para una mejor experiencia, más seguro usar este sitio, por favor, actualice su navegador.',
	'BROWSEHAPPY_UPGRADE'	=> 'Actualice su navegador',
	'BROWSEHAPPY_WARNING'	=> '¡Aviso!',
));
