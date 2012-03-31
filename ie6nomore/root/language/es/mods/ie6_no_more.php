<?php
/**
*
* ie6_no_more [Spanish]
*
* @package language
* @version $Id: ie6_no_more.php 2 2010/02/04 19:14:52 VSE Exp $
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
    'IE6NOMORE_TITLE'		=> 'Usted está usando un navegador obsoleto.',
    'IE6NOMORE_MESSAGE'		=> 'Para navegar mejor por este sitio, por favor, actualice su navegador.',
    'IE6NOMORE_WARNING'		=> '¡Aviso!',
    'IE6NOMORE_CLOSE' 		=> 'Cierra este aviso',
    'IE6NOMORE_FIREFOX'		=> 'http://www.mozilla-europe.org/es/firefox/',
    'IE6NOMORE_IE'   		=> 'http://www.microsoft.com/downloads/details.aspx?FamilyID=341c2ad5-8c3d-4347-8c03-08cdecd8852b&DisplayLang=es',
	'IE6NOMORE_SAFARI' 		=> 'http://www.apple.com/es/safari/download/',	
    'IE6NOMORE_CHROME' 		=> 'http://www.google.com/chrome?hl=es',
    'IE6NOMORE_OPERA' 		=> 'http://www.opera.com/browser/download/',
    'IE6NOMORE_FIREFOX_ALT'		=> 'Consiga Firefox 3.5',
    'IE6NOMORE_IE_ALT'   		=> 'Consiga Internet Explorer 8',
	'IE6NOMORE_SAFARI_ALT' 		=> 'Consiga Safari 4',	
    'IE6NOMORE_CHROME_ALT' 		=> 'Consiga Google Chrome',
    'IE6NOMORE_OPERA_ALT' 		=> 'Consiga Opera 9',
));

?>