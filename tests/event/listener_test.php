<?php
/**
*
* Browse Happy
*
* @copyright (c) 2014 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vse\browsehappy\tests\event;

class listener_test extends \phpbb_test_case
{
	/** @var \vse\browsehappy\event\listener */
	protected $listener;

	/**
	* Setup test environment
	*
	* @access public
	*/
	public function setUp()
	{
		parent::setUp();

		global $phpbb_dispatcher;

		// Load/Mock classes required by the event listener class
		$this->template = new \vse\abbc3\tests\mock\template();
		$this->user = $this->getMock('\phpbb\user');
	}

	/**
	* Create our event listener
	*
	* @access protected
	*/
	protected function set_listener()
	{
		$this->listener = new \vse\browsehappy\event\listener(
			$this->template,
			$this->user
		);
	}

	/**
	* Test the event listener is constructed correctly
	*
	* @access public
	*/
	public function test_construct()
	{
		$this->set_listener();
		$this->assertInstanceOf('\Symfony\Component\EventDispatcher\EventSubscriberInterface', $this->listener);
	}

	/**
	* Test the event listener is subscribing events
	*
	* @access public
	*/
	public function test_getSubscribedEvents()
	{
		$this->assertEquals(array(
			'core.index_modify_page_title',
		), array_keys(\vse\browsehappy\event\listener::getSubscribedEvents()));
	}

	/**
	* Test the show_browsehappy event
	*
	* @access public
	*/
	public function test_show_browsehappy()
	{
		$this->set_listener();

		$dispatcher = new \Symfony\Component\EventDispatcher\EventDispatcher();
		$dispatcher->addListener('core.index_modify_page_title', array($this->listener, 'show_browsehappy'));
		$dispatcher->dispatch('core.index_modify_page_title');

		$this->assertEquals(array(
			'S_BROWSEHAPPY'			=> true,
		), $this->template->get_template_vars());
	}
}
