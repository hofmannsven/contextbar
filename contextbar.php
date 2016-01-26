<?php namespace ContextBar;

/**
 * WordPress Context Bar
 *
 * @package     WpContextBar
 * @author      Sven Hofmann <info@hofmannsven.com>
 * @license     GPLv3
 * @link        https://github.com/hofmannsven/contextbar
 *
 * @wordpress-plugin
 * Plugin Name: Context Bar
 * Plugin URI:  https://github.com/hofmannsven/contextbar
 * Description: Hooks into the WordPress admin bar to add contextual information to the instance of your site.
 * Version:     0.1.0
 * Author:      Sven Hofmann
 * Author URI:  https://hofmannsven.com
 * License:     GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain: contextbar
 * Domain Path: /languages
 */

if ( ! class_exists( 'ContextBar' ) ) {
	require_once plugin_dir_path( __FILE__ ) . 'src/ContextBar.php';
	$contextbar = new ContextBar();
	$contextbar->init();
}