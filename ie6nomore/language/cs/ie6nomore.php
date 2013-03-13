<?php
/**
 *
 * ie6nomore [Czech]
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
	'IE6NOMORE_TITLE'		=> 'Používáte zastaralý prohlížeč!',
	'IE6NOMORE_MESSAGE1'	=> 'Pro lepší zobrazení tohoto webu, můžete přejít na moderní webový prohlížeč, nebo',
	'IE6NOMORE_MESSAGE2'	=> 'instalace Google Chrome Frame',
	'IE6NOMORE_MESSAGE3'	=> 'Můžete přejít na moderní webový prohlížeč',
	'IE6NOMORE_WARNING'		=> 'Varování!',
));