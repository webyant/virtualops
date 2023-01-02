<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virtual_Ops
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php virtualops_post_thumbnail(); ?>
    <div class="wrap wrap-840">
        <header class="entry-header mb-32">
            <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
            <div class="entry-meta">
                <?php
				virtualops_posted_on();
				virtualops_posted_by();
				?>
            </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->
        <div class="entry-content mb-32">
            <?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'virtualops' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'virtualops' ),
				'after'  => '</div>',
			)
		);
		?>
        </div><!-- .entry-content -->

        <footer class="entry-footer mb-32">
            <?php virtualops_entry_footer(); ?>
        </footer><!-- .entry-footer -->
        <div class="related-articles mb-24">
            <h4>Related Articles:</h4>
            <ul class="read-blog">
                <?php
					$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
					if( $related ) foreach( $related as $post ) {
					setup_postdata($post); ?>
                <li><a href="<?php the_permalink() ?>" rel="bookmark"
                        title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                <?php }
					wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->