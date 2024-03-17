<?php
/**
 * Plugin Name:       Basic
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       basic
 *
 * @package           create-block
 */

function basic_block_init() {
    // Register block
    register_block_type( plugin_dir_path(__FILE__). 'blocks/basic/build/block.json' );

    // Add admin menu
    add_action('admin_menu', 'basic_plugin_menu');
}
add_action( 'init', 'basic_block_init' );

function basic_plugin_menu() {
    // Add a top-level menu page
    add_menu_page(
        'Basic',
        'Basic',
        'manage_options',
        'basic-menu',
        'render_basic_menu',
        'dashicons-admin-plugins',
        6
    );
}

function render_basic_menu() {
    // Display the page content
    ?> <h3>Hello from render basic menu function</h3>
	<?php
}

// Enqueue front-end scripts and styles
function basic_enqueue_frontend_assets() {
    wp_enqueue_style( 'basic-frontend-css', plugin_dir_url( __FILE__ ) . 'front/css/style.css', array(), time() );
    wp_enqueue_script( 'basic-frontend-js', plugin_dir_url( __FILE__ ) . 'front/js/main.js', array(), time(), true );
}
add_action( 'wp_enqueue_scripts', 'basic_enqueue_frontend_assets' );

// Enqueue admin scripts and styles
function basic_enqueue_admin_assets() {
    wp_enqueue_style( 'basic-admin-css', plugin_dir_url( __FILE__ ) . 'back/css/style.css', array(), time() );
    wp_enqueue_script( 'basic-admin-js', plugin_dir_url( __FILE__ ) . 'back/js/main.js', array(), time(), true );
}
add_action( 'admin_enqueue_scripts', 'basic_enqueue_admin_assets' );
