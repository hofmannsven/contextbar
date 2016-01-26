<?php namespace ContextBar;

/**
 * Contains all admin-specific functionality of the plugin.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class Admin implements ActionHookInterface {

	/**
	 * Handle plugin action hooks via the interface.
	 *
	 * @since  0.1.0
	 *
	 * @return array
	 */
	public function get_actions() {

		return array(
			'admin_enqueue_scripts' => array( 'enqueue' ),
			'customize_register'    => array( 'extend_customizer', 50, 1 ),
			'admin_bar_menu'        => array( 'extend_admin_bar', 35 ),
		);

	}

	/**
	 * Register and enqueue admin styles.
	 *
	 * @since   0.1.0
	 *
	 * @wp-hook admin_enqueue_scripts
	 * @return  void
	 */
	public function enqueue() {

		$admin_styles = new AdminStyles();
		$admin_styles->load();

	}

	/**
	 * Add settings to the WordPress customizer.
	 *
	 * @since   0.1.0
	 *
	 * @param   \WP_Customize_Manager $wp_customize
	 *
	 * @wp-hook customize_register
	 * @return  void
	 */
	public function extend_customizer( \WP_Customize_Manager $wp_customize ) {

		$customizer = new Customizer();
		$customizer->add( $wp_customize );

	}

	/**
	 * Add nodes to the WordPress admin bar.
	 *
	 * @since   0.1.0
	 *
	 * @param   \WP_Admin_Bar $wp_admin_bar
	 *
	 * @wp-hook admin_bar_menu
	 * @return  void
	 */
	public function extend_admin_bar( \WP_Admin_Bar $wp_admin_bar ) {

		$admin_bar = new AdminBar();
		$admin_bar->add_node( $wp_admin_bar );

	}

}