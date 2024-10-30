<?php
/**
 * Plugin Name:    Inline CSS block for Gutenberg
 * Plugin URI:     https://WPBrigade.com/
 * Description:    This plugin adds an Above the fold CSS in your webpages to reduce page load time or Any custom needs for your designs.
 * Version:        1.0.0
 * Author:         WPBrigade
 * Author URI:     https://WPBrigade.com/
 * Text Domain:    inline-css-block-gutenberg
 * Domain Path:    /languages
 *
 * @package loginpress
 * @category Core
 * @author WPBrigade
 */


// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


function inline_css_block_gutenberg_editor_assets() {
	//enqueuing our blocks main script
	wp_enqueue_script( 'inline_css_block_gutenberg_js', plugins_url( 'index.min.js', __FILE__ ), array( 'wp-blocks', 'wp-element' ) , filemtime( plugin_dir_path( __FILE__ ) . 'index.min.js' ) );
	//enqueuing our blocks editor style sheet
	wp_enqueue_style ( 'inline_css_block_gutenberg_css', plugins_url( 'editor.min.css', __FILE__ ), array(), filemtime( plugin_dir_path( __FILE__ ) . 'editor.min.css' ) );

}

add_action( 'enqueue_block_editor_assets', 'inline_css_block_gutenberg_editor_assets');