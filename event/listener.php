<?php
/**
*
* @package IE6 No More
* @copyright (c) 2013 Matt Friedman
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace vse\ie6nomore\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
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