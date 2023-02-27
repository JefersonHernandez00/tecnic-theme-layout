<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tecnic
 */

?>



        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="f-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/flogo.png" alt="">
                        </div>
                        <p class="copywrite pt-5 mt-5">Avisos legales_Política de privacidad_Política de cookies</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-8">
                                <h3>CONTACTO</h3>
                                <p class="m-0">
                                    <small>(+34)</small> 671 44 12
                                </p>
                                <a class="mail" href="mailto:info@tecnic.es">info@tecnic.es</a>

                                <p class="pt-3"><span>Gran Via de les Corts Catalanes, 373-385
                                    08015
                                    Barcelona</span></p>
                            </div>
                            <div class="col-md-4 social">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Capa_8.png" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/Capa_8.png" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/Capa_8.png" alt="">



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


<?php

?>

<?php wp_footer(); ?>

	</body>
</html>
