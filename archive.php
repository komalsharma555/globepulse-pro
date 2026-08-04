<?php
/**
 * Archive Template
 *
 * @package GlobePulse_Pro
 */

get_header();
?>

<div class="container">

    <div class="gp-page-header">

        <h1 class="archive-title">

            <?php the_archive_title(); ?>

        </h1>

        <p class="archive-description">

            <?php the_archive_description(); ?>

        </p>

    </div>

    <div class="gp-layout">

        <main class="gp-main-content">

            <?php if ( have_posts() ) : ?>

                <div class="gp-post-grid">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <article <?php post_class( 'gp-post-card' ); ?>>

                            <a href="<?php the_permalink(); ?>">

                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'medium_large' );
                                }
                                ?>

                            </a>

                            <div class="gp-card-content">

                                <span class="gp-category">

                                    <?php the_category( ', ' ); ?>

                                </span>

                                <h2>

                                    <a href="<?php the_permalink(); ?>">

                                        <?php the_title(); ?>

                                    </a>

                                </h2>

                                <p>

                                    <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>

                                </p>

                                <a class="gp-read-more" href="<?php the_permalink(); ?>">

                                    Read More →

                                </a>

                            </div>

                        </article>

                    <?php endwhile; ?>

                </div>

                <div class="gp-pagination">

                    <?php the_posts_pagination(); ?>

                </div>

            <?php else : ?>

                <p>No posts available.</p>

            <?php endif; ?>

        </main>

        <aside class="gp-sidebar">

            <?php get_sidebar(); ?>

        </aside>

    </div>

</div>

<?php get_footer(); ?>
