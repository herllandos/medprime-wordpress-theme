<?php
/**
 * Página administrativa do MedPrime.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

/**
 * Renderiza a página principal do MedPrime.
 */
function medprime_render_admin_page() {
	?>

	<div class="wrap">

		<h1><?php esc_html_e( 'MedPrime', 'medprime' ); ?></h1>

		<p><?php esc_html_e( 'Painel Administrativo do Tema.', 'medprime' ); ?></p>

		<form method="post" action="options.php">

			<?php
			settings_fields( 'medprime_settings_group' );
			do_settings_sections( 'medprime' );
			submit_button( __( 'Salvar Alterações', 'medprime' ) );
			?>

		</form>

	</div>

	<?php
}