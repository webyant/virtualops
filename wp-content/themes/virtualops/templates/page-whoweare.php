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
            <div class="row">
                <div class="col-6 col-md-12">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-conference.png"
                        alt="Hero-Image" class="image-radius">
                </div>
                <div class="col-6 col-md-12 mt-48">
                    <div class="section__title">
                        <h2 class="text-orange">Who We Are</h2>
                        <p>Virtual Ops LLP is a Product Data Management Company. We are focused on enabling retailers,
                            brand manufacturers, and distributors to enhance their products on digital channels so they
                            can accelerate their business and stay
                            ahead of their competition in this evolving digital commerce.</p>
                    </div>
                    <div class="section__title mt-md-48">
                        <h2 class="text-orange">We Love What We Do</h2>
                        <p>We are a team of young enthusiasts who combine skills, use of technology and product
                            expertise to delivery high quality product data to our clients. We have expertise across
                            multiple industries including Consumer Electronics,
                            Sports, Hobbies and Outdoors and Apparel & Footwear. </p>
                    </div>
                    <div class="section__title mt-md-48">
                        <h2 class="text-orange">We Love Helping Others Succeed</h2>
                        <p>Our entire approach is collaborative and consultative, with the objective to help your
                            organization grow and succeed in eCommerce. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--business pt-0">
        <div class="wrap">
            <div class="section__title text-center">
                <h2 class="text-orange">Our Expertise in Multiple eCommerce Industries</h2>
            </div>
            <div class="row ">
                <div class="col-4 col-md-6 col-sm-12 mb-32">
                    <div class="feature__card">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/electronics.png"
                            alt="Consumer Electronics">
                        <h4>Consumer Electronics</h4>
                        <p>With over $100Bn in revenue in 2022 in the US, the Consumer Electronics is the second largest
                            industry in eCommerce. It is highly competitive and requires outstanding product details to
                            attract customers. We have over 5 years’
                            experience in publishing over half a million Consumer Electronics SKUs with 100% accuracy.
                        </p>
                    </div>
                </div>
                <div class="col-4 col-md-6 col-sm-12 mb-32">
                    <div class="feature__card">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/apparel.png"
                            alt="Expertise">
                        <h4>Apparel and Footwear</h4>
                        <p>One of the fastest growing and highly competitive industries in eCommerce, Apparel and
                            Footwear products need minute attention to details to ensure there is no cart abandonment or
                            return of product. We deliver accurate product
                            data and taxonomy along with critical attributes and digital assets that help our clients
                            improve conversions and reduce return rates. </p>
                    </div>
                </div>
                <div class="col-4 col-md-6 col-sm-12 col-sm-12 mb-32">
                    <div class="feature__card">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/toy.png"
                            alt="Expertise">
                        <h4>Toys, Hobbies & DIY</h4>
                        <p>This industry covers a wide range of types of products. Several products required A+ content,
                            detailed Features and Specifications and Warranty info. We help our clients with product
                            data enrichment and accurate digital assets
                            and data quality. </p>
                    </div>
                </div>
                <div class="col-4 col-md-6 col-sm-12 mb-32">
                    <div class="feature__card">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sports.png"
                            alt="Expertise">
                        <h4>Sporting Goods and Equipment</h4>
                        <p>eCommerce revenues of Sporting Goods and Equipment is growing rapidly, fuelled by innovation,
                            better supply chain and shopping habits of Millenials and GenZ. Online Retailers need to
                            ensure products have sharp images, videos,
                            product details and accurate size, color options. We have been publishing enhanced products
                            for our clients with 100% accuracy and on-time delivery.</p>
                    </div>
                </div>
                <div class="col-4 col-md-6 col-sm-12 mb-32">
                    <div class="feature__card">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/adventure.png"
                            alt="Expertise">
                        <h4>Adventure Sports</h4>
                        <p>Sports recreational activities have increased post pandemic. Consumer health consciousness,
                            increased use of social media and digital technology have all fuelled the trend. It is
                            imperative to have accurate attributes of gender,
                            color, size along with organized image sequences to attract customers to make a purchase. We
                            have been helping our clients with all critical factors that help improve customer
                            experience and loyalty.</p>
                    </div>
                </div>
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="feature__card">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Homeware.png"
                            alt="Expertise">
                        <h4>Home Improvement & Hardware</h4>
                        <p>Home Improvement & Hardware is a collection of innovative, quality items for homeowners.
                            Products include furniture, accessories, essentials which need detailed product descriptions
                            and crisp product images to capture customer
                            attention. We help our clients improve their online store conversions through optimized
                            product content and digital assets. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--seo section--light--bg">
        <div class="wrap">
            <div class="section__title text-center">
                <h2 class="text-orange">Our Partnership Approach</h2>
            </div>
            <div class="seo__timeline-item">
                <div class="timeline-item-line"></div>
                <div class="timeline-item-dot"></div>
                <div class="row row--items-center">
                    <div class="col-6">
                        <div class="timeline__card wow bounceInLeft" data-wow-duration="2s">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/virtual-ops-01.png"
                                alt="Seo-Image">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="timeline__card wow bounceInRight" data-wow-duration="2s">
                            <p>We work as your virtual partner and customise a system that integrates your process with
                                ours.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seo__timeline-item">
                <div class="timeline-item-line"></div>
                <div class="timeline-item-dot"></div>
                <div class="row row--reverse row--items-center">
                    <div class="col-6">
                        <div class="timeline__card wow bounceInRight" data-wow-duration="2s">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/virtual-ops-02.png"
                                alt="Seo-Image">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="timeline__card wow bounceInLeft" data-wow-duration="2s">
                            <p>Our team will assist you in developing strategies by sharing advice, ideas, best
                                practices and trends. </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="seo__timeline-item">
                <div class="timeline-item-line"></div>
                <div class="timeline-item-dot"></div>
                <div class="row row--items-center">
                    <div class="col-6">
                        <div class="timeline__card wow bounceInLeft" data-wow-duration="2s">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/virtual-ops-03.png"
                                alt="Seo-Image">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="timeline__card wow bounceInRight" data-wow-duration="2s">
                            <p>We are guided by a customer centric approach, helping you meet your objectives with
                                sustainable workflows and systems.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seo__timeline-item">
                <div class="timeline-item-line"></div>
                <div class="timeline-item-dot"></div>
                <div class="row row--reverse row--items-center">
                    <div class="col-6">
                        <div class="timeline__card wow bounceInRight" data-wow-duration="2s">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/virtual-ops-04.png"
                                alt="Seo-Image">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="timeline__card wow bounceInLeft" data-wow-duration="2s">
                            <p>Our process is collaborative. You can trust us to create solutions & help you realise
                                your eCommerce vision .</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section secton--faq">
        <div class="wrap">
            <div class="row row--items-center">
                <div class="col-6 col-md-12">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-faq-img.png"
                        alt="Faq-Image">
                </div>
                <div class="col-6 col-md-12">
                    <div class="section__title">
                        <h2 class="text-orange">Here's how we can support you</h2>
                        <p>Partnering with you for all your product data needs</p>
                    </div>
                    <div class="accordian__list">
                        <div class="accordian__block">
                            <h4>1. Identify Gaps/Requirements</h4>
                            <div class="accordian__content">
                                <p>We listen to your Product Data challenges and requirements, identify key important
                                    tasks where we can add value to your eCommerce operations </p>
                            </div>
                        </div>
                        <div class="accordian__block">
                            <h4>2. Start a Test Pilot</h4>
                            <div class="accordian__content">
                                <p>We run a test pilot to demonstrate our expertise, deliver high quality product data
                                    and share areas for process improvement</p>
                            </div>
                        </div>
                        <div class="accordian__block">
                            <h4>3. Define Scope of Work</h4>
                            <div class="accordian__content">
                                <p>Together, we plan the scope of work for ongoing requirements. Then, we train and
                                    dedicate a team of product experts who work as an extension to your team</p>
                            </div>
                        </div>
                        <div class="accordian__block">
                            <h4>4. Manage and Scale</h4>
                            <div class="accordian__content">
                                <p>We deliver measurable results that meet/exceed your requirements, help reduce
                                    time-to-market and costs significantly, and then scale services as per business
                                    growth</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--founder pt-0">
        <div class="wrap">
            <div class="founder__content">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/founder.jpg"
                    alt="founder" class="image-radius">
                <h2> Founder’s Message</h2>
                <p>I founded Virtual Ops LLP in 2017, after more than 20 years of global experience in
                    Outsourcing/Offshoring Industry. While doing business development for a leading
                    Outsourcing/Offshoring firm in the US, we helped Fortune 500 companies
                    with outsourced customer support and back office operations. It was a win-win as we helped clients
                    reduce costs, improve operational efficiencies and resolve their customer’s issues. As the eCommerce
                    Industry grew and evolved rapidly
                    since the last decade, customer issues kept growing as well. A majority of the issues were due to
                    product returns/refunds/cart abandonment, which were a result of poor product data and listings,
                    more so for the small and mid-sized
                    companies which joined the ecommerce bandwagon. I realized a gap and opportunity to blend a
                    combination of technology and highly skilled human resources to help publish and manage accurate,
                    complete and consistent products. This
                    can benefit everyone - Online Retailers, Distributors and Manufacturers have reduced customer
                    issues, increased revenues and enhanced brand reputation while Customers can have a delightful
                    experience with online shopping.</p>
                <p>In the last 5 years, we have built a team of quality conscious, tech savvy product enthusiasts, who
                    love to help our clients succeed as well as customers have a better experience. We have a long way
                    to go. Our goal is to stay in forefront
                    of digital commerce developments and build expertise that helps us be the preferred partner for
                    product data management, and build long term partnerships with clients. If you would like to discuss
                    how we can grow together, please
                    feel free to contact us.
                </p>
            </div>
        </div>
    </section>

    <?php endwhile; // End of the loop. ?>

</main><!-- #main -->

<?php get_footer();