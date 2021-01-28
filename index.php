<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atlas
 */

get_header();
?>

	<main id="primary" class="site-main firstSection">
	<div class="container">
	<h1 class="page-title"><?php single_post_title(); ?></h1>

	<div class="noticiasPagina">


		<?php
		if ( have_posts() ) :
				?>
				<?php

			while ( have_posts() ) :
				the_post();
					get_template_part( 'template-parts/content-noticias', );
			endwhile;
				wpbeginner_numeric_posts_nav();
			else :
			get_template_part( 'template-parts/content', 'none' );
			endif;
		?>
	</div>
	</div>
	</main><!-- #main -->

	<section id="footer" class="section fp-auto-height footer">
        <?php
        get_footer();
        ?>
  </section>