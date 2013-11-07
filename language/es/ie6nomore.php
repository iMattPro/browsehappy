<?php
/**
*
* ie6nomore [Spanish]
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
	'IE6NOMORE_TITLE'		=> 'Usted está usando un navegador obsoleto!',
	'IE6NOMORE_MESSAGE1'	=> 'Para navegar mejor por este sitio, por favor, actualice su navegador, o',
	'IE6NOMORE_MESSAGE2'	=> 'instale Google Chrome Frame',
	'IE6NOMORE_MESSAGE3'	=> 'Actualice su navegador',
	'IE6NOMORE_WARNING'		=> '¡Aviso!',
));
