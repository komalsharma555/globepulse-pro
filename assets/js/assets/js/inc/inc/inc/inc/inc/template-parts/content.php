<?php
/**
 * Default Content Template
 *
 * @package GlobePulse_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'gp-post-card' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>

		<div class="gp-post-thumbnail">

			<a href="<?php the_permalink(); ?>">

				<?php the_post_thumbnail( 'medium_large' ); ?>

			</a>

		</div>

	<?php endif; ?>

	<div class="gp-post-content">

		<div class="gp-post-meta">

			<span class="gp-category">

				<?php the_category( ', ' ); ?>

			</span>

			<span class="gp-date">

				<?php echo esc_html( get_the_date() ); ?>

			</span>

		</div>

		<h2 class="gp-post-title">

			<a href="<?php the_permalink(); ?>">

				<?php the_title(); ?>

			</a>

		</h2>

		<div class="gp-excerpt">

			<?php the_excerpt(); ?>

		</div>

		<a class="gp-read-more" href="<?php the_permalink(); ?>">

			Read More →

		</a>

	</div>

</article>
