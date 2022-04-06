<?php
/**
 * Plugin Name:       To Do List
 * Description:       Display and edit todos in the data store.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Someone
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       blocks-course-todo-list
 *
 * @package           blocks-course
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function blocks_course_todo_list_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'blocks_course_todo_list_block_init' );

function blocks_course_todo_list_set_translations() {
    wp_set_script_translations('blocks-course-todo-list-editor-script', 'blocks-course-todo-list', plugin_dir_path(__FILE__) . 'languages');
}

add_action('init', 'blocks_course_todo_list_set_translations');
