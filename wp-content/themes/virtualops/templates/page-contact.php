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
                        <h2 class="text-orange">Let’s Get in Touch</h2>
                        <p>We are excited to hear from you about your Product Data enhancement opportunities. Even if it
                            is just a few questions and ideas to share, please reach out to us. We will be happy to
                            connect with you.</p>
                    </div>
                    <div class="get__form">
                        <ul class="contact__info">
                            <li>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/worldwide.png"
                                    alt="Worldwide" width="55">
                                <p><strong>US Address:</strong> <br>115 W 29th St #908, New York, NY 10001</p>
                            </li>
                            <li>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/worldwide.png"
                                    alt="Worldwide" width="55">
                                <p><strong>India Address:</strong> <br>B-302, Titanium City Center, 100 Feet Road,
                                    Anandnagar, Ahmedabad – 380015</p>
                            </li>
                            <li>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/contact-book.png"
                                    alt="ContactBook" width="55">
                                <p><strong>Call us on:</strong><br>+91 9099002391</p>
                            </li>
                            <li>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mail.png"
                                    alt="Mail" width="55">
                                <p><strong>Email us on:</strong><br>info@virtualops.net</p>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-md-12 mt-md-48 mb-md-48">
                    <div class="contact__form">
                        <h3 class="mb-32">Drop Us a Line</h3>
                        <form action="#">
                            <div class="form-group">
                                <input class="form-control" type="text" name="Fname" id="fname" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="comment" id="comment" cols="5" rows="5"
                                    placeholder="Your Comment"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="btn" value="Send a Message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="google-map">
        <div class="row no-guttor">
            <div class="col-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.677752990345!2d-73.99339442355777!3d40.747115771388295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259af6ee129d9%3A0x7ba5df23ef6c470!2s115%20W%2029th%20St%20%23908%2C%20New%20York%2C%20NY%2010001%2C%20USA!5e0!3m2!1sen!2sin!4v1672319306149!5m2!1sen!2sin"
                    width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.2961676115187!2d72.5165739!3d23.012895399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b2a4c3f0c17%3A0x4ae0ac247f9c0ca0!2sVirtual%20Ops!5e0!3m2!1sen!2sin!4v1672319328999!5m2!1sen!2sin"
                    width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <?php endwhile; // End of the loop. ?>

</main><!-- #main -->

<?php get_footer();