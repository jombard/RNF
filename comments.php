<?php

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One reply on &ldquo;%2$s&rdquo;', '%1$s replies on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentythirteen' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="list-unstyled">
			<?php
				wp_list_comments( 'type=comment&callback=rnftheme_comment' );
			?>
		</ol><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>


		<?php

			$fields =  array(
			'author' =>
				'<div class="form-group"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
				'<input id="author" name="author" class="form-control" type="text" required value="' . esc_attr( $commenter['comment_author'] ) .
				'" ' . $aria_req . ' /></div>',

			'email' =>
				'<div class="form-group"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
				'<input id="email" name="email" class="form-control" type="email" required value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" ' . $aria_req . ' /></div>'
			);

			$comments_args = array(
				// remove "Text or HTML to be displayed before the set of comment fields"
				'comment_notes_before' => '',
				// remove "Text or HTML to be displayed after the set of comment fields"
				'comment_notes_after' => '',
				// redefine your own textarea (the comment body)
				'comment_field' => '<div class="form-group">
				<label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br />
				<textarea id="comment" class="form-control" rows="5" name="comment" required aria-required="true"></textarea>
				</div>',
				'fields' => apply_filters( 'comment_form_default_fields', $fields ),
				'class_submit' => 'btn btn-info',
			); 

			comment_form($comments_args); 
		?>
		

</div><!-- #comments -->


