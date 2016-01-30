<?php namespace ContextBar;

/**
 * Contains all internationalization-specific functionality of the plugin.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class Locale implements ActionHookInterface {

	/**
	 * Handle plugin action hooks via the interface.
	 *
	 * @since  0.1.1
	 *
	 * @return array
	 */
	public function get_actions() {

		return array(
			'plugins_loaded' => array( 'set_locale' )
		);

	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since   0.1.1
	 *
	 * @wp-hook plugins_loaded
	 * @return  bool
	 */
	public function set_locale() {

		return load_plugin_textdomain(
			'contextbar',
			FALSE,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

}