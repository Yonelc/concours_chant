<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.concourschant.com
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       Contest plugin
 * Plugin URI:        http://www.concourschant.com/
 * Description:       Add/Delete/manage a contest 
 * Version:           1.0.0
 * Author:            Concours chant
 * Author URI:        http://www.concourschant.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       contest
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-contest-activator.php
 */
function activate_contest() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-contest-activator.php';
	Contest_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-contest-deactivator.php
 */
function deactivate_contest() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-contest-deactivator.php';
	Contest_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_contest' );
register_deactivation_hook( __FILE__, 'deactivate_contest' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-contest.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_contest() {

	$plugin = new Contest();
	$plugin->run();

}
run_contest();
