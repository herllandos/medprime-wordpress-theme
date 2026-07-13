<?php
/**
 * Admin Menu
 *
 * @package MedPrime
 */

if (!defined('ABSPATH')) {
    exit;
}

function medprime_admin_menu()
{
    add_menu_page(

        __('MedPrime', 'medprime'),

        __('MedPrime', 'medprime'),

        'manage_options',

        'medprime',

        'medprime_admin_dashboard',

        'dashicons-heart',

        30

    );
}

add_action('admin_menu', 'medprime_admin_menu');