<?php
/**
 * Theme Header
 *
 * @package GlobePulse_Pro
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="gp-header">

    <!-- Top Bar -->
    <div class="gp-topbar">

        <div class="container">

            <div class="gp-social">

                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>

                <a href="#" aria-label="X"><i class="fab fa-x-twitter"></i></a>

                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>

                <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>

                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>

                <a href="#" aria-label="Telegram"><i class="fab fa-telegram"></i></a>

                <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>

            </div>

            <div class="gp-top-right">

                <button id="dark-mode-toggle">🌙</button>

            </div>

        </div>

    </div>

    <!-- Main Header -->

    <div class="gp-main-header">

        <div class="container">

            <div class="gp-logo">

                <?php
                if ( has_custom_logo() ) {

                    the_custom_logo();

                } else {
                ?>

                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

                        <?php bloginfo( 'name' ); ?>

                    </a>

                <?php } ?>

            </div>

            <nav class="gp-menu">

                <?php

                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'primary-menu',
                    )
                );

                ?>

            </nav>

            <div class="gp-search">

                <?php get_search_form(); ?>

            </div>

        </div>

    </div>

    <!-- Breaking News -->

    <div class="gp-breaking-news">

        <div class="container">

            <strong>Breaking:</strong>

            <span>Latest News Updates from GlobePulse</span>

        </div>

    </div>

</header>

<div id="content" class="site-content">
