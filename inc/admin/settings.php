<?php
/**
 * Registro das configurações do MedPrime.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

function medprime_register_settings() {

	register_setting(
		'medprime_settings_group',
		'medprime_settings',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'medprime_sanitize_settings',
			'default'           => array(),
		)
	);

	add_settings_section(
		'medprime_doctor_section',
		'Perfil do Médico',
		'__return_false',
		'medprime'
	);

	$fields = array(

		'doctor_name'       => 'Nome do Médico',
'crm'               => 'CRM',
'rqe'               => 'RQE',
'specialty'         => 'Especialidade',

'doctor_bio'        => 'Biografia',
'doctor_education'  => 'Formação',
'doctor_experience' => 'Experiência',

'doctor_photo'      => 'Foto do Médico',
'whatsapp'          => 'WhatsApp',
		'email'           => 'E-mail',
		'instagram'       => 'Instagram',
		'appointment_url' => 'Link de Agendamento',
		'hero_title'      => 'Título da Hero',
		'hero_subtitle'   => 'Subtítulo da Hero',
		'hero_button'     => 'Texto do Botão',

	);

	foreach ( $fields as $id => $label ) {

		add_settings_field(
			$id,
			$label,
			'medprime_render_text_field',
			'medprime',
			'medprime_doctor_section',
			array(
				'id' => $id,
			)
		);

	}

}

add_action( 'admin_init', 'medprime_register_settings' );

function medprime_sanitize_settings( $input ) {

	$output = array();

	foreach ( $input as $key => $value ) {

		switch ( $key ) {

			case 'email':
				$output[ $key ] = sanitize_email( $value );
				break;

			case 'appointment_url':
			case 'instagram':
				$output[ $key ] = esc_url_raw( $value );
				break;

			default:
				$output[ $key ] = sanitize_text_field( $value );
				break;

		}

	}

	return $output;

}