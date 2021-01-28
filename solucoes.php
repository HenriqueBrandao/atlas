<?php
/**
 * Template Name: Solucoes Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atlas
 */

get_header();
?>


	<main id="primary" class="site-main">
            <section id="home" class="section">



                    <div id="scrollDown" >
                        <div class="svgWrap">
                            <svg class="nohover" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                <defs>
                                    <filter id="48kat5ggya">
                                        <feColorMatrix in="SourceGraphic" values="0 0 0 0 1.000000 0 0 0 0 1.000000 0 0 0 0 1.000000 0 0 0 1.000000 0"/>
                                    </filter>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <g>
                                        <g transform="translate(-65 -494) translate(65 494)">
                                            <rect width="48" height="48" fill="#FFF" fill-opacity=".2" rx="24"/>
                                            <g filter="url(#48kat5ggya)">
                                                <g>
                                                    <g fill="#000" fill-rule="nonzero">
                                                        <path d="M8.173.219c.265.265.29.68.073.972l-.073.084L2.55 6.899h20.704c.413 0 .747.334.747.747 0 .38-.285.695-.653.74l-.094.006H2.546l5.627 5.626c.265.265.29.68.073.972l-.073.084c-.265.265-.68.29-.972.072l-.084-.072L.22 8.175c-.265-.265-.29-.68-.073-.972L.22 7.12 7.117.219c.292-.292.765-.292 1.056 0z" transform="translate(8 8) rotate(-90 18 10)"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <svg  class="hovered" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                <defs>
                                    <filter id="fe4x9e0yja">
                                        <feColorMatrix in="SourceGraphic" values="0 0 0 0 0.152941 0 0 0 0 0.823529 0 0 0 0 0.564706 0 0 0 1.000000 0"/>
                                    </filter>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <g>
                                        <g transform="translate(-65 -494) translate(65 494)">
                                            <rect width="48" height="48" fill="#FFF" rx="24"/>
                                            <g filter="url(#fe4x9e0yja)">
                                                <g>
                                                    <g fill="#000" fill-rule="nonzero">
                                                        <path d="M8.173.219c.265.265.29.68.073.972l-.073.084L2.55 6.899h20.704c.413 0 .747.334.747.747 0 .38-.285.695-.653.74l-.094.006H2.546l5.627 5.626c.265.265.29.68.073.972l-.073.084c-.265.265-.68.29-.972.072l-.084-.072L.22 8.175c-.265-.265-.29-.68-.073-.972L.22 7.12 7.117.219c.292-.292.765-.292 1.056 0z" transform="translate(8 8) rotate(-90 18 10)"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <?php the_field('scroll', 'option'); ?>
                    </div>

                    <div class="BannerSlider">



                    <?php



                                $imagem_bg = get_field('imagem_bg');
                                $titulo_banner = get_field('titulo_banner');
                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                $icone_slider = get_field('icone_banner');
                                $size = 'full'; // (thumbnail, medium, large, full or custom size)


                            ?>
                                <div class="slide2">
                                    <div class="Mask"></div>

                                    <?php
                                    if( $imagem_bg ) {
                                        echo wp_get_attachment_image( $imagem_bg, $size );
                                    } ?>
                                    <div class="container">
                                    <div class="centerSlideLeft">

                                    <?php
                                    if( $icone_slider ) {
                                    echo wp_get_attachment_image( $icone_slider, $size );
                                    } ?>

                                    <h2 class="fadeInUp wow" data-wow-duration="1s"><?php echo $titulo_banner ?></h2>

                                    </div>
                                    </div>


                                </div>

                            <?php

                    ?>
                    </div>
                    <div class="langDesktop desktoponlyMenu">
                        <?php do_action('wpml_add_language_selector'); ?>
                    </div>
            </section>

            <section id="solucoesPage" class="section second">

            <div class="container">

                    <?php

                    if( have_rows('solucoes_grupo') ):

                        while( have_rows('solucoes_grupo') ) : the_row();

                            $imagem = get_sub_field('imagem');
                            $titulo = get_sub_field('titulo');
                            $texto = get_sub_field('texto');
                            $secao = get_sub_field('secao');
                            $texto_completo = get_sub_field('texto_completo');


                            ?>

                            <div class="row" id="<?php echo $secao ?>">

                            <div class="col-sm-6">
                                <div class="imgWrapper fadeInUp wow" data-wow-duration="1s">
                                    <?php
                                    if( $imagem ) {
                                        echo wp_get_attachment_image( $imagem, $size );
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="textWrapper">
                                    <h2 class="fadeInUp wow" data-wow-duration="1s"><?php echo $titulo ?></h2>
                                    <p class="fadeInUp wow" data-wow-duration="1s"><?php echo $texto ?></p>
                                    <a class="fadeInUp wow buttonAreaReservada botaoBorda svgBotaoSolucoes" data-wow-duration="1s" href="#">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                            <g fill="none" fill-rule="evenodd">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M0 0H28V28H0z" transform="translate(-185 -1430) translate(178 1426) rotate(45 8.429 34.692)"/>
                                                                <path fill="#27D290" stroke="#27D290" d="M21.616 6.384c-.212-.212-.556-.212-.768 0L14 13.23h0L7.152 6.384c-.212-.212-.556-.212-.768 0-.212.212-.212.556 0 .768L13.23 14h0l-6.847 6.848c-.212.212-.212.556 0 .768.212.212.556.212.768 0L14 14.77h0l6.848 6.847c.212.212.556.212.768 0 .212-.212.212-.556 0-.768L14.77 14h0l6.847-6.848c.212-.212.212-.556 0-.768z" transform="translate(-185 -1430) translate(178 1426) rotate(45 8.429 34.692)"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <?php the_field('saber_mais_texto', 'option');?>
                                    </a>

                                </div>
                            </div>


                                <div class="popHomeSol solucoes">
                                        <div class="brancoBG">


                                            <div class="closeinfo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                                        <g fill="none" fill-rule="evenodd">
                                                                <g>
                                                                        <g>
                                                                                <g>
                                                                                        <path d="M0 0H34V34H0z" transform="translate(-1175 -47) translate(1168 40) translate(7 7)"/>
                                                                                        <path fill="#2D9EFF" d="M27.79 6.21c-.301-.3-.788-.3-1.088 0L17 15.91l-9.702-9.7c-.3-.3-.787-.3-1.087 0-.3.301-.3.788 0 1.088L15.91 17l-9.7 9.702c-.3.3-.3.787 0 1.087.3.3.787.3 1.087 0L17 18.09l9.702 9.7c.3.3.787.3 1.087 0 .3-.3.3-.787 0-1.087L18.09 17l9.7-9.702c.3-.3.3-.787 0-1.087z" transform="translate(-1175 -47) translate(1168 40) translate(7 7)"/>
                                                                                </g>
                                                                        </g>
                                                                </g>
                                                        </g>
                                                </svg>
                                            </div>
                                            <h1 id="tituloDescri"><?php echo $titulo ?></h1>
                                            <p id="descDescri" class="small"><?php echo $texto_completo ?></p>
                                    </div>
                                </div>


                            </div>

                            <?php
                        endwhile;
                    else :
                    endif;
                    ?>

            </div>







            </section>




            <section id="solucoes" class="section fifth solucaoPaginePaddig">

                <div class="container">

                    <h1 class="text-center is-animated fadeInUp wow" data-wow-duration="1s"><?php the_field('cobertura_titulo', '5'); ?></h1>
                    <div class="howItWorksSlideWrrapper slideSeta">

                        <?php
                        if( have_rows('cobertura_campos' , '5') ):
                        while( have_rows('cobertura_campos', '5') ) : the_row();
                            $titulo_cobertura = get_sub_field('titulo_cobertura');
                            $imagem_cobertura = get_sub_field('imagem_cobertura');
                            $descricao_cobertura = get_sub_field('descricao_cobertura');
                            $descricao_cobertura_resumo = get_sub_field('descricao_cobertura_resumo');


                        ?>

                            <div class="howItWorksSlide firstHowitWork is-animated">
                                    <?php
                                        if( $imagem_cobertura ) {
                                            echo wp_get_attachment_image( $imagem_cobertura, $size );
                                        }
                                    ?>
                                <p class="title1"><?php echo $titulo_cobertura ?></p>
                                <p class="small"><?php echo $descricao_cobertura_resumo ?></p>
                                <p class="descCompleta"><?php echo $descricao_cobertura ?></p>

                            </div>

                        <?php
                        endwhile;
                        else :
                        endif;
                        ?>
                    </div>

                      <div class="popHomeSol pagSo">
                                        <div class="brancoBG">


                                            <div class="closeinfo">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                                        <g fill="none" fill-rule="evenodd">
                                                                <g>
                                                                        <g>
                                                                                <g>
                                                                                        <path d="M0 0H34V34H0z" transform="translate(-1175 -47) translate(1168 40) translate(7 7)"/>
                                                                                        <path fill="#2D9EFF" d="M27.79 6.21c-.301-.3-.788-.3-1.088 0L17 15.91l-9.702-9.7c-.3-.3-.787-.3-1.087 0-.3.301-.3.788 0 1.088L15.91 17l-9.7 9.702c-.3.3-.3.787 0 1.087.3.3.787.3 1.087 0L17 18.09l9.702 9.7c.3.3.787.3 1.087 0 .3-.3.3-.787 0-1.087L18.09 17l9.7-9.702c.3-.3.3-.787 0-1.087z" transform="translate(-1175 -47) translate(1168 40) translate(7 7)"/>
                                                                                </g>
                                                                        </g>
                                                                </g>
                                                        </g>
                                                </svg>
                                            </div>
                                            <h1 id="tituloDescri2"></h1>
                                            <p id="descDescri2" class="small"></p>
                                    </div>
                                </div>



                    <div class="text-center fadeInUp wow" data-wow-duration="1s">
                    <a class="botaoBorda corbranco text-center is-animated__single" href=""><?php the_field('faleConnos', '5') ?></a>
                    </div>

                </div>
            </section>




            <section id="partner" class="section fp-auto-height seven">
                <div class="container">
                    <h1 class="text-center is-animated fadeInUp wow" data-wow-duration="1s"><?php the_field('o_nosso_premium_partner', 'option');?></h1>
                    <div class="parterWrap is-animated fadeInUp wow" data-wow-duration="1s">
                        <a href="<?php the_field('url_logo_partner', 'option');?>">
                            <?php
                            $imagem_logo_partner = get_field('imagem_logo_partner', 'option');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if( $imagem_logo_partner ) {
                                echo wp_get_attachment_image( $imagem_logo_partner, $size );
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </section>
            <section id="footer" class="section fp-auto-height footer">
                <?php
                get_footer();
                ?>
            </section>
	</main><!-- #main -->

<script>

(function($) {

    $( ".howItWorksSlide" ).click(function() {
            var desc1 = $(this).find('.descCompleta').html();
            var title1 = $(this).find('.title1').html();
            $('#tituloDescri2').html(title1);
            $('#descDescri2').html(desc1);
            $('.pagSo').addClass('visivel');
        });



        $( ".closeinfo" ).click(function() {
            $('.pagSo').removeClass('visivel');
        });



        $( ".svgBotaoSolucoes" ).click(function(ec) {
            ec.preventDefault();
            $(this).closest('.row').addClass('visivel');
        });

        $( "#solucoesPage .closeinfo" ).click(function() {
            $('.row').removeClass('visivel');
        });




	$('#scrollDown').click(function(ab){
		ab.preventDefault();
		$('html, body').animate({
			scrollTop: $('#solucoesPage').offset().top - 100
		    }, 500);
            return false;
    });






$('.howItWorksSlideWrrapper').slick({
        dots: false,
        infinite: false,
        slidesToShow: 4,
        responsive: [
                {
                breakpoint: 1280,
                settings: {
                        slidesToShow: 3,
                }
                },
                {
                breakpoint: 700,
                settings: {
                        slidesToShow: 1,
                }
                }
        ]
});









})( jQuery );


</script>