<?php
/**
 * Enfileira os arquivos CSS e JavaScript do tema.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enfileira os recursos públicos do tema.
 *
 * @return void
 */
function medprime_enqueue_assets() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'medprime-style',
		get_stylesheet_uri(),
		array(),
		$version
	);

	$styles = array(
		'layout',
		'hero',
		'how-it-works',
		'benefits',
		'about',
		'testimonials',
		'faq',
		'whatsapp',
	);

	$dependency = 'medprime-style';

	foreach ( $styles as $style ) {
		wp_enqueue_style(
			'medprime-' . $style,
			get_template_directory_uri() . '/assets/css/' . $style . '.css',
			array( $dependency ),
			$version
		);

		$dependency = 'medprime-' . $style;
	}

	wp_enqueue_script(
		'medprime-app',
		get_template_directory_uri() . '/assets/js/app.js',
		array(),
		$version,
		true
	);
}

add_action( 'wp_enqueue_scripts', 'medprime_enqueue_assets' );
