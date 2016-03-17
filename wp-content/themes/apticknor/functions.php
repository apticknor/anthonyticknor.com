<?php
/**
 * apticknor Theme
 *
 * @package apticknor
 * @author Anthony ticknor <tony.ticknor@gmail.com>
 */

/* ====================================================================================================
 Theme Support Configuration
==================================================================================================== */
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('menus');
add_theme_support('title-tag');

remove_theme_support('post-formats');
remove_theme_support('custom-background');
remove_theme_support('custom-header');
remove_theme_support('html5');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

if(function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

/* ====================================================================================================
 Enqueue Scripts and Styles
==================================================================================================== */
function include_scripts_and_styles() {

    wp_enqueue_style(
        'apticknor-style',
        get_template_directory_uri() . '/_assets/styles/global.css'
    );

    wp_enqueue_script(
        'apticknor-script',
        get_template_directory_uri() . '/_assets/scripts/global.js',
        array('jquery'),
        '',
        true
    );

}

add_action('wp_enqueue_scripts', 'include_scripts_and_styles');