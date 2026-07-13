<?php
/**
 * Enqueue Scripts and Styles
 *
 * @package MedPrime
 */

if (!defined('ABSPATH')) {
    exit;
}

function medprime_enqueue_assets()
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'medprime-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );

    wp_enqueue_style(
        'medprime-base',
        get_template_directory_uri() . '/assets/css/base.css',
        array('medprime-style'),
        $theme_version
    );

    wp_enqueue_style(
        'medprime-layout',
        get_template_directory_uri() . '/assets/css/layout.css',
        array('medprime-base'),
        $theme_version
    );

    wp_enqueue_style(
        'medprime-components',
        get_template_directory_uri() . '/assets/css/components.css',
        array('medprime-layout'),
        $theme_version
    );

    wp_enqueue_style(
        'medprime-responsive',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array('medprime-components'),
        $theme_version
    );

    wp_enqueue_script(
        'medprime-app',
        get_template_directory_uri() . '/assets/js/app.js',
        array(),
        $theme_version,
        true
    );
}

add_action('wp_enqueue_scripts', 'medprime_enqueue_assets');