<?php

/**
 * @link              http://www.logichub.co.uk/
 * @since             1.0.0
 * @package           urdu-fonts-support
 *
 * @wordpress-plugin
 * Plugin Name:       Urdu Fonts Support
 * Plugin URI:        http://www.logichub.co.uk/
 * Description:       Easily add beautiful Nastaleeq Urdu Font support into your WordPress website.
 * Version:           1.0.0
 * Author:            Kashif Rafique - LogicHub Web Services
 * Author URI:        http://www.logichub.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lh-urdu-fonts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-lh-urdu-fonts-support-activator.php
 */
function activate_lh_urdu_fonts_support() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lh-urdu-fonts-support-activator.php';
	LH_Urdu_Fonts_Support_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-lh-urdu-fonts-support-deactivator.php
 */
function deactivate_lh_urdu_fonts_support() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lh-urdu-fonts-support-deactivator.php';
	LH_Urdu_Fonts_Support_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_lh_urdu_fonts_support' );
register_deactivation_hook( __FILE__, 'deactivate_lh_urdu_fonts_support' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-lh-urdu-fonts-support.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_lh_urdu_fonts_support() {

	$plugin = new LH_Urdu_Fonts_Support();
	$plugin->run();

}
run_lh_urdu_fonts_support();
