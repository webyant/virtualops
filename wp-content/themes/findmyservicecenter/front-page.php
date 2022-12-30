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
 * @package findmyservicecenter
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="section section--light--bg">
        <div class="wrap">
            <div class="section__title">
                <h2>What are you looking for?</h2>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="category__block">
                        <a href="#">
                            <h3>Car</h3>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat1.jpg"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="category__block">
                        <a href="#">
                            <h3>Mobile</h3>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat2.jpg"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="category__block">
                        <a href="#">
                            <h3>Computer</h3>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat3.jpg"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="category__block">
                        <a href="#">
                            <h3>Appliances</h3>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cat4.jpg"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--blue--bg">
        <div class="wrap">

            <div class="row row--items-center">
                <div class="col-4">
                    <h2>Most Popular Items</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500
                    </p>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-4">
                            <div class="item__block">
                                <a href="#">
                                    <h3>Car</h3>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/item1.jpg"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item__block">
                                <a href="#">
                                    <h3>Mobile</h3>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/item2.jpg"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item__block">
                                <a href="#">
                                    <h3>Computer</h3>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/item3.jpg"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--about-newsletters">
        <div class="wrap">
            <div class="about__newsletters">
                <div class="row">
                    <div class="col-5">
                        <div class="newsletter__block">
                            <div class="newsletter__logo">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png"
                                    alt="">
                            </div>
                            <h4>Let's stay in touch</h4>
                            <p>Get updates on sales specials and more</p>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input class="form-control" id="email" placeholder="Your email*" type="email"
                                        name="email">
                                    </p>
                                </div>
                                <div class="form-btns">
                                    <input class="btn btn--block" type="submit" value="Subscribe to the Newsletter">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="about__content">
                            <h2>About Service center</h2>
                            <ul>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book.</li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();