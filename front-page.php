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

	<?php medprime_render_home_sections(); ?>

</main>

<?php
get_footer();