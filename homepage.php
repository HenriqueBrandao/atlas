<?php
/**
 * Template Name: Homepage Template
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
        <div class="" id="fullpage">
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

                        if( have_rows('slider_campos') ):

                            while( have_rows('slider_campos') ) : the_row();

                                $imagem_slider = get_sub_field('imagem_slider');
                                $titulo_slider = get_sub_field('titulo_slider');
                                $botao_slider = get_sub_field('botao_slider');
                                $url_botao_slider = get_sub_field('url_botao_slider');
                                $icone_slider = get_sub_field('icone_slider');



                                $size = 'full'; // (thumbnail, medium, large, full or custom size)

                            ?>
                                <div class="slide2">
                                    <div class="Mask"></div>

                                    <?php
                                    if( $imagem_slider ) {
                                    // echo wp_get_attachment_image( $imagem_slider, $size );
                                    } ?>
                                    <video  src="" class="videoHome" id="myvideo" width="100%" height="100%" autoplay muted playsinline style="background:black">

                                    <script>
                                    var vidElement = document.getElementById('myvideo');
                                    var vidSources = [
                                    "http://orionstudio.pt/atlas/wp-content/uploads/2020/11/istockphoto-825677428-640_adpp_is-1.mp4",
                                    "http://orionstudio.pt/atlas/wp-content/uploads/2020/11/istockphoto-1215054581-640_adpp_is.mp4",
                                    "http://orionstudio.pt/atlas/wp-content/uploads/2020/11/istockphoto-1254195873-640_adpp_is.mp4",
                                    "http://orionstudio.pt/atlas/wp-content/uploads/2020/11/istockphoto-1271378670-640_adpp_is.mp4"



                                    ];
                                    var activeVideo = Math.floor((Math.random() * vidSources.length));
                                    vidElement.src = vidSources[activeVideo];



                                    vidElement.addEventListener('ended', function(e) {
                                    // update the active video index
                                    activeVideo = (++activeVideo) % vidSources.length;
                                    if(activeVideo === vidSources.length){
                                        activeVideo = 0;
                                    }

                                    // update the video source and play
                                    vidElement.src = vidSources[activeVideo];
                                    vidElement.play();
                                    });



                                    </script>
                                    </video>
                                    <div class="centerSlide">
                                    <?php
                                    if( $icone_slider ) {
                                    echo wp_get_attachment_image( $icone_slider, $size );
                                    } ?>
                                        <h2><?php echo $titulo_slider ?></h2>
                                        <!-- <a class="botaoBorda corbranco" href="<?php echo $url_botao_slider ?>"><?php echo $botao_slider ?></a> -->
                                    </div>
                                </div>

                            <?php
                            endwhile;

                        else :
                        endif;
                    ?>
                    </div>

                    <div class="weatherHome">
                        <div class="container">
                            <span class="localidade city"></span>,
                            <span class="weekday"></span><span class="weekdayVirgula">, </span>
                            <span class="dateDayMonth"> <?php echo "" . date( 'm/d', current_time( 'timestamp', 1 ) ); ?> - </span>
                            <span class="temp"></span> -
                            <span class="wind"></span>
                        </div>
                    </div>

            <div class="langDesktop desktoponlyMenu">
				<?php do_action('wpml_add_language_selector'); ?>
			</div>

             </section>






<!--
             <section id="noticias" class="section fourth ">
                <div class="containerLarge">
                        <div class="whiteBg">
                            <div class="titleButton">
                                <h1 class="is-animated"><?php the_field('titulo_noticias'); ?></h1>
                            </div>
                            <?php
                            $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                            'orderby' => 'date',
                            );
                            $related_items = new WP_Query( $args );
                            if ($related_items->have_posts()) :
                            echo '<ul class="row noticiasHome">';
                            while ( $related_items->have_posts() ) : $related_items->the_post();
                            ?>
                            <li class="col-md-3 noticiaWra is-animated">
                                <div class="noticiaSombra">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="postThumb">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                            <div class="titleNoticia">
                                                <?php the_title(); ?>
                                            </div>
                                            <div class="dataNoticia">
                                                <?php echo get_the_date( 'Y-m-d' ); ?>
                                            </div>
                                    </a>
                                </div>
                            </li>
                            <?php
                            endwhile;
                            echo '</ul>';
                            endif;
                            wp_reset_postdata();
                            ?>
                            <div class="text-center">
                            <a class="botaoBorda azul is-animated" href="<?php the_field('botao_ver_URL'); ?>"><?php the_field('botao_ver_todas'); ?></a>

                            </div>


                        </div>



                </div>
            </section>
-->
            <section id="solucoes1" class="section third" >
                <div class="container">
                    <h1 class="text-center is-animated"><?php the_field('titulo_solucoes'); ?></h1>
                    <h3 class="text-center is-animated"><?php the_field('texto_solucoes'); ?></h3>

                    <div class="row mobileSlide slideSeta">







                    <?php
                        if( have_rows('solucao_campos') ):
                        while( have_rows('solucao_campos') ) : the_row();
                            $svg_code = get_sub_field('svg_code');
                            $titulo_solucao = get_sub_field('titulo_solucao');
                            $botao_ver_ = get_sub_field('botao_ver_');
                            $botao_ver_url = get_sub_field('botao_ver_url');
                        ?>

                            <div class="col-lg-2 col-sm-12 is-animated">
                            <?php echo $svg_code ?>
                            <p><?php echo $titulo_solucao ?></p>
                            <a class="buttonVer" href="<?php echo $botao_ver_url ?>"><?php echo $botao_ver_ ?></a>
                            </div>

                        <?php
                        endwhile;
                        else :
                        endif;
                    ?>


                    </div>

                    <div class="text-center">
                    <a class="botaoBorda corbranco is-animated" href="<?php the_field('todas_URL'); ?>"><?php the_field('todasSolucoes'); ?></a>
                    </div>

                </div>
            </section>

            <section id="atlas" class="section second">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 paddLeft2">
                            <div class="circulosWrapp">


                            <?php
                                $image = get_field('atlas_image_1');
                                $image2 = get_field('atlas_image_2');
                                $image3 = get_field('atlas_image_3');
                                $size = 'full';
                            ?>



                                <div class="wrappImage is-animated">
                                <?php
                                if( $image ) {
                                    echo wp_get_attachment_image( $image, $size );
                                }
                                ?>
                                </div>
                                <div class="wrappImage is-animated">
                                <?php
                                if( $image2 ) {
                                    echo wp_get_attachment_image( $image2, $size );
                                }
                                ?>

                                </div>
                                <div class="wrappImage is-animated">
                                <?php
                                if( $image3 ) {
                                    echo wp_get_attachment_image( $image3, $size );
                                }
                                ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 paddLeft">
                            <h1 class="is-animated__single"><?php the_field('a_atlas'); ?></h1>
                            <p class="is-animated__single"><?php the_field('descricaoAtlas'); ?>
                            </p>
                            <a class="botaoBorda corverde is-animated__single" href="<?php the_field('botao_mais_sobre_atlas_url'); ?>"><?php the_field('botaomaisatlas'); ?></a>
                        </div>


                    </div>
                </div>
            </section>

            <section id="solucoes" class="section fifth">

                <div class="container">


                    <h1 class="text-center is-animated"><?php the_field('cobertura_titulo'); ?></h1>
                    <div class="howItWorksSlideWrrapper slideSeta">
                        <?php
                        if( have_rows('cobertura_campos') ):
                        while( have_rows('cobertura_campos') ) : the_row();
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

                                 <div class="popHomeSol">
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
                                            <h1 id="tituloDescri"></h1>
                                            <p id="descDescri" class="small"></p>
                                    </div>
                                </div>



                    <div class="text-center">
                    <a class="botaoBorda corbranco text-center is-animated__single faleConnosco" href="<?php the_field('faleConnos') ?>"><?php the_field('faleConnos') ?></a>
                    </div>

                </div>
            </section>
<!--
            <section id="documentos" class="section sixth">
                <div class="container">
                    <div class="titleButton">
                        <h1 class="is-animated"><?php the_field('titulo_seccao') ?></h1>
                        <a class="botaoBorda corverde is-animated desktoponly" href="<?php the_field('ver_todos_botao_URL') ?>"><?php the_field('ver_todos_botao') ?></a>

                    </div>
                    <div class="row">



                    <?php
                        if( have_rows('documento_repeater', 'option') ):
                        $counter = 0;
                        while( have_rows('documento_repeater', 'option') ) : the_row();
                            $ficheiro_documento = get_sub_field('ficheiro_documento');
                            $titulo_documento = get_sub_field('titulo_documento');
                            $descricao_documento = get_sub_field('descricao_documento');



                            if ($counter < 4 ) {
                            ?>

                            <div class="col-md-6 is-animated">
                                <a href="<?php echo $ficheiro_documento ?>" download >
                                    <div class="wraoperDocument">
                                        <div class="imgDocu">
                                        <?php
                                        if( get_sub_field('tipo_ficheiro') == 'PDF' ) {
                                        ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="109" height="115" viewBox="0 0 109 115">
                                                <defs>
                                                    <filter id="4oe4uxe94a" width="117.6%" height="150%" x="-8.8%" y="-25%" filterUnits="objectBoundingBox">
                                                        <feOffset dy="4" in="SourceAlpha" result="shadowOffsetOuter1"/>
                                                        <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="8"/>
                                                        <feColorMatrix in="shadowBlurOuter1" result="shadowMatrixOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                                                        <feMerge>
                                                            <feMergeNode in="shadowMatrixOuter1"/>
                                                            <feMergeNode in="SourceGraphic"/>
                                                        </feMerge>
                                                    </filter>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <g fill="#27D290" fill-rule="nonzero">
                                                        <g filter="url(#4oe4uxe94a)" transform="translate(-239 -273) translate(178 252)">
                                                            <g>
                                                                <g>
                                                                    <path d="M12.267.237c-.299.027-.579.157-.793.367L.419 11.674c-.25.248-.39.586-.386.937v33.214c0 .72.582 1.303 1.3 1.303h24.712c.47.007.906-.24 1.143-.646.236-.406.236-.908 0-1.314-.237-.406-.674-.653-1.143-.645H2.634v-30.61h9.754c.719 0 1.301-.583 1.301-1.302V2.842h21.46V32.8c-.006.47.24.907.645 1.143.405.237.906.237 1.312 0 .405-.236.651-.673.645-1.143V1.54c0-.72-.583-1.303-1.301-1.303H12.388c-.04-.002-.08-.002-.121 0zm-1.18 4.437v6.635H4.464l6.625-6.635zm31.172 31.71c-.67.074-1.173.649-1.159 1.323v13.575l-4.897-5.352c-.264-.292-.645-.45-1.037-.428-.507.027-.951.347-1.14.82-.187.471-.083 1.01.266 1.378l7.154 7.815c.246.267.592.419.955.419.362 0 .709-.152.955-.419l7.153-7.815c.484-.529.45-1.35-.075-1.837-.526-.487-1.346-.457-1.835.067l-4.898 5.352V37.707c.008-.375-.145-.735-.422-.988-.276-.254-.648-.375-1.02-.334z" transform="translate(90 50) translate(0 .415)"/>
                                                                </g>
                                                                <path d="M9.66 31v-3.584h2.184c1.806 0 3.136-1.232 3.136-3.108 0-1.876-1.288-3.108-3.136-3.108H7.812V31H9.66zm2.002-5.264H9.66V22.88h2.002c.882 0 1.47.56 1.47 1.428 0 .868-.588 1.428-1.47 1.428zM19.32 31c2.632 0 4.032-1.302 4.032-3.976v-1.848c0-2.674-1.4-3.976-4.032-3.976h-3.36V31h3.36zm.028-1.68h-1.54v-6.44h1.54c1.582 0 2.156.812 2.156 2.24v1.96c0 1.428-.574 2.24-2.156 2.24zM26.432 31v-4.074h4.116v-1.68h-4.116V22.88h4.396V21.2h-6.244V31h1.848z" transform="translate(90 50)"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>

                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if( get_sub_field('tipo_ficheiro') == 'DOC' ) {
                                        ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="109" height="115" viewBox="0 0 109 115">
                                                <defs>
                                                    <filter id="pf8mnbyiba" width="117.6%" height="150%" x="-8.8%" y="-25%" filterUnits="objectBoundingBox">
                                                        <feOffset dy="4" in="SourceAlpha" result="shadowOffsetOuter1"/>
                                                        <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="8"/>
                                                        <feColorMatrix in="shadowBlurOuter1" result="shadowMatrixOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                                                        <feMerge>
                                                            <feMergeNode in="shadowMatrixOuter1"/>
                                                            <feMergeNode in="SourceGraphic"/>
                                                        </feMerge>
                                                    </filter>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <g fill="#27D290" fill-rule="nonzero">
                                                        <g filter="url(#pf8mnbyiba)" transform="translate(-720 -665) translate(661 644)">
                                                            <g>
                                                                <path d="M10.172 31c2.632 0 4.032-1.302 4.032-3.976v-1.848c0-2.674-1.4-3.976-4.032-3.976h-3.36V31h3.36zm.028-1.68H8.66v-6.44h1.54c1.582 0 2.156.812 2.156 2.24v1.96c0 1.428-.574 2.24-2.156 2.24zm8.876 1.876c2.506 0 4.032-1.484 4.032-4.06v-2.072c0-2.506-1.526-4.06-4.032-4.06-2.506 0-4.032 1.554-4.032 4.06v2.072c0 2.576 1.526 4.06 4.032 4.06zm0-1.652c-1.484 0-2.184-.91-2.184-2.324v-2.24c0-1.33.77-2.324 2.184-2.324 1.372 0 2.184.938 2.184 2.324v2.24c0 1.358-.658 2.324-2.184 2.324zm8.932 1.652c2.59 0 3.864-1.386 3.864-3.556v-.336h-1.848v.364c0 1.106-.546 1.876-2.016 1.876-1.442 0-2.212-.896-2.212-2.24v-2.408c0-1.232.826-2.24 2.212-2.24 1.344 0 2.016.756 2.016 1.876v.364h1.848v-.336c0-2.184-1.386-3.556-3.864-3.556-2.478 0-4.06 1.54-4.06 3.976v2.24c0 2.604 1.652 3.976 4.06 3.976z" transform="translate(88 50)"/>
                                                                <g>
                                                                    <path d="M12.267.237c-.299.027-.579.157-.793.367L.419 11.674c-.25.248-.39.586-.386.937v33.214c0 .72.582 1.303 1.3 1.303h24.712c.47.007.906-.24 1.143-.646.236-.406.236-.908 0-1.314-.237-.406-.674-.653-1.143-.645H2.634v-30.61h9.754c.719 0 1.301-.583 1.301-1.302V2.842h21.46V32.8c-.006.47.24.907.645 1.143.405.237.906.237 1.312 0 .405-.236.651-.673.645-1.143V1.54c0-.72-.583-1.303-1.301-1.303H12.388c-.04-.002-.08-.002-.121 0zm-1.18 4.437v6.635H4.464l6.625-6.635zm31.172 31.71c-.67.074-1.173.649-1.159 1.323v13.575l-4.897-5.352c-.264-.292-.645-.45-1.037-.428-.507.027-.951.347-1.14.82-.187.471-.083 1.01.266 1.378l7.154 7.815c.246.267.592.419.955.419.362 0 .709-.152.955-.419l7.153-7.815c.484-.529.45-1.35-.075-1.837-.526-.487-1.346-.457-1.835.067l-4.898 5.352V37.707c.008-.375-.145-.735-.422-.988-.276-.254-.648-.375-1.02-.334z" transform="translate(88 50) translate(0 .415)"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>

                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if( get_sub_field('tipo_ficheiro') == 'PPT' ) {
                                        ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="109" height="115" viewBox="0 0 109 115">
                                                <defs>
                                                    <filter id="4ykc5spk6a" width="117.6%" height="150%" x="-8.8%" y="-25%" filterUnits="objectBoundingBox">
                                                        <feOffset dy="4" in="SourceAlpha" result="shadowOffsetOuter1"/>
                                                        <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="8"/>
                                                        <feColorMatrix in="shadowBlurOuter1" result="shadowMatrixOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                                                        <feMerge>
                                                            <feMergeNode in="shadowMatrixOuter1"/>
                                                            <feMergeNode in="SourceGraphic"/>
                                                        </feMerge>
                                                    </filter>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <g fill="#27D290" fill-rule="nonzero">
                                                        <g filter="url(#4ykc5spk6a)" transform="translate(-720 -469) translate(661 448)">
                                                            <g>
                                                                <g>
                                                                    <path d="M12.267.237c-.299.027-.579.157-.793.367L.419 11.674c-.25.248-.39.586-.386.937v33.214c0 .72.582 1.303 1.3 1.303h24.712c.47.007.906-.24 1.143-.646.236-.406.236-.908 0-1.314-.237-.406-.674-.653-1.143-.645H2.634v-30.61h9.754c.719 0 1.301-.583 1.301-1.302V2.842h21.46V32.8c-.006.47.24.907.645 1.143.405.237.906.237 1.312 0 .405-.236.651-.673.645-1.143V1.54c0-.72-.583-1.303-1.301-1.303H12.388c-.04-.002-.08-.002-.121 0zm-1.18 4.437v6.635H4.464l6.625-6.635zm31.172 31.71c-.67.074-1.173.649-1.159 1.323v13.575l-4.897-5.352c-.264-.292-.645-.45-1.037-.428-.507.027-.951.347-1.14.82-.187.471-.083 1.01.266 1.378l7.154 7.815c.246.267.592.419.955.419.362 0 .709-.152.955-.419l7.153-7.815c.484-.529.45-1.35-.075-1.837-.526-.487-1.346-.457-1.835.067l-4.898 5.352V37.707c.008-.375-.145-.735-.422-.988-.276-.254-.648-.375-1.02-.334z" transform="translate(88 50) translate(0 .415)"/>
                                                                    <path d="M9.66 29.585V26h2.184c1.806 0 3.136-1.232 3.136-3.108 0-1.876-1.288-3.108-3.136-3.108H7.812v9.8H9.66zm2.002-5.264H9.66v-2.856h2.002c.882 0 1.47.56 1.47 1.428 0 .868-.588 1.428-1.47 1.428zm6.146 5.264V26h2.184c1.806 0 3.136-1.232 3.136-3.108 0-1.876-1.288-3.108-3.136-3.108H15.96v9.8h1.848zm2.002-5.264h-2.002v-2.856h2.002c.882 0 1.47.56 1.47 1.428 0 .868-.588 1.428-1.47 1.428zm8.414 5.264v-8.12h2.968v-1.68h-7.784v1.68h2.968v8.12h1.848z" transform="translate(88 50) translate(0 .415)"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>

                                        <?php
                                        }
                                        ?>

                                        </div>
                                        <div class="infoDocument">
                                            <h4><?php echo $titulo_documento ?></h4>
                                            <p class="small"><?php echo $descricao_documento ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>



                            <?php
                            }

                            if ($counter == 4 ) {
                            break;
                            }
                    ?>


                        <?php
                        $counter++;
                        endwhile;
                        else :
                        endif;
                        ?>

                        <a class="botaoBorda corverde is-animated mobileonly" href="<?php the_field('ver_todos_botao_URL') ?>"><?php the_field('ver_todos_botao') ?></a>

                    </div>
                </div>


            </section>
                    -->
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
        </div>
	</main><!-- #main -->

    <style>


        body::after{
        position:absolute; width:0; height:0; overflow:hidden; z-index:-1;
        content:url('<?php the_field('imag_2'); ?>') url(<?php the_field('imag_3'); ?>) url(<?php the_field('imag_4'); ?>) url(<?php the_field('imag_5') ; ?>)  url(<?php the_field('imag_6')  ; ?>)  url(<?php the_field('imag_7') ; ?>);   // load images
        }



        @media screen and (min-width:1281px) {


        #solucoes1{
            background-image: url('<?php the_field('imag'); ?>');
        }
        #solucoes1.hover1{
            background-image: url('<?php the_field('imag_2'); ?>') !important;
        }
        #solucoes1.hover2{
            background-image: url('<?php the_field('imag_3'); ?>') !important;
        }
        #solucoes1.hover3{
            background-image: url('<?php the_field('imag_4'); ?>') !important;
        }
        #solucoes1.hover4{
            background-image: url('<?php the_field('imag_5'); ?>') !important;
        }
        #solucoes1.hover5{
            background-image: url('<?php the_field('imag_6'); ?>') !important;
        }
        #solucoes1.hover6{
            background-image: url('<?php the_field('imag_7'); ?>') !important;
        }


    }



    </style>



<script>
(function($) {







        $( ".howItWorksSlide" ).click(function() {
            var desc1 = $(this).find('.descCompleta').html();
            var title1 = $(this).find('.title1').html();
            $('#tituloDescri').html(title1);
            $('#descDescri').html(desc1);
            $('.popHomeSol').addClass('visivel');
        });



        $( ".closeinfo" ).click(function() {
            $('.popHomeSol').removeClass('visivel');
        });






    var d = new Date();
	var weekday = new Array(7);
	weekday[0] = "Domingo";
	weekday[1] = "2a Feira";
	weekday[2] = "3a Feira";
	weekday[3] = "4a Feira";
	weekday[4] = "5a Feira";
	weekday[5] = "6a Feira";
	weekday[6] = "Sábado";
	var n = weekday[d.getDay()];
	$('.weekday').html(n);



	$("#solucoes1 .col-sm-12:nth-of-type(1)").hover(
			function () {
            //$("#solucoes1").attr('class', 'section third fp-section fp-table active fp-completely hover1');
            $("#solucoes1").addClass('hover1').removeClass('hover2 hover3 hover4 hover5 hover6');

			}
	);

	$("#solucoes1 .col-sm-12:nth-of-type(2)").hover(
			function () {
                $("#solucoes1").addClass('hover2').removeClass('hover1 hover3 hover4 hover5 hover6');
			}
	);

	$("#solucoes1 .col-sm-12:nth-of-type(3)").hover(
			function () {
                $("#solucoes1").addClass('hover3').removeClass('hover2 hover1 hover4 hover5 hover6');
			}
	);


	$("#solucoes1 .col-sm-12:nth-of-type(4)").hover(
			function () {
                $("#solucoes1").addClass('hover4').removeClass('hover2 hover3 hover1 hover5 hover6');
			}
	);

	$("#solucoes1 .col-sm-12:nth-of-type(5)").hover(
			function () {
                $("#solucoes1").addClass('hover5').removeClass('hover2 hover3 hover4 hover1 hover6');
			}
    );

	$("#solucoes1 .col-sm-12:nth-of-type(6)").hover(
			function () {
                $("#solucoes1").addClass('hover6').removeClass('hover2 hover3 hover4 hover1 hover5');
			}
    );





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



$('.BannerSlider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        arrows: false,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnFocus: false,
        pauseOnHover:false
});
$('.BannerSlider .slick-dots li').append('<svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37"><g fill="none" fill-rule="evenodd" opacity=".5"><g stroke="#FFF" stroke-width="4"><path d="M637 192c-19.33 0-35 15.67-35 35" transform="translate(-600 -192) matrix(1 0 0 -1 0 419)"/></g></g></svg>');




if ($(window).width() < 1281) {
        $('.mobileSlide').slick({
        dots: false,
        infinite: false,
        slidesToShow: 3,
        responsive: [
                {
                breakpoint: 700,
                settings: {
                        slidesToShow: 1,
                }
                }
        ]
        });



        $('.noticiasHome').slick({
        dots: false,
        infinite: false,
        arrows: false,
        slidesToShow: 2,
        infinite: true,
        responsive: [
                {
                breakpoint: 700,
                settings: {
                        slidesToShow: 1,
                }
                }
        ]
        });




}






})( jQuery );


</script>