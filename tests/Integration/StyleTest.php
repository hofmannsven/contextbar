<?php namespace ContextBar\Tests\Integration;

use ContextBar\AdminStyles;
use ContextBar\FrontStyles;

/**
 * Test plugin style handling.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class StyleTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @group Style
	 */
	public function testFrontStylesLoaded() {

		$front_styles = new FrontStyles();
		$front_styles->load();

		$this->assertTrue( wp_style_is( 'contextbar' ) );

	}

	/**
	 * @group Style
	 */
	public function testAdminStylesLoaded() {

		$admin_styles = new AdminStyles();
		$admin_styles->load();

		$this->assertTrue( wp_style_is( 'contextbar' ) );

	}

}