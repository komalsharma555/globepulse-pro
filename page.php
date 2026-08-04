<?php
/**
 * Page Template
 *
 * @package GlobePulse_Pro
 */

get_header();
?>

<div class="container">

    <div class="gp-page-layout">

        <main class="gp-page-content">

            <?php
            while ( have_posts() ) :
                the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php if ( has_post_thumbnail() ) : ?>

                    <div class="gp-page-image">

                        <?php the_post_thumbnail( 'full' ); ?>

                    </div>

                <?php endif; ?>

                <header class="gp-page-header">

                    <h1 class="gp-page-title">

                        <?php the_title(); ?>

                    </h1>

                </header>

                <div class="gp-page-body">

                    <?php the_content(); ?>

                    <?php
                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">',
                            'after'  => '</div>',
                        )
                    );
                    ?>

                </div>

            </article>

            <?php
            endwhile;
            ?>

        </main>

        <aside class="gp-sidebar">

            <?php get_sidebar(); ?>

        </aside>

    </div>

</div>

<?php
get_footer();
