<?php
/**
 * Componente: Cabeçalho de seção.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

$args = wp_parse_args(
	$args,
	array(
		'title'       => '',
		'description' => '',
	)
);
?>

<div class="section-title">

	<h2>

		<?php echo esc_html( $args['title'] ); ?>

	</h2>

	<?php if ( ! empty( $args['description'] ) ) : ?>

		<p>

			<?php echo esc_html( $args['description'] ); ?>

		</p>

	<?php endif; ?>

</div>