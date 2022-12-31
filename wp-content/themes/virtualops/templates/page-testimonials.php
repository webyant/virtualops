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
    <section class="section section--advertising">
        <div class="wrap">
            <div class="slider">
                <div class="advertising__slider">
                    <blockquote>
                        <p>I was tasked to identify an outsourced partner that is knowledgeable, smart, flexible and
                            competitive. After choosing Virtual Ops over 7 years back, I was impressed with the quick
                            learning of Virtual Ops team, the diligence
                            and systematic processes they established in short time that ensured timely deliverables
                            with high quality. I appreciate their consultative efforts that were focused on improving
                            our business outcomes. What I like most
                            about them is their prompt service and flexibility to learn and implement new projects
                            quickly. Other benefits that I get are competitive rates and high quality. Apart from being
                            very collaborative and constructive, the
                            team at Virtual Ops understands what they are doing. Over the past 7 years our relationship
                            with Virtual Ops has become a real partnership. This allows us to explore new opportunities
                            to support the development of our business.
                        </p>
                    </blockquote>
                    <div class="testimonial-title">
                        <h3>Harry Drummer</h3>
                        <p>COO – Adorama.com</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/adorama.png"
                            alt="adorama">
                    </div>
                </div>
                <div class="advertising__slider">
                    <blockquote>
                        <p>I have been working with Virtual Ops and Samir for almost 10 years. Samir has been a great
                            partner to help us with our product content efforts. From day one of our engagement Samir
                            has personally invested his time to understand
                            our needs and developed the corrected processes to make sure that the job gets done in a
                            very efficient and expedited manner. He has done the same for every new project that has
                            come, he hands it off to his team only after
                            he understands what’s needed to be done and has discussed and aligned with us on the process
                            and the expected results.</p>
                    </blockquote>
                    <div class="testimonial-title">
                        <h3>Bill Parnes</h3>
                        <p>VP – Scuba.com</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/scuba.png"
                            alt="scuba">
                    </div>
                </div>
                <div class="advertising__slider">
                    <blockquote>
                        <p>Virtual Ops has been our partner for our product content requirements for over 6 years now.
                            They have consistently delivered quality for all our product data requirements including
                            migration to Product Information Management
                            system. What I like about Samir and his team is that they constantly learn, develop
                            knowledgebase, use tools and technologies that helps deliver high quality. They are always
                            flexible and available to work on urgent and
                            new requirements at short notice. They are truly our trusted partner. Always reliable and
                            fast, even after I leave for the day, I can always count on you guys to get requests done.
                            Thank you!</p>
                    </blockquote>
                    <div class="testimonial-title">
                        <h3>Steve Anderson</h3>
                        <p>Web Content, Adorama</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/adorama.png"
                            alt="adorama">
                    </div>
                </div>
                <div class="advertising__slider">
                    <blockquote>
                        <p>It has been a pleasure to work with Virtual Ops. I co-ordinate and manage multiple partners
                            for our Product Information Management platform updates, and Virtual Ops clearly stands out
                            in their deliverables, communication, promptness
                            and quality. Not only have they consistently delivered high quality on time, but they go
                            above and beyond to provide constructive feedback on process improvements, correction of
                            errors from SKU sources, removing duplication/errors.
                            Samir’s communication be it on JIRA or emails has been clear and objective. I recommend
                            anyone to partner with Virtual Ops for their product data management requirements.
                        </p>
                    </blockquote>
                    <div class="testimonial-title">
                        <h3>Jean-Alex Ervilus</h3>
                        <p>Merchandise Specialist - Sunnysports.com</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sunnysports.png"
                            alt="Sunnysports">
                    </div>
                </div>
            </div>
            <img class="doots" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dot-bg.png"
                alt="Doots">
        </div>
    </section>
    <?php endwhile; // End of the loop. ?>

</main><!-- #main -->

<?php get_footer();