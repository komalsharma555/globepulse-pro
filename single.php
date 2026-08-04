<?php
/**
 * Single Post Template
 *
 * @package GlobePulse_Pro
 */

get_header();

if ( have_posts() ) :

while ( have_posts() ) :

the_post();

?>

<div class="container">

<div class="gp-single-layout">

<main class="gp-single-content">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( has_post_thumbnail() ) : ?>

<div class="gp-featured-image">

<?php the_post_thumbnail( 'full' ); ?>

</div>

<?php endif; ?>

<div class="gp-post-meta">

<span class="gp-category">

<?php the_category( ', ' ); ?>

</span>

<span>

📅 <?php echo get_the_date(); ?>

</span>

<span>

👤 <?php the_author(); ?>

</span>

</div>

<h1 class="gp-post-title">

<?php the_title(); ?>

</h1>

<div class="gp-post-content">

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

<div class="gp-post-tags">

<?php the_tags( '<strong>Tags:</strong> ', ', ' ); ?>

</div>

<div class="gp-share">

<h3>Share This Article</h3>

<a href="#">Facebook</a>

<a href="#">X</a>

<a href="#">LinkedIn</a>

<a href="#">WhatsApp</a>

<a href="#">Telegram</a>

</div>

<div class="gp-author-box">

<h3>About the Author</h3>

<div class="author-avatar">

<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>

</div>

<div class="author-info">

<h4>

<?php the_author(); ?>

</h4>

<p>

<?php the_author_meta( 'description' ); ?>

</p>

</div>

</div>

<div class="gp-post-navigation">

<div class="prev-post">

<?php previous_post_link(); ?>

</div>

<div class="next-post">

<?php next_post_link(); ?>

</div>

</div>

<div class="gp-comments">

<?php

if ( comments_open() || get_comments_number() ) {

comments_template();

}

?>

</div>

</article>

</main>

<aside class="gp-sidebar">

<?php get_sidebar(); ?>

</aside>

</div>

</div>

<?php

endwhile;

endif;

get_footer();
