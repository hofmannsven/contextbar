<?php namespace ContextBar;

/**
 * Admin-specific styles of the plugin.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class AdminStyles extends Style implements EnqueueableInterface {

	/**
	 * Register and enqueue admin styles.
	 *
	 * @since  0.1.0
	 *
	 * @return void
	 */
	public function load() {

		$this->register();
		$this->enqueue();
		$this->add_inline_style();

	}

}