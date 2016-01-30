<?php namespace ContextBar\Tests\Integration;

use ContextBar\Front\Front;

/**
 * Test front-specific functionality of the plugin.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class FrontTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Test if front styles are enqueued.
	 *
	 * @group Front
	 */
	public function testFrontEnqueue() {

		$front = new Front();
		$front->enqueue();

		$this->assertTrue( wp_style_is( 'contextbar' ) );

	}

}