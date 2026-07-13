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

</main>

<?php
get_footer();