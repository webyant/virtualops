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

    <section class="section section--banner video--banner">
        <video autoplay="" muted="" loop="" playsinline="" id="desktop">
            <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/VirtualOps-Homepage.mp4"
                type="video/mp4">
        </video>
    </section>
    <section class="section section--motivation">
        <div class="wrap">
            <div class="row row--items-center">
                <div class="col-7 col-md-12">
                    <div class="row row--items-center">
                        <div class="col-6 col-md-6 col-sm-12">
                            <div class="motivation__card wow bounceInUp" data-wow-duration="1s">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon1.png"
                                    alt="Design">
                                <h3>Product Content</h3>
                                <p>The quality of your product data determines the difference between a sale and losing
                                    a customer. The key to eCommerce success is providing your customers rich product
                                    content.
                                </p>
                                <a href="product-content.html" class="btn-text">Learn more</a>
                            </div>
                            <div class="motivation__card wow bounceInUp" data-wow-duration="1.5s">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon3.png"
                                    alt="Design">
                                <h3>Product Data Management</h3>
                                <p>With fast evolving eCommerce, online retailers need a robust product information
                                    management (PIM) system. Virtual Ops help its clients implement PIM ensuring product
                                    data is consistent, standard, normalized and categorized
                                    accurately across channels.</p>
                                <a href="product-data-management.html" class="btn-text">Learn more</a>
                            </div>
                            <div class="motivation__dots">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dot-bg.png"
                                    alt="Dotts">
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                            <div class="motivation__card wow bounceInUp" data-wow-duration="2.0s">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon2.png"
                                    alt="Design">
                                <h3>Digital Asset Management</h3>
                                <p>High quality product images and videos not only strengthen brand image but also drive
                                    purchase ready behaviour. Online Retailers need to ensure all their products have
                                    crisp, clean, high quality images that not only
                                    appeal to its customers visually but also provide an accurate understanding of the
                                    product.</p>
                                <a href="digital-asset-management.html" class="btn-text">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-md-12">
                    <div class="motivation__text">
                        <div class="wow bounceInUp" data-wow-duration="1s">
                            <h2 class="text-orange">Enriched Product Data can help accelerate your eCommerce growth
                            </h2>
                        </div>
                        <p class=" wow bounceInUp" data-wow-duration="1.5s">In today’s world, customers are spoilt with
                            choices, channels and options to purchase products. It is critical for online retailers to
                            showcase perfect product details including apt titles, images, videos, description,
                            features,
                            and specifications in order to maximize conversion. Retailers need an A team to manage
                            product data right from acquisition to publication.</p>
                        <h5 class=" wow bounceInUp" data-wow-duration="2s">Product Data Quality is the key to optimizing
                            the customer journey and experience.</h5>
                        <div class="wow bounceInUp " data-wow-duration="2.5s">
                            <strong class="btn-action-space">Let us help you boost your online sales.</strong>
                            <a href="contact-us.html" class="btn">Book a consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--succeed pb-0">
        <div class="wrap">
            <div class="succeed__heading text-center">
                <h2 class="text-orange dots__title"><span>Collaborate</span><span>Optimize</span><span>Accelerate</span>
                </h2>
                <p class="font-md">Stay Ahead of the Competition </p>
            </div>
            <div class="row mt-32">
                <div class="col-6 col-md-12">
                    <div class="marketing__img">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/phone-frame.png"
                            alt="phone">
                        <div class="marketing__slider">
                            <div class="marketing__images">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-slider.jpg"
                                    alt="marketing-slider">
                            </div>
                            <div class="marketing__images">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-slider-1.jpg"
                                    alt="marketing-slider">
                            </div>
                            <div class="marketing__images">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-slider-2.jpg"
                                    alt="marketing-slider">
                            </div>
                            <div class="marketing__images">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-slider-3.jpg"
                                    alt="marketing-slider">
                            </div>
                            <div class="marketing__images">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-slider-4.jpg"
                                    alt="marketing-slider">
                            </div>
                            <div class="marketing__images">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-slider-5.jpg"
                                    alt="marketing-slider">
                            </div>
                            <div class="marketing__images">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-slider-6.jpg"
                                    alt="marketing-slider">
                            </div>
                            <div class="marketing__images">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-slider-7.jpg"
                                    alt="marketing-slider">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <h3 class="mb-40">Benefits of High Quality Product Data</h3>
                    <div class="succeed--content mt-24">
                        <div class="content__img wow bounceInUp">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/line.jpg"
                                alt="line">
                        </div>
                        <div class="content--info">
                            <div class="info__text wow bounceInUp" data-wow-duration="1s">
                                <h4> Improve Conversions </h4>
                                <p>Accurate, enhanced and optimized product data makes searching and purchasing easier
                                    and increases revenue</p>
                            </div>
                            <div class="info__text wow bounceInUp" data-wow-duration="1.5s">
                                <h4>Reduce Bounce Rates</h4>
                                <p>Consistent, clear product data and clean, high quality digital assets improve user
                                    experience and reduces cart abandonment</p>
                            </div>
                            <div class="info__text wow bounceInUp" data-wow-duration="2s">
                                <h4>Enhance Customer Loyalty </h4>
                                <p>High quality product data and digital assets lead to customer delight and repeat
                                    orders</p>
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
                        <h2 class="wow bounceInUp text-orange" data-wow-duration="0.5s">Rich product data on your
                            eCommerce website means better user experience</h2>
                        <p class="wow bounceInUp" data-wow-duration="1s">According to Salsify <strong
                                class="highlighted">“88% of the shoppers characterize detailed product content as being
                                extremely important to their purchasing decision.”</strong></p>
                        <p>According to a Survey by Retail Dive “87% of consumers said they are unlikely or very
                            unlikely to make a repeat purchase with a Retailer that provided inaccurate product
                            information. 40% of consumers have returned an online
                            purchase in past year specifically because of poor product content.”</p>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/better-website.png"
                        alt="succeed">
                </div>
            </div>
        </div>
    </section>
    <section class="section section--why pt-0">
        <div class="wrap">
            <div class="why__heading">
                <h2 class="text-orange">Why Choose Us</h2>
            </div>
            <div class="why__content mt-48">
                <div class="why__block text-center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/whychoose1.png"
                        alt="experience">
                    <h4>5+ Years<br> Experience </h4>
                </div>
                <div class="why__block text-center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/whychoose2.png"
                        alt="Accuracy">
                    <h4>99.5%<br> Accuracy </h4>
                </div>
                <div class="why__block text-center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/whychoose3.png"
                        alt="Million">
                    <h4>Million+<br> SKUs </h4>
                </div>
                <div class="why__block text-center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/whychoose4.png"
                        alt="Delivery">
                    <h4>On-Time<br> Delivery </h4>
                </div>
                <div class="why__block text-center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/whychoose5.png"
                        alt="Cost">
                    <h4>50% Cost<br> Reduction </h4>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--advertising">
        <div class="wrap">
            <h2 class="mb-48 wow bounceInUp text-orange">Testimonials</h2>
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
                        <p>Web content – Adorama</p>
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

</main><!-- #main -->

<?php
get_footer();