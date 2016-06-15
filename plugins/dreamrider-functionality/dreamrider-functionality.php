<?php
 /**
 *
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * @package   Dreamrider Functionality
 * @author    Claudine Bananal <claudine.bananal@gmail.com>
 * @license   GPL-2.0+
 * @copyright 2016
=======
<<<<<<< 27a59969ae96bf03c7073d5da856e3f3ca6b9b5b
 * @package   dreamrider Functionality
 * @author    Kyle Minchin <kyleminchin@hotmail.com>
=======
>>>>>>> efe8586280e3803fbd47da70876087ad4ae7d3b8
 * @package   Dreamrider Functionality
 * @author    Your Name <your_email@email.com>
 * @license   GPL-2.0+
 * @copyright 2016 kyle minchin
>>>>>>> 40bac106fcf586019e8ccc9296b1ef7a0623531f
 *
 * @wordpress-plugin
 * Plugin Name: Dreamrider Functionality
 * Description: This very important plugin contains all of the core functionality for this website so that it remains theme-independent.
 * Version:     1.0.0
 * Author:      Kyle Minchin
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define plugin directory
 *
 * @since 1.0.0
 */
define( 'RF_DIR', dirname( __FILE__ ) );

/**
 * General housekeeping and plugin activation tasks
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/general.php' );
register_activation_hook( __FILE__, array( 'RF_General', 'plugin_activation' ) );

/**
 * Post types
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/program-types.php' );
include_once( RF_DIR . '/lib/functions/testimonial-types.php' );

/**
 * Taxonomies
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/taxonomies.php' );
