<?php namespace ContextBar;

/**
 * Handle plugin styles.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
abstract class Style {

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
	 * Register plugin styles with dependencies.
	 *
	 * @since  0.1.0
	 *
	 * @return void
	 */
	public function register() {

		wp_register_style(
			'contextbar',
			plugins_url( '/', dirname( __FILE__ ) ) . 'resources/css/contextbar.min.css',
			array(),
			'0.1.1',
			'all'
		);

	}

	/**
	 * Enqueue admin styles.
	 *
	 * @since  0.1.0
	 *
	 * @return void
	 */
	public function enqueue() {

		wp_enqueue_style( 'contextbar' );

	}

	/**
	 * Add inline styles from options (only if has custom option).
	 *
	 * @since  0.1.0
	 *
	 * @return void
	 */
	public function add_inline_style() {

		if ( $this->option->has_option( 'color' ) ) {

			$color = $this->option->get_value( 'color' );
			$custom_css = '#wpadminbar:before { background-color: ' . $color . '}';
			wp_add_inline_style( 'contextbar', $custom_css );

		}

	}

}