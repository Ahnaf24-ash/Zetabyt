<?php
/**
 * Template Name: Get Started
 *
 * @package ZETABYT
 */

get_header(); ?>

    <!-- Page Hero -->
    <section class="page-bg-cinematic" style="width: 100%; padding: 10rem 2rem 6rem; text-align: center;">
        <h1 class="hero-title" style="margin-bottom: 1rem; color: #fff; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">Get <span class="highlight" style="color: var(--accent-primary);">Started</span></h1>
        <p class="hero-subtitle" style="margin: 0 auto; color: rgba(255,255,255,0.9);">Fill out the form below and our team will get back to you shortly.</p>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section animate-on-scroll" style="width: 100%; padding-top: 4rem;">
        <div class="contact-container glass-panel">
            <form class="contact-form" action="" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" pattern="[0-9]+" oninput="this.value = this.value.replace(/[^0-9]/g, '')" title="Please enter numbers only" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="Enter your message..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary submit-btn">Submit Request</button>
            </form>
        </div>
    </section>

<?php get_footer(); ?>