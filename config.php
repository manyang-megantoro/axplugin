<?php
/**
 * Currently plugin name.
 * Give your plugin name with lowercase string.
 */
define( 'AXPLUGIN_NAME', 'axplugin' );

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'AXPLUGIN_VERSION', '1.0.0' );

// Plugin base
define( 'AXPLUGIN_BASE',	plugin_basename( __FILE__  ) );

// Plugin Folder Path
define( 'AXPLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Plugin Folder URL
define( 'AXPLUGIN_URL',	plugin_dir_url( __FILE__ ) );

define( 'AXPLUGIN_CORE', AXPLUGIN_DIR.'src/Core/' );
define( 'AXPLUGIN_INC', AXPLUGIN_DIR.'src/Includes/' );
define( 'AXPLUGIN_RSC', AXPLUGIN_DIR.'src/Resources/' );
define( 'AXPLUGIN_AST', AXPLUGIN_RSC.'assets/' );
define( 'AXPLUGIN_VIEW', AXPLUGIN_RSC.'views/' );