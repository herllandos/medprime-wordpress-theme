<?php
/**
 * Testimonials section.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="testimonials" aria-labelledby="testimonials-title">

	<div class="container">

		<div class="testimonials-intro">
			<div>
				<p class="testimonials__eyebrow"><?php esc_html_e( 'Experiência dos pacientes', 'medprime' ); ?></p>
				<div id="testimonials-title">
					<?php
					get_template_part(
						'template-parts/components/section-header',
						null,
						array(
							'title'       => 'O que nossos pacientes dizem',
							'description' => 'Depoimentos de pacientes atendidos por telemedicina.',
						)
					);
					?>
				</div>
			</div>

			<div class="testimonials-rating" aria-label="Avaliação máxima dos pacientes">
				<span class="testimonials-rating__stars" aria-hidden="true">★★★★★</span>
				<span><?php esc_html_e( 'Pacientes satisfeitos', 'medprime' ); ?></span>
			</div>
		</div>

		<div class="testimonials-grid">

			<figure class="testimonial-card">
				<div class="testimonial-card__stars" aria-label="5 de 5 estrelas">★★★★★</div>
				<blockquote><?php esc_html_e( 'Excelente atendimento. Muito atencioso e pontual.', 'medprime' ); ?></blockquote>
				<figcaption>
					<span class="testimonial-card__avatar" aria-hidden="true">M</span>
					<strong><?php esc_html_e( 'Mariana S.', 'medprime' ); ?></strong>
				</figcaption>
			</figure>

			<figure class="testimonial-card testimonial-card--featured">
				<div class="testimonial-card__stars" aria-label="5 de 5 estrelas">★★★★★</div>
				<blockquote><?php esc_html_e( 'Consulta rápida e esclarecedora. Recomendo.', 'medprime' ); ?></blockquote>
				<figcaption>
					<span class="testimonial-card__avatar" aria-hidden="true">C</span>
					<strong><?php esc_html_e( 'Carlos A.', 'medprime' ); ?></strong>
				</figcaption>
			</figure>

			<figure class="testimonial-card">
				<div class="testimonial-card__stars" aria-label="5 de 5 estrelas">★★★★★</div>
				<blockquote><?php esc_html_e( 'Muito prático poder consultar sem sair de casa.', 'medprime' ); ?></blockquote>
				<figcaption>
					<span class="testimonial-card__avatar" aria-hidden="true">A</span>
					<strong><?php esc_html_e( 'Ana P.', 'medprime' ); ?></strong>
				</figcaption>
			</figure>

		</div>

	</div>

</section>
