<?php
/**
 * 404 Template
 *
 * @package GlobePulse_Pro
 */

get_header();
?>

<div class="container">

    <section class="gp-404-page">

        <div class="gp-404-content">

            <h1 class="error-code">

                404

            </h1>

            <h2>

                Oops! Page Not Found

            </h2>

            <p>

                The page you are looking for doesn't exist or has been moved.

            </p>

            <div class="gp-404-buttons">

                <a class="gp-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">

                    🏠 Back To Home

                </a>

            </div>

            <br>

            <?php get_search_form(); ?>

        </div>

    </section>

    <section class="gp-latest-news">

        <h2>Latest Articles</h2>

        <div class="gp-post-grid">

        <?php

        $latest = new WP_Query(

            array(

                'posts_per_page' => 6,

            )

        );

        if ( $latest->have_posts() ) :

            while ( $latest->have_posts() ) :

                $latest->the_post();

        ?>

            <article class="gp-post-card">

                <a href="<?php the_permalink(); ?>">

                    <?php

                    if ( has_post_thumbnail() ) {

                        the_post_thumbnail( 'medium' );

                    }

                    ?>

                </a>

                <h3>

                    <a href="<?php the_permalink(); ?>">

                        <?php the_title(); ?>

                    </a>

                </h3>

            </article>

        <?php

            endwhile;

            wp_reset_postdata();

        endif;

        ?>

        </div>

    </section>

</div>

<?php get_footer(); ?>
