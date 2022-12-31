<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Virtual_Ops
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
            href="#primary"><?php esc_html_e( 'Skip to content', 'virtualops' ); ?></a>


        <header class="site-header">
            <div class="wrap header__wrap">
                <div class="site-logo">
                    <?php the_custom_logo(); ?>
                </div>
                <nav class="navbar">
                    <?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
                                'container' => false,
								'menu_id'        => 'primary-menu',
							)
						);
					?>
                </nav>
                <div class="menu__toggle" aria-label="Toggle Menu">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </div>
            </div>
        </header>