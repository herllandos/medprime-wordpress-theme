<?php
/**
 * Hero Section
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="hero">

	<div class="container hero-grid">

		<div class="hero-content">

			<span class="hero-badge">

				🏥 Telemedicina • CRM Verificado

			</span>

			<h1>

				<?php echo esc_html( medprime_get_option( 'hero_title', 'Consultas Médicas Online' ) ); ?>

			</h1>

			<p>

				<?php echo esc_html( medprime_get_option(
					'hero_subtitle',
					'Atendimento médico humanizado, rápido e seguro, sem sair de casa.'
				) ); ?>

			</p>

			<div class="hero-actions">

				<a href="<?php echo esc_url( medprime_get_option( 'appointment_url', '#' ) ); ?>" class="btn">

					<?php echo esc_html( medprime_get_option( 'hero_button', 'Agendar Consulta' ) ); ?>

				</a>

			</div>

			<div class="hero-features">

				<div>✔ CRM <?php echo esc_html( medprime_get_option( 'crm', '00000' ) ); ?></div>

				<div>✔ <?php echo esc_html( medprime_get_option( 'specialty', 'Clínico Geral' ) ); ?></div>

				<div>✔ Atendimento Humanizado</div>

			</div>

		</div>

		<div class="hero-image">

			<div class="hero-image-card">

				<div class="hero-avatar">

					👨‍⚕️

				</div>

				<h3>

					<?php echo esc_html( medprime_get_option( 'doctor_name', 'Dr. Nome' ) ); ?>

				</h3>

				<p>

					<?php echo esc_html( medprime_get_option( 'specialty', 'Especialidade' ) ); ?>

				</p>

			</div>

		</div>

	</div>

</section>