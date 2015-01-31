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
	protected $template;
	protected $user;

	public function setUp()
	{
		parent::setUp();

		// Load/Mock classes required by the event listener class
		$this->user = $this->getMock('\phpbb\user', array(), array('\phpbb\datetime'));
		$this->template = $this->getMockBuilder('\phpbb\template\template')
			->getMock();
	}

	protected function set_listener()
	{
		$this->listener = new \vse\browsehappy\event\listener(
			$this->template,
			$this->user
		);
	}

	public function test_construct()
	{
		$this->set_listener();
		$this->assertInstanceOf('\Symfony\Component\EventDispatcher\EventSubscriberInterface', $this->listener);
	}

	public function test_getSubscribedEvents()
	{
		$this->assertEquals(array(
			'core.index_modify_page_title',
		), array_keys(\vse\browsehappy\event\listener::getSubscribedEvents()));
	}

	public function test_show_browsehappy()
	{
		$this->set_listener();

		$this->template->expects($this->once())
			->method('assign_var')
			->with('S_BROWSEHAPPY', true);

		$dispatcher = new \Symfony\Component\EventDispatcher\EventDispatcher();
		$dispatcher->addListener('core.index_modify_page_title', array($this->listener, 'show_browsehappy'));
		$dispatcher->dispatch('core.index_modify_page_title');
	}
}
