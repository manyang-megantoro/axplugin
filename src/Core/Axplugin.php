<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://manyang-megantoro.id
 * @since      1.0.0
 *
 * @package    Axapi
 * @subpackage Axapi/includes
 */
namespace Core;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Axapi
 * @subpackage Axapi/includes
 * @author     manyang megantoro <manyang.megantoro@gmail.com>
 */

class Axplugin{
	/**
	 * The real instance
	 *
	 * @access	private
	 * @since	1.0.0
	 * @var		object|Axplugin
	 */
	private static $instance;

    /**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      AxpluginLoader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Main Axplugin Instance.
	 *
	 * Insures that only one instance of Axplugin exists in memory at any one
	 * time. Also prevents needing to define globals all over the place.
	 *
	 * @access		public
	 * @since		1.0.0
	 * @static
	 * @return		object|Axplugin	The one true Axplugin
	 */
	public static function instance() {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Axplugin ) ) {
			self::$instance	= new Axplugin;
			self::$instance->run();
		}

		return self::$instance;
	}

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		$this->version = AXPLUGIN_VERSION;
		$this->plugin_name = AXPLUGIN_NAME;
		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		$this->loader = new AxpluginLoader();
		$this->set_locale();
	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the AxpluginI18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new AxpluginI18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}
}