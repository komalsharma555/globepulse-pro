<?php
/**
 * Front Page Template
 *
 * @package GlobePulse_Pro
 */

get_header();
?>

<div class="container">

    <!-- Hero Section -->

    <section class="gp-hero">

        <?php
        $hero = new WP_Query(
            array(
                'posts_per_page' => 1,
                'ignore_sticky_posts' => true
            )
        );

        if ( $hero->have_posts() ) :
            while ( $hero->have_posts() ) :
                $hero->the_post();
        ?>

        <div class="hero-left">

            <a href="<?php the_permalink(); ?>">

                <?php the_post_thumbnail( 'large' ); ?>

            </a>

            <div class="hero-content">

                <span class="hero-category">

                    <?php the_category(', '); ?>

                </span>

                <h1>

                    <a href="<?php the_permalink(); ?>">

                        <?php the_title(); ?>

                    </a>

                </h1>

                <p>

                    <?php echo wp_trim_words(get_the_excerpt(),25); ?>

                </p>

            </div>

        </div>

        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

        <div class="hero-right">

            <h2>Trending News</h2>

            <ul>

                <?php

                $trend = new WP_Query(
                    array(
                        'posts_per_page' => 5,
                        'offset' => 1
                    )
                );

                while($trend->have_posts()) :
                $trend->the_post();

                ?>

                <li>

                    <a href="<?php the_permalink(); ?>">

                        <?php the_title(); ?>

                    </a>

                </li>

                <?php endwhile; wp_reset_postdata(); ?>

            </ul>

        </div>

    </section>

    <!-- Latest News -->

    <section class="gp-section">

        <h2>Latest News</h2>

        <div class="gp-post-grid">

        <?php

        $latest = new WP_Query(
            array(
                'posts_per_page' => 6
            )
        );

        while($latest->have_posts()) :
        $latest->the_post();

        ?>

        <article class="gp-card">

            <a href="<?php the_permalink(); ?>">

                <?php the_post_thumbnail('medium_large'); ?>

            </a>

            <div class="card-content">

                <span>

                    <?php the_category(', '); ?>

                </span>

                <h3>

                    <a href="<?php the_permalink(); ?>">

                        <?php the_title(); ?>

                    </a>

                </h3>

                <p>

                    <?php echo wp_trim_words(get_the_excerpt(),18); ?>

                </p>

            </div>

        </article>

        <?php endwhile; wp_reset_postdata(); ?>

        </div>

    </section>

    <!-- Advertisement -->

    <section class="gp-ad">

        <h3>Advertisement</h3>

        <div class="ad-box">

            728 × 90 Banner Area

        </div>

    </section>

    <!-- Technology -->

    <section class="gp-section">

        <h2>Technology</h2>

        <?php echo do_shortcode('[category_posts category="technology" posts="4"]'); ?>

    </section>

    <!-- Sports -->

    <section class="gp-section">

        <h2>Sports</h2>

        <?php echo do_shortcode('[category_posts category="sports" posts="4"]'); ?>

    </section>

    <!-- Education -->

    <section class="gp-section">

        <h2>Education</h2>

        <?php echo do_shortcode('[category_posts category="education" posts="4"]'); ?>

    </section>

</div>

<?php get_footer(); ?>
