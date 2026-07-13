<?php
/**
 * Componente Botão
 *
 * Uso:
 * get_template_part(
 *     'template-parts/components/button',
 *     null,
 *     array(
 *         'text' => 'Agendar Consulta',
 *         'url'  => '#'
 *     )
 * );
 */

defined( 'ABSPATH' ) || exit;

$args = wp_parse_args(
	$args,
	array(
		'text'   => 'Botão',
		'url'    => '#',
		'class'  => '',
		'target' => '',
	)
);
?>

<a
	class="btn <?php echo esc_attr( $args['class'] ); ?>"
	href="<?php echo esc_url( $args['url'] ); ?>"
	<?php echo $args['target'] ? 'target="' . esc_attr( $args['target'] ) . '"' : ''; ?>>

	<?php echo esc_html( $args['text'] ); ?>

</a>