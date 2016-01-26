<?php namespace ContextBar;

/**
 * Enqueueable interface.
 *
 * @package WpContextBar
 * @author  Sven Hofmann <info@hofmannsven.com>
 */
interface EnqueueableInterface {

	/**
	 * Enqueue all plugin-specific styles.
	 *
	 * Enqueue registered dependencies using `wp_enqueue_style` or `wp_add_inline_style`.
	 *
	 * @return void
	 */
	public function enqueue();

	/**
	 * Register and enqueue all plugin-specific styles.
	 *
	 * Typically called via WordPress hooks like `wp_enqueue_scripts` or `admin_enqueue_scripts`.
	 *
	 * $this->register();
	 * $this->enqueue();
	 * $this->add_inline_style();
	 *
	 * @return void
	 */
	public function load();

}