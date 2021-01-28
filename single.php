<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package atlas
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class=" firstSection">
			<div class="flexcenter containerLarge2">
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
					<div class="buttonAzul">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
									<defs>
											<filter id="1vd9qokqaa">
													<feColorMatrix in="SourceGraphic" values="0 0 0 0 1.000000 0 0 0 0 1.000000 0 0 0 0 1.000000 0 0 0 1.000000 0"/>
											</filter>
									</defs>
									<g fill="none" fill-rule="evenodd">
											<g>
													<g>
															<g filter="url(#1vd9qokqaa)" transform="translate(-73 -168) translate(65 160) translate(8 8)">
																	<g>
																			<g fill="#000" fill-rule="nonzero">
																					<path d="M8.173.219c.265.265.29.68.073.972l-.073.084L2.55 6.899h20.704c.413 0 .747.334.747.747 0 .38-.285.695-.653.74l-.094.006H2.546l5.627 5.626c.265.265.29.68.073.972l-.073.084c-.265.265-.68.29-.972.072l-.084-.072L.22 8.175c-.265-.265-.29-.68-.073-.972L.22 7.12 7.117.219c.292-.292.765-.292 1.056 0z" transform="rotate(90 16 16) rotate(-90 18 10)"/>
																			</g>
																	</g>
															</g>
													</g>
											</g>
									</g>
							</svg>
					</div>
					VER TODAS AS NOTÍCIAS</a>
			</div>
	</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-single', );


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->


<div class="relatedPost">
		<div class="container">
			<?php

			$custom_taxterms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );
			$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 4, // you may edit this number
			'orderby' => 'rand',
			'tax_query' => array(
					array(
							'taxonomy' => 'category',
							'field' => 'id',
							'terms' => $custom_taxterms
					)
			),
			'post__not_in' => array ($post->ID),
			);
			$related_items = new WP_Query( $args );
			if ($related_items->have_posts()) :
			echo '<ul class="noticiasHome" >';
			while ( $related_items->have_posts() ) : $related_items->the_post();
								get_template_part( 'template-parts/content-noticias', );
			endwhile;
			echo '</ul>';
			endif;
			wp_reset_postdata();
			?>
		</div>



</div>




	<section id="partner"  class="section fp-auto-height seven">
        <div class="container">
            <h1 class="text-center is-animated">O nosso premium <br>partner</h1>
            <div class="parterWrap is-animated">
                <img src="http://localhost/atlas/wp-content/uploads/2020/09/sompo-logo@2x.png">
            </div>
        </div>
		</section>

	<section id="footer" class="section fp-auto-height footer">
        <?php
        get_footer();
        ?>
	</section>


