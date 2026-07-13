<?php
/**
 * Hero section.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

$photo_id    = medprime_get_option( 'doctor_photo' );
$doctor_name = medprime_get_option_or_default( 'doctor_name', __( 'Dr(a). Especialista', 'medprime' ) );
$crm         = medprime_get_option_or_default( 'crm', __( 'Consulte o CRM', 'medprime' ) );
$specialty   = medprime_get_option_or_default( 'specialty', __( 'Medicina especializada', 'medprime' ) );
$hero_title  = medprime_get_option_or_default( 'hero_title', 'Consultas Médicas Online' );
$subtitle     = medprime_get_option_or_default( 'hero_subtitle', 'Atendimento médico humanizado, rápido e seguro.' );
$button_text  = medprime_get_option_or_default( 'hero_button', 'Agendar Consulta' );
$button_url   = medprime_get_option_or_default( 'appointment_url', '#' );
?>

<section class="hero" aria-labelledby="hero-title">

	<div class="container hero-grid">

		<div class="hero-content">

			<p class="hero-badge">
				<span class="hero-badge__indicator" aria-hidden="true"></span>
				<?php esc_html_e( 'Telemedicina com atendimento humanizado', 'medprime' ); ?>
			</p>

			<h1 id="hero-title">
				<?php echo esc_html( $hero_title ); ?>
			</h1>

			<p class="hero-description">
				<?php
				echo esc_html( $subtitle );
				?>
			</p>

			<div class="hero-actions">
				<?php
				get_template_part(
					'template-parts/components/button',
					null,
					array(
						'text'  => $button_text,
						'url'   => $button_url,
						'class' => 'hero-cta',
					)
				);
				?>
				<span class="hero-actions__note"><?php esc_html_e( 'Agendamento simples e seguro', 'medprime' ); ?></span>
			</div>

			<ul class="hero-benefits">
				<li><?php esc_html_e( 'Atendimento online, onde você estiver', 'medprime' ); ?></li>
				<li><?php esc_html_e( 'Receita e atestado digitais quando necessários', 'medprime' ); ?></li>
				<li><?php esc_html_e( 'Consulta particular com horário marcado', 'medprime' ); ?></li>
			</ul>

			<div class="hero-reviews" aria-label="Avaliações no Google">
				<div class="hero-reviews__stars" aria-hidden="true">★★★★★</div>
				<div>
					<strong><?php esc_html_e( 'Excelente atendimento', 'medprime' ); ?></strong>
					<span><?php esc_html_e( 'Avaliações verificadas no Google', 'medprime' ); ?></span>
				</div>
			</div>

		</div>

		<div class="hero-media">
			<div class="hero-media__backdrop" aria-hidden="true"></div>

			<div class="hero-photo">
				<?php
				if ( $photo_id ) {
					echo wp_get_attachment_image(
						$photo_id,
						'large',
						false,
						array(
							'class'   => 'hero-doctor-photo',
							'loading' => 'eager',
							'fetchpriority' => 'high',
						)
					);
				} else {
					?>
					<img class="hero-doctor-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doctor-placeholder.webp' ) ); ?>" alt="<?php echo esc_attr( $doctor_name ); ?>" loading="eager" fetchpriority="high">
					<?php
				}
				?>
			</div>

			<div class="hero-doctor-card">
				<span class="hero-doctor-card__label"><?php esc_html_e( 'Seu cuidado começa aqui', 'medprime' ); ?></span>
				<strong><?php echo esc_html( $doctor_name ); ?></strong>
				<span><?php echo esc_html( $specialty ); ?></span>
				<span class="hero-doctor-card__crm"><?php echo esc_html( sprintf( 'CRM %s', $crm ) ); ?></span>
			</div>
		</div>

	</div>

</section>
