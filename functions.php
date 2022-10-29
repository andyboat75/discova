<?php

/**
 * Theme Fuctions.
 * 
 * @package Discova
 */

// define path
if (!defined('DISCOVA_DIR_PATH')) {
    define('DISCOVA_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('DISCOVA_DIR_UIR')) {
    define('DISCOVA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once DISCOVA_DIR_PATH . '/inc/helpers/autoloader.php';

function discova_get_theme_instance()
{
    \DISCOVA_THEME\Inc\DISCOVA_THEME::get_instance();
}

discova_get_theme_instance();


function discova_enqueue_scripts()
{
}
