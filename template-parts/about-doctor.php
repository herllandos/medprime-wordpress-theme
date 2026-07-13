<?php
/**
 * About doctor section.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

$photo_id    = medprime_get_option( 'doctor_photo' );
$doctor_name = medprime_get_option_or_default( 'doctor_name', __( 'Dr. Nome', 'medprime' ) );
?>

<section class="about-doctor" aria-labelledby="about-doctor-title">

	<div class="container about-grid">

		<div class="about-image">
			<div class="about-image__frame">
				<?php
				if ( $photo_id ) {
					echo wp_get_attachment_image(
						$photo_id,
						'large',
						false,
						array(
							'class' => 'about-doctor-photo',
						)
					);
				} else {
					?>
					<img class="about-doctor-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doctor-placeholder.webp' ) ); ?>" alt="<?php echo esc_attr( $doctor_name ); ?>" loading="lazy">
					<?php
				}
				?>
			</div>

			<div class="about-image__credential">
				<span><?php esc_html_e( 'Atendimento online', 'medprime' ); ?></span>
				<strong><?php esc_html_e( 'Em todo o Brasil', 'medprime' ); ?></strong>
			</div>
		</div>

		<div class="about-content">
			<p class="about-content__eyebrow"><?php esc_html_e( 'Conheça seu médico', 'medprime' ); ?></p>

			<h2 id="about-doctor-title"><?php echo esc_html( $doctor_name ); ?></h2>

			<p class="about-content__specialty">
				<?php esc_html_e( 'Especialista em', 'medprime' ); ?>
				<strong><?php echo esc_html( medprime_get_option( 'specialty', 'Clínica Médica' ) ); ?></strong>
			</p>

			<p class="about-content__bio">
				<?php
				echo nl2br(
					esc_html(
						medprime_get_option(
							'doctor_bio',
							'Atendimento personalizado por telemedicina, com foco em qualidade, segurança e cuidado individualizado.'
						)
					)
				);
				?>
			</p>

			<dl class="doctor-info">
				<div>
					<dt><?php esc_html_e( 'CRM', 'medprime' ); ?></dt>
					<dd><?php echo esc_html( medprime_get_option( 'crm', '-' ) ); ?></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'RQE', 'medprime' ); ?></dt>
					<dd><?php echo esc_html( medprime_get_option( 'rqe', '-' ) ); ?></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Formação', 'medprime' ); ?></dt>
					<dd><?php echo esc_html( medprime_get_option( 'doctor_education', '-' ) ); ?></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Experiência', 'medprime' ); ?></dt>
					<dd><?php echo esc_html( medprime_get_option( 'doctor_experience', '-' ) ); ?></dd>
				</div>
			</dl>

			<?php
			get_template_part(
				'template-parts/components/button',
				null,
				array(
					'text'  => medprime_get_option_or_default( 'hero_button', 'Agendar Consulta' ),
					'url'   => medprime_get_option_or_default( 'appointment_url', '#' ),
					'class' => 'about-content__cta',
				)
			);
			?>

		</div>

	</div>

</section>
