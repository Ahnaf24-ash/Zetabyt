<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    
    <!-- No-JS Fallback for Scroll Animations -->
    <noscript>
        <style>
            .animate-on-scroll { opacity: 1 !important; transform: none !important; }
        </style>
    </noscript>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Background Elements -->
    <div class="bg-shape bg-shape-1"></div>
    <div class="bg-shape bg-shape-2"></div>

    <!-- Navigation -->
    <header class="navbar" id="navbar">
        <div class="nav-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/Web Logo.jpeg" alt="ZETABYT Logo" class="logo-img" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48Y2lyY2xlIGN4PSIyMCIgY3k9IjIwIiByPSIyMCIgZmlsbD0iIzM4YmRmOCIvPjxwYXRoIGQ9Ik0xMiAyNmwxNi0xMlYxNEgxMnYybDEwIDcuNUgxMnYyLjV6IiBmaWxsPSIjZmZmIi8+PC9zdmc+';"/>
                <span class="logo-text">ZETABYT</span>
            </a>
            <nav class="nav-links">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-item">Home</a>
                <a href="<?php echo esc_url( home_url( '/features/' ) ); ?>" class="nav-item">Service & Features</a>
                <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="nav-item">Blog</a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="nav-item">About Us</a>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="nav-item">Contact Us</a>
                <a href="<?php echo esc_url( home_url( '/get-started/' ) ); ?>" class="nav-item" target="_blank">Get Started</a>
            </nav>
            <div class="hamburger" id="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobile-menu">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-link">Home</a>
        <a href="<?php echo esc_url( home_url( '/features/' ) ); ?>" class="mobile-link">Service & Features</a>
        <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="mobile-link">Blog</a>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="mobile-link">About Us</a>
        <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="mobile-link">Contact Us</a>
        <a href="<?php echo esc_url( home_url( '/get-started/' ) ); ?>" class="mobile-link" target="_blank">Get Started</a>
    </div>

    <!-- Main Content -->
    <main>