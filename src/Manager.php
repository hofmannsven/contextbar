<?php namespace ContextBar;

/**
 * Register and add WordPress plugin action hooks.
 *
 * Adapted from Carl Alexander:
 * https://carlalexander.ca/discover-object-oriented-programming/
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class Manager {

	/**
	 * Register an object with the WordPress Plugin API.
	 *
	 * @since  0.1.0
	 *
	 * @param  ActionHookInterface $object
	 *
	 * @return void
	 */
	public function register( ActionHookInterface $object ) {

		foreach ( $object->get_actions() as $name => $parameters ) {
			$this->register_action( $object, $name, $parameters );
		}

	}

	/**
	 * Register an object with a specific action hook.
	 *
	 * @since  0.1.0
	 *
	 * @param  ActionHookInterface $object
	 * @param  string              $hook
	 * @param  mixed               $parameters
	 *
	 * @return void
	 */
	private function register_action( ActionHookInterface $object, $hook, $parameters ) {

		add_action(
			$hook,
			array( $object, $parameters[ 0 ] ),
			isset( $parameters[ 1 ] ) ? $parameters[ 1 ] : 10,
			isset( $parameters[ 2 ] ) ? $parameters[ 2 ] : 1
		);

	}

}