<?php
/**
 * Template Name: Services
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
    <section class="section" id="productcontent">
        <div class="wrap">
            <div class="text-center font-md mb-48"><?php the_content(); ?>
            </div>
            <?php if( get_field('product_content_heading') ): ?>
            <div class="section__title text-center">
                <h2 class="text-orange"><?php the_field('product_content_heading'); ?></h2>
            </div>
            <?php endif; ?>
            <div class="row">
                <?php if( get_field('product_content_image') ): ?>
                <div class="col-6 col-md-12">
                    <div class="sticky__img">
                        <?php echo wp_get_attachment_image( get_field('product_content_image'), 'full'); ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if( have_rows('product_content') ): ?>
                <div class="col-6 col-md-12 mt-md-48">
                    <div class="accordian__list">
                        <?php $i=1; while( have_rows('product_content') ): the_row();  ?>
                        <div class="accordian__block">
                            <h4 <?php if ($i==1) { ?> class="active" <?php } ?>><?php the_sub_field('title'); ?></h4>
                            <div class="accordian__content" <?php if ($i==1) { ?> style="display: block;" <?php } ?>>
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                        <?php $i++; endwhile; ?>

                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="section section--light--bg" id="productdatamanagement">
        <div class="wrap">
            <?php if( get_field('product_data_management_heading') ): ?>
            <div class="section__title text-center">
                <h2 class="text-orange"><?php the_field('product_data_management_heading'); ?></h2>
            </div>
            <?php endif; ?>
            <div class="row row--reverse">
                <?php if( get_field('product_data_management_image') ): ?>
                <div class="col-6 col-md-12">
                    <div class="sticky__img">
                        <?php echo wp_get_attachment_image( get_field('product_data_management_image'), 'full'); ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if( have_rows('product_data_management') ): ?>
                <div class="col-6 col-md-12 mt-md-48">
                    <div class="accordian__list">
                        <?php $i=1; while( have_rows('product_data_management') ): the_row();  ?>
                        <div class="accordian__block">
                            <h4 <?php if ($i==1) { ?> class="active" <?php } ?>><?php the_sub_field('title'); ?></h4>
                            <div class="accordian__content" <?php if ($i==1) { ?> style="display: block;" <?php } ?>>
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                        <?php $i++; endwhile; ?>

                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="section" id="digitalassetmanagement">
        <div class="wrap">
            <?php if( get_field('digital_asset_management_heading') ): ?>
            <div class="section__title text-center">
                <h2 class="text-orange"><?php the_field('digital_asset_management_heading'); ?></h2>
            </div>
            <?php endif; ?>
            <div class="row">
                <?php if( get_field('digital_asset_management_image') ): ?>
                <div class="col-6 col-md-12">
                    <div class="sticky__img">
                        <?php echo wp_get_attachment_image( get_field('digital_asset_management_image'), 'full'); ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if( have_rows('digital_asset_management') ): ?>
                <div class="col-6 col-md-12 mt-md-48">
                    <div class="accordian__list">
                        <?php $i=1; while( have_rows('digital_asset_management') ): the_row();  ?>
                        <div class="accordian__block">
                            <h4 <?php if ($i==1) { ?> class="active" <?php } ?>><?php the_sub_field('title'); ?></h4>
                            <div class="accordian__content" <?php if ($i==1) { ?> style="display: block;" <?php } ?>>
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                        <?php $i++; endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endwhile; // End of the loop. ?>

</main><!-- #main -->

<?php get_footer();