<?php
/**
 * FAQ Section
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="faq">

	<div class="container">

		<?php

		get_template_part(
			'template-parts/components/section-header',
			null,
			array(
				'title'       => 'Perguntas Frequentes',
				'description' => 'Tire as principais dúvidas antes da sua consulta.',
			)
		);

		?>

		<div class="faq-list">

			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>

				<div class="faq-item">

					<button class="faq-question">

						<?php
						echo esc_html(
							medprime_get_option(
								'faq_question_' . $i,
								'Pergunta ' . $i
							)
						);
						?>

					</button>

					<div class="faq-answer">

						<p>

							<?php
							echo nl2br(
								esc_html(
									medprime_get_option(
										'faq_answer_' . $i,
										'Resposta.'
									)
								)
							);
							?>

						</p>

					</div>

				</div>

			<?php endfor; ?>

		</div>

	</div>

</section>