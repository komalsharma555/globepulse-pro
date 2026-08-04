<?php
/**
 * Single Content Template
 *
 * @package GlobePulse_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'gp-single-post' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>

		<div class="gp-featured-image">

			<?php the_post_thumbnail( 'full' ); ?>

		</div>

	<?php endif; ?>

	<header class="gp-entry-header">

		<div class="gp-post-meta">

			<span class="gp-category">

				<?php the_category( ', ' ); ?>

			</span>

			<span class="gp-date">

				<?php echo esc_html( get_the_date() ); ?>

			</span>

			<span class="gp-author">

				<?php the_author_posts_link(); ?>

			</span>

		</div>

		<h1 class="gp-entry-title">

			<?php the_title(); ?>

		</h1>

	</header>

	<div class="gp-entry-content">

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

	<footer class="gp-entry-footer">

		<div class="gp-tags">

			<?php the_tags( '<strong>Tags:</strong> ', ', ', '' ); ?>

		</div>

		<div class="gp-share-links">

			<h3>Share This Post</h3>

			<a href="#">Facebook</a>

			<a href="#">X</a>

			<a href="#">LinkedIn</a>

			<a href="#">WhatsApp</a>

			<a href="#">Telegram</a>

		</div>

	</footer>

</article>

<?php

if ( comments_open() || get_comments_number() ) {

	comments_template();

}
