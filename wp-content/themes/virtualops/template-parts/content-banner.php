<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virtual_Ops
 */

?>

<section class="section inner--banner" <?php if( get_field('banner_background') ): ?>
    style="background-image:url(<?php the_field('banner_background'); ?>)" <?php endif; ?>>
    <div class="wrap">
        <div class="row no-guttor row--items-center">
            <div class="col-6 col-sm-9 col-xs-10 col-xxs-12">
                <div class="banner__text wow bounceInUp">
                    <?php if( get_field('banner_heading') ) { ?>
                    <h1><?php the_field('banner_heading'); ?></h1>
                    <?php } else { ?>
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    <?php } ?>
                    <?php if( get_field('banner_description') ): ?>
                    <p><?php the_field('banner_description'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>