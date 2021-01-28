<?php
/**
 * Template Name: Atlas Template
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


	<main id="primary" class="site-main atlasPage">



        <section class="sectionQuem" id="quemsomos">

            <div class="containerLarge relpos">
                                <div class="langDesktop desktoponlyMenu">
                                    <?php do_action('wpml_add_language_selector'); ?>
                                </div>
            </div>


            <div class="popHomeSol atlas">
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

                <div class="row dirTexto flex">
                    <div class="col-md-6 ">

                        <p ><?php the_field('descricao_quem'); ?></p>
                    </div>

                    <div class="col-md-6 right">
                        <p><?php the_field('descricao_quem_dir'); ?></p>
                    </div>
                </div>
                                    </div>
                                </div>


            <div class="container flexAtlas">
                <div class="row dirTexto flex ">
                    <div class="col-md-12"></div>
                </div>

                <div class="row dirTexto flex">
                    <div class="col-md-6 ">
                    <?php
                            $image = get_field('logo');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );
                            }
                        ?>
                    </div>

                    <div class="col-md-6 right mtmobileatlas">
                    <h2 class="fadeInUp wow" data-wow-duration="1s"><?php the_field('titulo'); ?></h2>
                    <p class="fadeInUp wow" data-wow-duration="1s"><?php the_field('descricao_quem1'); ?></p>

                        <p class="fadeInUp wow" data-wow-duration="1s"><?php the_field('descricao_quem_dir1'); ?></p>
                        <a class="fadeInUp wow buttonAreaReservada botaoBorda svgBotaoSolucoes svgBotaoAtlas" data-wow-duration="1s" href="#">

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


</div>
<div class="container">
                <div class="row mt200">
                    <div class="col-md-7">
                    </div>
                    <div class="col-md-5 ">
                    </div>
                </div>

                <div class="row dirTexto textoPreto">
                    <div class="col-md-6">
                        <div class="bolasRedondas fadeInUp wow" data-wow-duration="1s">
                        <?php
                            $imagem = get_field('imagem_1');
                            $imagem2 = get_field('imagem_2');
                            $imagem3 = get_field('imagem_3');
                            echo wp_get_attachment_image( $imagem, $size );
                            echo wp_get_attachment_image( $imagem2, $size );
                            echo wp_get_attachment_image( $imagem3, $size );
                        ?>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1" id="abordagem">
                        <h2 class="fadeInUp wow" data-wow-duration="1s"><?php the_field('titulo_abordagem'); ?></h2>
                        <p class="fadeInUp wow" data-wow-duration="1s"><?php the_field('descricao_abordagem'); ?></p>
                    </div>
                </div>





            </div>

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
        </section>


        <section class="missao" id="missao">
            <div class="container">
                <div class="row verde">
                            <div class="col-md-12">
                                <h2 class="fadeInUp wow" data-wow-duration="1s"><?php the_field('titulo_missao'); ?></h2>
                                <p class="fadeInUp wow" data-wow-duration="1s"><?php the_field('descricao_missao'); ?></p>
                            </div>
                </div>
            </div>
        </section>



        <section class="missao" id="missao2">
            <div class="container">
                <div class="row verde">
                            <div class="col-md-12">
                                <h2 class="fadeInUp wow" data-wow-duration="1s"><?php the_field('titulo_futu'); ?></h2>
                                <p class="fadeInUp wow" data-wow-duration="1s"><?php the_field('descricao'); ?></p>
                            </div>
                </div>
            </div>
        </section>






        <section class="equipa" id="equipa">
            <div class="container">
                <h2><?php the_field('titulo_equipa'); ?></h2>
                <div class="row minus40">



                <?php
                    if( have_rows('membro_equipa') ):
                    while( have_rows('membro_equipa') ) : the_row();
                        $foto = get_sub_field('foto');
                        $foto_grelha = get_sub_field('foto_grelha');
                        $nome = get_sub_field('nome');
                        $cargo_abreviado = get_sub_field('cargo_abreviado');
                        $cargo = get_sub_field('cargo');
                        $sobre_o_nosso = get_sub_field('sobre_o_nosso');
                        $descricao2 = get_sub_field('descricao2');
                    ?>

                    <div class="col-sm-25 fadeInUp wow" data-wow-duration="1s">
                        <a class="equipaWrapper" href="#">
                            <div class="imageEquipa">

                                <?php
                                echo wp_get_attachment_image( $foto_grelha, $size );
                                echo wp_get_attachment_image( $foto, $size );
                                ?>
                                <div class="cargoNome">
                                <h4 class="nome"><?php echo $nome; ?></h4>
                                <h4 class="cargo"><?php echo $cargo_abreviado; ?></h4>

                                </div>
                            </div>
                        </a>


                            <div class="popEquipa">
                                <div class="equipWrapper">
                                <div class="closeTeam">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                            <g fill="none" fill-rule="evenodd">
                                                    <g>
                                                            <g>
                                                                    <g>
                                                                            <path d="M0 0H34V34H0z" transform="translate(-1175 -47) translate(1168 40) translate(7 7)"/>
                                                                            <path fill="#27D290" d="M27.79 6.21c-.301-.3-.788-.3-1.088 0L17 15.91l-9.702-9.7c-.3-.3-.787-.3-1.087 0-.3.301-.3.788 0 1.088L15.91 17l-9.7 9.702c-.3.3-.3.787 0 1.087.3.3.787.3 1.087 0L17 18.09l9.702 9.7c.3.3.787.3 1.087 0 .3-.3.3-.787 0-1.087L18.09 17l9.7-9.702c.3-.3.3-.787 0-1.087z" transform="translate(-1175 -47) translate(1168 40) translate(7 7)"/>
                                                                    </g>
                                                            </g>
                                                    </g>
                                            </g>
                                    </svg>
                            </div>
                                    <h1><?php echo $nome; ?></h1>
                                    <h3><?php echo $cargo;  ?></h3>
                                    <div class="row mt80">
                                        <div class="col-md-6">
                                            <h4><?php echo $sobre_o_nosso; ?></h4>
                                            <p><?php echo $descricao2; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <?php
                                            echo wp_get_attachment_image( $foto, $size );
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>



                    </div>


                    <?php
                    endwhile;
                else :
                endif;
                ?>
</div>
</div>

<div class="colaboradoresSec">
<div class="container">




                <h2><?php the_field('titulo_equipa_coola'); ?></h2>
                <div class="row minus40">



<?php
                    if( have_rows('colaboradores_equipa') ):
                    while( have_rows('colaboradores_equipa') ) : the_row();
                        $foto = get_sub_field('foto');
                        $foto_grelha = get_sub_field('foto_grelha');
                        $nome = get_sub_field('nome');
                        $cargo_abreviado = get_sub_field('cargo_abreviado');
                        $cargo = get_sub_field('cargo');
                        $sobre_o_nosso = get_sub_field('sobre_o_nosso');
                        $descricao2 = get_sub_field('descricao2');
                    ?>

                    <div class="col-sm-25 fadeInUp wow colaboradores" data-wow-duration="1s">
                        <a class="equipaWrapper" href="#">
                            <div class="imageEquipa">

                                <?php
                                echo wp_get_attachment_image( $foto_grelha, $size );
                                echo wp_get_attachment_image( $foto, $size );
                                ?>
                                <div class="cargoNome">
                                <h4 class="nome"><?php echo $nome; ?></h4>
                                <h4 class="cargo"><?php echo $cargo_abreviado; ?></h4>

                                </div>
                            </div>
                        </a>


                            <div class="popEquipa">
                                <div class="equipWrapper">
                                <div class="closeTeam">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                            <g fill="none" fill-rule="evenodd">
                                                    <g>
                                                            <g>
                                                                    <g>
                                                                            <path d="M0 0H34V34H0z" transform="translate(-1175 -47) translate(1168 40) translate(7 7)"/>
                                                                            <path fill="#27D290" d="M27.79 6.21c-.301-.3-.788-.3-1.088 0L17 15.91l-9.702-9.7c-.3-.3-.787-.3-1.087 0-.3.301-.3.788 0 1.088L15.91 17l-9.7 9.702c-.3.3-.3.787 0 1.087.3.3.787.3 1.087 0L17 18.09l9.702 9.7c.3.3.787.3 1.087 0 .3-.3.3-.787 0-1.087L18.09 17l9.7-9.702c.3-.3.3-.787 0-1.087z" transform="translate(-1175 -47) translate(1168 40) translate(7 7)"/>
                                                                    </g>
                                                            </g>
                                                    </g>
                                            </g>
                                    </svg>
                            </div>
                                    <h1><?php echo $nome; ?></h1>
                                    <h3><?php echo $cargo;  ?></h3>
                                    <div class="row mt80">
                                        <div class="col-md-6">
                                            <h4><?php echo $sobre_o_nosso; ?></h4>
                                            <p><?php echo $descricao2; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <?php
                                            echo wp_get_attachment_image( $foto, $size );
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>



                    </div>


                    <?php
                    endwhile;
                else :
                endif;
                ?>

</div>
</div>




                </div>
            </div>
        </section>



            <section id="partner" class="section fp-auto-height seven">
                <div class="container">
                    <h1 class="text-center is-animated"><?php the_field('o_nosso_premium_partner', 'option');?></h1>
                    <div class="parterWrap is-animated">
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











    <style>



.page-template-atlas .sectionQuem {
    background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/group-5.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    background-position: center;
}

/*
@media screen and (max-width: 1499px) {

.page-template-atlas .sectionQuem{
    background-image: url('http://localhost/atlas/wp-content/uploads/2020/09/ricardo-gomez-angel-kuwrr-ph-0-p-y-unsplash@2x-scaled.jpg');
    background-size: 100%;
    background-repeat: no-repeat;
    position: relative;
}

.page-template-atlas .sectionQuem:before{
    background-image: linear-gradient(151deg, #27b37d 20%, rgba(39, 179, 125, 0) 49%);
        content:'';
        display:block;
        position: absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        pointer-events:none;
    }

    .page-template-atlas .sectionQuem:after{
        background-image: linear-gradient(330deg, #ffffff 50%, rgba(255, 255, 255, 0.98) 57%, rgba(254, 254, 254, 0.95) 60%, rgba(253, 254, 239, 0.88) 62%, rgba(252, 253, 253, 0.8) 63%, rgba(251, 252, 252, 0.71) 65%, rgba(250, 251, 251, 0.61) 64%, rgba(249, 250, 250, 0.5) 58%, rgba(247, 248, 249, 0.39) 44%, rgba(246, 247, 248, 0.29) 66%, rgba(245, 246, 247, 0.2) 66%, rgba(244, 245, 246, 0.12) 52%, rgba(243, 245, 246, 0.06) 67%, rgba(242, 244, 245, 0.02) 49%, rgba(242, 244, 245, 0) 47%);
        content:'';
        display:block;
        position: absolute;
        top:34%;
        left:0;
        width:100%;
        height:100%;
        opacity: 1;
        pointer-events:none;
        z-index:-1;
    }
}


@media screen and (min-width: 1500px) {


.page-template-atlas .sectionQuem{
background-image: url('http://localhost/atlas/wp-content/uploads/2020/09/group-5.jpg');
background-size: 100%;
background-repeat: no-repeat;
position: relative;
}

}


*/







    </style>



<script>


    (function($) {

        $('#scrollDown').click(function(){


        $('html, body').animate({
        scrollTop: $(".textoPreto").offset().top - 200
    }, 2000);

	    });


        $( ".svgBotaoAtlas" ).click(function(ec) {
            ec.preventDefault();
            $(this).closest('.sectionQuem').addClass('visivel');
        });

        $( ".sectionQuem .closeinfo" ).click(function() {
            $('.sectionQuem').removeClass('visivel');
        });








        $('.col-sm-25 .imageEquipa').click(function(e){


                e.preventDefault();
                $('body').addClass('noscroll');
                $('.col-sm-25').removeClass('equipaOpen');
                $(this).parent().parent().addClass('equipaOpen');


        });


        $('.closeTeam').click(function(){

                $('body').removeClass('noscroll');
                $('.col-sm-25').removeClass('equipaOpen');
        });





    })( jQuery );


</script>