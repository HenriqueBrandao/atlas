<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atlas
 */

?>

            <li class="col-md-3 noticiaWra">
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