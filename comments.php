<?php
/**
 * Comments Template
 *
 * @package GlobePulse_Pro
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="gp-comments-area">

    <?php if ( have_comments() ) : ?>

        <h2 class="comments-title">

            <?php
            printf(
                esc_html(
                    _nx(
                        '%1$s Comment',
                        '%1$s Comments',
                        get_comments_number(),
                        'comments title',
                        'globepulse-pro'
                    )
                ),
                number_format_i18n( get_comments_number() )
            );
            ?>

        </h2>

        <ol class="comment-list">

            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size'=> 60,
                )
            );
            ?>

        </ol>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

    <?php

    if ( ! comments_open() && get_comments_number() ) :

    ?>

        <p class="no-comments">

            Comments are closed.

        </p>

    <?php endif; ?>

    <?php

    comment_form(

        array(

            'title_reply' => 'Leave a Comment',

            'label_submit' => 'Post Comment',

        )

    );

    ?>

</div>
