<?php
/**
 * Header template.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="site-header">
		<div class="container header-container">

			<div class="site-logo">
				<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				} else {
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<span class="logo-text">Med<span>Prime</span></span>
					</a>
					<?php
				}
				?>
			</div>

			<nav class="main-navigation" aria-label="<?php esc_attr_e( 'Menu principal', 'medprime' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'menu',
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>

			<div class="header-action">
				<?php
				get_template_part(
					'template-parts/components/button',
					null,
					array(
						'text'  => medprime_get_option_or_default( 'hero_button', 'Agendar Consulta' ),
						'url'   => medprime_get_option_or_default( 'appointment_url', '#agendamento' ),
						'class' => 'header-cta',
					)
				);
				?>
			</div>

		</div>
	</header>
