<?php
/**
 * Template Name: Who We Are
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
    <section class="section section--creativity">
        <div class="wrap">
            <div class="row row--items-center">
                <?php if( get_field('intro_image') ): ?>
                <div class="col-6 col-md-12 mb-md-32">
                    <?php echo wp_get_attachment_image( get_field('intro_image'), 'full', "", ["class" => "image-radius"]); ?>
                </div>
                <?php endif; ?>
                <?php if( have_rows('intro_content') ): ?>
                <div class="col-6 col-md-12">
                    <?php while( have_rows('intro_content') ): the_row();  ?>
                    <div class="section__title">
                        <h2 class="text-orange"><?php the_sub_field('title'); ?></h2>
                        <p><?php the_sub_field('description'); ?></p>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php if( have_rows('expertise') ): ?>
    <section class="section section--business pt-0">
        <div class="wrap">
            <?php if( get_field('expertise_heading') ): ?>
            <div class="section__title text-center">
                <h2 class="text-orange"><?php the_field('expertise_heading'); ?></h2>
            </div>
            <?php endif; ?>
            <div class="row ">
                <?php while( have_rows('expertise') ): the_row();  ?>
                <div class="col-4 col-md-6 col-sm-12 mb-32">
                    <div class="feature__card">
                        <?php echo wp_get_attachment_image( get_sub_field('image'), 'full' );  ?>
                        <h4><?php the_sub_field('title'); ?></h4>
                        <p><?php the_sub_field('description'); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php if( have_rows('partnership_approach') ): ?>
    <section class="section section--seo section--light--bg">
        <div class="wrap">
            <?php if( get_field('partnership_approach_heading') ): ?>
            <div class="section__title text-center">
                <h2 class="text-orange"><?php the_field('partnership_approach_heading'); ?></h2>
            </div>
            <?php endif; ?>
            <?php $i=1; while( have_rows('partnership_approach') ): the_row();  ?>
            <div class="seo__timeline-item">
                <div class="timeline-item-line"></div>
                <div class="timeline-item-dot"></div>
                <div class="row <?php if($i % 2 == 0){ echo "row--reverse"; } ?> row--items-center">
                    <div class="col-6">
                        <div class="timeline__card wow <?php if($i % 2 == 0){ echo "bounceInRight"; } else { echo 'bounceInLeft'; } ?>"
                            data-wow-duration="2s">
                            <?php echo wp_get_attachment_image( get_sub_field('image'), 'full' );  ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="timeline__card wow <?php if($i % 2 == 0){ echo "bounceInLeft"; } else { echo 'bounceInRight'; } ?>"
                            data-wow-duration="2s">
                            <p><?php the_sub_field('description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; endwhile; ?>
        </div>
    </section>
    <?php endif; ?>
    <section class="section secton--faq">
        <div class="wrap">
            <div class="row">
                <?php if( get_field('support_you_image') ): ?>
                <div class="col-6 col-md-12">
                    <?php echo wp_get_attachment_image( get_field('support_you_image'), 'full' );  ?>
                </div>
                <?php endif; ?>
                <div class="col-6 col-md-12">
                    <div class="section__title">
                        <?php if( get_field('support_you_heading') ): ?>
                        <h2 class="text-orange"><?php the_field('support_you_heading'); ?></h2>
                        <?php endif; ?>
                        <?php if( get_field('support_you_description') ): ?>
                        <p><?php the_field('support_you_description'); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php if( have_rows('support_you') ): ?>
                    <div class="accordian__list">
                        <?php $i=1; while( have_rows('support_you') ): the_row();  ?>
                        <div class="accordian__block">
                            <h4><?php echo $i . '. ' ?> <?php the_sub_field('title'); ?></h4>
                            <div class="accordian__content">
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                        <?php $i++; endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--founder pt-0">
        <div class="wrap">
            <div class="founder__content">
                <?php if( get_field('founders_image') ): ?>
                <?php echo wp_get_attachment_image( get_field('founders_image'), 'full', "", ["class" => "image-radius"]); ?>
                <?php endif; ?>
                <?php if( get_field('founders_heading') ): ?>
                <h2><?php the_field('founders_heading'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('founders_content') ): ?>
                <?php the_field('founders_content'); ?>
                <?php endif; ?>
                <?php if( get_field('founders_name') ): ?>
                <div class="text-right"><strong><?php the_field('founders_name'); ?></strong></div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php endwhile; // End of the loop. ?>

</main><!-- #main -->

<?php get_footer();