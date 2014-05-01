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
	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.index_modify_page_title'		=> 'show_browsehappy',
		);
	}

	/**
	* Show browsehappy on the index page
	*
	* @return null
	* @access public
	*/
	public function show_browsehappy($event)
	{
		global $user, $template;

		$user->add_lang_ext('vse/browsehappy', 'browsehappy');

		$template->assign_var('S_BROWSEHAPPY', true);
	}
}
