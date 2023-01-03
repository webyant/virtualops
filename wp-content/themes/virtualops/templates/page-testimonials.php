<?php
/**
 * Template Name: Testimonials
 * Template Post Type: page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virtual_Ops
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
		while ( have_posts() ) :
			the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'banner' ); ?>
    <?php if( have_rows('testimonials') ): ?>
    <section class="section section--advertising">
        <div class="wrap">
            <div class="slider">
                <?php while( have_rows('testimonials') ): the_row();  ?>
                <div class="advertising__slider">
                    <blockquote>
                        <?php the_sub_field('testimonial_content'); ?>
                    </blockquote>
                    <div class="testimonial-title">
                        <h3><?php the_sub_field('name'); ?></h3>
                        <p><?php the_sub_field('designation'); ?></p>
                        <?php echo wp_get_attachment_image( get_sub_field('logo'), 'full' );  ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <img class="doots" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dot-bg.png"
                alt="Doots">
        </div>
    </section>
    <?php endif; ?>
    <?php endwhile; // End of the loop. ?>

</main><!-- #main -->

<?php get_footer();