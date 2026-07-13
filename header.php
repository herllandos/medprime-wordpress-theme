<?php
/**
 * Header Template
 *
 * @package MedPrime
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<header class="site-header">

    <div class="container header-container">


        <!-- Logo -->

        <div class="site-logo">

            <?php

            if (has_custom_logo()) {

                the_custom_logo();

            } else {

                ?>

                <a href="<?php echo esc_url(home_url('/')); ?>">

                    <span class="logo-text">
                        Med<span>Prime</span>
                    </span>

                </a>

                <?php

            }

            ?>

        </div>



        <!-- Menu -->

        <nav class="main-navigation">

            <?php

            wp_nav_menu(
                array(

                    'theme_location' => 'primary',

                    'container' => false,

                    'menu_class' => 'menu'

                )
            );

            ?>

        </nav>




        <!-- Botão -->

        <div class="header-button">

            <a href="#agendamento" class="btn">

                Agendar Consulta

            </a>

        </div>



    </div>

</header>