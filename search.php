<?php
/**
 * Search Results Template
 *
 * @package GlobePulse_Pro
 */

get_header();
?>

<div class="container">

    <div class="gp-page-header">

        <h1 class="search-title">

            Search Results for:

            <span>

                <?php echo esc_html( get_search_query() ); ?>

            </span>

        </h1>

    </div>

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

                                    <?php echo wp_trim_words( get_the_excerpt(), 22 ); ?>

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

                <div class="gp-no-results">

                    <h2>No Results Found</h2>

                    <p>

                        Sorry, we couldn't find anything matching your search.

                    </p>

                    <?php get_search_form(); ?>

                </div>

            <?php endif; ?>

        </main>

        <aside class="gp-sidebar">

            <?php get_sidebar(); ?>

        </aside>

    </div>

</div>

<?php get_footer(); ?>
