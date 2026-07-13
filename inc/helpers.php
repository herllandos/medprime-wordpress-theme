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
 *
 * Toda nova seção deverá ser adicionada apenas aqui.
 */
function medprime_render_home_sections() {

	$sections = array(

		'hero',
		'how-it-works',
		'benefits',
		'about-doctor',
		'testimonials',

	);

	foreach ( $sections as $section ) {

		get_template_part( 'template-parts/' . $section );

	}

}