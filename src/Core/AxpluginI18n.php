<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://manyang-megantoro.id
 * @since      1.0.0
 *
 * @package    Axplugin
 * @subpackage Axplugin/includes
 */
namespace Core;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Axplugin
 * @subpackage Axplugin/includes
 * @author     manyang megantoro <manyang.megantoro@gmail.com>
 */
class AxpluginI18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			AXPLUGIN_NAME,
			false,
			AXPLUGIN_RSC . 'lang'
		);

	}
}
