<?php
/**
 * Footer Template
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

?>

<footer class="site-footer">

	<div class="container footer-container">

		<div class="footer-brand">

			<h3>

				<?php echo esc_html( medprime_get_option( 'doctor_name', 'MedPrime' ) ); ?>

			</h3>

			<p>

				<?php echo esc_html( medprime_get_option(
					'hero_subtitle',
					'Atendimento médico online com segurança e praticidade.'
				) ); ?>

			</p>

		</div>

		<div class="footer-contact">

			<h3>Contato</h3>

			<p>

				<?php echo esc_html( medprime_get_option(
					'email',
					'contato@medprime.com'
				) ); ?>

			</p>

			<a
				class="btn"
				href="<?php echo esc_url( medprime_get_option(
					'appointment_url',
					'#'
				) ); ?>">

				Agendar Consulta

			</a>

		</div>

	</div>

	<div class="footer-bottom">

		<div class="container">

			<p>

				© <?php echo esc_html( gmdate( 'Y' ) ); ?>

				<?php echo esc_html( medprime_get_option(
					'doctor_name',
					'MedPrime'
				) ); ?>

			</p>

		</div>

	</div>

</footer>

<?php

get_template_part( 'template-parts/whatsapp-float' );

wp_footer();

?>

</body>

</html>