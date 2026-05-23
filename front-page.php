<?php
/**
 * The template for displaying the front page
 *
 * @package ZETABYT
 */

get_header(); ?>

    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="hero-content animate-on-scroll">
            <h1 class="hero-title">Where Intelligence <br>Becomes Infrastructure</h1>
            <p class="hero-subtitle">
                At ZETABYT, we blend innovation, strategy, and technology to create powerful digital solutions that drive real business growth
            </p>
            <div class="hero-actions">
                <a href="<?php echo esc_url( home_url( '/get-started/' ) ); ?>" class="btn btn-primary scale-up" style="padding: 1.2rem 3rem; font-size: 1.2rem; margin-top: 1rem;">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Showcase Section -->
    <section id="showcase" class="showcase-section">
        <div class="section-header animate-on-scroll">
            <h2>Visual <span class="highlight">Innovations</span></h2>
            <p>We translate raw ambition into premium, data-driven technological aesthetics.</p>
        </div>
        <div class="showcase-grid">
            <div class="showcase-item animate-on-scroll">
                <img src="<?php echo get_template_directory_uri(); ?>/hero-image.jpg" alt="Web Architecture" class="hero-mockup-img" />
                <h3>Web Architecture</h3>
            </div>
            <div class="showcase-item animate-on-scroll delay-1">
                <img src="<?php echo get_template_directory_uri(); ?>/marketing-image.jpg" alt="Digital Marketing" class="hero-mockup-img" />
                <h3>Data Solutions</h3>
            </div>
            <div class="showcase-item animate-on-scroll delay-2">
                <img src="<?php echo get_template_directory_uri(); ?>/branding-image.jpg" alt="Dynamic Branding" class="hero-mockup-img" />
                <h3>Dynamic Branding</h3>
            </div>
        </div>
    </section>

    <!-- Tech Info Section -->
    <section id="tech-stack" class="features-section">
        <div class="section-header animate-on-scroll">
            <h2>Our <span class="highlight">Tech Stack</span></h2>
            <p>We leverage industry-leading technologies to build scalable, cutting-edge architectures.</p>
        </div>
        <div class="features-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); text-align: center; gap: 1.5rem;">
            <!-- Tech 1 -->
            <div class="feature-card glass-panel animate-on-scroll">
                <img src="<?php echo get_template_directory_uri(); ?>/icon_frontend.jpg" alt="Frontend Icon" style="width: 80px; height: 80px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 4px 15px rgba(57, 255, 20, 0.2);" />
                <h3 style="color: var(--accent-primary); font-size: 1.3rem;">Interactive Frontends</h3>
                <p style="font-size: 0.9rem;">Lightning-fast, pixel-perfect user interfaces and web experiences.</p>
            </div>
            <!-- Tech 2 -->
            <div class="feature-card glass-panel animate-on-scroll delay-1">
                <img src="<?php echo get_template_directory_uri(); ?>/icon_backend.jpg" alt="Backend Icon" style="width: 80px; height: 80px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 4px 15px rgba(57, 255, 20, 0.2);" />
                <h3 style="color: var(--accent-primary); font-size: 1.3rem;">Scalable Backends</h3>
                <p style="font-size: 0.9rem;">High-performance server logic and real-time data processing.</p>
            </div>
            <!-- Tech 3 -->
            <div class="feature-card glass-panel animate-on-scroll delay-2">
                <img src="<?php echo get_template_directory_uri(); ?>/icon_cloud.jpg" alt="Cloud Icon" style="width: 80px; height: 80px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 4px 15px rgba(57, 255, 20, 0.2);" />
                <h3 style="color: var(--accent-primary); font-size: 1.3rem;">Cloud Infrastructure</h3>
                <p style="font-size: 0.9rem;">Secure, enterprise-grade orchestration for 99.9% reliable uptime.</p>
            </div>
            <!-- Tech 4 -->
            <div class="feature-card glass-panel animate-on-scroll delay-1">
                <img src="<?php echo get_template_directory_uri(); ?>/icon_analytics.jpg" alt="Analytics Icon" style="width: 80px; height: 80px; object-fit: cover; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 4px 15px rgba(57, 255, 20, 0.2);" />
                <h3 style="color: var(--accent-primary); font-size: 1.3rem;">Advanced Analytics</h3>
                <p style="font-size: 0.9rem;">Intelligent modeling and automated real-time data dashboards.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta" class="cta-section animate-on-scroll">
        <div class="cta-glass-box">
            <h2>Ready to enter the <span class="highlight">ZETABYT</span> era?</h2>
            <p>Join world-leading organizations that trust us with their data infrastructure.</p>
            <a href="<?php echo esc_url( home_url( '/get-started/' ) ); ?>" class="btn btn-primary scale-up">Start Your Journey</a>
        </div>
    </section>

<?php get_footer(); ?>