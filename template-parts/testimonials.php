<?php
/**
 * Testimonials Section
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="testimonials">

	<div class="container">

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

		<div class="testimonials-grid">

			<div class="testimonial-card">

				<p>
					★★★★★
				</p>

				<p>
					Excelente atendimento. Muito atencioso e pontual.
				</p>

				<strong>
					Mariana S.
				</strong>

			</div>

			<div class="testimonial-card">

				<p>
					★★★★★
				</p>

				<p>
					Consulta rápida e esclarecedora. Recomendo.
				</p>

				<strong>
					Carlos A.
				</strong>

			</div>

			<div class="testimonial-card">

				<p>
					★★★★★
				</p>

				<p>
					Muito prático poder consultar sem sair de casa.
				</p>

				<strong>
					Ana P.
				</strong>

			</div>

		</div>

	</div>

</section>