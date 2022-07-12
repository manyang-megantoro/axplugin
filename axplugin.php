<?php
/**
 * axplugin
 *
 * @package       AXPLUGIN
 * @author        manyang megantoro
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   axplugin
 * Plugin URI:    https://atapx.com/product/plugins/axplugin
 * Description:   Boiler Wordpress Plugin
 * Version:       1.0.0
 * Author:        manyang megantoro
 * Author URI:    https://manyang-megantoro.id
 * Text Domain:   axplugin
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with axplugin. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

use Core\Axplugin;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Load list constanta
 */
require 'config.php';

/**
 * Load autoload composer
 */
require 'vendor/autoload.php';

/**
 * The main function to load the only instance
 * of our master class.
 *
 * @author  manyang megantoro
 * @since   1.0.0
 * @return  object|Axapi
 */
function AXPLUGIN() {
	return Axplugin::instance();
}

AXPLUGIN();