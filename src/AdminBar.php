<?php namespace ContextBar;

/**
 * Extend the WordPress admin bar.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class AdminBar {

	/**
	 * @var Option
	 */
	protected $option;

	/**
	 * AdminBar constructor.
	 *
	 * @since 0.1.0
	 */
	public function __construct() {

		$this->option = new Option();

	}

	/**
	 * Add new node to `\WP_Admin_Bar`.
	 *
	 * @since 0.1.0
	 *
	 * @param \WP_Admin_Bar $wp_admin_bar
	 *
	 * @return void
	 */
	public function add_node( \WP_Admin_Bar $wp_admin_bar ) {

		$args = array(
			'id'    => 'contextbar',
			'title' => esc_html( $this->option->get_value( 'name' ) ),
			'href'  => esc_url( get_home_url( '/' ) ),
		);

		$wp_admin_bar->add_node( $args );

	}

}