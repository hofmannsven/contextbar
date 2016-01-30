<?php namespace ContextBar;

/**
 * Init plugin functionality.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class ContextBar {

	/**
	 * Plugin dir path.
	 *
	 * @var String
	 */
	protected $plugin_dir_path;

	/**
	 * ContextBar constructor.
	 *
	 * @since 0.1.1
	 *
	 * @param $plugin_dir_path
	 */
	public function __construct( $plugin_dir_path ) {

		$this->plugin_dir_path = $plugin_dir_path;

	}

	/**
	 * Init front- and admin-specific functionality of the plugin.
	 *
	 * @since  0.1.0
	 *
	 * @return void
	 */
	public function init() {

		require_once $this->plugin_dir_path . 'src/ActionHookInterface.php';
		require_once $this->plugin_dir_path . 'src/EnqueueableInterface.php';

		require_once $this->plugin_dir_path . 'src/Manager.php';
		require_once $this->plugin_dir_path . 'src/Option.php';
		require_once $this->plugin_dir_path . 'src/Style.php';

		$this->init_locale();
		$this->init_admin();
		$this->init_front();

	}

	/**
	 * Init internationalization-specific functionality of the plugin.
	 *
	 * @since   0.1.1
	 *
	 * @return  void
	 */
	public function init_locale() {

		require_once $this->plugin_dir_path . 'src/Locale.php';

		$manager = new Manager();
		$locale  = new Locale();

		$manager->register( $locale );

	}

	/**
	 * Init admin-specific functionality of the plugin.
	 *
	 * @since   0.1.0
	 *
	 * @return  void
	 */
	public function init_admin() {

		require_once $this->plugin_dir_path . 'src/Admin.php';
		require_once $this->plugin_dir_path . 'src/AdminStyles.php';
		require_once $this->plugin_dir_path . 'src/Customizer.php';
		require_once $this->plugin_dir_path . 'src/AdminBar.php';

		$manager = new Manager();
		$admin   = new Admin();

		$manager->register( $admin );

	}

	/**
	 * Init front-specific functionality of the plugin.
	 *
	 * @since   0.1.0
	 *
	 * @return  void
	 */
	public function init_front() {

		require_once $this->plugin_dir_path . 'src/Front.php';
		require_once $this->plugin_dir_path . 'src/FrontStyles.php';

		$manager = new Manager();
		$front   = new Front();

		$manager->register( $front );

	}

}