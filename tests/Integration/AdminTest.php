<?php namespace ContextBar\Tests\Integration;

use ContextBar\Admin\Admin;

/**
 * Test admin-specific functionality of the plugin.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class AdminTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Test if admin styles are enqueued.
	 *
	 * @group Admin
	 */
	public function testAdminEnqueue() {

		$admin = new Admin();
		$admin->enqueue();

		$this->assertTrue( wp_style_is( 'contextbar' ) );

	}

}