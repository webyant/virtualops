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
            <div class="row row--items-center">
                <div class="col-7 col-md-12">
                    <div class="row row--items-center">
                        <div class="col-6 col-md-6 col-sm-12">
                            <div class="motivation__card wow bounceInUp" data-wow-duration="1s">
                                <?php  if( get_field('product_content_icon') ) { ?>
                                <?php echo wp_get_attachment_image( get_field('product_content_icon'), 'full' );  ?>
                                <?php } ?>
                                <?php if( get_field('product_content_heading') ): ?>
                                <h3><?php the_field('product_content_heading'); ?></h3>
                                <?php endif; ?>
                                <?php if( get_field('product_content_description') ): ?>
                                <p><?php the_field('product_content_description'); ?></p>
                                <?php endif; ?>
                                <?php if( get_field('product_content_button_link') ): ?>
                                <a href="<?php the_field('product_content_button_link'); ?>"
                                    class="btn-text"><?php the_field('product_content_button_text'); ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="motivation__card wow bounceInUp" data-wow-duration="1.5s">
                                <?php  if( get_field('product_data_management_icon') ) { ?>
                                <?php echo wp_get_attachment_image( get_field('product_data_management_icon'), 'full' );  ?>
                                <?php } ?>
                                <?php if( get_field('product_data_management_heading') ): ?>
                                <h3><?php the_field('product_data_management_heading'); ?></h3>
                                <?php endif; ?>
                                <?php if( get_field('product_data_management_description') ): ?>
                                <p><?php the_field('product_data_management_description'); ?></p>
                                <?php endif; ?>
                                <?php if( get_field('product_data_management_button_link') ): ?>
                                <a href="<?php the_field('product_data_management_button_link'); ?>"
                                    class="btn-text"><?php the_field('product_data_management_button_text'); ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="motivation__dots">
                                <?php  if( get_field('motivation_img') ) { ?>
                                <?php echo wp_get_attachment_image( get_field('motivation_img'), 'full' );  ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                            <div class="motivation__card wow bounceInUp" data-wow-duration="2.0s">
                                <?php  if( get_field('digital_asset_management_icon') ) { ?>
                                <?php echo wp_get_attachment_image( get_field('digital_asset_management_icon'), 'full' );  ?>
                                <?php } ?>
                                <?php if( get_field('digital_asset_management_heading') ): ?>
                                <h3><?php the_field('digital_asset_management_heading'); ?></h3>
                                <?php endif; ?>
                                <?php if( get_field('digital_asset_management_description') ): ?>
                                <p><?php the_field('digital_asset_management_description'); ?></p>
                                <?php endif; ?>
                                <?php if( get_field('digital_asset_management_button_link') ): ?>
                                <a href="<?php the_field('digital_asset_management_button_link'); ?>"
                                    class="btn-text"><?php the_field('digital_asset_management_button_text'); ?></a>
                                <?php endif; ?>
                            </div>
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
                <?php if( get_field('succeed_heading') ): ?>
                    <h2 class="text-orange dots__title" data-wow-duration="0.5s"><?php the_field('succeed_heading'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('succeed_description') ): ?>
                    <p class="font-md"><?php the_field('succeed_description'); ?></p>
                <?php endif; ?>
            </div>
            <div class="row mt-32">
                <div class="col-6 col-md-12">
                    <div class="marketing__img">
                        <?php  if( get_field('phone_frame_img') ) { ?>
                            <?php echo wp_get_attachment_image( get_field('phone_frame_img'), 'full' );  ?>
                        <?php } ?>
                        <div class="marketing__slider">
                            <div class="marketing__images">
                                <?php  if( get_field('marketing_slider') ) { ?>
                                    <?php echo wp_get_attachment_image( get_field('marketing_slider'), 'full' );  ?>
                                <?php } ?>
                            </div>
                            <div class="marketing__images">
                                <?php  if( get_field('marketing_slider1') ) { ?>
                                    <?php echo wp_get_attachment_image( get_field('marketing_slider1'), 'full' );  ?>
                                <?php } ?>
                            </div>
                            <div class="marketing__images">
                                <?php  if( get_field('marketing_slider2') ) { ?>
                                    <?php echo wp_get_attachment_image( get_field('marketing_slider2'), 'full' );  ?>
                                <?php } ?>
                            </div>
                            <div class="marketing__images">
                                <?php  if( get_field('marketing_slider3') ) { ?>
                                    <?php echo wp_get_attachment_image( get_field('marketing_slider3'), 'full' );  ?>
                                <?php } ?>
                            </div>
                            <div class="marketing__images">
                                <?php  if( get_field('marketing_slider4') ) { ?>
                                    <?php echo wp_get_attachment_image( get_field('marketing_slider4'), 'full' );  ?>
                                <?php } ?>
                            </div>
                            <div class="marketing__images">
                                <?php  if( get_field('marketing_slider5') ) { ?>
                                    <?php echo wp_get_attachment_image( get_field('marketing_slider5'), 'full' );  ?>
                                <?php } ?>
                            </div>
                            <div class="marketing__images">
                                <?php  if( get_field('marketing_slider6') ) { ?>
                                    <?php echo wp_get_attachment_image( get_field('marketing_slider6'), 'full' );  ?>
                                <?php } ?>
                            </div>
                            <div class="marketing__images">
                                <?php  if( get_field('marketing_slider7') ) { ?>
                                    <?php echo wp_get_attachment_image( get_field('marketing_slider7'), 'full' );  ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <?php if( get_field('succeed_right_heading') ): ?>
                        <h3 class="mb-40" data-wow-duration="0.5s"><?php the_field('succeed_right_heading'); ?></h3>
                    <?php endif; ?>
                    <div class="succeed--content mt-24">
                        <div class="content__img wow bounceInUp">
                            <?php  if( get_field('line_img') ) { ?>
                                <?php echo wp_get_attachment_image( get_field('line_img'), 'full' );  ?>
                            <?php } ?>
                        </div>
                        <div class="content--info">
                            <div class="info__text wow bounceInUp" data-wow-duration="1s">
                                <?php if( get_field('improve_heading') ): ?>
                                    <h4><?php the_field('improve_heading'); ?></h4>
                                <?php endif; ?>
                                <?php if( get_field('improve_content') ): ?>
                                    <p><?php the_field('improve_content'); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="info__text wow bounceInUp" data-wow-duration="1.5s">
                                <?php if( get_field('reduce_heading') ): ?>
                                    <h4><?php the_field('reduce_heading'); ?></h4>
                                <?php endif; ?>
                                <?php if( get_field('reduce_content') ): ?>
                                    <p><?php the_field('reduce_content'); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="info__text wow bounceInUp" data-wow-duration="2s">
                                <?php if( get_field('enhance_heading') ): ?>
                                    <h4><?php the_field('enhance_heading'); ?></h4>
                                <?php endif; ?>
                                <?php if( get_field('enhance_content') ): ?>
                                    <p><?php the_field('enhance_content'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
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
                            <h2 class="wow bounceInUp text-orange" data-wow-duration="0.5s"><?php the_field('experience_heading'); ?></h2>
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
    <section class="section section--why pt-0">
        <div class="wrap">
            <?php if( get_field('choose_us_heading') ): ?>
            <div class="why__heading">
                <h2 class="text-orange"><?php the_field('choose_us_heading'); ?></h2>
            </div>
            <?php endif; ?>
            <div class="why__content mt-48">
                <div class="why__block text-center">
                    <?php  if( get_field('why_block_img1') ) { ?>
                        <?php echo wp_get_attachment_image( get_field('why_block_img1'), 'full' );  ?>
                    <?php } ?>
                    <?php if( get_field('why_block_heading1') ): ?>
                        <h4><?php the_field('why_block_heading1'); ?></h4>
                    <?php endif; ?>
                </div>
                <div class="why__block text-center">
                    <?php  if( get_field('why_block_img2') ) { ?>
                        <?php echo wp_get_attachment_image( get_field('why_block_img2'), 'full' );  ?>
                    <?php } ?>
                    <?php if( get_field('why_block_heading2') ): ?>
                        <h4><?php the_field('why_block_heading2'); ?></h4>
                    <?php endif; ?>
                </div>
                <div class="why__block text-center">
                    <?php  if( get_field('why_block_img3') ) { ?>
                        <?php echo wp_get_attachment_image( get_field('why_block_img3'), 'full' );  ?>
                    <?php } ?>
                    <?php if( get_field('why_block_heading3') ): ?>
                        <h4><?php the_field('why_block_heading3'); ?></h4>
                    <?php endif; ?>
                </div>
                <div class="why__block text-center">
                    <?php  if( get_field('why_block_img4') ) { ?>
                        <?php echo wp_get_attachment_image( get_field('why_block_img4'), 'full' );  ?>
                    <?php } ?>
                    <?php if( get_field('why_block_heading4') ): ?>
                        <h4><?php the_field('why_block_heading4'); ?></h4>
                    <?php endif; ?>
                </div>
                <div class="why__block text-center">
                    <?php  if( get_field('why_block_img5') ) { ?>
                        <?php echo wp_get_attachment_image( get_field('why_block_img5'), 'full' );  ?>
                    <?php } ?>
                    <?php if( get_field('why_block_heading5') ): ?>
                        <h4><?php the_field('why_block_heading5'); ?></h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--advertising">
        <div class="wrap">
            <?php if( get_field('testimonials_heading') ): ?>
                <h2 class="mb-48 wow bounceInUp text-orange"><?php the_field('testimonials_heading'); ?></h2>
            <?php endif; ?>
            <?php if( have_rows('testimonials_info') ): ?>
            <div class="slider">
                <?php while( have_rows('testimonials_info') ): the_row(); ?>
                <div class="advertising__slider">
                    <blockquote>
                        <p><?php the_sub_field('testimonials_content'); ?></p>
                    </blockquote>
                    <div class="testimonial-title">
                        <h3><?php the_sub_field('testimonials_title'); ?></h3>
                        <p><?php the_sub_field('testimonials_text'); ?></p>
                        <?php echo wp_get_attachment_image( get_sub_field('testimonials_img'), 'full' ); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>    
            <img class="doots" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dot-bg.png"
                alt="Doots">
            <?php  if( get_field('doots') ) { ?>
                    <?php echo wp_get_attachment_image( get_field('doots'), 'full' );  ?>
            <?php } ?>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();