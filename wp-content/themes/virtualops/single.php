<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Virtual_Ops
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="section section--blog">
        <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() ); ?>

        <div class="wrap wrap-840">
            <?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
        </div>
        <?php endwhile; // End of the loop.
		?>
    </section>
</main><!-- #main -->

<?php
get_footer();