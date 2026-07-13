<?php
/**
 * Helpers do MedPrime.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

/**
 * Retorna uma configuração do tema.
 *
 * @param string $key Chave.
 * @param mixed  $default Valor padrão.
 *
 * @return mixed
 */
function medprime_get_option( $key, $default = '' ) {

	$options = get_option( 'medprime_settings', array() );

	return isset( $options[ $key ] ) ? $options[ $key ] : $default;

}

/**
 * Renderiza todas as seções da Landing.
 */
function medprime_render_home_sections() {

	$sections = array(

	'hero',
	'how-it-works',
	'benefits',
	'about-doctor',
	'testimonials',
	'faq',

);

	foreach ( $sections as $section ) {

		get_template_part( 'template-parts/' . $section );

	}

}

/**
 * Retorna um ícone SVG.
 *
 * @param string $icon Nome do ícone.
 *
 * @return string
 */
function medprime_get_icon( $icon ) {

	$file = get_template_directory() . '/assets/icons/' . $icon . '.svg';

	if ( ! file_exists( $file ) ) {
		return '';
	}

	return file_get_contents( $file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents

}

/**
 * Retorna uma configuração do tema ou seu valor padrão quando estiver vazia.
 *
 * @param string $key Chave.
 * @param mixed  $default Valor padrão.
 *
 * @return mixed
 */
function medprime_get_option_or_default( $key, $default = '' ) {

	$value = medprime_get_option( $key, $default );

	if ( is_string( $value ) && '' === trim( $value ) ) {
		return $default;
	}

	return $value;

}
