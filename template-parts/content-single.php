<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atlas
 */

?>

<div class="col-md-12 row">
    <div class="container flexcenter">
                <div class="col-md-6">
                        <div class="postThumb">
                            <?php the_post_thumbnail(); ?>
                        </div>
                </div>
                <div class="col-md-6 ladoDirNot">
                            <div class="titleNoticia">
                                <?php the_title(); ?>
                            </div>
                            <div class="dataNoticia">
                                <?php echo get_the_date( 'Y-m-d' ); ?>
                            </div>
                </div>
    </div>
 </div>

 <div class="col-md-12 row">
    <div class="container">
                <div class="col-md-12 entry-content">
                            <?php the_content(); ?>
                </div>

    </div>
 </div>



