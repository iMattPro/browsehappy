<?php
/**
*
* browsehappy [Czech]
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
	'BROWSEHAPPY_TITLE'		=> 'Používáte zastaralý prohlížeč!',
	'BROWSEHAPPY_MESSAGE'	=> 'Pro lepší zobrazení tohoto webu, můžete přejít na moderní webový prohlížeč.',
	'BROWSEHAPPY_UPGRADE'	=> 'Můžete přejít na moderní webový prohlížeč',
	'BROWSEHAPPY_WARNING'	=> 'Varování!',
));
