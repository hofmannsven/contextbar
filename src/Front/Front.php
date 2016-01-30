<?php namespace ContextBar\Front;

use ContextBar\ActionHookInterface;

/**
 * Contains all front-specific functionality of the plugin.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class Front implements ActionHookInterface {

	/**
	 * Handle plugin action hooks via the interface.
	 *
	 * @since  0.2.0
	 *
	 * @return array
	 */
	public function get_actions() {

		return array(
			'wp_enqueue_scripts' => array( 'enqueue' )
		);

	}

	/**
	 * Register and enqueue front styles.
	 *
	 * @since   0.2.0
	 *
	 * @wp-hook wp_enqueue_scripts
	 * @return  void
	 */
	public function enqueue() {

		$front_styles = new FrontStyles();
		$front_styles->load();

	}

}