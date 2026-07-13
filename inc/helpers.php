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
 * @param string $key Chave da configuração.
 * @param mixed  $default Valor padrão.
 *
 * @return mixed
 */
function medprime_get_option( $key, $default = '' ) {

	$options = get_option( 'medprime_settings', array() );

	return isset( $options[ $key ] ) ? $options[ $key ] : $default;
}