<?php
/**
 *
 * ie6nomore [French]
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
	'IE6NOMORE_TITLE'		=> 'Vous utilisez un navigateur dépassé depuis près de 8 ans!',
	'IE6NOMORE_MESSAGE1'	=> 'Pour une meilleure expérience web, prenez le temps de mettre votre navigateur à jour, ou',
	'IE6NOMORE_MESSAGE2'	=> 'installer Google Chrome Frame',
	'IE6NOMORE_MESSAGE3'	=> 'Prenez le temps de mettre votre navigateur à jour',
	'IE6NOMORE_WARNING'		=> 'Avertissement!',
));