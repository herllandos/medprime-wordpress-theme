<?php
/**
 * FAQ section.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="faq" aria-labelledby="faq-title">

	<div class="container faq-grid">

		<div class="faq-intro">
			<p class="faq__eyebrow"><?php esc_html_e( 'Dúvidas frequentes', 'medprime' ); ?></p>
			<div id="faq-title">
				<?php
				get_template_part(
					'template-parts/components/section-header',
					null,
					array(
						'title'       => 'Perguntas frequentes',
						'description' => 'Tire as principais dúvidas antes da sua consulta.',
					)
				);
				?>
			</div>
			<p class="faq-intro__note"><?php esc_html_e( 'Ainda precisa de ajuda? Entre em contato para receber orientação.', 'medprime' ); ?></p>
		</div>

		<div class="faq-list">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<?php $question_id = 'faq-question-' . $i; ?>
				<?php $answer_id = 'faq-answer-' . $i; ?>

				<div class="faq-item">
					<button class="faq-question" type="button" id="<?php echo esc_attr( $question_id ); ?>" aria-expanded="false" aria-controls="<?php echo esc_attr( $answer_id ); ?>">
						<span>
							<?php
							echo esc_html(
								medprime_get_option(
									'faq_question_' . $i,
									'Pergunta ' . $i
								)
							);
							?>
						</span>
						<span class="faq-question__icon" aria-hidden="true"></span>
					</button>

					<div class="faq-answer" id="<?php echo esc_attr( $answer_id ); ?>" role="region" aria-labelledby="<?php echo esc_attr( $question_id ); ?>" aria-hidden="true">
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
