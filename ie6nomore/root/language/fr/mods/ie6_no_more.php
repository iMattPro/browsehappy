<?php
/**
*
* ie6_no_more [French]
*
* @package language
* @version $Id: ie6_no_more.php 1 2009/08/11 22:26:52 VSE Exp $
* @copyright (c) 2009 Matt Friedman 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
    'IE6NOMORE_TITLE'		=> 'Vous utilisez un navigateur dépassé depuis près de 8 ans!',
    'IE6NOMORE_MESSAGE'		=> 'Pour une meilleure expérience web, prenez le temps de mettre votre navigateur à jour.',
    'IE6NOMORE_WARNING'		=> 'Avertissement!',
    'IE6NOMORE_CLOSE' 		=> 'Fermez cette notification',
    'IE6NOMORE_FIREFOX'		=> 'http://fr.www.mozilla.com/fr/',
    'IE6NOMORE_IE'   		=> 'http://www.microsoft.com/downloads/details.aspx?FamilyID=341c2ad5-8c3d-4347-8c03-08cdecd8852b&DisplayLang=fr',
	'IE6NOMORE_SAFARI' 		=> 'http://www.apple.com/fr/safari/download/',	
    'IE6NOMORE_CHROME' 		=> 'http://www.google.com/chrome?hl=fr',
    'IE6NOMORE_OPERA' 		=> 'http://www.opera.com/browser/download/',
    'IE6NOMORE_FIREFOX_ALT'		=> 'Obtenez Firefox 3.5',
    'IE6NOMORE_IE_ALT'   		=> 'Obtenez Internet Explorer 8',
	'IE6NOMORE_SAFARI_ALT' 		=> 'Obtenez Safari 4',	
    'IE6NOMORE_CHROME_ALT' 		=> 'Obtenez Google Chrome',
    'IE6NOMORE_OPERA_ALT' 		=> 'Obtenez Opera 9',
));

?>