<?php
/**
 * No Content Template
 *
 * @package GlobePulse_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="gp-no-content">

	<div class="gp-no-content-inner">

		<h2>

			Nothing Found

		</h2>

		<?php if ( is_search() ) : ?>

			<p>

				Sorry, but nothing matched your search keywords.
				Try searching again.

			</p>

			<?php get_search_form(); ?>

		<?php elseif ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>

				No posts have been published yet.

			</p>

		<?php else : ?>

			<p>

				It looks like we can’t find what you’re looking for.

			</p>

			<?php get_search_form(); ?>

		<?php endif; ?>

		<p>

			<a class="gp-home-button" href="<?php echo esc_url( home_url( '/' ) ); ?>">

				← Back to Home

			</a>

		</p>

	</div>

</section>
