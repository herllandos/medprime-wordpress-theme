<?php
/**
 * Menu administrativo do MedPrime.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registra o menu do tema.
 */
function medprime_register_admin_menu() {

	add_theme_page(
		__( 'MedPrime', 'medprime' ),
		__( 'MedPrime', 'medprime' ),
		'edit_theme_options',
		'medprime',
		'medprime_render_admin_page'
	);

}

add_action( 'admin_menu', 'medprime_register_admin_menu' );

/**
 * Carrega os scripts do painel.
 *
 * @param string $hook Hook atual.
 */
function medprime_admin_enqueue_scripts( $hook ) {

	if ( 'appearance_page_medprime' !== $hook ) {
		return;
	}

	wp_enqueue_media();

	wp_enqueue_script(
		'medprime-admin',
		get_template_directory_uri() . '/assets/js/admin.js',
		array( 'jquery' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

}

add_action( 'admin_enqueue_scripts', 'medprime_admin_enqueue_scripts' );