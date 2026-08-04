<?php
/**
 * Main Template File
 *
 * @package GlobePulse_Pro
 */

get_header();
?>

<div class="container">

    <main class="gp-main-content">

        <!-- Hero Section -->

        <?php
        $featured = new WP_Query(
            array(
                'posts_per_page' => 1,
                'ignore_sticky_posts' => true,
            )
        );

        if ( $featured->have_posts() ) :
            while ( $featured->have_posts() ) :
                $featured->the_post();
        ?>

        <section class="gp-hero-post">

            <?php if ( has_post_thumbnail() ) : ?>

                <a href="<?php the_permalink(); ?>">

                    <?php the_post_thumbnail( 'large' ); ?>

                </a>

            <?php endif; ?>

            <div class="gp-hero-content">

                <span class="gp-category">
                    <?php the_category( ', ' ); ?>
                </span>

                <h1>

                    <a href="<?php the_permalink(); ?>">

                        <?php the_title(); ?>

                    </a>

                </h1>

                <p>

                    <?php echo wp_trim_words( get_the_excerpt(), 30 ); ?>

                </p>

            </div>

        </section>

        <?php

            endwhile;
            wp_reset_postdata();
        endif;

        ?>

        <!-- Latest Posts -->

        <section class="gp-latest-posts">

            <h2>Latest News</h2>

            <div class="gp-post-grid">

            <?php

            if ( have_posts() ) :

                while ( have_posts() ) :

                    the_post();

            ?>

                <article class="gp-post-card">

                    <a href="<?php the_permalink(); ?>">

                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'medium' );
                        }
                        ?>

                    </a>

                    <div class="gp-post-content">

                        <span class="gp-category">

                            <?php the_category( ', ' ); ?>

                        </span>

                        <h3>

                            <a href="<?php the_permalink(); ?>">

                                <?php the_title(); ?>

                            </a>

                        </h3>

                        <p>

                            <?php echo wp_trim_words( get_the_excerpt(), 18 ); ?>

                        </p>

                        <a class="read-more" href="<?php the_permalink(); ?>">

                            Read More →

                        </a>

                    </div>

                </article>

            <?php

                endwhile;

            else :

            ?>

                <p>No posts found.</p>

            <?php endif; ?>

            </div>

        </section>

        <!-- Pagination -->

        <div class="gp-pagination">

            <?php the_posts_pagination(); ?>

        </div>

    </main>

    <aside class="gp-sidebar">

        <?php get_sidebar(); ?>

    </aside>

</div>

<?php
get_footer();
