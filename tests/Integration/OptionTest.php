<?php namespace ContextBar\Tests\Integration;

use ContextBar\Option;

/**
 * Test plugin option handling.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class OptionTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @var Object
	 */
	private $option;

	/**
	 * Set up new Option class with (in-)valid plugin option values.
	 */
	public function setUp() {

		add_option(
			'contextbar',
			array(
				// 'name'  => 'Localhost',
				'color' => '#9c0006',
			)
		);

		$this->option = new Option();

	}

	/**
	 * Tear down and clean up.
	 */
	public function tearDown() {

		$this->option = NULL;

	}

	/**
	 * Test if option is valid.
	 *
	 * @group Option
	 */
	public function testOptionHasOption() {

		$this->assertTrue( $this->option->has_option( 'color' ) );

	}

	/**
	 * Test if option is invalid.
	 *
	 * @group Option
	 */
	public function testOptionHasInvalidOption() {

		$this->assertFalse( $this->option->has_option( 'undefined' ) );

	}

	/**
	 * Test if invalid option returns defaults.
	 *
	 * @group Option
	 */
	public function testOptionGetDefaultOption() {

		$defaults = array(
			'name'  => 'Localhost',
			'color' => '#9c0006',
		);
		$this->assertEquals( $defaults, $this->option->get_option( 'undefined' ) );

	}

	/**
	 * Test if valid value returns stored value.
	 *
	 * @group Option
	 */
	public function testOptionGetValue() {

		$this->assertEquals( '#9c0006', $this->option->get_value( 'color' ) );

	}

	/**
	 * Test if not yet saved value returns default value.
	 *
	 * @group Option
	 */
	public function testOptionGetDefaultValue() {

		$this->assertEquals( 'Localhost', $this->option->get_value( 'name' ) );

	}

	/**
	 * Test if invalid value returns no value.
	 *
	 * @group Option
	 */
	public function testOptionGetInvalidValue() {

		$this->assertEmpty( $this->option->get_value( 'undefined' ) );

	}

}