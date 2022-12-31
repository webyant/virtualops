<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virtual_Ops
 */

?>
<article id="post-<?php the_ID(); ?>" class="blog__card mb-24">
    <div class="mb-24"><?php virtualops_post_thumbnail(); ?></div>
    <?php the_title( sprintf( '<h2 class="mb-4 h3"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    <div class="post-meta mb-8"><span>
            <?php
			virtualops_posted_on();
			virtualops_posted_by();
			?>
        </span></div>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="btn--link">Read More</a>
</article>