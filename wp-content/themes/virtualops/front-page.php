<?php
/**
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
    <?php if( get_field('banner_video') ): ?>
    <section class="section section--banner video--banner">
        <video autoplay="" muted="" loop="" playsinline="" id="desktop">
            <source src="<?php the_field('banner_video'); ?>" type="video/mp4">
        </video>
    </section>
    <?php endif; ?>
    <section class="section section--motivation">
        <div class="wrap">
            <?php if( get_field('services_main_heading') ): ?>
            <div class="succeed__heading text-center">
                <h2 class="text-orange h1"><?php the_field('services_main_heading'); ?></h2>
            </div>
            <?php endif; ?>
            <div class="row row--items-center">
                <div class="col-7 col-md-12">
                    <div class="row row--items-center">
                        <div class="col-6 col-md-6 col-sm-12">
                            <?php $srinfo = get_field('product_content'); ?>
                            <?php if( $srinfo ): ?>
                            <div class="motivation__card wow bounceInUp" data-wow-duration="1s">
                                <?php echo wp_get_attachment_image( $srinfo['icon'], 'full' );  ?>
                                <h3><?php echo $srinfo['heading']; ?></h3>
                                <p><?php echo $srinfo['description']; ?></p>
                                <a href="<?php echo $srinfo['link']; ?>" class="btn-text">Learn
                                    more</a>
                            </div>
                            <?php endif; ?>
                            <?php $srinfo1 = get_field('product_data_management'); ?>
                            <?php if( $srinfo1 ): ?>
                            <div class="motivation__card wow bounceInUp" data-wow-duration="1.5s">
                                <?php echo wp_get_attachment_image( $srinfo1['icon'], 'full' );  ?>
                                <h3><?php echo $srinfo1['heading']; ?></h3>
                                <p><?php echo $srinfo1['description']; ?></p>
                                <a href="<?php echo $srinfo1['link']; ?>" class="btn-text">Learn
                                    more</a>
                            </div>
                            <?php endif; ?>
                            <div class="motivation__dots">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dot-bg.png"
                                    alt="Dotts">
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                            <?php $srinfo2 = get_field('digital_asset_management'); ?>
                            <?php if( $srinfo2 ): ?>
                            <div class="motivation__card wow bounceInUp" data-wow-duration="2.0s">
                                <?php echo wp_get_attachment_image( $srinfo2['icon'], 'full' );  ?>
                                <h3><?php echo $srinfo2['heading']; ?></h3>
                                <p><?php echo $srinfo2['description']; ?></p>
                                <a href="<?php echo $srinfo2['link']; ?>" class="btn-text">Learn
                                    more</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-md-12">
                    <div class="motivation__text">
                        <?php if( get_field('services_heading') ): ?>
                        <div class="wow bounceInUp" data-wow-duration="1s">
                            <h2 class="text-orange"><?php the_field('services_heading'); ?></h2>
                        </div>
                        <?php endif; ?>
                        <div class="wow bounceInUp" data-wow-duration="2s">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--succeed pb-0">
        <div class="wrap">
            <div class="succeed__heading text-center">
                <?php if( get_field('collaborateoptimizeaccelerate_heading') ): ?>
                <h2 class="text-orange dots__title">
                    <?php the_field('collaborateoptimizeaccelerate_heading'); ?>
                </h2>
                <?php endif; ?>
                <?php if( get_field('collaborateoptimizeaccelerate_description') ): ?>
                <p class="font-md"><?php the_field('collaborateoptimizeaccelerate_description'); ?></p>
                <?php endif; ?>
            </div>
            <div class="row mt-32">
                <?php if( have_rows('slider_images') ): ?>
                <div class="col-6 col-md-12">
                    <div class="marketing__img">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/phone-frame.png"
                            alt="phone">
                        <div class="marketing__slider">
                            <?php while( have_rows('slider_images') ): the_row();  ?>
                            <div class="marketing__images">
                                <?php echo wp_get_attachment_image( get_sub_field('image'), 'full' ); ?>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-6 col-md-12">
                    <?php if( get_field('banefit_heading') ): ?>
                    <h3 class="mb-40"><?php the_field('banefit_heading'); ?></h3>
                    <?php endif; ?>
                    <div class="succeed--content mt-24">
                        <div class="content__img wow bounceInUp">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/line.jpg"
                                alt="line">
                        </div>
                        <?php if( have_rows('benifits') ): ?>
                        <div class="content--info">
                            <?php while( have_rows('benifits') ): the_row();  ?>
                            <div class="info__text wow bounceInUp" data-wow-duration="1s">
                                <h4><?php the_sub_field('title'); ?></h4>
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--experience">
        <div class="wrap">
            <div class="row">
                <div class="col-6 col-md-12">
                    <div class="experience__info ">
                        <?php if( get_field('experience_heading') ): ?>
                        <h2 class="wow bounceInUp text-orange" data-wow-duration="0.5s">
                            <?php the_field('experience_heading'); ?></h2>
                        <?php endif; ?>
                        <div class="wow bounceInUp" data-wow-duration="1s">
                            <?php if( get_field('experience_description') ): ?>
                            <?php the_field('experience_description'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <?php  if( get_field('experience_img') ) { ?>
                    <?php echo wp_get_attachment_image( get_field('experience_img'), 'full' );  ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php if( have_rows('why_choose') ): ?>
    <section class="section section--why pt-0">
        <div class="wrap">
            <?php if( get_field('choose_us_heading') ): ?>
            <div class="why__heading">
                <h2 class="text-orange"><?php the_field('choose_us_heading'); ?></h2>
            </div>
            <?php endif; ?>
            <div class="why__content mt-48">
                <?php while( have_rows('why_choose') ): the_row();  ?>
                <div class="why__block text-center">
                    <?php echo wp_get_attachment_image( get_sub_field('icon'), 'full' );  ?>
                    <h4><?php the_sub_field('title'); ?></h4>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php
    $your_query = new WP_Query(array( 'page_id' => 14 ));
    while ( $your_query->have_posts() ) : $your_query->the_post();
    if( have_rows('testimonials') ): ?>
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
    <?php endif;
    endwhile;
    wp_reset_postdata();
    ?>
</main><!-- #main -->

<?php
get_footer();