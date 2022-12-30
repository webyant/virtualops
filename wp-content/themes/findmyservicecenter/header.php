<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package findmyservicecenter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'findmyservicecenter' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="wrap header__wrap">
                <div class="site-branding">
                    <?php the_custom_logo(); ?>
                </div><!-- .site-branding -->
                <div class="header__search">
                    <select class="inputbox" title="Search in">
                        <option selected="selected" value="aps">Categories</option>
                        <option value="alexa-skills">Alexa Skills</option>
                        <option value="amazon-devices">Devices</option>
                        <option value="fashion">Fashion</option>
                        <option value="amazon-pharmacy">Pharmacy</option>
                        <option value="appliances">Appliances</option>
                        <option value="mobile-apps">Apps &amp; Games</option>
                        <option value="baby">Baby</option>
                        <option value="beauty">Beauty</option>
                        <option value="stripbooks">Books</option>
                        <option value="automotive">Car &amp; Motorbike</option>
                        <option value="apparel">Clothing &amp; Accessories</option>
                        <option value="collectibles">Collectibles</option>
                        <option value="computers">Computers &amp; Accessories</option>
                        <option value="todays-deals">Deals</option>
                        <option value="electronics">Electronics</option>
                        <option value="furniture">Furniture</option>
                        <option value="lawngarden">Garden &amp; Outdoors</option>
                        <option value="gift-cards">Gift Cards</option>
                        <option value="grocery">Grocery &amp; Gourmet Foods</option>
                        <option value="hpc">Health &amp; Personal Care</option>
                        <option value="kitchen">Home &amp; Kitchen</option>
                        <option value="industrial">Industrial &amp; Scientific</option>
                        <option value="jewelry">Jewellery</option>
                        <option value="digital-text">Kindle Store</option>
                        <option value="luggage">Luggage &amp; Bags</option>
                        <option value="luxury-beauty">Luxury Beauty</option>
                        <option value="dvd">Movies &amp; TV Shows</option>
                        <option value="popular">Music</option>
                        <option value="mi">Musical Instruments</option>
                        <option value="office-products">Office Products</option>
                        <option value="pets">Pet Supplies</option>
                        <option value="instant-video">Prime Video</option>
                        <option value="shoes">Shoes &amp; Handbags</option>
                        <option value="software">Software</option>
                        <option value="sporting">Sports, Fitness &amp; Outdoors</option>
                        <option value="specialty-aps-sns">Subscribe &amp; Save</option>
                        <option value="home-improvement">Tools &amp; Home Improvement</option>
                        <option value="toys">Toys &amp; Games</option>
                        <option value="under-ten-dollars">Under ₹500</option>
                        <option value="videogames">Video Games</option>
                        <option value="watches">Watches</option>
                    </select>
                    <input type="text" class="inputbox text-input" placeholder="Enter keyword">
                    <input type="text" class="inputbox city-input" placeholder="Enter city">
                </div>
            </div>
            <?php if (has_nav_menu('menu-1')) : ?>
            <nav class="navbar">
                <div class="wrap">
                    <button class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'findmyservicecenter' ); ?></button>
                    <?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
                </div>
            </nav><!-- #site-navigation -->
            <?php endif; ?>
        </header><!-- #masthead -->