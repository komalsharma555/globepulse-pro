<?php
/**
 * Sidebar Template
 *
 * @package GlobePulse_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<aside id="secondary" class="gp-sidebar">

    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>

        <?php dynamic_sidebar( 'main-sidebar' ); ?>

    <?php else : ?>

        <!-- Search -->

        <section class="gp-widget">

            <h3 class="widget-title">Search</h3>

            <?php get_search_form(); ?>

        </section>

        <!-- Categories -->

        <section class="gp-widget">

            <h3 class="widget-title">Categories</h3>

            <ul>

                <?php
                wp_list_categories(
                    array(
                        'title_li' => '',
                    )
                );
                ?>

            </ul>

        </section>

        <!-- Recent Posts -->

        <section class="gp-widget">

            <h3 class="widget-title">Recent Posts</h3>

            <ul>

                <?php
                wp_get_archives(
                    array(
                        'type'  => 'postbypost',
                        'limit' => 5,
                    )
                );
                ?>

            </ul>

        </section>

        <!-- Advertisement -->

        <section class="gp-widget">

            <h3 class="widget-title">Advertisement</h3>

            <div class="gp-ad-box">

                <p>300 × 250 Ad Space</p>

            </div>

        </section>

        <!-- Newsletter -->

        <section class="gp-widget">

            <h3 class="widget-title">Newsletter</h3>

            <form>

                <input
                    type="email"
                    placeholder="Enter your email"
                    required
                >

                <button type="submit">

                    Subscribe

                </button>

            </form>

        </section>

        <!-- Follow Us -->

        <section class="gp-widget">

            <h3 class="widget-title">Follow Us</h3>

            <div class="gp-social-links">

                <a href="#">Facebook</a><br>
                <a href="#">X (Twitter)</a><br>
                <a href="#">Instagram</a><br>
                <a href="#">YouTube</a><br>
                <a href="#">LinkedIn</a><br>
                <a href="#">Telegram</a>

            </div>

        </section>

    <?php endif; ?>

</aside>
