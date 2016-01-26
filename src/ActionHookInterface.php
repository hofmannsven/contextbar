<?php namespace ContextBar;

/**
 * Action hook interface.
 *
 * Adapted from Carl Alexander:
 * https://carlalexander.ca/discover-object-oriented-programming/
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
interface ActionHookInterface {

	/**
	 * Returns an array of actions that the object needs to be subscribed to.
	 *
	 * The array key is the name of the action hook.
	 *
	 * The value must be an array with the method name, priority and number of accepted arguments.
	 *
	 * $method_name = 'method_name';
	 * $priority = 10;
	 * $accepted_args = 1;
	 *
	 * array( 'action_name' => array( $method_name, $priority, $accepted_args ) )
	 *
	 * @return array
	 */
	public function get_actions();

}