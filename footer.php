<?php
/**
 * Footer template.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

$doctor_name = medprime_get_option_or_default( 'doctor_name', 'MedPrime' );
$email       = medprime_get_option_or_default( 'email', 'contato@medprime.com' );
?>

<footer class="site-footer">

	<div class="container footer-container">

		<div class="footer-brand">
			<a class="footer-brand__name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php echo esc_html( $doctor_name ); ?>
			</a>
			<p>
				<?php
				echo esc_html( medprime_get_option_or_default( 'hero_subtitle', 'Atendimento médico online com segurança e praticidade.' ) );
				?>
			</p>
		</div>

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<div class="footer-navigation">
				<h2><?php esc_html_e( 'Navegação', 'medprime' ); ?></h2>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => 'footer-menu',
						'fallback_cb'    => false,
					)
				);
				?>
			</div>
		<?php endif; ?>

		<div class="footer-contact">
			<h2><?php esc_html_e( 'Fale conosco', 'medprime' ); ?></h2>
			<a class="footer-contact__email" href="mailto:<?php echo esc_attr( antispambot( $email ) ); ?>">
				<?php echo esc_html( antispambot( $email ) ); ?>
			</a>
			<?php
			get_template_part(
				'template-parts/components/button',
				null,
				array(
					'text'  => medprime_get_option_or_default( 'hero_button', 'Agendar Consulta' ),
					'url'   => medprime_get_option_or_default( 'appointment_url', '#' ),
					'class' => 'footer-contact__cta',
				)
			);
			?>
		</div>

	</div>

	<div class="footer-bottom">
		<div class="container">
			<p>
				<?php
				echo esc_html(
					sprintf(
						/* translators: 1: Current year. 2: Doctor or brand name. */
						__( '© %1$s %2$s. Todos os direitos reservados.', 'medprime' ),
						gmdate( 'Y' ),
						$doctor_name
					)
				);
				?>
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
