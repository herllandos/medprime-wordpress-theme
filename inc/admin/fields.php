<?php
/**
 * Campos do painel MedPrime.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

/**
 * Renderiza os campos.
 */
function medprime_render_text_field( $args ) {

	$options = get_option( 'medprime_settings', array() );

	$id = $args['id'];

	$value = isset( $options[ $id ] ) ? $options[ $id ] : '';

	/*
	 * Campo especial para foto do médico.
	 */
	if ( 'doctor_photo' === $id ) :
	?>

		<input
			type="hidden"
			id="doctor_photo"
			name="medprime_settings[doctor_photo]"
			value="<?php echo esc_attr( $value ); ?>"
		/>

		<div id="doctor-photo-preview" style="margin-bottom:15px;">

			<?php

			if ( $value ) {

				echo wp_get_attachment_image(
					$value,
					'thumbnail',
					false,
					array(
						'style' => 'border-radius:12px;max-width:150px;height:auto;'
					)
				);

			}

			?>

		</div>

		<button
			type="button"
			class="button"
			id="medprime-upload-photo">

			Selecionar Foto

		</button>

	<?php

	return;

	endif;

	?>

	<input
		type="text"
		class="regular-text"
		name="medprime_settings[<?php echo esc_attr( $id ); ?>]"
		value="<?php echo esc_attr( $value ); ?>"
	/>

	<?php

}