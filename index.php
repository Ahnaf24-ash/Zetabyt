<?php
/**
 * The main template file / Blog Index
 *
 * @package ZETABYT
 */

get_header(); ?>

    <!-- Page Hero -->
    <section class="page-bg-cinematic" style="width: 100%; padding: 10rem 2rem 6rem; text-align: center;">
        <h1 class="hero-title" style="margin-bottom: 1rem; color: #fff; text-shadow: 0 2px 10px rgba(0,0,0,0.5);"><span class="highlight" style="color: var(--accent-primary);">Blog</span> Updates</h1>
        <p class="hero-subtitle" style="margin: 0 auto; color: rgba(255,255,255,0.9);">Our latest news, technical thoughts, and insights.</p>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="features-section" style="width: 100%; padding-top: 4rem;">
        <div class="features-grid">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <div class="feature-card glass-panel animate-on-scroll">
                        <h3><a href="<?php echo esc_url( get_permalink() ); ?>" style="color: var(--text-primary); text-decoration: none;"><?php the_title(); ?></a></h3>
                        <p style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 1rem;">
                            <?php echo get_the_date(); ?> by <?php the_author(); ?>
                        </p>
                        <p><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-outline tech-btn" style="margin-top: 1rem; border: 1px solid var(--accent-primary); color: var(--accent-primary); background: transparent; padding: 0.5rem; text-decoration: none; display: inline-block; border-radius: 4px; transition: all 0.3s ease;">Read More</a>
                    </div>
                    <?php
                endwhile;
            else :
                ?>
                <div class="feature-card glass-panel animate-on-scroll" style="grid-column: 1 / -1; text-align: center;">
                    <h3>No posts found</h3>
                    <p>It seems we haven't published anything yet. Please check back later.</p>
                </div>
                <?php
            endif;
            ?>
        </div>
        
        <!-- Pagination -->
        <?php if ( have_posts() ) : ?>
        <div style="margin-top: 3rem; text-align: center;">
            <?php 
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '<span class="highlight">Previously</span>',
                    'next_text' => '<span class="highlight">Next Page</span>',
                ) ); 
            ?>
        </div>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>