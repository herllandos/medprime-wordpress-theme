<?php
/**
 * Front Page.
 *
 * @package MedPrime
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<main class="site-main">

	<?php get_template_part( 'template-parts/hero' ); ?>

</main>

<?php
get_footer();