<?php
/**
 * Template Name: Contact Us
 *
 * @package ZETABYT
 */

get_header(); ?>

    <style>
        .contact-page-wrapper {
            max-width: 600px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr;
            gap: 4rem;
            padding: 2rem;
            align-items: flex-start;
        }

        .contact-info-cards {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 2rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .info-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent-primary);
            box-shadow: 0 10px 30px rgba(57, 255, 20, 0.1);
        }

        .info-card .icon-wrapper {
            background: rgba(57, 255, 20, 0.1);
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: var(--accent-primary);
        }

        .info-card h3 {
            color: #fff;
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }

        .info-card p, .info-card a {
            color: rgba(255, 255, 255, 0.7);
            font-size: 1rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .info-card a:hover {
            color: var(--accent-primary);
        }

        @media (max-width: 900px) {
            .contact-page-wrapper {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Page Hero -->
    <section class="page-bg-cinematic" style="width: 100%; padding: 10rem 2rem 4rem; text-align: center;">
        <h1 class="hero-title" style="margin-bottom: 1rem; color: #fff; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">Contact <span class="highlight" style="color: var(--accent-primary);">Us</span></h1>
        <p class="hero-subtitle" style="margin: 0 auto; color: rgba(255,255,255,0.9);">Reach out to our team via our contact details or send a direct message.</p>
    </section>

    <!-- Contact Section -->
    <section id="contact" style="width: 100%; padding-bottom: 6rem;">
        <div class="contact-page-wrapper">
            
            <!-- Info Column -->
            <div class="contact-info-cards animate-on-scroll">
                
                <!-- Address -->
                <div class="info-card">
                    <div class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div>
                        <h3>Address</h3>
                        <p>Thiruchirapalli, India</p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="info-card">
                    <div class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    </div>
                    <div>
                        <h3>Phone</h3>
                        <a href="tel:+919791454551">+91 97914 54551</a>
                    </div>
                </div>

                <!-- Email -->
                <div class="info-card">
                    <div class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <div>
                        <h3>Email</h3>
                        <a href="mailto:info@ZETABYT.in">info@ZETABYT.in</a>
                    </div>
                </div>

            </div>

        </div>
    </section>

<?php get_footer(); ?>