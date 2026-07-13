<?php
/**
 * Campos do painel MedPrime.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

/**
 * Renderiza um campo de texto.
 *
 * @param array $args Argumentos do campo.
 */
function medprime_render_text_field( $args ) {

	$options = get_option( 'medprime_settings', array() );

	$id = $args['id'];

	$value = isset( $options[ $id ] ) ? $options[ $id ] : '';

	?>

	<input
		type="text"
		class="regular-text"
		name="medprime_settings[<?php echo esc_attr( $id ); ?>]"
		value="<?php echo esc_attr( $value ); ?>"
	/>

	<?php
}