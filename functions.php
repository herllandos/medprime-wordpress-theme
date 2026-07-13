<?php
/**
 * MedPrime Theme
 *
 * @package MedPrime
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Arquivos do tema
 */
$medprime_files = array(

    // Core
    'theme-setup',
    'enqueue',
    'schema',
    'seo',
    'performance',
    'helpers',

    // Painel Administrativo
    'admin/admin-menu',
    'admin/admin-page',
    'admin/settings',
    'admin/fields',

);

foreach ($medprime_files as $file) {

    $path = get_template_directory() . '/inc/' . $file . '.php';

    if (file_exists($path)) {
        require_once $path;
    }

}