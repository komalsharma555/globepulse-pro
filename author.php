<?php
/**
 * Author Archive Template
 *
 * @package GlobePulse_Pro
 */

get_header();
?>

<div class="container">

    <header class="gp-author-header">

        <div class="gp-author-avatar">

            <?php echo get_avatar( get_queried_object_id(), 120 ); ?>

        </div>

        <div class="gp-author-info">

            <h1>

                <?php the_author(); ?>

            </h1>

            <p>

                <?php the_author_meta( 'description' ); ?>

            </p>

            <p>

                Total Posts:
                <strong>

                    <?php echo count_user_posts( get_queried_object_id() ); ?>

                </strong>

            </p>

        </div>

    </header>

    <div class="gp-layout">

        <main class="gp-main-content">

            <?php if ( have_posts() ) : ?>

                <div class="gp-post-grid">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <article <?php post_class( 'gp-post-card' ); ?>>

                            <?php if ( has_post_thumbnail() ) : ?>

                                <a href="<?php the_permalink(); ?>">

                                    <?php the_post_thumbnail( 'medium_large' ); ?>

                                </a>

                            <?php endif; ?>

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

                <p>No posts published by this author.</p>

            <?php endif; ?>

        </main>

        <aside class="gp-sidebar">

            <?php get_sidebar(); ?>

        </aside>

    </div>

</div>

<?php get_footer(); ?>
