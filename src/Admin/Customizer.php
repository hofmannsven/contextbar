<?php namespace ContextBar\Admin;

/**
 * Extend the WordPress customizer.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class Customizer {

	/**
	 * Add new settings to `\WP_Customize_Manager`.
	 *
	 * @since  0.2.0
	 *
	 * @param  \WP_Customize_Manager $wp_customize
	 *
	 * @return void
	 */
	public function add( \WP_Customize_Manager $wp_customize ) {

		// Add new section to the WordPress customizer.
		$wp_customize->add_section(
			'contextbar_section',
			array(
				'title'       => esc_html__( 'Context Bar', 'contextbar' ),
				'description' => esc_html__( 'Customize the name and the color of the WordPress Context Bar.', 'contextbar' ),
				'priority'    => 20,
			)
		);

		// Add setting for `name`.
		$wp_customize->add_setting(
			'contextbar[name]',
			array(
				'default'    => esc_html__( 'Localhost', 'contextbar' ),
				'capability' => 'edit_theme_options',
				'type'       => 'option',
			)
		);

		// Add control for `name`.
		$wp_customize->add_control(
			'contextbar_name',
			array(
				'label'    => esc_html__( 'Name', 'contextbar' ),
				'section'  => 'contextbar_section',
				'settings' => 'contextbar[name]',
			)
		);

		// Add setting for `color`.
		$wp_customize->add_setting(
			'contextbar[color]',
			array(
				'default'           => '#e14d43',
				'sanitize_callback' => 'sanitize_hex_color',
				'capability'        => 'edit_theme_options',
				'type'              => 'option',

			)
		);

		// Add control for `color`.
		$wp_customize->add_control(
			new \WP_Customize_Color_Control(
				$wp_customize,
				'contextbar_color',
				array(
					'label'    => esc_html__( 'Color', 'contextbar' ),
					'section'  => 'contextbar_section',
					'settings' => 'contextbar[color]',
				)
			)
		);

	}

}