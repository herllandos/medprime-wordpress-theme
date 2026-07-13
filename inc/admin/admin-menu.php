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