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
 * @package Virtual_Ops
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="section section--blog pt-32">
        <div class="wrap">
            <div class="row">

                <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post(); ?>
                <div class="col-4 col-md-6 col-sm-12">
                    <?php get_template_part( 'template-parts/content', 'excerpt'); ?>
                </div>
                <?php
                        endwhile;
                        the_posts_navigation();
                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif;
                    ?>

            </div>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();