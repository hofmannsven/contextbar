<?php namespace ContextBar;

/**
 * Init plugin functionality.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class ContextBar {

	/**
	 * Init front- and admin-specific functionality of the plugin.
	 *
	 * @since  0.1.0
	 *
	 * @return void
	 */
	public function init() {

		require_once $this->get_plugin_dir_path() . 'ActionHookInterface.php';
		require_once $this->get_plugin_dir_path() . 'EnqueueableInterface.php';

		require_once $this->get_plugin_dir_path() . 'Manager.php';
		require_once $this->get_plugin_dir_path() . 'Option.php';
		require_once $this->get_plugin_dir_path() . 'Style.php';

		add_action( 'plugins_loaded', array( $this, 'init_textdomain' ) );
		add_action( 'plugins_loaded', array( $this, 'init_admin' ) );
		add_action( 'template_redirect', array( $this, 'init_front' ) );

	}

	/**
	 * Return the plugin directory path.
	 *
	 * @since  0.1.0
	 *
	 * @return string
	 */
	private function get_plugin_dir_path() {

		static $plugin_dir_path = FALSE;

		! $plugin_dir_path && $plugin_dir_path = plugin_dir_path( __FILE__ );

		return $plugin_dir_path;

	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since   0.1.0
	 *
	 * @wp-hook plugins_loaded
	 * @return  bool
	 */
	public function init_textdomain() {

		return load_plugin_textdomain(
			'contextbar',
			FALSE,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);


	}

	/**
	 * Init admin-specific functionality of the plugin.
	 *
	 * @since   0.1.0
	 *
	 * @wp-hook plugins_loaded
	 * @return  void
	 */
	public function init_admin() {

		require_once $this->get_plugin_dir_path() . 'Admin.php';
		require_once $this->get_plugin_dir_path() . 'AdminStyles.php';
		require_once $this->get_plugin_dir_path() . 'Customizer.php';
		require_once $this->get_plugin_dir_path() . 'AdminBar.php';

		$manager = new Manager();
		$admin   = new Admin();

		$manager->register( $admin );

	}

	/**
	 * Init front-specific functionality of the plugin.
	 *
	 * @since   0.1.0
	 *
	 * @wp-hook template_redirect
	 * @return  void
	 */
	public function init_front() {

		require_once $this->get_plugin_dir_path() . 'Front.php';
		require_once $this->get_plugin_dir_path() . 'FrontStyles.php';

		$manager = new Manager();
		$front   = new Front();

		$manager->register( $front );

	}

}