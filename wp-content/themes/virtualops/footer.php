<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Virtual_Ops
 */

?>

<footer id="colophon" class="site-footer">
    <div class="wrap">
        <div class="getintouch">
            <h2 class="text-white">Are you ready to scale your eCommerce business?</h2>
            <p>Let us help you achieve your vision</p>
            <a href="<?php echo get_permalink(16); ?>" class="btn">Get In Touch</a>
        </div>
        <div class="row top-row">
            <div class="col-3 col-sm-6 col-xxs-12">
                <h5>Let’s Get in Touch</h5>
                <p class="mb-32">We are excited to hear from you about your Product Data enhancement opportunities. Even
                    if it is just a few questions and ideas to share, please reach out to us. We will be happy to
                    connect with you.</p>
            </div>
            <div class="col-3 col-sm-6 col-xxs-12">
                <h5>Important Links</h5>
                <?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
                                'container' => false,
								'menu_id'        => 'footer-menu',
							)
						);
					?>

            </div>
            <div class="col-6 col-sm-12 col-xxs-12 mt-16">
                <h5>Contact Us</h5>
                <div class="row">
                    <div class="col-6 col-sm-6 col-xxs-12">
                        <p><strong>US Address:</strong> <br>115 W 29th St #908, New York, <br>NY 10001</p>
                        <p>Phone: +91 9099002391</p>
                        <p>Email: info@virtualops.net</p>
                    </div>
                    <div class="col-6 col-sm-6 col-xxs-12">
                        <p><strong>India Address:</strong> <br>B-302, Titanium City Center, <br>100 Feet Road,
                            Anandnagar, <br>
                            Ahmedabad – 380015</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="site-info">
                &copy; <?php echo date("Y"); ?>
                . Virtual Ops, LLP. All rights reserved.
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>