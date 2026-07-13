<?php
/**
 * About Doctor Section
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

$photo_id = medprime_get_option( 'doctor_photo' );
?>

<section class="about-doctor">

	<div class="container about-grid">

		<div class="about-image">

			<?php

			if ( $photo_id ) {

				echo wp_get_attachment_image(
					$photo_id,
					'large',
					false,
					array(
						'class' => 'doctor-photo'
					)
				);

			} else {

				echo '<div class="doctor-placeholder">👨‍⚕️</div>';

			}

			?>

		</div>

		<div class="about-content">

			<span class="hero-badge">

				Sobre o Médico

			</span>

			<h2>

				<?php echo esc_html( medprime_get_option( 'doctor_name', 'Dr. Nome' ) ); ?>

			</h2>

			<p>

				Especialista em

				<strong>

					<?php echo esc_html( medprime_get_option( 'specialty', 'Clínica Médica' ) ); ?>

				</strong>

			</p>

			<div class="doctor-info">

				<div>

					<strong>CRM</strong>

					<span><?php echo esc_html( medprime_get_option( 'crm', '-' ) ); ?></span>

				</div>

				<div>

					<strong>RQE</strong>

					<span><?php echo esc_html( medprime_get_option( 'rqe', '-' ) ); ?></span>

				</div>

			</div>

			<p>

				Atendimento personalizado por telemedicina, com foco em qualidade,
				segurança e cuidado individualizado.

			</p>

			<?php

get_template_part(
	'template-parts/components/button',
	null,
	array(
		'text' => 'Agendar Consulta',
		'url'  => medprime_get_option(
			'appointment_url',
			'#'
		),
	)
);

?>

		</div>

	</div>

</section>