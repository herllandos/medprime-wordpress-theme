<?php
/**
 * How it works section.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="how-it-works" aria-labelledby="how-it-works-title">

	<div class="container">

		<p class="how-it-works__eyebrow"><?php esc_html_e( 'Uma experiência simples', 'medprime' ); ?></p>

		<div id="how-it-works-title">
			<?php
			get_template_part(
				'template-parts/components/section-header',
				null,
				array(
					'title'       => 'Como funciona',
					'description' => 'Em poucos minutos você agenda e realiza sua consulta online.',
				)
			);
			?>
		</div>

		<ol class="steps-grid">
			<li class="step-card">
				<span class="step-number" aria-hidden="true">01</span>
				<div class="step-content">
					<h3><?php esc_html_e( 'Agende sua consulta', 'medprime' ); ?></h3>
					<p><?php esc_html_e( 'Escolha o melhor horário para seu atendimento.', 'medprime' ); ?></p>
				</div>
			</li>

			<li class="step-card">
				<span class="step-number" aria-hidden="true">02</span>
				<div class="step-content">
					<h3><?php esc_html_e( 'Receba o link', 'medprime' ); ?></h3>
					<p><?php esc_html_e( 'O acesso é enviado logo após o agendamento.', 'medprime' ); ?></p>
				</div>
			</li>

			<li class="step-card">
				<span class="step-number" aria-hidden="true">03</span>
				<div class="step-content">
					<h3><?php esc_html_e( 'Consulte de onde estiver', 'medprime' ); ?></h3>
					<p><?php esc_html_e( 'Atendimento seguro por videochamada.', 'medprime' ); ?></p>
				</div>
			</li>
		</ol>

	</div>

</section>
