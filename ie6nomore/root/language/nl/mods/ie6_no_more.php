<?php
/**
*
* ie6_no_more [Dutch-Nederlands]
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
    'IE6NOMORE_TITLE'		=> 'Je gebruikt een verouderde webbrowser',
    'IE6NOMORE_MESSAGE'		=> 'Voor een betere ervaring die deze plaats gebruikt, gelieve te bevorderen aan moderne Webbrowser.',
    'IE6NOMORE_WARNING'		=> 'Waarschuwing!',
    'IE6NOMORE_CLOSE' 		=> 'Sluit waarschuwing',
    'IE6NOMORE_FIREFOX'		=> 'http://www.mozilla-europe.org/nl/firefox/',
    'IE6NOMORE_IE'   		=> 'http://www.microsoft.com/netherlands/windows/internet-explorer/default.aspx',
	'IE6NOMORE_SAFARI' 		=> 'http://www.apple.com/nl/safari/download/',	
    'IE6NOMORE_CHROME' 		=> 'http://www.google.com/chrome?hl=nl',
    'IE6NOMORE_OPERA' 		=> 'http://www.opera.com/browser/download/',
    'IE6NOMORE_FIREFOX_ALT'		=> 'Krijg Firefox 3.5',
    'IE6NOMORE_IE_ALT'   		=> 'Krijg Internet Explorer 8',
	'IE6NOMORE_SAFARI_ALT' 		=> 'Krijg Safari 4',	
    'IE6NOMORE_CHROME_ALT' 		=> 'Krijg Google Chrome',
    'IE6NOMORE_OPERA_ALT' 		=> 'Krijg Opera 9',
));

?>