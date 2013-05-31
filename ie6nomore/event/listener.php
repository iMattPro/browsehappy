<?php
/**
*
* @package IE6 No More
* @copyright (c) 2013 Matt Friedman
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/

if (!defined('IN_PHPBB'))
{
    exit;
}

/**
* Event listener
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class phpbb_ext_vse_ie6nomore_event_listener implements EventSubscriberInterface
{

	static public function getSubscribedEvents()
	{
		return array(
			'core.index_modify_page_title'		=> 'init_ie6nomore',
		);
	}

	public function init_ie6nomore($event)
	{
		global $user, $template, $phpbb_root_path;

		$user->add_lang_ext('vse/ie6nomore', 'ie6nomore');

		$template->assign_vars(array(
			'IE6NOMORE_IMAGEPATH'		=> $phpbb_root_path . 'ext/vse/ie6nomore/styles/all/theme/images',
		));
	}

}
