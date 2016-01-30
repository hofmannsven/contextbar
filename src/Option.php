<?php namespace ContextBar;

/**
 * Handle plugin option with defaults.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class Option {

	/**
	 * Limit name to plugin option only.
	 *
	 * @var string
	 */
	private $option_name;

	/**
	 * Option constructor.
	 *
	 * @since 0.1.1
	 *
	 * @param string $option_name
	 */
	public function __construct( $option_name ) {

		$this->option_name = $option_name;

	}

	/**
	 * Return default option with value.
	 *
	 * @since 0.1.0
	 *
	 * @return array
	 */
	private function get_default() {

		return array(
			'name'  => esc_html__( 'Localhost', 'contextbar' ),
			'color' => '#9c0006',
		);

	}

	/**
	 * Get plugin option from database.
	 *
	 * @since 0.1.0
	 *
	 * @return bool|array
	 */
	protected function load_option() {

		return get_option( $this->option_name );

	}

	/**
	 * Check if plugin option with value exists.
	 *
	 * @since 0.1.0
	 *
	 * @param $name
	 *
	 * @return bool
	 */
	public function has_option( $name ) {

		$return  = FALSE;
		$options = $this->load_option();

		if ( $options && isset( $options[ $name ] ) ) {
			$return = TRUE;
		}

		return $return;

	}

	/**
	 * Return the (default) plugin option array.
	 *
	 * @since 0.1.0
	 *
	 * @param $name
	 *
	 * @return array
	 */
	public function get_option( $name ) {

		$options = $this->get_default();

		if ( $this->has_option( $name ) ) {
			$options = $this->load_option();
		}

		return $options;

	}

	/**
	 * Return the (default) plugin option value.
	 *
	 * @since 0.1.0
	 *
	 * @param $name
	 *
	 * @return string
	 */
	public function get_value( $name ) {

		$value  = '';
		$option = $this->get_option( $name );

		if ( isset( $option[ $name ] ) ) {
			$value = $option[ $name ];
		}

		return $value;

	}

}