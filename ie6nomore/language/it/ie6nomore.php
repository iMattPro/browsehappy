<?php
/**
*
* ie6nomore [Italian]
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
	'IE6NOMORE_TITLE'		=> 'Stai usando un browser obsoleto!',
	'IE6NOMORE_MESSAGE1'	=> 'Per una migliore navigazione su questo sito, per cortesia passa ad un browser di ultima generazione, o',
	'IE6NOMORE_MESSAGE2'	=> 'installare Google Chrome Frame',
	'IE6NOMORE_MESSAGE3'	=> 'Per cortesia passa ad un browser di ultima generazione',
	'IE6NOMORE_WARNING'		=> 'Avvertimento!',
));
