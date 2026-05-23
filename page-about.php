<?php
/**
 * Template Name: About Us
 *
 * @package ZETABYT
 */

get_header(); ?>

    <!-- Page Hero -->
    <section class="page-bg-cinematic" style="width: 100%; padding: 10rem 2rem 6rem; text-align: center;">
        <h1 class="hero-title" style="margin-bottom: 1rem; color: #fff; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">About <span class="highlight" style="color: var(--accent-primary);">Us</span></h1>
        <p class="hero-subtitle" style="margin: 0 auto; color: rgba(255,255,255,0.9);">Discover our story, mission, and the passion that drives our digital solutions.</p>
    </section>

    <section id="about" class="features-section" style="width: 100%; padding-top: 4rem;">
        <div class="section-header animate-on-scroll">
            <h2>Who <span class="highlight">We Are</span></h2>
            <p>We are a passionate team dedicated to redefining the digital landscape through innovation and precision.</p>
        </div>
        
        <div class="features-grid">
            <!-- Who We Are Card -->
            <div class="feature-card glass-panel animate-on-scroll">
                <img src="<?php echo get_template_directory_uri(); ?>/about_who_we_are.jpg" alt="Who We Are - ZETABYT Digital Agency Workspace" style="width: 100%; height: 220px; object-fit: cover; border-radius: 8px; margin-bottom: 1.5rem; border: 1px solid rgba(57, 255, 20, 0.2); box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
                <h3>Who We Are</h3>
                <p>ZETABYT is a forward-thinking digital agency specialized in crafting high-impact technological solutions. From cutting-edge web development to dynamic branding and data-driven marketing, we build strategies that empower modern enterprises.</p>
            </div>

            <!-- Mission Card -->
            <div class="feature-card glass-panel animate-on-scroll delay-1">
                <img src="<?php echo get_template_directory_uri(); ?>/about_our_mission.jpg" alt="Our Mission - Luminous Cyber Target" style="width: 100%; height: 220px; object-fit: cover; border-radius: 8px; margin-bottom: 1.5rem; border: 1px solid rgba(57, 255, 20, 0.2); box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
                <h3>Our Mission</h3>
                <p>Our mission is to translate raw ambition into premium technological aesthetics. We unlock the true potential of digital growth by providing top-tier solutions that elevate brand identities, maximize ROI, and leave a powerful legacy.</p>
            </div>
        </div>
    </section>

<?php get_footer(); ?>