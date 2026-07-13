<?php
/**
 * Página administrativa do MedPrime.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

/**
 * Renderiza a página principal.
 */
function medprime_render_admin_page() {
	?>

	<div class="wrap">

		<h1 style="margin-top:20px;">
			MedPrime
		</h1>

		<p>
			<strong>Tema Premium para Telemedicina</strong>
		</p>

		<hr>

		<table class="widefat striped">

			<tbody>

				<tr>

					<td width="220">

						Status

					</td>

					<td>

						✅ Painel carregado com sucesso.

					</td>

				</tr>

				<tr>

					<td>

						Versão

					</td>

					<td>

						<?php echo esc_html( wp_get_theme()->get( 'Version' ) ); ?>

					</td>

				</tr>

				<tr>

					<td>

						PHP

					</td>

					<td>

						<?php echo esc_html( PHP_VERSION ); ?>

					</td>

				</tr>

				<tr>

					<td>

						WordPress

					</td>

					<td>

						<?php echo esc_html( get_bloginfo( 'version' ) ); ?>

					</td>

				</tr>

			</tbody>

		</table>

	</div>

	<?php
}