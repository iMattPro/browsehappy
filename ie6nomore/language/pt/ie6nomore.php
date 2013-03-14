<?php
/**
 *
 * ie6nomore [Portuguese]
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
	'IE6NOMORE_TITLE'		=> 'Você está usando um navegador desatualizado!',
	'IE6NOMORE_MESSAGE1'	=> 'Para navegar melhor neste site, por favor, atualize seu navegador, ou',
	'IE6NOMORE_MESSAGE2'	=> 'por favor instalar o Google Chrome Frame',
	'IE6NOMORE_MESSAGE3'	=> 'Por favor, atualize seu navegador',
	'IE6NOMORE_WARNING'		=> 'AVISO!',
));
