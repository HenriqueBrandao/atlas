<?php
/**
 * Template Name: Documentos Template
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


	<main id="primary" class="site-main firstSection">

















        <section id="documentos"  class="section sixth">
            <div class="container">
                <div class="titleButton">
                    <h1 class="is-animated verde"><?php the_title();?></h1>
                </div>
                <div class="row documentosWrappr">






                <?php
                    if( have_rows('documento_repeater', 'option') ):
                    while( have_rows('documento_repeater', 'option') ) : the_row();
                        $ficheiro_documento = get_sub_field('ficheiro_documento');
                        $titulo_documento = get_sub_field('titulo_documento');
                        $descricao_documento = get_sub_field('descricao_documento');

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
                    endwhile;
                    else :
                    endif;
                    ?>














                </div>
            </div>


        </section>



        <section id="partner"  class="section fp-auto-height seven">
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
        #solucoes1{
            background-image: url('http://localhost/atlas/wp-content/uploads/2020/09/red-zeppelin-ja-y-6-pr-jpzaw-unsplash@2x.jpg');
        }
        #solucoes1.hover1{
            background-image: url('http://localhost/atlas/wp-content/uploads/2020/09/red-zeppelin-s-ak-a-hc-7-hh-a-unsplash@2x.jpg') !important;
        }
    </style>



<script>
(function($) {





})( jQuery );


</script>