<?php namespace ContextBar\Front;

use ContextBar\EnqueueableInterface;
use ContextBar\Style;

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
	 * @since  0.2.0
	 *
	 * @return void
	 */
	public function load() {

		if ( is_user_logged_in() ) {
			$this->register();
			$this->enqueue();
			$this->add_inline_style();
		}

	}

}