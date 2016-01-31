<?php namespace ContextBar\Admin;

use ContextBar\Option;

/**
 * Extend the WordPress admin bar.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class AdminBar {

	/**
	 * Add new node to `\WP_Admin_Bar`.
	 *
	 * @since 0.2.0
	 *
	 * @param \WP_Admin_Bar $wp_admin_bar
	 * @param Option $option
	 *
	 * @return void
	 */
	public function add_node( \WP_Admin_Bar $wp_admin_bar, Option $option ) {

		$args = array(
			'id'    => 'contextbar',
			'title' => esc_html( $option->get_value( 'name' ) ),
			'href'  => esc_url( get_home_url( '/' ) ),
		);

		$wp_admin_bar->add_node( $args );

	}

}