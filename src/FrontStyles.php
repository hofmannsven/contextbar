<?php namespace ContextBar;

/**
 * Front-specific styles of the plugin.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
class FrontStyles extends Style implements EnqueueableInterface {

	/**
	 * Register and enqueue front styles.
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