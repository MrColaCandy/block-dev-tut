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
	register_block_type( plugin_dir_path(__FILE__). 'blocks/basic/build/block.json' );
}
add_action( 'init', 'basic_block_init' );