<?php
/**
 * Template Name: Contact Us
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
    <section class="section">
        <div class="wrap">
            <div class="row">
                <div class="col-6 col-md-12">
                    <div class="section__title">
                        <?php if( get_field('contact_title') ): ?>
                        <h2 class="text-orange"><?php the_field('contact_title'); ?></h2>
                        <?php endif; ?>
                        <?php if( get_field('contact_description') ): ?>
                        <p><?php the_field('contact_description'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="get__form">
                        <ul class="contact__info">
                            <?php if( get_field('us_address') ): ?>
                            <li>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/worldwide.png"
                                    alt="Worldwide" width="55">
                                <p><strong>US Address:</strong> <br><?php the_field('us_address'); ?></p>
                            </li>
                            <?php endif; ?>
                            <?php if( get_field('india_address') ): ?>
                            <li>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/worldwide.png"
                                    alt="Worldwide" width="55">
                                <p><strong>India Address:</strong> <br><?php the_field('india_address'); ?></p>
                            </li>
                            <?php endif; ?>
                            <?php if( get_field('phone') ): ?>
                            <li>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/contact-book.png"
                                    alt="ContactBook" width="55">
                                <p><strong>Call us on:</strong><br><?php the_field('phone'); ?></p>
                            </li>
                            <?php endif; ?>
                            <?php if( get_field('email') ): ?>
                            <li>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mail.png"
                                    alt="Mail" width="55">
                                <p><strong>Email us on:</strong><br><?php the_field('email'); ?></p>

                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-md-12 mt-md-48 mb-md-48">
                    <div class="contact__form">
                        <h3 class="mb-32">Drop Us a Line</h3>
                        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="google-map">
        <div class="row no-guttor">
            <?php if( get_field('us_map') ): ?>
            <div class="col-6 col-sm-12">
                <?php the_field('us_map'); ?>
            </div>
            <?php endif; ?>
            <?php if( get_field('india_map') ): ?>
            <div class="col-6 col-sm-12">
                <?php the_field('india_map'); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endwhile; // End of the loop. ?>

</main><!-- #main -->

<?php get_footer();