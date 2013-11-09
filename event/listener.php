<?php
/**
*
* @package Browse Happy
* @copyright (c) 2013 Matt Friedman
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace vse\browsehappy\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.index_modify_page_title'		=> 'init_browsehappy',
		);
	}

	public function init_browsehappy($event)
	{
		global $user, $template, $phpbb_root_path;

		$user->add_lang_ext('vse/browsehappy', 'browsehappy');

		$template->assign_vars(array(
			'BROWSEHAPPY_IMAGEPATH'		=> $phpbb_root_path . 'ext/vse/browsehappy/styles/all/theme/images',
		));
	}
}
