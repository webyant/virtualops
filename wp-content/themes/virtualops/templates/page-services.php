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
            <p class="text-center font-md">Do you observe high dropout rates, cart abandonment or feel your products
                lack completeness due to insufficient specifications, inadequate images or product videos? <br> Do you
                have skilled and experienced teams that can perform product
                data listings juggling multiple workflows and attributes in a quick and effective process?<br> The
                quality of your product data determines the difference between a sale and losing a customer. The key to
                eCommerce success is providing
                your customers rich product content.
            </p>
            <div class="section__title text-center">
                <h2 class="text-orange">Product Content</h2>
            </div>
            <div class="row">
                <div class="col-6 col-md-12">
                    <div class="sticky__img">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product-content.png"
                            alt="social-media-marketing-network-img1">
                    </div>
                </div>
                <div class="col-6 col-md-12 mt-md-48">
                    <div class="accordian__list">
                        <div class="accordian__block">
                            <h4 class="active">Product Data Entry</h4>
                            <div class="accordian__content" style="display: block;">
                                <p>eCommerce data entry involves skilled resources to research, collect, organize and
                                    review accuracy and completeness of data so that products are perfectly displayed,
                                    enabling the customer to hit the buy button easily
                                    without speculation
                                </p>
                                <p>Our skilled team of product data experts are trained to work on multiple tool,
                                    technologies and PIM systems.</p>
                                <p>We can thus collect, format, review and ensure 100% accuracy and completeness of
                                    product data as per our clients' requirements and provide quick turnaround for large
                                    volume requirements.</p>
                            </div>
                        </div>
                        <div class="accordian__block">
                            <h4>Product Data Listings</h4>
                            <div class="accordian__content">
                                <p>Our eCommerce Product Listing team is trained with an eye to detail to ensure that
                                    product data is organized, reviewed, categorized so that accurate and complete
                                    product data is listed. </p>
                                <p>This includes keyword optimized titles, enhanced descriptions, detailed features and
                                    specifications, accurate categorization and navigation filters. </p>
                                <p>We are experienced in using tools and platforms to perform quality checks, juggle
                                    multiple workflows and attributes in a quick and cost- effective manner</p>
                            </div>
                        </div>
                        <div class="accordian__block">
                            <h4>Product Data Enrichment / A+ Content</h4>
                            <div class="accordian__content">
                                <p>Enriched product data helps faster search results, builds consumer confidence,
                                    increased conversions and minimized dropout rates </p>
                                <p>Enriched product data provides clarity to customers about product selection that
                                    influences their purchase decision, reduces speculation about product specifics and
                                    helps elevate your brand reputation and customer loyalty.
                                </p>
                                <p>Our team can analyze and evaluate potential methods to enrich your product data that
                                    can help increase traffic to your site, drive high conversions and enhance the
                                    digital shopping experience, while ensuring accuracy
                                    and completeness of product data.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--light--bg" id="productdatamanagement">
        <div class="wrap">
            <div class="section__title text-center">
                <h2 class="text-orange">Product Data Management</h2>
            </div>
            <div class="row row--reverse">
                <div class="col-6 col-md-12">
                    <div class="sticky__img">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product-data-management.png"
                            alt="social-media-marketing-network-img1">
                    </div>
                </div>
                <div class="col-6 col-md-12 mt-md-48">
                    <div class="accordian__list">
                        <div class="accordian__block">
                            <h4 class="active">Product Data Cleansing</h4>
                            <div class="accordian__content" style="display: block;">
                                <p>Product Data Cleansing is an essential process to ensure the product data is precise,
                                    accurate, consistent and complete before it is published. </p>
                                <p>Product data when captured from a vast number of suppliers and vendors can be
                                    inconsistent, duplicate, inaccurate, incomplete or outdated. </p>
                                <p>Outsourcing data cleansing helps businesses focus their internal teams on key product
                                    strategy and marketing while ensuring higher click through and conversions. </p>
                                <p>Our team of experts use tools and technologies and follow standardized rules and data
                                    governance practices to ensure product data is clean and accurate, rich and
                                    consistent </p>
                            </div>
                        </div>
                        <div class="accordian__block">
                            <h4>Product Data Normalization</h4>
                            <div class="accordian__content">
                                <p>Product Data Normalization is critical for smart catalog management especially when
                                    businesses sell multiple brands sourced from global vendors and suppliers.</p>
                                <p>Structured product information with well-defined attributes, consistent formats, and
                                    defined product units can result into consistent, clean products on digital
                                    channels. </p>
                                <p>A well-defined product catalog will boost website performance, reduce load times
                                    enabling customers to access product pages easily and make correct purchase
                                    decision. </p>
                                <p>Once product data is collected and captured, it is first normalized before ingesting
                                    it into product catalogs or product information management platform.</p>
                                <p>Our team of product data experts work closely with our clients to define the
                                    structure, formats, units, categories and rules. </p>
                            </div>
                        </div>
                        <div class="accordian__block">
                            <h4>Product Data Standardization</h4>
                            <div class="accordian__content">
                                <p>Product Data Standardization is imperative for selling across multiple channels and
                                    geographies by ensuring data quality and consistency across various components. </p>
                                <p>When data is collected from various vendors, sources, across geographies, it can have
                                    inconsistency in attribute values such as units of measurement, abbreviations, URLs,
                                    attribute tags, keywords. </p>
                                <p>Our team of experts work closely with our clients to create standard processes and
                                    rules that ensure that product data is standard across all attributes and categories
                                    allowing seamless product integration and publishing
                                </p>
                            </div>
                        </div>
                        <div class="accordian__block">
                            <h4>Product Data Classification</h4>
                            <div class="accordian__content">
                                <p>Product Data Classification is the process of grouping or categorizing product
                                    information in a structured format.</p>
                                <p>When proper product classification is not followed customers find it difficult to
                                    find the product online resulting in loss of sale </p>
                                <p>Well classified product data enables better search results, accessibility and clarity
                                    of product data to customers resulting in higher conversions, reduced return rates
                                    and enhanced customer experience. </p>
                                <p>Our team of product data experts understand the criticality of product data
                                    classification. We work with our clients to define, refine and implement accurate
                                    product data classification and taxonomy for optimum product
                                    data management.
                                </p>
                            </div>
                        </div>
                        <div class="accordian__block">
                            <h4>Product Taxonomy Support</h4>
                            <div class="accordian__content">
                                <p>A well-structured eCommerce taxonomy (product categorization) is critical for
                                    organizations to manage their existing catalogues and product listings effectively.
                                </p>
                                <p>The purpose of product taxonomy is to enable fast and flawless products navigation &
                                    search. Resulting in enhanced customer experience as they can find exactly what they
                                    need and complete their checkout, easily.</p>
                                <p>Our team works closely with our clients to ensure products are assigned to correct
                                    taxonomies. </p>
                                <p>With a wide experience across retail industries such as Consumer Electronics,
                                    Sporting Goods, Apparel , Adventure Sports and Hobbies, our team has worked across
                                    various categories of industries </p>
                                <p>We not only assign the most accurate taxonomies while uploading product data on PIM
                                    software, we constantly provide feedback to our clients to optimize, realign
                                    products under more useful and accurate categories.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="digitalassetmanagement">
        <div class="wrap">
            <div class="section__title text-center">
                <h2 class="text-orange">Digital Asset Management</h2>
            </div>
            <div class="row">
                <div class="col-6 col-md-12">
                    <div class="sticky__img">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/digital-asset-management.png"
                            alt="social-media-marketing-network-img1">
                    </div>
                </div>
                <div class="col-6 col-md-12 mt-md-48">
                    <div class="accordian__list">
                        <div class="accordian__block">
                            <h4 class="active">Image Sourcing, Editing and Enhancement</h4>
                            <div class="accordian__content" style="display: block;">
                                <p>It is the images on your product page which can make or break the conversion.</p>
                                <p>It is high quality, crisp ,clean images that add credibility and trust worthiness to
                                    your website. Images need to be standard across products and categories.</p>
                                <p>Our team of Product Image experts and editors are aware of the rules and steps
                                    required to ensurethe size and shape, resolution, white background, standard order
                                    and position of the product images</p>
                                <p>We collect, capture, edit and refine images asper our client’s requirement.</p>
                                <p>We ensure the position of main image and multiple additional images are consistent
                                    across products and across all digital channels and market places</p>
                                <p>Our teams also digitally merge multiple product images into one image when products
                                    are sold as bundles or kits.</p>
                            </div>
                        </div>
                        <div class="accordian__block">
                            <h4>Product Videos</h4>
                            <div class="accordian__content">
                                <p>A video is worth a thousand pictures now...</p>
                                <p>Our team helps our clients organize and allocate product videos to be positioned at
                                    the most effective locations on the product page, so it is helpful for customers to
                                    make a reliable and quick purchase decision.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; // End of the loop. ?>

</main><!-- #main -->

<?php get_footer();