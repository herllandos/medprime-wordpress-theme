<?php
/**
 * Benefits section.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="benefits" aria-labelledby="benefits-title">

	<div class="container">

		<div class="benefits-intro">
			<div>
				<p class="benefits__eyebrow"><?php esc_html_e( 'Cuidado sem atrito', 'medprime' ); ?></p>
				<div id="benefits-title">
					<?php
					get_template_part(
						'template-parts/components/section-header',
						null,
						array(
							'title'       => 'Por que escolher o MedPrime?',
							'description' => 'Atendimento moderno, seguro e focado na sua comodidade.',
						)
					);
					?>
				</div>
			</div>

			<p class="benefits-intro__summary"><?php esc_html_e( 'Tecnologia quando importa. Atenção humana em todos os momentos.', 'medprime' ); ?></p>
		</div>

		<div class="benefits-grid">

			<article class="benefit-card benefit-card--featured">
				<div class="benefit-icon" aria-hidden="true"><?php echo medprime_get_icon( 'shield' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
				<h3><?php esc_html_e( 'Atendimento seguro', 'medprime' ); ?></h3>
				<p><?php esc_html_e( 'Suas consultas acontecem em ambiente seguro e com total privacidade.', 'medprime' ); ?></p>
			</article>

			<article class="benefit-card">
				<div class="benefit-icon" aria-hidden="true"><?php echo medprime_get_icon( 'clock' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
				<h3><?php esc_html_e( 'Agendamento rápido', 'medprime' ); ?></h3>
				<p><?php esc_html_e( 'Escolha o melhor horário e agende sua consulta em poucos minutos.', 'medprime' ); ?></p>
			</article>

			<article class="benefit-card">
				<div class="benefit-icon" aria-hidden="true"><?php echo medprime_get_icon( 'heart' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
				<h3><?php esc_html_e( 'Atendimento humanizado', 'medprime' ); ?></h3>
				<p><?php esc_html_e( 'Consulta com tempo adequado, escuta ativa e atenção individualizada.', 'medprime' ); ?></p>
			</article>

			<article class="benefit-card benefit-card--accent">
				<div class="benefit-icon" aria-hidden="true"><?php echo medprime_get_icon( 'globe' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
				<h3><?php esc_html_e( 'Atendimento em todo o Brasil', 'medprime' ); ?></h3>
				<p><?php esc_html_e( 'Realize sua consulta online de qualquer lugar, com conforto e praticidade.', 'medprime' ); ?></p>
			</article>

		</div>

	</div>

</section>
