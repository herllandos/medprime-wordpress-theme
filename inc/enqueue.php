<?php
/**
 * Enfileira os arquivos CSS e JS do tema.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

/**
 * Carrega os assets do tema.
 */
function medprime_enqueue_assets() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'medprime-style',
		get_stylesheet_uri(),
		array(),
		$version
	);

	wp_enqueue_style(
		'medprime-base',
		get_template_directory_uri() . '/assets/css/base.css',
		array( 'medprime-style' ),
		$version
	);

	wp_enqueue_style(
		'medprime-layout',
		get_template_directory_uri() . '/assets/css/layout.css',
		array( 'medprime-base' ),
		$version
	);

	wp_enqueue_style(
		'medprime-components',
		get_template_directory_uri() . '/assets/css/components.css',
		array( 'medprime-layout' ),
		$version
	);

	wp_enqueue_style(
		'medprime-hero',
		get_template_directory_uri() . '/assets/css/hero.css',
		array( 'medprime-components' ),
		$version
	);

	wp_enqueue_style(
		'medprime-responsive',
		get_template_directory_uri() . '/assets/css/responsive.css',
		array( 'medprime-hero' ),
		$version
	);

	wp_enqueue_script(
		'medprime-app',
		get_template_directory_uri() . '/assets/js/app.js',
		array(),
		$version,
		true
	);

}

add_action( 'wp_enqueue_scripts', 'medprime_enqueue_assets' );