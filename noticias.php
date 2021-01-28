<?php
/**
 * Template Name: Noticias Template
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

	<article class="noticiasPagina">

		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=16' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post();





					get_template_part( 'template-parts/content-noticias', );?>






		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>
	</div>
	</div>
	</main><!-- #main -->






	<section id="footer" class="section fp-auto-height footer">
        <?php
        get_footer();
        ?>
  </section>


<script>

(function($) {


	var html1 = 	$('body.pt-pt #nav-posts .prev a').html();
	$('body.pt-pt #nav-posts .prev a').html('« Artigos Anteriores');
	$('body.pt-pt #nav-posts .next a').html('Próximos Artigos');

});

</script>