<?php
/**
 * Front Page
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<main class="site-main">

	<?php get_template_part( 'template-parts/hero' ); ?>

	<?php get_template_part( 'template-parts/how-it-works' ); ?>

	<?php get_template_part( 'template-parts/benefits' ); ?>

	<?php get_template_part( 'template-parts/about-doctor' ); ?>

	<?php get_template_part( 'template-parts/testimonials' ); ?>

</main>

<?php
get_footer();