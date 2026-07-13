<?php
/**
 * Footer Template
 *
 * @package MedPrime
 */

if (!defined('ABSPATH')) {
    exit;
}

?>

<footer class="site-footer">


    <div class="container footer-container">


        <div class="footer-brand">


            <a href="<?php echo esc_url(home_url('/')); ?>">

                <span class="logo-text">
                    Med<span>Prime</span>
                </span>

            </a>


            <p>
                Consultas médicas online com segurança,
                comodidade e atendimento humanizado.
            </p>


        </div>



        <div class="footer-links">


            <h3>
                Links
            </h3>


            <ul>

                <li>
                    <a href="#inicio">
                        Início
                    </a>
                </li>


                <li>
                    <a href="#como-funciona">
                        Como funciona
                    </a>
                </li>


                <li>
                    <a href="#especialidades">
                        Atendimentos
                    </a>
                </li>


                <li>
                    <a href="#faq">
                        Dúvidas
                    </a>
                </li>


            </ul>


        </div>




        <div class="footer-contact">


            <h3>
                Atendimento
            </h3>


            <p>
                Consultas exclusivamente por telemedicina.
            </p>


            <a class="btn" href="#agendamento">
                Agendar consulta
            </a>


        </div>



    </div>



    <div class="footer-bottom">


        <div class="container">


            <p>

                © <?php echo date('Y'); ?>

                MedPrime.
                Todos os direitos reservados.

            </p>


        </div>


    </div>


</footer>



<?php wp_footer(); ?>


</body>

</html>