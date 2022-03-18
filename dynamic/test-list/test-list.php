<?php
/**
 * Plugin Name:       Test List
 * Description:       Example static block scaffolded with Create Block tool.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       test-list
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

function render_block_backend($attributes, $content)
{
	$text = $attributes['text'];
	return sprintf('<p class="wp-block-create-block-wholesome-plugin">%1$s</p>', $text);
}

function create_block_test_list_block_init() {
	register_block_type( __DIR__ . '/build', array(
		'render_callback' => 'render_block_backend'
	) );
}
add_action( 'init', 'create_block_test_list_block_init' );
