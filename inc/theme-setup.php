<?php
/**
 * Theme Setup
 *
 * @package MedPrime
 */

if (!defined('ABSPATH')) {
    exit;
}

function medprime_theme_setup()
{
    load_theme_textdomain(
        'medprime',
        get_template_directory() . '/languages'
    );

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    add_theme_support('responsive-embeds');

    add_theme_support('editor-styles');

    add_theme_support('wp-block-styles');

    add_theme_support('align-wide');

    register_nav_menus(
        array(
            'primary' => __('Menu Principal', 'medprime'),
            'footer'  => __('Menu Rodapé', 'medprime'),
        )
    );
}

add_action('after_setup_theme', 'medprime_theme_setup');